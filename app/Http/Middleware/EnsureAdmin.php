<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsureAdmin
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

        // User logged in but not admin
        if (!$user->isAdmin()) {
            return redirect('/')
                ->with('error', 'You do not have admin access.');
        }

        return $next($request);
    }
}
