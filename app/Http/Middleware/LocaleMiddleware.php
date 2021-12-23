<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class LocaleMiddleware
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
     $locale = substr($request->server('HTTP_ACCEPT_LANGUAGE'), 0, 2);

     if (session()->has('locale')) {
        \App::setLocale(session()->get('locale'));
        return $next($request);
     }elseif(in_array($locale, config('app.locales'))) {
            \App::setLocale($locale);
            session()->put('locale', $locale);
            return $next($request);
        }
        return $next($request);   
     }
}
