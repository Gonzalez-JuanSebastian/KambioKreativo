<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactoController;


// Página principal
Route::get('/home', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
})->name('home');

// Páginas de servicios específicos
Route::get('/diseno-grafico', function () {
    return view('services.diseno');
})->name('diseno-grafico');

Route::get('/publicidad-marketing', function () {
    return view('services.marketing');
})->name('publicidad-marketing');

Route::get('/desarrollo-software', function () {
    return view('services.software');
})->name('desarrollo-software');

Route::post('/contacto', [ContactoController::class, 'store'])->name('contacto.store');

Route::get('/diseño', function () {
    return view('diseño');
})->name('diseño');

Route::get('/desarrollo', function () {
    return view('desarrollo');
})->name('desarrollo');

Route::get('/marketing', function () {
    return view('marketing');
})->name('marketing');