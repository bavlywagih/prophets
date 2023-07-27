<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\login\LoginController;
Route::group(['prefix' => LaravelLocalization::setLocale(),'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]], function(){ 

Route::get ('/login', [LoginController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'login_post'])->name('login_post');
});