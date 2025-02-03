<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["adloggedin"]) || $_SESSION["adloggedin"] !== true){
    header("location: dubaiadmin");
    exit;
}
require_once "config.php";
   
                      
                        
$query =  "SELECT  * FROM record WHERE status='Applying' OR status='Processing'  ORDER BY id DESC ";


// result for method one
$result1 = mysqli_query($conn, $query);

// result for method two 
$result2 = mysqli_query($conn, $query);
$rowcount=mysqli_num_rows($result2);
    

$dataRow = "";

while($row2 = mysqli_fetch_array($result2))
{
      $query0 =  "SELECT  account,ifsc,upi,name,Address,email,block FROM users  WHERE username='$row2[1]'";
$result3 =$conn->query($query0);
$row3 = mysqli_fetch_assoc($result3);
//$bank=$row3['account'];
if ($row3 !== null && isset($row3['account'])) {
  $bank = $row3['account'];
} else {
  // Handle the case where $row3 is null or 'account' key doesn't exist
  // You can assign a default value to $bank or display an error message
}

//$ifsc=$row3['ifsc'];
if ($row3 !== null && isset($row3['ifsc'])) {
  $ifsc = $row3['ifsc'];
} else {
  // Handle the case where $row3 is null or 'ifsc' key doesn't exist
  // You can assign a default value to $ifsc or display an error message
}

//$upi=$row3['upi'];
if ($row3 !== null && isset($row3['upi'])) {
  $upi = $row3['upi'];
} else {
  // Handle the case where $row3 is null or 'upi' key doesn't exist
  // You can assign a default value to $upi or display an error message
}

//$name=$row3['name'];
if ($row3 !== null && isset($row3['name'])) {
  $name = $row3['name'];
} else {
  // Handle the case where $row3 is null or 'name' key doesn't exist
  // You can assign a default value to $name or display an error message
}

//$email=$row3['email'];
if ($row3 !== null && isset($row3['email'])) {
  $email = $row3['email'];
} else {
  // Handle the case where $row3 is null or 'email' key doesn't exist
  // You can assign a default value to $email or display an error message
}

//$Address=$row3['Address'];
if ($row3 !== null && isset($row3['Address'])) {
  $Address = $row3['Address'];
} else {
  // Handle the case where $row3 is null or 'Address' key doesn't exist
  // You can assign a default value to $Address or display an error message
}

//$block=$row3['block'];
if ($row3 !== null && isset($row3['block'])) {
  $block = $row3['block'];
} else {
  // Handle the case where $row3 is null or 'block' key doesn't exist
  // You can assign a default value to $block or display an error message
}
$Address = ""; // Initialize the variable
$name = ""; // Initialize the variable
$ifsc = ""; // Initialize the variable
$bank = ""; // Initialize the variable
$upi = ""; // Initialize the variable
$email = ""; // Initialize the variable
$block = ""; // Initialize the variable
    $alink='"/waccept?am='.$row2[2].'&un='.$row2[1].'&id='.$row2[0].'"';
      $blink='"/agree?am='.$row2[2].'&un='.$row2[1].'&id='.$row2[0].'"';
    $dlink='"/wdecline?am='.$row2[2].'&un='.$row2[1].'&id='.$row2[0].'"';
    $dataRow = $dataRow."<tr><td>$row2[1]</td><td>$row2[2]</td><td>$row2[3]</td><td>$Address</td><td>$name</td><td>$ifsc</td><td>$bank</td><td>$upi</td><td>$email</td><td>$block Account</td><td>WD202310032548690$row2[0]263</td><td onclick='window.location.href=$blink;' style='min-width: 6rem;
    margin-left: 0.13333rem;
    color: #fff;
    background: #fe6868;
    border-radius: 0.13333rem;
    line-height: 0.66667rem;
    height: 1.66667rem;font-weight:600;
    text-align: center;'>AGREE</td><td onclick='window.location.href=$alink;' style='min-width: 6rem;
    margin-left: 0.13333rem;
    color: #fff;
    background: #26a17b;
    border-radius: 0.13333rem;
    line-height: 0.66667rem;
    height: 1.66667rem;font-weight:600;
    text-align: center;'>APPROVE</td><td onclick='window.location.href=$dlink;' style='min-width: 6rem;
    margin-left: 0.13333rem;
    color: #fff;
    background: #F44336;
    border-radius: 0.13333rem;
    line-height: 0.66667rem;
    font-weight:600;
    height: 1.66667rem;
    text-align: center;'>REJECT</td></tr>";
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
        background: linear-gradient(90deg, rgb(0 48 157) 0%, rgb(108 120 255) 100%);
    color:#fff;
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

 <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </span><span><h3 style="display:inline;">Withdraw Requests</h3></span>

  <div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="admin" class="active" >Admin</a>
   <a href="users"  >Users</a>
  <a href="adduser">add User</a>
  <a href="inviterec">Invite Record</a>
  <a href="adpass">Password Change </a>
  <a href="adwith">Withdraw Requests</a>
  <a href="adpre">Next Predition</a>
  <a href="adreward">Reward Management</a>
  <a href="rechargeRequests">Recharge Requests</a>
  <a href="delete">Delete User</a>
  <a href="adlogout">Log Out</a>


</div>
 <h2 style="font-size:20px;padding:5px; color:grey; text-align:center;"onclick="window.location.href='rechrec'">Recharge Record</h2>
<div>
  <table style="background-color: White;">
    <tr>
        
        <th>MOB NUM</th>
        <th>AMOUNT</th>
          <th>STATUS</th>
          <th>USDT ADDRESS</th>
          <th>BANK NAME</th>
          <th>NAME</th>
           <th>ACCOUNT NUM</th>
            <th>IFSC CODE</th>
             <th>UPI ID</th>
             <th>BAN/UNBAN</th>
             <th>TRN ID</th>
             <th>AGREE</th>
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
 </body>
</html>
