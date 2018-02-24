<?php


#Shop
Route::prefix('shop')->group(function(){

  Route::get('/','ShopController@categories');
  Route::get('order','ShopController@order');
  Route::get('search','ProductsController@searchShop');
  Route::get('autocomplete','ProductsController@autocompleteShop');
  Route::get('add-to-cart','ShopController@addToCart');
  Route::get('checkout','ShopController@checkout');
  Route::get('clear-cart','ShopController@clearCart');
  Route::get('update-cart','ShopController@updateCart');
  Route::get('remove-item{id}','ShopController@removeItem');
  Route::get('{cat_url}','ShopController@products');
  Route::get('{cat_url}/{prd_url}','ShopController@item' );
  
});

#User
Route::prefix('user')->group(function(){
   Route::get('signin','UserController@getSignin');
   Route::post('signin','UserController@postSignin');
   Route::get('signup','UserController@getSignup');
   Route::post('signup','UserController@postSignup');
   Route::get('logout','UserController@logout');
});
#Cms
Route::middleware(['cmsadmin'])->group(function(){
  Route::prefix('cms')->group(function(){
  Route::get('dashboard','CmsController@dashboard');
  Route::get('orders','CmsController@orders');
  Route::resource('menu', 'MenuController');
  Route::resource('content', 'ContentController');
  Route::resource('categories', 'CategoriesController');
  Route::resource('products', 'ProductsController');
  });
});
   
#Pages
Route::get('/','PagesController@home');
Route::get('{url}','PagesController@content');

