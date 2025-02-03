<?php
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login");
    exit;
}
require_once "config.php";
$sql = "SELECT  upi FROM notice WHERE id='1'";
$result = $conn->query($sql);
$row = mysqli_fetch_array($result);
$upi=$row[upi];
$a=array($upi);
$random_keys=array_rand($a,1);
$upiid= $a[$random_keys];
$am=$_GET['am'];

if($_SERVER["REQUEST_METHOD"] == "POST"){
$amount = $_POST['amount'];
$utr = $_POST['utr']; 
$upi = $_POST['upi']; 
$query1 = "SELECT * FROM `recharge` WHERE utr='$utr' ";
$result1 = mysqli_query($conn, $query1);
$utrcount = mysqli_num_rows($result1); 

if($utrcount==0){
    
 
$sql1 = "INSERT INTO recharge (username, recharge,status,upi,utr) VALUES ('".$_SESSION['username']."', '$amount','FAST-PAY','$upi','$utr')";
                
$conn->query($sql1);

if ($conn->query($sql) == TRUE) {
    header("location: /rechargerecord#");
} else {
  header("location: /rechargerecord#");
}
              
                





}else{
      echo "<script>
     document.addEventListener('DOMContentLoaded', function(event) { 
     
                 document.getElementById('copied').innerHTML='UTR Already Submited';
                 x=document.getElementById('copied');
           x.className = 'show';
        setTimeout(function () { x.className = x.className.replace('show', ''); }, 3000);
 
});
                
     
                </script>";
}

$conn->close();
}
?>
<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=0">
<meta http-equiv="pragma" content="no-cache">
<meta http-equiv="Cache-Control" content="no-cache, must-revalidate">
<meta http-equiv="expires" content="1">
<meta name="google" value="notranslate">
<meta name="msapplication-TileColor" content="#e57201">
<meta name="theme-color" content="#e57201">
<meta name="msapplication-navbutton-color" content="#e57201">
<meta name="apple-mobile-web-app-status-bar-style" content="#e57201">
<meta name="description" content="Grow Your Fortune, Evolve Your Future!">
<link rel="shortcut icon" href="https://lh3.googleusercontent.com/ZHsFufBh-MPw29BA6fkMm0yajlnX0pb-qXMyGS7T1p9-7RzXhIJyX7PRFtnHU5Kh46Al=w300" type="image/x-icon">
<meta name="twitter:card" content="summary">
<meta name="twitter:title" content="InoxClub">
<meta name="twitter:site" content="InoxClub">
<meta name="twitter:description" content="Grow Your Fortune, Evolve Your Future!">
<meta name="twitter:image" content="https://inoxclub.apphttps://inoxclub.app/includes/images/logo.jpg">
<meta property="og:title" content="InoxClub">
<meta property="og:type" content="website">
<meta property="og:site_name" content="InoxClub">
<meta property="og:url" content="https://inoxclub.app">
<meta name="msapplication-TileImage" content="https://inoxclub.apphttps://inoxclub.app/includes/images/logo.jpg">
<meta property="og:image" content="https://inoxclub.apphttps://inoxclub.app/includes/images/logo.jpg">
<meta property="og:description" content="Grow Your Fortune, Evolve Your Future!">
<meta property="url" content="https://inoxclub.app">
<meta property="type" content="website">
<meta property="title" content="InoxClub">
<meta property="description" content="Grow Your Fortune, Evolve Your Future!">
<meta property="image" content="https://inoxclub.apphttps://inoxclub.app/includes/images/logo.jpg">
<meta itemprop="image" content="https://inoxclub.apphttps://inoxclub.app/includes/images/logo.jpg">
<link rel="stylesheet" href="https://inoxclub.app/includes/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="https://inoxclub.app/includes/assets/css/light.css?23.05.23">
<link rel="stylesheet" href="https://inoxclub.app/includes/dropzone/css/dropzone.css?23.05.23">
<script>
    
   function pageRedirect() {
        window.location.replace("https://meok.club/me");
    }      
    setTimeout("pageRedirect()", 300000);
   
        </script>
<style>@import url('https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@300;400;500;600;700&display=swap');</style><style>

.utrfield{
    border-radius: 10px;
    width: 250px;
    height: 45px;
    border:none;
    background:#f5f5f5;
}
.btn-sub{
    background-image: linear-gradient(90deg,#cd0103,#f64841);
    z-index: 99;
    position: relative;
    bottom:5px;
    height:45px;
    width:70px;
    border:none;
    color:white;
    font-weight:500;
    border-radius:5px;
    
}
.nav-back {
    background: url(https://inoxclub.app/includes/icons/back.png) no-repeat center;
    background-size: contain;
    min-height: 20px;
    min-width: 18px;
    display: inline-flex;
    vertical-align: text-top;
    cursor: pointer;
}
.btn {
    display: inline-block;
    font-weight: 700;
    color: white;
    text-align: center;
background-image: linear-gradient(90deg,#cd0103,#f64841);margin-top: 10px;padding: 10px;border-radius: 15px;margin-left: 10px;margin-right: 10px;
    padding: 0rem 10rem;
    font-size: 1rem;
    line-height: 2;
    border-radius: 1.25rem;
}
.tfcb {
    color: #f64841;
    font-weight:700;
}
.nav-top {
    border-bottom: 1px solid #e6e6e6;
    background-image: linear-gradient(90deg,#cd0103,#f64841);
    background-repeat: no-repeat;
    background-position: right;
    background-size: contain;
}
</style><title>FastPay</title></head><body>
<section class="container-fluid">
	<div class="row mcas">
		<div class="col-md-6 col-lg-4 main">
			<div class="row" id="warea"><div class="col-12 m-record"><div class="row nav-top"><div class="col-12"><div class="row"><div class="col-2 xtl"><span onclick="window.location.href='recharge#'" class="nav-back wt" onclick="canrc(),recharge()"></span></div><div class="col-5 pl-0 xtl"><span class="tf-18 tfs-w">Recharge</span></div><div class="col-5 xtr tfcw">₹<span class="tf-20" id="rmt" onclick="copyAMT()"><?php echo $am;?></span></div></div></div></div><div class="row" id="rcpro">
<div class="mt-4 mb-4">Complete Payment Before This Time<span class="btn" id="btn"></span></div><div class="col-12 pt-3 pb-2 justify"><span class="tfw-6">STEP 1:</span> Open online banking or wallet, transfer to the below UPI account.</div><div class="col-12 pt-1 pb-4 xtl"><span class="tfcb tfw-5" id="id"><?php echo $upiid;?></span><span class="copy" data-clipboard-text="<?php echo $upiid;?>" onclick="copyToClipboard()">Copy UPI</span></div><div class="col-12 pb-2 justify"><span class="tfw-6">STEP 2:</span> Update your payment with UPI Ref/UTR details.</div><div class="col-12 pb-2"><div id="appdiv" style="display:;background-image: linear-gradient(90deg,#cd0103,#f64841);margin-top: 10px;padding: 10px;border-radius: 15px;margin-left: 10px;margin-right: 10px;">
					<div style="color:white;font-size: 12px;font-weight: bold;padding: 0px 0px 5px 0px;">Quick Open App After Screenshot</div>
					<div style="flex-direction: flex;display: flex;width: 238px;margin:0 auto;">
						<!-- <div class="appdiv">
							<img src="img/paytm.9f5af82.png" width="90%" onclick="jumpApp('paytmmp://cash_wallet?featuretype=money_transfer$utm_source=upi_mweb')"/>
						</div> --><a href="paytmmp://pay?pa=<?php echo $upiid;?>&pn=FastPay&am=<?php echo $am;?>&cu=INR&tn=TXN<?php echo rand(100000000,9999999999); ?>">
						<div class="zooani appdiv">
							<img style="height:30px;width:30px;" src="https://www.visa-consultant.com/images/icons/online-payment/paytm_wallet.png" width="130%" onclick="jumpApp(2)">
						</div></a><a href="tez://upi/pay?pa=<?php echo $upiid;?>&pn=FastPay&am=<?php echo $am;?>&cu=INR&tn=TXN<?php echo rand(100000000,9999999999); ?>">
						<div class="zooani appdiv" style="margin-left: 10px;">
							<img src="https://static.vecteezy.com/system/resources/previews/017/221/853/original/google-pay-logo-transparent-free-png.png" width="100%" onclick="jumpApp(3)">
						</div></a><a href="phonepe://pay?pa=<?php echo $upiid;?>&pn=FastPay&am=<?php echo $am;?>&cu=INR&tn=TXN<?php echo rand(100000000,9999999999); ?>">
						<div class="zooani appdiv" style="margin-left: 10px;">
							<img src="https://static.wixstatic.com/media/3d28b9_900423991ab640a1b42b5f3405321800~mv2.png/v1/fill/w_300,h_300,al_c,q_85,enc_auto/3d28b9_900423991ab640a1b42b5f3405321800~mv2.png" width="120%" onclick="jumpApp(7)">
						</div></a><a href="upi://pay?pa=<?php echo $upiid;?>&pn=FastPay&am=<?php echo $am;?>&cu=INR&tn=TXN<?php echo rand(100000000,9999999999); ?>">
						<div class="zooani appdiv" style="margin-left: 10px;">
							<img src="https://cdn.iconscout.com/icon/free/png-256/free-bhim-69501.png" width="110%" onclick="jumpApp(4)">
						</div></a>
					</div><style type="text/css">
			body {
			    font-size: 15px;
			    background-image: linear-gradient(to bottom right, #1baff3 0% 65%, #1baff3 99% 100%);/* #e860ff */
			    background-position: center;
			    background-attachment: fixed;
			    margin: 0;
			    box-sizing: border-box;
			    place-items: center;
			}
			button{
				border-radius: 5px;
				border: 0px;
				padding:7px 10px 7px 10px;
				background-color: #1baff3;
				color: white;
			}
			.appdiv{
				border-radius: 10px;
				border: 1px solid #1baff3;
				width: 50px;
				height: 50px;
				text-align: center;
				display: flex;
				justify-content: center;
				align-items: center;
			}
			input:focus{
				outline:none;  
				box-shadow:0 0 0 1.5px #f7941d;
			}
			select:focus{
				outline:none;  
				box-shadow:0 0 0 1.5px #f7941d;
			}
			.appdiv {
    border-radius: 10px;
    border: 3px solid #ffffff;
    background:#fff;
    width: 50px;
    height: 50px;
    text-align: center;
    display: flex;
    justify-content: center;
    align-items: center;
}
			.copy_tip {
				width: 2.5rem !important;
				height: 2.5rem !important;
				right: 1.7rem;
				top: 5.7rem;
				position: absolute;
				-webkit-animation: scaleDraw 3s ease-in-out infinite;
			}
			@keyframes scaleDraw { 
				0%{
					transform: scale(1);
				}
				25%{
					transform:scale(1.2);
				}
				50%{
					transform:scale(1);
				}
				75%{
					transform:scale(1.2);
				}
			}
			.form-control {
    display: block;
    width: 100%;
    padding: 0.375rem 0.75rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #212529;
    background-color: #fff;
    background-clip: padding-box;
    border: 2px solid #ced4da;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    border-radius: 0.375rem;
}
		</style>
					<!-- <div style="margin-top: 5px;"></div>
					<div style="flex-direction: flex;display: flex;width: 238px;margin:0 auto;">
						
						<div class="appdiv">
							<img src="img/amazon.be5477c.png" width="170%" onclick="jumpApp(6)"/>
						</div>
						<div class="appdiv" style="margin-left: 10px;">
							<img src="img/whatsapp.5342f8b.png" width="100%" onclick="jumpApp(5)"/>
						</div>
						<div class="appdiv" style="margin-left: 10px;">
							<img src="img/freecharge.476628d.png" width="90%" onclick="jumpApp(8)"/>
						</div>
					</div> -->
					<div style="clear: both;"></div>
				</div></div><div class="xtc" id="payss"></div></div><div class="col-12 pb-2"><div class="justify"><span class="tfw-6">STEP 3:</span> Please wait, your recharge is being processed.</div></div><form id="payment" method="post" action="">
<div class="upi-payment-step">
			<div class="row mt-4">
				<div class="col-2 xtc pa-0"><img class="zooani" src="https://cdn.pixabay.com/photo/2021/08/07/22/32/verified-6529513_1280.png" height="35"></div>
				<div class="col-10 xtl tfw-7 tf-18 tfcdb pl-0 ">If you have paid, please Submit the UTR/Ref. No</div>
				
				<div class=" pt-2 utr-enter col-12 xtl pb-2 gsbgi" id="utrdiv"><span class="ml-1 tfw-6" ><input type="tel"class="utrfield" id="utrfield" maxlength="12" 
				minlength="12" onKeyPress="if(this.value.length==12) return false;" type="text" id="upi-input" value="" name="utr"  placeholder="  Enter UTR No./Ref No."/>
				
				<input id="text" type="hidden" name="upi" value="<?php echo $upiid;?>"  />
<input id="text" type="hidden" name="amount" value="<?php echo $am;?>"  />
				</span><span class="mt-2 btns copy1 " style="height:44px !important; border-radius:25px !important;border:0px !important;" id="utrsubmit" class="dhkm text-white"  onclick="submit()" ><button class="btn-sub zooani">Submit</span></div></button></div></div><div class="row" id="rfen"><div class="col-12 xtl mt-4 pb-2 tf-12">Ref No. Example</div><div class="col-6 xtc pb-2 pr-1"><img src="https://inoxclub.app/includes/images/small1.png" width="100%" style="border:2px solid #528ff0"></div><div class="col-6 xtc pb-2 pl-1"><img src="https://inoxclub.app/includes/images/small2.png" width="100%" style="border:2px solid #528ff0"></div><div class="col-6 xtc pr-1"><img src="https://inoxclub.app/includes/images/small3.png" width="100%" style="border:2px solid #528ff0"></div><div class="col-6 xtc pl-1"><img src="https://inoxclub.app/includes/images/small4.png" width="100%" style="border:2px solid #528ff0"></div></div></div><div id="dtaod">
<div id="jsjv">
</div>
</div></div>
			<div class="row" id="odrea"></div>
			<div class="row" id="footer"></div>
			<div class="row" id="opffp"></div>
			<div class="row" id="anof"></div>
			<div class="row" id="dta_ref"></div>
		</div>
	</div>
</section><script type="text/javascript">
   let timerOn = true;

function timer(remaining) {
  var m = Math.floor(remaining / 200);
  var s = remaining % 60;
  
  m = m < 10 ? '0' + m : m;
  s = s < 10 ? '0' + s : s;
  document.getElementById('btn').innerHTML = m + ':' + s;
  remaining -= 1;
  
  if(remaining >= 0 && timerOn) {
    setTimeout(function() {
        timer(remaining);
    }, 1000);
    return;
  }

  if(!timerOn) {
    // Do validate stuff here
    return;
  }
  
  // Do timeout stuff here

}
timer(1800);

	function dis(sr){
	    document.getElementById("show-big-img").style.display="block";
	    document.getElementById("big-img").src=sr;
	}
    document.getElementById("close").onclick= function() {myFunction()};

function myFunction() {
   document.getElementById("show-big-img").style.display="none";
}
 function submit(){
    if(document.getElementById("upi-input").value.length<12){
        document.getElementById("error").style.display="";
        setTimeout(function error() {
            document.getElementById("error").style.display="none";
           }, 2000);
        
    }else{
        document.getElementById("payment").submit();
    }
   }
  function copyToClipboard(text) {
var inputc = document.body.appendChild(document.createElement("input"));
inputc.value =document.getElementById("id").innerHTML;
inputc.focus();
inputc.select();
document.execCommand('copy');
inputc.parentNode.removeChild(inputc);
var x = document.getElementById("copied");
        x.className = "show";
        setTimeout(function () { x.className = x.className.replace("show", ""); }, 3000);
}

</script></body></html>