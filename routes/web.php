<?php

use App\Http\Controllers\FormularioJogos;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('formJogos' ,'FormularioJogos');
