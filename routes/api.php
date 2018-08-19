<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// trees
Route::get('/trees', ['as' => 'api.tree.list', 'uses' => 'TreeController@list']);
Route::get('/trees/{tree}', ['as' => 'api.tree.show', 'uses' => 'TreeController@show']);

// list  journeys
Route::get('/users/{user}/journeys', ['as' => 'api.user.journey.list', 'uses' => 'UserController@listJourneys']);

// get a journey
Route::get('/users/{user}/journeys/{journey}', ['as' => 'api.user.journey.get', 'uses' => 'UserController@getJourney']);

// store user path
Route::post('/users/{user}/journeys/{journey}/paths', ['as' => 'api.user.store.path.get', 'uses' => 'UserController@storePath']);

// get next path of the journey
Route::get('/users/{user}/journeys/{journey}/questions/next', ['as' => 'api.user.next.path.get', 'uses' => 'UserController@getNextQuestion']);

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
