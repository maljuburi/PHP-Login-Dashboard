<?php
include "./php/checkLogin.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/styles.css">
    <title>Incident | Login</title>
</head>
<body>
    <div class="login">
        <form class="flex-form" action="" method="POST">
                <h1 class="center">LOGIN</h1>
            <label for="user">Username : </label>
            <input name="username" type="text" id="user" placeholder="Enter User Name">
            <label for="pwd">Password : </label>
            <input name="password" type="password" id="pwd" placeholder="Enter Password">

            <p>
                <input name="submit" type="submit" value="Login">
                <input type="reset" value="Clear">
            </p>
            <p><a href="forgotpwd.php">Forgot My Password</a></p>
            <p class="error"><?php echo $err; ?></p>
        </form>
    </div>

</body>
</html>


