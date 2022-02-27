<?php

namespace App\Repositories\UserRepositories;

use App\Classes\UUID;
use App\User\User;

interface RepositoryInterface
{
    public function save(User $user): void;
    public function get(UUID $uuid): User;
}