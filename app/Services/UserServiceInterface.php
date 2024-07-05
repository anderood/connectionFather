<?php

namespace App\Services;

use Illuminate\Http\Request;

interface UserServiceInterface
{
    public function createUser(Array $user);

    public function getUserById(int $id);

    public function allUsers();

    public function updateUser(Array $userData, int $id);
    public function destroyUser(int $id);
}
