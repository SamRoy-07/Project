<html>

<head>
    <style>
    .password{
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
</head>

<body>
<?php

$con = mysqli_connect('localhost', 'root', '') or die('not connected');
mysqli_select_db($con, 'project') or die('not selected');
$email = $_POST['email'];
$npassword = $_POST['npassword'];
$cpassword = $_POST['cpassword'];
$sql2="select * from sample where Email='$email'";
$result=mysqli_query($con,$sql2);
$count=mysqli_num_rows($result);
if($count >0){




if ($npassword == $cpassword) {

    $sql = "UPDATE `sample` SET `Password`='$npassword' WHERE email='$email'";
    mysqli_query($con, $sql) or die('Query not executed');
   
    echo "<script>
document.addEventListener('DOMContentLoaded', function () {
  var secondsBeforeRedirect = 3; 

  function redirect() {
    window.location.href = 'login.html'; 
  }

  setTimeout(redirect, secondsBeforeRedirect * 1000); 
});
</script>";
echo"<div class='password'>";
    echo"Your new password has been updated";
    echo"</div>";

} elseif ($npassword != $cpassword) {
    echo "<script>
document.addEventListener('DOMContentLoaded', function () {
  var secondsBeforeRedirect = 3; 

  function redirect() {
    window.location.href = 'forgot.html'; 
  }

  setTimeout(redirect, secondsBeforeRedirect * 1000); 
});
</script>";
  echo"<div class='password'>";
    echo "Check your Password again";
    echo"</div>";
}
}else{
  echo"<div class='password'>";
  echo"Entered EMAIL is wrong";
  echo"<div>";
}
mysqli_close($con);
?>
</body>
</html>