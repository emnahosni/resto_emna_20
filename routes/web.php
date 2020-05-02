<?php
 Route::get('/', 'AppController@index')->name('welcome');
// Route::get('/about', 'AppController@about');
// Route::get('/team', 'AppController@team');
Auth::routes();
// Route::get('/home','AppController@home')->name('home')->middleware('auth');
// Route::resource('/booking','BookingController')->middleware('auth');




Route::middleware('auth')->group(function () {

    Route::get('/home', 'AppController@home')->name('home');
    Route::resource('/booking', 'BookingController');
});
