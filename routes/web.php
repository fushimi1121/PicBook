<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/', 'App\Http\Controllers\SearchController@index')->name('search.index');

Route::get('books', 'App\Http\Controllers\BookController@index')->name('books.index');
Route::get('books/{book}', 'App\Http\Controllers\BookController@show')->name('books.show');
Route::get('books/{book}/reviews','App\Http\Controllers\ReviewController@store')->name('book.review.store');

Route::get('{genre}','App\Http\Controllers\GenreController@show')->name('genres.show');
