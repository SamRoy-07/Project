<?php
session_start();

if (isset($_SESSION["email"]) && isset($_SESSION["uniqueid"]) && isset($_SESSION["userid"])) {

    ?>
    <html>

    <head>
        <style>
            * {
                margin: 0%;
                padding: 0%;

            }

            @import url('https://fonts.googleapis.com/css2?family=Protest+Revolution&display=swap') .protest-revolution-regular {
                font-family: "Protest Revolution", sans-serif;
                font-weight: 400;
                font-style: normal;
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
                margin-left: 8%;
                margin-right: auto;
                border-radius: 30px;

            }

            .navbar {
                display: flex;
                position: absolute;
                top: 0.8%;
                right: 0%;
                left: 0.2%;

                height: 10%;
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
                margin-top: 1%;
                margin-left: -1%;
            }

            .rightnav {
                position: absolute;
                right: 8%;
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
                font-size: 23;
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
                height: 80px;
                width: 80px;

                display: flex;
                position: absolute;
                top: 0px;
                right: 55%;
            }

            .imagereport {
                height: 30px;
                width: auto;
                margin-right: 0px;
                display: flex;
                position: absolute;
                top: 16px;
                right: 0%;
            }

            .logout {
                display: flex;
                position: absolute;
                border-radius: 50%;
                height: 70%;
                width: 8%;
                background-color: #ffe4e1;
                margin-left: 5%;
                top: 13%;
                justify-content: center;
                align-items: center;
                list-style-type: none;
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
                top: 7%;
                left: -13%;
                font-weight: bold;
                font-size: 43;


            }

            .leftnav {
                display: flex;
                flex-direction: column;
                font-weight: bold;
                text-decoration: none;
                position: absolute;
                margin-top: 36%;
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
                font-size: 23;
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
                margin-left: -40%;
                background-color: transparent;
            }

            .imagenews {
                height: 30px;
                width: auto;
                margin-right: 0px;
                display: flex;
                position: absolute;
                margin-top: 0px;
                margin-left: -40%;
                background-color: transparent;

            }

            .imagecontact {
                height: 25px;
                width: auto;
                margin-right: 0px;
                display: flex;
                position: absolute;
                margin-top: 0px;
                margin-left: -40%;
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
                margin-left: -40%;
                background-color: transparent;

            }

            .leftnav li a:hover img {
                transform: scale(1.4);
                /* Increase the size of the image on hover */
            }


            .container {
                height: 75%;
                max-width: 70%;
                margin: 0 auto;
                margin-top: 8%;
                margin-left: 27%;
                background-color: #fff;
                border-radius: 10px;
                box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
                overflow-y: auto;
            }

            table {
                width: 100%;
                border-collapse: collapse;
            }

            th,
            td {
                padding: 15px;
                text-align: left;
                vertical-align: top;
            }

            th {
                background-color: #333;
                color: #fff;
                font-weight: bold;
                border-bottom: 2px solid #fff;
            }

            tr:nth-child(even) {
                background-color: #f9f9f9;
            }

            tr:hover {
                background-color: #e0e0e0;
            }

            img {
                max-width: 70%;
                height: 50%;
                border-radius: 8px;
                display: block;
                margin: 30px auto 20px;
                
            }

            .post-description {
                padding: 15px;
                font-size: 16px;
                line-height: 1.6;
                border-bottom: 1px solid #ccc;
            }

            .post-description h3 {
                color: #333;
                font-size: 24px;
                margin: 0 0 15px;
            }

            .post-description p {
                margin: 0 0 10px;
            }

            td.image-container {
                margin-bottom: 20px;
                /* Add bottom margin to create gap */
            }

            td:hover {
                cursor: pointer;
            }

            td:hover img {
                transform: scale(1.05);
                transition: transform 0.2s ease-in-out;
            }



            .feed {
                display: flex;
                position: absolute;
                font-size: 30;
                font-weight: bold;

                margin-top: -35%;
                margin-left: -39%;


            }

            .logoutbtn {
                display: flex;
                position: absolute;

            }

            /* Your existing CSS styles here */

            .overlay {
                display: none;
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background-color: rgba(0, 0, 0, 0.9);
                /* Semi-transparent black */
                z-index: 1000;
                /* Higher z-index to ensure it covers other elements */
            }

            /* .searchconatiner {
                                        display: flex;
                                        flex-direction: column;
                                        position: absolute;
                                        background-color: red;
                                    } */

            .search-container {
                display: none;
                position: absolute;
                left: 50%;
                transform: translateX(-50%);
                width: 39%;
                height: auto;
                text-align: center;
                border-radius: 10px;

                z-index: 1001;


            }

            #search-input {
                padding: 13px 20px;
                border-radius: 10px;

            }

            #search-button {
                display: flex;
                flex-direction: column;
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
                top: 0%;
                margin-left: 78%;
                justify-content: flex-end;
            }

            .search-results {}


            #search-button:hover {
                transform: translate(-0.05em, -0.05em);
                box-shadow: 0.15em 0.15em;
            }

            #search-button:active {
                transform: translate(0.05em, 0.05em);
                box-shadow: 0.05em 0.05em;
            }
        </style>
    </head>

    <body>

        <div class="container1">
            <div class="navbar">
                <div class="Pride">
                    <a href="main.php">
                        <img src="logo.jpg">
                    </a>
                </div>





                <img src="mainpng\search.png" class="imagesearch" id="search-icon" onclick="toggleSearch()">



                <div class="overlay" id="overlay" onclick="toggleSearch()">
                </div>
                <div class="searchcontainer">
                    <div class="search-container" id="search-container">
                        <form onsubmit="event.preventDefault(); performSearch()">
                            <input type="text" id="search-input" placeholder="Type here to search" required>
                            <button id="search-button" type="submit">Search</button>
                        </form>
                        <div id="search-results" class="search-results"></div>
                    </div>
                </div>



                <!-- Your existing HTML code here -->

                <script src="search\searchscript.js"></script>

                <div id="rightnav" class="rightnav">

                    <ul>

                        <li>
                            <a href="profile\profile.php">
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
                                <p> Converse</p>
                            </a>
                        </li>
                        <li>
                            <a href="postimage\Postimagef.php">
                                <p>Posts</p>
                            </a>
                        </li>

                        <a href="reportf.php">
                            <p><img src="mainpng\reportuser.png" class="imagereport"></p>
                        </a>

                        <a href="destroysession.php">
                            <img src="logout-removebg-preview.png" class="logout">
                        </a>

                </div>
                </ul>

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
                            <a href="https://www.inshorts.com/en/read">
                                <img src="mainpng\news.png" class="imagenews">
                                <p>News</p>
                            </a>
                        </li>
                        <li>
                            <a href="../project/contact/contactf.php">
                                <img src="mainpng/contact.png" class="imagecontact">
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


            <div class="container">

                <table>
                    <thead>
                        <tr>
                            <th>Feed</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $con = mysqli_connect('localhost', 'root', '') or die('not connected');
                        mysqli_select_db($con, 'project') or die('not selected');
                        $userid = $_SESSION['userid'];

                        $rows = mysqli_query($con, "SELECT * FROM post WHERE NOT userid='$userid' ORDER BY time DESC");
                        foreach ($rows as $row): ?>
                            <tr>
                                <td class="image-container"><img src="postimage/img/<?php echo $row["image"]; ?>"
                                        alt="<?php echo $row["image"]; ?>"></td>
                            </tr>
                            <tr>
                                <td class="post-description">
                                    <h3>Description</h3>
                                    <p>
                                        <?php echo $row["Description"]; ?>
                                    </p>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

            
        </div>
       

        </div>



    </body>

    </html>
    <?php
} else {
    header("location:login.html");
}