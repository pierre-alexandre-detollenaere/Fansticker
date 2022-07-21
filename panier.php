<?php
   session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/connexion.css">
    <link rel="stylesheet" href="./css/panier.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">    <title>EN VEDETTE</title>
    <title>PANIER</title>
</head>
<body class="filigrane" id="background">
    <?php
        include_once 'includes/header.php';
    ?>
    <main>
        <div class=”Cart-Container”></div>
        <div class=”Header”>
            <h3 class=”Heading”>Shopping Cart</h3>
            <h5 class=”Action”>Remove all</h5>
        </div>
        <div class=”Cart-Items”>
            <div class=”image-box”>
            <img src=”images/apple.png” style={{ height=”120px” }} />
            </div>
            <div class=”about”>
            <h1 class=”title”>Apple Juice</h1>
            <h3 class=”subtitle”>250ml</h3>
            <img src=”images/veg.png” style={{ height=”30px” }}/>
            </div>
            <div class=”counter”></div>
            <div class=”prices”></div>
        </div>
        <div class=”counter”>
            <div class=”btn”>+</div>
            <div class=”count”>2</div>
            <div class=”btn”>-</div>
        </div>
        <div class=”prices”>
            <div class=”amount”>$2.99</div>
            <div class=”save”><u>Save for later</u></div>
            <div class=”remove”><u>Remove</u></div>
        </div>
        
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    </main>
    <?php
        include 'includes/footer.php';
    ?>
</body>
</html>