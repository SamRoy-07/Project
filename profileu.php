<html>
    <head>
      <style>
      .profile{
        display: flex;
        position:absolute;
        background-color: #e64762;
        justify-content: center;
        text-align: center;
        align-items: center;
        width: 25%;
        height: 10%;
        top: 40%;
        right: 40%;
        border-radius: 20px;
        box-shadow: 4px 5px 2px;

    }
    body{
      background-color: lightblue;
    }
        </style>
    <script>
    document.addEventListener('DOMContentLoaded', function () {
      var secondsBeforeRedirect = 3; 

      function redirect() {
        window.location.href = 'profile.php'; 
      }

      setTimeout(redirect, secondsBeforeRedirect * 1000); 
    });
  </script>
</head>
    
        
        
<?php
session_start();

if (isset($_SESSION["email"])) {
    
    $email = $_SESSION["email"];

    // Retrieve userid from login table based on email
    $con = mysqli_connect('localhost', 'root', '') or die('not connected');
    mysqli_select_db($con, 'project') or die('not selected');
    $query = "SELECT userid FROM sample WHERE email='$email'";
    $result = mysqli_query($con, $query);
    $row = mysqli_fetch_assoc($result);
    $userid = $row['userid'];

    // Get data from the form
    $desc = $_POST['desc'];
    $bio = $_POST['bio'];
    $user=$_POST['username'];
    $quotes=$_POST['quotes'];


$sql="UPDATE `profile` SET `Description`='$desc',`Quotes`='$quotes',`Biodata`='$bio',`Username`='$user' WHERE userid=$userid";
$res=mysqli_query($con,$sql);
echo"<div class='profile'>";
echo"Profile has been updated";
echo"</div>";
mysqli_close($con);


    
}else{
      header("location:login.html");
}
?>