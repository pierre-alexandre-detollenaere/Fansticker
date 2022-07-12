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
            <li><a class="lien" href="index.php">Accueil</a></li>
            <li>
            <div class="btn-group">
                <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" data-display="static" aria-expanded="false">
                    Nos Stickers
                </button>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left">
                    <div>
                        <div class="btn-group dropright flex-column">
                            <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" data-display="static" aria-expanded="false">
                                Thèmes
                            
                                <div class="dropdown-menu">
                                    <!-- Dropdown menu links -->
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left">
                                        <button class="dropdown-item btn_third align-items-right" type="button"><a href="./theme_sport.php">Sport</a></button>
                                        <button class="dropdown-item btn_third" type="button"><a href="#">Évènements</a></button>
                                        <button class="dropdown-item btn_third" type="button"><a href="#">Métiers</a></button>
                                        <button class="dropdown-item btn_third" type="button"><a href="#">Animaux</a></button>
                                    </div>
                                </div>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
<!--
                <a class="lien" href="produits.html">Nos Stickers</a>
-->
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
