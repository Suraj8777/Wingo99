<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["adloggedin"]) || $_SESSION["adloggedin"] !== true){
    header("location: adlogin");
    exit;
}
require_once "config.php";
   
                      
                        
$query =  "SELECT  * FROM users ORDER BY id DESC ";


// result for method one
$result1 = mysqli_query($conn, $query);

// result for method two 
$result2 = mysqli_query($conn, $query);
$rowcount=mysqli_num_rows($result2);
    

$dataRow = "";

while($row2 = mysqli_fetch_array($result2))
{
    $balace0=round($row2[6],2);
    $dataRow = $dataRow."<tr class='user' ><td></td><td >$row2[1]</td><td>$row2[2]</td><td> ₹$balace0 </td><td>$row2[12]</td><td>$row2[7]</td><td>$row2[8]</td><td>$row2[13]</td></tr>";
}


?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #04AA6D;
  color: white;
}

.topnav .icon {
  display: none;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
  overflow: hidden;

}
body
{
    counter-reset: Serial;           /* Set the Serial counter to 0 */
}


tr td:first-child:before
{
  counter-increment: Serial;      /* Increment the Serial counter */
  content:  counter(Serial); /* Display the counter */
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
#searchbar{
     margin-left: 15%;
     padding:15px;
     border-radius: 10px;
   }
 
   input[type=text] {
      width: 30%;
      -webkit-transition: width 0.15s ease-in-out;
      transition: width 0.15s ease-in-out;
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

<div class="topnav" id="myTopnav">
  <a href="#home" class="active" >Admin</a>

 <a href="parity">next prediction</a>
  
  <a href="adlogout">Log Out</a>


</div>
 <input id="searchbar" onkeyup="search()" type="text"
        name="search" placeholder="Search by username">

<div>
  <table style="background-color: White;">
    <tr>
        <th>S.No</th>
        <th>Username</th>
        <th>Password</th>
        <th>Balance</th>
        <th>Name</th>
        <th>Account No</th>
        <th>IFSC</th>
      <th>upi id</th>
      
    </tr>
    
    <?php echo $dataRow;?>

</table>
</div>

<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
// JavaScript code
function search() {
	let input = document.getElementById('searchbar').value
	input=input.toLowerCase();
	let x = document.getElementsByClassName('user');
	
	for (i = 0; i < x.length; i++) {
		if (!x[i].innerHTML.toLowerCase().includes(input)) {
			x[i].style.display="none";
		}
		else {
			x[i].style.display="";				
		}
	}
}

</script>

<a href="https://t.me/SoumyaGamers" class="float">
<img class="float" src="telegram.png">
<p class="floattext">Prediction Group</p>
</a>  </body>
</html>
