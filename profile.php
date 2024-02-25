<?php
session_start();
if (isset($_SESSION['email'])) {
    ?>
    <html>

    <head>
        <style>
           body{
        background-color: #f7f7f7;
      }

            .container {
                display: flex;
                flex-direction: column;
                background-color: whitesmoke;
                justify-content: center;
                align-items: center;
                text-align: center;
                width: 30%;
                height: 70%;
                position: absolute;
                top: 20%;
                right: 35%;
                border-radius: 20px;
                box-shadow: 10px 10px blueviolet;
            }

            .hello {
                display: flex;
                flex-direction: column;
                position: absolute;
                background-color: #2e2d2d;
                height: 30%;
                width: 25%;
                top: 34%;
                right: 38%;
                justify-content: center;
                align-items: center;
                text-align: center;
                border-radius: 8px;

            }

            .Username {
                display: flex;
                flex-direction: column;
                position: absolute;
                background-color: #ed6b6b;
                height: 30px;
                width: 100px;
                top: 7%;
                right: 70%;
                justify-content: center;
                align-items: center;
                text-align: center;
                border-radius: 4px;
                padding: 5px;
            }

            .Username:hover {
                background-color: red;
            }

            .quotes {

                display: flex;
                flex-direction: column;
                position: absolute;
                background-color: #ed6b6b;
                height: auto;
                width: auto;
                top: 55%;
                /* left:2%; */
                padding: 3px;
                background-color: whitesmoke;
                border-radius: 5px;

            }

            .bio {
                display: flex;
                flex-direction: column;
                position: absolute;
                background-color: #ed6b6b;
                height: auto;
                width: auto;
                top: 33%;
                /* left:2%; */
                padding: 3px;
                background-color: whitesmoke;
                border-radius: 5px;
                justify-content: center;
                align-items: center;
                text-align: center;

            }

            .Description {
                display: flex;
                flex-direction: column;
                position: absolute;
                background-color: #ed6b6b;
                height: auto;
                width: auto;
                top: 7%;
                /* left:2%; */
                padding: 5px;
                background-color: whitesmoke;
                border-radius: 7px;

            }

            button {
                display: flex;
                position: absolute;
                background: #fbca1f;
                font-family: inherit;
                padding: 0.6em 1.3em;
                font-weight: 900;
                font-size: 18px;
                border: 3px solid black;
                border-radius: 0.4em;
                box-shadow: 0.1em 0.1em;
                cursor: pointer;
                top: 85%;
            }

            button:hover {
                transform: translate(-0.05em, -0.05em);
                box-shadow: 0.15em 0.15em;
            }

            button:active {
                transform: translate(0.05em, 0.05em);
                box-shadow: 0.05em 0.05em;
            }
            
        </style>
        <script>
            function profile() {
                window.location.href = 'profileupdate.php'
            }

        </script>
    </head>

    <body>
        <?php
        $con = mysqli_connect('localhost', 'root', '') or die('not connected');
        mysqli_select_db($con, 'project') or die('not selected');

        $email = $_SESSION['email'];
        $query = "SELECT userid FROM sample WHERE email='$email'";
        $result = mysqli_query($con, $query);
        $row = mysqli_fetch_assoc($result);
        $userid = $row['userid'];

        $sql = "SELECT `Description`, `Quotes`, `Biodata`, `Username` FROM `profile` WHERE userid=$userid ";
        $res = mysqli_query($con, $sql);
        $row = mysqli_fetch_assoc($res);
        $Description = $row['Description'];
        $quotes = $row['Quotes'];
        $bio = $row['Biodata'];
        $username = $row['Username'];

        echo "<div class='container'>";
        echo "<div class='Username'>";
        echo " $username";
        echo "</div>";
        echo"<button onclick='profile()'> Upadte Profile </button>";
        
        echo "</div>";



        // // echo "<br><br>Your Quotes is $quotes";
        // // echo "<br><br>Your Biodata is $bio";
        // // echo "<br><br>Your Description is $Description";
    
        echo "<div class='hello'>
        <div class='Description'>
         $Description
        </div>
        <div class='quotes'>
        $quotes 
        </div>
        <div class='bio'>
        $bio
        </div>
        
        
        </div>";
        ?>
    </body>

    </html>
    <?php
} else {
    header("location:login.html");
}
?>