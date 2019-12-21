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
Route::group(['middleware'=>['sess']], function() {
    Route::get('/home/{id}', 'HomeController@index')->name('home.index');
    Route::get('/logout', 'LogoutController@index')->name('logout.index');

    Route::get('/profile/{id}', 'ProfileController@profile')->name('profile.index');
    Route::post('/profile/{id}', 'ProfileController@update');

    Route::get('/profile/delete/{id}', 'ProfileController@delete')->name('profile.delete');

    Route::get('/Sms/{id}', 'SmsController@sms')->name('sms.index');
    Route::post('/Sms/{id}', 'SmsController@reply');

    Route::get('/Sms/{id}', 'SmsController@sms')->name('sms.index');

    Route::get('/Sappointment/{id}', 'SappointmentController@index')->name('sappointment.index');
    Route::post('/Sappointment/accept/{id}', 'SappointmentController@accept')->name('saccept.index');
    Route::post('/Sappointment/reject/{id}', 'SappointmentController@reject')->name('sreject.index');

    Route::get('/Sfeedback/{id}', 'SfeedbackController@index')->name('sfeedback.index');

    Route::resource('/Service', 'ServiceController');
    Route::put('Service/{id}', 'ServiceController@show')->name('Service.show');
    Route::post('Service/{id}', 'ServiceController@update')->name('Service.update');

    Route::resource('/Snotice', 'SnoticeController');
    Route::put('Snotice/{id}', 'SnoticeController@show')->name('Snotice.show');


    Route::get('/customer', 'CustomerController@index')->name('customer-home.index');
    Route::get('/customer/notice', 'NoticeController@show')->name('customer.notice');
    Route::get('/customer/feedback', 'FeedbackController@show')->name('customer.feedback');
    Route::get('/customer/profile', 'ProfileController@show')->name('customer.profile');
    Route::get('/customer/profile/delete', 'ProfileController@delete')->name('customer.delete');
    Route::get('/customer/update', 'ProfileController@update')->name('customer.update');
    Route::post('customer/update', 'ProfileController@updateProfile');
    Route::get('/customer/message', 'MessageController@index')->name('customer.message');
    Route::post('/customer/message', 'MessageController@update');


    Route::get('/customer/serviceprovider', 'CustomerController@serviceshow')->name('customer.serviceshow');
    Route::post('/customer/serviceprovider', 'CustomerController@fetch')->name('customer.servicesearch');
    Route::get('/customer/serviceprovider/info/{id}', 'CustomerController@serviceinfo')->name('customerservicepro.info');

    Route::get('/customer/serviceprovider/service-feedback/{id}', 'FeedbackController@servicefeedback')->name('servicefeedback.info');
    Route::get('/customer/give/feedback/{id}', 'FeedbackController@givefeedback')->name('givefeedback.info');
    Route::post('/customer/give/feedback/{id}', 'FeedbackController@store');

    Route::get('/customer/serviceprovider/request-appointment/{id}', 'AppointmentController@index')->name('customer.book');
    Route::post('/customer/serviceprovider/request-appointment/{id}', 'AppointmentController@store');
    Route::get('/customer/requested', 'AppointmentController@requested')->name('customer.requested');
    Route::get('/customer/upcomming', 'AppointmentController@upcomming')->name('customer.upcomming');
    Route::get('/customer/completed', 'AppointmentController@completed')->name('customer.completed');
    Route::get('/customer/requested/delete', 'AppointmentController@delete')->name('appointment.delete');
    Route::post('/customer/upcomming', 'AppointmentController@pay')->name('appointment.pay');
    Route::get('/customer/history', 'AccountController@customerhistory')->name('customer.history');
    


});
