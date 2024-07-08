<?php

namespace App\Repositories\Home;

use App\Models\Job;

class HomeRepository implements HomeRepositoryInterface
{

    /**
     * @return mixed
     */
    public function getAllJobs()
    {
        return Job::all();
    }
}
