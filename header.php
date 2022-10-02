<?php
session_start();
?>
<?php 
include_once("setimageofloggeduser.php");
?>
<html>
<head>
    <title></title>
    <style>
       #header {
        display:flex;
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
        color:yellow;
        border: 2px solid yellow;
       }

       #logPanel {
        display: flex;
        flex-direction: row;
       }
        </style>
</head>

<body>
    <div id="header">
     <a href="home.php"><img src="assets/img/logo.png" alt="" height="50px"></img></a>
     <span id="logo">Mitfahrapp</span> 
     <a href="">Fahrt suchen</a>
     <a href="">Fahrt anbieten</a>
     <a href="" class="signin">Sign in</a> 
     <a href="" class="signup">Sign up</a>
     <div id="logPanel">
        <img src="<?php echo $image?>" height="50px"></img>   
        <div>
            Logged in as <?php if(isset($_SESSION['loggedUser']) ) { echo $_SESSION['loggedUser']['username']; } ?></br>
            <a href="">Meine Fahrten</a>
        </div>
     </div>

    </div>
</body>

</html>