<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/theme_mariage.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    <script src="../cart.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
        
    <title>THÈME MARIAGE</title>
</head>
<body class="filigrane" id="background">
    <?php
        include_once "../includes/header.php";
    ?>
    <main>
    <div class="container">
        <section>

        <h2 class="titre_vedette">MARIAGE</h2>

            <div class="row prd-cat-row">
                <?php $products = GetProducts('mariage');?>
                <?php foreach ($products as $product) { ?>
                    <article class="col-md-4" style="padding: 10px;">
                        <figure>
                            <div class="img_bis">
                                <img src="/dw18/fansticker/<?= $product['image'] ?>" alt="sticker carré mariage romantique">
                            </div>
                            <figcaption class="sh-figcaption">
                                <h3><?= $product['name'] ?>  </h3>
                                <p>Lot de 6 stickers : <?= $product['price'] ?>€<br>Taille : L <?= $product['width'] ?> cm, H <?= $product['height'] ?> cm</p>
                                <label for="panier" class="label-input">Ajouter au panier</label>
                                <input type="number" id="panier" min="1" max="10"   class="<?= $product['sticker_id'] ?>" required>
                                <button id="get-cart" class="add-to-cart" data-id="<?= $product['sticker_id'] ?>">Valider</button>
                            </figcaption>
                        </figure>
                    </article>

                <?php } ?>

                <?php
                //session_destroy()
                ?>

            </div>

<!--
        <h1 class="titre_vedette">MARIAGE</h1>
        <section class="row">
        <div></div>-->
        <!-- début bloc php -->
<!--            <div class="row">
                <*?php foreach($datas as $product) { ?> 
                    <div class="article col-6">               
                        <article class="article_php">
                            <figure>
                                <div class="img_bis d-flex justify-content-center w-100">
                                    <img src="../<*?php echo $product['image'];?>" alt="<*?php echo $product['name'];?>">
                                </div>
                                <figcaption class="d-flex flex-column align-items-center justify-content-center w-100">
                                    <h3><*?php echo $product['name'];?></h3>
                                    <p>Lot de 6 stickers<br>Taille : L 4 cm, H 4 cm<br>Prix: <*?php echo number_format($product['price'], 2, '€', ' ');?></p>
                                    <div class="quantity d-flex justify-content-between w-100">
                                        <label for="panier" class="label-input">Quantité</label>
                                        <input type="number" id="panier" min="1" max="10" required>
                                        <button onclick="fpanier()">Ajouter au panier</button>
                                    </div>
                                </figcaption>
                            </figure>
                        </article>
                    </div>
                <*?php } ?>-->
        <!-- fin bloc php --><!--

            <div>
                <article>
                    <figure>
                    <div class="img_bis">
                        <img src="../images/images_mariage/classiccarre.png" alt="sticker Mariage classique carré">
                    </div>
                        <figcaption>
                            <h3>Sticker carré mariage classique</h3>
                            <p>Lot de 6 stickers : 4€99<br>Taille : L 4 cm, H 4 cm</p>
                            <label for="panier" class="label-input">Ajouter au panier</label>
                            <input type="number" id="panier" min="1" max="10" required>
                            <button onclick="fpanier()">Valider</button>
                        </figcaption>
                    </figure>
                </article>
                <article>
                    <figure>
                    <div class="img">
                        <img src="../images/images_mariage/classiccoeur.png" alt="sticker mariage classique coeur">
                    </div>
                        <figcaption>
                            <h3>Sticker coeur mariage classique</h3>
                            <p>Lot de 6 stickers : 4€99<br>Taille : L 6 cm, H 4 cm</p>
                            <label for="panier" class="label-input">Ajouter au panier</label>
                            <input type="number" id="panier" min="1" max="10" required>
                            <button onclick="fpanier()">Valider</button>
                        </figcaption>
                    </figure>
                </article>
                <article>
                    <figure>
                    <div class="img_bis">
                        <img src="../images/images_mariage/classiccadre.png" alt="sticker cadre mariage classique">
                    </div>
                        <figcaption>
                            <h3>Sticker cadre mariage classique</h3>
                            <p>Lot de 6 stickers : 4€99<br>Taille : L 4 cm, H 4 cm</p>
                            <label for="panier" class="label-input">Ajouter au panier</label>
                            <input type="number" id="panier" min="1" max="10" required>
                            <button onclick="fpanier()">Valider</button>
                        </figcaption>
                    </figure>
                </article>
                <article>
                    <figure>
                        <div class="img_bis">
                            <img src="../images/images_mariage/weddtria.png" alt="sticker mariage classique triangle">
                        </div>
                        <figcaption>
                            <h3>Sticker triangle mariage classique</h3>
                            <p>Lot de 6 stickers : 4€99<br>Taille : L 4 cm, H 4 cm</p>
                            <label for="panier" class="label-input">Ajouter au panier</label>
                            <input type="number" id="panier" min="1" max="10" required>
                            <button onclick="fpanier()">Valider</button>
                        </figcaption>
                    </figure>
                </article>
            </div>
        </section>
        <section class="row">
        <div></div>
        <h2 class="titre_vedette">ROMANTIQUE</h2>
            <div>
                <article>
                    <figure>
                    <div class="img_bis">
                        <img src="../images/images_mariage/talons.png" alt="sticker carré mariage romantique">
                    </div>
                        <figcaption>
                            <h3>Sticker carré mariage romantique </h3>
                            <p>Lot de 6 stickers : 4€99<br>Taille : L 4 cm, H 4 cm</p>
                            <label for="panier" class="label-input">Ajouter au panier</label>
                            <input type="number" id="panier" min="1" max="10" required>
                            <button onclick="fpanier()">Valider</button>
                        </figcaption>
                    </figure>
                </article>
                <article>
                    <figure>
                    <div class="img">
                        <img src="../images/images_mariage/romantic.png" alt="sticker coeur mariage romantique">
                    </div>
                        <figcaption>
                            <h3>Sticker coeur mariage romantique</h3>
                            <p>Lot de 6 stickers : 4€99<br>Taille : L 6 cm, H 4 cm</p>
                            <label for="panier" class="label-input">Ajouter au panier</label>
                            <input type="number" id="panier" min="1" max="10" required>
                            <button onclick="fpanier()">Valider</button>
                        </figcaption>
                    </figure>
                </article>
                <article>
                    <figure>
                    <div class="img_bis">
                        <img src="../images/images_mariage/romanticcadre.png" alt="sticker cadre mariage romantique">
                    </div>
                        <figcaption>
                            <h3>Sticker cadre mariage romantique</h3>
                            <p>Lot de 6 stickers : 4€99<br>Taille : L 4 cm, H 4 cm</p>
                            <label for="panier" class="label-input">Ajouter au panier</label>
                            <input type="number" id="panier" min="1" max="10" required>
                            <button onclick="fpanier()">Valider</button>
                        </figcaption>
                    </figure>
                </article>
                <article>
                    <figure>
                        <div class="img_bis">
                            <img src="../images/images_mariage/weddtri.png" alt="sticker triangle mariage romantique">
                        </div>
                        <figcaption>
                            <h3>Sticker triangle mariage romantique</h3>
                            <p>Lot de 6 stickers : 4€99<br>Taille : L 4 cm, H 4 cm</p>
                            <label for="panier" class="label-input">Ajouter au panier</label>
                            <input type="number" id="panier" min="1" max="10" required>
                            <button onclick="fpanier()">Valider</button>
                        </figcaption>
                    </figure>
                </article>
            </div>
        </section>
        <section class="row">
        <div></div>
        <h2 class="titre_vedette">MODERNE</h2>
            <div>
                <article>
                    <figure>
                    <div class="img_bis">
                        <img src="../images/images_mariage/mariagerectangle.png" alt="sticker rectangle marriage moderne">
                    </div>
                        <figcaption>
                            <h3>Sticker rectangle mariage moderne</h3>
                            <p>Lot de 6 stickers : 4€99<br>Taille : L 4 cm, H 4 cm</p>
                            <label for="panier" class="label-input">Ajouter au panier</label>
                            <input type="number" id="panier" min="1" max="10" required>
                            <button onclick="fpanier()">Valider</button>
                        </figcaption>
                    </figure>
                </article>
                <article>
                    <figure>
                    <div class="img">
                        <img src="../images/images_mariage/rosecoeur.png" alt="sticker Football long">
                    </div>
                        <figcaption>
                            <h3>Sticker long mariage morderne coeur</h3>
                            <p>Lot de 6 stickers : 4€99<br>Taille : L 6 cm, H 4 cm</p>
                            <label for="panier" class="label-input">Ajouter au panier</label>
                            <input type="number" id="panier" min="1" max="10" required>
                            <button onclick="fpanier()">Valider</button>
                        </figcaption>
                    </figure>
                </article>
                <article>
                    <figure>
                    <div class="img_bis">
                        <img src="../images/images_mariage/bagues.png" alt="sticker losange moderne bagues">
                    </div>
                        <figcaption>
                            <h3>Sticker losange mariage moderne bagues</h3>
                            <p>Lot de 6 stickers : 4€99<br>Taille : L 4 cm, H 4 cm</p>
                            <label for="panier" class="label-input">Ajouter au panier</label>
                            <input type="number" id="panier" min="1" max="10" required>
                            <button onclick="fpanier()">Valider</button>
                        </figcaption>
                    </figure>
                </article>
                <article>
                    <figure>
                        <div class="img_bis">
                            <img src="../images/images_mariage/moderncercle.png" alt="sticker  rond mariage moderne cercle">
                        </div>
                        <figcaption>
                            <h3>Sticker rond mariage moderne cercle</h3>
                            <p>Lot de 6 stickers : 4€99<br>Taille : L 4 cm, H 4 cm</p>
                            <label for="panier" class="label-input">Ajouter au panier</label>
                            <input type="number" id="panier" min="1" max="10" required>
                            <button onclick="fpanier()">Valider</button>
                        </figcaption>
                    </figure>
                </article>
            </div>
        </section>
        <section class="row">
        <div></div>
        <h2 class="titre_vedette">DIVERS</h2>
            <div>
                <article>
                    <figure>
                    <div class="img_bis">
                        <img src="../images/images_mariage/leswed.png" alt="sticker mariage femmes">
                    </div>
                        <figcaption>
                            <h3>Sticker mariage femmes</h3>
                            <p>Lot de 6 stickers : 4€99<br>Taille : L 4 cm, H 4 cm</p>
                            <label for="panier" class="label-input">Ajouter au panier</label>
                            <input type="number" id="panier" min="1" max="10" required>
                            <button onclick="fpanier()">Valider</button>
                        </figcaption>
                    </figure>
                </article>
                <article>
                    <figure>
                    <div class="img">
                        <img src="../images/images_mariage/oriental.png" alt="mariage rectangle oriental">
                    </div>
                        <figcaption>
                            <h3>Sticker mariage rectangle oriental</h3>
                            <p>Lot de 6 stickers : 4€99<br>Taille : L 6 cm, H 4 cm</p>
                            <label for="panier" class="label-input">Ajouter au panier</label>
                            <input type="number" id="panier" min="1" max="10" required>
                            <button onclick="fpanier()">Valider</button>
                        </figcaption>
                    </figure>
                </article>
                <article>
                    <figure>
                    <div class="img_bis">
                        <img src="../images/images_mariage/weddind.png" alt="sticker mariage india">
                    </div>
                        <figcaption>
                            <h3>Sticker mariage india</h3>
                            <p>Lot de 6 stickers : 4€99<br>Taille : L 4 cm, H 4 cm</p>
                            <label for="panier" class="label-input">Ajouter au panier</label>
                            <input type="number" id="panier" min="1" max="10" required>
                            <button onclick="fpanier()">Valider</button>
                        </figcaption>
                    </figure>
                </article>
                <article>
                    <figure>
                        <div class="img_bis">
                            <img src="../images/images_mariage/couleurwed.png" alt="sticker mariage divers">
                        </div>
                        <figcaption>
                            <h3>Sticker mariage divers</h3>
                            <p>Lot de 6 stickers : 4€99<br>Taille : L 4 cm, H 4 cm</p>
                            <label for="panier" class="label-input">Ajouter au panier</label>
                            <input type="number" id="panier" min="1" max="10" required>
                            <button onclick="fpanier()">Valider</button>
                        </figcaption>
                    </figure>
                </article>
            </div>
        </section>
        <section class="row">
        <div></div>
        <h2 class="titre_vedette">ORIGINAL</h2>
            <div>
                <article>
                    <figure>
                    <div class="img_bis">
                        <img src="../images/images_mariage/lesmaries.png" alt="sticker justmarried rectangle">
                    </div>
                        <figcaption>
                            <h3>Sticker justmarried gâteau</h3>
                            <p>Lot de 6 stickers : 4€99<br>Taille : L 4 cm, H 4 cm</p>
                            <label for="panier" class="label-input">Ajouter au panier</label>
                            <input type="number" id="panier" min="1" max="10" required>
                            <button onclick="fpanier()">Valider</button>
                        </figcaption>
                    </figure>
                </article>
                <article>
                    <figure>
                    <div class="img">
                        <img src="../images/images_mariage/feuille.png" alt="sticker mariage humour">
                    </div>
                        <figcaption>
                            <h3>Sticker feuille mariage</h3>
                            <p>Lot de 6 stickers : 4€99<br>Taille : L 6 cm, H 4 cm</p>
                            <label for="panier" class="label-input">Ajouter au panier</label>
                            <input type="number" id="panier" min="1" max="10" required>
                            <button onclick="fpanier()">Valider</button>
                        </figcaption>
                    </figure>
                </article>
                <article>
                    <figure>
                    <div class="img_bis">
                        <img src="../images/images_mariage/doigts.png" alt="sticker mariage humour">
                    </div>
                        <figcaption>
                            <h3>Sticker mariage humour</h3>
                            <p>Lot de 6 stickers : 4€99<br>Taille : L 4 cm, H 4 cm</p>
                            <label for="panier" class="label-input">Ajouter au panier</label>
                            <input type="number" id="panier" min="1" max="10" required>
                            <button onclick="fpanier()">Valider</button>
                        </figcaption>
                    </figure>
                </article>
                <article>
                    <figure>
                        <div class="img_bis">
                            <img src="../images/images_mariage/annivmar.png" alt="sticker mariage feuille">
                        </div>
                        <figcaption>
                            <h3>Sticker anniversaire mariage</h3>
                            <p>Lot de 6 stickers : 4€99<br>Taille : L 4 cm, H 4 cm</p>
                            <label for="panier" class="label-input">Ajouter au panier</label>
                            <input type="number" id="panier" min="1" max="10" required>
                            <button onclick="fpanier()">Valider</button>
                        </figcaption>
                    </figure>
                </article>-->
            </div>
        </section>
        <section class="row">
        <div></div>
        
            </div>
        </section>
    <script src="../css/themes.js"></script>
    </main>
    <?php
        include_once "../includes/footer.php";
    ?>
</body>

</html>