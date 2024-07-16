<?php

namespace App\Http\Controllers\Job;

use App\Http\Controllers\Controller;
use App\Http\Requests\Job\JobRequest;
use App\Models\Job;
use App\Services\Jobs\JobServiceInterface;
use App\Services\Patients\PatientServiceInterface;
use App\Services\Status\StatusServiceInterface;
use App\Services\UserServiceInterface;
use Illuminate\Http\Request;

class JobController extends Controller
{

    protected $jobService;

    protected $patientService;

    protected $userService;

    protected $statusService;

    public function __construct(
        JobServiceInterface $jobService,
        PatientServiceInterface $patientService,
        UserServiceInterface $userService,
        StatusServiceInterface $statusService,
    )
    {
        $this->jobService = $jobService;
        $this->patientService = $patientService;
        $this->userService = $userService;
        $this->statusService = $statusService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allJobs = $this->jobService->getAllJobs();
        return view('jobs.index', compact('allJobs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $patients = $this->patientService->getAllPatients();
        $users = $this->userService->allUsers();
        $status = $this->statusService->getAllStatus();
        return view('jobs.create_job', compact('patients', 'users', 'status'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(JobRequest $request)
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
        $job = $this->jobService->getJobById($id);
        $patients = $this->patientService->getAllPatients();
        $users = $this->userService->allUsers();
        return view('jobs.edit_job', compact('job', 'patients', 'users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(JobRequest $request, int $id)
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
