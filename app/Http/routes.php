<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

$app_id = '1013353038728845';

Route::get('/', function () {
    return view('index');
});
Route::get('/home', function () {
    return view('index');
});


// Games routes
Route::get('/games', 'GameController@index');
Route::get('/games/all', 'GameController@index');

// Temp : update database
Route::get('/update', 'GameController@updateGamesDatabase');

// Authentication Routes
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration Routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

// Temp : facebook connect
Route::get('/facebook-connect', 'FacebookController@facebook');
Route::get('/facebook-callback', 'FacebookController@callback');

