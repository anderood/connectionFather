<?php

namespace App\Http\Controllers\Job;

use App\Http\Controllers\Controller;
use App\Models\Job;
use App\Services\Jobs\JobServiceInterface;
use Illuminate\Http\Request;

class JobController extends Controller
{

    protected $jobService;

    public function __construct(JobServiceInterface $jobService)
    {
        $this->jobService = $jobService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('jobs.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $job = $request->all();
        return $this->jobService->createJob($job);
    }

    /**
     * Display the specified resource.
     */
    public function show(Job $job)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        return $this->jobService->getJobById($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        $job = $request->all();
        return $this->jobService->updateJob($job, $id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        return $this->jobService->deleteJob($id);
    }
}
