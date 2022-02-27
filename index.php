<?php

use GeekBrains\Example_Name;
use GeekBrains\Factories\NameFactory;

spl_autoload_register(function ($class) {
    $lastPosition = strrpos($class, "\\");
    $file = str_replace("\\", DIRECTORY_SEPARATOR, substr($class, 0, $lastPosition + 1)) .
        str_replace("_", DIRECTORY_SEPARATOR, substr($class, $lastPosition + 1)) . '.php';
    if (file_exists($file)) {
        require $file;
    }
});

$post = new Example_Name(
    NameFactory::getInstance()->createName()
);

print $post;