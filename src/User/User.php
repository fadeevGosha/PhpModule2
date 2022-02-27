<?php

namespace App\User;

use App\Classes\UUID;

class User
{
    public function __construct(
        private UUID $UUID,
        private Name $name
    ) {}

    public function getUUID(): UUID
    {
        return $this->UUID;
    }

    public function getName(): Name
    {
        return $this->name;
    }

    public function __toString(): string
    {
        return $this->name;
    }

    public function __get(string $name)
    {
        return $this->$name;
    }
}