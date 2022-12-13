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

Route::get('/contracts', function () {
    return view('contracts');
});

Route::get('/contract/{id}', function ($id) {
    $contract = DB::select('call prc_contract_status_v2(?)',[$id]);
    return response()->json([
        'contract' => view('contract')->with('contract',$contract)->render()
    ]);
});