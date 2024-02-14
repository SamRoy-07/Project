<?php
session_start();

if(isset($_SESSION["email"])){


?>
<?php
$con=mysqli_connect('localhost','root','') or die('not connected');
mysqli_select_db($con,'project') or die('not selected');
$reportname=$_POST['reportname'];
$reason=$_POST['reason'];

$sql="INSERT INTO `report`(`reportname`, `reason`) VALUES ('$reportname','$reason')";
mysqli_query($con,$sql) or die('Query not executed');
mysqli_close($con);

?>
<?php


}else{
    header("location:login.html");
}
?>