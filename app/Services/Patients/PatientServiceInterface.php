<?php

namespace App\Services\Patients;

interface PatientServiceInterface
{
    public function getAllPatients();
    public function getPatientById($id);
    public function createPatient($data);
    public function updatePatient($data, $id);
    public function deletePatient($id);

}
