<?php
session_start();
if (isset($_SESSION['email'])) {


  ?>
  <!DOCTYPE html>
  <html lang="en" dir="ltr">

  <head>
    <meta charset="utf-8">

    <style>
      body{
        background-color: #f7f7f7;
      }
      * {
        margin: 0%;
        padding: 0%;

      }

      .container {
        display: flex;
        position: fixed;
        background-image: url('C:\xampp\htdocs\project\pride.jpg');
        background-color: white;
        width: 40%;
        height: 50%;
        justify-content: center;

        margin-top: 11%;
        left: 27%;
        border-radius: 15px;
      }

      .container2 {
        display: flex;
        position: fixed;

        width: 20%;
        height: 50%;
        justify-content: center;

        margin-top: ;
        left: ;
        border-radius: 15px;

      }

      .input {
        display: flex;
        position: absolute;
        left: 0%;
        flex-direction: column;
        margin-top: 28%;
        height: 12%;
        width: 100%;
        border-radius: 10px;
      }

      .Description {
        display: flex;
        position: absolute;
        flex-direction: column;
        margin-top: 14%;
        font-size: 25px;
        font-weight: bold;
        left: 0%;
      }

      .Image {
        display: flex;
        position: absolute;
        flex-direction: column;
        margin-top: 50%;
        left: 0%;
        font-size: 25px;
        font-weight: bold;
      }
      .file{
        display: flex;
        position: absolute;
        flex-direction: column;
        left: 1%;
        margin-top: 65%;
      }
      .submit{
        display: flex;
        position: absolute;
        flex-direction: column;
        background-color: black;
        color: white;
        margin-top: 90%;
        font-size: 18px;
        font-weight: bold;
        align-items: center;
        justify-content: center;

        height: 12%;
        width: 100%;
        border-radius: 10px;

      }
      .imagehome {
                height: 30px;
                width: auto;
                margin-right: 0px;
                display: flex;
                position: absolute;
                margin-top: 3%;
                margin-left: 3%;
                background-color: transparent;
            }

            .imagehome:hover {

                height: 6%;
                border-radius: 10px;
            }

            .imagehome a:hover img {
                transform: scale(1.4);
            }
    </style>

  </head>

  <body>
    <a href="main.php"><img src="mainpng\home.png" class="imagehome"></a>

    <form class="container" action="Postimagel.php" method="post" autocomplete="off" enctype="multipart/form-data">
      <div class="container2">
        <label for="name" class="Description">Description </label>
        <input type="text" name="Description" class="input" id="name" required value="">

        <label for="image" class="Image">Image Upload </label>
        <input type="file" name="image" id="image" accept=".jpg, .jpeg, .png" value="" class="file">


        <button type="submit" name="submit" class="submit">Submit</button>
      </div>
    </form>



  </body>

  </html>
  <?php
} else {
  header("location:login.html");
}

