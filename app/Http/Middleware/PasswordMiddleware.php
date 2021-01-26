<?php

namespace App\Http\Middleware;

use App\User;
use Closure;

class PasswordMiddleware
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
        
        if ($user=User::where('email',$request->user)->where('password_token',$request->token)->first()) {
            if (!$user->verified) {
                return $next($request);
            }else{

                abort(401,"Usuario ya fue activado");
            }
        }else{
            abort(404);
        }
        
    }
}
