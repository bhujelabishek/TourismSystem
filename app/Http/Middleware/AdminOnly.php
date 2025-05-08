<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminOnly
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {  // Replace this with your actual admin email
        $adminEmail = 'abishekbhujel23@gmail.com';

        // Check if user is logged in and is the admin
        if (Auth::check() && Auth::user()->email === $adminEmail) {
            return $next($request); // Allow access
        }

        // Not authorized → redirect to login or home
        return redirect('/login')->with('error', 'Unauthorized access.');
    }
}
