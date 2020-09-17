<?php
     require 'baza.php';   
   
     mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
     $conn -> set_charset("utf8");
    
     $sql = ('SELECT * FROM objave;'); 
     $result = mysqli_query($conn, $sql); // IZVEDE v BAZI