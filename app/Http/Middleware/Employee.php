<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Employee
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = $request->user();

        // User not logged in
        if (!$user) {
            return redirect(route('login'))
                ->with('error', 'You must be logged in.');
        }
        // User logged in but not employee
        if (!$user->isEmployee()) {
            return redirect('/')
                ->with('error', 'You do not have employee access.');
        }

        return $next($request);
    }
}
