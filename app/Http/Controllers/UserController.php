<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use QrCode;
use App\Account;
use Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\UserEmail;

use App\Mail\ResetMail;
use App\Android;
use Session;
use Nexmo;
use Alert;
use App\Password;
use App\CustomClass\Pushy;
// use Twilio\Jwt\ClientToken;
// use GuzzleHttp\Exception\GuzzleException;
// use GuzzleHttp\Client;
// use Twilio\Rest\Client;
use Twilio;

class UserController extends Controller
{
    //generate key
    public function generateKey(){
        $number =uniqid();
        if($this->genKeyExists($number)){
            return $this->generateKey();
        }else{
            return $number;
        }
    }
    public function logins(Request $request)
    {
        dd($request->phone);
        if(User::wherePhone($request->phone)->wherePassword(\Hash::make($request->password))->exists())
        {
            $user=User::wherePhone($request->phone)->wherePassword(\Hash::make($request->password))->first();
            dd(User::wherePhone($request->phone)->wherePassword(\Hash::make($request->password)));
            Auth::login($user);
        }else{
            Alert::error('ERROR','You inputed wrong incredentials');
            return redirect('/login')->with('warning','wrong incredentials');
        }
    }
    public  function verify($verify,$id)
    {
        if(User::whereVerified_link($verify)->whereId($id)->exists()){
            $user=User::whereVerified_link($verify)->whereId($id)->first();
            $user->verified=1;
            if($user->save()){
                Alert::success('message','You have successfully been verified');
                return redirect('/login');
            }
        }else{
            Alert::error('error','You have not been verified');
            return redirect('/login')->with('warning', "Sorry your email cannot be identified.");
        }
    }
    public function verifyApi(Request $request)
    {
        if(User::whereVerified_link($request->code)->exists()){
            $user=User::whereVerified_link($request->code)->first();
            $user->verified=1;
            if($user->save()){
                return response()->json([
                    "status"=>201,
                    "message"=>"you have been verified"
                ]);
            }else{
                return response()->json([
                    "status"=>401,
                    "message"=>"you are not verified"
                ]);
            }
        }
        
    }
    public function forgotten(Request $request)
    {
        if(!User::wherePhone($request->phone)->exists()){
            return response()->json([
                "status"=>419,
                "message"=>'email does not exist'
            ]);
        }
        $user=User::wherePhone($request->phone)->first();

        $user_token=new Password;
        $user_token->email=$user->email;
        $user_token->token=uniqid();
        $user_token->save();
        Mail::to($user->email)->send(new ResetMail($user_token));
        return response()->json([
            "status"=>201,
            "message"=>"Check your mail to complete password reset"
        ]);


        
    }
    public function forgottend($id)
    {
        $user=Password::whereToken($id)->first();
        $users=User::whereEmail($user->email)->first();
        $user->delete();
        return view('auth.passwords.reset',compact('users'));
    }
    //check if number exist
    public function genKeyExists($number){
        return User::wherePrivate_key($number)->exists();
    }
    //user registeration
    public function register(Request $request)
    {
        // var_dump(User::wherePhone($request->phone)->exists());
        if(Android::whereToken($request->token)->exists()){
            return response()->json([
                "status"=>"415",
                "message"=>"Device token already exist. you can click on forgot password to recover your password"
            ]);
        }
        elseif(User::wherePhone($request->phone)->exists() || User::whereEmail($request->email)->exists()){
            
            return response()->json([
                "status"=>"405",
                "message"=>"Phone number or Email already exist. you can click on forgot password to recover your password"
            ]);
        }elseif(strlen($request->password)<6){
            return response()->json([
                "status"=>"406",
                "message"=>"password must be more than six characters"
            ]);
        }else{
            $user=new User;
            $user->phone=$request->phone;
            $user->email=$request->email;
            $user->name=$request->name;
            $user->password=\Hash::make($request->password);
            $user->verified_link=mt_rand(10000,99999);
            if($user->save()){
                $account=new Account;
                $account->user_id=$user->id;
                $account->private_key=uniqid();
                $account->account_number=$user->phone;
                
                // $accountId=config('services.twilio')['TWILIO_ACCOUNT_SID'];
                // $authToken=config('services.twilio')['TWILIO_AUTH_TOKEN'];
                // $client=new Client($accountId,$authToken);
                // $mess=Nexmo::message()->send([
                //     'to'=>$user->phone,
                //     'from'=>'KWUO',
                //     'text'=>"your verification code {$user->verified_link}"
                // ]);
                // var_dump($mess);
                if($account->save()){
                
                //     $client->messages->create(
                //         $user->phone,[
                //     "body"=>"CODE: ".$user->verified_link,
                //     'from'=>'+18139060805'
                // ]);
                    // Twilio::message($message,$op='otp only',false,true,false);
                    $pushy=new Android;
                    $pushy->user_id=$user->id;
                    $pushy->token=$request->token;
                    $pushy->save();
                    QrCode::size(500)->format('png')->generate($account->account_number, public_path("images/qrcodes/{$account->account_number}.png"));
                    Mail::to($request->email)->send(new UserEmail($user));
                    $options=[
                        'notification'=>[
                            'badge'=>1,
                            'sound'=>'ping.aiff',
                            'body'=>'Alert'
                        ]
                        ];
                Pushy::sendPushNotification('hello',$request->token,$options);
                    return response()->json([
                        "status"=>201,
                        "message"=>"you have successfully registered into our system",
                        "name"=>$user->name,
                        "account_number"=>$user->phone,
                        "private_key"=>$account->private_key,
                        "balance"=>0
                        
                    ]);
                
                }
            }
        }
    }

    public function login(Request $request){
        if(!User::wherePhone($request->phone)->exists()){
            return response()->json([
                "status"=>405,
                "message"=>"No account for this user"
            ]);
        }else{
            if(User::wherePhone($request->phone)->wherePassword(\Hash::make($request->password))){
                $user=User::wherePhone($request->phone)->first();
                if($user->verified==0){
                    return response()->json([
                        "status"=>305,
                        "message"=>"You have not yet verified your account"
                    ]);
                }elseif($user->verified==1){
                    return response()->json([
                    "status"=>200,
                    "message"=>"You have successfully login",
                    "account_number"=>$user->phone,
                    "private_key"=>$user->account->private_key,
                    "balance"=>$user->account->balance,
                    'email'=>$user->email,
                    'name'=>$user->name
                    
                ]);
                }
            }else{
                return response()->json([
                    "status"=>402,
                    "message"=>"Login not successful"
                ]);
            }
        }
    }
}
