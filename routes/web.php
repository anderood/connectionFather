<?php

use App\Http\Controllers\Users\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/token', function () {
   return csrf_token();
});

Route::get("/users", [UserController::class, 'index'])->name("home");
Route::get("/users/{id}", [UserController::class, 'edit']);
Route::post("/users/create", [UserController::class, 'store']);
Route::put("/users/{id}/update", [UserController::class, 'update']);
Route::delete("/users/{id}/destroy", [UserController::class, 'destroy']);
