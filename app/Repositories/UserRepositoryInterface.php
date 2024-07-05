<?php

namespace App\Repositories;

interface UserRepositoryInterface
{
    public function createUser(Array $user);

    public function getUserById(int $id);

    public function allUsers();

    public function updateUser(Array $userData, int $id);
    public function destroyUser(int $id);
}
