<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//User
Route::post('/user/register', 'UserController@store');
Route::post('/user/login', 'UserController@login');
Route::post('/user/complete', 'UserController@complete');
Route::post('/user/reset', 'UserController@resetpassword');
Route::post('/user/update', 'UserController@updateUser');
Route::post('/user/logout', 'UserController@logout');
Route::post('/user', 'UserController@info');
Route::post('/user/order', 'OrderController@userOrder');
Route::get('/user/subs/{id}', 'OrderController@cekLangganan');
Route::get('/user/notifications', 'UserController@notifications');

Route::get('/pickup_area', 'OrderController@pickArea');

//Driver
Route::post('/driver/register', 'DriverController@store');
Route::post('/driver/login', 'DriverController@login');
Route::post('/driver/complete', 'DriverController@complete');
Route::post('/driver/edit-profile', 'DriverController@updateProfile');
Route::post('/driver/edit-mobil', 'DriverController@updateMobil');
Route::post('/driver/reset', 'DriverController@resetpassword');
Route::post('/driver/logout', 'DriverController@logout');
Route::post('/driver', 'DriverController@info');
Route::get('/driver', 'DriverController@allDriver');
Route::post('/driver/order', 'OrderController@order');
Route::get('/driver/order/pending/{id}', 'OrderController@pendingView');
Route::get('/driver/notifications', 'DriverController@notifications');

Route::get('/order/{id}', 'OrderController@searchByOrderId');
Route::post('/order/validate', 'OrderController@validateOrder');
Route::post('/order/user/validate', 'OrderController@userVaildateOrder');
Route::post('/order/user/cancel', 'OrderController@userCancelOrder');
Route::post('/order/driver/cancel', 'OrderController@driverCancelOrder');

Route::post('/changePassword', 'PasswordController@updateApi');

Route::post('/tellmeplease', 'DriverController@tellParent');

Route::post('/refresh', 'PasswordController@refreshToken');
