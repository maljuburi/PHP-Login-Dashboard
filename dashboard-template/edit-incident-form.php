<?php 

    include "php/conn.php"; 
    $err="";
    if(isset($_POST['update'])){
        $update_id= $_POST['update_id'];
        $date = $_POST['date'];
        $status = $_POST['status'];
        $employee_inv = $_POST['employee-inv'];
        $type = $_POST['type'];
        $description = $_POST['description'];
        $resolution = $_POST['resolution'];
       

        $update_incident = "UPDATE fp_incidents SET
            date='$date',
            status='$status',
            employee_inv='$employee_inv',
            type='$type',
            description='$description',
            resolution='$resolution'
                WHERE id = $update_id";

        if(mysqli_query($conn, $update_incident)){
            header("Location: incidents.php");
        }else{
            $err = "Incident was not updated because ".mysqli_error($conn);
        }
    }

    $id=$_GET['id'];
    $thisIncident = "SELECT * FROM fp_incidents WHERE id=".$id;
    $thisResult = mysqli_query($conn, $thisIncident) or die(mysqli_error($conn));
    $thisRow = mysqli_fetch_assoc($thisResult);

    // Adding Employee Involved Query
    $sql = "SELECT * FROM fp_employees";
    $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
    $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);



?>


<div class="wrapper">
    <br>
    <h1 class="center page-title">Add New Incident</h1>
    <div class="new-incident-container">
        <form action="" method="post">
            <p class="error"><?php echo $err; ?></p>
            <label>Date</label>
            <input type="date" name="date" placeholder="Choose Date" value="<?php echo $thisRow['date'] ?>">
            
            <label>Current Status</label>
            <select name="status">
                <option value="">Choose Incident Status</option>
                <option value="Open" <?php if ($thisRow['status']=="Open") { echo "selected";} ?>>Open</option>
                <option value="Processing" <?php if ($thisRow['status']=="Processing") { echo "selected";} ?>>Processing</option>
                <option value="Closed" <?php if ($thisRow['status']=="Closed") { echo "selected";} ?>>Closed</option>
            </select>
            <select name="type">
                <option value="">Choose Incident Type</option>
                <option value="Accident" <?php if ($thisRow['type']=="Accident") { echo "selected";} ?>>Accident</option>
                <option value="Maintenance" <?php if ($thisRow['type']=="Maintenance") { echo "selected";} ?>>Maintenance</option>
                <option value="Disciplinary" <?php if ($thisRow['type']=="Disciplinary") { echo "selected";} ?>>Disciplinary</option>
            </select>
            <select name="employee-inv">
                <option value="">Choose Employee Involved</option>
                <?php foreach($rows as $row): ?>
                <?php $employee_inv =  $row['firstname']." ".$row['lastname'] ?>
                <option value="<?php echo $employee_inv ?>" <?php if ($thisRow['employee_inv'] == $employee_inv) { echo "selected";} ?> ><?php echo $employee_inv ?></option>
                <?php endforeach ?>
            </select>

            <textarea name="description" cols="30" rows="10" placeholder="Incident Description"><?php echo $thisRow['description'] ?></textarea>
            <textarea name="resolution" cols="30" rows="10" placeholder="Incident Resolution"><?php echo $thisRow['resolution'] ?></textarea>

            <div class="center">
                <input class="green-btn" type="submit" value="Update" name="update">
                <input class="red-btn" type="button" value="Cancel" onclick="window.location.href='incidents.php'">
                <input class="blue-btn" type="reset" value="Clear">
                <input type="hidden" name="update_id" value="<?php echo $thisRow['id']; ?>">
            </div>

        </form>

    </div>

</div>