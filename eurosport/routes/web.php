<?php

use App\User;

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

Route::get('/','PagesController@index');
Route::get('/about','PagesController@about');
Route::post('/search','SearchController@search');
Route::resource('/betting','BettingController');
Route::resource('/posts','PostController');
Auth::routes();
Route::get('/profile','UserController@profile');
Route::post('/profile','UserController@update_avatar');
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/editor','CKEditorController');
Route::post('/posts/{post}/comments','CommentsController@store');
