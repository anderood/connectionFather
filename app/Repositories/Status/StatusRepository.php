<?php

namespace App\Repositories\Status;

use App\Models\Status;

class StatusRepository implements StatusRepositoryInterface
{

    /**
     * @return mixed
     */
    public function getAllStatus()
    {
        return Status::all();
    }

    /**
     * @param $id
     * @return mixed
     */
    public function getStatusById($id)
    {
        return Status::find($id);
    }

    /**
     * @param $data
     * @return mixed
     */
    public function createStatus($data)
    {
        Status::create($data);
        return redirect()->route('status.index')->with('success', 'Status Cadastrado com Sucesso!');
    }

    /**
     * @param $data
     * @param $id
     * @return mixed
     */
    public function updateStatus($data, $id)
    {
        $status = $this->getStatusById($id);
        $status->fill($data);
        $status->save();

        return redirect()->route('status.index')->with('success', 'Status atualizado com Sucesso!');
    }

    /**
     * @param $id
     * @return mixed
     */
    public function deleteStatus($id)
    {
        Status::destroy($id);
        return redirect()->route('status.index')->with('success', 'Status excluido com Sucesso!');
    }
}
