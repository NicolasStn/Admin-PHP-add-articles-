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
    <title>Gestion des articles</title>
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
                <?php } else { 
                    header('Location: login.php');

} ?>
         </div>
        </div>
    </nav><main class="container">
<form class="mt-5" method="post" action="index.php" enctype="multipart/form-data">
  <div class="form-group">
    <label for="titre">Titre de l'article</label>
    <input type="text" class="form-control" name="titre" id="titre" placeholder="Entrez le titre de l'article" required autofocus>
  </div>
  <div class="form-group">
    <label for="description">Description</label>
    <textarea type="text" class="form-control" name="description" id="description" placeholder="Description" required></textarea>
  </div>
  <div class="form-group">
  <label for="image">Image à inclure</label>
    <input type="file" name="image" id="image" accept="image/*" class="form-control" required>
    </div>
    <div class="form-group">
  <label for="note">Note /10</label>
    <input type="number" name="note" id="note" class="form-control" required>
    </div>
  <button type="submit" class="btn btn-primary" name="upload">Enregistrer</button>
</form>
</main>
</body>
</html>