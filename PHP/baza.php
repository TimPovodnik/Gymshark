<?php
    $servername = "sh11";
    $dbUsername = "timpovodnik_gymshark";
    $dbPassword = "TiMpO2002";
    $dbName = "timpovodnik_gymshark";
    
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    
    $conn = mysqli_connect($servername, $dbUsername, $dbPassword, $dbName );
    $conn -> set_charset("utf8");

    if (!$conn) {
        die("Connection failed: ".mysqli_connect_error());
    }
?>