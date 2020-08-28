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
    Route::get('/{name}', 'ServiceController@serviceType')->name('service_type');


});
Route::group(['prefix'=>'tuyen-dung'], function(){
    Route::get('/chinh-sach', 'RecruitmentController@policy')->name('chinh-sach');
    Route::get('/tin-tuyen-dung', 'RecruitmentController@recruitmentPost')->name('tin-tuyen-dung');
    Route::get('/tin-tuyen-dung/{job_name}','RecruitmentController@jobDetails' )->name('job_details');
});

Route::get('file','FileController@index');
Route::post('file','Filecontroller@doUpload')->name('upload');

Route::get('/admin/login', 'AdminController@getLogin')->name('AdminLogin')->middleware('checkLogin');
Route::post('/admin/login', 'AdminController@postLogin')->name('PostLogin')->middleware('checkLogin');
Route::get('/admin/logout','AdminController@logout')->name('logout');
Route::get('/test','HomeController@test')->name('test');
Route::get('/products', 'ProductController@getProduct')->name('getProduct');
Route::get('/van-hoa/tin-tuc','EventController@getAllEvent')->name('getAllEvent');
Route::get('/van-hoa/{event_name}','EventController@getOneEvent')->name('getOneEvent');
Route::group(['prefix'=>'admin','middleware'=>'checkLogout'], function(){

    Route::get('/', 'AdminController@Home')->name('AdminHome');
    Route::get('/full-dashboard', 'AdminController@SuperAdmin')->name('superAdmin');
    Route::get('/services','AdminController@serviceIndex')->name('getService');
    Route::get('/serviceJson', 'AdminController@getService');
    Route::get('/services/refetch','AdminController@serviceRefetch')->name('ServiceRefetch');
    Route::get('/products', 'AdminController@getProduct')->name('AdminGetProduct');
    Route::get('/productJson', 'ProductController@productJson')->name('GetProductJson');
    Route::get('/recruitment-post', 'RecruitmentController@Index')->name('recruit-manager');
    Route::get('/recruitment-post-json','RecruitmentController@getAll')->name('allRecruitmentPost');
    Route::group(['prefix'=>'add'], function(){
        Route::post('/services', 'AdminController@addService');
        Route::post('/product', 'ProductController@addProduct');
        Route::post('/recruitPost','RecruitmentController@addNew');

    });
     Route::group(['prefix'=>'edit'], function(){
        Route::get('service','AdminController@getOneService')->name('getOneService');
        Route::post('/service','AdminController@editService')->name('editService');
        Route::get('/product','ProductController@getOneProduct');
        Route::post('/product','ProductController@saveEditProduct');
        Route::post('/recruitPost','RecruitmentController@editPost' );
    });
    Route::group(['prefix'=>'delete'], function(){
        Route::post('service', 'AdminController@removeService')->name('removeService');
        Route::post('product', 'ProductController@removeProduct')->name('removeService');
        Route::post('/recruitPost',"RecruitmentController@removePost");

    });
    Route::group(['prefix'=>'view'], function(){

    });
});
Route::get('/testckeditor',function (){
    return view('testckeditor');
});
Route::post('/testckeditor','FileController@ckeditor')->name('ckeditor');
Route::post('/testckeditor/save','FileController@ckeditor_save')->name('ckeditor_save');
Route::get('/testabc', 'TestController@index');
