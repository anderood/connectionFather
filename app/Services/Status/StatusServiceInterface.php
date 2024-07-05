<?php

namespace App\Services\Status;

interface StatusServiceInterface
{
    public function getAllStatus();
    public function getStatusById($id);
    public function createStatus($data);
    public function updateStatus($data, $id);
    public function deleteStatus($id);
}
