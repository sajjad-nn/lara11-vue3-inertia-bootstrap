<?php

use App\Http\Controllers\frontendcontroller;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\productController;

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', [frontendcontroller::class,'index'])->name('Home');
Route::get('/contact ', [frontendcontroller::class,'contact'])->name('contact');
Route::inertia('/about','front/about')->name('about');
route::resource('product',productController::class);

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
