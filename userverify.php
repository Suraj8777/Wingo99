<?php

// check if the user is already logged in
if(isset($_SESSION['username']))
{
    header("location: MY");
    exit;
}
require_once "config.php";

$username = $password = "";
$err = "";

// if request method is post
if ($_SERVER['REQUEST_METHOD'] == "POST"){
    if(empty(trim($_POST['username'])) || empty(trim($_POST['password'])))
    {
        $err = "Please enter username + password";
        echo($err);
    }
    else{
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);
      
        
    }


if(empty($err))
{
    $res = mysqli_query($conn,"SELECT* FROM users WHERE username='$username'and password='$password'");
    $result=mysqli_fetch_array($res);
    if($result)
 {
    $sql2 = "SELECT * FROM users WHERE username='$username'";
    $result2 =$conn->query($sql2);
    $row2 = mysqli_fetch_assoc($result2);
    
                               session_start();
                            $_SESSION["username"] = $row2['username'];
                            $_SESSION["id"] = $row2['id'];
                            $_SESSION["usercode"] = $row2['usercode'];
                            $_SESSION["refcode"] = $row2['refcode'];
                            $_SESSION["refcode1"] = $row2['refcode1'];
                            $_SESSION["refcode2"] = $row2['refcode2'];
                            $_SESSION["loggedin"] = true;

                            header("location: /MY#");
}
                    
}  


}


?>
                         
    