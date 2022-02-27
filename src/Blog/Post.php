<?php

namespace App\Blog;

use App\User\User;

class Post
{
    public function __construct(
        private User $author,
        private string $text
    ) {}

    public function __toString()
    {
        return $this->author . ' пишет: ' . $this->text;
    }
}