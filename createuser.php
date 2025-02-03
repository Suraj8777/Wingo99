<?php
// Include config.php file
require_once "config.php";
$un=trim($_POST["username"]);
$otp=trim($_POST["otp"]);
$query0 =  "SELECT  username FROM verify  WHERE otp='$otp'";
$result3 =$conn->query($query0);
$row3 = mysqli_fetch_assoc($result3);
$verun=$row3['username'];
if($un==$verun){
    

// Define variables and initialize with empty values
$username = $password =  "";
$username_err = $password_err =  "";

function genUserCode(){
    $str=time();
   

   
    $tn1 = rand(100000,9999999);
    $tn=$str-  $tn1;
    $user_code=$tn;

    return $user_code;
    
    }
  
$user_code = genUserCode();     
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } elseif(!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["username"]))){
        $username_err = "Username can only contain letters, numbers, and underscores.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($conn, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = trim($_POST["username"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 4){
        $password_err = "Password must have atleast 4 characters.";
    } else{
        $password = trim($_POST["password"]);
    }
    $refcode = trim($_POST["refcode"]);
    // Validate confirm password
   $sql3 = "SELECT refcode,refcode1 FROM users WHERE usercode='$refcode'";
   $result3 =$conn->query($sql3);
   $row3 = mysqli_fetch_assoc($result3);
   
   $refcode1=$row3['refcode'];
   $refcode2=$row3['refcode1'];
    
    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) ){
        
        // Prepare an insert statement
        $sql = "INSERT INTO users (username, password, refcode,usercode,refcode1,refcode2) VALUES (?,?,?,?,?,?)";
         
        if($stmt = mysqli_prepare($conn, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ssssss", $param_username, $param_password,$param_refcode,$param_usercode,$param_refcode1,$param_refcode2);
            
            // Set parameters
            $param_username = $username;
            $param_password = $password;
            $param_refcode = $refcode;
            $param_usercode = $user_code;
            $param_refcode1 = $refcode1;
            $param_refcode2 = $refcode2;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: login");
            } else{
                echo "<h1 style='font-size:150px;'>ERROR<br> NO REFERAL CODE FOUND<h1>";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }else{
         echo "<h1 style='font-size:150px;'>ERROR<br> USER ALREADY EXISTS<h1>";
    }
    
    // Close connection
    mysqli_close($conn);
}
}else{
    echo"<h1 style='font-size:150px;'>Incorrect OTP<h1>";
}
?>






