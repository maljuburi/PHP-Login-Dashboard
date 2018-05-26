<?php 

    include "php/conn.php"; 

    $err="";

    if(isset($_POST['add'])){
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

        $checkUser = "SELECT * FROM fp_employees WHERE username = '$username' OR email = '$email' ";
        $checkResult = mysqli_query($conn, $checkUser);
        if(mysqli_num_rows($checkResult) > 0){
            $err = "Username Already exists!";
        }else{
            
            $add_employee = "INSERT INTO fp_employees(username,password,firstname,lastname,address,city,state,zip,phone,department,status,email,role) VALUES ('$username','$password','$firstname','$lastname','$address','$city','$state','$zip','$phone','$department','$status','$email','$role')";
    
            $add_login = "INSERT INTO fp_login(username,password,email,role) VALUES ('$username','$password','$email','$role')";
    
            if(mysqli_query($conn, $add_employee) && mysqli_query($conn, $add_login)){
                header("Location: employees.php");
            }else{
                $err = "Employee was not added because ".mysqli_error($conn);
            }
        }

    }

include "php/close.php";

?>



<div class="wrapper">
    <br>
    <h1 class="center page-title">Add New Employee</h1>
    <div class="new-employee-container">
        <form action="" method="post">
            <p class="error"><?php echo $err; ?></p>
            <label>Username</label>
            <input type="text" name="username" placeholder="Enter Your Username" required>
            <label>Password</label>
            <input type="text" name="password" placeholder="Enter Your Password" required>
            <label>Email</label>
            <input type="email" name="email" placeholder="Enter Your Email" required>
            <label>First Name</label>
            <input type="text" name="firstname" placeholder="Your First Name" required>
            <label>Last Name</label>
            <input type="text" name="lastname" placeholder="Your Last Name" required>
            <select name="role" required>
                <option value="">Choose Role</option>
                <option value="Admin">Admin</option>
                <option value="Employee">Employee</option>
            </select>
            <select name="status" required>
                <option value="">Choose Status</option>
                <option value="Active">Active</option>
                <option value="Inactive Status">Inactive Status</option>
                <option value="No longer employed">No longer employed</option>
            </select>
            <select name="department" required>
                <option value="">Choose Department</option>
                <option value="Management">Management</option>
                <option value="Sales">Sales</option>
                <option value="Manufacturing">Manufacturing</option>
                <option value="Customer Serive">Customer Serive</option>
                <option value="HR">HR</option>
                <option value="Maintenance">Maintenance</option>
                <option value="Administration">Administration</option>
            </select>

            <label>Phone#</label>
            <input type="text" name="phone" placeholder="Your Contact Number" maxlength="15" pattern="\d*" required>

            <label>Address</label>
            <input type="text" name="address" placeholder="Street & Apt#" required>
            <input type="text" name="city" placeholder="City Name" required>
            <select name="state" required>
                <option value="">Choose State</option>
                <option value="AL">AL</option>
                <option value="AK">AK</option>
                <option value="AZ">AZ</option>
                <option value="AR">AR</option>
                <option value="CA">CA</option>
                <option value="CO">CO</option>
                <option value="CT">CT</option>
                <option value="DE">DE</option>
                <option value="FL">FL</option>
                <option value="GA">GA</option>
                <option value="HI">HI</option>
                <option value="ID">ID</option>
                <option value="IL">IL</option>
                <option value="IN">IN</option>
                <option value="IA">IA</option>
                <option value="KS">KS</option>
                <option value="KY">KY</option>
                <option value="LA">LA</option>
                <option value="ME">ME</option>
                <option value="MD">MD</option>
                <option value="MA">MA</option>
                <option value="MI">MI</option>
                <option value="MN">MN</option>
                <option value="MS">MS</option>
                <option value="MO">MO</option>
                <option value="MT">MT</option>
                <option value="NE">NE</option>
                <option value="NV">NV</option>
                <option value="NH">NH</option>
                <option value="NJ">NJ</option>
                <option value="NM">NM</option>
                <option value="NY">NY</option>
                <option value="NC">NC</option>
                <option value="ND">ND</option>
                <option value="OH">OH</option>
                <option value="OK">OK</option>
                <option value="OR">OR</option>
                <option value="PA">PA</option>
                <option value="RI">RI</option>
                <option value="SC">SC</option>
                <option value="SD">SD</option>
                <option value="TN">TN</option>
                <option value="TX">TX</option>
                <option value="UT">UT</option>
                <option value="VT">VT</option>
                <option value="VA">VA</option>
                <option value="WA">WA</option>
                <option value="WV">WV</option>
                <option value="WI">WI</option>
                <option value="WY">WY</option>
            </select>

            <input type="text" name="zip" placeholder="Enter Zip Code" required>

            <div class="center">
                <input class="green-btn" type="submit" value="Add" name="add">
                <input class="red-btn" type="button" onclick="window.location.href='employees.php'" value="Cancel">
                <input class="blue-btn" type="reset" value="Clear">
            </div>

        </form>

    </div>

</div>