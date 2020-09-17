<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="../CSS/indexNavBar.css">
    <link rel="stylesheet" type="text/css" href="../CSS/HomePicture.css">
    <link rel="shortcut icon" style = "border-radius: 50%;" type="image/png" href="../favicon.ico">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
        <body>  
                <!-- NAVBAR ZA USERJA LOGOUT (ZA STRAN INDEX)-->
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
                                    <a class="nav-link" href="PHP/logout.php">Logout</a>
                                </li>
                                <li class="nav-item" id="contactButton">
                                    <a class="nav-link" href="contact.php">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                <?php  }?>
                
                <!-- NAVBAR ZA USERJA LOGIN (ZA STRAN INDEX)-->
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
                
                <!-- NAVBAR ZA ADMINA LOGOUT (ZA STRAN INDEX)-->
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
        
                <div class="row" id="row-height">
                    <div class="bg">
                        <div class="col-md-12">
                            <span class="heading1">Personal Training</span> <br>
                            <span class="heading2">Most advanced personal training techniques</span>
                        </div>
                    </div>  
                </div>   
                
                <div class="row" id="row2">
                    <div class="icon"></div>
                </div>   
                <div class="row" id="row3">
                    <div class="col"><img class="img1" src="//cdn.shopify.com/s/files/1/2512/7588/t/6/assets/icon-benefit-1.svg?v=13897191085982472336"></img>
                        <h6 class="heading">PEROSNALIZED WORKOUT PLAN</h6>
                        <span class="description">We will perosnalize training just for you</span>
                    </div> 
                    <div class="col"><img class="img1" src="//cdn.shopify.com/s/files/1/2512/7588/t/6/assets/icon-benefit-2.svg?v=1434496433970445000"></img>
                        <h6 class="heading">FAST PROGRESS</h6>
                        <span class="description">We guarantee fast results</span>
                    </div> 
                    <div class="col"><img class="img1" src="//cdn.shopify.com/s/files/1/2512/7588/t/6/assets/icon-benefit-3.svg?v=7963598674574592782"></img>
                        <h6 class="heading">PERSONALIZED DIET</h6>
                        <span class="description">We will perosnalize your diet</span>
                    </div>   
                </div>    
                <div class="footer">
                    <span>Ⓒ Copyright 2020 Tim Povodnik</span>
                </div>
        </body>
</html>
