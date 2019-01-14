<?php
include ("../components/c_product.php");


function db_connect()
{

    $host = 'naamadb.cf9x9szqollz.us-east-2.rds.amazonaws.com';
    $db   = 'frencheska';
    $user = 'naamaroot';
    $pass = 'dbna0544';
    $charset = 'utf8mb4';

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
    $options = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ];
    try {
        $pdo = new PDO($dsn, $user, $pass, $options);
    } catch (\PDOException $e) {
        throw new \PDOException($e->getMessage(), (int)$e->getCode());
    }

    return $pdo;
}

// $pdo=db_connect();

// $stmt = $pdo->query('SELECT * FROM products ');

// while ($row = $stmt->fetch())
// {
//     echo_product("medium",$row);
// }