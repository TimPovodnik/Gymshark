<?php 
    /* --------------------------------- FORM NA STRANI LOSE FAT --------------------------------- */
    if (isset($_POST['submit'])) {
        
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
        
        require 'baza.php';
        
        $conn -> set_charset("utf8");
        
        $pid = $_POST['pid'];
        $uid = $_POST['uid'];
        $name = $_POST['n'];
        $surname = $_POST['s'];
        $weight = $_POST['w'];
        $height = $_POST['h'];
        $birthDay = $_POST['bd'];
        
        // EROOR CHECK

        if (!preg_match("/^[a-zA-Z0-9]*$/", $name)) { // Pregleda če username vsebuje nedovoljene znake
            header("Location: ../orderFormLF.php?error=ivalidname&name=".$name);
            exit();
        }
        else if (!preg_match("/^[a-zA-Z0-9]*$/", $surname)) { // Pregleda če username vsebuje nedovoljene znake
            header("Location: ../orderFormLF.php?error=ivalidsurname&surname=".$surname);
            exit();
        }
        else { // če ni error-jev
        
            $sql = "INSERT INTO naročila (ime, priimek, teza, visina, datum_r, program_id, uporabnik_id) VALUES (?, ?, ?, ?, ?, ?, ?);";
            $stmt = mysqli_stmt_init($conn);
            
            if (!mysqli_stmt_prepare($stmt, $sql)) { // Če stavek ne dela
                header("Location: ../orderFormLF.php?error=sqlerror"); 
                exit();
            }
            else { // Če stavek dela
    
               mysqli_stmt_bind_param($stmt, 'ssiisii', $name, $surname, $weight, $height, $birthDay, $pid, $uid); // vzamemo podatke in jih kasneje poslemo v databazo
               mysqli_stmt_execute($stmt); // Executa stavek v bazi
                
               header("Location: ../orderFormLF.php?success"); 
               exit();     
            }
        }
    } 
    /* --------------------------------- FORM NA STRANI GAIN MUSCLES --------------------------------- */
    else if (isset($_POST['submit2'])) {
        
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
        
        require 'baza.php';
        
        $conn -> set_charset("utf8");
        
        $pid = $_POST['pid'];
        $uid = $_POST['uid'];
        $name = $_POST['n'];
        $surname = $_POST['s'];
        $weight = $_POST['w'];
        $height = $_POST['h'];
        $birthDay = $_POST['bd'];
        
        // EROOR CHECK

        if (!preg_match("/^[a-zA-Z0-9]*$/", $name)) { // Pregleda če username vsebuje nedovoljene znake
            header("Location: ../orderFormGM.php?error=ivalidname&name=".$name);
            exit();
        }
        else if (!preg_match("/^[a-zA-Z0-9]*$/", $surname)) { // Pregleda če username vsebuje nedovoljene znake
            header("Location: ../orderFormGM.php?error=ivalidsurname&surname=".$surname);
            exit();
        }
        else { // če ni error-jev
        
            $sql = "INSERT INTO naročila (ime, priimek, teza, visina, datum_r, program_id, uporabnik_id) VALUES (?, ?, ?, ?, ?, ?, ?);";
            $stmt = mysqli_stmt_init($conn);
            
            if (!mysqli_stmt_prepare($stmt, $sql)) { // Če stavek ne dela
                header("Location: ../orderFormGM.php?error=sqlerror"); 
                exit();
            }
            else { // Če stavek dela
    
               mysqli_stmt_bind_param($stmt, 'ssiisii', $name, $surname, $weight, $height, $birthDay, $pid, $uid); // vzamemo podatke in jih kasneje poslemo v databazo
               mysqli_stmt_execute($stmt); // Executa stavek v bazi
                
               header("Location: ../orderFormGM.php?success"); 
               exit();     
            }
        }
    } 
    else { // Če uporabnik pride do strani na drug način kot pa preko gumba submit
        header("Location: ../orderFormLF.php"); // ga pošljemo nazaj na registracijo
        exit();
    }
    
    
