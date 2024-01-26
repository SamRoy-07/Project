<html>

<body>

    <?php
    session_start();

    $_SESSION['user_id'] = $_POST['$email'];

    ?>
    <script>
        window.location.href = 'land.php'
    </script>
    </body>
    <html>
