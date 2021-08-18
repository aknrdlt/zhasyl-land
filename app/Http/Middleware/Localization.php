<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Localization
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (Session::get('locale') != null) {
            App::setlocale(Session::get('locale'));
        }else {
            App::setlocale('ru');
        }
        return $next($request);    }
}
