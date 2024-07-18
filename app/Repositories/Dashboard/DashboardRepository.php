<?php

namespace App\Repositories\Dashboard;

use App\Models\Job;

class DashboardRepository implements DashboardRepositoryInterface
{

    /**
     * @return mixed
     */
    public function getAllJobs()
    {
       $jobs = Job::with('user')->get();
       $data = [];
       foreach ($jobs as $job) {
           $data[] = [
               'id' => $job->id,
               'title' => $job->user->name,
               'start' => $job->date_scheduling,
           ];
       }

       return $data;

//       $users = $jobs->pluck('user')->unique('id');
//
//        return $users->map(function ($user) use ($jobs) {
//           return [
//               'user_id' => $user->id,
//               'name' => $user->name,
//               'total' => $jobs->where('user_id', $user->id)->count()
//           ];
//        });
    }
}
