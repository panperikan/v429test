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

//Route::post('/pay', 'PaymentController@pay');
Route::get('payment', 'PaymentController@index')->name('payment');
Route::get('payment', 'PaymentController@payment');

/*Route::get('payment', [PaymentController::class, 'index'])->name('payment');
Route::post('payment', [PaymentController::class, 'payment']);*/


Route::group(['prefix' => 'contact', 'middleware' => 'auth'], function(){
    Route::get('index', 'ContactFormController@index')->name('contact.index');
    Route::get('create', 'ContactFormController@create')->name('contact.create');
    Route::post('store', 'ContactFormController@store')->name('contact.store');
    Route::get('show/{id}', 'ContactFormController@show')->name('contact.show');
    Route::get('edit/{id}', 'ContactFormController@edit')->name('contact.edit');
    Route::post('update/{id}', 'ContactFormController@update')->name('contact.update');


});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('tests/test', 'TestController@index');
