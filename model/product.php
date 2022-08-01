<?php

function getProducts_fetchAll(): array {
    $db = dbConnect();
    $query= $bd->query('SELECT * FROM `sticker`');
    $datas = $query->fectAll(PDO::FETCH_ASSOC);
    return $datas;
}

function getProductsByCategory(string $category) : array {
    $db = dbConnect();
    $query = $db->prepare('SELECT * FROM `sticker` WHERE `categorie`= ?');
    $query->execute([$category]);
    return $query->fetchAll(PDO::FETCH_ASSOC);
}

