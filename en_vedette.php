<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/en_vedette.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>EN VEDETTE</title>
</head>
<body class="filigrane" id="background">
    <?php 
      include 'includes/header.php'; 
    ?>
    <main>
      <!-- Carousel début-->
      <div id="carouselExampleCaptions"  class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="dimension" src="./images/Carousel/father_day_2.jpg" width="612" height="270" class="d-block w-100" alt="fête des pères">
            <div class="carousel-caption d-none d-md-block">
              <h5 class="color_carousel">Pour sa fête,</h5>
              <h5 class="color_carousel">pensez à un sticker pour lui faire plaisir</h5>
            </div>
          </div>
          <div class="carousel-item">
            <img class="dimension" src="./images/Carousel/mother_day_612x612.jpg" width="612" height="270" class="d-block w-100" alt="fête des mères">
            <div class="carousel-caption d-none d-md-block">
              <h5></h5>
              <p></p>
            </div>
          </div>
          <div class="carousel-item">
            <img class="dimension" src="./images/Carousel/valentine_day_612x612.jpg" width="612" height="270" class="d-block w-100" alt="saint-valentin">
            <div class="carousel-caption d-none d-md-block">
              <h5></h5>
              <p></p>
            </div>
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
      <h2 class="titre_vedette">LE THÈME DU MOMENT</h2>
        <div class="row">
          <article>
            <figure>
              <div class="img_bis">
                <img src="images/Stickers - En Vedette/étiquette carrée haute - père1.png" width=70% alt="sticker père 1">
              </div>
              <figcaption>
                <h3>Sticker carré fête des pères</h3>
                <p>Lot de 6 stickers : 4€99</p>
              </figcaption>
            </figure>
          </article>
          <article>
            <figure>
              <div class="img">
                <img src="images/Stickers - En Vedette/étiquette ovale - père2.png" alt="sticker père 2">
              </div>
              <figcaption>
                <h3>Sticker long fête des pères</h3>
                <p>Lot de 6 stickers : 4€99</p>
              </figcaption>
            </figure>
          </article>
          <article>
            <figure>
              <div class="img_bis">
                <img src="images/Stickers - En Vedette/étiquette ronde - père3.png" alt="sticker père 3">
              </div>
              <figcaption>
                <h3>Sticker rond fête des pères</h3>
                <p>Lot de 6 stickers : 4€99</p>
              </figcaption>
            </figure>
          </article>
        </div>
    </section>
    <section>
      <h2 class="titre_vedette">VOS STICKERS PRÉFÉRÉS</h2>
        <div class="row">
          <article>
            <figure>
              <div class="img_bis">
                <img src="images/Stickers - En Vedette/étiquette carrée haute - mère1.png" alt="sticker mère 1">
              </div>
              <figcaption>
                <h3>Sticker carré fête des mères</h3>
                <p>Lot de 6 stickers : 4€99</p>
            </figure>
          </article>
          <article>
            <figure>
              <div class="img">
              <img src="images/Stickers - En Vedette/étiquette ovale - mère2.png" alt="sticker mère 2">
              </div>
              <figcaption>
                <h3>Sticker long fête des mères</h3>
                <p>Lot de 6 stickers : 4€99</p>
              </figcaption>
            </figure>
          </article>
          <article>
            <figure>
              <div class="img_bis">
              <img src="images/Stickers - En Vedette/étiquette ronde - mère3.png" alt="sticker mère 3">
              </div>
              <figcaption>
                <h3>Sticker rond fête des mères</h3>
                <p>Lot de 6 stickers : 4€99</p>
              </figcation>
            </figure>
          </article>
          <article>
            <figure>
              <div class="img_bis">
              <img src="images/Stickers - En Vedette/étiquette carrée haute - stvalentin1.png" alt="sticker saint valentin 1">
              </div>
              <figcaption>
                <h3>Sticker carré Saint-Valentin</h3>
                <p>Lot de 6 stickers : 4€99</p>
              </figcaption>
            </figure>
          </article>
          <article>
            <figure>
              <div class="img">
              <img src="images/Stickers - En Vedette/étiquette ovale - stvalentin2.png" alt="sticker saint valentin 2">
              </div>
              <figcaption>
                <h3>Sticker long Saint-Valentin</h3>
                <p>Lot de 6 stickers : 4€99</p>
              </figcaption>
            </figure>
          </article>
          <article>
            <figure>
              <div class="img_bis">
              <img src="images/Stickers - En Vedette/étiquette ronde - stvalentin3.png" alt="sticker saint valentin 3">
              </div>
              <figcaption>
                <h3>Sticker rond Saint-Valentin</h3>
                <p>Lot de 6 stickers : 4€99</p>
              </figcaption>
            </figure>
          </article>
      </section>

    </main>
    <?php
      include 'includes/footer.php';
    ?>
</body>
</html>