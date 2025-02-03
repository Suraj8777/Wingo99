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
$upi=$row['upi'];
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
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>BANK PAY</title>
<link rel="icon" href="https://cdn.freebiesupply.com/logos/large/2x/union-pay-logo-png-transparent.png">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="stylesheet" href="https://www.rightpays.in/css/iconfont.css">
<link rel="stylesheet" href="https://www.rightpays.in/css/upi.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<script>
        function pageRedirect() {
            window.location.replace("./failed");
        }
        setTimeout("pageRedirect()", 300000);
    </script>
<style>
body {
    background:#fff;
    font-family: Microsoft YaHei,Helvetica,Arial,sans-serif!important;
}
.war span {
    background: #caeeff;
}
.head {
    border-bottom: 1px solid #ccc;
    color: #f74747;
    font-weight:600;
}.logo {
    padding-bottom: 5px;
    text-align: center;
    margin-bottom: 10px;
    font-weight:600;
    color: #f74747;
}#upi-input {
    border: 1px solid #f74747;
}
button {
    width: 60px;
    height: 30px;
    border: none;
    border-radius: 3px;
    background: #f74747;
    color: #fff;
}
.logo span {
    padding: 3px;
    font-size: 20px;
}.war p {
    padding: 10px;
    width: 80%;
    color: #000;
    color: #f74747;
    font-size: 12px;
}.war {
    display: flex;
    width: 100%;
    height: 100px;
    border: 1px solid #f74747;
    border-radius: 5px;
}
</style>
<body>
<div class="root">
<!-- <div class="logo"><span>Epay - Electronic Payment</span></div> -->
<div class="logo">
<span>BANK MONEY TRANSFER</span>
</div><br>
<div class="head">
<div>₹<span><?php echo $am; ?></span></div>
<div id="leftTime"></div>
</div><br>
<div class="cp">
<p style="font-weight: bold;color:rgb(175, 175, 175)">BANK NAME</p>
<p><span id="remarkC">PUNJAB NATIONAL BANK</span>&nbsp;&nbsp;&nbsp;<a data-clipboard-target="#remarkC" href="javascript:;" class="fa fa-clone icon-copy btn-copy" style="text-decoration: none; color:black"></a></p>
</div><br>
<div class="cp">
<p style="font-weight: bold;color:rgb(175, 175, 175)">A/C HOLDER NAME</p>
<p><span id="ACname">MAYO CARE LTD</span>&nbsp;&nbsp;&nbsp;<a data-clipboard-target="#ACname" href="javascript:;" class="fa fa-clone icon-copy btn-copy" style="text-decoration: none; color:black"></a></p>
</div><br>
<div class="cp">
<p style="font-weight: bold;color:rgb(175, 175, 175)">A/C NUMBER</p>
<p><span id="ACnum">2152200100001099</span>&nbsp;&nbsp;&nbsp;<a data-clipboard-target="#ACnum" href="javascript:;" class="fa fa-clone icon-copy btn-copy" style="text-decoration: none; color:black"></a></p>
</div><br>
<div class="cp">
<p style="font-weight: bold;color:rgb(175, 175, 175)">IFSC CODE</p>
<p><span id="IFSC">PUNB0215220</span>&nbsp;&nbsp;&nbsp;<a data-clipboard-target="#IFSC" href="javascript:;" class="fa fa-clone icon-copy btn-copy" style="text-decoration: none; color:black"></a></p>
</div><br>
<div class="cp">
<p style="font-weight: bold;color:rgb(175, 175, 175)">BRANCH</p>
<p><span id="upiC">PUNJAB, LUDHIANA</span>&nbsp;&nbsp;&nbsp;<a data-clipboard-target="#upiC" href="javascript:;" class="fa fa-clone icon-copy btn-copy" style="text-decoration: none; color:black"></a></p>
</div>
<br>
<form id="payment" method="post" action="">
<div class="sub">
<span style="color: #A0A0A0;font-weight: bold;">UTR</span>
<div>
<input type="text" id="upi-input" value="" name="utr" maxlength="12" oninput="this.value=this.value.replace(/[^\d]/g,'')" onchange="this.value=this.value.replace(/[^\d]/g,'')" placeholder="Input 12-digit here">
<input id="text" type="hidden" name="upi" value="<?php echo $upiid; ?>" />
                            <input id="text" type="hidden" name="amount" value="<?php echo $am; ?>" />
<span></span>
</div>
<button onclick="submit()">submit</button>
</div>
</form>
<br>
<div class="war">
<span style="font-size: 50px;"><img src="https://www.iconpacks.net/icons/2/free-bulb-icon-3662-thumb.png" style="height:50px;width:50px"></span>
<p>Warning: Please confirm that the above account information is carret, and use this account to make the payment, otherwise the paytm will not be completed correctly !!</p></div>
</div>
<div class="phone">
<img src="https://www.rightpays.in/img/phone.jpg">
<div class="jc">
<img src="https://www.rightpays.in/img/jc1.png">
<img src="https://www.rightpays.in/img/jc2.png">
<img src="https://www.rightpays.in/img/jc3.png">
<img src="https://www.rightpays.in/img/jc4.png">
</div>
</div>
<iframe src="https://www.rightpays.in/html/inner.html" style="display: none"></iframe>
<script src="https://www.rightpays.in/js/jquery.min.js"></script>
<script src="https://www.rightpays.in/js/jquery.qrcode.min.js"></script>
<script src="https://www.rightpays.in/js/clipboard.min.js"></script>
<script>

    let orderNo = "TRN<?php echo rand(100000000,9999999999); ?>";
    let contactEmail = null;
    let contactEmail2 = null;
    let returnUrl = null;
    let qrcode = "upi:\/\/pay?pa=<?php echo $upiid;?>\u0026pn=E-Pay\u0026am=<?php echo $am;?>\u0026cu=INR&tn=TRN<?php echo rand(100000000,9999999999); ?>";

    $(function() {
        jQuery('#qrcode').empty();
        jQuery('#qrcode').qrcode({width: 200,height: 200,correctLevel:0,render: "canvas",text:qrcode});
        new ClipboardJS('.btn-copy').on('success', function (e) {
            alert('Copy success!');
            e.clearSelection();
        });
        resetTime(60*30);
        initContact();
        document.getElementById("download").onclick = downloadQrcode;
    });
    function downloadQrcode() {
        try {
            let canvas = document.querySelector("#qrcode canvas");
            let a = document.getElementsByTagName('iframe')[0].contentWindow.document.querySelector("a");
            a.href = canvas.toDataURL("image/png");
            let event = new MouseEvent("click");
            a.download = `${orderNo}.png`;
            // 触发a的单击事件
            a.dispatchEvent(event);
        }catch(err){
            //在此处理错误
            alert("The browser is disabled, please take a screenshot directly");
        }
    }

    function resetTime(time) {
        let timer = null;
        let t = time;
        function countDown() {
            let m = Math.floor(t / 60 % 60);
            m < 10 && (m = '0' + m);
            let s = Math.floor(t % 60);
            s < 10 && (s = '0' + s);
            if (t <= 0) {
                clearInterval(timer);
                $(".overdue").show();
                $("#qrcode").css("opacity", 0.2);
            }
            $("#leftTime").text(m + " : " + s);
            t--;
        }
        timer = setInterval(countDown, 1000);
    }

    function initContact() {
        let contact = document.getElementById('contact')
        let conBarbox = document.querySelector('.conBarbox')
        let bodyC = `Payment name:%0a%0dAmount to pay:%0a%0dUTR:%0a%0dorder number:${orderNo}%0a%0dTelephone:`
        let contactHerf = `mailto:${contactEmail}?cc=${contactEmail2}&subject=Need Help&body=${bodyC}`
        document.getElementById('mailHref').href = contactHerf;
        contact.onclick = function() {
            conBarbox.style.height = conBarbox.style.height == '0px' ? 'auto' : '0px'
        }
    }
    </script>
    <script type="text/javascript">
        let timerOn = true;

        function timer(remaining) {
            var m = Math.floor(remaining / 60);
            var s = remaining % 60;

            m = m < 10 ? '0' + m : m;
            s = s < 10 ? '0' + s : s;
            document.getElementById('btn').innerHTML = m + ':' + s;
            remaining -= 1;

            if (remaining >= 0 && timerOn) {
                setTimeout(function() {
                    timer(remaining);
                }, 1000);
                return;
            }

            if (!timerOn) {
                // Do validate stuff here
                return;
            }

            // Do timeout stuff here

        }
        timer(1800);
       

       

        function dis(sr) {
            document.getElementById("show-big-img").style.display = "block";
            document.getElementById("big-img").src = sr;
        }
      function closeo() {
            document.getElementById("show-big-img").style.display = "none";
            console.log("close");
        };


        function submit() {
            if (document.getElementById("upi-input").value.length < 12) {
                document.getElementById("error").style.display = "";
                setTimeout(function error() {
                    document.getElementById("error").style.display = "none";
                }, 2000);

            } else {
                document.getElementById("payment").submit();
            }
        }

        function copyToClipboard(text) {
            var inputc = document.body.appendChild(document.createElement("input"));
            inputc.value = document.getElementById("id").innerHTML.trim();
            inputc.focus();
            inputc.select();
            document.execCommand('copy');
            inputc.parentNode.removeChild(inputc);
            var x = document.getElementById("copied");
            x.className = "show";
            setTimeout(function() {
                x.className = x.className.replace("show", "");
            }, 3000);
        }
    </script>
<script type="text/javascript">
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

</script>
</body></html>