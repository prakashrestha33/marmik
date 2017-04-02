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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('landing');

Route::get('/admin/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
Route::post('/admin/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
Route::get('/admin', 'Admin\AdminController@index')->name('admin.dashboard');

Route::get('/package/lost', 'PackageController@create')->name('package.lost');
Route::post('/package/report', 'PackageController@report')->name('package.report');

Route::get('/package/track', 'PackageController@track')->name('package.track');
Route::post('/package/gettrack', 'PackageController@gettrack')->name('package.gettrack');
Route::get('/package/tracked', 'PackageController@tracked')->name('package.tracked');



Route::get('/package/pickup', 'CustomerController@pickup')->name('package.pickup');
Route::post('/package/pickup', 'CustomerController@pickupstore')->name('package.pickup.request');

Route::get('/package/{id}/checkout', 'CustomerController@checkout')->name('package.checkout');
Route::get('/profile/{id}/history', 'CustomerController@history')->name('profile.history');

