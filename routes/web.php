<?php

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

Route::get('/route-2', function () {
    return  DB::table('users')->count();
});

Route::get('/affCount2', 'CountController@affCount2');

Route::get('/affCount3', 'CountController@affCount3');

Route::get('/affCount4', 'CountController@affCount4');

Route::get('/affCount5', 'CountController@affCount5');