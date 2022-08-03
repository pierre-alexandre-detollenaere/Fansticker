<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/header.css"><
    <link rel="stylesheet" href="../css/themes.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>THÈME ANNIVERSAIRE</title>
    <link rel='stylesheet' href='css/style.css'>
    <link href="css/fonts/Raleway-Regular.ttf" rel="stylesheet">
   <!-- <link href="https://fonts.googleapis.com/css2?family=Mali&display=swap" rel="stylesheet"> -->


</head>
<body class="filigrane" id="background">
    <?php
        include '../includes/header.php';
    ?>
    <main>   
        <section>  
        <h1 class="theme-h1">ANNIVERSAIRE</h1>
            <!-- début bloc php -->
            <div class="row">
                <?php foreach($datas as $product) { ?> 
                    <div class="article col-6">               
                        <article class="article_php">
                            <figure>
                                <div class="img_bis d-flex justify-content-center w-100">
                                    <img src="../<?php echo $product['image'];?>" alt="<?php echo $product['name'];?>">
                                </div>
                                <figcaption class="d-flex flex-column align-items-center justify-content-center w-100">
                                    <h3><?php echo $product['name'];?></h3>
                                    <p>Lot de 6 stickers<br>Taille : L 4 cm, H 4 cm<br>Prix: <?php echo number_format($product['price'], 2, '€', ' ');?></p>
                                    <div class="quantity d-flex justify-content-between w-100">
                                        <label for="panier" class="label-input">Quantité</label>
                                        <input type="number" id="panier" min="1" max="10" required>
                                        <button onclick="fpanier()">Ajouter au panier</button>
                                    </div>
                                </figcaption>
                            </figure>
                        </article>
                    </div>
                <?php } ?>
            <!-- fin bloc php -->
            <!--
            <article class="image"> 
                <figure>   
                    <figcaption>    
                        <div>  
                        <img src="images/Stickers_Anniversaire/a1.png" alt="anniversaire 1">
                        </div>
                        <p>
                            <h4 class="theme-h4">Gâteau Muffin</h4>
                            <p>Lot de : 6 Stickers</P>
                            <h5 class="theme-h5">Taille unique : L 4 cm, H 5 cm</h5>
                            <p>Prix : 4,99€</p>
                            <label for="panier" class="label-input">Quantité</label>
                            <input type="number" id="panier" min="1" max="10" required>
                            <button onclick="panier()">Ajouter au panier</button>
                        </p>

                        </figcaption>
                    </figure>
            </article>
            
            <article class="image"> 
                <figure>
                    <figcaption>
                        <div>    
                            <img src="images/Stickers_Anniversaire/a2.png" alt="anniversaire 2">
                        </div>
                        <p>
                            <h4 class="theme-h4">Mon Chien</h4>
                            <p>Lot de : 6 Stickers</P>
                            <h5 class="theme-h5">Taille unique : L 4 cm, H 4 cm</h5>
                            <p>Prix : 4,99€</p>
                            <label for="panier" class="label-input">Quantité</label>
                            <input type="number" id="panier" min="1" max="10" required>
                            <button onclick="panier()">Ajouter au panier</button>
                        </p>
                        </figcaption>
                </figure>
            </article>

            <article class="image"> 
                <figure>
                    <figcaption>
                        <div>
                            <img src="images/Stickers_Anniversaire/a3.png" alt="anniversaire 3">
                        </div>
                        <p>
                            <h4 class="theme-h4">Cadeau</h4>
                            <p>Lot de : 6 Stickers</P>
                            <h5 class="theme-h5">Taille unique : L 4 cm, H 4 cm</h5>
                            <p>Prix : 4,99€</p>
                            <label for="panier" class="label-input">Quantité</label>
                            <input type="number" id="panier" min="1" max="10" required>
                            <button onclick="panier()">Ajouter au panier</button>
                        </p>
                        </figcaption>
                </figure>
            </article>

            <article class="image"> 
                <figure>
                    <figcaption>
                        <div>
                        <img src="images/Stickers_Anniversaire/a4.png" alt="anniversaire 4">
                        </div>     
                        <p>
                            <h4 class="theme-h4">Festif</h4>
                            <p>Lot de : 6 Stickers</P>
                            <h5 class="theme-h5">Taille unique : L 4 cm, H 5 cm</h5>
                            <p>Prix : 4,99€</p>
                            <label for="panier" class="label-input">Quantité</label>
                            <input type="number" id="panier" min="1" max="10" required>
                            <button onclick="panier()">Ajouter au panier</button>
                        </p>
                    </figcaption>
                </figure>
            </article>

            <article class="image"> 
                <figure>
                    <figcaption>
                        <div>
                        <img src="images/Stickers_Anniversaire/a5.png" alt="anniversaire 5">
                        </div>
                        <p>
                            <h4 class="theme-h4">Gâteau Fraise</h4>
                            <p>Lot de : 6 Stickers</P>
                            <h5 class="theme-h5">Taille unique : L 5 cm, H 5 cm</h5>
                            <p>Prix : 4,99€</p>
                            <label for="panier" class="label-input">Quantité</label>
                            <input type="number" id="panier" min="1" max="10" required>
                            <button onclick="panier()">Ajouter au panier</button>
                        </p>
                    </figcaption>
                </figure>
            </article>

            <article class="image"> 
                <figure>
                    <figcaption>
                        <div>
                        <img src="images/Stickers_Anniversaire/a6.png" alt="anniversaire 6">
                        </div>
                        <p>
                            <h4 class="theme-h4">Gâteau Smarties</h4>
                            <p>Lot de : 6 Stickers</P>
                            <h5 class="theme-h5">Taille unique : L 5 cm, H 5 cm</h5>
                            <p>Prix : 4,99€</p>
                            <label for="panier" class="label-input">Quantité</label>
                            <input type="number" id="panier" min="1" max="10" required>
                            <button onclick="panier()">Ajouter au panier</button>
                        </p>
                    </figcaption>
                </figure>
            </article>-->
            </div>
        </section>
        <script src="../css/themes.js"></script>
    </main> 

    <?php
        include '../includes/footer.php'
    ?>
</body>

</html>