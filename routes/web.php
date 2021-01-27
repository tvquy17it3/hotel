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
Route::get('/hotel', 'HotelController@index1');
Route::get('/checkin', 'CheckinController@index');
Route::post('/checkin', 'CheckinController@postData');
Route::get('/chooseroom', 'RoomController@index');
Route::get('/form', 'OrderController@index');
Route::post('/form', 'OrderController@postData');
Route::get('/submit', 'SubmitController@index');
Route::post('/chooseroom', 'RoomController@postData');
Route::get('/chooseroom/{id}', 'RoomController@seeItem');
Route::get('/vieworder', 'ViewOrderController@index');
Route::post('/vieworder', 'ViewOrderController@postData');
Route::get('/about', 'AboutController@index');
Route::get('/recruit', 'RecruitController@index');
Route::get('/endow', 'EndowController@index');

Auth::routes();  //login and register
Route::get('/auth/redirect/{provider}', 'SocialController@redirect');
Route::get('/callback/{provider}', 'SocialController@callback');

Route::get('/home', 'HomeController@home')->name('home');
Route::get('/ss', 'HomeController@deleteSession');

Route::group(['middleware' => 'web'], function () {
    Route::get('bar', function () {
        return csrf_token(); // works
	});
	Route::post('/getCart', 'RoomController@getCart');
});

Route::group(['namespace' => 'Admin','as' => 'admin::','prefix' => 'admin', 'middleware' => ['auth', 'acl']], function() {

  	Route::get('/', ['as' => 'home', 'uses' => 'AdminController@index']);
  	Route::post('/postTable', ['as' => 'home', 'uses' => 'AdminController@postTable']);
  
  	#order
 	Route::get('/order', ['as' => 'order', 'uses' => 'OrderController@order']);
 	Route::get('/xacnhan', ['as' => 'xacnhan', 'uses' => 'OrderController@xacnhan']);
 	Route::get('/success', ['as' => 'ordersucc', 'uses' => 'OrderController@hoanthanh']);
 	Route::get('/allorder', ['as' => 'allorder', 'uses' => 'OrderController@xemtatca']);
 	Route::get('/huy', ['as' => 'huy', 'uses' => 'OrderController@dahuy']);
 	Route::get('/order/vieworder/{id}', ['as' => 'vieworder', 'uses' => 'OrderController@vieworder']);
 	Route::post('/order/vieworder/editstatus', ['as' => 'editO', 'uses' => 'OrderController@editstatus']);
 	Route::post('/order/vieworder/thanhtoan', ['as'   => 'thanhtoan','uses' => 'OrderController@thanhtoan']);
 	Route::post('/order/vieworder/add', ['as'   => 'store', 'uses' => 'OrderController@addrooms']);
 	
 	#ajax
 	Route::get('/addorder', ['as' => 'addorder', 'uses' => 'AdminController@addorder']);
 	Route::delete('/order/vieworder/delete/{id}', ['as'   => 'destroy','uses' => 'OrderController@destroy']);
 	Route::get('/order/vieworder/detail/{id}', ['as'   => 'show2','uses' => 'OrderController@show']);
 	Route::delete('/order/vieworder/delete/{id}', ['as'   => 'destroy','uses' => 'OrderController@destroy']);
 	Route::put('/order/vieworder/update/{id}', ['as'   => 'update','uses' => 'OrderController@update']);
 	Route::put('/order/huyorder/{id}', ['as'   => 'huyorder','uses' => 'OrderController@huyorder']);

 	
 	Route::get('/order/edit', ['as' => 'editorder', 'uses' => 'AdminController@editorder']);
 	Route::post('/order/editd/{id}', ['as' => 'editor', 'uses' => 'AdminController@editorder1']);

 	#room
 	Route::get('/room', ['as' => 'room', 'uses' => 'RoomController@room']);
 	Route::get('/room/vip', ['as' => 'room', 'uses' => 'RoomController@roomVip']);
 	Route::get('/room/thuong', ['as' => 'room', 'uses' => 'RoomController@roomThuong']);
 	Route::get('/addroom', ['as' => 'addroom', 'uses' => 'RoomController@addroom']);
 	Route::get('/room/edit/{id}', ['as' => 'editroom', 'uses' => 'RoomController@editroom']);
 	Route::post('/room/addroom', ['as' => 'addroom', 'uses' => 'RoomController@store']);
 	Route::post('/room/edit/{id}', ['as' => 'edits', 'uses' => 'RoomController@update']);
 	Route::post('/room/edita/upload/{id}', ['as' => 'editA', 'uses' => 'RoomController@upload']);
 	Route::get('/room/delete/{id}', ['as' => 'edits', 'uses' => 'RoomController@delete']);
 	Route::post('/room/urlimg/{id}', ['as' => 'editss', 'uses' => 'RoomController@updateurl']);

 	

 	#account
 	Route::get('/account', ['as' => 'room', 'uses' => 'UserController@accounts']);
 	Route::get('/account/blocks', ['as' => 'room', 'uses' => 'UserController@blocks']);
 	Route::post('/account/position', ['as' => 'positions', 'uses' => 'UserController@position']);
 	Route::get('/account/block/{id}', ['as' => 'block', 'uses' => 'UserController@block']);
 	Route::get('/account/manager', ['as' => 'manager', 'uses' => 'UserController@manager']);
 	Route::get('/account/blockmn', ['as' => 'room', 'uses' => 'UserController@blockmn']);



 	#chart
 	Route::get('/week', ['as' => 'week', 'uses' => 'AdminController@week']);
 	Route::get('/year', ['as' => 'monthe', 'uses' => 'AdminController@year']);
 	Route::post('/chart', ['as' => 'seachChart', 'uses' => 'AdminController@chart']);
 	 #In hoa don
    Route::get('/printorder/{id}', 'OrderController@hoadon');

});