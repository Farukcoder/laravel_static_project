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

use Illuminate\Support\Facades\Route;

Route::get('/','HomeController@ShowHome');
Route::get('/about','HomeController@ShowAbout');
Route::get('/contact','HomeController@ShowContact');
Route::get('/courses','HomeController@ShowCourses');
Route::get('/events','HomeController@ShowEvents');
