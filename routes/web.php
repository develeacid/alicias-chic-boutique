<?php

use Illuminate\Support\Facades\Route;

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
    
    Route::get('/users', function () {
        return view('users');
    })->name('users');
});
