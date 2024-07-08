<?php

namespace App\Services\Home;

use App\Repositories\Home\HomeRepositoryInterface;

class HomeService implements HomeServiceInterface
{
    protected $homeRepository;

    public function __construct(HomeRepositoryInterface $homeRepository)
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
