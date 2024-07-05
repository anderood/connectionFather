<?php

namespace App\Repositories;

use App\Models\User;

class UserRepository implements UserRepositoryInterface
{

    /**
     * @param array $user
     * @return mixed
     */
    public function createUser(array $user)
    {
        return User::create($user);
    }

    /**
     * @param int $id
     * @return mixed
     */
    public function getUserById(int $id)
    {
        return User::findOrFail($id);
    }

    /**
     * @return mixed
     */
    public function allUsers()
    {
        return User::all();
    }

    /**
     * @param array $userData
     * @param int $id
     * @return mixed
     */
    public function updateUser(array $userData, int $id)
    {
        return User::update($userData);
    }

    /**
     * @param int $id
     * @return mixed
     */
    public function destroyUser(int $id)
    {
        return User::destroy($id);
    }
}
