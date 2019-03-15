<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Alert;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';
    protected $phone;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->phone=$this->findPhone();
        $this->middleware('guest')->except('logout');
    }
    public function findPhone()
    {
        $phone=request()->input('email');
        $fieldType=filter_var($phone,FILTER_VALIDATE_EMAIL) ? 'email' :'phone';
    request()->merge([$fieldType=>$phone]);
    return $fieldType;
    }
    public function phone()
    {
        return $this->phone;
    }
    public function authenticated(Request $request, $user)
    {
        if (!$user->verified) {
            auth()->logout();
            Alert::warning('warning','You need to confirm your account. We have sent you an activation code, if you can\'t find it in your inbox, check your spam');
            return back()->with('warning', 'You need to confirm your account. We have sent you an activation code, if you can\'t find it in your inbox, check your spam' );
        }
        return redirect()->intended($this->redirectPath());
    }

    public function credentials(Request $request)
    {
       $credentials=$request->only($this->phone(),'password');
       return $credentials;
    }

}
