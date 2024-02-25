<html>
    <head>
      <style>
       .profile{
            display: flex;
            flex-direction: column;
            position: absolute;
            justify-content: center;
            align-items: center;
            margin-top: 23%;
            height: 10%;
            width: 18%;
            margin-left: 40%;
            border-radius: 10px;
            color: white;
            background-color: black;
            box-shadow: 10px 10px #edd3d3;

        }
        body{
            background-color: #f7f7f7;
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

    // Initialize an array to store the fields to be updated
    $fieldsToUpdate = array();

    // Get data from the form and construct the SQL query
    if (!empty($_POST['desc'])) {
        $fieldsToUpdate[] = "Description='" . mysqli_real_escape_string($con, $_POST['desc']) . "'";
    }
    if (!empty($_POST['bio'])) {
        $fieldsToUpdate[] = "Biodata='" . mysqli_real_escape_string($con, $_POST['bio']) . "'";
    }
    if (!empty($_POST['username'])) {
        $fieldsToUpdate[] = "Username='" . mysqli_real_escape_string($con, $_POST['username']) . "'";
    }
    if (!empty($_POST['quotes'])) {
        $fieldsToUpdate[] = "Quotes='" . mysqli_real_escape_string($con, $_POST['quotes']) . "'";
    }

    
    if (!empty($fieldsToUpdate)) {
        $updateFields = implode(', ', $fieldsToUpdate);
        $sql = "UPDATE `profile` SET $updateFields WHERE userid=$userid";
        $res = mysqli_query($con, $sql);
        echo "<div class='profile'>";
        echo "Profile has been updated";
        echo "</div>";
    } else {
        echo "<div class='profile'>";
        echo "No fields to update";
        echo "</div>";
    }

    mysqli_close($con);
} else {
    header("location:login.html");
}
?>
