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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('/user/{id}', 'UserController@index')->name('user');
Route::get('/user/{id}/games', 'UserController@games')->name('user.games');

Route::get('/game/create', 'GameController@create')->name('game.create');
Route::get('/game/{id}', 'GameController@index')->name('game.index');
