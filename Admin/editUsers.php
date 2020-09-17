<?php
    ini_set('display_errors', 1);
    include "../header.php";
    
    if($_SESSION['userAdminId'] == true) {
        include "../PHP/usersEdit.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Users</title>
    <link rel="stylesheet" type="text/css" href="../CSS/addUsers.css">

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">   
    <script src="https://cdn.ckeditor.com/ckeditor5/19.0.0/classic/ckeditor.js"></script>
</head>
<body>
     <div class = "row">
        <div class = "col-md-3">
            <p class="margin-pSide">
                <label>-------- USERS --------</label> <br>
                <button onclick="window.location.href='manageUsers.php'" class="buttonSide">Manage Users</button> <br>
                <label>-------- POSTS --------</label> <br>
                <button onclick="window.location.href='addPosts.php'" class="buttonSide" >Add Posts</button> <br>
                <button onclick="window.location.href='managePosts.php'" class="buttonSide">Manage Posts</button> <br>
                <label>-------- ORDERS --------</label> <br>
                <button onclick="window.location.href='manageOrders.php'" class="buttonSide">Manage Orders</button>
            </p>               
        </div>
        
           <?php 
                if (isset($_POST['edit'])) {
          
                    $uID = $_POST['uID']; 
    
                    $sql = ("SELECT * FROM uporabniki WHERE id = '$uID';");
                    $result = mysqli_query($conn, $sql); // IZVEDE v BAZI
                }
            ?>
            
         <div class = "col-md-9"> 
          <?php  while ($row = mysqli_fetch_assoc($result)) { ?>
               <form method="POST" action="../PHP/usersEdit.php">
                <div>
                    <label>Ime</label> <br>
                    <input type="text" name="ime" class="text-input" value="<?php echo $row['ime'] ?>" required>
                    <input type="hidden" name="uporabnikID" value="<?php echo $row['id'] ?>"> 
                </div>
                <div>
                    <label>Uporabniško Ime</label> <br>
                    <input type="text" name="u_ime" class="text-input" value="<?php echo $row['u_ime']?>" required></input>
                </div>
                <div>
                    <label>E-mail</label> <br>
                    <input type="text" name="email" class="text-input" value="<?php echo $row['email'] ?>" required>
                </div>
                <div>
                    <label>Admin</label> <br>
                    <label class='no'>NO</label> <input type="range" min="0" max="1" name="admin" value="<?php echo $row['admin'] ?>" required> <label class='yes'>YES</label> <br> 
                    <button type="submit" class="buttonAdd" name="Update">Update User</button>
                </div>
             </form>
          <?php } ?>
        </div>       
    </div>    
</body>
</html>
<? } 
    else
   {
      header('Location: ../index.php'); 
      exit();
   } ?>