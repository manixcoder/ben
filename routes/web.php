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

    /*
    |---------------------------------
    | Category Management Routes Here     |
    |---------------------------------
     */
    Route::group(['prefix' => 'category-management'], function () {
        Route::get('/', 'Admin\CategoryManagementController@index');
        Route::get('create', 'Admin\CategoryManagementController@create');
        Route::post('/save-university', 'Admin\CategoryManagementController@store');
        Route::get('{id}/edit', 'Admin\CategoryManagementController@edit');
        Route::post('{id}/update', 'Admin\CategoryManagementController@update');
        Route::get('delete/{id}', 'Admin\CategoryManagementController@destroy');
    });
    /*
    |---------------------------------
    | Category Management Routes Here     |
    |---------------------------------
     */
    Route::group(['prefix' => 'user-management'], function () {
        Route::get('/', 'Admin\UserManagementController@index');
        Route::get('create', 'Admin\CategoryManagementController@create');
        Route::post('/save-university', 'Admin\CategoryManagementController@store');
        Route::get('{id}/edit', 'Admin\CategoryManagementController@edit');
        Route::post('{id}/update', 'Admin\CategoryManagementController@update');
        Route::get('delete/{id}', 'Admin\CategoryManagementController@destroy');
    });

    /*
    |---------------------------------
    | Company Management Routes Here     |
    |---------------------------------
     */
    Route::group(['prefix' => 'company-management'], function () {
        Route::get('/', 'Admin\CompanyManagementController@index');
        Route::get('create', 'Admin\CompanyManagementController@create');
        Route::post('/save-university', 'Admin\CompanyManagementController@store');
        Route::get('{id}/edit', 'Admin\CompanyManagementController@edit');
        Route::post('{id}/update', 'Admin\CompanyManagementController@update');
        Route::get('delete/{id}', 'Admin\CompanyManagementController@destroy');
    });

    /*
    |---------------------------------
    | Company Management Routes Here     |
    |---------------------------------
     */
    Route::group(['prefix' => 'advertising-management'], function () {
        Route::get('/', 'Admin\AdvertisingManagementController@index');
        Route::get('create', 'Admin\AdvertisingManagementController@create');
        Route::post('/save-university', 'Admin\AdvertisingManagementController@store');
        Route::get('{id}/edit', 'Admin\AdvertisingManagementController@edit');
        Route::post('{id}/update', 'Admin\AdvertisingManagementController@update');
        Route::get('delete/{id}', 'Admin\AdvertisingManagementController@destroy');
    });

    /*
    |---------------------------------
    | Awards Management Routes Here     |
    |---------------------------------
     */
    Route::group(['prefix' => 'awards-management'], function () {
        Route::get('/', 'Admin\AwardsManagementController@index');
        Route::post('{id}/update', 'Admin\AwardsManagementController@update');
    });
});

/*=====================================ADMIN END=====================================*/
Route::get('/home', 'HomeController@index')->name('home');

/*=====================================Merchant=====================================*/
Route::group(['prefix' => 'merchant', 'middleware' => ['merchant', 'auth']], function () {
    return "Merchant";
});
/*=====================================Merchant End=====================================*/
