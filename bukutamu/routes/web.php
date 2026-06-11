<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuestBookController;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/guestbook', [GuestBookController::class, 'index'])->name('guestbook');

    Route::post('/guestbook/store', [GuestBookController::class, 'store'])->name('guestbook.store');

});

Route::middleware(['auth', 'can:isAdmin'])->group(function () {

    Route::get('/admin', [AdminController::class, 'dashboard'])->name('admin.dashboard');

    Route::get('/admin/guestbooks', [AdminController::class, 'guestbooks'])->name('admin.guestbooks');

    Route::get('/admin/users', [AdminController::class, 'users'])->name('admin.users');

    Route::delete('/admin/delete/{id}', [AdminController::class, 'destroy'])->name('admin.delete');

});

require __DIR__.'/auth.php';