<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DistritosController;
Route::get('/', function () {
    return view('welcome');
});
Route::get('cities', [DistritosController::class, 'index']);