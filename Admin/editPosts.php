<?php
    ini_set('display_errors', 1);
    include "../header.php";
    if($_SESSION['userAdminId'] == true) {
        include "../PHP/objaveEdit.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Posts</title>
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
        
           <?php 
                if (isset($_POST['edit'])) {
          
                    $eID = $_POST['eID']; // dobi ID iz URL, katerega smo prej polsali iz edit.php v ta file
    
                    $sql = ("SELECT * FROM objave WHERE id = '$eID';");
                    $result = mysqli_query($conn, $sql); // IZVEDE v BAZ
                    
                }
            ?>
            
         <div class = "col-md-9"> 
          <?php  while ($row = mysqli_fetch_assoc($result)) { ?>
               <form method="POST" action="../PHP/objaveEdit.php">
                <div>
                    <label>Title</label> <br>
                    <input type="text" name="title" class="text-input" value="<?php echo $row['naslov'] ?>" required>
                    <input type="hidden" name="objavaID" value="<?php echo $row['id'] ?>"> 
                </div>
                <div>
                    <label>Content</label>
                    <textarea name="content" id="editor"><?php echo $row['opis']?></textarea>
                    <button type="submit" class="buttonAdd" name="Update">Update Post</button>
                </div>
             </form>
             <?php } ?>
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