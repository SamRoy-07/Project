<?php



session_start();

if (isset($_SESSION["email"]) && isset($_SESSION["uniqueid"])) {

    ?>

    <html>

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            .pride {
                display: flex;
                background-color: #f44336;
                position: absolute;
                top: 10px;
                height: 80px;
                width: 138px;
                left: 5;
                padding: 8px;
                font-size: 65px;
                border-radius: 14px;
                color: white;
                text-align: left;

            }

            ul {
                display: flex;
                list-style-type: none;
                gap: 100px;
                flex-direction: column;
            }

            #leftnav a {
                margin-top: 80px;
                position: absolute;
                left: -115px;
                transition: 0.4s;
                padding: 15px;
                width: 100px;
                text-decoration: none;
                font-size: 20px;
                color: whitesmoke;
                border-radius: 10px;
                text-align: center;
                justify-content: center;
                background-color: #4B0082;
            }

            #leftnav a:hover {
                left: 0;
                background-color: #4B0082;
            }

            .rightnav p {

                margin-top: -200px;
                position: absolute;
                right: 20px;
                transition: 0.3s;
                padding: 15px;
                width: 100px;
                text-decoration: none;
                font-size: 20px;
                color: #23bb23;
                border-radius: 10px;
                text-align: center;
                justify-content: center;
            }

            .rightnav p:hover {
                right: 10;
                background-color: #d9d4d4;
            }



            .logo {
                display: flex;
                padding: 1px;
                height: 100px;
                justify-content: flex-end;

            }

            .logo img {

                border-radius: 15px;

            }

            body {

                background: linear-gradient(to right, #bc8ce0, #c7b7e0);
            }

            .post {
                display: flex;
                background-color: black;
                color: azure;
                flex-direction: column;
                height: auto;
                width: 50%;
                position: absolute;
                top: 22%;
                right: 50%;
                transform: translate(50%, -50%);
                margin-top: 150px;
                border-radius: 20px;
                padding: 15px;
                justify-content: center;
                text-align: center;
            }

            .profile {
                display: flex;
                position: absolute;
                flex-direction: column;
                align-items: center;
                color: aliceblue;
                justify-content: center;
                transition: 0;
                text-align: center;
                width: 100px;
                height: 100px;

                right: 15%;
                top: 2%;
                border-radius: 50%;
            }

            .profile img {
                width: 115%;
                height: 109%;
                border-radius: 50%;
            }

            .profile:hover {

                right: 228px;
            }

            @media screen and (max-width: 800px) {
                .profile {
                    width: 17%;
                }
            }


            .motto {
                display: flex;
                align-items: center;
                justify-content: center;
                height: 10vh;
                margin: 0;
                font-family: 'Roboto', sans-serif;
                text-align: center;
                color: whitesmoke;

            }

            .mottosize {
                font-size: 24px;
                font-weight: bold;
                line-height: 1.5;

            }
            .reportuser{
                display: flex;
                flex-direction: column;
                position: absolute;
                height: 10%;
                width: 5%;
                right:1.5%
            }
        </style>
        <script>
            function profile() {
                window.location.href = 'profile.php'
            }

        </script>
    </head>

    <body>




        <div class="logo">
            <img src="logo.jpg" alt="Pride logo">
        </div>





        <button class="profile" onclick="profile()">
            <img src="logo.jpg" alt="Profile Image"> </button>




        <div id="leftnav" class="leftnav">
            <ul>

                <li><a href="#home">Home</a></li>
                <li><a href="https://inshorts.com/en/read">News</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="#about">About</a></li>
            </ul>
        </div>

        <div class="pride">
            Pride

        </div>

        <div id="rightnav" class="rightnav">
            <ul>

                <li>
                    <a href="chatroom\loginchat.php">
                        <p>Chat Room</p>
                    </a>
                </li>
                <li>
                    <a href="users.php">
                        <p>Chat</p>
                    </a>
                </li>
                <li>
                    <a href="Postimagef.php">
                        <p>Posts</p>
                    </a>
                </li>

            </ul>
        </div>


        <div class="post">
            <a href="display.php">


                Hello
            </a>

        </div>

        <a href="reportf.php">
            <img src="reportuser.png" class="reportuser"></a>


        

        

    </body>

    </html>
    <?php
} else {

    header("location: login.html");
}
?>