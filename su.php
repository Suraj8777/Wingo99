<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location:login");
    exit;
}
   require_once "config.php";
$user=$_SESSION["username"];
$recharge=trim($_GET['id']);
  $sqlr = "SELECT  bon FROM notice WHERE id='1'";
$resultr = $conn->query($sqlr);
$rowr = mysqli_fetch_array($resultr);
$mini=$rowr[bon];

if(isset($recharge)){
  
$addwin0="UPDATE users SET balance= balance +$recharge WHERE username='$user'";
$conn->query($addwin0);
$sql3 = "INSERT INTO recharge(username,recharge,status) VALUES ('$user','$recharge','successfull')";
$result3 =$conn->query($sql3);

$opt="SELECT SUM(recharge) as total FROM `recharge` WHERE username='$user' AND status='successfull'";
$optres=$conn->query($opt);
$sum= mysqli_fetch_assoc($optres);
if($sum['total']=="" or $sum['total']=="0"){
   
          $bonus=$mini;
    $win="select refcode FROM users WHERE  username='$user' ";
$result3 =$conn->query($win);
$row3 = mysqli_fetch_assoc($result3);
$refcode=$row3['refcode'];
$adb="UPDATE users SET balance= balance +($bonus) WHERE usercode='$refcode'";
$conn->query($adb);
$addbrec="INSERT INTO bonus (giver,usercode,amount) VALUES ('$user','$refcode','$bonus')";
$conn->query($addbrec);
 
}
 header("location:WR#"); 
}else{
   header("location:WR#"); 
} 



?>