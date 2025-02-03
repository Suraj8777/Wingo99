<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["adloggedin"]) || $_SESSION["adloggedin"] !== true){
    header("location: adlogin.php");
    exit;
}
require_once "config.php";
   
                      
                        
$query =  "SELECT  * FROM recharge WHERE status='FAST-PAY' OR status='EPAY-DEPOSIT' OR status='To Be Paid' OR status='EK-PAY' OR status='BANK-DEPOSIT' OR status='RIGHT-PAY' ORDER BY id DESC ";


// result for method one
$result1 = mysqli_query($conn, $query);

// result for method two 
$result2 = mysqli_query($conn, $query);
$rowcount=mysqli_num_rows($result2);
    

$dataRow = "";

while($row2 = mysqli_fetch_array($result2))
{
    $alink='"/accept.php?am='.$row2[2].'&utr='.$row2[6].'&un='.$row2[1].'"';
    $dlink='"/decline.php?am='.$row2[2].'&utr='.$row2[6].'&un='.$row2[1].'"';
    $plink='"/plink.php?am='.$row2[2].'&utr='.$row2[6].'&un='.$row2[1].'"';
    $dataRow = $dataRow."<tr><td>$row2[1]</td><td>$row2[5]USDT</td><td>$row2[7]</td><td>$row2[6]</td><td>$row2[2]</td><td>$row2[4]</td><td onclick='window.location.href=$plink;' style='background:green;'>USDT DEPOSITED</td><td onclick='window.location.href=$alink;' style='background:green;'>YES</td><td onclick='window.location.href=$dlink;'style='background:red;'>NO</td></tr>";
}


?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
    font-family: "Lato", sans-serif;
  }
  
  .sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
  }
  
  .sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s;
  }
  
  .sidenav a:hover {
    color: #f1f1f1;
  }
  
  .sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
  }
  
  #main {
    transition: margin-left .5s;
    padding: 16px;
  }
  
  @media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
    .sidenav a {font-size: 18px;}
  }

table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
  overflow: hidden;

}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}

</style>
<style>
 .float{ 
       z-index: 99;
    position: fixed;
    width: 46px;
    height: 46px;
    bottom: 99px;
    right: 5px;
    text-align: center;
}


  .floattext{ 
        display: flex;
    background: #6610f2;
    color: #ffffff;
    padding: 6px 4px;
    font-size: 9px;
    width: fit-content;
    border-radius: 4px;
    height: 18px;
    line-height: 11px;
    margin-top: 48px;
    box-shadow: 0 0 6px;
}


.my-float{
	margin-top:22px;
}</style></head>
<body>

 <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </span><span><h3 style="display:inline;">Recharge Requests</h3></span>

  <div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="admin.php" class="active" >Admin</a>
   <a href="users.php"  >Users</a>
  <a href="adduser.php">add User</a>
  <a href="inviterec.php">Invite Record</a>
  <a href="adpass.php">Password Change </a>
  <a href="adwith.php">Withdraw Requests</a>
  <a href="adpre.php">Next Predition</a>
  <a href="adreward.php">Reward Management</a>
  <a href="rechargeRequests.php">Recharge Requests</a>
  <a href="delete.php">Delete User</a>
  <a href="adlogout.php">Log Out</a>


</div>
 <h2 style="font-size:20px;padding:5px; color:grey; text-align:center;"onclick="window.location.href='rechrec'">Recharge Record</h2>
<div>
  <table style="background-color: White;">
    <tr>
        <th>MON NUM</th>
        <th>UPI ID</th>
        <th>TRN ID</th>
        <th>UTR/REF</th>
        <th>AMONUT</th>
        <th>DATE/TIME</th>
        <th>USDT DEPOSIT</th>
        <th>APPROVE</th>
        <th>REJECT</th>
      
      
    </tr>
    
    <?php echo $dataRow;?>

</table>
</div>

<script>
   function openNav() {
      document.getElementById("mySidenav").style.width = "250px";
      document.getElementById("main").style.marginLeft = "250px";
    }
    
    function closeNav() {
      document.getElementById("mySidenav").style.width = "0";
      document.getElementById("main").style.marginLeft= "0";
    }
</script>

<a href="https://t.me/SoumyaGamers" class="float">
<img class="float" src="telegram.png">
<p class="floattext">Prediction Group</p>
</a>  </body>
</html>
