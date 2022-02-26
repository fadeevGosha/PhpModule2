<?php


use GeekBrains\Example_Name;
use GeekBrains\Factories\NameFactory;

spl_autoload_register(function ($class) {
    if (file_exists($file = str_replace(['_', '\\'], DIRECTORY_SEPARATOR, $class) . '.php')) {
        require $file;
    }
});

$post = new Example_Name(
    NameFactory::getInstance()->createName()
);

print $post;