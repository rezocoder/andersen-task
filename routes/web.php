<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;

Route::get('/', [FormController::class, 'index']);
Route::post('/submit', [FormController::class, 'submit']);