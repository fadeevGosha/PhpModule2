<?php

namespace App\Connections;

use PDO;

interface SqlConnection
{
    public function getConnection(): PDO;
}