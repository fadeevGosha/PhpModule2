<?php

namespace App\Repositories\UserRepositories;

use App\Classes\UUID;
use App\Connections\SqlConnection;
use App\Exceptions\UserNotFoundException;
use App\User\Name;
use App\User\User;
use PDO;

class UserRepository implements UserRepositoryInterface
{
    public function __construct(private SqlConnection $connection) {}

    public function save(User $user): void
    {
        $statement = $this->connection->getConnection()->prepare(
            'INSERT INTO user (first_name, last_name, uuid)
            VALUES (:first_name, :last_name, :uuid)'
        );

        $statement->execute(
            [
                ':first_name' => $user->getName()->getFirstName(),
                ':last_name' => $user->getName()->getLastName(),
                ':uuid' => $user->getUUID()
            ]
        );
    }

    /**
     * @throws UserNotFoundException
     */
    public function get(UUID $uuid): User
    {
        $statement = $this->connection->getConnection()->prepare(
            'SELECT * FROM user WHERE uuid = ?'
        );

        $statement->execute([':uuid' => $uuid]);
        $result = $statement->fetch(PDO::FETCH_ASSOC);

        if (false === $result) {
            throw new UserNotFoundException(
                "Cannot get user: $uuid"
            );
        }

        return new User(
            new UUID($result['uuid']),
            new Name($result['first_name'], $result['last_name'])
        );
    }

}