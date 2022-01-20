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

Route::get('/admin-login', function () {
    return view('admin_login');
});

Auth::routes();
Route::get('/validate-user', 'HomeController@checkUserRole');
/*=====================================ADMIN=====================================*/
Route::group(['prefix' => 'admin', 'middleware' => ['admin', 'auth']], function () {
    Route::get('/', 'Admin\DashboardController@index');
});

/*=====================================ADMIN END=====================================*/
Route::get('/home', 'HomeController@index')->name('home');

/*=====================================Merchant=====================================*/
Route::group(['prefix' => 'merchant', 'middleware' => ['merchant', 'auth']], function () {
    return "Merchant";
});
/*=====================================Merchant End=====================================*/
