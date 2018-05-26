<?php
session_start();
$username = $_SESSION['username'];
$accessLevel = $_SESSION['accessLevel'];
if($accessLevel == "Employee"){
    header("Location: welcome-employee.php");
}elseif($accessLevel != "Admin"){
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

if(isset($_POST["employees"])){
    header("Location: employees.php");
}

?>

<?php include_once "dashboard-template/header.php"; ?>
<?php include_once "dashboard-template/admin-nav.php"; ?>

<div class="wrapper">
    <div class="center welcome-title">
        <h1>Welcome Back <br> <span><?php echo $username ?></span> <br> Add and Update Employees as well as Incidents from your dashboard</h1>
    </div>
</div>


<?php include_once "dashboard-template/footer.php"; ?>