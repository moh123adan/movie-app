<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'MoviesController@index')->name('movies.index');
Route::get('/movies/{movie}', 'MoviesController@index')->name('movies.show');

// Route::view('/', 'index');
// Route::view('/movie', 'show');




// Route::get('/', function () {
//     return view('home');
// });
