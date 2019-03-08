<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use QrCode;
use App\Account;
use Illuminate\Support\Facades\Mail;
use App\Mail\UserEmail;
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
    public  function verify($verify)
    {
        if(User::whereVerify_link($verify)->exists()){
            $user=User::whereVerify_link($verify)->first();
            $user->verified=1;
            if($user->save()){
                Session::flash('message','You have successfully been verified');
                return redirect('/login');
            }
        }
    }
    //check if number exist
    public function genKeyExists($number){
        return User::wherePrivate_key($number)->exists();
    }
    //user registeration
    public function register(Request $request)
    {
        // var_dump(User::wherePhone($request->phone)->exists());
        if(User::wherePhone($request->phone)->exists() || User::whereEmail($request->email)->exists()){
            
            return response()->json([
                "status"=>"405",
                "message"=>"Phone number or Email already exist. you can click on forgot password to recover your password"
            ]);
        }elseif(strlen($request->password) <6){
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
            $user->verified_link=uniqid();
            if($user->save()){
                $account=new Account;
                $account->user_id=$user->id;
                $account->private_key=uniqid();
                $account->account_number=$user->phone;
                
                if($account->save()){
                    QrCode::size(500)->format('png')->generate($account->account_number, public_path("images/qrcodes/{$account->account_number}.png"));
                    Mail::to($request->email)->send(new UserEmail($user));
                    
                    return response()->json([
                        "status"=>201,
                        "message"=>"you have successfully registered into our system",
                        "account_details"=>[
                            "name"=>$user->name,
                            "account_number"=>$user->phone,
                            "private_key"=>$account->private_key,
                            "balance"=>0
                        ]
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
                    "account_details"=>[
                            "account_number"=>$user->phone,
                            "private_key"=>$user->account->private_key,
                            "balance"=>$user->account->balance
                    ]
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
