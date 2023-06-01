<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/doc-api', function () {
    return view('doca');
});

Auth::routes();
// Домашня сторінка

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// роути постів
Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
Route::get('/posts/{id}', [PostController::class, 'show'])->name('posts.show');
Route::get('/posts/{id}/edit', [PostController::class, 'edit'])->name('posts.edit');
Route::put('/posts/{id}', [PostController::class, 'update'])->name('posts.update');
Route::delete('/posts/{id}', [PostController::class, 'destroy'])->name('posts.destroy');



// roles
Route::get('/roles', [App\Http\Controllers\RoleController::class, 'index'])->name('roles.index');
Route::get('/roles/create', [App\Http\Controllers\RoleController::class, 'create'])->name('roles.create');
Route::post('/roles', [App\Http\Controllers\RoleController::class, 'store'])->name('roles.store');
Route::get('/roles/{id}', [App\Http\Controllers\RoleController::class, 'show'])->name('roles.show');
Route::get('/roles/{id}/edit', [App\Http\Controllers\RoleController::class, 'edit'])->name('roles.edit');
Route::put('/roles/{id}',[App\Http\Controllers\RoleController::class, 'update'] )->name('roles.update');
Route::delete('/roles/{id}', [App\Http\Controllers\RoleController::class, 'destroy'])->name('roles.destroy');

// категорії
Route::get('/categories/create', [App\Http\Controllers\CategoryController::class, 'create'])->name('categories.create');
Route::post('/categories', [App\Http\Controllers\CategoryController::class, 'store'])->name('categories.store');
Route::get('/categories/{id}/edit', [App\Http\Controllers\CategoryController::class, 'edit'])->name('categories.edit');
Route::put('/categories/{id}', [App\Http\Controllers\CategoryController::class, 'update'])->name('categories.update');
Route::delete('/categories/{id}', [App\Http\Controllers\CategoryController::class, 'destroy'])->name('categories.destroy');
Route::get('/categories/{id}', [App\Http\Controllers\CategoryController::class, 'show'])->name('categories.show');
Route::get('/categories', [App\Http\Controllers\CategoryController::class, 'index'])->name('categories.index');

