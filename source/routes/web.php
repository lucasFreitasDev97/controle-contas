<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DebitController;
use App\Http\Controllers\DebitRegistrationController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->group(function (){
   Route::get('/debits', [DebitController::class, 'index'])->name('debits.index');
   Route::get('/debits/create', [DebitController::class, 'create'])->name('debits.create');
   Route::post('/debits/store', [DebitController::class, 'store'])->name('debits.store');
   Route::get('/debits/edit/{debit}', [DebitController::class, 'edit'])->name('debits.edit');
   Route::put('/debits/update/{debit}', [DebitController::class, 'update'])->name('debits.update');
   Route::get('/debits/destroy/{debit}', [DebitController::class, 'destroy'])->name('debits.destroy');

   Route::get('/debit-registrations/', [DebitRegistrationController::class, 'index'])->name('debit-registrations.index');
   Route::get('/debit-registrations/create', [DebitRegistrationController::class, 'create'])->name('debit-registrations.create');
});

require __DIR__.'/auth.php';
