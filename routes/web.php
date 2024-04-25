<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('nardeen/{id}', function ($id) {
    return 'Welcome to my website' .$id;
});