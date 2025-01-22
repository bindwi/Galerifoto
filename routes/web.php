<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\PageController;

Route::get('/', [PhotoController::class, 'index'])->name('photos.index');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/photos/create', [PhotoController::class, 'create'])->name('photos.create');
Route::post('/photos', [PhotoController::class, 'store'])->name('photos.store');
Route::get('/photos/{photo}/edit', [PhotoController::class, 'edit'])->name('photos.edit');
Route::put('/photos/{photo}', [PhotoController::class, 'update'])->name('photos.update');
Route::delete('/photos/{photo}', [PhotoController::class, 'destroy'])->name('photos.destroy');
Route::delete('/photos/{photo}', [PhotoController::class, 'destroy'])->name('photos.destroy');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/peta', function () {
    return view('peta');
})->name('peta');
