<?php

namespace GeekBrains\Person;

class Name
{
    public function __construct(
        private string $firstName,
        private string $lastName
    ) {
    }

    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function getLastName(): string
    {
        return $this->lastName;
    }


    public function getFullName(): string
    {
        return $this->firstName . ' ' . $this->lastName;
    }
}