<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Account;
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
                return view('home');
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
        if(User::wherePhone($request->phone) || User::whereEmail($request->email)){
            return response()->json([
                "status"=>"405",
                "message"=>"Phone number or Email already exist. you can click on forgot password to recover your password"
            ]);
        }elseif(str_len($request->password) >=6){
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
                $account->balance=$user->balance;
                $user->private_key=uniqid();
                if($account->save()){
                    if(Mail::to($request->email)->send(new UserEmail($user)))
                    {
                    return response()->json([
                        "status"=>200,
                        "message"=>"you have successfully registered into our system",
                        "account_details"=>[
                            "name"=>$user->name,
                            "account_number"=>$user->phone,
                            "private_key"=>$user->private_key
                        ]
                    ]);
                }
                }
            }
        }
    }

    public function login(Request $request){
        return;
    }
}
