<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class LockerInUse
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        $lockerid = $request->route('locker');
        $locker = \App\Models\Locker::find($lockerid);

        // dd($locker);

        if($locker->status == 'inUse' || $locker->status == 'unavailable') {
            // If the locker is in use or unavailable, redirect back with an error message
            return redirect()->back()
                ->with('error', 'This locker is already in use.');
        }

        return $next($request);
    }
}
