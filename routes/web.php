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

Route::get('/', function () {
    return view('welcome');
});

Route::get('gameworld/{id}', 'GameworldController@show');
Route::get('selections', 'SelectionController@index');
Route::get('fixtures/{id}', 'FixtureController@show');
Route::get('fixtures/', 'FixtureController@index');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
