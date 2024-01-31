<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
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
Route::post("/users/users/create", [PostController::class, 'create']) ->name("createUser");
Route::put("/users/users/{id}", [UserController::class, 'update']) ->name("updateUser");
Route::delete("/users/users/{id}", [UserController::class, 'delete']) ->name("deleteUser");



