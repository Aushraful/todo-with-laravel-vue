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

Route::get('/todos', 'TodoController@index');
Route::post('/todos', 'TodoController@store');
Route::get('/todo/{todo}', 'TodoController@show');
Route::patch('/todo/{todo}', 'TodoController@update');
Route::patch('/todoCheckAll', 'TodoController@updateAll');
Route::delete('/todo/{todo}', 'TodoController@destroy');
Route::delete('/todoDeleteCompleted', 'TodoController@destroyCompleted');
