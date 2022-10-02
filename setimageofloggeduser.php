<?php

if(!isset($_SESSION['loggedUser'])){
    $image = "assets/img/nobody.png";
}
else {
    $un = $_SESSION['loggedUser']['username'];
    $image = "assets/img/$un.png";
}

?>