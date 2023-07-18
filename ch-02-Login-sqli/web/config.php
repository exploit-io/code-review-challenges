<?php

$FLAG = 'FLAG{__UN_COMPRIMISABLE__TEXT__}';

$mysql_host = getenv("MYSQL_HOST");
$mysql_user = getenv("MYSQL_USER");
$mysql_password = getenv("MYSQL_PASSWORD");
$mysql_database = getenv("MYSQL_DATABASE");

try {
    $db = new mysqli($mysql_host, $mysql_user, $mysql_password, $mysql_database);
} catch (PDOException $e) {
    echo("Error: Failed to connect to the database, please wait!");
    die();
}

