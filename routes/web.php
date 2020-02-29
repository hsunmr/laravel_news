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

Route::get('/','HomeController@index')->name('home');

Route::resource('/news', 'NewsController');
Route::post('/comment/{new_id}','CommentController@store')->name('comment.store') ->middleware('auth');
Route::get('/category','CategoryController@index')->name('category.index') ->middleware('auth');
Route::post('/category','CategoryController@store')->name('category.store') ->middleware('auth');
Auth::routes();
