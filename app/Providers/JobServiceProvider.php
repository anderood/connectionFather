<?php

namespace App\Providers;

use App\Repositories\Jobs\JobRepository;
use App\Repositories\Jobs\JobRepositoryInterface;
use App\Services\Jobs\JobService;
use App\Services\Jobs\JobServiceInterface;
use Illuminate\Support\ServiceProvider;

class JobServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(
            JobServiceInterface::class,
            JobService::class
        );

        $this->app->bind(
            JobRepositoryInterface::class,
            JobRepository::class
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
