<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Administration</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
        <a class="navbar-brand" href="index.php"><img src="assets/img/logo.png" alt="logo" width="80%"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor02">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
            <a class="nav-link" href="index.php">Actus <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Nouveautés</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Forum</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="propos.php">A propos de nous</a>
            </li>

            <?php 

if (isset($_COOKIE['user'])) {    ?>
            <li class="nav-item">
            <a class="nav-link" href="articles.php">Ajouter un article</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="notes.php">Notes sur l'exercice</a>
            </li>
        </ul>
            <a href="deconnexion.php" class="btn btn-outline-light my-2 my-sm-0">Se déconnecter</a>
                <?php } else { ?>
                            </ul>
                            <a href="login.php" class="btn btn-outline-light my-2 my-sm-0">Se connecter</a>
                    <?php } ?>               
        </div>
        </div>
    </nav>    <div class="container mt-5">
        <div class="alert alert-info">
            <h2>Design du site</h2>
            <p>
                Le site est construit entièrement à l'aide du framework CSS Bootstrap. Pour l'inclure, il vous suffit d'insérer dans le header de votre application ses lignes:<br><br>

                <b style="font-size: small;">&#60;link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/<a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="13717c7c67606761726353273d233d23">[email&#160;protected]</a>/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
                <br>&#60;script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">&#60;/script>
                <br>&#60;script src="https://cdn.jsdelivr.net/npm/<a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="97e7f8e7e7f2e5b9fde4d7a6b9a6a5b9ae">[email&#160;protected]</a>/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">&#60;/script>
                <br>&#60;script src="https://cdn.jsdelivr.net/npm/<a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="46242929323532342736067268766876">[email&#160;protected]</a>/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">&#60;/script></b><br><br>

                <p>
                    Vous pourrez retrouver toute la doc ici -> <a href="https://getbootstrap.com/docs/4.0/getting-started/introduction/"><i>https://getbootstrap.com/docs/4.0/getting-started/introduction/</i></a><br>
                    Pour ce site, il a fallut: <br>
                    - Une <b>Navbar</b> -> <a href="https://getbootstrap.com/docs/4.0/components/navbar/"><i>https://getbootstrap.com/docs/4.0/components/navbar/</i></a><br>
                    - Des <b>Cards</b> -> <a href="https://getbootstrap.com/docs/4.0/components/card/"><i>https://getbootstrap.com/docs/4.0/components/card/</i></a><br>
                    - Un <b>Form</b> -> <a href="https://getbootstrap.com/docs/4.0/components/forms/"><i>https://getbootstrap.com/docs/4.0/components/forms/</i></a><br>
                    - Le message d'alerte de login avec <b>Alerts</b> -> <a href="https://getbootstrap.com/docs/4.0/components/alerts/">https://getbootstrap.com/docs/4.0/components/alerts/</a>
                </p><br><br>

                <i>Tips: En appuyant sur Ctr+U , Vous avez la possibilité de voir tout le code HTML de chaque page pour l'analyser</i>
            </p>
            <h2 class="mt-5">Fonctionnement du site</h2><br>
            <p>
                - Seule la page <i>"Actus"</i> Et la page "A propos" sont actives<br><br>
                - En appuyant sur <i>"Se connecter"</i> Vous êtes redirigé sur la page de login, sur vous avez rentré le bon login et mot de passe, votre connexion est enregistrée dans les cookies.<br><br>
                - Si vous n'entrez pas le bon login our mot de passe, un message d'erreur apparaît avec le modèle d'alerte de Bootstrap.<br><br>
                - Une fois connecté, sur le menu apparaît 2 nouveaux liens, les <i>"notes"</i> qui vous redirige ici, ainsi que la possibilité d'<i>Ajouter un article</i>. Le bouton <i>"Se connecter"</i> change
                et devient <i>"Se déconnecter"</i> qui aura pour effet d'éffacer votre cookie de connexion.<br><br>
                - Une fois déconnecté ou bien sans être connecté, vous n'avez plus la possibilité d'Ajouter un article.<br><br>
                <i><br>Rappel:<br></i>
                Documentation sur les cookies ici: <a href="https://www.w3schools.com/php/php_cookies.asp">https://www.w3schools.com/php/php_cookies.asp</a><br>
                Un cookie peut être supprimé en définissant sa durée à une date antérieure : <i>"setcookie("nom du cookie", "", time() - 3600);"</i>
            </p>
            <p></p>
        </div>
    </div>
<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script></body>
</html>