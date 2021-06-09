<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('partida' ,'PartidaController');
Route::resource('logos' ,'LogoController');
Route::get('/partida/pdf','PartidaController@createPDF');
