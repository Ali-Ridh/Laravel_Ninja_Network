<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarberController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/Barbers', [BarberController::class, 'index'])->name('barbers.index');
Route::get('/Barbers/Create', [BarberController::class, 'create'])->name('barbers.create');
Route::get('/Barbers/{id}', [BarberController::class, 'show'])->name('barbers.show');
