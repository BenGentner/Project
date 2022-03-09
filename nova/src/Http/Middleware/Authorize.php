<?php

namespace Laravel\Nova\Http\Middleware;

use Illuminate\Support\Facades\Auth;
use Laravel\Nova\Nova;
use function Psy\debug;

class Authorize
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return \Illuminate\Http\Response
     */
    public function handle($request, $next)
    {
        if(request()->getRequestUri() == "/nova/logout")
        {
            Auth::logout();
            return redirect("/");
        }
        if (Auth::check() && Auth::user()->role->name == 'admin') {
            return $next($request);
        }
        abort(403);


    }
}
