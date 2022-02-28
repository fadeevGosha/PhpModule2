<?php

use GeekBrains\Factories\NameFactory;
use GeekBrains\package_name\Example_Name;

spl_autoload_register(function ($class) {
    $directories = explode('\\', $class);

    $className = str_replace('_', DIRECTORY_SEPARATOR, array_pop($directories));
    $file = sprintf('%s.php', implode(DIRECTORY_SEPARATOR, array_merge($directories, [$className])));

    if (file_exists($file)) {
        require $file;
    }
});

$post = new Example_Name(
    NameFactory::getInstance()->createName()
);

print $post;