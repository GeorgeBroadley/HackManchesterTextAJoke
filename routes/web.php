<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Auth::routes();
Route::get('/recievetext', 'JokeController@sendSMS');
Route::get('/submit', 'JokeController@submitView');
Route::post('/submit', 'JokeController@submitJoke');
Route::get('/flaggedjokes', 'JokeController@getFlaggedJokes');
Route::get('/flaggedjokes/unflag/{id}', 'JokeController@unFlagJoke');
Route::get('/', 'JokeController@home');
// Route::get('/{id}', 'JokeController@getJoke');
