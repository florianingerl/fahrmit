<?php
include_once("setimageofloggeduser.php");
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
        text-align:center;
        height:30px;
        border-radius: 5px;
    }

    #logPanel {
        display: flex;
        flex-direction: row;
    }
</style>

<div id="header">
    <a href="home.php"><img src="assets/img/logo.png" alt="" height="50px"></img></a>
    <span id="logo">Fahr mit</span>
    <a href="">Fahrt suchen</a>
    <a href="">Fahrt anbieten</a>
    <a href="login.php" class="signin">Sign in</a>
    <a href="signup.php" class="signup">Sign up</a>
    <?php if(isset($_SESSION['loggedUser'])) { ?>
        <a href="logout.php" class="logout">Logout</a>
    <?php } ?>
    <div id="logPanel">
        <img src="<?php echo $image ?>" height="50px"></img>
        <div>
            Logged in as <?php if (isset($_SESSION['loggedUser'])) {
                                echo $_SESSION['loggedUser']['username'];
                            } ?></br>
            <a href="">Meine Fahrten</a>
        </div>
    </div>

</div>