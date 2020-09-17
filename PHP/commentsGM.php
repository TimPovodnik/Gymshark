<?php
    include 'baza.php';

    // INSERT KOMENTARJA V BAZO
    if(isset($_POST['commentSubmit'])) { // Če kliknemo na gumb comment zažene kodo
        $uid = $_POST['uid'];
        $pid = $_POST['pid'];
        $date = $_POST['date'];
        $message = $_POST['message'];
        $grade = $_POST['grades'];
        
        $sql3 = "SELECT * FROM Ocene WHERE uporabnik_id='$uid' AND program_id = '$pid';"; // SELECTA VSE IZ TABELE OCENE KJER JE ID ENAK IDJU KI NAPIŠE KOMENTAR
        $result3 = mysqli_query($conn, $sql3); // IZVEDE v BAZI
        $row3 = mysqli_fetch_assoc($result3);
        
      if($uid != $row3['uporabnik_id'] AND $pid != $row3['program_id']) {
        $sql = "INSERT INTO komentarji (sporocilo, datum, uporabnik_id, program_id) VALUES (?, ?, ?, ?);";
        $stmt = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($stmt, $sql)) {
                       header("Location: ../gainMuscles.php?error=sqlerror"); // Če stavek ne dela
                       exit();
               }
               else {        
               mysqli_stmt_bind_param($stmt, "ssii", $message, $date, $uid, $pid); 
               mysqli_stmt_execute($stmt); // Executa stavek v DB
        }
           
        // INSERTA OCENO V DB
        
        $sql2 = "INSERT INTO Ocene (ocena, uporabnik_id, program_id) VALUES (?, ?, ?);";
        $stmt2 = mysqli_stmt_init($conn);
        
        if (!mysqli_stmt_prepare($stmt2, $sql2)) {
                       header("Location: ../gainMuscles.php?error=sqlerror2"); // Če stavek ne dela
                       exit();
               }
               else {        
               mysqli_stmt_bind_param($stmt2, "iii", $grade, $uid, $pid); 
               mysqli_stmt_execute($stmt2); // Executa stavek v DB
                       
             header("Location: ../gainMuscles.php?comment=success");
             exit();
        }
      }
    }
    
       // UPDATE OCENE PRI KOMENTARJU
    if(isset($_POST['commentSubmit'])) { // Če kliknemo na gumb comment zažene kodo
        $uid = $_POST['uid'];
        $pid = $_POST['pid'];
        $message = $_POST['message'];
        $grade = $_POST['grades'];

   
      if($uid == $row3['uporabnik_id'] AND $pid == $row3['program_id']) {
        
        $sql = "INSERT INTO komentarji (sporocilo, datum, uporabnik_id, program_id) VALUES (?, ?, ?, ?);";
        $stmt = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($stmt, $sql)) {
                       header("Location: ../gainMuscles.php?error=sqlerror"); // Če stavek ne dela
                       exit();
               }
               else {        
               mysqli_stmt_bind_param($stmt, "ssii", $message, $date, $uid, $pid); 
               mysqli_stmt_execute($stmt); // Executa stavek v DB
               
               header("Location: ../gainMuscles.php?comment=success");
               exit();
           }
      }
    }
    
    // IZPIS KOMENTARJA IZ BAZE s pomočjo FUNKCIJE
    function getComments($conn) {
           $sql = "SELECT * FROM komentarji WHERE program_id = 2;"; // dobimo vse komentarje iz baze kjer je program_id = 2 (Komentarji s id = 1 spadajo na stran gainMuscles.php)
           $result = mysqli_query($conn, $sql); // IZVEDE v BAZI
           while ($row = mysqli_fetch_assoc($result)) { // da v tabelo in jo shrani v $row (izpiše komentarje)
             $id = $row['uporabnik_id'];
             $sql2 = "SELECT * FROM uporabniki WHERE id='$id';"; // SELECTA VSE IZ BAZE KJER JE ID ENAK IDJU KI NAPIŠE KOMENTAR
             $result2 = mysqli_query($conn, $sql2); // IZVEDE v BAZI
             if($row2 = mysqli_fetch_assoc($result2)) { // v $row2 shranimo rezultat, ki ga dobimo iz SQL stavka
                 echo "<div class='row'>";
                  echo "<div class='col-md-12'>";
                       echo "<span class='uime' ><i class='fas fa-user' style='font-size:20px;color:dodgerblue'>&nbsp</i>".$row2['u_ime']."</span><br>"; // izpiše uporabniško ime iz tabele uporabniki
                       echo "<span class='datum' >".$row['datum']."</span><br>";
                       echo nl2br($row['sporocilo']);
                       
                       // OCENE
                       $sql3 = "SELECT * FROM Ocene WHERE uporabnik_id='$id' AND program_id = 2;"; // SELECTA VSE IZ TABELE OCENE KJER JE ID ENAK IDJU KI NAPIŠE KOMENTAR
                       $result3 = mysqli_query($conn, $sql3); // IZVEDE v BAZI
                       $row3 = mysqli_fetch_assoc($result3);
                            if( $row3['ocena'] == 0) {
                         echo "    <div class='grade'>
                                   <label>UNRATED</label>
                               </div> "; 
                            }
                            else if( $row3['ocena'] == 1) {
                         echo "    <div class='grade'>
                                   <span class='fa fa-star checked'></span>
                                   <span class='fa fa-star unchecked'></span>
                                   <span class='fa fa-star unchecked'></span>
                                   <span class='fa fa-star unchecked'></span>
                                   <span class='fa fa-star unchecked'></span>
                               </div> "; 
                            }
                            else if( $row3['ocena'] == 2) {
                         echo "    <div class='grade'>
                                   <span class='fa fa-star checked'></span>
                                   <span class='fa fa-star checked'></span>
                                   <span class='fa fa-star unchecked'></span>
                                   <span class='fa fa-star unchecked'></span>
                                   <span class='fa fa-star unchecked'></span>
                               </div> "; 
                            }
                            else if( $row3['ocena'] == 3) {
                         echo "    <div class='grade'>
                                   <span class='fa fa-star checked'></span>
                                   <span class='fa fa-star checked'></span>
                                   <span class='fa fa-star checked'></span>
                                   <span class='fa fa-star unchecked'></span>
                                   <span class='fa fa-star unchecked'></span>
                               </div> "; 
                            }
                            else if( $row3['ocena'] == 4) {
                         echo "    <div class='grade'>
                                   <span class='fa fa-star checked'></span>
                                   <span class='fa fa-star checked'></span>
                                   <span class='fa fa-star checked'></span>
                                   <span class='fa fa-star checked'></span>
                                   <span class='fa fa-star unchecked'></span>
                               </div> "; 
                            }
                            else if( $row3['ocena'] == 5) {
                         echo "    <div class='grade'>
                                   <span class='fa fa-star checked'></span>
                                   <span class='fa fa-star checked'></span>
                                   <span class='fa fa-star checked'></span>
                                   <span class='fa fa-star checked'></span>
                                   <span class='fa fa-star checked'></span>
                               </div> "; 
                            }
                            
                        $Uid = $_SESSION['userId'];    
                        $sql3 = "SELECT * FROM Ocene WHERE uporabnik_id ='$Uid' AND program_id = 2;"; // SELECTA VSE IZ TABELE OCENE KJER JE ID ENAK IDJU KI NAPIŠE KOMENTAR
                        $result3 = mysqli_query($conn, $sql3); // IZVEDE v BAZI
                        $row3 = mysqli_fetch_assoc($result3);
                        
                if(isset($_SESSION['userId'])) { // preveri če smo loginani
                      if($_SESSION['userId'] == $row['uporabnik_id'] || $_SESSION['userAdminId'] == true) { // preveri če se $_SESSION['USerId'] ( id loged-in uporabnika) ujema z uporabnik_id-jem tistega ki je komentiral (iz tabele uporabniki) // Če je admin lahko edita in deleta komentarje vseh uporabnikov.
                 echo " <form  method='POST' action='PHP/commentsGM.php'>
                         <input type='hidden' name='id' value='".$row['id']."'> 
                         <input type='hidden' name='uid' value='".$row['uporabnik_id']."'>
                               <button class='delete-btn' type='submit' name='commentDeleteSubmit'>Delete</button>
                        </form>
                        <form  method='POST' action='commentEditGM.php'> <!-- Vzamemo podatke in jih poslemo na drugo stran, kejr jih editamo --->
                            <input type='hidden' name='id' value='".$row['id']."'> 
                            <input type='hidden' name='uid' value='".$row['uporabnik_id']."'>
                            <input type='hidden' name='date' value='".$row['datum']."'>
                            <input type='hidden' name='message' value='".$row['sporocilo']."'>
                            <input type='hidden' name='grade' value='".$row3['ocena']."'>
                            <button class='edit-btn'>Edit</button>
                        </form>";
                    } 
                } 
                    echo  "</div>";
                echo "</div>";
             }
        }
    }
    
    
    // EDITANJE KOMENTARJA
    if(isset($_POST['commentEditSubmit'])) { // Če kliknemo na gumb update zažene kodo
        $id = $_POST['id'];
        $message = $_POST['message'];
            
        $sql2 = "UPDATE komentarji SET sporocilo = ? WHERE id = ?;";
        $stmt2 = mysqli_stmt_init($conn);
            
        if (!mysqli_stmt_prepare($stmt2, $sql2)) {
            
            header("Location: ../gainMuscles.php?error=sqlerror"); // Če stavek ne dela
            exit();
        }
        else 
        {                       // s = string, i = integer
            mysqli_stmt_bind_param($stmt2, "si", $message, $id); 
            mysqli_stmt_execute($stmt2); // Executa stavek v DB
        }
        
        // UPDATE OCENE
        $grade = $_POST['grades'];
        $uid = $_POST['uid'];
        
        $sql3 = "UPDATE Ocene SET ocena = ? WHERE uporabnik_id = '$uid' AND program_id = 2;";
        $stmt3 = mysqli_stmt_init($conn);
            
        if (!mysqli_stmt_prepare($stmt3, $sql3)) {
                       header("Location: ../gainMuscles.php?error=sqlerror"); // Če stavek ne dela
                       exit();
               }
               else {                       // s = string, i = integer
               mysqli_stmt_bind_param($stmt3, "i", $grade); 
               mysqli_stmt_execute($stmt3); // Executa stavek v DB
                       
               header("Location: ../gainMuscles.php?commentedit=success");
               exit();
        }
        
    }
    
    // DELETE KOMENTARJA
       if(isset($_POST['commentDeleteSubmit'])) { // Če kliknemo na gumb update zažene kodo
        $id = $_POST['id'];
            
        $sql3 = "DELETE FROM komentarji WHERE id = ?;";
        $stmt3 = mysqli_stmt_init($conn);
            
        if (!mysqli_stmt_prepare($stmt3, $sql3)) {
                       header("Location: ../gainMuscles.php?error=sqlerror"); // Če stavek ne dela
                       exit();
               }
               else {                       // i = integer
               mysqli_stmt_bind_param($stmt3, "i", $id); 
               mysqli_stmt_execute($stmt3); // Executa stavek v DB
                       
               header("Location: ../gainMuscles.php?commentdelete=success");
               exit();
           }
    }
    
    
    
    
?>