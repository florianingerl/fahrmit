<?php
session_start();

$_SESSION['loggedUser'] = null;
?>

<html>
<head>
    <title>Fahr mit</title>
</head>

<body>
    <?php include_once("header.php") ?>

    <h1>Good bye! You were successfully logged out!</h1>
</body>

</html>

