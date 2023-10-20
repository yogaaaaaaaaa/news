<?php

namespace App\Http\Middleware;

use Closure;
use Carbon\Carbon;

class ActivityCheck
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
        checkActivity();

        return $next($request);
    }
}

function checkActivity()
{
    $lastActivity = session()->get('last_activity');
    $now = Carbon::now();

    if ($now->diffInMinutes($lastActivity) >= config('session.lifetime')) {
        session()->invalidate();
    } else {
        session()->put('last_activity', $now);
    }
}