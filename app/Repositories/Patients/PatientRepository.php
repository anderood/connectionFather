<?php

namespace App\Repositories\Patients;

use App\Models\Address;
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
        $address = [
            'zip_code' => $data['zipcode'],
            'street' => $data['street'],
            'number' => $data['number'],
            'complement' => $data['complement'],
            'city' => $data['city'],
            'state' => $data['state'],
            'who_is' => 'paciente',
        ];

        $address = Address::create($address);

        Patient::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'date_of_birth' => $data['date_of_birth'],
            'gender' => $data['gender'],
            'phone' => $data['phone'],
            'email' => $data['email'],
            'address_id' => $address->id,
        ]);
        return redirect()->route('patients.index')->with('success', 'Paciente criado com Sucesso!');
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

        return redirect()->route('patients.index')->with('success', 'Paciente atualizado com Sucesso!');

    }

    /**
     * @param $id
     * @return mixed
     */
    public function deletePatient($id): mixed
    {
        Patient::destroy($id);
        return redirect()->route('patients.index')->with('success', 'Paciente excluido com Sucesso!');
    }
}
