<?php

namespace GeekBrains\package_name;

use GeekBrains\Person\Name;

class Example_Name
{
    public function __construct(private string $name) {}

    public function __toString(): string
    {
       return sprintf('I am %s', $this->name);
    }
}