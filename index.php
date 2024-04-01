<?php

$dsn = "mysql:host=localhost;dbname=php_com_pdo";
$user = "root";
$password = '';

try {
    $connection = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    echo "Error " . $e->getCode() . ": " . $e->getMessage();
}