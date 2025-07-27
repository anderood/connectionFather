<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('master');
});

Route::get('/pacientes', function () {
    return view('pacientes');
});

Route::get('/colaboradores', function () {
    return view('pacientes');
});
