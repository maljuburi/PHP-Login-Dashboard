<?php
   include "conn.php";

$err = "";

$sql = "SELECT * FROM fp_incidents";
$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
// $rows = mysqli_fetch_all($result, MYSQLI_ASSOC); //Works with newer version of PHP
$rows = mysqli_num_rows($result);

include "close.php";


?>



<div class="wrapper">
    <h1 class="center page-title">Incident Report System</h1>
    <div class="add-container">
            <input class="green-btn" type="button" name="Add_Incident" value="Add New Incident" onclick="window.location.href='new-incident.php'">
    </div>
    <table class="incidents-table">
        <tr>
            <th>Date</th>
            <th>Status</th>
            <th>Employee Involved</th>
            <th>Type</th>
            <th>Edit</th>
        </tr>
        
        <?php while($rows = mysqli_fetch_assoc($result)) : ?>
        <tr>
            <td><?php echo $rows["date"] ?></td>
            <td><?php echo $rows["status"] ?></td>
            <td><?php echo $rows["employee_inv"] ?></td>
            <td><?php echo $rows["type"] ?></td>
            <td><button onclick="window.location.href='edit-incident.php?id=<?php echo $rows['id']?>'" class="edit-btn">&#9998; Edit</button></td>
        </tr>
        <?php endwhile ?>

    </table>

</div>