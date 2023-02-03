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
    <title>Vidéo-Jeux.com</title>
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
    </nav>    <main class="container mt-5">
        <h2>Bienvenue sur le site de jeux vidéo le plus cool de la galaxie !</h2>
        <p>Nous sommes là pour te donner les dernières nouvelles, les meilleurs conseils et les critiques les plus fiables sur les jeux les plus incroyables. Que tu sois un joueur occasionnel ou un hardcore gamer, nous avons tout ce qu'il te faut. Alors prépare tes manettes et prépare-toi à vivre des aventures épiques !</p>
        <h2 class="my-4">Dernières actus</h2>
        <div class="d-flex flex-wrap">

        <?php

// if (isset($_FILES['image'])) {
//     move_uploaded_file($_FILES['image']['tmp_name'], "profil/img/".$_FILES['image']['name']);
// }

// if (is_file('infos_jeux.json')) {
//     $contents = json_decode(file_get_contents('profil/infos_jeux.json'), true);
// }

// if (!empty($_POST['titre']) && !empty($_POST['description']) && !empty($_POST['note']) && !empty($_FILES['image'])) {
//     $contents = json_decode(file_get_contents('profil/infos_jeux.json'), true);
//     $contents[] = array('titre' => $_POST['titre'], 'description' => $_POST['description'], 'note' => $_POST['note'], 'image' => 'profil/img/'.$_FILES['image']['name']);
//     file_put_contents('profil/infos_jeux.json', json_encode($contents));

// }

$contents = [];

if (isset($_POST['upload']) && isset($_POST['titre']) && isset($_POST['description']) && isset($_POST['note']) && isset($_FILES['image'])) {

    if (!is_dir("profil")) {
        mkdir("profil");
    }
    if (!is_dir("profil/img")) {
        mkdir("profil/img");
    }

    header('Location: index.php');

}

if (!empty($_POST['titre']) && !empty($_POST['description']) && !empty($_POST['note']) && !empty($_FILES['image'])) {

    $contents = json_decode(file_get_contents('profil/infos_jeux.json'), true);
   
    $img_temp = $_FILES['image']['tmp_name'];
    $img_name = pathinfo($_FILES['image']['name']);
    $img_replace = [' ',':'];
    $img_doss = 'profil/img/'. str_replace($img_replace,'',$_POST['titre']).".".$img_name['extension'];
    move_uploaded_file($img_temp, $img_doss);
   
    $jeux = [trim($_POST['titre']), trim($_POST['description']), trim($_POST['note']), $img_doss];
    $contents[] = $jeux;
    file_put_contents('profil/infos_jeux.json',json_encode($contents));

}

$contents = json_decode(file_get_contents('profil/infos_jeux.json'), true);
$reversecontents = array_reverse($contents);

foreach ($reversecontents as $content) {

    $titre = $content[0];
    $description = $content[1];
    $note = $content[2];
    $image = $content[3];

    ?>
        <div class="card m-3" style="width: 18rem;">
            <?= "<img class='card-img-top' src=$image alt='Card image cap'>
            <div class='card-body'>
                <h5 class='card-title'>$titre</h5>
                <p class='card-text'>$description</p>
                <p><i>Note: $note/10</i></p>"?>
                <a href="#" class="btn btn-primary">Voir l'article complet</a>
            </div>
        </div>
<?php
}
?>
            
        </div>
    </main>
</body>
</html>