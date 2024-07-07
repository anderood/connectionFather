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
        User::create($user);
        return redirect()->route('users.index')->with('success', 'Usuario criado com Sucesso!');
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

        $user->fill($userData);
        $user->save();

        return redirect()->route('users.index')->with('success', 'Usuario atualizado com Sucesso!');
    }

    /**
     * @param int $id
     * @return mixed
     */
    public function destroyUser(int $id)
    {
        User::destroy($id);
        return redirect()->route('users.index')->with('success', 'Usuario excluido com Sucesso!');
    }
}
