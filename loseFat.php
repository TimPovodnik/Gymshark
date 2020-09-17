<?php
    date_default_timezone_set('Europe/Ljubljana');
    include 'PHP/commentsLF.php';
    include 'PHP/baza.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <title>Lose Fat</title>
    <link rel="stylesheet" type="text/css" href="../CSS/loseFat.css"> 
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">  
</head>
    <body>   
    <?php
    include "header.php";
    ?>
        <div class="container">
            <div class="box align-text-bottom">
                <img src="../SLIKE/exclusive-recipes.jpg" alt="Diet Food">
            </div>

             <div class="box1">
                <ul>
                    <li><span>Incredible recipes</span></li>
                    <li>This is not a low calorie, restrictive diet. You’ll be choosing the food that you eat from a delicious menu 
                        and you won’t be going hungry.</li>
                    <li> <img class="checkMark" src="../SLIKE/bluecheckmark.png" alt= "checkmark"> 180+ incredible delicious recipes </li>
                    <li> <img class="checkMark" src="../SLIKE/bluecheckmark.png" alt= "checkmark"> Exclusive to the 90 Day Plan</li>
                    <li> <img class="checkMark" src="../SLIKE/bluecheckmark.png" alt= "checkmark"> We tailor the meal portions for you</li>
                    <li> <img class="checkMark" src="../SLIKE/bluecheckmark.png" alt= "checkmark"> Includes delicious diet deserts</li>
                </ul>
            </div>
        </div>

        <div class="container">
            <div class="box2 align-text-bottom">
                <img src="../SLIKE/trainingplan.jpg" alt="Diet Food">
            </div>

             <div class="box3">
                <ul>
                    <li><span>New training plan</span></li>
                    <li>Each month you’ll get a new training plan that you can follow at home or the gym. You’ll never need to train 
                        longer than 35 minutes.</li>
                    <li> <img class="checkMark" src="../SLIKE/bluecheckmark.png" alt= "checkmark"> 3 different cycles of training</li>
                    <li> <img class="checkMark" src="../SLIKE/bluecheckmark.png" alt= "checkmark"> 15 new and exclusive workout videos</li>
                    <li> <img class="checkMark" src="../SLIKE/bluecheckmark.png" alt= "checkmark"> Train between 25-35 minutes</li>
                    <li> <img class="checkMark" src="../SLIKE/bluecheckmark.png" alt= "checkmark"> Work out when and where it suits you</li>
                </ul>
            </div>
        </div>

        <div class="container">
            <div class="box4 align-text-bottom">
                <img src="../SLIKE/onlinesupport.jpg" alt="Diet Food">
            </div>

             <div class="box5">
                <ul>
                    <li><span>Online support</span></li>
                    <li>Get unlimited access to our online Support Heroes through Live Chat, plus access to our official Facebook community group.</li>
                    <li> <img class="checkMark" src="../SLIKE/bluecheckmark.png" alt= "checkmark"> Get support and motivation</li>
                    <li> <img class="checkMark" src="../SLIKE/bluecheckmark.png" alt= "checkmark"> Connect with others on the plan</li>
                    <li> <img class="checkMark" src="../SLIKE/bluecheckmark.png" alt= "checkmark"> Share tips and advice</li>
                    <li> <img class="checkMark" src="../SLIKE/bluecheckmark.png" alt= "checkmark"> Quick and easy access</li>
                </ul>
            </div>
        </div>
        <div class="container">
            <button onclick="location.href = 'orderFormLF.php';">Get Started</button>
        </div>
        
        <div class="container">
            <label style='color:dodgerblue; letter-spacing: 5px; margin-bottom: 0px !important;'>COMMENT &nbsp SECTION</label>
            <hr style=" border: 1px solid dodgerblue;">
        </div>
        
        <?php
        
        $uid = $_SESSION['userId'];
        
        $sql3 = "SELECT * FROM Ocene WHERE uporabnik_id ='$uid' AND program_id = 1;"; // SELECTA VSE IZ TABELE OCENE KJER JE ID ENAK IDJU KI NAPIŠE KOMENTAR
        $result3 = mysqli_query($conn, $sql3); // IZVEDE v BAZI
        $row3 = mysqli_fetch_assoc($result3);
        
        
        if(isset($_SESSION['userId'])) { // Če je user logginan mu da možnost za komentiranje
            echo "<div class='row'>
              <div class='col-md-12' id='comment-box'>
                <form method='POST' action='PHP/commentsLF.php'>
                    <input type='hidden' name='pid' value='1'>
                    <input type='hidden' name='uid' value='".$_SESSION['userId']."'>
                    <input type='hidden' name='date' value='".date('Y-m-d H:i:d')."'> ";
           if($uid == $row3['uporabnik_id'] ) {
                echo"  <label style='color:white;'>You already rated this plan.</label> ";
              }
              else
              {
           echo"    <div>
                            <label class='title-dropdown'>Grade</label>
                            <select name='grades' class='dropdown'>
                                    <option value='0'>Unrated</option>
                                    <option value='1'>1</option>
                                    <option value='2'>2</option>
                                    <option value='3'>3</option>
                                    <option value='4'>4</option>
                                    <option value='5'>5</option>
                            </select>
                    </div> ";
              }
           echo"    <textarea name='message' required></textarea> <br>
                    <button class='comment-btn' type='submit' name='commentSubmit'>Comment</button>
                </form>
              </div>
            </div>"; 
        }
        else // Drugače pa izpiše da se mora za komentiranje prijaviti
        {
            echo "<div class='row'>
                <p class='comment-msg'><i class='fas fa-exclamation-triangle' style='font-size:18px;color:#f7b80a'></i>&nbspYou must be logged in to comment</p>
            </div>";
        }
            
            getComments($conn); // Funkcija, ki izpiše komentarje
    
        ?>
    </body>
</html>