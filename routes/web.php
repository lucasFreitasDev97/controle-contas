<?php

use App\Http\Controllers\ContasController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriasContasController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/categorias-conta', [CategoriasContasController::class, 'index'])->name('categorias-conta.index');
Route::get('/categorias-conta/form/{categoria?}', [CategoriasContasController::class, 'form'])->name('categorias-conta.form');
Route::post('/categorias-conta/store', [CategoriasContasController::class, 'store'])->name('categorias-conta.store');
Route::post('/categorias-conta/update/{categoria}', [CategoriasContasController::class, 'update'])->name('categorias-conta.update');
Route::get('/categorias-conta/destroy/{categoria}', [CategoriasContasController::class, 'destroy'])->name('categorias-conta.destroy');
