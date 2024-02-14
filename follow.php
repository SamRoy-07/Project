<?php
// Assuming you have defined the necessary functions and classes

// Check if the followUser action is triggered
if (!empty($_POST['action']) && $_POST['action'] == 'followUser') {
    $user->followUserId = $_POST["userId"];	
    $user->followUser();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Follow Users</title>
    <!-- Include jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>

<div class="card-body">
    <?php 
    $unfollowedUserResult = $user->getFollower();
    while ($unfollowedUser = $unfollowedUserResult->fetch_assoc()) { 	
    ?>					
    <li class="list-group-item" style="padding:5px;">					
        <a href="#"><img src="images/<?php echo $unfollowedUser['profile_image']; ?>" width="50"/>@<?php echo $unfollowedUser['username']; ?></a> 
        <button type="button" id="follow_<?php echo $unfollowedUser['user_id']; ?>" data-userid="<?php echo $unfollowedUser['user_id']; ?>" class="btn btn-primary pull-right follow" style="margin:5px 5px 0px 0px;">Follow</button>
    </li>					
    <?php } ?>					
</div>

<script>
$(document).on('click', '.follow', function(){
    var userId = $(this).data("userid");		
    var action = 'followUser';
    $.ajax({
        url:'<?php echo $_SERVER["PHP_SELF"]; ?>',
        method:"POST",
        data:{userId:userId, action:action},
        dataType:"json",
        success:function(response){				
            if(response.success == 1) {
                $("#follow_"+userId).text("Following");
                $("#following").text(parseInt($("#following").text()) + 1);
            }					
        }
    });
});
</script>

</body>
</html>
