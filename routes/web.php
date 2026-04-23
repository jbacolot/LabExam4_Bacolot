<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MenuController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PaymentController;

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

    // MENU
    Route::get('/menus', [MenuController::class,'index'])->name('menus.index');
    Route::get('/menus/create', [MenuController::class,'create'])->name('menus.create');
    Route::post('/menus/store', [MenuController::class,'store'])->name('menus.store');
    Route::get('/menus/edit/{id}', [MenuController::class,'edit'])->name('menus.edit');
    Route::post('/menus/update/{id}', [MenuController::class,'update'])->name('menus.update');
    Route::get('/menus/delete/{id}', [MenuController::class,'destroy'])->name('menus.delete');

    // ORDER
    Route::get('/orders', [OrderController::class,'index'])->name('orders.index');
    Route::get('/orders/create', [OrderController::class,'create'])->name('orders.create');
    Route::post('/orders/store', [OrderController::class,'store'])->name('orders.store');

    // PAYMENT
    Route::get('/payments', [PaymentController::class,'index'])->name('payments.index');
    Route::post('/payments/store', [PaymentController::class,'store'])->name('payments.store');
});


require __DIR__.'/auth.php';
