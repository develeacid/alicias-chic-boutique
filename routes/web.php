<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;

/*
rutas base 
*/

Route::view('/', 'home')->name('home');
Route::view('/tienda', 'tienda')->name('tienda');
Route::view('/blog', 'blog')->name('blog');
Route::view('/contacto', 'contacto')->name('contacto');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->prefix('dashboard')->group(function () {
    Route::get('/', function () {
        return view('dashboard');
    })->name('dashboard');
    
    Route::get('/users', [UsuarioController::class, 'index'])->name('users');
});
