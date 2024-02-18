<?php 
  session_start();
  include_once "php/config.php";
  if(isset($_SESSION['uniqueid']) && isset($_SESSION['email'])) {
    include_once "header.php"; 
?>
<body>
  <div class="wrapper">
    <section class="chat-area">
      <header>
        <?php 
          $uniqueid = $_SESSION['uniqueid'];
          $userid = mysqli_real_escape_string($conn, $_GET['userid']);
          $query = "SELECT * FROM `profile` WHERE uniqueid={$userid}";
          $res = mysqli_query($conn, $query);
          
          if(mysqli_num_rows($res) >0) {
            $row = mysqli_fetch_assoc($res); // Corrected the syntax error here
          } else {
            header("location: login.html");
            exit(); // Added an exit after redirecting
          }
        ?>
        <a href="users.php" class="back-icon"><i class="fas fa-arrow-left"></i></a>
        
        <div class="details">
          <span><?php echo $row['Username'] ?></span>
        </div>
      </header>
      <div class="chat-box">
        <!-- Chat box content goes here -->
      </div>
      <form action="#" class="typing-area">
        <input type="text" class="incoming_id" name="incoming_id" value="<?php echo $userid; ?>" hidden> <!-- Used $uniqueid instead of $userid -->
        <input type="text" name="message" class="input-field" placeholder="Type a message here..." autocomplete="off">
        <button><i class="fab fa-telegram-plane"></i></button>
      </form>
    </section>
  </div>

  <script src="javascript/chat.js"></script>

</body>
</html>

<?php
  } else {
    header("location: login.html");
    exit(); // Added an exit after redirecting
  }
?>
