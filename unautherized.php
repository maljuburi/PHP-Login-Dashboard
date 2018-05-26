<?php 

    if(isset($_POST["login"])){
        header("Location: index.php");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/styles.css">
    <title>Not Found</title>
</head>
<body>
    <div class="flex-center">
        <form action="" method="POST">
                <h1 class="center">Sorry for any inconvenience</h1>
                <p>You are unauthurized to view this page.</p>
                <p>* Login to View it *</p>
            <p>
                <input name="login" type="submit" value="Login Page">
            </p>
        </form>
    </div>

</body>
</html>


