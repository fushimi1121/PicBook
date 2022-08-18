<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

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
//トップページ
Route::get('/', 'App\Http\Controllers\TopicController@index')->name('topic.index');;

Route::get('books', 'App\Http\Controllers\BookController@index')->name('books.index');
Route::get('books/{book}', 'App\Http\Controllers\BookController@show')->name('books.show');

