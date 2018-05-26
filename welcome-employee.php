<?php
session_start();
$username = $_SESSION['username'];
$accessLevel = $_SESSION['accessLevel'];
if($accessLevel == "Admin"){
    header("Location: welcome-admin.php");
}elseif($accessLevel != "Employee"){
    header("Location: unautherized.php");
}

if(isset($_POST["logout"])){
    session_unset();
    session_destroy();
    header("Location: index.php");
}

if(isset($_POST["incidents"])){
    header("Location: incidents.php");
}
?>


<?php include_once "dashboard-template/header.php"; ?>
<?php include_once "dashboard-template/employee-nav.php"; ?>


<div class="wrapper">
    <div class="center welcome-title">
        <h1>Welcome Back <br> <span><?php echo $username ?></span> <br> Add and Update Incidents from your dashboard</h1>
    </div>
</div>



<?php include_once "dashboard-template/footer.php"; ?>