<html>
<?php
$email=$_POST["email"];
$password=$_POST["password"];
$con=mysqli_connect('localhost','root','')or die('not connected');
mysqli_select_db($con,'project')or die('not selected');
$sql="insert into sample values('$email','$password')";
mysqli_query($con,$sql);

?>
<head>
<script>
   
    document.addEventListener('DOMContentLoaded', function() {
     
      var secondsBeforeRedirect = 1; 
      
      function redirect() {
        window.location.href = 'login.html';
      }

      
      setTimeout(redirect, secondsBeforeRedirect * 1000);
    });
  </script>
 </head>


</html>