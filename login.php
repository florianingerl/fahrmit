<?php
session_start();
?>

<html>

<head>
    <title>Fahr mit</title>
</head>

<body>


    <?php
    include_once('mysql.php');
    ?>

    <?php

if( isset($_POST['email'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    try {
        $sql = "select * from users where email='$email'";
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $result = $stmt->fetchAll();

        if (count($result) == 0) {
            $emailWrong = "There wasn't any user with that email!";
        } else if ($result[0]['password'] == $password) {
            $_SESSION['loggedUser'] = $result[0];
        } else {
            $passwordWrong = "You entered the wrong password!";
        }
    } catch (Exception $exception) {
        echo $exception->getMessage();
    }
}

    ?>

    <?php
    include_once("header.php");
    ?>

    <?php
    if (isset($_SESSION['loggedUser'])) { ?>
        <h1>Congratulations! You are logged in successfully!</h1>
    <?php } else {
    ?>
        <h1>Log in </h1>

        <form action="login.php" method="POST">
            <p>Email:</p>
            <input type="text" id="email" name="email"></input>
            <p style="color:red"><?php if (isset($emailWrong)) {
                                        echo $emailWrong;
                                    } ?> </p>

            <p>Password:</p>
            <input type="password" id="password" name="password"></input>
            <p style="color:red"><?php if (isset($passwordWrong)) {
                                        echo $passwordWrong;
                                    } ?> </p>

            <input type="submit"></input>

        </form>

    <?php } ?>


</body>

</html>