<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;


Route::get('/', [ MainController::class, 'Homepage' ]);
Route::get('/login', [ MainController::class, 'Login' ]);
Route::get('/search', [ MainController::class, 'Search' ]);
Route::get('/admin', [ AdminController::class, 'AdminPage' ]);