<?php
    require 'baza.php';

    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    
 
    /* UPDEJTA V BAZICE KARKOLI EDITAMO IN SPREMENIMO */
    if (isset($_POST['Update'])) {
        
        $objavaID = $_POST['objavaID'];
        $naslov = $_POST['title'];
        $opis = $_POST['content'];
        
        $sql = "UPDATE objave SET naslov = ?, opis = ? WHERE id = '$objavaID';";
        $stmt = mysqli_stmt_init($conn);
        
        if (!mysqli_stmt_prepare($stmt, $sql)) {
                       header("Location: ../Admin/managePosts.php?error=sqlerror"); // Če stavek ne dela
                       exit();
               }
               else {        
               mysqli_stmt_bind_param($stmt, "ss", $naslov, $opis); 
               mysqli_stmt_execute($stmt); // Executa stavek v DB
                       
               header("Location: ../Admin/managePosts.php?edit=success");
               exit();
           }
    }
 

    


