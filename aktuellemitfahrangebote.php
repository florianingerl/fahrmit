<?php
include "db_connect.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/styles/script.css">
    <title>iDontCar</title>
</head>

<body>

        <?php
            $sql= "SELECT von, nach, datum, plaetze, zeit FROM fahrten";
            $rueckgabe= mysqli_query($verbindung, $sql);
            echo '<table border="1">';
            while ($datensatz = mysqli_fetch_assoc($rueckgabe))
            
            
            {
              echo "<tr>";
              echo "<th>Von</th>";
              echo "<th>Nach</th>";
              echo "<th>Datum</th>";
              echo "<th>Uhrzeit</th>";
              echo "<th>Plätze</th>";
              echo "</tr>";
              echo "<tr>";
              echo "<td>". $datensatz['von'] . "</td>";
              echo "<td>" . $datensatz['nach'] . "</td>";
              echo "<td>" . $datensatz['datum'] . "</td>";
              echo "<td>" . $datensatz['zeit'] . "</td>";
              echo "<td>" . $datensatz['plaetze'] . "</td>";
            
              
            }
              echo "</table>";             
              
              
                // echo "Mitgliedsnummer";
                // echo " ";
                // echo $datensatz ['mitgliedsnummer'];
                // echo " ";
                // echo "Username: ";
                // echo $datensatz ['username'];
                // echo " ";
                // echo "Mailadresse: ";
                // echo $datensatz ['mailadresse'];
                // echo "<br/>";
            
            
            

            // mysqli_free_result($rueckgabe);
            // echo "<br/>";
            // $rueckgabe = mysqli_query($verbindung, $sql);
            // while ($datensatz = mysqli_fetch_row($rueckgabe))
            // {
            //     for ($i=0; $i<mysqli_num_fields($rueckgabe); $i++)
            //     {
            //         echo $datensatz [$i];
            //         echo " ";
            //     }
            //     echo "<br/>";
            // }
            // echo "<br/>";
            // echo "Anzahl: " . mysqli_num_rows($rueckgabe);
            // mysqli_close($verbindung);

            ?>

</body>

</html>