<?php

use App\Http\Controllers\templateController;
use Illuminate\Support\Facades\Route;

Route::get('/', [templateController::class, 'index']);
