
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/styles.css">
    <title>Incident | Reset</title>
</head>
<body>
    
    <div class="reset">
        <form class="flex-form" action="" method="POST">
            <h1>NEW PASSWORD</h1>
            <label for="user">New Password : </label>
            <input name="newpwd" type="password" id="newpwd" placeholder="Enter New Password">
            <input name="pwdSubmit" type="submit" value="Submit">
            <input name="login" type="submit" value="Login"><br>
            <p class="msg"><?php echo $msg; ?></p>
            <p class="error"><?php echo $err; ?></p>
        </form>
    </div>

</body>
</html>
