<?php

use App\Http\Controllers;

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

Route::get('/push', 'MainController@push');

Route::get('/', 'MainController');

Route::get('/status', 'MainController@getStatus');
Route::get('/{id}/lock', 'MainController@lock');
Route::get('/{id}/unlock', 'MainController@unlock');

Route::get('/history', function () {
    return view('history');
});
