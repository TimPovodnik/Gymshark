<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plans</title>
    <link rel="stylesheet" type="text/css" href="../CSS/programs.css"> 
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">  
</head>
<body>   
    <?php
        include "header.php";
    ?>
<div class="heading">
    <p>You can choose between <span>two</span> plans </p>
    <p class="opis">which will later be personalized for you</p>
</div>
    
<div class="row">
    <div class="col">
        <div class="img1"></div>
        <div class="content">
            <form action="loseFat.php">
                <button class="button">Lose Fat</button>
            </form>
            <p>The best plan on the market for losing fat. For low price you will get more than 50+ personalized workouts targeting different bodyparts and good personalized diet to lose fat. </p>              
        </div>  
    </div>

    <div class="col">
        <div class="img2"></div>
            <div class="content">
            <form action="gainMuscles.php">
                <button class="button" >Gain Muscles</button>
            </form>
            <p>This plan will help you gain muscle mass. With over 50+ different personalized workouts and personalized diet plans which will help you gain muscle mass.</p>
        </div>
    </div>
</div>
   
</body>
</html>