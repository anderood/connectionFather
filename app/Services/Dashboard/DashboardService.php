<?php

namespace App\Services\Dashboard;

use App\Repositories\Dashboard\DashboardRepositoryInterface;

class DashboardService implements DashboardServiceInterface
{
    protected $homeRepository;

    public function __construct(DashboardRepositoryInterface $homeRepository)
    {
        $this->homeRepository = $homeRepository;
    }

    /**
     * @return mixed
     */
    public function getAllJobs()
    {
        return $this->homeRepository->getAllJobs();
    }
}
