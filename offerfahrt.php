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
include_once("header.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $from = $_POST['from'];
    $to = $_POST['to'];
    $date = $_POST['datepicker'];
    $time = $_POST['timepicker'];
    $numPlaces = intval ( $_POST["places"] );
    $userid = $_SESSION['loggedUser']['id'];
    try {
        $sql = "INSERT INTO fahrten (von, nach, datum, zeit, plaetze, userid )
        VALUES ('$from', '$to', '$date', '$time', $numPlaces, $userid )";
        // use exec() because no results are returned
        $conn->exec($sql);
        echo "<h1>Congrutations! You have successfully submitted your new lift! You can offer more lifts!</h1>";
    }catch(PDOException $e) {
        echo "<h1>Something went wrong!</h1>";
    }
}    

?>





<h1>Offer a lift</h1>
<form action="offerfahrt.php" method="POST">
    <p>From:</p>
    <input type="text" placeholder="From" id="from" name="from"></input>
    <p>To:</p>
    <input type="text" placeholder="To" id="to" name="to"></input>
    <p>Date:</p>
    <input type="text" id="datepicker" name="datepicker"></input></p>
    <p>Time:</p>
    <input type="text" id="timepicker" name="timepicker"></input></p>
    <p>Places:</p>
    <input type="text" id="places" name="places"></input></p>
   
    <input type="submit"></input>
</form>

</body>

</html>