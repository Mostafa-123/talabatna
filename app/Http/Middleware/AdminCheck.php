<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(!session()->has('LoggedUser') && $request->path() != 'auth/login'){
            return redirect('auth/login')->with('fail', 'You must login first');
        }

        if(session()->has('LoggedUser') && $request->path() == 'auth/login'){
            return redirect('admin/dashboard');
        }
        return $next($request);
    }
}
