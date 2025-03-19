<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/busquedapi', function () {
    return view('busquedapi');
});

Route::get('/revision', function(){
    return view('revision');
});

Route::get('/login', function(){
    return view('iniciosesion');
});