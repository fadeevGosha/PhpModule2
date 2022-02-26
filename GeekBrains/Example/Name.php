<?php

namespace GeekBrains;

use GeekBrains\Person\Name;

class Example_Name
{
    public function __construct(private Name $name) {}

    public function __toString(): string
    {
       return sprintf('I am %', $this->name->getFullName());
    }
}