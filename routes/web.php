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

Route::get('/', 'HomeController@Index');
Route::post('/todo', 'TodoController@Insert');
Route::Patch('/todo', 'TodoController@Update');
Route::Delete('/todo/{id}', 'TodoController@Delete');