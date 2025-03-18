<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/login', function(){
    return view('iniciosesion');
})->name('login');

Route::get('/registro', function(){
    return view('registro1');
})->name('registro');

Route::get('/registroAlumnos', function(){
    return view('registro2');
})->name('registroAlumnos');