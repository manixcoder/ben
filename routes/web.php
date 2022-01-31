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
Route::get('/request/get-sub-category/{id}', 'HomeController@getSubCategory');
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
        Route::post('/save-category', 'Admin\CategoryManagementController@store');
        Route::get('{id}/edit', 'Admin\CategoryManagementController@edit');
        Route::get('{id}/edit-category', 'Admin\CategoryManagementController@editCategory');
        Route::get('{id}/edit-sub-category', 'Admin\CategoryManagementController@editSubCategory');
        Route::get('{id}/edit-user-category', 'Admin\CategoryManagementController@editUserCategory');

        Route::post('{id}/update-categary', 'Admin\CategoryManagementController@updateCategary');

        //Route::post('{id}/update', 'Admin\CategoryManagementController@update');
        Route::get('delete/{id}', 'Admin\CategoryManagementController@destroy');

        Route::get('company-category', 'Admin\CategoryManagementController@companyCategory');
        Route::any('save-comapany-categary', 'Admin\CategoryManagementController@saveComapanyCategary');
        Route::get('add-sub-category', 'Admin\CategoryManagementController@addSubCategory');
        Route::any('save-sub-categary', 'Admin\CategoryManagementController@saveSubCategary');
        Route::get('user-category', 'Admin\CategoryManagementController@addUserCategory');
        Route::any('save-user-categary', 'Admin\CategoryManagementController@saveUserCategary');
    });
    /*
    |--------------------------------------
    | User Management Routes Here     |
    |--------------------------------------
     */
    Route::group(['prefix' => 'user-management'], function () {
        Route::get('/', 'Admin\UserManagementController@index');
        Route::get('user-data', 'Admin\UserManagementController@usersData');
        Route::get('create', 'Admin\UserManagementController@create');
        Route::post('/save-user', 'Admin\UserManagementController@store');
        Route::get('{id}/edit', 'Admin\UserManagementController@edit');
        Route::post('{id}/update', 'Admin\UserManagementController@update');
        Route::get('delete/{id}', 'Admin\UserManagementController@destroy');
    });

    /*
    |-------------------------------------
    | Company Management Routes Here     |
    |-------------------------------------
     */
    Route::group(['prefix' => 'company-management'], function () {
        Route::get('/', 'Admin\CompanyManagementController@index');
        Route::get('create', 'Admin\CompanyManagementController@create');
        Route::post('/save-company', 'Admin\CompanyManagementController@store');
        Route::get('{id}/show', 'Admin\CompanyManagementController@show');
        Route::get('{id}/edit', 'Admin\CompanyManagementController@edit');
        Route::post('{id}/update', 'Admin\CompanyManagementController@update');
        Route::get('delete/{id}', 'Admin\CompanyManagementController@destroy');
    });

    /*
    |-------------------------------------
    | Advertising Management Routes Here     |
    |-------------------------------------
     */
    Route::group(['prefix' => 'advertising-management'], function () {
        Route::get('/', 'Admin\AdvertisingManagementController@index');
        Route::get('create', 'Admin\AdvertisingManagementController@create');
        Route::post('/save-advertising', 'Admin\AdvertisingManagementController@store');
        Route::get('{id}/show', 'Admin\AdvertisingManagementController@show');
        Route::get('{id}/edit', 'Admin\AdvertisingManagementController@edit');
        Route::post('{id}/update', 'Admin\AdvertisingManagementController@update');
        Route::get('delete/{id}', 'Admin\AdvertisingManagementController@destroy');
    });


    /*
    |------------------------------------------
    | Subscription Management Routes Here     |
    |-----------------------------------------
     */
    Route::group(['prefix' => 'subscription-management'], function () {
        Route::get('/', 'Admin\SubscriptionsManagementController@index');
        Route::get('create', 'Admin\SubscriptionsManagementController@create');
        Route::post('/save-advertising', 'Admin\SubscriptionsManagementController@store');
        Route::get('{id}/show', 'Admin\SubscriptionsManagementController@show');
        Route::get('{id}/edit', 'Admin\SubscriptionsManagementController@edit');
        Route::post('{id}/update', 'Admin\SubscriptionsManagementController@update');
        Route::get('delete/{id}', 'Admin\SubscriptionsManagementController@destroy');
    });
    /*
    |------------------------------------------
    | Permissions Management Routes Here     |
    |-----------------------------------------
     */
    Route::group(['prefix' => 'permissions-management'], function () {
        Route::get('/', 'Admin\PermissionsManegmentController@index');

        Route::post('/save-permission', 'Admin\PermissionsManegmentController@store');
        Route::post('/change-permission', 'Admin\PermissionsManegmentController@update');


        Route::get('create', 'Admin\PermissionsManegmentController@create');
        Route::post('/save-permissions', 'Admin\PermissionsManegmentController@store');
        Route::get('{id}/show', 'Admin\PermissionsManegmentController@show');
        Route::get('{id}/edit', 'Admin\PermissionsManegmentController@edit');
        Route::post('{id}/update', 'Admin\PermissionsManegmentController@update');
        Route::get('delete/{id}', 'Admin\PermissionsManegmentController@destroy');
    });
    /*
    |------------------------------------------
    | Payment Management Routes Here     |
    |-----------------------------------------
     */
    Route::group(['prefix' => 'payment-management'], function () {
        Route::get('/', 'Admin\PaymentManagementController@index');
        Route::get('create', 'Admin\PaymentManagementController@create');
        Route::post('/save-advertising', 'Admin\PaymentManagementController@store');
        Route::get('{id}/show', 'Admin\PaymentManagementController@show');
        Route::get('{id}/edit', 'Admin\PaymentManagementController@edit');
        Route::post('{id}/update', 'Admin\PaymentManagementController@update');
        Route::get('delete/{id}', 'Admin\PaymentManagementController@destroy');
    });
    /*
    |------------------------------------
    | Awards Management Routes Here     |
    |------------------------------------
     */
    Route::group(['prefix' => 'awards-management'], function () {
        Route::get('/', 'Admin\AwardsManagementController@index');
        Route::post('{id}/update', 'Admin\AwardsManagementController@update');
    });
});

/*=====================================ADMIN END=====================================*/
Route::get('/', 'HomeController@index')->name('home');

/*=====================================Merchant=====================================*/
Route::group(['prefix' => 'merchant', 'middleware' => ['merchant', 'auth']], function () {
    Route::get('/', 'Admin\DashboardController@index');
});
/*=====================================Merchant End=====================================*/
Route::group(['prefix' => 'users', 'middleware' => ['users', 'auth']], function () {
    Route::get('/', 'Customer\DashboardController@index');
});
