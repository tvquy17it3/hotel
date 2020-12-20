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

Auth::routes();  //login and register
Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/admin', 'AdminController@index');

Route::group(['namespace' => 'Admin','as' => 'admin::','prefix' => 'admin', 'middleware' => ['auth', 'acl']], function() {

    Route::get('/', ['as' => 'home', 'uses' => 'AdminController@index']);
  
  	#order
 	Route::get('/order', ['as' => 'order', 'uses' => 'AdminController@order']);
 	Route::get('/addorder', ['as' => 'addorder', 'uses' => 'AdminController@addorder']);
 	Route::get('/success', ['as' => 'ordersucc', 'uses' => 'AdminController@success']);
 	Route::get('/huy', ['as' => 'huy', 'uses' => 'AdminController@huy']);



 	#room
 	Route::get('/room', ['as' => 'room', 'uses' => 'AdminController@room']);

 	#account
 	Route::get('/account', ['as' => 'room', 'uses' => 'AdminController@account']);
});