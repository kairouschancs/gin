<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    //----Login後の移動---------------------------------
    public function redirectPath()
    {
        return '/dashboard';
    }
    //----Logout Sys-----------------------------------
    protected function loggedOut(\Illuminate\Http\Request $request) {
        return redirect('login');
        }

    //----追記-----------------------------------------
    //emailの代わりに『employee_id』を指定する
    public function username()
    {
        return 'employee_id';
    }
}
