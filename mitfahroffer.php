<?php
session_start();
?>

<?php
include_once('mysql.php');
?>

<?php
$from = $_POST['from'];
$to = $_POST['to'];
$date = $_POST['datepicker'];
$places = $_POST['places'];


try {
    $sql = "INSERT INTO fahrten (von,nach,datum,plaetze)  VALUES ('$from', '$to', '$date',8)";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully";
} catch (Exception $exception) {
    echo ('Erreur : ' . $exception->getMessage());
}


?>