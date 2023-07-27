<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Prophets\ProphetsController;

Route::group(['prefix' => LaravelLocalization::setLocale(),'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]], function(){ 
    Route::get('/Prophets', [ProphetsController::class, 'Prophets'])->name('Prophets');
    Route::get('/Prophets_create', [ProphetsController::class, 'Prophets_create'])->name('Prophets_create');
    Route::post('/Prophets_create_post', [ProphetsController::class, 'Prophets_create_post'])->name('Prophets_create_post');
    Route::get('/Prophet_show/{id}', [ProphetsController::class, 'Prophet_show'])->name('Prophet_show');
    
});