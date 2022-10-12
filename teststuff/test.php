<?php
include_once("mysql.php");
include_once("imageutils.php");

echo getImageFromUsername("florianingerl") . "\n";

echo "Hello World!\n";

echo getImageFromId($conn, 1);


?>