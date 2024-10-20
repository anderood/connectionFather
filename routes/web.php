<?php

use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Job\JobController;
use App\Http\Controllers\Login\LoginController;
use App\Http\Controllers\Patients\PatientController;
use App\Http\Controllers\Status\StatusController;
use App\Http\Controllers\Users\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/token', function () {
   return csrf_token();
});

Route::get("/", function () {
    return redirect()->route("login.index");
});


Route::controller(LoginController::class)->group(function () {
    Route::get("/login", [LoginController::class, "index"])->name("login.index");
    Route::post("/login", [LoginController::class, "store"])->name("login.store");
    Route::get("/logout", [LoginController::class, "destroy"])->name("login.destroy");
});

Route::middleware("auth")->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
    Route::get('/dashboard/events', [DashboardController::class, 'events']);

    Route::get("/users", [UserController::class, 'index'])->name("users.index");
    Route::get("/users/create", [UserController::class, 'create'])->name("users.create");
    Route::get("/users/{id}/edit", [UserController::class, 'edit'])->name("users.edit");
    Route::post("/users/create", [UserController::class, 'store'])->name("users.store");
    Route::put("/users/{id}/update", [UserController::class, 'update'])->name('users.update');
    Route::delete("/users/{id}/destroy", [UserController::class, 'destroy'])->name('users.destroy');

    Route::get("/patients", [PatientController::class, 'index'])->name("patients.index");
    Route::get("/patients/create", [PatientController::class, 'create'])->name("patients.create");
    Route::get("/patients/{id}/edit", [PatientController::class, 'edit'])->name("patients.edit");
    Route::post("/patients/create", [PatientController::class, 'store'])->name('patients.store');
    Route::put("/patients/{id}/update", [PatientController::class, 'update'])->name('patients.update');
    Route::delete("/patients/{id}/destroy", [PatientController::class, 'destroy'])->name('patients.destroy');

    Route::get("/status", [StatusController::class, 'index'])->name('status.index');
    Route::get("/status/create", [StatusController::class, 'create'])->name("status.create");
    Route::get("/status/{id}/edit", [StatusController::class, 'edit'])->name("status.edit");
    Route::post("/status/create", [StatusController::class, 'store'])->name('status.store');
    Route::put("/status/{id}/update", [StatusController::class, 'update'])->name('status.update');
    Route::delete("/status/{id}/destroy", [StatusController::class, 'destroy'])->name('status.destroy');

    Route::get("/jobs", [JobController::class, 'index'])->name('jobs.index');
    Route::get("/jobs/create", [JobController::class, 'create'])->name("jobs.create");
    Route::get("/jobs/{id}/edit", [JobController::class, 'edit'])->name("jobs.edit");
    Route::post("/jobs/create", [JobController::class, 'store'])->name("jobs.store");
    Route::put("/jobs/{id}/update", [JobController::class, 'update'])->name("jobs.update");
    Route::delete("/jobs/{id}/destroy", [JobController::class, 'destroy'])->name("jobs.destroy");

});
