<?php

namespace App\Http\Middleware;

use App\Http\Controllers\NavController;
use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\View;

class Navigation
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {

        //$test = redirect()->route("nav");
        ddd(redirect()->route('nav'));
        //ddd(Http::acceptJson()->get(route('nav')));


        //return User::all();
        return $next($request);
    }
}
