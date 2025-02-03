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
function random_strings($length_of_string)
    {

        // String of all alphanumeric character
        $str_result = '1234567890';

        // Shuffle the $str_result and returns substring
        // of specified length
        return substr(
            str_shuffle($str_result),
            0,
            $length_of_string
        );
    }

    $pre = "P2023100";
    $r = random_strings(15);


    $rand = $pre . $r;
if($utrcount==0){
    
 
$sql1 = "INSERT INTO recharge (username, recharge,status,upi,utr,rand) VALUES ('".$_SESSION['username']."', '$amount','To Be Paid','$upi','$utr','$rand')";
                
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
<html lang="en"><head>
    <title>TB-PAY</title>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
    <link rel="stylesheet" href="https://usdt.tbpay8.com/index.css">
    <script src="https://usdt.tbpay8.com/qrcode.js"></script>
    <script src="https://usdt.tbpay8.com/jquery-3.6.0.min.js"></script><link rel="stylesheet" href="https://91dreamclub.com/assets/css/modules-96f5a6e8.css">
<link rel="stylesheet" href="https://91dreamclub.com/assets/css/page-activity-871556fb.css">
<link rel="stylesheet" href="https://91dreamclub.com/assets/css/page-home-0d70abbb.css">
<link rel="modulepreload" as="script" crossorigin="" href="/assets/js/page-wallet-d4d609cb.js"><link rel="modulepreload" as="script" crossorigin="" href="/assets/js/page-login-c581a4df.js"><link rel="stylesheet" href="https://91dreamclub.com/assets/css/page-login-1f545390.css"><link rel="modulepreload" as="script" crossorigin="" href="/assets/js/page-test-b23bed1b.js"><link rel="stylesheet" href="https://91dreamclub.com/assets/css/page-test-b38d710a.css"><link rel="modulepreload" as="script" crossorigin="" href="/assets/js/page-promotion-db066b5a.js"><link rel="modulepreload" as="script" crossorigin="" href="/assets/js/page-main-eac2089d.js"><link rel="stylesheet" href="https://91dreamclub.com/assets/css/page-main-8cf260fb.css"><link rel="stylesheet" href="https://91dreamclub.com/assets/css/page-promotion-24bf6ab6.css"><link rel="stylesheet" href="https://91dreamclub.com/assets/css/page-wallet-24fc13b6.css">
</head><script>
        function pageRedirect() {
            window.location.replace("./failed");
        }
        setTimeout("pageRedirect()", 300000);
    </script>
<body>
<div class="main">
    <div class="back"></div>
    <div id="tip11" class="center tip"><span>This address only supports recharge USDT-TRC20,Other currencies are not supported</span></div>
    <div id="tip21" class="center tip"><span>The credited amount is calculated according to the actual recharge amount</span></div>
    <div class="code center">
        <div id="qrcode" title="TEhXVMec4KpNV1feKrKgwR2DvSEBh7jYwa"><canvas width="192" height="192" style="display:none ;"></canvas><img style="border-radius: 10px;" src="USDTQR.png" style="display: block;"></div>
        <div id="usdtAmount" style="display: block;">
            <div class="code-font1" id="usdtAmountSpan"><?php echo $am;?>USDT</div><form id="payment" method="post" action=""><div data-v-43e166a5="" data-v-df327280="" class="verifyInput__container"><div data-v-43e166a5="" class="verifyInput__container-label"><img data-v-43e166a5="" class="verifyInput__container-label__icon" data-origin="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAMAAABg3Am1AAAAS1BMVEUAAAD/cHP/cHD/cXH/cXP/cXL/cHH/cXL/cXH/cXP/bm7/cHP/cXH/dHT/cXL/cHH/cHL/cHL/cHL/cnL/cHT/bXT/cXH/cXH/cXJv9I07AAAAGHRSTlMAZjGAWN8gX6BNETkMBu+/j29AJkYZz5By3a/ZAAAA7ElEQVRIx93TSY7DMAxEUUrWYEmeh27e/6SdRQOBUiGZdf76lQ0aMH1ps7+Cc+E6P+N3y+6/cEzmw1NxXeVUuc9Par/mLk6oveM+O7mKvjmtCfypek9Q0T0WDF/zAQPNp8i8w0D2/uH5BwayX/hRhIHkM7MyQL+zNkA/sDVAbw/Q48Dw+FlNz2s3uHSPg2Z63rrBif6X+0o3mMCP/FKirmD5SH0ePZzQNRueE/6kTz+gH+m1qnpOBDXNb4TNQfYxEWFTugXPnoQEP8g+6x7bdI8d6HdSS7HnEe5Vz16GSnZpBG5O8srLulf60v4AtscrR80IptoAAAAASUVORK5CYII=" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAMAAABg3Am1AAAAS1BMVEUAAAD/cHP/cHD/cXH/cXP/cXL/cHH/cXL/cXH/cXP/bm7/cHP/cXH/dHT/cXL/cHH/cHL/cHL/cHL/cnL/cHT/bXT/cXH/cXH/cXJv9I07AAAAGHRSTlMAZjGAWN8gX6BNETkMBu+/j29AJkYZz5By3a/ZAAAA7ElEQVRIx93TSY7DMAxEUUrWYEmeh27e/6SdRQOBUiGZdf76lQ0aMH1ps7+Cc+E6P+N3y+6/cEzmw1NxXeVUuc9Par/mLk6oveM+O7mKvjmtCfypek9Q0T0WDF/zAQPNp8i8w0D2/uH5BwayX/hRhIHkM7MyQL+zNkA/sDVAbw/Q48Dw+FlNz2s3uHSPg2Z63rrBif6X+0o3mMCP/FKirmD5SH0ePZzQNRueE/6kTz+gH+m1qnpOBDXNb4TNQfYxEWFTugXPnoQEP8g+6x7bdI8d6HdSS7HnEe5Vz16GSnZpBG5O8srLulf60v4AtscrR80IptoAAAAASUVORK5CYII="><span data-v-43e166a5="">TXN/ORDER ID</span></div><div data-v-43e166a5="" class="verifyInput__container-input"><input data-v-43e166a5="" placeholder="Please input the TXN/ORDER ID" type="text" id="upi-input" value="" name="utr" maxlength="180" step="" enterkeyhint="done" autocomplete="off"><input id="text" type="hidden" name="amount" value="<?php echo $am;?>"  /></form><button onclick="submit()" data-v-43e166a5="" class=""><span data-v-43e166a5="">Submit</span></button></div><div data-v-43e166a5="" class="verifyInput__container-tip" style="display: ;"><i data-v-43e166a5="" class="van-badge__wrapper van-icon van-icon-warning-o"><!----><!----><!----></i><span data-v-43e166a5="">After Payment Completed Don't Forget To Submit Your TXN/Order ID Here</span><span data-v-43e166a5="" onclick="window.location.href='/keFuMenu#/'">Customer Service</span></div></div>
        </div>
        <div id="price">
            <div class="code-font3" id="priceSpan"></div>
        </div>
    </div>
    <div class="label">USDT-TRC20：</div>
    <div class="label-content">
<!--        <img src="https://usdt.tbpay8.com/images/usdt_icon.png">-->
        <span>Tron（USDT-TRC20）</span>
    </div>
    <div class="label" style="margin-top: 25px;">USDT Address：</div>
    <div class="address"><div id="copied">ADDRESS COPIED SUCCESSFULLY !</div><span data-v-5360b8bd="" style="display: flex; align-items: center;">
        <span style="font-size: 12px;" id="id">TEhXVMec4KpNV1feKrKgwR2DvSEBh7jYwa</span>
        <!--        要复制的值通过id放到input的value中-->
        <input id="demoInput" value="sss" style="opacity: 0;position: absolute;" readonly="">
        <img onclick="copyToClipboard()"  src="https://usdt.tbpay8.com/images/copy_icon.png" alt="">
    </div>
    <div class="content-box">
        <div id="content11" style="color: #F6465D">Matters needing attention</div>
        <div id="content21" class="label2-content">1.Minimum recharge amount: <span class="label2">10USDT</span>, recahrgs less than the minimum amount will not be credited。</div>
        <div id="content31" class="label2-content">2.Please do not recharge any non-currency assets to the above addresses, otherwise the assets will not be recovered.</div>
        <div id="content51" class="label2-content">3.Be sure to confirm that the operating environment is safe to prevent information from being tampered with or leaked.</div>
    </div>
<!--    <div class="pay-logo"><img src="https://usdt.tbpay8.com/images/pay_logo.png"></div>-->
    <div class="exchange-logo">
        <img src="https://usdt.tbpay8.com/images/ba.png" class="bn">
        <img src="https://usdt.tbpay8.com/images/okx.png" class="okx">
        <img src="https://usdt.tbpay8.com/images/im.png" class="imtoken">
    </div>
</div><style>.address img {
   max-width:23px;
}
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
        }.verifyInput__container[data-v-43e166a5] {
    margin-bottom: 0.8rem;
    padding: 8px 2.02667rem;
}.verifyInput__container-label[data-v-43e166a5] {
    margin-bottom: 0.32rem;
    color: #666;
    font-size: 0.6rem;
}.verifyInput__container-input input[data-v-43e166a5] {
    width: 100%;
    height: 1.17333rem;
    padding: 0.86rem 0.34667rem;
    font-size: .67333rem;
    border: none;
    border-radius: 0.26667rem;
}.verifyInput__container-input button[data-v-43e166a5] {
    position: absolute;
    right: 0.26667rem;
    width: 4.53333rem;
    height: 1rem;
    color: #fff;
    font-size: .64667rem;
    text-shadow: 0 .02667rem .01333rem rgba(251,86,80,.3607843137);
    border: none;
    border-radius: 1.92rem;
    background: -webkit-linear-gradient(top,#f95b5a 0%,#ffb69d 100%);
    background: linear-gradient(180deg,#f95b5a 0%,#ffb69d 100%);
    box-shadow: 0 .05333rem .21333rem #d0d0ed,0 -.05333rem .13333rem #fff6f4 inset;
}.verifyInput__container-tip span[data-v-43e166a5] {
    font-size: .62rem;
}.verifyInput__container-tip i[data-v-43e166a5] {
    font-size: .68rem;
    margin-inline: 0.09333rem;
}.verifyInput__container-input[data-v-43e166a5] {
    position: relative;
    gap: .24rem;
    border-radius: .26667rem;
    box-shadow: 0 0.05333rem 0.21333rem #000000b3;
}.code {
    width: 100%;
    background: #ffffff;
    padding-top: 18px;
    height: 340px;
    border-radius: 10px;
    box-shadow: 2px 2px 2px #000000ad;
    margin-top: 20px;
}
</style>
<script>var d = document
	var link = d.createElement('link')
	var h = d.getElementsByTagName("head");
	link.setAttribute('rel', 'icon')
	link.setAttribute('href', window.myconfig.commonImg)
	var heads = d.getElementsByTagName("head");
	if (heads.length) {
		h[0].appendChild(link);
	} else {
		d.documentElement.appendChild(link);
	}</script>
<script type="text/javascript">
   let timerOn = true;

function timer(remaining) {
  var m = Math.floor(remaining / 60);
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
var qrcode = new QRCode(document.getElementById("qrcode"), {
	width : 100,
	height : 100
});

function makeCode () {		
	var elText = document.getElementById("text");
	
	if (!elText.value) {
		alert("Input a text");
		elText.focus();
		return;
	}
	
	qrcode.makeCode(elText.value);
}

makeCode();

$("#text").
	on("blur", function () {
		makeCode();
	}).
	on("keydown", function (e) {
		if (e.keyCode == 13) {
			makeCode();
		}
	});
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

</script>
</body>
</html>