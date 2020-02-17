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

Auth::routes();


// Login Routes

    // Regular user

Route::get('/home', 'HomeController@index')->name('home');

    // Admin User

Route::get('admin/home', 'HomeController@adminHome')->name('admin.home')->middleware('is_admin');

// Import and Export Routes

Route::get('import-export', 'ImportController@importExport');
Route::post('import', 'ImportController@import');
Route::get('export', 'ImportController@export');

// Character

Route::get('character/create', 'CharacterController@create')->name('character.create');
Route::patch('character', 'CharacterController@store')->name('character.store');
Route::get('character/{$character}', 'CharacterController@show')->name('character.show');

// Game

Route::get('game', 'EventController@index')->name('event.index');
Route::patch('game', 'EventController@update')->name('event.update');
Route::get('game/leaderboard', 'EventController@show')->name('event.show');

