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

Route::auth();
Route::namespace('App\Http\Controllers')->group(function() {
    Route::get('/','AuthController@index');
    Route::post('login','AuthController@login'); // Logic For Login
    Route::get('register','AuthController@register');
    Route::post('reg','AuthController@reg'); // Logic For Registration
    Route::get('verify','AuthController@verify')->name('verify');
    Route::get('resend-otp','AuthController@resendOtp')->name('resend-otp');
    Route::post('verify_otp','AuthController@verifyOtp');
});

Route::group(['middleware' => 'authcheck'], function() {
    Route::namespace('App\Http\Controllers\Auth')->group(function() {
        Route::get('logout','AuthController@logout');
        Route::get('forget-password','AuthController@forget_password');
        Route::post('forget-password','AuthController@forget_pass');
    });
    
});