<?php

use App\Http\Controllers\Job\JobController;
use App\Http\Controllers\Patients\patientController;
use App\Http\Controllers\Status\StatusController;
use App\Http\Controllers\Users\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/token', function () {
   return csrf_token();
});

Route::get('/', function () {
    return view('home');
});

Route::get("/users", [UserController::class, 'index'])->name("users.index");
Route::get("/users/{id}", [UserController::class, 'edit']);
Route::post("/users/create", [UserController::class, 'store'])->name("users.store");
Route::put("/users/{id}/update", [UserController::class, 'update']);
Route::delete("/users/{id}/destroy", [UserController::class, 'destroy']);

Route::get("/patients", [PatientController::class, 'index'])->name("patients.index");
Route::get("/patients/{id}", [PatientController::class, 'edit']);
Route::post("/patients/create", [PatientController::class, 'store']);
Route::put("/patients/{id}/update", [PatientController::class, 'update']);
Route::delete("/patients/{id}/destroy", [PatientController::class, 'destroy']);

Route::get("/status", [StatusController::class, 'index'])->name('status.index');
Route::get("/status/{id}", [StatusController::class, 'edit']);
Route::post("/status/create", [StatusController::class, 'store']);
Route::put("/status/{id}/update", [StatusController::class, 'update']);
Route::delete("/status/{id}/destroy", [StatusController::class, 'destroy']);

Route::get("/jobs", [JobController::class, 'index'])->name('jobs.index');
Route::get("/jobs/{id}", [JobController::class, 'edit']);
Route::post("/jobs/create", [JobController::class, 'store']);
Route::put("/jobs/{id}/update", [JobController::class, 'update']);
Route::delete("/jobs/{id}/destroy", [JobController::class, 'destroy']);
