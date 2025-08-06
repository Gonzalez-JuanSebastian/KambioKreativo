<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactoController;


// Página principal
Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::post('/contacto', [ContactoController::class, 'store'])->name('contacto.store');

Route::get('/diseno', function () {
    return view('diseno');
})->name('diseno');

Route::get('/desarrollo', function () {
    return view('desarrollo');
})->name('desarrollo');

Route::get('/marketing', function () {
    return view('marketing');
})->name('marketing');