<?php
include_once "php/forgot.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/styles.css">
    <title>Incident | Forgot</title>
</head>
<body>
    
    <div class="reset">
        <form class="flex-form" action="" method="POST">
            <h1>RESET PASSWORD</h1>
            <label for="user">Username : </label>
            <input name="username" type="text" id="user" placeholder="Enter User Name">
            <input name="forgotSubmit" type="submit" value="Reset"><br>
            <p class="msg"><?php echo $msg; ?></p>
            <p class="error"><?php echo $err; ?></p>
            <span>An email will be sent to the address associated with the user name.</span>
        </form>
    </div>

</body>
</html>


