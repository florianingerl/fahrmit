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
    include_once("imageutils.php");
    ?>

    <h1>Search for a Mitfahrgelegenheit</h1>

    <form action="searchfahrt.php" method="GET">
        <p>From:</p>
        <input type="text" placeholder="From" id="from" name="from"></input>
        <p>To:</p>
        <input type="text" placeholder="To" id="to" name="to"></input>
        <p>Date:</p>
        <input type="text" id="datepicker2" name="datepicker2"></p>

        <input type="submit"></input>
    </form>

    <?php
    if (isset($_GET["from"])) {
        $from = $_GET["from"];
        $to = $_GET["to"];
        $date = $_GET["datepicker2"];
        $stmt = $conn->prepare("SELECT * FROM fahrten where von='$from' and nach='$to' ");
        $stmt->execute();

        // set the resulting array to associative
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $result = $stmt->fetchAll();

        for ($i = 0; $i < count($result); $i++) { ?>
            <div style="display:flex; flex-direction: row;">
                <img src="<?php echo getImageFromId($conn, $result[$i]['userid']); ?>" height="200px"></img>
                <div>
                    <p><span style="font-weight:bold;">Von:</span><?php echo $result[$i]["von"]; ?> </p>
                    <p><span style="font-weight:bold;">To:</span><?php echo $result[$i]["nach"]; ?> </p>
                    <p><span style="font-weight:bold;">When:</span><?php echo $result[$i]["datum"] . " um " . $result[$i]["zeit"]; ?> </p>

                    <?php
                    $id = $result[$i]['userid'];
                    $user = getUserFromId($conn, $id);

                    ?>
                    <p>
                        The user <?php echo $user['username']; ?> has offered that lift and you can contact him via the email <?php echo $user['email']; ?> . </p>
                    </p>
                </div>
            </div>
    <?php
        }
    }

    ?>

</body>

</html>