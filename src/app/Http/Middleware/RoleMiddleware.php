<?php

namespace App\Http\Middleware;

use App\User;
use Closure;
use Symfony\Component\HttpKernel\Exception\HttpException;

class RoleMiddleware
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
        if(!in_array(\Auth::user()->role,[User::ROLE_ADMINISTRATOR, User::ROLE_EDITOR])) {
            return redirect('/');
        }
        return $next($request);
    }
}
