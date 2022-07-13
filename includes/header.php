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
    <nav class="col-7">
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
                    <button class="dropdown-item" type="button"><a href="#">Évènements</a></button>
                    <button class="dropdown-item" type="button"><a href="./theme_metier.php">Métiers</a></button>
                    <button class="dropdown-item" type="button"><a href="#">Animaux</a></button>
                </div>
            </div>
            </li>
            <li><a class="lien" href="en_vedette.php">En Vedette</a></li>
            <li><a class="lien" href="contact.html">Nous contacter</a></li>
        </ul>
        <input type="text" class="search" id="rechercher" name="rechercher" placeholder="rechercher un thème">
    </nav>
    <div class="col-1">
        <button type="button" class="connexion" href="connexion.html">S'identifier</button>
    </div class="col-1">
    <div>
        <button type="button" class="bouton_panier">
            <img class="panier" src=./images/panier_plein.png href="panier.html">
        </button>
    </div>
    <!-- img src="./images/panier - orange.png" -->
</header>
