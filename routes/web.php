<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;


Route::get('/',[PagesController::class, 'home']);
Route::post('sumar/{valor1}/{valor2}',[PagesController::class, 'sumar']);




