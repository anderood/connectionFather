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
        Job::create($data);
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
