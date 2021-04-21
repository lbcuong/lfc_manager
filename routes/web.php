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

// Main page
Route::get('/', 'App\Http\Controllers\MainPageController@index');

//Admin page
Route::get('/admin', 'App\Http\Controllers\adminPage@index');

//Player
Route::get('/show-player', 'App\Http\Controllers\PlayerController@show_player');

Route::get('/insert-player', 'App\Http\Controllers\PlayerController@insert_player');
Route::post('/save-player', 'App\Http\Controllers\PlayerController@save_player');

Route::get('/update-player', 'App\Http\Controllers\PlayerController@update');
Route::get('/update-player/{player_id}', 'App\Http\Controllers\PlayerController@update_player');
Route::post('/update-player/{player_id}', 'App\Http\Controllers\PlayerController@update_player_perform');

Route::get('/delete-player', 'App\Http\Controllers\PlayerController@delete');
Route::get('/delete-player/{player_id}', 'App\Http\Controllers\PlayerController@delete_player');



