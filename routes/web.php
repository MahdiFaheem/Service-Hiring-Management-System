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

Route::get('/', function(){
	return view('welcome');
});



Route::get('/login', 'LoginController@index')->name('login.index');
Route::post('/login', 'LoginController@verify');
Route::get('/logout', 'LogoutController@index')->name('logout.index');
Route::get('/register', 'RegisterController@index')->name('reg.index');
Route::post('/register/servicereg', 'RegisterController@store');
Route::post('/register/customerreg', 'RegisterController@storecus');
Route::get('/adminhome', 'AdminController@index')->name('adminhome.index');
Route::get('/adminhome/profile', 'AdminController@profile')->name('adminhome.profile');
Route::get('/adminhome/profile/edit', 'AdminController@edit')->name('adminhome.edit');
Route::post('/adminhome/profile/edit', 'AdminController@update');

Route::get('/adminhome/serviceprovider', 'AdminServiceController@serviceshow')->name('adminhome.serviceshow');
Route::get('/adminhome/serviceprovider/info/{id}', 'AdminServiceController@serviceinfo')->name('servicepro.info');
Route::get('/adminhome/serviceprovider/info/edit/{id}', 'AdminServiceController@serviceedit')->name('servicepro.edit');
Route::post('/adminhome/serviceprovider/info/edit/{id}', 'AdminServiceController@serviceupdate');
Route::get('/adminhome/serviceprovider/info/warning/{id}', 'AdminServiceController@servicewarn')->name('servicepro.warn');
Route::post('/adminhome/serviceprovider/info/warning/{id}', 'AdminServiceController@servicewarning');
Route::get('/adminhome/serviceprovider/info/message/{id}', 'AdminServiceController@servicemessage')->name('servicepro.message');
Route::post('/adminhome/serviceprovider/info/message/{id}', 'AdminServiceController@servicesend');
Route::get('/adminhome/serviceprovider/info/delete/{id}', 'AdminServiceController@servicedelete')->name('servicepro.delete');

Route::get('/adminhome/customer', 'AdminCustomerController@customershow')->name('adminhome.customershow');
Route::get('/adminhome/customer/info/{id}', 'AdminCustomerController@customerinfo')->name('admincustomer.info');
Route::get('/adminhome/customer/info/warning/{id}', 'AdminCustomerController@customerwarn')->name('admincustomer.warn');
Route::post('/adminhome/customer/info/warning/{id}', 'AdminCustomerController@customerwarning');
Route::get('/adminhome/customer/info/delete/{id}', 'AdminCustomerController@customerdelete')->name('admincustomer.delete');



