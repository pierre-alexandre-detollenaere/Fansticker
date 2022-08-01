<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/panier2.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">    <title>EN VEDETTE</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.6/css/font-awesome.min.css">
    <title>PANIER</title>
</head>
<body>
    <?php 
      include '../includes/header.php'; 
    ?>
    <main>
        <!-------------- cart items details --------------->
        <div class="small-container cart-page">
            <table>
                <tr>
                    <th>Produit</th>
                    <th>Quantité</th>
                    <th>Sous-Total</th>
                </tr>
                <tr>
                    <td>
                        <div class="cart-info">
                            <img src="../images/theme_sport/athletisme_carre.png">
                            <div>
                                <p>Lot de 6 Sticker carré Athlète</p>
                                <small>Prix: 4,99€</small>
                                <br>
                                <a href="">Retirer</a>
                            </div>
                        </div>
                    </td>
                    <td><input type="number" value="1"></td>
                    <td>4.99€</td>
                </tr>
                <tr>
                    <td>
                        <div class="cart-info">
                            <img src="../images/theme_sport/athletisme_long.png">
                            <div>
                                <p>Lot de 6 Sticker long Athlète</p>
                                <small>Prix: 4,99€</small>
                                <br>
                                <a href="">Retirer</a>
                            </div>
                        </div>
                    </td>
                    <td><input type="number" value="1"></td>
                    <td>4.99€</td>
                </tr>
                <tr>
                    <td>
                        <div class="cart-info">
                            <img src="../images/theme_sport/athletisme_losange.png">
                            <div>
                                <p>Lot de 6 Sticker losange Athlète</p>
                                <small>Prix: 4,99€</small>
                                <br>
                                <a href="">Retirer</a>
                            </div>
                        </div>
                    </td>
                    <td><input type="number" value="1"></td>
                    <td>4.99€</td>
                </tr>
            </table>
            <div class="total-price">
                <table>
                    <tr>
                        <td>Sous-Total</td>
                        <td>14.97€</td>
                    </tr>
                    <tr>
                        <td>Taxes</td>
                        <td>2.99€</td>
                    </tr>
                    <tr>
                        <td>Total</td>
                        <td>17.96€</td>
                    </tr>
                </table>
            </div>
        </div>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    </main>
    <?php
      include '../includes/footer.php';
    ?>
</body>
</html>