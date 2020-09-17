<?php

    require 'baza.php';
    
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
  
    if (isset($_POST['delete'])) {
        
        $oID = $_POST['oID'];
        
        $sql = "DELETE FROM naročila WHERE id = ?;";
        $stmt = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../Admin/manageOrders.php?error=sqlerror"); // Če stavek ne dela
            exit();
        }
        else {        
            mysqli_stmt_bind_param($stmt, 'i', $oID); 
            mysqli_stmt_execute($stmt); // Executa stavek v DB
                       
            header("Location: ../Admin/manageOrders.php");  
            exit();
        }
    }
        


    
