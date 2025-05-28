<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComputadorController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('computadores', ComputadorController::class);
