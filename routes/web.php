<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;

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

Route::get("/register", [RegisterController::class, 'index']) ->middleware("guest")->name("showRegister");
Route::post("/register", [RegisterController::class, 'create']) ->middleware("guest")->name("submitRegister");

Route::get("/login", [LoginController::class, 'index']) ->middleware("guest")->name("login");
Route::post("/login", [LoginController::class, 'handleLogin']) ->middleware("guest")->name("handleLogin");

Route::get("/logout", [LoginController::class, 'destroy'])->name("logout");

Route::get("/users/users", [UserController::class, 'index']) ->name("showUsers");
Route::get("/users/users/{id}", [UserController::class, 'show']) ->name("showUser"); 
Route::post("/users/users/create", [UserController::class, 'create']) ->name("createUser");
Route::put("/users/users/{id}", [UserController::class, 'update']) ->name("updateUser");
Route::delete("/users/users/{id}", [UserController::class, 'delete']) ->name("deleteUser");

Route::get("/books/books", [BookController::class, 'index']) ->middleware("auth")->name("allBooks");
Route::get("/books/books/create", [BookController::class, 'showCreate']) ->middleware("auth")->name("showCreate"); 
Route::post("/books/books/create", [BookController::class, 'submitCreate']) ->middleware("auth")->name("submitCreate"); 
Route::get("/books/books/{id}", [BookController::class, 'show']) ->middleware("auth")->name("showBook");
Route::get("/books/books/{id}/edit", [BookController::class, 'editBook']) ->middleware("auth")->name("editBook");
Route::put("/books/books/{id}", [BookController::class, 'updateBook']) ->middleware("auth")->name("updateBook");
Route::delete("/books/books/{id}", [BookController::class, 'deleteBook']) ->middleware("auth")->name("deleteBook");


