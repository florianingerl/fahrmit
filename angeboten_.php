<?php
session_start();

$sname= "localhost";
$uname= "root";
$password= "";
$db_name= "idontcar";
$verbindung = mysqli_connect($sname, $uname, $password, $db_name);
if (mysqli_connect_errno())
{
   echo "Fehler beim Verbindungsaufbau: " . mysqli_connect_errno();
   exit();
}


 $sql= "SELECT von, nach, datum, plaetze,fahrtennummer, zeit FROM fahrten where datum BETWEEN \"2022-10-18\" AND \"2022-10-20\"";

            $rueckgabe= mysqli_query($verbindung, $sql);
            echo '<table border="1">';
            while ($datensatz = mysqli_fetch_assoc($rueckgabe))
            {
              echo $datensatz['datum']." ".$datensatz['zeit']." ".$datensatz['von']." ".$datensatz['nach']." ".$datensatz['plaetze']." ".$datensatz['fahrtennummer']."<br />";

    
  //if($datum = "von 15102022 bis 20102022")
  //{
 
    
  }
  echo "Die aktuelle Angebote ist momentan von Bremen nach Hamburg,schnell Buchen! <br/>";
  
  //if($plaetze = "von Guetersloh nach Marseille AND " von "von 15102022 bis 20102022"){
    //echo "Beim naechste Reise erste 20km kostenfrei!".echo "<br/>";
  //}
  //{
 // echo '<table border="1">';
  //while ($datensatz = mysqli_fetch_assoc($rueckgabe))
  //}
      
                      
            
  ?>

