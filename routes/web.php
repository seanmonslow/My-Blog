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

use App\Post;

Auth::routes();

Route::get('/', 'PostController@index');
/*
Route::get('/about', );

Route::get('/admin', );

Route::get('/admin/create-post', );

Route::post('/admin/create-post', );

Route::get('/post/{id}', )*/

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/createpost', 'PostController@create')->middleware('auth');

Route::post('/createpost', 'PostController@store')->middleware('auth');