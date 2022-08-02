<?php
include_once '../model/category.php';
include_once '../model/product.php';
include_once '../controller/signup.php';

$category = $_GET['categorie'];
$datas = getProductsByCategory($category);
$category = getCategory($category) [0];

include '../view/theme_metier.php';/*
include '../view/theme_naissance.php';*/


