<?php



if (isset($_POST['Add-submit'])) {

    require 'baza.php';

    $naslov = $_POST['title'];
    $opis = $_POST['content'];
    
    $sql = "INSERT INTO objave (naslov, opis) VALUES (?, ?);";
    $stmt = mysqli_stmt_init($conn);


    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../Admin/addPosts.php?error=sqlerror"); // Če stavek ne dela
        exit();
    }
    else {        
        mysqli_stmt_bind_param($stmt, "ss", $naslov, $opis); // vzamemo podatke in jih kasneje poslemo v databazo
        mysqli_stmt_execute($stmt); // Preveri v databazi če uporabnik že obstaja
       
        header("Location: ../Admin/addPosts.php?=success"); // Če stavek dela izpiše success
        exit();
    }
}


?>