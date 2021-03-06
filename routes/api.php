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

Route::get('/trees', ['as' => 'api.tree.list', 'uses' => 'TreeController@list']);
Route::get('/trees/{tree}', ['as' => 'api.tree.show', 'uses' => 'TreeController@show']);
Route::get('/trees/{tree}/question', ['as' => 'api.tree.showQuestion', 'uses' => 'TreeController@showQuestion']);

// list  journeys
Route::get('/users/{user}/journeys', ['as' => 'api.user.journey.list', 'uses' => 'UserController@listJourneys']);

// start a journey, this is used to create a user
Route::post('/trees/{tree}/journeys/start', ['as' => 'api.journey.start', 'uses' => 'JourneyController@start']);

// get a journey
Route::get('journeys/{journey}', ['as' => 'api.journey.get', 'uses' => 'UserController@getJourney']);

// get all the nodes
Route::get('journeys/{journey}/nodes', ['as' => 'api.journey.nodes.get', 'uses' => 'UserController@getJourneyNodes']);

Route::post('journeys/{journey}/nodes/{node}', ['as' => 'api.user.store.path', 'uses' => 'UserController@storePath']);

Route::get('journeys/{journey}/questions/next', ['as' => 'api.user.next.path', 'uses' => 'UserController@getNextQuestion']);

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
