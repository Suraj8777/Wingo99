<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login");
}
require_once "config.php";
$amount = $_POST['amount'];
$utr = $_POST['utr']; 
$upi = $_POST['upi']; 

$sql1 = "INSERT INTO recharge (username, recharge,status,upi,utr) VALUES ('".$_SESSION['username']."', '$amount','Unpaid','$upi','$utr')";
                
$conn->query($sql1);

if ($conn->query($sql) == TRUE) {
    header("location:./sucess");
} else {
  header("location: ./sucess");
}
              
                




$conn->close();
?>