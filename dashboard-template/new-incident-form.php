<?php 

    include "php/conn.php"; 
    $err="";
    if(isset($_POST['add'])){
        $date = $_POST['date'];
        $status = $_POST['status'];
        $employee_inv = $_POST['employee-inv'];
        $type = $_POST['type'];
        $description = $_POST['description'];
        $resolution = $_POST['resolution'];
       

        $add_incident = "INSERT INTO fp_incidents (date, status, employee_inv, type, description, resolution) VALUES ('$date','$status','$employee_inv','$type','$description','$resolution')";


        if(mysqli_query($conn, $add_incident)){
            header("Location: incidents.php");
        }else{
            $err = "Incident was not added because ".mysqli_error($conn);
        }
    }



    // Adding Employee Involved Query
    $sql = "SELECT * FROM fp_employees";
    $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
    $rows = mysqli_num_rows($result);


    include "php/close.php";
?>


<div class="wrapper">
    <br>
    <h1 class="center page-title">Add New Incident</h1>
    <div class="new-incident-container">
        <form action="" method="post">
            <p class="error"><?php echo $err; ?></p>
            <label>Date</label>
            <input type="date" name="date" placeholder="Choose Date" required>
            
            <label>Current Status</label>
            <select name="status" required>
                <option value="">Choose Incident Status</option>
                <option value="Open">Open</option>
                <option value="Processing">Processing</option>
                <option value="Closed">Closed</option>
            </select>
            <select name="type" required>
                <option value="">Choose Incident Type</option>
                <option value="Accident">Accident</option>
                <option value="Maintenance Status">Maintenance</option>
                <option value="Disciplinary">Disciplinary</option>
            </select>
            <select name="employee-inv" required>
                <option value="">Choose Employee Involved</option>
                <?php while($rows = mysqli_fetch_assoc($result)) : ?>
                <option value="<?php echo $rows['firstname']." ".$rows['lastname'] ?>"><?php echo $rows['firstname']." ".$rows['lastname'] ?></option>
                <?php endwhile ?>
            </select>

            <textarea name="description" cols="30" rows="10" placeholder="Incident Description"></textarea>
            <textarea name="resolution" cols="30" rows="10" placeholder="Incident Resolution"></textarea>

            <div class="center">
                <input class="green-btn" type="submit" value="Add" name="add">
                <input class="red-btn" type="button" value="Cancel" onclick="window.location.href='incidents.php'">
                <input class="blue-btn" type="reset" value="Clear">
            </div>


        </form>

    </div>

</div>