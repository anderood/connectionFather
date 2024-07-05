<?php

namespace App\Services\Patients;

use App\Repositories\Patients\PatientRepositoryInterface;

class PatientService implements PatientServiceInterface
{
    protected $patientRepository;

    public function __construct(PatientRepositoryInterface $patientRepository)
    {
        $this->patientRepository = $patientRepository;
    }

    /**
     * @return mixed
     */
    public function getAllPatients()
    {
        return $this->patientRepository->getAllPatients();
    }

    /**
     * @param $id
     * @return mixed
     */
    public function getPatientById($id)
    {
        $this->patientRepository->getPatientById($id);
    }

    /**
     * @param $data
     * @return mixed
     */
    public function createPatient($data)
    {
        return $this->patientRepository->createPatient($data);
    }

    /**
     * @param $data
     * @param $id
     * @return mixed
     */
    public function updatePatient($data, $id)
    {
        return $this->patientRepository->updatePatient($data, $id);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function deletePatient($id)
    {
        return $this->patientRepository->deletePatient($id);
    }
}
