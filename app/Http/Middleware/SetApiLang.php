<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SetApiLang {

  public function handle(Request $request, Closure $next) {

    $lang = $request->server('HTTP_ACCEPT_LANGUAGE');

    if (str_starts_with($lang, 'de')) {

      \DB::select('SET @API_LANG :="de"');
    } else {
      \DB::select('SET @API_LANG :="en"');
    }
    return $next($request);
  }

}