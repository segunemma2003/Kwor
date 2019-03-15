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

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
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
    protected function credentials(Request $request)
    {
        dd($request->get($this->phone()));
        $field = filter_var($request->get($this->phone()), FILTER_VALIDATE_EMAIL)
            ? $this->phone()
            : 'phone';

        return [
            $field => $request->get($this->phone()),
            'password' => $request->password,
        ];
    }
    // public function field(Request $request)
    // {
    //     $email = $this->phone();

    //     return filter_var($request->get($email), FILTER_VALIDATE_EMAIL) ? $email : 'email';
    // }
    // protected function validateLogin(Request $request)
    // {
    //     $field = $this->field($request);

    //     $messages = ["{$this->phone()}.exists" => 'The account you are trying to login is not registered or it has been disabled.'];

    //     $this->validate($request , [
    //         $this->phone() => "required|exists:users,{$field}",
    //         'password' => 'required',
    //     ], $messages);
    // }

}
