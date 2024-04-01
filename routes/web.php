<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\templateController;
use Illuminate\Support\Facades\Route;

Route::get('/', [templateController::class, 'index']);
Route::get('/blogs', [BlogController::class, 'index']);
Route::get('/blogs/details', [BlogController::class, 'show']);
//form route
Route::get('/contact', [ContactController::class, 'index']);
Route::post('/contact', [ContactController::class, 'store']);
