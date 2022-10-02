<?php
session_start();
?>

<html>
<head>
<title>
Mitfahrer-App
</title>
<link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script>
        $(function () {
            $("#datepicker").datepicker({
                dateFormat: "yy-mm-dd"
            });
            $("#datepicker2").datepicker({
                dateFormat: "yy-mm-dd"
            });
            $("#timepicker").timepicker({});
        });
    </script>
</head>
<body>
 
<h1>Register yourself</h1>
<form action="registeruser.php" method="POST" enctype="multipart/form-data">
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

<h1>Log in </h1>

<form action="loginuser.php" method="POST">
    <p>Email:</p>
    <input type="text" id="email" name="email"></input>

    <p>Password:</p>
    <input type="password" id="password" name="password"></input>
       
    <input type="submit"></input>

</form>

<?php
if( isset( $_SESSION['loggedUser'] ) ){
?>
<h1>You are logged in as <?php echo $_SESSION['loggedUser']['email']; ?> </h1>
<img src="assets/img/users/<?php echo $_SESSION['loggedUser']['username']; ?>.png" alt=""></img>
<!-- You can publish a Mitfahrgelegenheit only if you are logged in! -->
<h1>Offer a Mifahrgelegenheit</h1>
<form action="mitfahroffer.php" method="POST">
    <p>From:</p>
    <input type="text" placeholder="From" id="from" name="from"></input>
    <p>To:</p>
    <input type="text" placeholder="To" id="to" name="to"></input>
    <p>Date:</p>
    <input type="text" id="datepicker" name="datepicker"></p>
    <p>Places:</p>
    <input type="text" id="places" name="places"></p>
    <input type="submit"></input>
</form>
<?php } else { ?>
<h1>You aren't logged in! You can only publish a Mifahrgelegenheit if you are logged in!</h1>
<?php } ?>


<h1>Search for a Mitfahrgelegenheit</h1>

<form action="showMitfahrOffers.php" method="GET">
    <p>From:</p>
    <input type="text" placeholder="From" id="from" name="from"></input>
    <p>To:</p>
    <input type="text" placeholder="To" id="to" name="to"></input>
    <p>Date:</p>
    <input type="text" id="datepicker2" name="datepicker2"></p>
    
    <input type="submit"></input>
</form>

</body>
</html>
