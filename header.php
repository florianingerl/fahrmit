<?php
include_once("mysql.php");
include_once("imageutils.php");
?>

<style>
    #header {
        display: flex;
        flex-direction: row;
    }

    #logo {
        text-transform: uppercase;
        color: blue;
        font-size: 20px;
    }

    .signin {
        border-radius: 5px;
        height: 30px;
        text-align: center;
        background-color: blue;
        color: white;
    }

    .signup {
        border-radius: 5px;
        height: 30px;
        text-align: center;
        background-color: black;
        color: yellow;
        border: 2px solid yellow;
    }

    .logout {
        background-color: green;
        color: white;
        border: 2px solid brown;
        text-align: center;
        height: 30px;
        border-radius: 5px;
    }

    #logPanel {
        display: flex;
        flex-direction: row;
    }
</style>

<div id="header">
    <a href="index.php"><img src="assets/img/logo.png" alt="" height="50px"></img></a>
    <a href="index.php"><span id="logo">Fahr mit</span></a>
    <a href="searchfahrt.php">Fahrt suchen</a>
    <?php if(isset($_SESSION['loggedUser'])) { ?> <a href="offerfahrt.php">Fahrt anbieten</a> <?php } ?>
    <?php if (!isset($_SESSION['loggedUser'])) { ?>
        <a href="login.php" class="signin">Sign in</a>
        <a href="signup.php" class="signup">Sign up</a>
    <?php } else { ?>
        <a href="logout.php" class="logout">Logout</a>

        <div id="logPanel">
            <img src="<?php echo getImageFromUsername($_SESSION['loggedUser']['username']); ?>" height="50px"></img>
            <div>
                Logged in as <?php echo $_SESSION['loggedUser']['username'];
                                ?></br>
                <a href="">Meine Fahrten</a>
            </div>
        </div>

    <?php } ?>

</div>