<!DOCTYPE html>
<html>

<head>
  <title>Registration Processing</title>
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      var secondsBeforeRedirect = 2; 

      function redirect() {
        window.location.href = 'login.html'; 
      }

      setTimeout(redirect, secondsBeforeRedirect * 1000); 
    });
  </script>
</head>

<body>
  <?php
  
  $email = $_POST["email"];
  $password = $_POST["password"];

 
  $con = mysqli_connect('localhost', 'root', '') or die('Could not connect to MySQL server');
  mysqli_select_db($con, 'project') or die('Could not select database');

  
  $sql = "INSERT INTO `sample`(`Email`, `Password`) VALUES ('$email', '$password')";
  mysqli_query($con, $sql) or die('Could not insert data into database');
  $userid = mysqli_insert_id($con);

  
  $sql2="INSERT INTO `profile`(`userid`) VALUES ('$userid')";
  mysqli_query($con, $sql2) or die('Could not insert data into database');

  mysqli_close($con);

  ?>

  
  <p>Redirecting you to the login page...</p>
</body>

</html>