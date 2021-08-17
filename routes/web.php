<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;


Route::get('/', [ MainController::class, 'Homepage' ]);
Route::get('/login', [ MainController::class, 'Login' ]);
