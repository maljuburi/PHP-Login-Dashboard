<?php 
    include "php/conn.php"; 
    $err="";
    if(isset($_POST['update'])){
        $update_id= $_POST['update_id'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $role = $_POST['role'];
        $status = $_POST['status'];
        $department = $_POST['department'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $city = $_POST['city'];
        $state = $_POST['state'];
        $zip = $_POST['zip'];

        $update_employee = "UPDATE fp_employees SET
            username='$username',
            password='$password',
            firstname='$firstname',
            lastname='$lastname',
            address='$address',
            city='$city',
            state='$state',
            zip='$zip',
            phone='$phone',
            department='$department',
            status='$status',
            email='$email',
            role='$role'
                WHERE id = $update_id";

        $update_login = "UPDATE fp_login SET
            username='$username',
            password='$password',
            email='$email',
            role='$role'
                WHERE id = $update_id";

        if(mysqli_query($conn, $update_employee) && mysqli_query($conn, $update_login)){
            header("Location: employees.php");
        }else{
            $err = "Employee was not Updated because ".mysqli_error($conn);
        }
    }



$id=$_GET['id'];
$sql = "SELECT * FROM fp_employees WHERE id=".$id;
$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
$row = mysqli_fetch_assoc($result);


    include "php/close.php";
?>



<div class="wrapper">
    <br>
    <h1 class="center page-title">Add New Employee</h1>
    <div class="new-employee-container">
        <form action="" method="post">
            <p class="error"><?php echo $err; ?></p>
            <label>Username</label>
            <input type="text" name="username" placeholder="Enter Your Username" value="<?php echo $row['username'] ?>" readonly>
            <label>Password</label>
            <input type="text" name="password" placeholder="Enter Your Password" value="<?php echo $row['password'] ?>">
            <label>Email</label>
            <input type="email" name="email" placeholder="Enter Your Email" value="<?php echo $row['email'] ?>">
            <label>First Name</label>
            <input type="text" name="firstname" placeholder="Your First Name" value="<?php echo $row['firstname'] ?>">
            <label>Last Name</label>
            <input type="text" name="lastname" placeholder="Your Last Name" value="<?php echo $row['lastname'] ?>">
            <select name="role">
                <option value="">Choose Role</option>
                <option value="Admin" <?php if ($row['role']=="Admin") { echo "selected";} ?> >Admin</option>
                <option value="Employee" <?php if ($row['role']=="Employee") { echo "selected";} ?> >Employee</option>
            </select>
            <select name="status">
                <option value="">Choose Status</option>
                <option value="Active" <?php if ($row['status']=="Active") { echo "selected";} ?>>Active</option>
                <option value="Inactive Status" <?php if ($row['status']=="Inactive Status") { echo "selected";} ?>>Inactive Status</option>
                <option value="No longer employed" <?php if ($row['status']=="No longer employed") { echo "selected";} ?> >No longer employed</option>
            </select>
            <select name="department">
                <option value="">Choose Department</option>
                <option value="Management" <?php if ($row['department']=="Management") { echo "selected";} ?>>Management</option>
                <option value="Sales" <?php if ($row['department']=="Sales") { echo "selected";} ?>>Sales</option>
                <option value="Manufacturing" <?php if ($row['department']=="Manufacturing") { echo "selected";} ?>>Manufacturing</option>
                <option value="Customer Serive" <?php if ($row['department']=="Customer Serive") { echo "selected";} ?>>Customer Serive</option>
                <option value="HR" <?php if ($row['department']=="HR") { echo "selected";} ?>>HR</option>
                <option value="Maintenance" <?php if ($row['department']=="Maintenance") { echo "selected";} ?>>Maintenance</option>
                <option value="Administration" <?php if ($row['department']=="Administration") { echo "selected";} ?>>Administration</option>
            </select>

            <label>Phone#</label>
            <input type="text" name="phone" placeholder="Your Contact Number" maxlength="15" pattern="\d*" value="<?php echo $row['phone'] ?>">

            <label>Address</label>
            <input type="text" name="address" placeholder="Street & Apt#" value="<?php echo $row['address'] ?>">
            <input type="text" name="city" placeholder="City Name" value="<?php echo $row['city'] ?>">
            <select name="state">
                <option value="">Choose State</option>
                <option value="AL" <?php if ($row['state']=="AL") { echo "selected";} ?>>AL</option>
                <option value="AK" <?php if ($row['state']=="AK") { echo "selected";} ?>>AK</option>
                <option value="AZ" <?php if ($row['state']=="AZ") { echo "selected";} ?>>AZ</option>
                <option value="AR" <?php if ($row['state']=="AR") { echo "selected";} ?>>AR</option>
                <option value="CA" <?php if ($row['state']=="CA") { echo "selected";} ?>>CA</option>
                <option value="CO" <?php if ($row['state']=="CO") { echo "selected";} ?>>CO</option>
                <option value="CT" <?php if ($row['state']=="CT") { echo "selected";} ?>>CT</option>
                <option value="DE" <?php if ($row['state']=="DE") { echo "selected";} ?>>DE</option>
                <option value="FL" <?php if ($row['state']=="FL") { echo "selected";} ?>>FL</option>
                <option value="GA" <?php if ($row['state']=="GA") { echo "selected";} ?>>GA</option>
                <option value="HI" <?php if ($row['state']=="HI") { echo "selected";} ?>>HI</option>
                <option value="ID" <?php if ($row['state']=="ID") { echo "selected";} ?>>ID</option>
                <option value="IL" <?php if ($row['state']=="IL") { echo "selected";} ?>>IL</option>
                <option value="IN" <?php if ($row['state']=="IN") { echo "selected";} ?>>IN</option>
                <option value="IA" <?php if ($row['state']=="IA") { echo "selected";} ?>>IA</option>
                <option value="KS" <?php if ($row['state']=="KS") { echo "selected";} ?>>KS</option>
                <option value="KY" <?php if ($row['state']=="KY") { echo "selected";} ?>>KY</option>
                <option value="LA" <?php if ($row['state']=="LA") { echo "selected";} ?>>LA</option>
                <option value="ME" <?php if ($row['state']=="ME") { echo "selected";} ?>>ME</option>
                <option value="MD" <?php if ($row['state']=="MD") { echo "selected";} ?>>MD</option>
                <option value="MA" <?php if ($row['state']=="MA") { echo "selected";} ?>>MA</option>
                <option value="MI" <?php if ($row['state']=="MI") { echo "selected";} ?>>MI</option>
                <option value="MN" <?php if ($row['state']=="MN") { echo "selected";} ?>>MN</option>
                <option value="MS" <?php if ($row['state']=="MS") { echo "selected";} ?>>MS</option>
                <option value="MO" <?php if ($row['state']=="MO") { echo "selected";} ?>>MO</option>
                <option value="MT" <?php if ($row['state']=="MT") { echo "selected";} ?>>MT</option>
                <option value="NE" <?php if ($row['state']=="NE") { echo "selected";} ?>>NE</option>
                <option value="NV" <?php if ($row['state']=="NV") { echo "selected";} ?>>NV</option>
                <option value="NH" <?php if ($row['state']=="NH") { echo "selected";} ?>>NH</option>
                <option value="NJ" <?php if ($row['state']=="NJ") { echo "selected";} ?>>NJ</option>
                <option value="NM" <?php if ($row['state']=="NM") { echo "selected";} ?>>NM</option>
                <option value="NY" <?php if ($row['state']=="NY") { echo "selected";} ?>>NY</option>
                <option value="NC" <?php if ($row['state']=="NC") { echo "selected";} ?>>NC</option>
                <option value="ND" <?php if ($row['state']=="ND") { echo "selected";} ?>>ND</option>
                <option value="OH" <?php if ($row['state']=="OH") { echo "selected";} ?>>OH</option>
                <option value="OK" <?php if ($row['state']=="OK") { echo "selected";} ?>>OK</option>
                <option value="OR" <?php if ($row['state']=="OR") { echo "selected";} ?>>OR</option>
                <option value="PA" <?php if ($row['state']=="PA") { echo "selected";} ?>>PA</option>
                <option value="RI" <?php if ($row['state']=="RI") { echo "selected";} ?>>RI</option>
                <option value="SC" <?php if ($row['state']=="SC") { echo "selected";} ?>>SC</option>
                <option value="SD" <?php if ($row['state']=="SD") { echo "selected";} ?>>SD</option>
                <option value="TN" <?php if ($row['state']=="TN") { echo "selected";} ?>>TN</option>
                <option value="TX" <?php if ($row['state']=="TX") { echo "selected";} ?>>TX</option>
                <option value="UT" <?php if ($row['state']=="UT") { echo "selected";} ?>>UT</option>
                <option value="VT" <?php if ($row['state']=="VT") { echo "selected";} ?>>VT</option>
                <option value="VA" <?php if ($row['state']=="VA") { echo "selected";} ?>>VA</option>
                <option value="WA" <?php if ($row['state']=="WA") { echo "selected";} ?>>WA</option>
                <option value="WV" <?php if ($row['state']=="WV") { echo "selected";} ?>>WV</option>
                <option value="WI" <?php if ($row['state']=="WI") { echo "selected";} ?>>WI</option>
                <option value="WY" <?php if ($row['state']=="WY") { echo "selected";} ?>>WY</option>
            </select>

            <input type="text" name="zip" placeholder="Enter Zip Code" value="<?php echo $row['zip'] ?>">

            <div class="center">
                <input class="green-btn" type="submit" value="Update" name="update">
                <input class="red-btn" type="button" onclick="window.location.href='employees.php'" value="Cancel">
                <input class="blue-btn" type="reset" value="Clear">
                <input type="hidden" name="update_id" value="<?php echo $row['id']; ?>">
            </div>
            

        </form>

    </div>

</div>