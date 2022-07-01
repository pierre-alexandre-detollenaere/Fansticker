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
                        <div class="btn-group dropright">
                            <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" data-display="static" aria-expanded="false">
                                Thèmes
                            
                                <div class="dropdown-menu">
                                    <!-- Dropdown menu links -->
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left">
                                        <button class="dropdown-item" type="button">Sport</button>
                                        <button class="dropdown-item" type="button">Évènements</button>
                                        <button class="dropdown-item" type="button">Métiers</button>
                                        <button class="dropdown-item" type="button">Animaux</button>
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
            <li><a class="lien" href="information.html">Informations</a></li>
        </ul>
        <input type="text" class="col-11" id="rechercher" name="rechercher" placeholder="rechercher un thème">
    </nav>
    <div class="col-1">
        <button type="button" class="bouton" href="connexion.html">Connexion</button>
    </div class="col-1">
    <div>
        <button type="button" class="bouton_panier">
            <img class="panier" src=./images/panier_plein.png href="panier.html">
        </button>
    </div>
    <!-- img src="./images/panier - orange.png" -->
</header>
