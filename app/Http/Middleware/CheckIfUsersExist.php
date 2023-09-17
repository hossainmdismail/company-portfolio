<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

class CheckIfUsersExist
{
    public function handle($request, Closure $next)
    {
        if (Auth::check()) {
            // User is already logged in, no need to check
            return $next($request);
        }

        // Check if the current route is the registration route
        if (Route::is('register')) {
            $userCount = \App\Models\User::count();

            if ($userCount > 0) {
                // Users exist in the database, deny access to registration
                return redirect()->route('home')->with('err', 'Registration is not allowed at this time.');
            }
        }

        return $next($request);
    }
}