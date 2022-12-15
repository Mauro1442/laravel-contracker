<?php

namespace App\Http\Middleware;

use Closure;
//use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

class SetApiLang {

  public function handle(Request $request, Closure $next) {

    $lang = $request->server('HTTP_ACCEPT_LANGUAGE');

    if (str_starts_with($lang, 'de')) {
        \Config::set('database.locale', $lang);
        \App::setLocale('de');
    } else {
     //   \Config::set('database.default', 'en');
        \App::setLocale('en');
    }
    
    return $next($request);
  }
}