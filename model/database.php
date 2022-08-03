<?php

# Donnée pour láccès a la base de données: login et mdp
define("DB_USER",     "root");
define("DB_PASS",     "");

/* Connection à la base de donnée SQL */
$dsn = 'mysql:dbname=fansticker;host=localhost';
$pdo = new PDO($dsn, DB_USER, DB_PASS);


function dbConnect() {
    try {
    $db = new PDO (
        'mysql:host=localhost;dbname=fansticker;charset=utf8',
        'root',
        ''
    );
    } catch(PDOException $e) {
        die($e->getMessage());
    }
    return $db;
}
