<?php
include_once '../model/category.php';
include_once '../model/product.php';


$category = $_GET['categorie'];
$datas = getProductsByCategory($category);
$category = getCategory($category) [0];

/*var_dump($datas);*/

include '../view/theme_sport.php';/*
include '../view/theme_anniversaire.php';
include '../view/theme_bapteme.php';
include '../view/theme_mariage.php';
include '../view/theme_metier.php';
include '../view/theme_naissance.php';*/


