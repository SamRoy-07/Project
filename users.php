<?php 
  session_start();
  $conn=mysqli_connect('localhost','root','') or die('not connected');
  mysqli_select_db($conn,'project') or die('not connected');
  if(isset($_SESSION['uniqueid']) && ($_SESSION['email'])){
    
  
?>
<?php include_once "header.php"; ?>
<body>
  <div class="wrapper">
    <section class="users">
      <header>
        <div class="content">
          <?php
          $email=$_SESSION['email'];
            
          //Selecting the userid from the profile
          $query = "SELECT userid FROM sample WHERE email='$email'";
          $result = mysqli_query($conn, $query);
          $row = mysqli_fetch_assoc($result);
          $userid = $row['userid'];


          $queryy = "SELECT  `Username` FROM `profile` WHERE userid='$userid'";
          $res = mysqli_query($conn, $queryy);
          $row = mysqli_fetch_assoc($res);
          $Username = $row['Username'];
          ?>
          <?php 
          $uniqueid=$_SESSION['uniqueid'];
          $sql2="SELECT * FROM `sample` WHERE uniqueid ='$uniqueid'";
            $sql = mysqli_query($conn,$sql2);
            if(mysqli_num_rows($sql) > 0){
              $row = mysqli_fetch_assoc($sql);
            }    


            $uniqueid=$_SESSION['uniqueid'];
            $queryy = "SELECT * FROM `profile` WHERE uniqueid='$uniqueid'";
          $res = mysqli_query($conn, $queryy);
          if(mysqli_num_rows($res)>0){
          $row = mysqli_fetch_assoc($res);
          }
          

           ?>
          
          <div class="details">
            <span><?php echo $row['Username'];?></span>
            <!-- <p><?php echo $row['Email']; ?></p> -->
          </div>
        </div>
        <a href="destroysession.php" class="logout">Logout</a>
      </header>
      <div class="search">
        <span class="text">Select an user to start chat</span>
        <input type="text" placeholder="Enter name to search...">
        <button><i class="fas fa-search"></i></button>
      </div>
      <div class="users-list">
  
      </div>
    </section>
  </div>

  <script src="javascript/users.js"></script>

</body>
</html>
          <?php
  }else{
    header('location:login.html');
  }
