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

// onboard a user and return token
Route::get('/trees/{tree}/onboard', ['as' => 'user.onboard', 'uses' => 'UserController@onboard']);

Route::get('/journeys/{journey}', ['as' => 'journey.continue', 'uses' => 'JourneyController@continue']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
