<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" type="text/css" href="../CSS/NavBar.css">
    <link rel="shortcut icon" style = "border-radius: 50%;" type="image/png" href="../favicon.ico">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
        <body>  
                <!-- NAVBAR ZA USERJE LOGOUT (VSE STRANI RAZEN INDEX)-->
                <?php  if(isset($_SESSION['userId']) AND $_SESSION['userAdminId'] != true) {?>               
                    <nav class="navbar navbar-expand-lg navbar-dark background ">
                            <img class = "logo" src="../SLIKE/logo1.png" class="logo" alt="logo">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav ml-auto" >
                                <li class="nav-item active" id="items">
                                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item" id="items">
                                    <a class="nav-link" href="programs.php">Plans</a>
                                </li>
                                <li class="nav-item" id="items">
                                    <a class="nav-link" href="../posts.php">Posts</a>
                                </li>
                                <li class="nav-item" id="items">
                                    <a class="nav-link" href="results.php">Results</a>
                                </li>
                                <li class="nav-item" id="items">
                                    <a class="nav-link" href="about.php">About</a>
                                </li>
                                <li class="nav-item" id="items">
                                    <a class="nav-link" href="../PHP/logout.php">Logout</a>
                                </li>
                                <li class="nav-item" id="contactButton">
                                    <a class="nav-link" href="contact.php">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                <?php  }?>
                <!-- NAVBAR ZA VSE USERJE LOGIN (VSE STRANI RAZEN INDEX)-->
                <?php  if(!isset($_SESSION['userId'])) {?>
                    <nav class="navbar navbar-expand-lg navbar-dark background ">
                            <img class = "logo" src="../SLIKE/logo1.png" class="logo" alt="logo">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav ml-auto" >
                                <li class="nav-item active" id="items">
                                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item" id="items">
                                    <a class="nav-link" href="programs.php">Plans</a>
                                </li>
                                <li class="nav-item" id="items">
                                    <a class="nav-link" href="results.php">Results</a>
                                </li>
                                <li class="nav-item" id="items">
                                    <a class="nav-link" href="about.php">About</a>
                                </li>
                                <li class="nav-item" id="items">
                                    <a class="nav-link" href="reg_log.php">Login</a>
                                </li>
                                <li class="nav-item" id="contactButton">
                                    <a class="nav-link" href="contact.php">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                <?php  }  ?>
                
                <!-- NAVBAR ZA ADMINA LOGOUT (VSE STRANI RAZEN INDEX)-->
                <?php  if($_SESSION['userAdminId'] == true) {?>
                    <nav class="navbar navbar-expand-lg navbar-dark background ">
                            <img class = "logo" src="../SLIKE/logo1.png" class="logo" alt="logo">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav ml-auto" >
                                <li class="nav-item active" id="items">
                                    <a class="nav-link" href="../index.php">Home <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item" id="items">
                                    <a class="nav-link" href="../programs.php">Plans</a>
                                </li>
                                <li class="nav-item" id="items">
                                    <a class="nav-link" href="../posts.php">Posts</a>
                                </li>
                                <li class="nav-item" id="items">
                                    <a class="nav-link" href="../results.php">Results</a>
                                </li>
                                <li class="nav-item" id="items">
                                    <a class="nav-link" href="../about.php">About</a>
                                </li>
                                <li class="nav-item" id="items">
                                    <a class="nav-link" href="../PHP/logout.php">Logout</a>
                                </li>
                                <li class="nav-item" id="contactButton">
                                    <a class="nav-link" href="../Admin/managePosts.php">Dashboard</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                <?php  }  ?>
        </body>
</html>