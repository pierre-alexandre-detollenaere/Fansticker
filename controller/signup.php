<?php
include_once 'model/user.php';

if(count($_POST) && isset($_POST['action']) && $_POST['action'] === 'signup') {
    unset($_POST['action']);
    $result = insertUser($_POST);
    if($result !== false) {
        header('Location: index.php');
    } else {
        $errorMessage = 'Echec de l\'inscription !';
    }
}

