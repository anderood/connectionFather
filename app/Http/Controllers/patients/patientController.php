<?php

namespace App\Http\Controllers\patients;

use App\Http\Controllers\Controller;
use App\Services\Patients\PatientServiceInterface;
use Illuminate\Http\Request;

class patientController extends Controller
{
    protected $patientService;

    public function __construct(PatientServiceInterface $patientService)
    {
        $this->patientService = $patientService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return $this->patientService->getAllPatients();
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
        $patient = $request->all();
        return $this->patientService->createPatient($patient);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return $this->patientService->getPatientById($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $patient = $request->all();
        return $this->patientService->updatePatient($patient, $id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return $this->patientService->deletePatient($id);
    }
}
