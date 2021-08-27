<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/teste', function () {
    return view('welcome');
});

Route::get('/admin', function () {
    return response('success');
});

Route::get('/user', function () {
    return response('USER TESTE');
});
