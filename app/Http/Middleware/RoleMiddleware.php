<?php

namespace App\Http\Middleware;

use Closure;

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
        foreach (auth()->user()->roles as $role)
        {
            if (!$role == 'super_admin')
            {
               return redirect('home');
            }
        }

        return $next($request);
    }
}
