<?php
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(E_ALL);

session_start();
include_once ('../core/functions.php');
include_once ('../model/database.php');

?>

<header class="row col-12 d-none d-md-flex justify-content-between text-orange no-gutters">
    <div class="col-3">
        <figure>
            <img id="logo" src="../images/Fansticker_final_1.png" alt="logo site fansticker">
            <!--<figcaption id="slogan">
                Des étiquettes pour faire plaisir
            </figcaption>-->
        </figure>
    </div>
    <nav class="col-6">
        <ul>
            <li><a class="lien" href="../controller/accueil.php">Accueil</a></li>
            <li>
            <div class="btn-group dropdown">
                <button type="button" class="btn btn-third">
                    Nos Stickers
                </button>
                <button type="button" class="btn btn_third dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-expanded="false">
                    <span class="sr-only">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu bouton">
                    <!-- Dropdown menu links -->
                    <button class="dropdown-item" type="button"><a href="../controller/category_sport.php?categorie=sport">Sports</a></button>
                    <button class="dropdown-item" type="button"><a href="../controller/category_anniversaire.php?categorie=anniversaire">Anniversaire</a></button>
                    <button class="dropdown-item" type="button"><a href="../controller/category_naissance.php?categorie=naissance">Naissance</a></button>
                    <button class="dropdown-item" type="button"><a href="../controller/category_bapteme.php?categorie=bapteme">Baptême</a></button>
                    <button class="dropdown-item" type="button"><a href="../controller/category_mariage.php?categorie=mariage">Mariage</a></button>
                    <button class="dropdown-item" type="button"><a href="../controller/category_metier.php?categorie=metier">Métiers</a></button>
                    <button class="dropdown-item" type="button"><a href="../controller/category_animaux.php?">Animaux</a></button>
                    <button class="dropdown-item" type="button"><a href="../controller/category_divers.php">Divers</a></button>
                </div>
            </div>
            </li>
            <li><a class="lien" href="../controller/en_vedette.php">En Vedette</a></li>
            <li><a class="lien" href="../controller/contact.php">Nous contacter</a></li>
        </ul>
        <input type="text" class="search" id="rechercher" name="rechercher" placeholder="rechercher un thème">
    </nav>
    <div class="col-1">
        <?php  if($_SESSION['firstname']) { ?>
            <button type="button" class="connexion"><a class="btn_third" href="../profile.php" style="font-size:14px;"> Votre compte </a></button>
        <?php } else {?>
            <button type="button" class="connexion"><a class="btn_third" href="../view/connexion.php">S'identifier</a></button>
        <?php } ?>
        <!--<button type="button" class="connexion"><a class="btn_third" href="../controller/account.php">S'identifier</a></button>-->
    </div class="col-2">
    <div>
        <button type="button" class="bouton_panier">
            <img class="panier" src="/dw18/fansticker/images/panier_plein.png"><a class="bouton_panier" href="/view/cart.php" data-toggle="modal" data-target="#cart-modal" id="get-cart">Panier</a>
        </button>
    </div>
</header>
