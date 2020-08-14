<?php

use Illuminate\Support\Facades\Auth;
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

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::group(['prefix'=>'service'],function (){
    Route::get('/{name}', 'ServiceController@getService' )->name('get_service');
    Route::post('/request', 'ServiceController@request_service')->name('request_service');

});
Route::group(['prefix'=>'services'],function (){
    Route::get('/{name}', 'ServiceController@ServiceType')->name('service_type');


});

Route::get('file','FileController@index');
Route::post('file','Filecontroller@doUpload')->name('upload');

Route::get('/admin/login', 'AdminController@getLogin')->name('AdminLogin')->middleware('checkLogin');
Route::post('/admin/login', 'AdminController@postLogin')->name('PostLogin')->middleware('checkLogin');
Route::get('/admin/logout','AdminController@logout')->name('logout');
Route::get('/test','HomeController@test')->name('test');
Route::get('/products', 'ProductController@getProduct')->name('getProduct');
Route::group(['prefix'=>'admin','middleware'=>'checkLogout'], function(){

    Route::get('/', 'AdminController@Home')->name('AdminHome');
    Route::get('/full-dashboard', 'AdminController@SuperAdmin')->name('superAdmin');
    Route::get('/services','AdminController@serviceIndex')->name('getService');
    Route::get('/serviceJson', 'AdminController@getService');
    Route::get('/products', 'AdminController@getProduct')->name('AdminGetProduct');
    Route::get('/productJson', 'ProductController@productJson')->name('GetProductJson');
    Route::group(['prefix'=>'add'], function(){
        Route::post('/services', 'AdminController@addService');
        Route::post('/product', 'ProductController@addProduct');

    });
    Route::group(['prefix'=>'edit'], function(){
        Route::get('service','AdminController@getOneService')->name('getOneService');
        Route::post('/service','AdminController@editService')->name('editService');
        Route::get('/product','ProductController@getOneProduct');
        Route::post('/product','ProductController@saveEditProduct');
    });
    Route::group(['prefix'=>'delete'], function(){
        Route::post('service', 'AdminController@removeService')->name('removeService');
        Route::post('product', 'ProductController@removeProduct')->name('removeService');

    });
    Route::group(['prefix'=>'view'], function(){

    });
});
Route::get('/testckeditor',function (){
    return view('testckeditor');
});
Route::post('/testckeditor','FileController@ckeditor')->name('ckeditor');
Route::post('/testckeditor/save','FileController@ckeditor_save')->name('ckeditor_save');

