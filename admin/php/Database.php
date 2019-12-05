<?php

require_once __DIR__ . "/../core/Database.php";

$config = parse_ini_file(__DIR__ . "/../config.ini");

define('DB_HOST', $config['db_host']);
define('DB_NAME', $config['db_name']);
define('DB_USER', $config['db_user']);
define('DB_PASSWORD', $config['db_password']);

$database = new Database(DB_HOST, DB_NAME, DB_USER, DB_PASSWORD, 3306);
$db = $database->connect();
