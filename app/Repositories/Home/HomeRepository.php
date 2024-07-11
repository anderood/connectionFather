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
       $jobs = Job::with('user')->get();

       $users = $jobs->pluck('user')->unique('id');

        return $users->map(function ($user) use ($jobs) {
           return [
               'user_id' => $user->id,
               'name' => $user->name,
               'total' => $jobs->where('user_id', $user->id)->count()
           ];
        });
    }
}
