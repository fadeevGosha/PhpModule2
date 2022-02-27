<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Exceptions\UserNotFoundException;
use App\Repositories\UserRepositories\UserMemoryRepository;
use App\User\Name;
use App\User\User;
use App\Classes\UUID;


$usersRepository = new UserMemoryRepository();

$usersRepository->save(new User(UUID::random(), new Name('Ivan', 'Nikitin')));
$usersRepository->save(new User(UUID::random(), new Name('Anna', 'Petrova')));

try {
    $user = $usersRepository->get(123);
    print $user;
} catch (UserNotFoundException $e) {
    print $e->getMessage();
}