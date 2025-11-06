<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('inicio');

Route::get('/formulario', function () {
    return view('formulario');
})->name('formulario');
