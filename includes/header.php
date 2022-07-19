<?php
?>
<header class="row col-12 d-none d-md-flex justify-content-between text-orange no-gutters">
    <div class="col-3">
        <figure>
            <img id="logo" src="./images/Fansticker_final_1.png" alt="logo site fansticker">
            <!--<figcaption id="slogan">
                Des étiquettes pour faire plaisir
            </figcaption>-->
        </figure>
    </div>
    <nav class="col-6.5">
        <ul>
            <li><a class="lien" href="base.php">Accueil</a></li>
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
                    <button class="dropdown-item" type="button"><a href="./theme_sport.php">Sports</a></button>
                    <button class="dropdown-item" type="button"><a href="#">Anniversaire</a></button>
                    <button class="dropdown-item" type="button"><a href="#">Naissance</a></button>
                    <button class="dropdown-item" type="button"><a href="#">Bâptême</a></button>
                    <button class="dropdown-item" type="button"><a href="#">Mariage</a></button>
                    <button class="dropdown-item" type="button"><a href="./theme_metier.php">Métiers</a></button>
                    <button class="dropdown-item" type="button"><a href="#">Animaux</a></button>
                    <button class="dropdown-item" type="button"><a href="#">Divers</a></button>
                </div>
            </div>
            </li>
            <li><a class="lien" href="en_vedette.php">En Vedette</a></li>
            <li><a class="lien" href="contact.php">Nous contacter</a></li>
        </ul>
        <input type="text" class="search" id="rechercher" name="rechercher" placeholder="rechercher un thème">
    </nav>
    <div class="col-1">
        <button type="button" class="connexion"><a class="btn_third" href="connexion.php">S'identifier</a></button>
    </div class="col-1.5">
    <div>
        <button type="button" class="bouton_panier">
            <img class="panier" src=./images/panier_plein.png><a class="bouton_panier" href="panier.html">Panier</a>
        </button>
    </div>
</header>
