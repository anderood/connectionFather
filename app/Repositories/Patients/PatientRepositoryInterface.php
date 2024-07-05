<?php

namespace App\Repositories\Patients;

interface PatientRepositoryInterface
{
    public function getAllPatients();
    public function getPatientById($id);
    public function createPatient($data);
    public function updatePatient($data, $id);
    public function deletePatient($id);
}
