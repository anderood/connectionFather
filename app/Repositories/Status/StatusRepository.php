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
        return Status::create($data);
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

        return Status::find($id);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function deleteStatus($id)
    {
        return Status::destroy($id);
    }
}
