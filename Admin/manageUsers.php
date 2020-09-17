<?php
    include "../header.php";
    
    if($_SESSION['userAdminId'] == true) {
    include "../PHP/usersManage.php"; // Za izpis podatkov v tabelo
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Users</title>
    <link rel="stylesheet" type="text/css" href="../CSS/addPosts.css">
    <link rel="stylesheet" type="text/css" href="../CSS/managePosts.css">

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
           <div class = "col-md-9"> 
                <table class="table table-striped table-dark" style='margin-top: 35px;'>
                    <thead style= "color: white !important;">
                       <th scope="col">ID</th>
                       <th scope="col">Name</th>
                       <th scope="col">Username</th>
                       <th scope="col">E-mail</th>
                       <th scope="col">Admin</th>
                       <th scope="col" colspan='2'>Action</th>
                   </thead>
                   <tbody style= "color: white !important;">
                        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                            <tr>
                                <td scope="row"><?php echo $row['id'] ?></td>
                                <td><?php echo $row['ime'] ?></td>
                                <td><?php echo $row['u_ime'] ?></td>
                                <td><?php echo $row['email'] ?></td>
                                <td><?php echo $row['admin'] ?></td>
                                <form method='POST' action='editUsers.php'>
                                    <input type='hidden' name='uID' value='<?php echo $row['id']; ?>'>
                                    <td><button class='edit' style='color: rgb(14, 243, 45) !important;' type='submit' name='edit'>edit</a></td>
                                </form>
                                <form method='POST' action='../PHP/usersDelete.php'>
                                    <input type='hidden' name='uID' value='<?php echo $row['id']; ?>'>
                                    <td><button class='delete' style='color: red !important;' type='submit' name='delete'>delete</button></td>
                                </form>
                            </tr>
                        <?php }  ?>
                   </tbody>
               </table>              
            </div>
           </div>
        </div>       
    </div>    
</body>

<script>
    ClassicEditor
    .create( document.querySelector( '#editor' ), {
        cloudServices: {
            tokenUrl: 'https://71377.cke-cs.com/token/dev/4Tbj3N0SezdMZUuDu950LbDS9zIzETfUaKf1L5PzAH23R0qUbX4WwFxlGuSp',
            uploadUrl: 'https://71377.cke-cs.com/easyimage/upload/'
        }
    } );
</script>
</html>
<? } 
    else
   {
      header('Location: ../index.php'); 
      exit();
   } ?>