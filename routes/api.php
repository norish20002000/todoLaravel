<?php

use Illuminate\Http\Request;
Route::get('/todo', function() {
    return "/api/todo テストページ";
});

Route::get('/todo','TodoController@get');
Route::post('/todo','TodoController@post');
Route::delete('/todo/{id}','TodoController@delete');
Route::put('/todo/{id}','TodoController@update');

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
