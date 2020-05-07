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

Route::group(['prefix'=>'service', 'namespace'=>'Admin'],  function(){
    Route::get('/', 'ServiceController@service')->name('service.index');
});

Route::group(['prefix'=>'admin', 'namespace'=>'Admin'],  function(){
    Route::get('/', 'DashboardController@dashboard')->name('admin.index');
});
Route::group(['prefix'=>'sale', 'namespace'=>'Admin'],  function(){
    Route::get('/', 'SalController@sale')->name('sale.index');
});
Route::group(['prefix'=>'album', 'namespace'=>'Admin'],  function(){
    Route::get('/', 'AlbumController@album')->name('album.index');
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

Route::group(['prefix'=>'create', 'namespace'=>'NewCreate', 'middleware'=>['auth']], function(){
    Route::resource('pricelist', 'PriceListCreateController');
});

Route::group(['prefix'=>'create', 'namespace'=>'NewCreate', 'middleware'=>['auth']], function(){
    Route::resource('pricelistline', 'PricelistLineCreateController');
});

Route::group(['prefix'=>'create', 'namespace'=>'NewCreate', 'middleware'=>['auth']], function(){
    Route::resource('sheldue', 'SheldueCreateController');
});

Route::group(['prefix'=>'create', 'namespace'=>'NewCreate', 'middleware'=>['auth']], function(){
    Route::resource('specializ', 'SpecializCreateController');
});

Route::group(['prefix'=>'create', 'namespace'=>'NewCreate', 'middleware'=>['auth']], function(){
    Route::resource('role', 'RoleCreateController');
});

Route::group(['prefix'=>'create', 'namespace'=>'NewCreate', 'middleware'=>['auth']], function(){
    Route::resource('userrole', 'UserRoleCreateController');
});

Route::group(['prefix'=>'create', 'namespace'=>'NewCreate', 'middleware'=>['auth']], function(){
    Route::resource('cheque', 'ChequeCreateController');
});

Route::group(['prefix'=>'create', 'namespace'=>'NewCreate', 'middleware'=>['auth']], function(){
    Route::resource('serviceorder', 'ServiceOrderesCreateController');
});

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
