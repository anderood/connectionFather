<?php

namespace App\Services\Status;

use App\Repositories\Status\StatusRepositoryInterface;

class StatusService implements StatusServiceInterface
{

    protected $statusRepository;

    public function __construct(StatusRepositoryInterface $statusRepository)
    {
        $this->statusRepository = $statusRepository;
    }

    /**
     * @return mixed
     */
    public function getAllStatus()
    {
        return $this->statusRepository->getAllStatus();
    }

    /**
     * @param $id
     * @return mixed
     */
    public function getStatusById($id)
    {
        return $this->statusRepository->getStatusById($id);
    }

    /**
     * @param $data
     * @return mixed
     */
    public function createStatus($data)
    {
        return $this->statusRepository->createStatus($data);
    }

    /**
     * @param $data
     * @param $id
     * @return mixed
     */
    public function updateStatus($data, $id)
    {
        return $this->statusRepository->updateStatus($data, $id);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function deleteStatus($id)
    {
        return $this->statusRepository->deleteStatus($id);
    }
}
