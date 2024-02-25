<?php



session_start();

if (isset($_SESSION["email"]) ) {

    ?>

<html>
    <head>
       
        <style>
        
        .form {
            display: flex;
            flex-direction: column;
            gap: 10px;
            background-color: #ffffff;
            padding: 30px;
            width: 450px;
            border-radius: 20px;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            margin-left: auto; 
            margin-right: auto;
            
        }
  
  ::placeholder {
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
  }
  
  .form button {
    align-self: flex-end;
  }
  
  .flex-column > label {
    color: #151717;
    font-weight: 600;
  }
  
  .inputForm {
    border: 1.5px solid #ecedec;
    border-radius: 10px;
    height: 50px;
    display: flex;
    align-items: center;
    padding-right: 10px;
    transition: 0.2s ease-in-out;
  }
  
  .input {
    margin-left: 10px;
    border-radius: 10px;
    border: none;
    width: 85%;
    height: 100%;
  }
  
  .input:focus {
    outline: none;
  }
  
  .inputForm:focus-within {
    border: 1.5px solid #2d79f3;
  }
  
  .flex-row {
    display: flex;
    flex-direction: row;
    align-items: center;
    gap: 10px;
    justify-content: space-between;
  }
  
  .flex-row > div > label {
    font-size: 14px;
    color: black;
    font-weight: 400;
  }
  
  .span {
    font-size: 14px;
    margin-left: 5px;
    color: #2d79f3;
    font-weight: 500;
    cursor: pointer;
  }
  
  .button-submit {
    margin: 20px 0 10px 0;
    background-color: #151717;
    border: none;
    color: white;
    font-size: 15px;
    font-weight: 500;
    border-radius: 10px;
    height: 50px;
    width: 100%;
    cursor: pointer;
  }
  
  .button-submit:hover {
    background-color: #252727;
  }
  
  .p {
    text-align: center;
    color: black;
    font-size: 14px;
    margin: 5px 0;
  }
  
  .btn {
    margin-top: 10px;
    width: 100%;
    height: 50px;
    border-radius: 10px;
    display: flex;
    justify-content: center;
    align-items: center;
    font-weight: 500;
    gap: 10px;
    border: 1px solid #ededef;
    background-color: white;
    cursor: pointer;
    transition: 0.2s ease-in-out;
  }

  
  .btn:hover {
    border: 1px solid #2d79f3;
    ;
  }
 

 .image-container {
            width: 100%; 
        }

        .image-container img {
            width: 100%;
            height: auto; 
            border-radius: 10px; 
            ;
        }

        body {
      background-image: url('C:\PROJECT\LOGIN PAGE\images.jpeg');    
      background-size:0cqmax;
      background-position: center;
      background-repeat: no-repeat;
      background-color: #f0f0f0;
    }

    body{
      background-color: #f7f7f7;
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

        


  

  


    <form class="form" method="POST" action="reportl.php">
        <div class="image-container">
          <a href="logo.jpg" download="pridelogo">
            <img src="logo.jpg" alt="Description of the image" widht="100" height="auto"> </a>
        </div>
        <div class="flex-column">
          <label>Report Name </label></div>
          <div class="inputForm">
            <input type="text" name="reportname" class="input" placeholder="">
          </div>
        
        <div class="flex-column">
          <label>Reason </label></div>
          <div class="inputForm">            
            <input type="text" name="reason" class="input" placeholder="State the Reason">
            
          </div>
          
        </div>
        <button class="button-submit">Report</button>
        
           
      
    
    </form>
    -
</body>
</html>
<?php
} else {
   
    header("location: login.html");
}
?>

