<?php

namespace App\Repositories\Jobs;

use App\Models\Job;

class JobRepository implements JobRepositoryInterface
{

    /**
     * @return mixed
     */
    public function getAllJobs()
    {
        return Job::all();
    }

    /**
     * @param $id
     * @return mixed
     */
    public function getJobById($id)
    {
        return Job::find($id);
    }

    /**
     * @param $data
     * @return mixed
     */
    public function createJob($data)
    {
        return Job::create($data);
    }

    /**
     * @param $data
     * @param $id
     * @return mixed
     */
    public function updateJob($data, $id)
    {
        $job = $this->getJobById($id);
        $job->fill($data);
        $job->save();

        return $job;
    }

    /**
     * @param $id
     * @return mixed
     */
    public function deleteJob($id)
    {
        return Job::destroy($id);
    }
}
