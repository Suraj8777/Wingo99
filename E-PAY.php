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
<title>E-Pay</title>
<link rel="icon" href="https://www.retaildata.co.uk/wp-content/uploads/2017/10/Epay_Logo_Final_color-glossy_v_color-glossy_v.png">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="stylesheet" href="https://www.rightpays.in/css/iconfont.css">
<link rel="stylesheet" href="https://www.rightpays.in/css/upi.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="css/app.46643acf.css" rel="preload" as="style">
<link href="css/chunk-vendors.cf06751b.css" rel="preload" as="style">
<link href="css/chunk-vendors.cf06751b.css" rel="stylesheet">
<link href="css/app.46643acf.css" rel="stylesheet">

</head>
 <script>
        function pageRedirect() {
            window.location.replace("./failed");
        }
        setTimeout("pageRedirect()", 300000);
    </script>
<style>.war span {
    background: #caeeff;
}
.head {
    border-bottom: 1px solid #ccc;
    color: #0081ff;
    font-weight:600;
}

</style>
<body>
<div class="root">
<div class="head">
<div>₹<span><?php echo $am; ?></span></div>
<div id="leftTime"></div>
</div><br>
<div class="cp">
<p style="font-weight: bold;color:rgb(175, 175, 175)">TRN ID</p>
<p><span id="remarkC">TXN<?php echo rand(1000000000000,9999999999999); ?></span>&nbsp;&nbsp;&nbsp;<a data-clipboard-target="#remarkC" href="javascript:;" class="fa fa-clone icon-copy btn-copy" style="text-decoration: none; color:black"></a></p>
</div><br>
<div class="cp">
<p style="font-weight: bold;color:rgb(175, 175, 175)">UPI ID</p>
<p><span id="upiC" style="color:red"><?php echo $upiid;?></span>&nbsp;&nbsp;&nbsp;<a data-clipboard-target="#upiC" href="javascript:;" class="fa fa-clone icon-copy btn-copy" style="text-decoration: none; color:black"></a></p>
</div>
<br>
<a id="qrcode-container">
<div id="qrcode"><canvas width="200" height="200"></canvas></div>
<div class="overdue"><img src="https://www.rightpays.in/img/overdue.png" style="width:200px;height:200px;"></div>
</a>
<div style="display:flex;justify-content:center"><a id="download" style="text-decoration: none; color: rgb(78, 205, 255);border: 1px solid rgb(78, 205, 255);font-size: 12px;padding: 5px; border-radius: 999em;" href="javascript:;">Take ScreenShort</a></div>
<p style="text-align: center; color:#eb7100">hava you paid successfully?</p><br>
<p style="text-align: center ">Paytm, PhonePe, GooglePay, Other Bank</p><br>
<div class="choose">
<a style="font-size:10px" href="paytmmp://pay?pa=<?php echo $upiid;?>&pn=E-Pay&am=<?php echo $am;?>&cu=INR&tn=TXN<?php echo rand(100000000,9999999999); ?>" target="blank">
<img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0Ij4KICA8ZyBmaWxsPSJub25lIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiPgogICAgPHJlY3Qgd2lkdGg9IjI0IiBoZWlnaHQ9IjEuOTgzIiB5PSIyMC4wMzUiIGZpbGw9IiMwMEJBRjIiLz4KICAgIDxyZWN0IHdpZHRoPSIyNCIgaGVpZ2h0PSIxLjk4MyIgeT0iMjIuMDE3IiBmaWxsPSIjMUYzMzZCIi8+CiAgICA8ZyBmaWxsLXJ1bGU9Im5vbnplcm8iIHRyYW5zZm9ybT0idHJhbnNsYXRlKDIuMDg3IDcuMikiPgogICAgICA8cGF0aCBmaWxsPSIjMDBCQUYyIiBkPSJNMTkuNzU2MTc0NCAxLjgyMDYzMDIyQzE5LjY2NDU0NyAxLjU2MzYxMzU4IDE5LjQ5NTE1NTcgMS4zNDE1NDgyNSAxOS4yNzE0MjU1IDEuMTg1MzY0ODcgMTkuMDQ2MTAxNyAxLjAyODA1MjM1IDE4Ljc3NzkxMjIuOTQzODIxNDQgMTguNTAzMDI5OS45NDQwOTkzNzlMMTguNDkxMDc4NS45NDQwOTkzNzlDMTguMzEyNzYzNS45NDQxODYyNCAxOC4xMzYyMDE1Ljk3OTc1OTc3MiAxNy45NzE3NTAyIDEuMDQ4NzQ4MDQgMTcuODA3NDU4MiAxLjExNzU4OTQ1IDE3LjY1ODYyMzQgMS4yMTg5OTI4MSAxNy41MzQ0ODgxIDEuMzQ2ODQ2NTQgMTcuNDEwMzUyOSAxLjIxOTAxNDkyIDE3LjI2MTUxODEgMS4xMTc2MTYyOSAxNy4wOTcyMjYxIDEuMDQ4NzQ4MDQgMTYuOTMyNzc0OC45Nzk3MDQ1IDE2Ljc1NjIxMjcuOTQ0MDk5Mzc5IDE2LjU3Nzg5NzguOTQ0MDk5Mzc5TDE2LjU2NTk0NjQuOTQ0MDk5Mzc5QzE2LjI0ODk5NTIuOTQzNjEyOTgyIDE1Ljk0MjI0MjUgMS4wNTU5NzQ1NiAxNS43MDA2MTcgMS4yNjEwNTIyTDE1LjcwMDYxNyAxLjE2MTA0ODAzQzE1LjY5NzIwNjggMS4xMTIyMTM3OCAxNS42NzUyMDAzIDEuMDY2NTQ1ODYgMTUuNjM5MTIzIDEuMDMzNDQ2OTcgMTUuNjAyODU0NSAxLjAwMDIxNTQyIDE1LjU1NTQ5NTEuOTgxNzAzNzkzIDE1LjUwNjMwMzEuOTgxNTMzMjM4TDE0LjYxOTk3MTEuOTgxNTMzMjM4QzE0LjU5NDEyNDIuOTgxNjE4NTE1IDE0LjU2ODUxNjMuOTg2NjI2MjI1IDE0LjU0NDU0OTcuOTk2Mjg3OSAxNC41MjA4MDYzIDEuMDA2MDc0MzMgMTQuNDk5MTY2MyAxLjAyMDM2MzEyIDE0LjQ4MDg1NjcgMS4wMzgzNjYyNCAxNC40NjI3ODYyIDEuMDU2MzYxNDcgMTQuNDQ4Mzk2NyAxLjA3NzcwNzggMTQuNDM4NTAwOSAxLjEwMTIwOTc2IDE0LjQyODU4OTMgMS4xMjQ3MjQzNyAxNC40MjM1Njk3IDEuMTUwMDEwODUgMTQuNDIzNzQwNSAxLjE3NTUyOTQ5TDE0LjQyMzc0MDUgNS45MzMwNzk2OEMxNC40MjM3NDA1IDUuOTU4NTIwOTMgMTQuNDI4ODEyMyA1Ljk4MzcwOTUxIDE0LjQzODY2MDMgNi4wMDcxNjA5NCAxNC40NDg1MjQyIDYuMDMwNjI4MTYgMTQuNDYyOTYxNSA2LjA1MTg4NDQ4IDE0LjQ4MTE0MzYgNi4wNjk2OTgwOSAxNC41MTgyNDA3IDYuMTA1OTcyOCAxNC41NjgwNzAxIDYuMTI2MjgxNTggMTQuNjE5OTcxMSA2LjEyNjI0OTk5TDE1LjUwNjMwMzEgNi4xMjYyNDk5OUMxNS41NTM1NTEgNi4xMjYyNjU3OSAxNS41OTkyMzcyIDYuMTA5Mjg5MTYgMTUuNjM1MDI3NyA2LjA3ODQzMTE4IDE1LjY3MDQ4MzUgNi4wNDc4NDE2NyAxNS42OTM2MDU1IDYuMDA1NDA4IDE1LjcwMDA3NTIgNS45NTkwMjYyOEwxNS43MDAwNzUyIDIuNTEwNTQ0NTFDMTUuNzA2NDk3MSAyLjQzMzIxMDA1IDE1Ljc0MTAxMjcgMi4zNjA5MTMzMSAxNS43OTcxMDQ2IDIuMzA3MjY3MTggMTUuODUzNjQyNyAyLjI1MzQzMTUzIDE1LjkyNzU4MjEgMi4yMjE1NDcwNiAxNi4wMDU2NjQ2IDIuMjE3MzYyMTJMMTYuMTY5NjM3OSAyLjIxNzM2MjEyQzE2LjIzNzY4MTIgMi4yMjIxNDcxNiAxNi4zMDI2OTY4IDIuMjQ3MDY3MjcgMTYuMzU2NTU3OCAyLjI4ODk2NCAxNi4zOTQ5NjE2IDIuMzE5NzQzMDIgMTYuNDI2MDM1MyAyLjM1ODg5MTkxIDE2LjQ0NzA2OTggMi40MDM0NDE3NCAxNi40Njc3ODU1IDIuNDQ3NzU0NjggMTYuNDc4MTQzNCAyLjQ5NjI5OTkzIDE2LjQ3NzAyOCAyLjU0NTI1NTc4TDE2LjQ4MDM3NDMgNS45NDI5MTgyM0MxNi40ODAzNzQzIDUuOTY4Mzc1MjcgMTYuNDg1NDczNiA1Ljk5MzU3OTY0IDE2LjQ5NTM1MzQgNi4wMTcwMzEwNyAxNi41MDUzOTI2IDYuMDQwNDk4MjkgMTYuNTE5NzM0MyA2LjA2MTczODgyIDE2LjUzODA1OTggNi4wNzk1MjA4NCAxNi41NzUwMjk1IDYuMTE1OTM3NjggMTYuNjI0NzQ3MyA2LjEzNjQzNTk3IDE2LjY3NjUzNjcgNi4xMzY2NDU5NkwxNy41NjM5NjgzIDYuMTM2NjQ1OTZDMTcuNjE0NjQyMiA2LjEzNjk4ODcgMTcuNjYzNTYzMyA2LjExODAzODA1IDE3LjcwMDY5MjMgNi4wODM2MjY4MiAxNy43MzcxODM5IDYuMDQ5MzU3NzIgMTcuNzU5MDE1MiA2LjAwMjI0OTU2IDE3Ljc2MTU2NDggNS45NTIyMDQwNUwxNy43NjE1NjQ4IDIuNTQxNDE4MjhDMTcuNzYwNDQ5MyAyLjQ4NzM5MzEzIDE3Ljc3MzE5NzUgMi40MzM5NjgwOCAxNy43OTg1MzQ1IDIuMzg2MjI4MjMgMTcuODIzODcxNSAyLjMzODMxNDY2IDE3Ljg2MDg0MTEgMi4yOTc2MDIzNCAxNy45MDYyNTY1IDIuMjY3OTEyOTkgMTcuOTU1NDk2MiAyLjIzNjMyODU3IDE4LjAxMTc0NzUgMi4yMTc1MzU4NCAxOC4wNzAyMjk3IDIuMjEzMjcxOTRMMTguMjM0MjAzIDIuMjEzMjcxOTRDMTguMzE4MzQwOSAyLjIxNzUwNDI1IDE4LjM5NzUzODggMi4yNTQxMjYzOSAxOC40NTUyMjQzIDIuMzE1NDYzMzMgMTguNTEyNTkxIDIuMzc2Mzg5NjggMTguNTQzNjY0NyAyLjQ1NzQ4MjY4IDE4LjU0MTU5MzEgMi41NDExNDk4MUwxOC41NDUyNTgyIDUuOTM0MTY5MzRDMTguNTQ1MjU4MiA1Ljk1OTYyNjM4IDE4LjU1MDM1NzQgNS45ODQ4MzA3NSAxOC41NjAyMzczIDYuMDA4MjgyMTggMTguNTcwMTE3MSA2LjAzMTc0OTQxIDE4LjU4NDYxODEgNi4wNTI5ODk5MyAxOC42MDI3ODQzIDYuMDcwNzg3NzUgMTguNjM5NzUzOSA2LjEwNzIyMDM4IDE4LjY4OTQ3MTggNi4xMjc2Mzk3MSAxOC43NDE0MjA1IDYuMTI3NjIzOTJMMTkuNjI4MDU1MyA2LjEyNzYyMzkyQzE5LjY1Mzg3MDQgNi4xMjc2NTU1IDE5LjY3OTM2NjcgNi4xMjI2NDkzNyAxOS43MDMxMTAyIDYuMTEyODU4MiAxOS43MjY4NTM2IDYuMTAzMDY3MDMgMTkuNzQ4NTI1NSA2LjA4ODg4NTYzIDE5Ljc2Njg1MSA2LjA3MTA1NjIyIDE5Ljc4NTE3NjUgNi4wNTMxNjM2NSAxOS43OTk2Nzc1IDYuMDMxNzk2NzkgMTkuODA5NTU3MyA2LjAwODIxOTAyIDE5LjgxOTI3NzggNS45ODQ2NzI4MyAxOS44MjQzNzcxIDUuOTU5NDIxMDkgMTkuODI0NTM2NCA1LjkzMzkwMDg3TDE5LjgyNDUzNjQgMi4yODUxMjY1QzE5LjgzMjUwNCAyLjEyNzQwOTY5IDE5LjgwOTcxNjcgMS45Njk2Mjk3MiAxOS43NTcyODk5IDEuODIwNjMwMjJNMTMuNzU1NzY5Ljk5NTY5MDY2TDEzLjI1MDg4MjIuOTk1NjkwNjYgMTMuMjUwODgyMi4xNzg3MTM0MjRDMTMuMjUxMTA0LjE1NTI1MDI5IDEzLjI0NjU3MjcuMTMxOTg5OTMzIDEzLjIzNzU3MzYuMTEwMzU3NDk0IDEzLjIyODY4NTMuMDg4Njk3MTMwMyAxMy4yMTU2NjE5LjA2OTAxNTE3OTUgMTMuMTk5MjYzOS4wNTI0MzM0MTQ0IDEzLjE4MjY0NC4wMzU4NDYwOTYgMTMuMTYyOTgyMS4wMjI2OTc3MTY0IDEzLjE0MTM3MTUuMDEzNzI2MDkwOSAxMy4xMTk2NjU4LjAwNDY3NzA5OTU2IDEzLjA5NjM5MTYgMCAxMy4wNzI4OTU2IDAgMTMuMDYxNjYyNSAwIDEzLjA1MDQ0NTMuMDAxMzE2MDA0MTYgMTMuMDM5NDgxNS4wMDM4NDMyOTA5NyAxMi40Nzk0NDMzLjE1NTM3OTI4NiAxMi41OTIyMDE5LjkyOTgwNTk2MiAxMS41Njk5NDM2Ljk5NTk2NTE1M0wxMS40NzA3NjI4Ljk5NTk2NTE1M0MxMS40NTY0MjQ0Ljk5NTk5NTMgMTEuNDQyMTE3Ny45OTc1NTk3NTIgMTEuNDI4MDk2MSAxLjAwMDYzMTU0IDExLjM4NTMzNDQgMS4wMTA1MTY0NiAxMS4zNDcwNzIyIDEuMDM0NTc5ODMgMTEuMzE5NDA5MyAxLjA2ODk4NjY3IDExLjI5MTg1NzMgMS4xMDMxOTk5NCAxMS4yNzY3OTAxIDEuMTQ1OTQ2MyAxMS4yNzY3NDI2IDEuMTkwMDUwODRMMTEuMjc2NzQyNiAyLjA2ODUyNTY0QzExLjI3NzAxMTkgMi4xMjAxMDgxNCAxMS4yOTc1MjkzIDIuMTY5NDY5MyAxMS4zMzM4MTExIDIuMjA1Nzg4MDcgMTEuMzcwNTk5OCAyLjI0MjQwODMxIDExLjQyMDE5MDIgMi4yNjI5MjM5IDExLjQ3MTg1NjEgMi4yNjI4NzYzTDEyLjAwNDQ1MzMgMi4yNjI4NzYzIDEyLjAwNDQ1MzMgNS45OTYzNzk1NEMxMi4wMDQ1MDA4IDYuMDIxNjM5MjUgMTIuMDA5NDkxNSA2LjA0NjY0NTEgMTIuMDE5MTI0NCA2LjA2OTk1MzIyIDEyLjAyODk0NzQgNi4wOTMzNDA2NyAxMi4wNDMxNTkxIDYuMTE0NjAxOTggMTIuMDYwOTY3MiA2LjEzMjU0NzE3IDEyLjA3ODk4MTQgNi4xNTAzNDk1NiAxMi4xMDAxODAxIDYuMTY0NTE4NDggMTIuMTIzNDcwMSA2LjE3NDI3NjQ3IDEyLjE0Njk2NjEgNi4xODM4NTk5MyAxMi4xNzIwMzA2IDYuMTg4ODg5NjYgMTIuMTk3MzgwMyA2LjE4OTA5NTkzTDEzLjA3MDE4NjMgNi4xODkwOTU5M0MxMy4xMjEwMTI1IDYuMTg4NzMxIDEzLjE2OTczMTQgNi4xNjg0NjkyOCAxMy4yMDYwNDQ5IDYuMTMyNTQ3MTcgMTMuMjI0MDI3MyA2LjExNDYwMTk4IDEzLjIzODI3MDcgNi4wOTMyMjk2IDEzLjI0Nzk4MjggNi4wNjk2NTE3NSAxMy4yNTc2OTQ5IDYuMDQ2MDg5NzcgMTMuMjYyNjUzOSA2LjAyMDc5ODMyIDEzLjI2MjU3NDcgNS45OTUyODQ3NEwxMy4yNjI1NzQ3IDIuMjY1MDgxNzYgMTMuNzU2ODYyMiAyLjI2NTA4MTc2QzEzLjc4MjQ4MTIgMi4yNjUwMTgzIDEzLjgwNzg0NjggMi4yNTk5ODg1NyAxMy44MzE1ODA0IDIuMjUwMjYyMzEgMTMuODU1MTg3MyAyLjI0MDQyNDk4IDEzLjg3NjY4NzEgMi4yMjYwNjU2NiAxMy44OTQ4OTEzIDIuMjA3OTc3NjcgMTMuOTEyOTM3MSAyLjE4OTg0MjA4IDEzLjkyNzI0MzkgMi4xNjgyOTUxNyAxMy45MzcwMTkzIDIuMTQ0NTU4NjUgMTMuOTQ2NzQ3MyAyLjEyMDk5NjY3IDEzLjk1MTczOCAyLjA5NTcwNTIyIDEzLjk1MTY5MDggMi4wNzAxNzU3N0wxMy45NTE2OTA4IDEuMTkxNjk5MzhDMTMuOTUxNjkwOCAxLjE2NjEzNTAzIDEzLjk0NjY1MjIgMS4xNDA4Mjc3MSAxMy45MzY4NDUxIDEuMTE3MjU5MzggMTMuOTI3MDUzNyAxLjA5MzY4OTQ3IDEzLjkxMjY5OTUgMS4wNzIzMzI5NSAxMy44OTQ2MjIgMS4wNTQ0Mzg1NCAxMy44NTc5MjgzIDEuMDE3ODUxNjIgMTMuODA4NDAxMy45OTc0MjMyOTkgMTMuNzU2ODYyMi45OTc2MTIxMTIiLz4KICAgICAgPHBhdGggZmlsbD0iIzFGMzM2QiIgZD0iTTEwLjYwNTU2OTIuOTk4MjAyNzg3TDkuNzE4MTM0OTUuOTk4MjAyNzg3QzkuNjY2MTg1MzMuOTk4MTE5OTk1IDkuNjE2Mjc3MzIgMS4wMTg1OTgzIDkuNTc5MTc3MjggMS4wNTUyMjU4NSA5LjU2MDk3ODE2IDEuMDczMTgyMTggOS41NDY1MjczMyAxLjA5NDYxMjYgOS41MzY2NzAxNCAxLjExODI2NDA4IDkuNTI2Nzk3IDEuMTQxOTEzOTYgOS41MjE3MjQ4NSAxLjE2NzMwODg1IDkuNTIxNzI0ODUgMS4xOTI5NjE2Nkw5LjUyMTcyNDg1IDMuMDE5MzQxMTdDOS41MjEyOTQxOSAzLjA0NjMyODIxIDkuNTE1NTg0MDQgMy4wNzI5NjQ5OCA5LjUwNDkyOTM0IDMuMDk3NzM4OTMgOS40OTQyNzQ2NSAzLjEyMjQ5Njk1IDkuNDc4ODgyNzYgMy4xNDQ5MTQ1IDkuNDU5NjMwOTMgMy4xNjM2ODYwMiA5LjQyMDU1MzA3IDMuMjAxODY1OTIgOS4zNjgyNTI1NCAzLjIyMzIwMDgxIDkuMzEzODE0NjkgMy4yMjMxODQ4OUw4Ljk0MTIxOTI3IDMuMjIzMTg0ODlDOC45MTM5Mjg1NyAzLjIyMzI0ODU3IDguODg2ODc3MTIgMy4yMTc5MTQ4NSA4Ljg2MTYxMjA5IDMuMjA3NDg2MjMgOC44MzY0MjY4MSAzLjE5NzA1NzYxIDguODEzNDc0NTUgMy4xODE4MDQ3NiA4Ljc5NDA0NzI3IDMuMTYyNTg3NDMgOC43NzQ3MTU2OSAzLjE0MzQxNzg4IDguNzU5MzcxNjUgMy4xMjA1NzA0NCA4Ljc0ODkwODM1IDMuMDk1MzY2NjEgOC43MzgzNDkzNiAzLjA3MDA5OTEgOC43MzMwNTM5MSAzLjA0MjkwNTA4IDguNzMzMzI1MDYgMy4wMTU0ODgxNUw4LjcyOTIwOTkyIDEuMTkxMzA5QzguNzI5MTc4MDIgMS4xNjU2MzcwOCA4LjcyNDA1ODAyIDEuMTQwMjMxMDUgOC43MTQxNTI5OCAxLjExNjU3Nzk4IDguNzA0MjQ3OTQgMS4wOTI5MjY1MSA4LjY4OTczMzMxIDEuMDcxNTA1NjQgOC42NzE1MDIyOSAxLjA1MzU3MzE5IDguNjM0NDY2MDUgMS4wMTcwMTI1MiA4LjU4NDY2OTY5Ljk5NjU0OTM0NCA4LjUzMjc5OTgyLjk5NjU0OTM0NEw3LjY0NTYzNjcyLjk5NjU0OTM0NEM3LjYxOTgyOTM4Ljk5NjQ3Njg5IDcuNTk0Mjc3MjUgMS4wMDE1MzE5OCA3LjU3MDQxNTgzIDEuMDExNDI1NjQgNy41NDY1NzAzNiAxLjAyMTAyOTUzIDcuNTI0ODk0MTEgMS4wMzUzNjIxMSA3LjUwNjY3OTA1IDEuMDUzNTczMTkgNy40ODgzODQyMyAxLjA3MTYwNzU0IDcuNDczODY5NTkgMS4wOTMxNTI1OSA3LjQ2Mzk5NjQ1IDEuMTE2OTMxNDQgNy40NTM5Nzk3NiAxLjE0MDUyNDAxIDcuNDQ4ODU5NzYgMS4xNjU5MjY4NSA3LjQ0ODk1NTQ3IDEuMTkxNTg0NDVMNy40NDg5NTU0NyAzLjE5Mjg4NjE2QzcuNDQxODI1NzUgMy4zNjU3NjI0NCA3LjQ3MDcxMTQ2IDMuNTM4MjQwNjkgNy41MzM3NjIzOSAzLjY5OTIwNzY1IDcuNTk3MjI4MDMgMy44NjA3MTU5NCA3LjY5MzM1OTU2IDQuMDA3MTQ2NTEgNy44MTYwNjQwNCA0LjEyOTIxNzEgNy45MzkzNTg2NyA0LjI1MjAyMDA5IDguMDg2NTE0NzIgNC4zNDc4Njc4NyA4LjI0ODI5NzA2IDQuNDEwNzQyMSA4LjQxMDUyNTk5IDQuNDczODg3MDEgOC41ODM4NTYyNCA0LjUwMzAzOTM4IDguNzU3NjY0OTggNC40OTY0MTYwMSA4Ljc1NzY2NDk4IDQuNDk2NDE2MDEgOS4zMzIxNDE0MSA0LjQ5NjQxNjAxIDkuMzQ5NjU0NjcgNC40OTk5OTgzNiA5LjQwMDIzMjU4IDQuNTA1MDc3MzQgOS40NDcyMjE3MSA0LjUyODU5MzQ4IDkuNDgxNzg1NjggNC41NjYxMjA2IDkuNTE2NDI5NCA0LjYwMzU1MjE4IDkuNTM1OTUyMzggNC42NTI2NzAxOSA5LjUzNjQ5NDY4IDQuNzAzODQyMDggOS41MzY3MDIwNCA0Ljc1NDY2MzY5IDkuNTE4MTgzOTIgNC44MDM3MzM5NCA5LjQ4NDUxMzE2IDQuODQxNTc5NDggOS40NTAzNjM4OSA0Ljg3OTQ3Mjc5IDkuNDAzNjkzNzcgNC45MDM1NjIxMSA5LjM1MzIxMTU1IDQuOTA5MzU3NTZMOS4zMzg0NDE3MiA0LjkxMTgyNTQgOC4wMzkwMTUxOCA0LjkxNjc5MjkzQzcuOTg3MDQ5NjEgNC45MTY2NDk2MyA3LjkzNzEyNTY1IDQuOTM3MTQwNjggNy45MDAwNTc1MSA0Ljk3MzgwODAzIDcuODgxODU4MzkgNC45OTE3Njc1NSA3Ljg2NzQwNzU2IDUuMDEzMTk3OTYgNy44NTc1NTAzNyA1LjAzNjg1NzQgNy44NDc2NzcyMyA1LjA2MDUwMDkxIDcuODQyNjA1MDggNS4wODU4OTU4IDcuODQyNjA1MDggNS4xMTE1NDU0M0w3Ljg0MjYwNTA4IDUuOTkzMDU4NDVDNy44NDI2MDUwOCA2LjAxODcwODA4IDcuODQ3Njc3MjMgNi4wNDQxMDI5NyA3Ljg1NzU1MDM3IDYuMDY3NzQ2NDggNy44Njc0MDc1NiA2LjA5MTQwNTkyIDcuODgxODU4MzkgNi4xMTI4MzYzNCA3LjkwMDA1NzUxIDYuMTMwNzk1ODUgNy45MzcwOTM3NSA2LjE2NzU0MjgxIDcuOTg3MDE3NzEgNi4xODgxMjkzOSA4LjAzOTAxNTE4IDYuMTg4MDk3NTRMOS40OTI5OTg2NCA2LjE4ODA5NzU0QzkuNjY2ODM5MjggNi4xOTQ5OTE1OCA5Ljg0MDI2NTIyIDYuMTY2MTI1NzkgMTAuMDAyNjM3NyA2LjEwMzI1MTU2IDEwLjE2NDUxNTggNi4wNDA0NTY5MyAxMC4zMTE4MTU0IDUuOTQ0ODE2MTMgMTAuNDM1NDEzIDUuODIyMjY3ODkgMTAuNTU4MjI5MiA1LjcwMDE2NTQ2IDEwLjY1NDU1MjEgNS41NTM3NTA4IDEwLjcxODI4ODkgNS4zOTIyNTg0MyAxMC43ODE2OTA3IDUuMjMxMjc1NTUgMTAuODEwNzY3OCA1LjA1ODY4NTg2IDEwLjgwMzYzODEgNC44ODU2NjYyOEwxMC44MDM2MzgxIDEuMTkyOTYxNjZDMTAuODAzNjg2IDEuMTY3MzM1OTEgMTAuNzk4NjYxNyAxLjE0MTk1Njk1IDEwLjc4ODg1MjMgMS4xMTgzMDg2NiAxMC43NzkwMTExIDEuMDk0NTk1MDkgMTAuNzY0NDk2NSAxLjA3MzEzNjAxIDEwLjc0NjE4NTcgMS4wNTUyMjU4NSAxMC43Mjc4NTkgMS4wMzcwNzUyNyAxMC43MDYyMTQ2IDEuMDIyNjY5NDUgMTAuNjgyNDQ4OSAxLjAxMjgwMjg2IDEwLjY1ODUyMzcgMS4wMDMxMjU3MyAxMC42MzI5ODc1Ljk5ODE2OTM1MSAxMC42MDcyMTIxLjk5ODIwMjc4N00yLjExMDUwNjE4Ljk5OTUwMTY3NEwuMTkxMDcwMy45OTk1MDE2NzRDLjE0MDY2MDc5Ny45OTkwNjY2MjQuMDkyMTA3MTczMiAxLjAxODg3MzMyLjA1NTg5ODI4NjkgMS4wNTQ2NDQ1OC4wMzgyNTM3MTU0IDEuMDcyMzU1NzEuMDI0MjQxNjE4MSAxLjA5MzQ3MjM0LjAxNDY4MDIxMTcgMS4xMTY3NjI2Mi4wMDUxMTg4Njg0NSAxLjE0MDA1MTMxLjAwMDE5ODAwNjQ4NiAxLjE2NTA0OTkyLjAwMDIwNjAyOTYxMSAxLjE5MDI5ODcyTC4wMDAyMDYwMjk2MTEgMi4wNTY4OTE2MUMtLjAwMDA2ODY3NjUzNzEgMi4wNTc5NzUyNS0uMDAwMDY4Njc2NTM3MSAyLjA1OTEwNjY5LjAwMDIwNjAyOTYxMSAyLjA2MDE5MDMzTC4wMDAyMDYwMjk2MTEgNS45OTMwNTI3NkMtLjAwMTI4OTE2NTc2IDYuMDQyNTgxNDYuMDE2Mzg2OTkzOCA2LjA5MDcwNzguMDQ5NDEwMjczNiA2LjEyNzA1NzUzLjA4Mjc3NDMzOTIgNi4xNjM2OTQxMS4xMjg2MzE2MjUgNi4xODU4OTI3OC4xNzc1NTIzNTggNi4xODkwOTU5M0wxLjA3MjM4NzggNi4xODkwOTU5M0MxLjEyMzY5NjQgNi4xODkwOTU5MyAxLjE3Mjk0NDgzIDYuMTY4NTA2NzQgMS4yMDk0NTA4NCA2LjEzMTc0MjY4IDEuMjI3NDc4NDQgNi4xMTM3OTg4OCAxLjI0MTgxMTMxIDYuMDkyMzQ5MTkgMS4yNTE2MDYxNCA2LjA2ODY4NDQyIDEuMjYxNDAwOTggNi4wNDUwMDM3MSAxLjI2NjQ2MzkgNi4wMTk1ODU5OSAxLjI2NjQ5NTQyIDUuOTkzODgxNDJMMS4yNjk3MzkzNSA0LjY1MDI5NTkyIDIuMTA5OTcwMjUgNC42NTAyOTU5MkMyLjI2ODYwNDMxIDQuNjU3OTkyOTUgMi40MjcwOTY1MSA0LjYzMjE3NjgzIDIuNTc1NTAwNjkgNC41NzQ0NzMwMyAyLjcyMzQ0Nzc2IDQuNTE3MTM1NzUgMi44NTgwNTk3MyA0LjQyODk2MjU1IDIuOTcwNzMwMjYgNC4zMTU1Nzg4IDMuMDgyOTQzNjggNC4yMDI3ODQ2OCAzLjE3MDU1MTggNC4wNjcxMjI1NyAzLjIyNzgzMjgyIDMuOTE3NDM2OSAzLjI4NTE0NTM3IDMuNzY4Mzg4NjYgMy4zMTA3NTk0NyAzLjYwODYxNTU3IDMuMzAyOTg4NTUgMy40NDg3MTVMMy4zMDI5ODg1NSAyLjIwMDgwODVDMy4zMTA2ODA2NiAyLjA0MDkzOTggMy4yODUxNjExMyAxLjg4MTE5ODU4IDMuMjI4MTAwNzkgMS43MzIwODY2IDMuMTcwNjMwNjIgMS41ODI0Mjk2MSAzLjA4MzAzODI2IDEuNDQ2NzEwMTQgMi45NzEwMTM5OSAxLjMzMzY3Mzc5IDIuODU4MjY0NjQgMS4yMjAyNDcwMSAyLjcyMzY4NDIgMS4xMzE5MDMzIDIuNTc1NzY4NjUgMS4wNzQyMjE4MSAyLjQyNzMzMjk1IDEuMDE2MjI5NTYgMi4yNjg3MzA0MS45OTAyMjU0MDEgMi4xMDk5NzAyNS45OTc4NDc1M0wyLjExMDUwNjE4Ljk5OTUwMTY3NHpNMi4wMzM0NTg5NSAyLjYxNzE0OTE3TDIuMDMzNDU4OTUgMy4xNjI1MjI2MkMyLjAzMzQ0MzE5IDMuMTg5Nzg4OSAyLjAyODA5OTY5IDMuMjE2NzY4MzQgMi4wMTc3NDM3MSAzLjI0MTg5OTIyIDIuMDA3NDAzNDkgMy4yNjcwNDYwMyAxLjk5MjIzOTk0IDMuMjg5ODE4MzkgMS45NzMxNjcyOSAzLjMwODkyNTUxIDEuOTM0NDA3MjQgMy4zNDc4NzI3OCAxLjg4MjEzODcgMy4zNjk2NzMwNiAxLjgyNzcyNjQ2IDMuMzY5NTc3NzZMMS4yNzAyNzg0MyAzLjM2OTU3Nzc2IDEuMjcwMjc4NDMgMi4yODAyMTY5NiAxLjgyNzcyNjQ2IDIuMjgwMjE2OTZDMS44ODIxNzAyMyAyLjI4MDIzMjkgMS45MzQ0MjMgMi4zMDIxMjg3OSAxLjk3MzE2NzI5IDIuMzQxMTU1NzUgMS45OTIyNTU3MSAyLjM2MDI0NjkzIDIuMDA3NDE5MjYgMi4zODMwMTkyOSAyLjAxNzc3NTI0IDIuNDA4MTY2MSAyLjAyODExNTQ1IDIuNDMzMjk2OTggMi4wMzM0NTg5NSAyLjQ2MDI5MjM1IDIuMDMzNDU4OTUgMi40ODc1NTg2M0wyLjAzMzQ1ODk1IDIuNjE3MTQ5MTd6TTUuNTU2MzUyNzQuOTk2NjUzNTE2TDQuMzMxNTAzMDYuOTk2NjUzNTE2QzQuMjgxMzcyMzguOTk0OTk1MDQ0IDQuMjMyNTczMDIgMS4wMTMxOTM4OCA0LjE5NTU4MTIzIDEuMDQ3MzU0OTIgNC4xNTg5ODU2NyAxLjA4MTEwMjUzIDQuMTM3MTc3MzIgMS4xMjgxMjc0MiA0LjEzNDk3NDI5IDEuMTc4MDgyNzVMNC4xMzQ5NzQyOSAyLjAwMjE5Mjg4QzQuMTM1OTcyNzkgMi4wMjg1MDM1IDQuMTQyMTIyMjQgMi4wNTQzNTQ3NiA0LjE1MzA4OTgxIDIuMDc4MjU3NjYgNC4xNjQwNTczOCAyLjEwMjE0NDczIDQuMTc5NjA1MzQgMi4xMjM2MjQwOCA0LjE5ODg0NjE0IDIuMTQxNDI4NSA0LjIzNzk0NTg2IDIuMTc4MTE0NDcgNC4yODk4MDQwOSAyLjE5NzgxOTcyIDQuMzQzMTgzODQgMi4xOTYyMzU2OUw1LjUwOTYxMzc3IDIuMTk2MjM1NjlDNS41NTU3MzQ2MyAyLjIwMjIzOTE0IDUuNTk4NDMyMDkgMi4yMjQwMDM2MiA1LjYzMDU3NDA1IDIuMjU3OTAxNzEgNS42NjI1NTc1MiAyLjI5MTU3ODAzIDUuNjgxNzk4MzIgMi4zMzU1MTg4MyA1LjY4NDkzNjQ0IDIuMzgyMDQxNTlMNS42ODQ5MzY0NCAyLjQ5NTIzNTg3QzUuNjgyMzY4ODkgMi41NDA2NjU2NSA1LjY2Mzg3MyAyLjU4MzcwMzU1IDUuNjMyNzQ1MzggMi42MTY2NTEyMyA1LjYwMTM5NTg3IDIuNjQ5ODM2NTEgNS41NTk2MTc2NiAyLjY3MTA0NjU4IDUuNTE0NDk1MjkgMi42NzY2Njk4Nkw0LjkzNjg1OTIxIDIuNjc2NjY5ODZDNC43Njg0MzA4OCAyLjY2NDIxOTQ0IDQuNTk5MjQxODEgMi42ODY2MDE2OCA0LjQzOTY4ODk4IDIuNzQyNDM4NDkgNC4yODA1OTU3NyAyLjc5NzkxMDk4IDQuMTM0NTYyMjIgMi44ODU5MDM0NSA0LjAxMDc0OTEgMy4wMDA4ODc2OCAzLjg4NzM0ODA1IDMuMTE1MTQzMjYgMy43ODg4NjE3OCAzLjI1NDAxNDU1IDMuNzIxNTE4OTggMy40MDg2OTQzOSAzLjY1NDQxMzkxIDMuNTYyNzcyMzEgMy42MjAxNDgxNyAzLjcyOTM0ODE2IDMuNjIwOTQwNjMgMy44OTc2MTg5MkwzLjYyMDk0MDYzIDQuOTIwNzA3NjdDMy42MTE1NDIxMiA1LjA4MzczNTMyIDMuNjM3MjE3NjUgNS4yNDY4NzM4NCAzLjY5NjIzOTY3IDUuMzk4OTU1ODkgMy43NTUxNjY2MSA1LjU1MTYyNDAyIDMuODQ1OTE4NTIgNS42ODk3NTA4MiAzLjk2MjM2MTgxIDUuODA0MDIyMjQgNC4wNzk0MDczNyA1LjkxOTA1Mzk5IDQuMjE5MzA3MzIgNi4wMDc3NzUxMiA0LjM3MjgyMTY1IDYuMDY0Mzg4MSA0LjUyNjY2ODggNi4xMjEzNjU0IDQuNjkwNjkxMDggNi4xNDUwNzgyMyA0Ljg1NDIyMjAzIDYuMTMzOTkwMDdMNi40NTU4MzYzOCA2LjEzMzk5MDA3QzYuNTg4OTY4NzcgNi4xMzg0ODg2OSA2LjcxODUwMzQxIDYuMDkwMDY1MTEgNi44MTY1NjE3NiA1Ljk5OTE1ODAzIDYuODY0NzI3MTUgNS45NTQ1MDQ0MiA2LjkwMzYzNjY4IDUuOTAwNjQ3NjQgNi45MzA5NzYzNyA1Ljg0MDcwODIxIDYuOTU4MzE2MDUgNS43ODA3NTI5NCA2Ljk3MzU3ODczIDUuNzE1OTM0NzIgNi45NzU4NDUyOCA1LjY0OTk5MTg1TDYuOTc1ODQ1MjggMi4zMTU0NDkyNkM2Ljk3NjExNDU5IDEuNTA3MjM0ODEgNi41NTcyMjMwMy45OTY2NTM1MTYgNS41NTYzNTI3NC45OTY2NTM1MTZ6TTUuNjk3MTcxOTQgNC42NjQxOTFMNS42OTcxNzE5NCA0LjgwMTIyNDgyQzUuNjk3MDc2ODUgNC44MTIwOTEyMiA1LjY5NTkwNDAyIDQuODIyOTI1OTQgNS42OTM2Mzc2IDQuODMzNTU0NzMgNS42OTE3MDQwMSA0Ljg0Mjk0Nzk5IDUuNjg4ODgyODcgNC44NTIxMTk0OCA1LjY4NTIwNTg4IDQuODYwOTU4MzMgNS42NzAxNjUwOSA0LjkwMDU1ODkgNS42NDMyODUwMiA0LjkzNDQ3MjgzIDUuNjA4Mjc0MzggNC45NTc5Nzk3NCA1LjU3Mjk0Njc1IDQuOTgxNTk3NTIgNS41MzEzMjcwMiA0Ljk5Mzg0MjAxIDUuNDg4OTQ2NTUgNC45OTMwNjU4NEw1LjEyMTQzNzc1IDQuOTkzMDY1ODRDNS4wNjgwNDIxNiA0Ljk5NDY0OTg3IDUuMDE2MTgzOTIgNC45NzQ5NDQ2MiA0Ljk3NzEwMDA2IDQuOTM4MjQyODEgNC45NTc4NzUxIDQuOTIwMzkwODcgNC45NDIzNTg4NCA0Ljg5ODg2NCA0LjkzMTQ1NDY2IDQuODc0OTEzNTcgNC45MjA1MzQ2NCA0Ljg1MDk3ODk4IDQuOTE0NDMyNzQgNC44MjUwODAyMSA0LjkxMzQ4MTc5IDQuNzk4NzUzNzVMNC45MTM0ODE3OSA0LjA0OTE3ODI0QzQuOTE0NTkxMjMgNC4wMjI5NDY4MiA0LjkyMDgxOTkyIDMuOTk3MTkwNiA0LjkzMTgzNTA0IDMuOTczMzgyNzQgNC45NDI4MzQzMSAzLjk0OTU5MDcxIDQuOTU4NDEzOTcgMy45MjgyMjIyNCA0Ljk3NzYzODkyIDMuOTEwNTEyODcgNS4wMTY1NjQzIDMuODczODkwMjYgNS4wNjgyMTY1IDMuODU0MjAwODUgNS4xMjE0Mzc3NSAzLjg1NTY4OTgzTDUuNDg5MjE1OTggMy44NTU2ODk4M0M1LjU0MjU5NTczIDMuODU0MTY5MTcgNS41OTQ0MzgxMiAzLjg3Mzg1ODU4IDUuNjMzNTUzNjggMy45MTA1MTI4NyA1LjY1Mjg1Nzg4IDMuOTI4MzY0ODEgNS42Njg0NTMzOSAzLjk0OTkyMzM2IDUuNjc5NDIwOTYgMy45NzM5MjEzMSA1LjY5MDM4ODUzIDMuOTk3OTE5MjYgNS42OTY1MDYyOCA0LjAyMzg4MTM5IDUuNjk3NDQxMzggNC4wNTAyODcwNUw1LjY5NzE3MTk0IDQuNjY0MTkxeiIvPgogICAgPC9nPgogIDwvZz4KPC9zdmc+Cg==" alt="paytm">
&nbsp;&nbsp;Paytm</a>
<a style="font-size:10px" href="phonepe://pay?pa=<?php echo $upiid;?>&pn=E-Pay&am=<?php echo $am;?>&cu=INR&tn=TXN<?php echo rand(100000000,9999999999); ?>" target="blank">
<img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiPz4KPHN2ZyB3aWR0aD0iMjRweCIgaGVpZ2h0PSIyNHB4IiB2aWV3Qm94PSIwIDAgMjQgMjQiIHZlcnNpb249IjEuMSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayI+CiAgICA8dGl0bGU+aWNvbi1waG9uZXBlPC90aXRsZT4KICAgIDxnIGlkPSJQYWdlLTEiIHN0cm9rZT0ibm9uZSIgc3Ryb2tlLXdpZHRoPSIxIiBmaWxsPSJub25lIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiPgogICAgICAgIDxnIGlkPSJvbmlvbi1wYXktaWNvbnMiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDAuMDAwMDAwLCAtNTAuMDAwMDAwKSIgZmlsbC1ydWxlPSJub256ZXJvIj4KICAgICAgICAgICAgPGcgaWQ9Imljb24tcGhvbmVwZSIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMC4wMDAwMDAsIDUwLjAwMDAwMCkiPgogICAgICAgICAgICAgICAgPGNpcmNsZSBpZD0iT3ZhbCIgZmlsbD0iIzVGMjU5RiIgY3g9IjEyIiBjeT0iMTIiIHI9IjEyIj48L2NpcmNsZT4KICAgICAgICAgICAgICAgIDxwYXRoIGQ9Ik0xNy40NDY0MTQ5LDguODY4MzIwMjcgQzE3LjQ0NjQxNDksOC4zOTkyMjIyOSAxNy4wNDQxMjg5LDcuOTk2OTM2MzEgMTYuNTc1MDMwOSw3Ljk5NjkzNjMxIEwxNC45NjYyNDA1LDcuOTk2OTM2MzEgTDExLjI3OTIwODIsMy43NzM2NDA0OSBDMTAuOTQ0MDg3NywzLjM3MTM1NDUgMTAuNDA3ODI0MiwzLjIzNzM3NzAxIDkuODcxNTYwNzEsMy4zNzEzNTQ1IEw4LjU5Nzg5MDc3LDMuNzczNjQwNDkgQzguMzk2NzQ3NzgsMy44NDA4MDU5OSA4LjMyOTU4MjI4LDQuMTA4NzYwOTcgOC40NjM5MTMyNyw0LjI0MjczODQ3IEwxMi40ODYwNjYxLDguMDY0MTAxODEgTDYuMzg0OTY0MzYsOC4wNjQxMDE4MSBDNi4xODM4MjEzNiw4LjA2NDEwMTgxIDYuMDQ5ODQzODcsOC4xOTgwNzkzIDYuMDQ5ODQzODcsOC4zOTkyMjIyOSBMNi4wNDk4NDM4Nyw5LjA2OTQ2MzI3IEM2LjA0OTg0Mzg3LDkuNTM4NTYxMjQgNi40NTIxMjk4NSw5Ljk0MDg0NzIzIDYuOTIxMjI3ODMsOS45NDA4NDcyMyBMNy44NTk3NzcyOSw5Ljk0MDg0NzIzIEw3Ljg1OTc3NzI5LDEzLjE1ODc4MTYgQzcuODU5Nzc3MjksMTUuNTcyMTQ0IDkuMTMzNDQ3MjQsMTYuOTgwMTQ0OSAxMS4yNzg4NTQ3LDE2Ljk4MDE0NDkgQzExLjk0OTA5NTYsMTYuOTgwMTQ0OSAxMi40ODU3MTI2LDE2LjkxMjk3OTQgMTMuMTU1OTUzNiwxNi42NDUwMjQ1IEwxMy4xNTU5NTM2LDE4Ljc5MDQzMTkgQzEzLjE1NTk1MzYsMTkuMzkzODYwOCAxMy42MjUwNTE2LDE5Ljg2Mjk1ODggMTQuMjI4NDgwNSwxOS44NjI5NTg4IEwxNS4xNjcwMywxOS44NjI5NTg4IEMxNS4zNjgxNzMsMTkuODYyOTU4OCAxNS41NjkzMTYsMTkuNjYxODE1OCAxNS41NjkzMTYsMTkuNDYwNjcyOCBMMTUuNTY5MzE2LDkuODc0MDM1MjMgTDE3LjExMTI5NDQsOS44NzQwMzUyMyBDMTcuMzEyNDM3NCw5Ljg3NDAzNTIzIDE3LjQ0NjQxNDksOS43NDAwNTc3NCAxNy40NDY0MTQ5LDkuNTM4OTE0NzUgTDE3LjQ0NjQxNDksOC44NjgzMjAyNyBaIE0xMy4xNTU5NTM2LDE0LjYzMzU5NDUgQzEyLjc1MzY2NzYsMTQuODM0NzM3NSAxMi4yMTc0MDQxLDE0LjkwMTkwMyAxMS44MTUxMTgxLDE0LjkwMTkwMyBDMTAuNzQyNTkxMiwxNC45MDE5MDMgMTAuMjA2MzI3NywxNC4zNjU2Mzk1IDEwLjIwNjMyNzcsMTMuMTU4NzgxNiBMMTAuMjA2MzI3Nyw5Ljk0MDg0NzIzIEwxMy4xNTU5NTM2LDkuOTQwODQ3MjMgTDEzLjE1NTk1MzYsMTQuNjMzNTk0NSBaIiBpZD0iU2hhcGUiIGZpbGw9IiNGRkZGRkYiPjwvcGF0aD4KICAgICAgICAgICAgPC9nPgogICAgICAgIDwvZz4KICAgIDwvZz4KPC9zdmc+" alt="phonepe">
&nbsp;&nbsp;PhonePe</a>
<a style="font-size:10px" href="tez://upi/pay?pa=<?php echo $upiid;?>&pn=E-Pay&am=<?php echo $am;?>&cu=INR&tn=TXN<?php echo rand(100000000,9999999999); ?>" target="blank">
<img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAyNCAyNCIgd2lkdGg9IjI0IiBoZWlnaHQ9IjI0Ij4KICA8ZyBzdHJva2U9Im5vbmUiIHN0cm9rZS13aWR0aD0iMSIgZmlsbD0ibm9uZSIgZmlsbC1ydWxlPSJldmVub2RkIj4KICAgIDxnIHRyYW5zZm9ybT0idHJhbnNsYXRlKDAuMjUwMDAwLCAwLjAwMDAwMCkiIGZpbGwtcnVsZT0ibm9uemVybyI+CiAgICAgIDxwYXRoIGQ9Ik0yMy41MDExOTY4LDEyLjI3MzkyMTQgQzIzLjUwMTE5NjgsMTEuMzk2ODEyNCAyMy40MjI3MzM0LDEwLjU1NzUzNCAyMy4yNzcwMTU2LDkuNzUwNDgxNjQgTDEyLjAwMDcwMDYsOS43NTA0ODE2NCBMMTIuMDAwNzAwNiwxNC4zNzQyMTkyIEwxOC40OTQ5NTAxLDE0LjM3NTYyMDMgQzE4LjIzMTUzNzIsMTUuOTE0MDYzOSAxNy4zODM4NTE5LDE3LjIyNTUyNCAxNi4wODUwMDIsMTguMDk5ODMwNyBMMTYuMDg1MDAyLDIxLjA5OTY1NTYgTDE5Ljk1MDcyNjgsMjEuMDk5NjU1NiBDMjIuMjA3OTUxNCwxOS4wMTA1NjY5IDIzLjUwMTE5NjgsMTUuOTIyNDcwNyAyMy41MDExOTY4LDEyLjI3MzkyMTQgWiIgZmlsbD0iIzQyODVGNCI+PC9wYXRoPgogICAgICA8cGF0aCBkPSJNMTYuMDg2NDAzMiwxOC4wOTk4MzA3IEMxNS4wMTAzMzM0LDE4LjgyNTYxNzQgMTMuNjI0NjEzMiwxOS4yNTAxNjA1IDEyLjAwMzUwMjgsMTkuMjUwMTYwNSBDOC44NzE5NzE1MSwxOS4yNTAxNjA1IDYuMjE1NDI0MTMsMTcuMTQwMDU0OSA1LjI2NDA1NTExLDE0LjI5NTc1NTcgTDEuMjc2NDMxNzgsMTQuMjk1NzU1NyBMMS4yNzY0MzE3OCwxNy4zODk0NTY1IEMzLjI1MjAyODcyLDIxLjMwOTgyNTQgNy4zMTI1MTA5NSwyNCAxMi4wMDM1MDI4LDI0IEMxNS4yNDU3MjM2LDI0IDE3Ljk2OTUyNTQsMjIuOTMzNzM4MSAxOS45NTIxMjgsMjEuMDk4MjU0NCBMMTYuMDg2NDAzMiwxOC4wOTk4MzA3IFoiIGZpbGw9IiMzNEE4NTMiPjwvcGF0aD4KICAgICAgPHBhdGggZD0iTTQuODg4NTUxNTgsMTIuMDAwNzAwNiBDNC44ODg1NTE1OCwxMS4yMDIwNTUgNS4wMjE2NTkxNywxMC40MzAwMzA5IDUuMjY0MDU1MTEsOS43MDQyNDQyNiBMNS4yNjQwNTUxMSw2LjYxMDU0MzUyIEwxLjI3NjQzMTc4LDYuNjEwNTQzNTIgQzAuNDU5NTcxNDg3LDguMjMxNjUzOTIgLTcuOTY0NTE2NjJlLTE1LDEwLjA2MTUzMzEgLTcuOTY0NTE2NjJlLTE1LDEyLjAwMDcwMDYgQy03Ljk2NDUxNjYyZS0xNSwxMy45Mzk4NjgxIDAuNDYwOTcyNjIsMTUuNzY5NzQ3MiAxLjI3NjQzMTc4LDE3LjM5MDg1NzYgTDUuMjY0MDU1MTEsMTQuMjk3MTU2OSBDNS4wMjE2NTkxNywxMy41NzEzNzAyIDQuODg4NTUxNTgsMTIuNzk5MzQ2MSA0Ljg4ODU1MTU4LDEyLjAwMDcwMDYgWiIgZmlsbD0iI0ZBQkIwNSI+PC9wYXRoPgogICAgICA8cGF0aCBkPSJNMTIuMDAzNTAyOCw0Ljc0OTgzOTQ1IEMxMy43NzMxMzMzLDQuNzQ5ODM5NDUgMTUuMzU3ODE0Miw1LjM1OTMzMjEzIDE2LjYwOTAyNTYsNi41NTAyOTQ4MiBMMjAuMDM0Nzk0OCwzLjEyNzMyNzkyIEMxNy45NTQxMTI5LDEuMTg5NTYxNTYgMTUuMjQxNTIwMiw3Ljk2NDUxNjYyZS0xNSAxMi4wMDM1MDI4LDcuOTY0NTE2NjJlLTE1IEM3LjMxMzkxMjA4LDcuOTY0NTE2NjJlLTE1IDMuMjUyMDI4NzIsMi42OTAxNzQ1NiAxLjI3NjQzMTc4LDYuNjEwNTQzNTIgTDUuMjY0MDU1MTEsOS43MDQyNDQyNiBDNi4yMTU0MjQxMyw2Ljg1OTk0NTEyIDguODcxOTcxNTEsNC43NDk4Mzk0NSAxMi4wMDM1MDI4LDQuNzQ5ODM5NDUgWiIgZmlsbD0iI0U5NDIzNSI+PC9wYXRoPgogICAgPC9nPgogIDwvZz4KPC9zdmc+Cg==" alt="gpay">
&nbsp;&nbsp;GooglePay</a>
<a style="font-size:10px" href="upi://pay?pa=<?php echo $upiid;?>&pn=FastPay&am=<?php echo $am;?>&cu=INR&tn=TXN<?php echo rand(100000000,9999999999); ?>" target="blank">
<img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiPz4KPHN2ZyB3aWR0aD0iMjRweCIgaGVpZ2h0PSIyNHB4IiB2aWV3Qm94PSIwIDAgMjQgMjQiIHZlcnNpb249IjEuMSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayI+CiAgICA8dGl0bGU+aWNvbi1iaGltPC90aXRsZT4KICAgIDxnIGlkPSJQYWdlLTEiIHN0cm9rZT0ibm9uZSIgc3Ryb2tlLXdpZHRoPSIxIiBmaWxsPSJub25lIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiPgogICAgICAgIDxnIGlkPSJvbmlvbi1wYXktaWNvbnMiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDAuMDAwMDAwLCAtMTAwLjAwMDAwMCkiPgogICAgICAgICAgICA8ZyBpZD0iaWNvbi1iaGltIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgwLjAwMDAwMCwgMTAwLjAwMDAwMCkiPgogICAgICAgICAgICAgICAgPGNpcmNsZSBpZD0iT3ZhbCIgc3Ryb2tlPSIjNjY2ODZDIiBmaWxsPSIjRkZGRkZGIiBjeD0iMTIiIGN5PSIxMiIgcj0iMTEuNSI+PC9jaXJjbGU+CiAgICAgICAgICAgICAgICA8ZyBpZD0iYmhpbSIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoNi4wMDAwMDAsIDMuMDAwMDAwKSI+CiAgICAgICAgICAgICAgICAgICAgPHBvbHlnb24gaWQ9IlBhdGgtQ29weSIgZmlsbD0iIzAwOEQzRCIgcG9pbnRzPSI4LjEyMzA3NjkyIDAuNTUzODQ2MTU0IDMuMTM4NDYxNTQgMTggMTIuNzM4NDYxNSA5LjEzODQ2MTU0Ij48L3BvbHlnb24+CiAgICAgICAgICAgICAgICAgICAgPHBvbHlnb24gaWQ9IlBhdGgiIGZpbGw9IiNGRjdBMDgiIHBvaW50cz0iNC45ODQ2MTUzOCAwIDAgMTcuNDQ2MTUzOCA5LjYgOC41ODQ2MTUzOCI+PC9wb2x5Z29uPgogICAgICAgICAgICAgICAgPC9nPgogICAgICAgICAgICA8L2c+CiAgICAgICAgPC9nPgogICAgPC9nPgo8L3N2Zz4=" alt="upi">
&nbsp;&nbsp;Other Bank</a>
</div><br>
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
<p style="text-align:center;color:#FF0000">Important reminder: After completing the UPI transaction,please backfill Ref No./UTR No./Google Pay : UPI Transaction ID/Freecharge: Transaction ID (12digits). If you do not back fill UTR, 100% of the deposit transaction will fail. Please be sure to backfill!</p><br>
<div class="war">
<span style="font-size: 50px;"></span>
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

    let orderNo = "TXN<?php echo rand(100000000,9999999999); ?>";
    let contactEmail = null;
    let contactEmail2 = null;
    let returnUrl = null;
    let qrcode = "upi:\/\/pay?pa=<?php echo $upiid;?>\u0026pn=E-Pay\u0026am=<?php echo $am;?>\u0026cu=INR&tn=TXN<?php echo rand(100000000,9999999999); ?>";

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