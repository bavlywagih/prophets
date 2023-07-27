<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\home\HomeController;


Route::group(['prefix' => LaravelLocalization::setLocale(),'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]], function(){ 
        Route::get('/', [HomeController::class, 'index'])->name('index');
});