<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;

class Language
{
    /**
     * Handle an incoming request.
     *
     * @param \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response) $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Session::has('applocale') && array_key_exists(Session::get('applocale'), Config::get('language')))
            app()->setLocale(Session::get('applocale'));
        else
            app()->setLocale(Config::get('app.fallback_locale'));
        return $next($request);
    }
}
