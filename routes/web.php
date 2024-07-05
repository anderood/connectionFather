<?php

use App\Http\Controllers\Users\UserController;
use Illuminate\Support\Facades\Route;

Route::get("/", [UserController::class, 'index'])->name("home");
Route::get("/{id}", [UserController::class, 'edit']);
Route::post("/create", [UserController::class, 'store']);
Route::put("/update/{id}", [UserController::class, 'update']);
Route::delete("/destroy/{id}/", [UserController::class, 'destroy']);
