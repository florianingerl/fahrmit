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

    <h1>Here are the last lifts that were offered!</h1>

    <?php
    $stmt = $conn->prepare("SELECT * FROM fahrten order by datum desc");
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

    ?>

</body>

</html>