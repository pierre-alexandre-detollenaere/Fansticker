<<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/acceuil.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">    <title>EN VEDETTE</title>
    <title>ACCEUIL</title>
</head>
<body class="filigrane" id="background">
    <?php 
      include 'includes/header.php'; 
    ?>
    <main>
      <div class= "titre">
        <h1>BIENVENUE SUR FANSTICKER</h1>
    </div>
      <!-- Carousel début-->
      <div id="carouselExampleCaptions"  class="carousel slide" data-ride="carousel">
       <!-- <ol class="carousel-indicators">
          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="4"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="5"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="6"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="7"></li>
        </ol> -->
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="dimension" src="./images/Carousel/cadeau_unique.png" width="800"  class="d-block w-100" alt="amour">
            <div class="carousel-caption d-none d-md-block">
              <h5 class="color_carousel"></h5>
            </div>
          </div>
          <div class="carousel-item">
            <img class="dimension" src="./images/Carousel/amour.png" width="800"  class="d-block w-100" alt="amour">
            <div class="d-md-block "> 
                <figcaption>
                    <h5 class="color_carousel">Créez les stickers personnalisés pour vos évènements</h5>
                </figcaption>
          </div>
          </div>
          <div class="carousel-item">
            <img class="dimension" src="./images/Carousel/divers.png" width="800"  class="d-block w-100" alt="amis">
            <!--<div class="carousel-caption d-none d-md-block">-->
            <div class="d-block w-100">  
            <h5 class="color_carousel">pour les amis</h5>
              <p></p>
            </div>
          </div>
          <div class="carousel-item">
            <img class="dimension" src="./images/Carousel/valentine.png" width="800"  class="d-block w-100" alt="saint-valentin">
            <div class="d-block w-100">
              <h5 class="color_carousel">pour les personnes chères</h5>
              <p></p>
            </div>
          </div>
            <div class="carousel-item">
            <img class="dimension" src="./images/Carousel/mariage.png" width="800"  class="d-block w-100" alt="mariage">
            <div class="d-block w-100">
              <h5 class="color_carousel"> pour les grandes dates</h5>
              <p></p>
            </div>
          </div>
          
          <div class="carousel-item">
            <img class="dimension" src="./images/Carousel/birthday.png" width="800"  class="d-block w-100" alt="happy birthday">
            <div class="d-block w-100">
              <h5 class="color_carousel">pour les fêtes</h5>
              <p></p>
            </div>
          </div>
          
          <div class="carousel-item">
            <img class="dimension" src="./images/Carousel/bapteme_photo.png" width="800"  class="d-block w-100" alt="bapteme">
            <div class="d-block w-100"> 
              <h5 class="color_carousel">pour les souvenirs</h5>
              <p></p>
            </div>
          </div>
          <div class="carousel-item">
            <img class="dimension" src="./images/Carousel/naissance_photo.png" width="800"  class="d-block w-100" alt="naissance">
            <div class="d-block w-100"> 
              <h5 class="color_carousel">pour les moments heureux</h5>
              <p></p>
            </div>
          </div>
          <div class="carousel-item">
            <img class="dimension" src="./images/Carousel/great.jpg" width="800"  class="d-block w-100" alt="great">
            <div class="d-block w-100"> 
              <h5 class="color_carousel">pour votre familles et vos amis</h5>
              <p></p>
            </div>
          </div>
          
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      </br>
      <!--Carousel fin-->
      <section>
      <div class="sous_titre">  
      <h2 class="titre_acceuil">Créez et collez!</h2>
      </div>
      <div class="row">
        <article>
                <figure id="first">
                    <img src="./images/images_accueil/stickersacc.png"   alt="exemple stickers">
                    <figcaption>
                        <h3>Choisissez</h3>
                    </figcaption>
                </figure>
            </article>
            
            <article>
                <figure id="first">
                    <img src="./images/images_accueil/unknown.png"  alt="exemple stickers">
                    <figcaption>
                        <h3>Adaptez</h3>
                    </figcaption>
                </figure>
            </article>   
            <article>
                <figure id="first">
                    <img src="./images/images_accueil/luggage.jpg"   alt="exemple stickers">
                    <figcaption >
                        <h3>A vous de choisir</h3>
                    </figcaption>
                </figure>
            </article>   
          </div>
            <div class="sous_titre">  
            <h2 class="titre_acceuil">Catalogue renouvélé</h2>
            </div> 
            <div class="row">
            <article>
                <figure id="second">
                    <img src="./images/images_accueil/cadeau.jpg" width="200" height="200" alt="papier">
                    <figcaption>
                        <h3>Offrez votre cadeau</h3>
                    </figcaption>
                </figure>
                </article>
                <article>
                <figure id="second">
                    <img src="./images/images_accueil/satisfaction.png" width="200"  alt="satisfaction">
                    <figcaption>
                        <h3>100% Satisfaction</h3>
                    </figcaption>
                </figure>
                </article>
              </div>
      
        
</section>

    </main>
    <?php
      include 'includes/footer.php';
    ?>
</body>
</html>