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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
