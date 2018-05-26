<?php
session_start();
$username = $_SESSION['username'];
$accessLevel = $_SESSION['accessLevel'];




if(isset($_POST["logout"])){
    session_unset();
    session_destroy();
    header("Location: index.php");
}
?>


<?php include_once "dashboard-template/header.php"; ?>

<?php 

if($accessLevel == "Admin"){

    include_once "dashboard-template/admin-nav.php";

    if(isset($_POST["incidents"])){
        header("Location: incidents.php");
    }

    if(isset($_POST["employees"])){
        header("Location: employees.php");
    }

}elseif($accessLevel != "Employee"){
    header("location: unautherized.php");
}else{
    header("Location: incidents.php");
}

?>




<?php include_once "dashboard-template/edit-employee-form.php"; ?>


<?php include_once "dashboard-template/footer.php"; ?>