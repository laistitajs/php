<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/form-receive', function () {
    return view('form-receive', ['feedback' => $_GET['feedback']]);
});