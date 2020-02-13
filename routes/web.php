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
