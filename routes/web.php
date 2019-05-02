<?php


Route::get('/','frontController@index');
Route::get('/home','frontController@index');
Route::get('/shirts','frontController@shirts');
Route::get('/shirt/{shirt}','frontController@shirt');

Auth::routes();
Route::get('/logout','Auth\LoginController@logout');
Route::get('/home','frontController@index')->name('home');
Route::resource('cart','CartController');

Route::group(['prefix'=>'admin','middleware'=>'auth'],function(){

  Route::get('/',function(){
    return view('admin.index');
  })->name('admin.index');

  Route::resource('products','ProductsController');
  Route::resource('categories','CategoriesController');

});
