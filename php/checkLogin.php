<?php
session_start();
include "conn.php";

$err = "";

if(isset($_POST['submit'])){
    if(empty($_POST['username']) || empty($_POST["password"])){
        $err = "Enter Username and Password";
    }else{
        $uname = $_POST['username'];
        $pwd = $_POST['password'];
        $sql = "SELECT * FROM fp_login WHERE username='$uname' AND password='$pwd'";
        $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
        $rows = mysqli_num_rows($result);

        if($rows == 1){
            while($rows = mysqli_fetch_assoc($result)) {
                $accessLevel = $rows['role'];
            }
            
            $_SESSION["username"] = $uname;
            if($accessLevel == "Admin"){
                $_SESSION["accessLevel"] = $accessLevel;
            }elseif($accessLevel == "Employee"){
                $_SESSION["accessLevel"] = $accessLevel;
            }
            header('Location: php/redirectLogin.php');
        }else{
            $err = "Invalid Username or Password";
        }

        
    }

    
}


include "close.php";

?>