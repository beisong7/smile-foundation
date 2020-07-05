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


//Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/administrator/gate', 'HomeController@adminLogin')->name('admin.login');
Route::post('/administrator/authenticate', 'AuthController@authenticate')->name('admin.auth');




Route::group(['middleware'=>'admin'], function () {
    Route::prefix('admin')->group(function () {
        Route::get('dashboard', 'ConsoleController@dashboard')->name('dashboard');
        Route::get('admin/session/logout', 'AuthController@logout')->name('admin.logout');
    });
});