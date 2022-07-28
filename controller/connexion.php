<?php

include_once 'controller/signup.php';

$firstname = null;
$name = null;

if(count($_POST>0)) {
    $firstname = $_POST['firstname'];
    $name = $_POST['name'];
    $_SESSION = $_POST['firstname'];
    $_SESSION= $_POST['name'];
}

include_once 'view/connexion.php';

