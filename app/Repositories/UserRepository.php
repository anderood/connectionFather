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
    public function getUserById($id)
    {
        return User::find($id);
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
        $user = $this->getUserById($id);

        $user->name = $userData['name'];
        $user->save();

        return User::find($id);
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
