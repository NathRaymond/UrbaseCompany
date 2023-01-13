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
    Route::post('loginpage','AuthController@loginpage'); // Logic For Login
    Route::get('register','AuthController@register');
    Route::post('reg','AuthController@reg'); // Logic For Registration
    Route::get('verify','AuthController@verify')->name('verify');
    Route::get('resend-otp','AuthController@resendOtp')->name('resend-otp');
    Route::post('verify_otp','AuthController@verifyOtp');
});

// Route::group(['middleware' => 'authcheck'], function() {
    Route::namespace('App\Http\Controllers')->group(function() {
        Route::get('logout','AuthController@logout')->name('logout');
        Route::get('login','AuthController@login')->name('login');
        Route::get('forget-password','AuthController@forget_password');
        Route::post('forget-password','AuthController@forget_pass');
    });

    Route::namespace('App\Http\Controllers')->group(function() {
    
        Route::post('hire','AuthController@hire');
        Route::post('hire','AuthController@hire');
        Route::post('standup','AuthController@standup');
        Route::post('wellbeing','AuthController@wellbeing');
        Route::post('billings','AuthController@hire');
        Route::post('support','AuthController@support');
        Route::post('tour','AuthController@tour');
    
    });

    Route::namespace('App\Http\Controllers')->group(function() {
        Route::get('hire','CompanyController@hires');
        Route::get('hiring-history','CompanyController@hiring_history');
        Route::get('talent','CompanyController@talents');
        Route::get('talents-profile','CompanyController@talents_profile');
        Route::get('standup','CompanyController@standups');
        Route::get('standup-update','CompanyController@standup_update');
        Route::get('wellbeing','CompanyController@wellbeings');
        Route::get('billing','CompanyController@billings');
        Route::get('billings-view-pool','CompanyController@billings_view_pool');
        Route::get('support','CompanyController@supports');
        Route::get('tour','CompanyController@tours');

        
        
    });

    Route::namespace('App\Http\Controllers')->group(function() {
        
        Route::get('notification','DashboardController@notifications');
        Route::get('profile','DashboardController@profiles');
        Route::get('setting','DashboardController@settings');
        Route::get('dashboard','DashboardController@dashboard')->name('dashboard');
        Route::post('updateinformation','DashboardController@update_information');
        Route::post('updateabout','DashboardController@update_about');
    
    });
// });