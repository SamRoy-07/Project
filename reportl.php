<html>
    <head>
        <style>
            .report{
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


    $sql = "UPDATE `report` SET `reportname`='$reportname',`reason`='$reason' WHERE userid='$userid'";
    mysqli_query($con, $sql) or die('Query not executed');
    echo"<div class='report'>";
    echo"Your REPORT has been updated";
    echo"</div>";

    mysqli_close($con);

?>
<?php


} else {
    header("location:login.html");
}
?>
</body>
</html>