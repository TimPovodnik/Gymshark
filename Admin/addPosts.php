<?php
    include "../header.php";
    
    if($_SESSION['userAdminId'] == true) {
        include "../PHP/objaveAdd.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Posts</title>
    <link rel="stylesheet" type="text/css" href="../CSS/addPosts.css">

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
              <form method="POST" action="../PHP/objaveAdd.php">
                <div>
                    <label>Title</label> <br>
                    <input type="text" name="title" class="text-input" required>
                </div>
                <div>
                    <label>Content</label>
                    <textarea name="content" id="editor"></textarea> 
                    <button type="submit" class="buttonAdd" name="Add-submit">Add Post</button>
                </div>
             </form>
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

