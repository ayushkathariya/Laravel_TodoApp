<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

/* Home Page Route */

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

/* Todo Routes */

Route::get('/dashboard', [TodoController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/create-post', [TodoController::class, 'create'])->name('todo.create');
Route::post('/create-post', [TodoController::class, 'store'])->name('todo.store');
Route::get('/todos/{id}/edit', [TodoController::class, 'edit'])->name('todo.edit');
Route::put('/todos/{id}/edit', [TodoController::class, 'update'])->name('todo.update');
Route::delete('/todos/{id}/destroy', [TodoController::class, 'destroy'])->name('todo.destroy');

/* User Profile Routes */

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

/* Admin Routes */

Route::prefix('admin')->group(function () {
    Route::view('dashboard', 'admin.dashboard')->name('admin.dashboard');
    Route::view('users', 'admin.users')->name('admin.users');
    Route::view('users/{id}', 'admin.user-detail')->name('admin.user-detail');
    Route::view('todos', 'admin.todos')->name('admin.todos');
    Route::view('todos/{id}', 'admin.todo-detail')->name('admin.todo-detail');
});

/* API Routes */

require __DIR__ . '/auth.php';
