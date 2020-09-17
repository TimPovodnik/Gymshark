<?php

    require 'baza.php';   
   
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $conn -> set_charset("utf8");
    
    /* PODATKI ZA VNOS V TABELO */
    $sql = ('SELECT * FROM naročila;'); /* dobimo podatke iz tabele objave, ki jih na manageOrders izpišemo v tabelo */
    $result = mysqli_query($conn, $sql); // IZVEDE v BAZI
          
?>
 


