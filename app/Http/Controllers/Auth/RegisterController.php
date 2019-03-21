<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use App\Mail\UserEmail;
use Illuminate\Http\Request;
use QrCode;
use App\Account;
use Alert;
use Nexmo;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'firstName' => ['required', 'string', 'max:255'],
            'lastName' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'phone'=>['required','unique:users'],
            
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $user=User::create([
            'name' => $data['firstName']." ".$data["lastName"],
            'phone' => $data['phone'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'verified_link'=>mt_rand(10000,99999),
        ]);
        
        $account=new Account;
        $account->user_id=$user->id;
        $account->private_key=uniqid();
        $account->account_number=$user->phone;
        if($account->save()){
        // $mess=Nexmo::message()->send([
        //     'to'=>$user->phone,
        //     'from'=>'KWOR',
        //     'text'=>" your verification code {$user->verified_link}."
        // ]);
        QrCode::size(1000)->format('png')->generate($account->account_number, public_path("images/qrcodes/{$account->account_number}.png"));
        Mail::to($user->email)->send(new UserEmail($user));
        // $mess=Nexmo::message()->send([
        //     'to'=>$user->phone,
        //     'from'=>'KWOR',
        //     'text'=>"Check your mail to verify your account"
        // ]);
        // Alert::success('Success','You successfully registered!!!,check your mail to verify your account');
        }else{
            Alert::error('Registration Failed','Opps Something went wrong');
        }
        return $user;
    }
    protected function registered(Request $request, $user)
    {
        $this->guard()->logout();
        Alert::error('status', 'You need to confirm your account. We have sent you an activation code, if you can\'t find it in your inbox, check your spam');
        return redirect('/login')->with('status', 'You need to confirm your account. We have sent you an activation code, if you can\'t find it in your inbox, check your spam');
    }
}
