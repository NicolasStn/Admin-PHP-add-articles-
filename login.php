<?php 


if (isset($_COOKIE['user'])) {
  header('Location: index.php');
}

// if (FAIL === 1) {
//   echo "bonjour";
// }
?>

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
    <title>Connecte toi</title>
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
                    </ul>
                <a href="login.php" class="btn btn-outline-light my-2 my-sm-0">Se connecter</a>
                </div>
        </div>
    </nav>    <main class="container mt-5">
    <form action="admin.php" method="POST">
  <!-- Email input -->
  <div class="form-outline mb-4">
    <input type="text" id="login" name="login" class="form-control" />
    <label class="form-label" for="login">Login</label>
  </div>

  <!-- Password input -->
  <div class="form-outline mb-4">
    <input type="password" id="password" name="password" class="form-control" />
    <label class="form-label" for="password">Mot de passe</label>
  </div>

    <div class="col">
      <!-- Simple link -->
      <a href="#!">Mot de passe oublié ?</a>
    </div>
  </div>

  <!-- Submit button -->
  <button type="submit" name="submit" class="btn btn-primary btn-block mb-4">Se connecter</button>

</form>
    </main>
</body>
</html>