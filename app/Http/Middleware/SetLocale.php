<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class SetLocale
{
   

    

    public function handle($request, Closure $next)
{
    app()->setLocale(session('user_locale', 'en'));
    return $next($request);
}
}
