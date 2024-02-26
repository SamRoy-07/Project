<?php
// Include your database connection file
include 'db_connection.php';

// Check if the user is logged in and authenticated
session_start();
if (!isset($_SESSION['user_id'])) {
    // Redirect the user to the login page or show an error message
    header("Location: login.php");
    exit();
}

// Get the user ID of the user performing the follow action
$follower_id = $_SESSION['user_id'];

// Get the user ID of the user to be followed (You might get this value from a form or URL parameter)
$followed_id = $_POST['followed_id']; // Assuming it comes from a form submission

// Check if the follow action is valid (e.g., not following oneself)
if ($follower_id == $followed_id) {
    // Redirect the user or show an error message
    header("Location: profile.php?error=self_follow");
    exit();
}

// Check if the follow relationship already exists
$sql_check_follow = "SELECT * FROM follows WHERE follower_id = $follower_id AND followed_id = $followed_id";
$result_check_follow = mysqli_query($connection, $sql_check_follow);
if (mysqli_num_rows($result_check_follow) > 0) {
    // Redirect the user or show an error message
    header("Location: profile.php?error=already_following");
    exit();
}

// Insert the follow relationship into the database
$sql_follow = "INSERT INTO follows (follower_id, followed_id) VALUES ($follower_id, $followed_id)";
if (mysqli_query($connection, $sql_follow)) {
    // Redirect the user or show a success message
    header("Location: profile.php?success=followed");
    exit();
} else {
    // Redirect the user or show an error message
    header("Location: profile.php?error=database_error");
    exit();
}
?>
<!-- unfollow action -->
<?php
// Include your database connection file
include 'db_connection.php';

// Check if the user is logged in and authenticated
session_start();
if (!isset($_SESSION['user_id'])) {
    // Redirect the user to the login page or show an error message
    header("Location: login.php");
    exit();
}

// Get the user ID of the user performing the unfollow action
$follower_id = $_SESSION['user_id'];

// Get the user ID of the user to be unfollowed (You might get this value from a form or URL parameter)
$unfollowed_id = $_POST['unfollowed_id']; // Assuming it comes from a form submission

// Check if the unfollow action is valid (e.g., not unfollowing oneself)
if ($follower_id == $unfollowed_id) {
    // Redirect the user or show an error message
    header("Location: profile.php?error=self_unfollow");
    exit();
}

// Check if the follow relationship exists
$sql_check_follow = "SELECT * FROM follows WHERE follower_id = $follower_id AND followed_id = $unfollowed_id";
$result_check_follow = mysqli_query($connection, $sql_check_follow);
if (mysqli_num_rows($result_check_follow) == 0) {
    // Redirect the user or show an error message
    header("Location: profile.php?error=not_following");
    exit();
}

// Delete the follow relationship from the database
$sql_unfollow = "DELETE FROM follows WHERE follower_id = $follower_id AND followed_id = $unfollowed_id";
if (mysqli_query($connection, $sql_unfollow)) {
    // Redirect the user or show a success message
    header("Location: profile.php?success=unfollowed");
    exit();
} else {
    // Redirect the user or show an error message
    header("Location: profile.php?error=database_error");
    exit();
}
?>
