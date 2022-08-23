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


Route::post('cek', 'CekController@cek')->name('cek');

Route::prefix('facebook')->name('facebook.')->group(function () {
    Route::get('auth', 'CekController@loginUsingFacebook')->name('login');
    Route::get('callback', 'CekController@callbackFromFacebook')->name('callback');
});
