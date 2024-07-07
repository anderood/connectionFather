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
Route::get("/users/create", [UserController::class, 'create'])->name("users.create_user");
Route::get("/users/{id}/edit", [UserController::class, 'edit'])->name("users.edit_user");
Route::post("/users/create", [UserController::class, 'store'])->name("users.store");
Route::put("/users/{id}/update", [UserController::class, 'update'])->name('users.update');
Route::delete("/users/{id}/destroy", [UserController::class, 'destroy'])->name('users.destroy');

Route::get("/patients", [PatientController::class, 'index'])->name("patients.index");
Route::get("/patients/create", [PatientController::class, 'create'])->name("patients.create_patient");
Route::get("/patients/{id}/edit", [PatientController::class, 'edit'])->name("patients.edit_patient");
Route::post("/patients/create", [PatientController::class, 'store'])->name('patients.store');
Route::put("/patients/{id}/update", [PatientController::class, 'update'])->name('patients.update');
Route::delete("/patients/{id}/destroy", [PatientController::class, 'destroy'])->name('patients.destroy');

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
