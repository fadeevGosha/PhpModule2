<?php

namespace GeekBrains\Services;

use Faker\Factory;
use Faker\Generator;
use GeekBrains\Person\Name;

class NameGeneratorService implements NameGeneratorServiceInterface
{
    protected Generator $fackerGenerator;

    public function __construct()
    {
        $this->fackerGenerator = Factory::create();
    }

    public function generateName(): Name
    {
        return new Name(
            $this->fackerGenerator->firstName(),
            $this->fackerGenerator->lastName()
        );
    }
}