<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="register1.css">
    <title>Registration Form</title>
</head>
<body>

<div class="bg">
    <div class="cars">
        <img src="aus1.png" class="logo">
    </div>
</div>

<form class="form" method="post" action="">
    <p class="title">Register </p>
    <p class="message">Signup now and get full access to our site. </p>
    <div class="flex">
        <label>
            <input required="" placeholder="" type="text" class="input" name="fname">
            <span>Firstname</span>
        </label>

        <label>
            <input required="" placeholder="" type="text" class="input" name="lname">
            <span>Lastname</span>
        </label>
    </div>  

    <label>
        <input required="" placeholder="" type="email" class="input" name="email">
        <span>Email</span>
    </label> 
        
    <label>
        <input required="" placeholder="" type="password" class="input" name="pass">
        <span>Password</span>
    </label>
    <label>
        <input required="" placeholder="" type="password" class="input" name="confirmpass">
        <span>Confirm password</span>
    </label>

    <label>
            <input required="" placeholder="" type="text" class="input" name="add">
            <span>Address</span>
        </label>

    <label>
        <input required="" min="5" placeholder="" type="number" class="input" name="mobile">
        <span>Phone Number </span>
    </label>

    <label>
        <input required="" placeholder="" type="number" class="input" name="aadhar">
        <span>Aadhar Number:</span>
    </label>

    <button type="submit" name="submit">Sign Up</button>
</form>

<?php
include("Connection_main.php");

if(isset($_POST['submit'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $pass = $_POST['pass']; 
    $confirmpass = $_POST['confirmpass'];
    $address = $_POST['add'];
    $mobile = $_POST['mobile'];
    $aadhar = $_POST['aadhar'];

    if($pass != $confirmpass) {
        echo "Passwords do not match";
    } else {
    // $address = $_POST['address'];
    $query = "INSERT INTO signup(First_name, Last_name, Email, Password,Address, Phone_number, Aadhar_number) VALUES ('$fname','$lname','$email','$pass','$address','$mobile','$aadhar')";

        if(mysqli_query($conn, $query)){
            echo "Successfully Registered       $address ";
            header("location:Filename");
        } else {
            echo "Unsuccessful Registration";
        }
    }
}
?>


</body>
</html>