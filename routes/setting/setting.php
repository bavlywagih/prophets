<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Setting\SettingController;

Route::group(['prefix' => LaravelLocalization::setLocale(),'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]], function(){ 
  Route::get('/Setting', [SettingController::class, 'Setting'])->name('Setting');
  Route::post('/Setting_update', [SettingController::class, 'Setting_update'])->name('Setting_update');
});
