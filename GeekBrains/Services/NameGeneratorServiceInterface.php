<?php

namespace GeekBrains\Services;

use GeekBrains\Person\Name;

interface NameGeneratorServiceInterface
{
    public function generateName(): Name;
}