<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


// Show user list
Route::get('/', [UserController::class, 'index'])->name('users.index');

// Show create user form
Route::get('/users/create', [UserController::class, 'create'])->name('users.create');

// Store new user
Route::post('/users', [UserController::class, 'store'])->name('users.store');

// Show edit user form
Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');

// Update user
Route::put('/users/{user}', [UserController::class, 'update'])->name('users.update');

// Delete user
Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');
