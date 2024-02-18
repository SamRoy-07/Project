<!DOCTYPE html>
<html>

<head>
  <style>
    body{
      background-color: black;
    }
    .container{
      display: flex;
      flex-direction: column;
      position: absolute;
      right: 40%;
      top: 50%;
      background-color: whitesmoke;
      border-radius: 10px;
      width: 23%;
      box-shadow: 8px 10px lightblue;


    }

    .register {
      display: flex;
      align-items: center;
      justify-content: center;
      height: 10vh;
      margin: 0;
      font-family: 'Roboto', sans-serif;
      text-align: center;
      color: black;
      top: 50%;
      right: 50%;

    }

    .registersize {
      font-size: 24px;
      font-weight: bold;
      line-height: 1.5;

    }
    .container2{
      display: flex;
      flex-direction: column;
      position: absolute;
      right: 40%;
      top: 40%;
      justify-content: center;
      align-items: center;
      background-color: whitesmoke;
      border-radius: 10px;
      width: 23%;
      height: 25%;
      box-shadow: 8px 10px lightblue;


    }
    .motto {
      display: flex;
      align-items: center;
      justify-content: center;
      height: 10vh;
      margin: 0;
      font-family: 'Roboto', sans-serif;
      text-align: center;
      color: black;
      top: 50%;
      right: 50%;

    }

    .mottosize {
      font-size: 24px;
      font-weight: bold;
      line-height: 1.5;

    }
    

    </style>
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      var secondsBeforeRedirect = 3; 

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
  
  // Check if the email already exists in the database
  $check = "SELECT * FROM `sample` WHERE Email='$email'";
  $result = mysqli_query($con, $check);
  if (mysqli_num_rows($result) > 0) {
    ?><script>document.addEventListener('DOMContentLoaded', function () {
      var secondsBeforeRedirect = 3; 

      function redirect() {
        window.location.href = 'signup.html'; 
      }

      setTimeout(redirect, secondsBeforeRedirect * 1000); 
    });
      </script><?php
    echo"<div class='container'>";
    echo '<div class="register">
    <div class="registersize">
    The Email is already taken
    </div>
    </div>
    </div>';

      
  } else {
      // Insert new user data into the database

      $rand=(rand(10,1000));
      $sql = "INSERT INTO `sample`(`Email`, `Password`,`uniqueid`) VALUES ('$email', '$password','$rand')";
      mysqli_query($con, $sql) or die('Could not insert data into database');
      $userid = mysqli_insert_id($con);

      $query = "SELECT userid FROM sample WHERE email='$email'";
      $result = mysqli_query($con, $query);
      $row = mysqli_fetch_assoc($result);
      $userid = $row['userid'];

      $query = "SELECT uniqueid FROM sample WHERE email='$email'";
      $res = mysqli_query($con, $query);
      $row = mysqli_fetch_assoc($res);
      $uniqueid = $row['uniqueid'];

      
     
  
  
  
  $sql2="INSERT INTO `profile`( `userid`, `uniqueid`) VALUES ('$userid','$uniqueid');";
  mysqli_query($con, $sql2) or die('Could not insert data into database');

  $sql3="INSERT INTO `report`(`userid`) VALUES ('$userid')";
  mysqli_query($con, $sql3) or die('Could not insert data into database');

 echo"<div class='container2'>";
  echo '<div class="motto">
  <div class="mottosize">
  You have just taken the first step towards new adventures with us. Ready to explore?
  </div>
  </div>
  </div>';
}
  mysqli_close($con);

  ?>

  
  
</body>

</html>