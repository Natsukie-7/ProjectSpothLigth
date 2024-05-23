<?php

use app\framework\database\Connection;

$dotenv = Dotenv\Dotenv::createImmutable(dirname(__FILE__, 2));
$dotenv->load();


routerExecute();

