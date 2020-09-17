<?php
    include "header.php";
    
    if(isset($_SESSION['userId'])) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Lose Fat</title>
    <link rel="stylesheet" type="text/css" href="../CSS/orderForm.css">
</head>
<body>
    <?php
    echo "<div class='row align-items-center'>
        <div class='col-md-12'>
        <label class='heading'>Type your information here</label>
        <p class='heading2'>Based on this information we will personalize your plan</p>
            <form method='POST' action='PHP/order.php'>
                <div class='input-container'>	
                    <input type='hidden' name='pid' value='1'>
                </div>
                <div class='input-container'>
                    <input type='hidden' name='uid' value='".$_SESSION['userId']."'>
                </div>
                <div class='input-container'>
                    <input type='text' class='input' name='n' required><label>Name</label><br>
                </div>
                <div class='input-container'>
                    <input type='text' class='input' name='s' required><label>Surname</label><br>
                </div>
                <div class='input-container'>
                    <input type='number' class='input' name='w' required><label>Weight</label><br>
                </div>
                <div class='input-container'>
                    <input type='number' class='input' name='h' required><label>Height</label><br>
                </div>
                <div class='input-container'>
                    
                    <input type='date' class='input' name='bd' required><label class='date'>Birth Date</label><br>
                </div>
                <button class='submit-btn' type='submit' name='submit'>Send Information</button>
            </form>
        </div>
    </div>";
    ?>
</body>
</html>
<?php }
    else
    { ?>
    <!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Order Lose Fat</title>
            <link rel="stylesheet" type="text/css" href="../CSS/orderForm.css">
             <script src='https://kit.fontawesome.com/a076d05399.js'></script>
        </head>
        <body>
            <?php
            echo "<div class='row align-items-center'>
                <div class='col-md-12'>
                <label class='heading'>Type your information here</label>
                <p class='heading2'>Based on this information we will personalize your plan</p>
               <p class='heading2'style='color:red;'><i class='fas fa-exclamation-triangle' style='font-size:18px;color:#f7b80a'></i>&nbspYou must be logged in to submit this form&nbsp<i class='fas fa-exclamation-triangle' style='font-size:18px;color:#f7b80a'></i></p>
               
                <div class='input-container'>	
                    <input type='hidden' name='pid' value='1'>
                </div>
                <div class='input-container'>
                    <input type='hidden' name='uid' value='".$_SESSION['userId']."'>
                </div>
                <div class='input-container'>
                    <input type='text' class='input' name='n' disabled><label>Name</label><br>
                </div>
                <div class='input-container'>
                    <input type='text' class='input' name='s' disabled><label>Surname</label><br>
                </div>
                <div class='input-container'>
                    <input type='number' class='input' name='w' disabled><label>Weight</label><br>
                </div>
                <div class='input-container'>
                    <input type='number' class='input' name='h' disabled><label>Height</label><br>
                </div>
                <div class='input-container'>
                    
                    <input type='date' class='input' name='bd' disabled><label class='date'>Birth Date</label><br>
                </div>
                 <form action='reg_log.php'>
                <button class='submit-btn'>Login</button>
                </form>
                </div>
            </div>";
            ?>
        </body>
    </html>
<?php } ?>