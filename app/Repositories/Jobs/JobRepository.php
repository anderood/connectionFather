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
        return Job::all()->sortDesc();
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
        $job = [
            'title' => $data['title'],
            'description' => $data['description'],
            'user_id' => $data['user_id'],
            'patient_id' => $data['patient_id'],
            'address_id' => $data['address_id'],
            'date_scheduling' => $data['date_scheduling'],
            'status_job_id' => $data['status_id'],
        ];

        Job::create($job);
        return redirect()->route('jobs.index')->with('success', 'Agendamento realizado com sucesso!');
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

        return redirect()->route('jobs.index')->with('success', 'Agendamento atualizado com sucesso!');
    }

    /**
     * @param $id
     * @return mixed
     */
    public function deleteJob($id)
    {
        Job::destroy($id);
        return redirect()->route('jobs.index')->with('success', 'Agendamento excluido com sucesso!');
    }
}
