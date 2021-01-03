<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\HomeController;
// use App\Http\Controllers\GolonganController;


Route::get('posts', 'PostController@index');
Route::get('posts/{post:slug}', 'PostController@show');


// Route::get('/', [HomeController::class, 'index']); ---laravel 8 new routing

Route::get('/', 'HomeController@index');
// Route::get('golongans/{golongan:slug}', 'GolonganController@show');
Route::prefix('golongan')->group(function () {
    Route::get('', 'GolonganController@show')->name('golongan.show');
});
