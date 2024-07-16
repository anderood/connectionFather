<?php

namespace App\Http\Controllers\Patients;

use App\Http\Controllers\Controller;
use App\Http\Requests\Patient\PatientRequest;
use App\Services\Patients\PatientServiceInterface;

class PatientController extends Controller
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
        $patients = $this->patientService->getAllPatients();
        return view('patients.index', ['patients' => $patients]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('patients.create_patient');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PatientRequest $request)
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
        $patient = $this->patientService->getPatientById($id);
        return view('patients.edit_patient', ['patient' => $patient]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PatientRequest $request, string $id)
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
