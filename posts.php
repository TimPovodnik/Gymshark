<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts</title>
  
</head>
<?php
    include "header.php";
    include "PHP/objave.php";
?>
<body>  
    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
        <div class = "row">
            <div class = "col-md-12"> <?php echo $row['opis'] ?></div>
        </div>
    <?php }  ?>
</body>
<style>
    @import url('https://fonts.googleapis.com/css?family=Montserrat:500');

*{
    box-sizing: border-box;
    margin: 0;
    padding: 0;
    color: black !important; /* Barva texta na strani posts.php */
}

.row{
    color: white;
    margin-bottom: 30px;
    margin-top: 10px;

    /* da ne raztegne cele strani kot v default bootstrapu.*/
    margin-left: 0 !important; 
    margin-right: 0 !important;
    padding: 0% 30% 0% 30%;
}

/* Za Telefon */
@media only screen and (max-width: 1000px) {
  .row{
    padding: 0% 10% 0% 10%;
  }
}
@media only screen and (max-width: 600px) {
  .row{
    padding: 0% 5% 0% 5%;
  }
}


.col-md-12{
    border: 1px solid rgb(33, 129, 173);
    padding: 30px;
    background-color: white;

}
img{
    width: 100%;
    max-width: 400px;
    height: auto;
}
</style>
</html>