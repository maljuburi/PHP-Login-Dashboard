<?php 
include_once "conn.php";


$msg="";
$err="";

if(isset($_POST["forgotSubmit"])){
    $uname = $_POST['username'];
    
    if(!empty($uname)){
        $sql = "SELECT * FROM fp_login WHERE username='$uname'";
        $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
    
        $rows = mysqli_num_rows($result);
        if($rows > 0){
            $randNum = "1973654826652843alfksadjhauemdoghsk";
            $randNum = str_shuffle($randNum);
            $randNum = substr($randNum, 0, 10);
            $userEmail ="";
            
            while($rows = mysqli_fetch_assoc($result)) {
                $userEmail = $rows['email'];
                
            }
            
            $resetURL = "http://acaddb.hvcc.edu/~m-aljuburi/225/fp/php/resetpwd.php?token=$randNum&email=$userEmail";
            $resetMsg = "To reset your password, please click the following link: $resetURL";
    
            mail($userEmail, "Reset Password",$resetMsg, "From: m-aljuburi@hvcc.edu\r\n");
            
            $msg = "Email is sent to the user";

        }else{
           $msg = "Email is sent to the user";
        }

    }else{
         $err = "Enter Your Username";
    }
}


?>