<?php

function dbConnect() {
    try {
    $db= new PDO (
        'mysql:host=localhost;dbname=fansticker;charset=utf8',
        'root',
        ''
    );
    } catch(PDOException $e){
        die($e->getMessage());
    }
    return $db;
}
