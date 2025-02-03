<?php
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login");
    exit;
}
require_once "config.php";
$sql3 = "SELECT period FROM period WHERE id='1'";
$result3 =$conn->query($sql3);
$row3 = mysqli_fetch_assoc($result3);

$sql = "SELECT  balance FROM users WHERE username='".$_SESSION['username']."'";
$result = $conn->query($sql);
$row = mysqli_fetch_array($result);
if( $row['balance']>0){
$period=$row3['period'];
$ans=$_POST["ans"];
$amount=$_POST["amount"];
$newbalance = $row['balance'] - $amount;
if( $row['balance']>=$amount){





$sql2 ="INSERT INTO betting (username,period,ans,amount) VALUES ('".$_SESSION['username']."', $period,'$ans',$amount)"; 
$sql="UPDATE users SET  balance = '$newbalance' WHERE username='".$_SESSION['username']."'" ;
$conn->query($sql);              
if ($conn->query($sql2) === TRUE) {
    header("location: win");

} else {
  echo "Error updating record: " . $conn->error;
}}else{
  header("location: recharge");
}

}else{
  header("location: recharge");
}



$conn->close();
?>