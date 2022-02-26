<?php

namespace GeekBrains\Factories;

use GeekBrains\Person\Name;

interface NameFactoryInterface
{
    public function createName(): Name;
}