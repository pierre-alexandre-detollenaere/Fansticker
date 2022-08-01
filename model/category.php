<?php
include 'model/database.php';

function getCategory($category) {
    $db=dbConnect();
    $query=$db->prepare('SELECT * FROM `sticker` WHERE `categorie` = :categorie');
    $query->execute(['categorie' => $category]);
    return $query->fetchAll(PDO::FETCH_ASSOC);
}

