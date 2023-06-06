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

Route::get('/characters', function () {
    return view('no-page');
})->name('characters');

Route::get('/', function () {
  return view('home');
})->name('comics');

Route::get('/movies', function () {
  return view('no-page');
})->name('movies');

Route::get('/tv', function () {
  return view('no-page');
})->name('tv');

Route::get('/games', function () {
  return view('no-page');
})->name('games');

Route::get('/collectibles', function () {
  return view('no-page');
})->name('collectibles');

Route::get('/videos', function () {
  return view('no-page');
})->name('videos');

Route::get('/fans', function () {
  return view('no-page');
})->name('fans');

Route::get('/news', function () {
  return view('no-page');
})->name('news');

Route::get('/shop', function () {
  return view('no-page');
})->name('shop');

Route::get('/comic-info', function () {
  return view('no-page');
})->name('infos');

Route::get('/no-page', function () {
  return view('no-page');
})->name('#');
