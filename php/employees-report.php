<?php
   include "conn.php";

$err = "";

$sql = "SELECT * FROM fp_employees";
$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
// $rows = mysqli_fetch_all($result, MYSQLI_ASSOC); //Works with newer version of PHP

$rows = mysqli_num_rows($result);
include "close.php";


?>

<div class="wrapper">
    <h1 class="center page-title">Employees Report System</h1>
    <div class="add-container">
        
            <input class="green-btn" type="button" onclick="window.location.href='new-employee.php'" value="Add New Employee">
     
    </div>
    <table class="employees-table">
        <tr>
            <th>Username</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Department</th>
            <th>Status</th>
            <th>Edit</th>
        </tr>
        <?php while($rows = mysqli_fetch_assoc($result)) : ?>
        <tr>
            <td><?php echo $rows["username"] ?></td>
            <td><?php echo $rows["firstname"] ?></td>
            <td><?php echo $rows["lastname"] ?></td>
            <td><?php echo $rows["department"] ?></td>
            <td><?php echo $rows["status"] ?></td>
            <td><button onclick="window.location.href='edit-employee.php?id=<?php echo $rows['id']?>'" class="edit-btn">&#9998; Edit</button></td>
        </tr>
        <?php endwhile ?>

    </table>

</div>