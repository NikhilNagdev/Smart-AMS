<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;
use App\user_role;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            $user_id = Auth::user()->id;
            $user_role = new user_role();
            $user = $user_role->where('user_id',$user_id)->get();
            if($user[0]->role_id == 2){
                return redirect('/officer/index');
            }
            else{
                return redirect('/admin/index');
            }

        }

        return $next($request);
    }
}
