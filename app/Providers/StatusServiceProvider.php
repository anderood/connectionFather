<?php

namespace App\Providers;

use App\Repositories\Status\StatusRepository;
use App\Repositories\Status\StatusRepositoryInterface;
use App\Services\Status\StatusService;
use App\Services\Status\StatusServiceInterface;
use Illuminate\Support\ServiceProvider;

class StatusServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(
            StatusServiceInterface::class,
            StatusService::class
        );

        $this->app->bind(
            StatusRepositoryInterface::class,
            StatusRepository::class
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
