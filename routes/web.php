<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;


Route::get('supervisor/dashboard', [AuthenticatedSessionController::class, 'showCards'])
    ->middleware(['auth', 'verified', 'rolemanager:supervisor'])
    ->name('supervisordash');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('cashier/dashboard', function () {
    return view('cashierdash');
})->middleware(['auth', 'verified', 'rolemanager:cashier'])->name('cashierdash');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
