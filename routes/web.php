<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('homepage');
});

Route:: resource('/iphone', App\Http\Controllers\IphoneController::class);