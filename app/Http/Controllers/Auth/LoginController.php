<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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
       exit('11111111111');
        exit('222222222');
        exit('333333');
        exit('4444444444');
        exit('55555555');
        exit('666666');
        exit('77777777');
        exit('888888888');
        exit('9999999');
        exit('101010101010');
        exit('12121212121212');
        $this->middleware('guest')->except('logout');
    }
}
