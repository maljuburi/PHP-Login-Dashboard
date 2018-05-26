<?php
session_start();


if(isset($_SESSION['username'])){
    $username = $_SESSION['username'];
    $accessLevel = $_SESSION['accessLevel'];
    if($accessLevel == "Admin"){
        header("Location: ../welcome-admin.php");
    }elseif($accessLevel == "Employee"){
        header("Location: ../welcome-employee.php");
    }else{
        header("Location: ../unautherized.php");
    }

}else{
    header("Location: ../unautherized.php");
}
?>

