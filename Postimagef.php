<?php
session_start();
if(isset($_SESSION['email']))
{


?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Upload Image File</title>
  </head>
  <body>
    <form class="" action="Postimagel.php" method="post" autocomplete="off" enctype="multipart/form-data">
      <label for="name">Description : </label>
      <input type="text" name="Description" id = "name" required value=""> <br>

      <label for="image">Image : </label>
      <input type="file" name="image" id = "image" accept=".jpg, .jpeg, .png" value=""> <br> <br>


      <button type = "submit" name = "submit">Submit</button>
    </form>
    <br>
    
  </body>
  </html>
  <?php
}else{
  header("location:login.html");
}

  