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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['as'=>'admin.'], function(){
    Route::get('/admin','AdminController@dashboard')->name('dashboard');
    Route::resource('product','ProductController');//By default resource will create a name 
    Route::resource('category','CategoriesController');//By default resource will create a name
    Route::get('category/create','CategoriesController@create');

});
