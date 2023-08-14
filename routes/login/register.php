<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\login\RegisterController;
Route::group(['prefix' => LaravelLocalization::setLocale(),'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]], function(){ 
Route::get('/register', [RegisterController::class, 'register_view'])->name('register_view');
Route::post('/register', [RegisterController::class, 'register'])->name('register');
});
