<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dbconn', function () {
    return view('dbconn');
});

Route::get('/contract/{id}', function ($id) {

    //$locale = $request->header('Accept-Language');

  //  DB::select('SET @API_LANG :="$locale"');
    
   /* if (App::isLocale('en')) {
        
    }*/
    Request::server('HTTP_ACCEPT_LANGUAGE');

    $contract = DB::select('call prc_contract_status_v3(?)',[$id]);

    return $contract[0]->{'result'};

});