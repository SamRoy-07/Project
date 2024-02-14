<html>
    <head>
    <script>
    document.addEventListener('DOMContentLoaded', function () {
      var secondsBeforeRedirect = 3; // Adjust the time before redirection as needed

      function redirect() {
        window.location.href = 'profileupdate.php'; // Redirect to login page after registration
      }

      setTimeout(redirect, secondsBeforeRedirect * 1000); // Set timeout for redirection
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
mysqli_close($con);
echo"profile has been updated successfully";

    
}else{
      header("location:login.html");
}
?>