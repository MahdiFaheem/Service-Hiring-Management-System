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
Route::get('/adminhome/serviceprovider', 'AdminController@serviceshow')->name('adminhome.serviceshow');
Route::get('/adminhome/serviceprovider/info/{id}', 'AdminController@serviceinfo')->name('servicepro.info');








