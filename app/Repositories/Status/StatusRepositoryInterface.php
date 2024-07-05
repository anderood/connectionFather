<?php

namespace App\Repositories\Status;

interface StatusRepositoryInterface
{
    public function getAllStatus();
    public function getStatusById($id);
    public function createStatus($data);
    public function updateStatus($data, $id);
    public function deleteStatus($id);
}
