<?php

namespace App\Connections;

use App\Config\SqlLiteConfig;
use PDO;
use PDOException;

class SQLiteConnection implements SqlConnection
{
    public const FILE_PATH = __DIR__. '/../../'. SqlLiteConfig::PATH_TO_SQLITE_FILE;
    private ?PDO $pdo = null;

    public function getConnection(): PDO
    {
        try {
            $this->pdo = new PDO("sqlite:" .static::FILE_PATH);
        }catch (PDOException $exception)
        {
            var_dump($exception->getMessage());
        }

        return $this->pdo;
    }
}