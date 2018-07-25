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

// home page route
Route::get('/', 'StaticPagesController@home');
// help page route
Route::get('/help', 'StaticPagesController@help');
// about page route
Route::get('/about', 'StaticPagesController@about');
