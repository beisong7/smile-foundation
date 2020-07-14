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
Route::get('causes', 'HomeController@causes')->name('causes');
Route::get('/administrator/gate', 'HomeController@adminLogin')->name('admin.login');
Route::post('/administrator/authenticate', 'AuthController@authenticate')->name('admin.auth');

Route::group(['middleware'=>'admin'], function () {
    Route::prefix('admin')->group(function () {
        Route::get('dashboard', 'ConsoleController@dashboard')->name('dashboard');
        Route::get('admin/session/logout', 'AuthController@logout')->name('admin.logout');

        //=============================================
        Route::get('manage/sliders/index', 'SliderController@sliders')->name('slider.index');
        Route::get('manage/sliders/create', 'SliderController@create')->name('slider.new');
        Route::get('manage/sliders/show/{id}', 'SliderController@show')->name('slider.show');
        Route::get('manage/sliders/toggle/{id}', 'SliderController@toggle')->name('slider.toggle');
        Route::post('manage/sliders/store', 'SliderController@store')->name('slider.store');
        Route::post('manage/sliders/update/{id}', 'SliderController@update')->name('slider.update');

        Route::post('upload/image/store/{uuid}', 'ImageUploadController@uploadImages')->name('uploadImage');
        Route::post('upload/image/delete/{uuid}', 'ImageUploadController@deleteImage')->name('deleteImage');
        Route::get('modify/image/delete/{uuid}', 'ImageUploadController@popSingleImage')->name('image-delete');
        //=============================================

        //=============================================
        Route::get('manage/cause/index', 'CauseController@index')->name('cause.index');
        Route::get('manage/cause/show/{uuid}', 'CauseController@show')->name('cause.show');
        Route::get('manage/cause/create', 'CauseController@create')->name('cause.new');
        Route::post('manage/cause/store', 'CauseController@store')->name('cause.store');
        Route::post('manage/cause/update/{uuid}', 'CauseController@update')->name('cause.update');
        Route::get('manage/cause/toggle/{uuid}', 'CauseController@toggle')->name('cause.toggle');
        //=============================================

    });
});