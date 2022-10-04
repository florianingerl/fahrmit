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

    if (isset($_POST['email'])) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        try {
            $sql = "INSERT INTO users (username, email, password)  VALUES ('$username', '$email', '$password')";
            // use exec() because no results are returned
            $conn->exec($sql);
            $success = true;
        } catch (Exception $exception) {
            $errorMessage = $exception->getMessage();
        }

        include_once("uploaduserimage.php");
    }

    ?>

    

    <?php
    include_once("header.php");
    ?>

    <?php
    if (isset($success)) { ?>
        <h1>Congratulations! You have successfully signed up! You can now log in!</h1>
    <?php } else {
    ?>

        <h1>Sign Up</h1>
        <p style="color:red"><?php if(isset($errorMessage) ) { echo $errorMessage; } ?> </p>
        <form action="signup.php" method="POST" enctype="multipart/form-data">
            <p>Username:</p>
            <input type="text" id="username" name="username"></input>

            <p>Email:</p>
            <input type="text" id="email" name="email"></input>

            <p>Password:</p>
            <input type="text" id="password" name="password"></input>

            <p>Image of you and your car:</p>
            <input type="file" name="fileToUpload" id="fileToUpload"></input>


            <input type="submit"></input>

        </form>

    <?php } ?>


</body>

</html>