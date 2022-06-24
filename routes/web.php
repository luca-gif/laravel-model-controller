<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'PageController@index')->name('home');
Route::get('/header', 'PageController@header')->name('header');
Route::get('/contatti', 'PageController@contacts')->name('contacts');
Route::get('/chi-siamo', 'PageController@about')->name('about');
Route::get('/movies', 'MovieController@index')->name('movies');
