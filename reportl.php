<html>

<head>
  <style>
    .report {

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

    body {
      background-color: #f7f7f7;
    }
  </style>
  </style>
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      var secondsBeforeRedirect = 3;

      function redirect() {
        window.location.href = 'main.php';
      }

      setTimeout(redirect, secondsBeforeRedirect * 1000);
    });
  </script>
</head>

<body>


  <?php
  session_start();

  if (isset($_SESSION["email"])) {
    $email = $_SESSION["email"];


    ?>
    <?php
    $con = mysqli_connect('localhost', 'root', '') or die('not connected');
    mysqli_select_db($con, 'project') or die('not selected');
    $reportname = $_POST['reportname'];
    $reason = $_POST['reason'];

    $query = "SELECT userid FROM sample WHERE email='$email'";
    $result = mysqli_query($con, $query);
    $row = mysqli_fetch_assoc($result);
    $userid = $row['userid'];


    $sql = "INSERT INTO `report`(`reportname`, `reason`, `userid`) VALUES ('$reportname','$reason','$userid')";
    mysqli_query($con, $sql) or die('Query not executed');
    echo "<div class='report'>";
    echo "Your REPORT has been updated";
    echo "</div>";

    mysqli_close($con);




    ?>
    <?php


  } else {
    header("location:login.html");
  }
  ?>
</body>

</html>