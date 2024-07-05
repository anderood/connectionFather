<?php

namespace App\Providers;

use App\Repositories\Patients\PatientRepository;
use App\Repositories\Patients\PatientRepositoryInterface;
use App\Services\Patients\PatientService;
use App\Services\Patients\PatientServiceInterface;
use Illuminate\Support\ServiceProvider;

class PatientServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(
            PatientServiceInterface::class,
            PatientService::class
        );

        $this->app->bind(
            PatientRepositoryInterface::class,
            PatientRepository::class
        );
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
