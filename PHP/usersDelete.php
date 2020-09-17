<?php

    require 'baza.php';
    
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
  
    if (isset($_POST['delete'])) {
        
        $uID = $_POST['uID'];
        
        $sql = "DELETE FROM uporabniki WHERE id = ?;";
        $stmt = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../Admin/manageUsers.php?error=sqlerror"); // Če stavek ne dela
            exit();
        }
        else {        
            mysqli_stmt_bind_param($stmt, 'i', $uID); 
            mysqli_stmt_execute($stmt); // Executa stavek v DB
                       
            header("Location: ../Admin/manageUsers.php");  
            exit();
        }
    }
        


    
