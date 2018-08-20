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
Route::get('/onboard', ['as' => 'user.onboard', 'uses' => 'UserController@onboard']);

Route::get('/journey', function () {
    return view('journey');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/trees', 'TreeController@list');
// trees
Route::get('/trees', 'TreeController@list');
Route::get('/trees/{tree}', 'TreeController@show');
Route::get('/trees/{tree}/question', 'TreeController@showQuestion');
