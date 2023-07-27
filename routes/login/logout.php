<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\login\LogoutController;


  Route::get('/logout', [LogoutController::class, 'logout'])->name('logout');
