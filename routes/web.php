<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\HomeController;

Route::controller(HomeController::class)->group(function(){
    Route::get('/', 'index')->name('homepage');
});

Route::controller(AdminController::class)->group(function(){
    Route::get('/admin', 'adminIndex')->name('admini.dashboard');
});

