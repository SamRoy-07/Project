
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

$email = $_POST['email'];
$password = $_POST['password'];



$con = mysqli_connect('localhost', 'root', '') or die('not connected');
mysqli_select_db($con, 'project') or die('not selected');



$query = "select * from sample where Email='$email' and Password='$password'";
$result = mysqli_query($con, $query);
$count = mysqli_num_rows($result);



if ($count > 0) {
  $_SESSION['email']=$email;
  


    echo"Login was successful";

     echo '<div class="motto">
     <div class="mottosize">
     Unite Strong, Unleash Brilliance, Triumph
     </div>
     </div>';

    echo "<script>
     document.addEventListener('DOMContentLoaded', function() {
       var secondsBeforeRedirect = 2;
       function redirect() {
         window.location.href = 'first.php';
       }
       setTimeout(redirect, secondsBeforeRedirect * 1000);
     });
   </script>";
} else {
    
    echo '<div class="motto">
        <div class="mottosize">
        Login was not successful
        </div>
        </div>';
    echo "<script>
     document.addEventListener('DOMContentLoaded', function() {
       var secondsBeforeRedirect = 5;
       function redirect() {
         window.location.href = 'login.html';
       }
       setTimeout(redirect, secondsBeforeRedirect * 1000);
     });
   </script>";
}
mysqli_close($con);
}
?>