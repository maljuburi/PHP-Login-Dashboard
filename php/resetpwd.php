<?php
    if(isset($_GET['email']) && isset($_GET['token'])){
        $msg = "";
        $err = "";
        $email = $_GET["email"];
        include_once "conn.php";

        if(isset($_POST["pwdSubmit"])){
            $newpwd = $_POST["newpwd"];
            if(!empty($newpwd)){
                
                $updateLogin = "UPDATE fp_login SET password = '$newpwd' WHERE email='$email'";
                $loginResult = mysqli_query($conn, $updateLogin) or die(mysqli_error($conn));
                $updateEmployee = "UPDATE fp_employees SET password = '$newpwd' WHERE email='$email'";
                $EmployeeResult = mysqli_query($conn, $updateEmployee) or die(mysqli_error($conn));
                $msg = "Password is changed";


            }else{
                $err = "Please Enter New Password";
            }
        }

        if(isset($_POST["login"])){
            header("Location: ../index.php");
        }

        include "../newpwd.php";
    


    }else{
        header("Location: ../index.php");
        exit();
    }
?>




