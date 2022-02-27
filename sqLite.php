<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Classes\UUID;
use App\Connections\SQLiteConnection;
use App\Repositories\UserRepositories\UserRepository;
use App\User\Name;
use App\User\User;

$sqlLiteConnection = new SQLiteConnection();
$sqlLiteConnection->getConnection();

$usersRepository = new UserRepository($sqlLiteConnection);

$usersRepository->save(new User(UUID::random(), new Name('Ivan', 'Nikitin')));
$usersRepository->save(new User(UUID::random(), new Name('Anna', 'Petrova')));