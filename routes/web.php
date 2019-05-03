<?php


Route::get('/','frontController@index');
Route::get('/home','frontController@index')->name('home');
Route::get('/shirts','frontController@shirts');
Route::get('/shirt/{shirt}','frontController@shirt');


Auth::routes();
//Route::get('/login','Auth\LoginController@login');
Route::get('/logout','Auth\LoginController@logout');
Route::resource('cart','CartController');
Route::get('cart/add-item/{id}','CartController@additem');
Route::resource('address','AddressController');

Route::group(['prefix'=>'admin','middleware'=>['auth','admin']],function(){

  Route::get('/',function(){
    return view('admin.index');
  })->name('admin.index');

  Route::resource('products','ProductsController');
  Route::resource('categories','CategoriesController');

});

Route::get('checkout','CheckoutController@step1');
Route::get('payment','CheckoutController@payment')->name('checkout.payment');
Route::post('store_payment','CheckoutController@storePayment')->name('payment.store');
Route::get('shipping_info','CheckoutController@shipping')->name('checkout.shipping');
