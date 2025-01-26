<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
use App\Http\Controllers\Auth\AuthenticatedSessionController;

=======
use App\Http\Controllers\ProductController;
Route::get('/', function () {
    return view('welcome');
});
>>>>>>> 8925a9c51e44c972c03cd92d6fa3b06a0c7a08d3

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



Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('/products', [ProductController::class, 'store'])->name('products.store');
Route::get('/products', [ProductController::class, 'index'])->name('products.index');

require __DIR__ . '/auth.php';
