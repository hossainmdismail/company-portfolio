<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RedirectToPreferredDomain
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (str_starts_with($request->getHttpHost(), 'www.')) {
            $newUrl = 'https://synexdigital.com' . $request->getRequestUri();
            return redirect()->away($newUrl, 301); // 301 for permanent redirect
        }

        return $next($request);
    }
}
