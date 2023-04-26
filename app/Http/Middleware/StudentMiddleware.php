<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class StudentMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check()){
            if (Auth::user()->role == '0'){
                return $next($request);
            }else{
                return redirect('/student/login')->with('message','Access Denied as you are not student');
            }

        }else{
            return redirect('/admin/login')->with('message', 'Login to access website');
        }

        return $next($request);
    }
}
