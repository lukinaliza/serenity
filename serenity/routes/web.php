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

Route::group(['prefix'=>'admin', 'namespace'=>'Admin', 'middleware'=>['auth']], function(){
    Route::get('/', 'DashboardController@dashboard')->name('admin.index');
});

Route::group(['prefix'=>'create', 'namespace'=>'NewCreate', 'middleware'=>['auth']], function(){
    Route::resource('service', 'ServiceInsertController');
});

Route::group(['prefix'=>'create', 'namespace'=>'NewCreate', 'middleware'=>['auth']], function(){
    Route::resource('specialization', 'SpecializationCreateController');
});

Route::group(['prefix'=>'create', 'namespace'=>'NewCreate', 'middleware'=>['auth']], function(){
    Route::resource('master', 'MasterCreateController');
});

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
