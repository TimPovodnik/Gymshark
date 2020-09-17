<?php

    require 'baza.php';
    
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
  
    if (isset($_POST['delete'])) {
        
        $dID = $_POST['dID'];
        
        $sql = "DELETE FROM objave WHERE id = ?;";
        $stmt = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../Admin/managePosts.php?error=sqlerror"); // Če stavek ne dela
            exit();
        }
        else {        
            mysqli_stmt_bind_param($stmt, 'i', $dID); 
            mysqli_stmt_execute($stmt); // Executa stavek v DB
                       
            header("Location: ../Admin/managePosts.php");  
            exit();
        }
    }
        


    
