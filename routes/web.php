<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/items', 'ItemController@index'); //this should just show items list
Route::post('/items/create', 'ItemController@store'); // store in db from POST
Route::get('/items/create', 'ItemController@create'); //form for creating item
Route::get('/users','ItemController@userIndex');
route::get('/items/{user_id}', 'ItemController@userItems');
