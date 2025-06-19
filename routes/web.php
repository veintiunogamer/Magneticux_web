<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\DefaultController;


/*
 * ✅ Rutas para landing publica
*/
Route::get('/', function () {
    return view('frontend.home'); // Pagina Inicio
});

Route::get('/home', function () {
    return view('frontend.home'); // Pagina Inicio
});

Route::get('/services', function () {
    return view('frontend.services.index'); // Pagina Inicio
});

// Enturador a cada uno de los servicios presentados en el front-end
Route::get('/service_detail/{service_name}', [DefaultController::class, 'serviceDetail'])->name('servicio.detalle');

/*
 * ✅ Auth (puedes usar Laravel Breeze, Fortify o Jetstream)
*/
// Auth::routes();


/*
 * ✅ Rutas para dashboard - backend
*/