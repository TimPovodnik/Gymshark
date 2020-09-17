<?php
    require 'baza.php';

    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    
 
    /* UPDEJTA V BAZICE KARKOLI EDITAMO IN SPREMENIMO */
    if (isset($_POST['Update'])) {
        
        $uporabnikID = $_POST['uporabnikID'];
        $ime = $_POST['ime'];
        $u_ime = $_POST['u_ime'];
        $email = $_POST['email'];
        $admin = $_POST['admin'];
        
        $sql = "UPDATE uporabniki SET ime = ?, u_ime = ?, email = ?, admin = ? WHERE id = '$uporabnikID';";
        $stmt = mysqli_stmt_init($conn);
        
        if (!mysqli_stmt_prepare($stmt, $sql)) {
                       header("Location: ../Admin/manageUsers.php?error=sqlerror"); // Če stavek ne dela
                       exit();
               }
               else {        
               mysqli_stmt_bind_param($stmt, "sssi", $ime, $u_ime, $email, $admin); 
               mysqli_stmt_execute($stmt); // Executa stavek v DB
                       
               header("Location: ../Admin/manageUsers.php?edit=success");
               exit();
           }
    }
 

    


