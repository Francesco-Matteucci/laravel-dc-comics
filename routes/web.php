<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComicController;

Route::get('/', function () {
    return view('home');
});

Route::resource('comics', ComicController::class);
Route::get('/comics/{id}/edit', [ComicController::class, 'edit'])->name('comics.edit');