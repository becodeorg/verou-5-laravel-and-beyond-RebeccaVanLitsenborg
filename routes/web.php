<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BookController;

use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index']) ->name("home");

Route::get("/users/users", [UserController::class, 'index']) ->name("showUsers");
Route::get("/users/users/{id}", [UserController::class, 'show']) ->name("showUser"); 
Route::post("/users/users/create", [UserController::class, 'create']) ->name("createUser");
Route::put("/users/users/{id}", [UserController::class, 'update']) ->name("updateUser");
Route::delete("/users/users/{id}", [UserController::class, 'delete']) ->name("deleteUser");

Route::get("/books/books", [BookController::class, 'index']) ->name("allBooks");
Route::get("/books/books/create", [BookController::class, 'showCreate']) ->name("showCreate"); 
Route::post("/books/books/create", [BookController::class, 'submitCreate']) ->name("submitCreate"); 
Route::get("/books/books/{id}", [BookController::class, 'show']) ->name("showBook");
Route::get("/books/books/{id}/edit", [BookController::class, 'editBook'])->name("editBook");
Route::put("/books/books/{id}", [BookController::class, 'updateBook'])->name("updateBook");
Route::delete("/books/books/{id}", [BookController::class, 'deleteBook']) ->name("deleteBook");


