<?php 

define("FAIL", "1");


if (isset($_POST['login']) && isset($_POST['password']) && isset($_POST['submit'])) {
    $name = $_POST['login'];
    $password = $_POST['password'];
}

$user = "eleve";
$userpassword = "bonjour";

if ($name === $user && $password === $userpassword) {

    $cookie_name = "user";
    $cookie_value = $name;
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
    header("Location: index.php");

}  else {
    header("Location: login.php");
    echo "salut";
}

?>