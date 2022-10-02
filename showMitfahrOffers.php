<?php
session_start();
?>

<?php
include_once('mysql.php');
?>

<?php
$from = $_GET['from'];
$to = $_GET['to'];
$date = $_GET['datepicker2'];


try {
    $sql = "select * from fahrten where von='$from' and nach='$to' and datum='$date'";
    // use exec() because no results are returned
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $result = $stmt->fetchAll();
} catch (Exception $exception) {
    echo ('Erreur : ' . $exception->getMessage());
}


?>

<html>
<head>
    <title></title>
</head>
<body>
<ul>
    <?php 
    for($i=0; $i < count($result); $i++){
    ?>
    <li>Von: <?php echo $result[$i]['von'] ?> To: <?php echo $result[$i]['nach'] ?> </li>

    <?php } ?>
</ul>

</body>

</html>