<?php
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login");
    exit;
}
   require_once "config.php";
   
    $sql = "SELECT * FROM saprebet WHERE id='1'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_object($result);
    echo $row->TIME;
 
?>





