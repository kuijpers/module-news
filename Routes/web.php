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

Route::prefix('news')->group(function() {
    Route::get('/', 'NewsController@index')->name('main.news');

    Route::get('/post', 'NewsController@show')->name('main.news.post');
});

