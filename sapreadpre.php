<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["adloggedin"]) || $_SESSION["adloggedin"] !== true){
    header("location: adminwinmplapp.php");
    exit;
}
require_once "config.php";
$opt="SELECT SUM(amount) as total FROM `beconebetting` WHERE status='pending' AND ans='red'";
$optres=$conn->query($opt);
$sum= mysqli_fetch_assoc($optres);
$red=round($sum['total'],2);

$optg="SELECT SUM(amount) as total FROM `beconebetting` WHERE status='pending' AND ans='green'";
$optresg=$conn->query($optg);
$sumg= mysqli_fetch_assoc($optresg);
$green=round($sumg['total'],2);

$optv="SELECT SUM(amount) as total FROM `beconebetting` WHERE status='pending' AND ans='violet'";
$optresv=$conn->query($optv);
$sumv= mysqli_fetch_assoc($optresv);
$violet=round($sumv['total'],2);

$opt0="SELECT SUM(amount) as total FROM `beconebetting` WHERE status='pending' AND ans='0'";
$optres0=$conn->query($opt0);
$sum0= mysqli_fetch_assoc($optres0);
$zero=round($sum0['total'],2);

$opt1="SELECT SUM(amount) as total FROM `beconebetting` WHERE status='pending' AND ans='1'";
$optres1=$conn->query($opt1);
$sum1= mysqli_fetch_assoc($optres1);
$one=round($sum1['total'],2);

$opt2="SELECT SUM(amount) as total FROM `beconebetting` WHERE status='pending' AND ans='2'";
$optres2=$conn->query($opt2);
$sum2= mysqli_fetch_assoc($optres2);
$two=round($sum2['total'],2);

$opt3="SELECT SUM(amount) as total FROM `beconebetting` WHERE status='pending' AND ans='3'";
$optres3=$conn->query($opt3);
$sum3= mysqli_fetch_assoc($optres3);
$three=round($sum3['total'],2);

$opt4="SELECT SUM(amount) as total FROM `beconebetting` WHERE status='pending' AND ans='4'";
$optres4=$conn->query($opt4);
$sum4= mysqli_fetch_assoc($optres4);
$four=round($sum4['total'],2);

$opt5="SELECT SUM(amount) as total FROM `beconebetting` WHERE status='pending' AND ans='5'";
$optres5=$conn->query($opt5);
$sum5= mysqli_fetch_assoc($optres5);
$five=round($sum5['total'],2);

$opt6="SELECT SUM(amount) as total FROM `beconebetting` WHERE status='pending' AND ans='6'";
$optres6=$conn->query($opt6);
$sum6= mysqli_fetch_assoc($optres6);
$six=round($sum6['total'],2);

$opt7="SELECT SUM(amount) as total FROM `beconebetting` WHERE status='pending' AND ans='7'";
$optres7=$conn->query($opt7);
$sum7= mysqli_fetch_assoc($optres7);
$seven=round($sum7['total'],2);

$opt8="SELECT SUM(amount) as total FROM `beconebetting` WHERE status='pending' AND ans='8'";
$optres8=$conn->query($opt8);
$sum8= mysqli_fetch_assoc($optres8);
$eight=round($sum8['total'],2);

$opt9="SELECT SUM(amount) as total FROM `beconebetting` WHERE status='pending' AND ans='9'";
$optres9=$conn->query($opt9);
$sum9= mysqli_fetch_assoc($optres9);
$nine=round($sum9['total'],2);

?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="css/app.46643acf.css" rel="preload" as="style">
<link href="css/chunk-vendors.cf06751b.css" rel="preload" as="style">
<link href="js/chunk-vendors.824d6eef.js" rel="preload" as="script">
<link href="css/chunk-vendors.cf06751b.css" rel="stylesheet">
<link href="css/app.46643acf.css" rel="stylesheet">
<style>
   #copied{
            visibility: hidden;
            min-width: 250px;
            margin-left: -125px;
            background-color: #333;
            color: #fff;
            text-align: center;
            border-radius: 6px;
            padding: 16px;
            position: fixed;
            z-index: 1;
            left: 50%;
            bottom: 50px;
            font-size: 17px;
        }

       

        #copied.show {
            visibility: visible;
            margin-bottom: 205px;
            -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
            animation: fadein 0.5s, fadeout 0.5s 2.5s;
        }

        @-webkit-keyframes fadein {
            from {
                bottom: 0;
                opacity: 0;
            }

            to {
                bottom: 30px;
                opacity: 1;
            }
        }

        @keyframes fadein {
            from {
                bottom: 0;
                opacity: 0;
            }

            to {
                bottom: 30px;
                opacity: 1;
            }
        }

        @-webkit-keyframes fadeout {
            from {
                bottom: 30px;
                opacity: 1;
            }

            to {
                bottom: 0;
                opacity: 0;
            }
        }

        @keyframes fadeout {
            from {
                bottom: 30px;
                opacity: 1;
            }

            to {
                bottom: 0;
                opacity: 0;
            }
        }
     
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


</style>
</head>
<body>

<div class="topnav" id="myTopnav">
  <a href="#home" class="active" >Admin</a>
 <a href="admin.php">Users</a>
  <a href="adpass.php">Password Change </a>
  <a href="adwith.php">Withdraw Requests</a>
  <a href="adpre.php">Next Predition</a>
  <a href="rechargeRequests.php">Recharge Requests</a>
  <a href="adreward.php">Reward Management</a>
  <a href="delete.php">Delete User</a>
  <a href="adlogout.php">Log Out</a>

  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>

<div>
    <h2 style="font-size:20px;padding:10px; text-align:center;">Sapre</h2>
 <div data-v-309ccc10="" class="recharge">
        <div data-v-309ccc10="" class="recharge_box">
             <h1>Red:₹&nbsp<?php echo $red;?>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span>Green:₹&nbsp<?php echo $green;?></span></h1><br>
             
             <div style="font-size:20px;">
             <h1>Violet:₹&nbsp<?php echo $violet;?></h1><br>
             <h1><span>zero:₹&nbsp<?php echo $zero;?>&nbsp&nbsp</span><span>one:₹&nbsp<?php echo $one;?>&nbsp&nbsp</span></h1><br>
             <h1><span>two:₹&nbsp<?php echo $two;?>&nbsp&nbsp</span><span>three:₹&nbsp<?php echo $three;?>&nbsp&nbsp</span></h1><br>
             <h1><span>four:₹&nbsp<?php echo $four;?>&nbsp&nbsp</span><span>five:₹&nbsp<?php echo $five;?>&nbsp&nbsp</span></h1><br>
             <h1><span>six:₹&nbsp<?php echo $six;?>&nbsp&nbsp</span><span>seven:₹&nbsp<?php echo $seven;?>&nbsp&nbsp</span></h1><br>
             <h1><span>eight:₹&nbsp<?php echo $eight;?>&nbsp&nbsp</span><span>nine:₹&nbsp<?php echo $nine;?>&nbsp&nbsp</span></h1><br></div>
        <form action="saprepre.php" id="pre" method="POST" class="form-signup">
                 <h2 style="padding:10px;">Next Prediction</h2>
            <div data-v-309ccc10="" class="input_box"><img data-v-309ccc10=""
                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAB00lEQVRoQ+1asS4EURQ97xc0lNSEQqKmp7QNX0CiMTdKq5QzGglfQGNLeltLFISaksYvPJndnWTDbN59s29iJHfaOe/MPWfOnJ3MWwflISKnANaU8BSwB5JHWiKnAWZZduyc62qwKTHe+26e5ycaTpUQEXkBsKghTIx5Jbmk4dQK8RqyEjPJyTp3lqRqRhVIRKKEjAT1K8SvxxhSYNsgJHbmSnyTQh6997dJpqwgcc5tAVgtTzUlpE9yoykRJa+I3AMYxLARITF1OI3Y8VIwIVVOlq1ldyQyZxatkGEWrZBDE85btELGWbRCDlm0fjsQ9RpvP4iREbPWChlmrRVyyFrLWmv4FcXqN/JZsfoNGWb1G3LI6tfq1+q31lNi9Ruyzeo35JDV7/T1e5nn+X5No9XLsiy7cM7tNbY/MprkzHt/p54qEuic2wRwWC5rZH8kcqYk8LYIGd/Zjd7RbTpaWqd7JDslWERuAGxrF7clWp8k534OLSIfAGZjxPx1tJ5JrlQIeQKw/J+EFLN2SPbGolXEqohX1JH6jrwBmI+aYAgeiBGRWiIAvJNc0FxX+xH7CsCOhjAx5prkroZTJaQgGr1aHwCY0RBPifny3p9r/6tVXOsbCz8HUf9wHDEAAAAASUVORK5CYII="
                    alt=""><input data-v-309ccc10="" type="text"  name="username" id="next"
                    placeholder="Enter a number from 0-9"><span data-v-309ccc10="" class="tips_span">Next perdiction</span></div>
           
            <div data-v-309ccc10="" class="input_box_btn"><button data-v-309ccc10="" type="button" onclick="sub()"
                    class="login_btn ripple">Confirm Next Prediction</button></div>
                   
                    
                    </form>
                     <div id="copied">Enter a number from 0-9</div>
            <div data-v-309ccc10="" class="input_box_btn">
                <div data-v-309ccc10="" class="two_btn"></div>
            </div>
        </div>
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


function sub(){
    var p=document.getElementById("next").value;
    if(p==''){
         
       var x = document.getElementById("copied");
        x.className = "show";
        setTimeout(function () { x.className = x.className.replace("show", ""); }, 3000); 
    }else if(-1<p && p<10){
        console.log(p);
     document.getElementById("pre").submit();  
    }else{
         console.log("3");
        var x = document.getElementById("copied");
        x.className = "show";
        setTimeout(function () { x.className = x.className.replace("show", ""); }, 3000); 
    }
    
}
</script>

</body>
</html>