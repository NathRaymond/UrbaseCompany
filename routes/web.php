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
Route::namespace('App\Http\Controllers\Auth')->group(function() {
    Route::get('/','AuthController@index');
    Route::post('login','AuthController@login'); // Logic For Login
    Route::get('register','AuthController@register');
    Route::post('reg','AuthController@reg'); // Logic For Registration
    Route::get('verify','AuthController@verify')->name('verify');
    Route::get('verifypasswordotp','AuthController@verifypasswordotp')->name('verifypasswordotp');
    Route::get('resend-otp','AuthController@resendOtp')->name('resend-otp');
    Route::post('verify_otp','AuthController@verifyOtp');
    Route::post('verify_forgottenotp','AuthController@verifyforgottenOtp');
    Route::get('forget-password','AuthController@forget_password');
    Route::get('create-new-password','AuthController@create_new_password');
    Route::post('saveforget-password','AuthController@forgetpassword'); // Logic For Forget Password
    Route::post('create-password','AuthController@create_password'); // Logic For create new Password
});

Route::group(['middleware' => ['authcheck']], function() {
    Route::namespace('App\Http\Controllers\Auth')->group(function() {
        Route::get('logout','AuthController@logout');
    });

    Route::namespace('App\Http\Controllers')->group(function() {
        Route::get('hire','HiringController@hires');
        Route::get('hiring-history','HiringController@hiring_history');
    });

    Route::namespace('App\Http\Controllers')->group(function() {
        Route::get('talent','CompanyController@talents');
        Route::get('talents-profile','CompanyController@talents_profile');
        Route::get('standup','CompanyController@standups');
        Route::get('standup-update','CompanyController@standup_update');
        Route::get('wellbeing','CompanyController@wellbeings');
        Route::get('billing','CompanyController@billings');
        Route::get('billings-view-pool','CompanyController@billings_view_pool');
        Route::get('tour','CompanyController@tours');
        Route::post('update-tour','CompanyController@update_tour');
    });

    Route::namespace('App\Http\Controllers')->group(function() {
        Route::get('support','SupportController@supports');
        Route::post('create-support','SupportController@createSupport')->name('create-support');
    });

    Route::namespace('App\Http\Controllers\Dashboard')->group(function() {
        
        Route::get('notification','DashboardController@notifications');
        Route::get('profile','DashboardController@profiles');
        Route::get('setting','DashboardController@settings');
        Route::get('dashboard','DashboardController@dashboard')->name('dashboard');
        Route::post('updateinformation','DashboardController@update_information');
        Route::post('updateabout','DashboardController@update_about');
    
    });
});