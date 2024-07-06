<?php

namespace App\Services\Jobs;

interface JobServiceInterface
{
    public function getAllJobs();
    public function getJobById($id);
    public function createJob($data);
    public function updateJob($data, $id);
    public function deleteJob($id);
}
