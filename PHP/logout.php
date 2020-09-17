<?php 
    session_start();
    session_unset(); 
    session_destroy(); // id in username se uničita
    header("Location: ../index.php");
?>