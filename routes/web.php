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

Route::get('/', 'PagesController@inicio');

Route::get('fotos', 'PagesController@fotos')->name('foto');

Route::get('noticias', 'PagesController@noticias')->name('noticias');

Route::get('nosotros/{noombres?}', 'PagesController@nosotros')->name('nosotros');
