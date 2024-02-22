<?php
session_start();
if(isset($_SESSION['email']) && ($_SESSION['uniqueid'])){


?>

<html>

<head>
    <style>
        * {
            margin: 0%;
            padding: 0%;

        }

        body {
            background-color: #ffe4e1;
        }

        .container1 {
            background-image: url("pride.jpg"); 
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;


            display: flex;
            position: absolute;
            background-color: white;
            height: 90%;
            width: 80%;
            justify-content: center;
            align-items: center;
            margin-top: 2%;
            margin-bottom: auto;
            margin-left: 10%;
            margin-right: auto;
            border-radius: 30px;

        }

        .navbar {
            display: flex;
            position: absolute;
            top: 0.3%;
            right: 0%;
            left: 0.2%;

            height: 7%;
            width: 99.8%;
            border-radius: 30px;

            align-items: center;

        }


        .Pride {
            display: flex;
            position: absolute;
            left: 2%;

        }

        .Pride img {
            height: auto;
            width: 12%;
            border-radius: 13px;
            margin-top: 2%;
            margin-left: -1%;
        }

        .rightnav {
            position: absolute;
            right: 10%;
            justify-content: center;
            align-items: center;
        }

        .rightnav ul {
            display: flex;
            list-style-type: none;
            padding: 10px;
            gap: 20px;


        }

        .rightnav li {
            margin-right: 10px;


        }

        .rightnav li a {
            text-decoration: none;
            color: black;
            font-weight: bold;
            display: flex;
            align-items: center;
            border: 2px solid transparent;
            padding: 10px;
        }

        .rightnav li a:hover {
            background-color: #ffe4e1;

            border-radius: 10px;

        }



        .imagesearch {
            height: 30px;
            width: auto;
            margin-right: 0px;
            display: flex;
            position: absolute;
            top: 16px;
            right: 3%;
        }

        .imagereport {
            height: 30px;
            width: auto;
            margin-right: 0px;
            display: flex;
            position: absolute;
            top: 16px;
            right: -8%;
        }

        .logout {
            display: flex;
            position: absolute;
            border-radius: 50%;
            height: 70%;
            width: 8%;
            background-color: #ffe4e1;
            right: -20%;
            top: 13%;
            justify-content: center;
            align-items: center;
        }




        .container2 {
            display: flex;
            flex-direction: column;

            height: 67%;
            width: 20%;
            position: absolute;
            margin-top: -5%;
            margin-left: -71%;


        }

        .title {
            display: flex;
            flex-direction: column;

            position: absolute;
            top: 2%;
            left: -13%;
            font-weight: bold;
            font-size: 30;


        }

        .leftnav {
            display: flex;
            flex-direction: column;
            font-weight: bold;
            text-decoration: none;
            position: absolute;
            margin-top: 30%;
            margin-left: 8%;

        }

        .leftnav ul {
            display: flex;
            list-style-type: none;
            gap: 20px;
            flex-direction: column;

        }

        .leftnav li a {
            text-decoration: none;
            color: black;
            font-weight: bold;
            display: flex;
            align-items: center;
        }

        .leftnav li a {
            text-decoration: none;
            color: black;
            font-weight: bold;
            display: flex;
            align-items: center;
            border: 2px solid transparent;
            padding: 10px;
        }

        .leftnav li a:hover {
            background-color: ;

            border-radius: 10px;

        }

        .imagehome {
            height: 30px;
            width: auto;
            margin-right: 0px;
            display: flex;
            position: absolute;
            margin-top: -6px;
            margin-left: -50%;
            background-color: transparent;
        }

        .imagenews {
            height: 30px;
            width: auto;
            margin-right: 0px;
            display: flex;
            position: absolute;
            margin-top: 0px;
            margin-left: -50%;
            background-color: transparent;

        }

        .imagecontact {
            height: 25px;
            width: auto;
            margin-right: 0px;
            display: flex;
            position: absolute;
            margin-top: 0px;
            margin-left: -50%;
            background-color: transparent;

            color: white;
        }

        .imageabout {
            height: 25px;
            width: auto;
            margin-right: 0px;
            display: flex;
            position: absolute;
            margin-top: 0px;
            margin-left: -50%;
            background-color: transparent;

        }

        .leftnav li a:hover img {
            transform: scale(1.2);
            /* Increase the size of the image on hover */
        }


        .feedarea {

            position: absolute;
            top: 24%;
            left: 28%;
            bottom: 0;
            width: auto;
            max-width: 60%;
            height: auto;
            max-height: 60%;


            background-color: white;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
            display: flex;
            flex-direction: column;
            padding: 20px;
            overflow-y: auto;
            border-radius: 10px;


        }


        .feed {
            display: flex;
            position: absolute;
            font-size: 35;
            font-weight: bold;

            margin-top: -35%;
            margin-left: -39%;


        }
    </style>
</head>

<body>

    <div class="container1">
        <div class="navbar">
            <div class="Pride">
                <img src="logo.jpg">
            </div>
            <div id="rightnav" class="rightnav">
                <ul>
                    <li>
                        <a href="profile.php">
                            <p>Profile</p>
                        </a>
                    </li>

                    <li>
                        <a href="chatroom\loginchat.php">
                            <p>ChatRoom</p>
                        </a>
                    </li>
                    <li>
                        <a href="users.php">
                            <p> Private Chat</p>
                        </a>
                    </li>
                    <li>
                        <a href="Postimagef.php">
                            <p>Posts</p>
                        </a>
                    </li>

                    <a href="#">
                        <img src="mainpng\search.png" class="imagesearch">
                    </a>


                    <a href="reportf.php">
                        <p><img src="mainpng\reportuser.png" class="imagereport"></p>
                    </a>

                    <div class="logout">
                        <a href="destroysession.php">
                        hello
    </a>

                    </div>
                </ul>

            </div>

        </div>


        <div class="container2">
            <div class="title">
                Pride
            </div>
            <div class="leftnav">
                <ul>

                    <li>
                        <a href="#">
                            
                            <p> <img src="mainpng\home.png" class="imagehome">Home</p>
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <img src="mainpng\news.png" class="imagenews">
                            <p>News</p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="mainpng\contact.png" class="imagecontact">
                            <p>Contact</p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="mainpng\about-removebg-preview.png" class="imageabout">
                            <p>About</p>
                        </a>
                    </li>

                </ul>
            </div>



        </div>


        <div class="feedarea">
            <br>


        </div>
        <div class="feed">
            Feed
        </div>

    </div>

</body>

</html>
<?php
}else{
    header('location:login.html');
}
?>