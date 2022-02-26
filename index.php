<?php

require_once __DIR__ . '/vendor/autoload.php';

use Goshawork\Lesson1\Blog\Post;
use Goshawork\Lesson1\Person\Name;
use Goshawork\Lesson1\Person\Person;

$post = new Post(
    new Person(
        new Name('Иван', 'Никитин'),
        new DateTimeImmutable()
    ),
    'Всем привет!'
);

print $post;