<?php

namespace App\Repositories\UserRepositories;

use App\User\User;
use App\Exceptions\UserNotFoundException;

class UserMemoryRepository implements UserMemoryRepositoryInterface
{
    /**
     * @var User[]
     */
    private array $users = [];

    public function save(User $user): void
    {
        $this->users[(string)$user->getUUID()] = $user;
    }

    /**
     * @throws UserNotFoundException
     */
    public function get(string $uuid): User
    {
        foreach ($this->users as $user) {
            if ((string)$user->getUUID() === $uuid) {
                return $user;
            }
        }

        throw new UserNotFoundException("User not found: $uuid");
    }
}