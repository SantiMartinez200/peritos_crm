<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

//Landing
Route::get('/', function () {
    if (auth()->check()) {
        return Inertia::render('Landing', ['user' => auth()->user()]);
    }

    return Inertia::render('Welcome');
})->name('inicio');

//Routes organized by types of vehicles
Route::get('/{categoria}', [PostController::class, 'index'])
    ->whereIn('categoria', ['autos', 'motos', 'camiones', 'nautica', 'agricola','servicios'])
    ->name('vehicles.index');

Route::middleware(['auth', 'verified'])->group(function () {    
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');


    Route::get('/create-post', function() {
        return Inertia::render('posts/Post');
    })->name('crear-publicacion');

    Route::Post('/car-publish', [PostController::class,'store'])->name('publicar-auto');
    
});

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
