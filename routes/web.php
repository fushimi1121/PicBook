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
Route::get('books/{id}', 'App\Http\Controllers\BookController@show')->name('books.show');
Route::post('books/reviews/create','App\Http\Controllers\ReviewController@create')->name('book.reviews.create');

Route::get('{genre}','App\Http\Controllers\GenreController@show')->name('genres.show');
