<?php
    date_default_timezone_set('Europe/Ljubljana');
    include 'PHP/baza.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programs</title>
    <link rel="stylesheet" type="text/css" href="../CSS/loseFat.css"> 
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">  
</head>
    <body>   
    <?php
    include "header.php";
    ?>
    <?php
        $id = $_POST['id'];
        $uid = $_POST['uid'];
        $date = $_POST['date'];
        $message = $_POST['message'];
        $grade = $_POST['grade'];
        
        echo "<div class='row'>
            <div class='col-md-12' id='comment-box'>
                <form method='POST' action='PHP/commentsGM.php'>
                    <input type='hidden' name='id' value='".$id."'>
                    <input type='hidden' name='uid' value='".$uid."'>
                    <input type='hidden' name='date' value='".$date."'>
                    <div>
                        <label class='title-dropdown'>Grade</label>
                        <select name='grades' class='dropdown'>
                            <option>$grade</option>
                            <option value='0'>Unrated</option>
                            <option value='1'>1</option>
                            <option value='2'>2</option>
                            <option value='3'>3</option>
                            <option value='4'>4</option>
                            <option value='5'>5</option>
                        </select>
                    </div>
                    <textarea name='message'>$message</textarea> <br>
                    <button type='submit' name='commentEditSubmit'>Update</button>
                </form>
            </div>
        </div>";
    ?>
    </body>
</html>