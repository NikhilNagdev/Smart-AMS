<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use App\user_role;

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

    protected function authenticated() {
        if (Auth::check()) {
            $is_verified = Auth::user()->is_verified;
            $user_id = Auth::user()->id;
            $user_role = new user_role();
            $user = $user_role->where('user_id',$user_id)->get();
            if($user[0]->role_id == 2 && $is_verified == 1){
                return redirect('/officer/index');
            }
            else if($user[0]->role_id == 1 && $is_verified == 1){
                return redirect('/admin/index');
            }
        }
    }
}
