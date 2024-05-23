<?php

namespace app\framework\database;

use PDO;

class Connection
{
    private static $connection = null;

    public static function getConnection()
    {
        if (!empty(self::$connection)) {
            return self::$connection;
        }

        $host = $_ENV["DATABASE_HOST"];
        $user = $_ENV["DATABASE_USER"];
        $password = $_ENV["DATABASE_PASSWORD"];
        $dbName = $_ENV["DATABASE_NAME"];

        self::$connection = new PDO(
            "mysql:host=$host;dbname=$dbName;",
            $user,
            $password,
            [
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
            ]
        );

        return self::$connection;
    }
}