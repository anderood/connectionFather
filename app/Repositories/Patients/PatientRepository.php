<?php

namespace App\Repositories\Patients;

use App\Models\Patient;

class PatientRepository implements PatientRepositoryInterface
{

    /**
     * @return mixed
     */
    public function getAllPatients()
    {
        return Patient::all();
    }

    /**
     * @param $id
     * @return mixed
     */
    public function getPatientById($id)
    {
        return Patient::find($id);
    }

    /**
     * @param $data
     * @return mixed
     */
    public function createPatient($data)
    {
        return Patient::create($data);
    }

    /**
     * @param $data
     * @param $id
     * @return mixed
     */
    public function updatePatient($data, $id): mixed
    {
        $patient = $this->getPatientById($id);

        $patient->fill($data);
        $patient->save();

        return Patient::find($id);

    }

    /**
     * @param $id
     * @return mixed
     */
    public function deletePatient($id): mixed
    {
        return Patient::destroy($id);
    }
}
