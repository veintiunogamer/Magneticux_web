<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


/*
 * ✅ Rutas para landing publica
*/
Route::get('/', function () {
    return view('frontend.home'); // Pagina Inicio
});

Route::get('/home', function () {
    return view('frontend.home'); // Pagina Inicio
});


/*
 * ✅ Auth (puedes usar Laravel Breeze, Fortify o Jetstream)
*/
// Auth::routes();


/*
 * ✅ Rutas para dashboard - backend
*/