<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\Admin\TodoController as AdminTodoController;
use App\Http\Controllers\Admin\UserController as AdminUserController;

/* Home Page Route */

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

/* Email Routes */

Route::get('send-email', [MailController::class, 'sendEmail']);

/* Todo Routes */

Route::get('/dashboard', [TodoController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/create-post', [TodoController::class, 'create'])->name('todo.create');
Route::post('/create-post', [TodoController::class, 'store'])->name('todo.store');
Route::get('/todos/{todo}/edit', [TodoController::class, 'edit'])->name('todo.edit');
Route::put('/todos/{todo}/edit', [TodoController::class, 'update'])->name('todo.update');
Route::delete('/todos/{todo}/destroy', [TodoController::class, 'destroy'])->name('todo.destroy');

/* User Profile Routes */

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

/* Admin Routes */

Route::prefix('admin')->group(function () {
    Route::redirect('', '/admin/dashboard');
    Route::get('dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('users', [AdminUserController::class, 'index'])->name('admin.users');
    Route::get('users/{id}', [AdminUserController::class, 'edit'])->name('admin.user-detail');
    Route::put('users/{id}', [AdminUserController::class, 'update'])->name('admin.user-update');
    Route::get('todos', [AdminTodoController::class, 'index'])->name('admin.todos');
    Route::get('todos/{id}', [AdminTodoController::class, 'edit'])->name('admin.todo-detail');
    Route::put('todos/{id}', [AdminTodoController::class, 'update'])->name('admin.todo-update');
    Route::delete('todos/{id}', [AdminTodoController::class, 'destroy'])->name('admin.todo-destroy');
});

/* API Routes */

require __DIR__ . '/auth.php';
