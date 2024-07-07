<?php

namespace App\Services;

use App\Repositories\UserRepositoryInterface;

class UserService implements UserServiceInterface
{

    protected $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    /**
     * @param array $user
     * @return mixed
     */
    public function createUser(array $user)
    {
        return $this->userRepository->createUser($user);
    }

    /**
     * @param int $id
     * @return mixed
     */
    public function getUserById($id)
    {
        return $this->userRepository->getUserById($id);
    }

    /**
     * @return mixed
     */
    public function allUsers()
    {
        return $this->userRepository->allUsers();
    }

    /**
     * @param array $userData
     * @param int $id
     * @return mixed
     */
    public function updateUser(array $userData, int $id)
    {
        return $this->userRepository->updateUser($userData, $id);
    }

    /**
     * @param int $id
     * @return mixed
     */
    public function destroyUser(int $id)
    {
        return $this->userRepository->destroyUser($id);
    }
}
