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

Route::get('/', 'HotelController@index');
Route::get('/checkin', 'CheckinController@index');
Route::get('/chooseroom', 'RoomController@index');
Route::get('/form', 'OrderController@index');
Route::get('/submit', 'SubmitController@index');
Route::post('/chooseroom', 'RoomController@postData');
Route::get('/vieworder', 'ViewOrderController@index');
Route::get('/about', 'AboutController@index');
Route::get('/recruit', 'RecruitController@index');
Route::get('/endow', 'EndowController@index');

Auth::routes();  //login and register
Route::get('/home', 'HomeController@home')->name('home');

Route::group(['middleware' => 'web'], function () {
    Route::get('bar', function () {
        return csrf_token(); // works
	});
	Route::post('/getCart', 'RoomController@getCart');
});

Route::group(['namespace' => 'Admin','as' => 'admin::','prefix' => 'admin', 'middleware' => ['auth', 'acl']], function() {

  Route::get('/', ['as' => 'home', 'uses' => 'AdminController@index']);
  
	#order
	Route::get('/order', ['as' => 'order', 'uses' => 'AdminController@order']);
	Route::get('/addorder', ['as' => 'addorder', 'uses' => 'AdminController@addorder']);
	Route::get('/success', ['as' => 'ordersucc', 'uses' => 'AdminController@success']);
	Route::get('/huy', ['as' => 'huy', 'uses' => 'AdminController@huy']);
	Route::get('/order/edit', ['as' => 'editorder', 'uses' => 'AdminController@editorder']);
	Route::post('/order/editd/{id}', ['as' => 'editor', 'uses' => 'AdminController@editorder1']);

	#room
	Route::get('/room', ['as' => 'room', 'uses' => 'AdminController@room']);
	Route::get('/addroom', ['as' => 'addroom', 'uses' => 'AdminController@addroom']);
	Route::get('/room/edit', ['as' => 'editroom', 'uses' => 'AdminController@editroom']);

	#account
	Route::get('/account', ['as' => 'room', 'uses' => 'AdminController@account']);
});