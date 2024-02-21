<?php
session_start();
if(isset($_SESSION['email']))
{


?>
<?php
$con = mysqli_connect('localhost', 'root', '') or die('not connected');
mysqli_select_db($con, 'project') or die('not selected');
if(isset($_POST["submit"])){
  $Description = $_POST["Description"];
  $query = "SELECT userid FROM sample WHERE email='$email'";
    $result = mysqli_query($con, $query);
    $row = mysqli_fetch_assoc($result);
    $userid = $row['userid'];
  if($_FILES["image"]["error"] == 4){
    echo
    "<script> alert('Image Does Not Exist'); </script>"
    ;
  }
  else{
    $fileName = $_FILES["image"]["name"];
    $fileSize = $_FILES["image"]["size"];
    $tmpName = $_FILES["image"]["tmp_name"];

    $validImageExtension = ['jpg', 'jpeg', 'png'];
    $imageExtension = explode('.', $fileName);
    $imageExtension = strtolower(end($imageExtension));
    if ( !in_array($imageExtension, $validImageExtension) ){
      echo
      "
      <script>
        alert('Invalid Image Extension');
      </script>
      ";
    }
    else if($fileSize > 1000000){
      echo
      "
      <script>
        alert('Image Size Is Too Large');
      </script>
      ";
    }
    else{
      $newImageName = uniqid();
      $newImageName .= '.' . $imageExtension;

      move_uploaded_file($tmpName, 'img/' . $newImageName);
      $query = "INSERT INTO `post`(`userid`, `Description`, `image`) VALUES ('$userid','$Description','$newImageName')";
      mysqli_query($con, $query);
      echo
      "
      <script>
        alert('Successfully Added');
        document.location.href = 'first.php';
      </script>
      ";
    }
  }
}
?>
<?php
}else{
    header("location:login.html");
}