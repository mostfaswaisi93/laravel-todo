<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/login', 'AuthController@login');
Route::post('/register', 'AuthController@register');
Route::middleware('auth:api')->post('/logout', 'AuthController@logout');

Route::get('/todos', 'TodosController@index');
Route::post('/todos', 'TodosController@store');
Route::patch('/todos/{todo}', 'TodosController@update');
Route::patch('/todosCheckAll', 'TodosController@updateAll');
Route::delete('/todos/{todo}', 'TodosController@destroy');
Route::delete('/todosDeleteCompleted', 'TodosController@destroyCompleted');
