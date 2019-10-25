<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Staff
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(!Auth::check()) {
            return redirect(route('login'));
        } else {
            $user = Auth::user();
            if($user->hasAnyRole(['developer','admin','officer']))
            {
                return $next($request);
            } else {
                return redirect(route('home'));
            }
        }
    }
}
