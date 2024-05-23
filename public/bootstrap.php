<?php

use app\framework\database\Connection;

$dotenv = Dotenv\Dotenv::createImmutable(dirname(__FILE__, 2));
$dotenv->load();

$connection = Connection::getConnection();
$query = $connection->query("SELECT * FROM users");
$users = $query->fetchAll();

foreach ($users as $user) {
    foreach ($user as $key => $value) {
        echo "$key: $value<br>";
    }
}


routerExecute();

