<?php

use App\Http\Controllers\blogController;
use App\Http\Controllers\homeController;
use Illuminate\Support\Facades\Route;

Route::get('/',[homeController::class,'index'])->name('home.index');

/* Crear un grupo de controllers */
Route::controller(blogController::class)->group(function(){
    Route::get('blog','index')->name('blog.index');
    Route::get('blog/{post:slug}','show')->name('blog.show');
});

