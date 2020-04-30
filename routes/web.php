<?php
 Route::get('/', 'AppController@index');
// Route::get('/about', 'AppController@about');
// Route::get('/team', 'AppController@team');
Auth::routes();
Route::get('/home','AppController@home')->name('home')->middleware('auth');