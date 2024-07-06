<?php

namespace App\Services\Jobs;

use App\Repositories\Jobs\JobRepositoryInterface;

class JobService implements JobServiceInterface
{

    protected $jobRepository;

    public function __construct(JobRepositoryInterface $jobRepository)
    {
        $this->jobRepository = $jobRepository;
    }

    /**
     * @return mixed
     */
    public function getAllJobs()
    {
        return $this->jobRepository->getAllJobs();
    }

    /**
     * @param $id
     * @return mixed
     */
    public function getJobById($id)
    {
        return $this->jobRepository->getJobById($id);
    }

    /**
     * @param $data
     * @return mixed
     */
    public function createJob($data)
    {
        return $this->jobRepository->createJob($data);
    }

    /**
     * @param $data
     * @param $id
     * @return mixed
     */
    public function updateJob($data, $id)
    {
        return $this->jobRepository->updateJob($data, $id);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function deleteJob($id)
    {
        return $this->jobRepository->deleteJob($id);
    }
}
