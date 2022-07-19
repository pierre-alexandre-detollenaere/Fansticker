<?php
   session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/connexion.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>CONNEXION</title>
</head>
<body class="filigrane" id="background">
    <?php
        include_once 'includes/header.php';
    ?>
    <main>
        <section>
            <h2>Bienvenue</h2>
            <div class="formulaire">
                <form action="#" method="post">
                    <h3>Se connecter</h3>
                    <label for="email" class="label-input">Email</label>
                    <input type="email" class="formulaire_contact" name="email" id="email" placeholder="Adresse email">
                    <label for="password" class="label-input">Mot de passe</label>
                    <input type="text" class="formulaire_contact" name="password" id="password" placeholder="Mot de passe">
                    <div class="btn-div-connexion">
                        <input type="submit" value="Connexion" class="btn-submit">
                    </div>
                </form>
            </div>
            <p class="forgot"><a href="#">Mot de passe oublié ?</a></p>
        </section>
        <section>
            <div></br></div>
            <div>
                <h2>S'inscrire</h2>
                <div class="btn-div-connexion">
                    <button type="input" class="btn-subscribe"><a class="link-color" href="inscription.php">Je m'inscris</a></button>
                </div>
                <div></br></div>
            </div>
        </section>
    </main>
    <?php
        include 'includes/footer.php';
    ?>
</body>
</html>