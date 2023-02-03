<?php

setcookie("user", '', time() - 864000 * 30, "/");
header("Location: index.php");

?>