<?php
session_start();

 $sql= "SELECT von, nach, datum, plaetze, zeit FROM fahrten where datum = (von 15.10.2022 bis";
            $rueckgabe= mysqli_query($verbindung, $sql);
            echo '<table border="1">';
            while ($datensatz = mysqli_fetch_assoc($rueckgabe)){
            
  if($datum ='von 15102022 bis 20102022');
  {
  echo "Die aktuelle Angebote ist momentan von Bremen nach Hamburg"; 
  echo "<br/>";
  }
  {
  echo '<table border="1">';
  while ($datensatz = mysqli_fetch_assoc($rueckgabe))
  }
      
             
            
            
            
  ?>

