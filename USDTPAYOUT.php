<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login");
    exit;
}
require_once "config.php";

$account=$ifsc="";
$accounterr=$ifscerr="";

if (empty($_POST["account"] )== false){


                   if ($_SERVER["REQUEST_METHOD"] == "POST") {
                   

                    if (empty($_POST["account"])) {
                      $accounterr = "Account Number is required";
                    } else {
                      $account = $_POST['account'];
                    }

                    if (empty($_POST["ifsc"])) {
                      $ifscerr = "ifsc code is required";
                    } else {
                      $ifsc = $_POST['ifsc'];
                      $name= $_POST['name'];
                      $upi= $_POST['upi'];
                      $Address=$_POST['Address'];
                    }
                }
                $query0 =  "SELECT  account FROM `users`  WHERE username!='".$_SESSION['username']."' AND account='$account'";
$result3 =$conn->query($query0);
$row3 = mysqli_fetch_assoc($result3);
$first=$row3['account'];
                if($first==''){
                      $sql = "UPDATE users SET account ='$account', ifsc ='$ifsc',name='$name',upi='$upi',Address='$Address' WHERE username='".$_SESSION['username']."' ";

                  if ($conn->query($sql) === TRUE) {
                  header("location: MY#");
                  } else {
                    echo "Error updating record: " . $conn->error;
                  }
                    
                }else{
                      echo "<script>
     document.addEventListener('DOMContentLoaded', function(event) { 
     
                 document.getElementById('snackbar').innerHTML='Account number already linked';
          document.getElementById('snackbar').style.display= '';
        setTimeout(function () { document.getElementById('snackbar').style.display= 'none'; }, 3000);
 
});
                
     
                </script>";
                }

                

                }
                
                if (isset($_GET["edit"]) && $_GET["edit"] == "true") {
                    // Code to execute if "edit" parameter is present and set to "true"
                } else {
                    // Code to execute if "edit" parameter is not present or not set to "true"
                }
                
$sql = "SELECT  balance FROM users WHERE username='".$_SESSION['username']."'";
$result = $conn->query($sql);
$row = mysqli_fetch_array($result);
$balance=round($row['balance'],2);
echo ""

?>
<?php
// Initialize the session
//session_start();
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login");
    exit;
}
require_once "config.php";

$account=$ifsc="";
$accounterr=$ifscerr="";

if (empty($_POST["account"] )== false){


                   if ($_SERVER["REQUEST_METHOD"] == "POST") {
                   

                    if (empty($_POST["account"])) {
                      $accounterr = "Account Number is required";
                    } else {
                      $account = $_POST['account'];
                    }

                    if (empty($_POST["ifsc"])) {
                      $ifscerr = "ifsc code is required";
                    } else {
                      $ifsc = $_POST['ifsc'];
                      $name= $_POST['name'];
                      $upi= $_POST['upi'];
                      $Address=$_POST['Address'];
                    }
                }
                $query0 =  "SELECT  account FROM `users`  WHERE username!='".$_SESSION['username']."' AND account='$account'";
$result3 =$conn->query($query0);
$row3 = mysqli_fetch_assoc($result3);
$first=$row3['account'];
                if($first==''){
                      $sql = "UPDATE users SET account ='$account', ifsc ='$ifsc',name='$name',upi='$upi',Address='$Address' WHERE username='".$_SESSION['username']."' ";

                  if ($conn->query($sql) === TRUE) {
                  header("location: withdraw#");
                  } else {
                    echo "Error updating record: " . $conn->error;
                  }
                    
                }else{
                      echo "<script>
     document.addEventListener('DOMContentLoaded', function(event) { 
     
                 document.getElementById('snackbar').innerHTML='Account number already linked';
          document.getElementById('snackbar').style.display= '';
        setTimeout(function () { document.getElementById('snackbar').style.display= 'none'; }, 3000);
 
});
                
     
                </script>";
                }

                

                }
                
                if (isset($_GET["edit"]) && $_GET["edit"] == "true") {
                    // Code to execute if "edit" parameter is present and set to "true"
                } else {
                    // Code to execute if "edit" parameter is not present or not set to "true"
                }
                

                        require_once "config.php";
                        $sqlr = "SELECT min_r,min_w FROM notice WHERE id='1'";
$resultr = $conn->query($sqlr);
$rowr = mysqli_fetch_array($resultr);
$mini=$rowr['min_w'];
$minir=$rowr['min_r'];
                        $query1 = "SELECT * FROM `record` WHERE username='".$_SESSION['username']."' ";


$result1 = mysqli_query($conn, $query1);

$dataRow = "";

//retrieve the selected results from database   
$query = "SELECT * FROM `record` WHERE username='".$_SESSION['username']."' ORDER BY id DESC ";  
$result = mysqli_query($conn, $query);  
  
//display the retrieved result on the webpage  

                 
$opt="SELECT SUM(recharge) as total FROM `recharge` WHERE username='".$_SESSION['username']."'";
$optres=$conn->query($opt);
$sum= mysqli_fetch_assoc($optres);
if($sum['total']==""){
    $bonus=0;
    
}else{
    $bonus=round($sum['total'],2);
}
$opt1="SELECT SUM(amount) as total1 FROM `vipbetting` WHERE username='".$_SESSION['username']."'";
$optres1=$conn->query($opt1);
$sum1= mysqli_fetch_assoc($optres1);
if($sum1['total1']==""){
    $bonus1=0;
    
}else{
    $bonus1=round($sum1['total1'],2);
}
$opt2="SELECT SUM(amount) as total2 FROM `emredbetting` WHERE username='".$_SESSION['username']."'";
$optres2=$conn->query($opt2);
$sum2= mysqli_fetch_assoc($optres2);
if($sum2['total2']==""){
    $bonus2=0;
    
}else{
    $bonus2=round($sum2['total2'],2);
}
$opt21="SELECT SUM(amount) as total21 FROM `saprebetting` WHERE username='".$_SESSION['username']."'";
$optres21=$conn->query($opt21);
$sum21= mysqli_fetch_assoc($optres21);
if($sum21['total21']==""){
    $bonus3=0;
    
}else{
    $bonus3=round($sum21['total21'],2);
}
$opt22="SELECT SUM(amount) as total22 FROM `beconebetting` WHERE username='".$_SESSION['username']."'";
$optres22=$conn->query($opt22);
$sum22= mysqli_fetch_assoc($optres22);
if($sum22['total22']==""){
    $bonus4=0;
    
}else{
    $bonus4=round($sum22['total22'],2);
}
$opt5="SELECT SUM(amount) as total5 FROM `bonus` WHERE usercode='".$_SESSION['usercode']."'";
$optres5=$conn->query($opt5);
$sum5= mysqli_fetch_assoc($optres5);
if (isset($sum5['total5'])) {
    $bonus5 = round($sum5['total5'], 2);
} else {
    $bonus5 = 0;
}

   
                        $sql = "SELECT  account, ifsc,name,upi,Address FROM users  WHERE username='".$_SESSION['username']."'";
                        $result = $conn->query($sql);

                         if ($result->num_rows > 0) {
                          // output data of each row
                         $row = $result->fetch_assoc();
                              
                                    }
                         $conn->close();
    $remain=(0);

?>     



<!DOCTYPE html>
<html lang="en" translate="no" data-dpr="1" style="font-size: 38.32px;"><head>
<!--Code By Webdevtrick ( https://webdevtrick.com )-->
<html lang="en" >
<head>
<meta charset="UTF-8">
<link rel="icon" href="./ico.png">
<meta name="google" content="notranslate">
<meta name="robots" content="noindex,nofollow">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

<link rel="manifest">
<title>91 Club</title><link rel="stylesheet" href="/css/bootstrap.min.css">
  <link rel="stylesheet" href="/css/light.css">
  <link rel="stylesheet" href="/css/dropzone.css">
<link rel="stylesheet" href="https://91dreamclub.com/assets/css/modules-96f5a6e8.css">
<link rel="stylesheet" href="https://91dreamclub.com/assets/css/page-activity-871556fb.css">
<link rel="stylesheet" href="https://91dreamclub.com/assets/css/page-home-0d70abbb.css">
<link rel="stylesheet" href="https://91dreamclub.com/assets/css/index-08abe1f5.css">
<link rel="modulepreload" as="script" crossorigin="" href="/assets/js/page-main-eac2089d.js"><link rel="modulepreload" as="script" crossorigin="" href="/assets/js/page-login-c581a4df.js"><link rel="stylesheet" href="https://91dreamclub.com/assets/css/page-login-1f545390.css"><link rel="stylesheet" href="https://91dreamclub.com/assets/css/page-main-8cf260fb.css"><link rel="modulepreload" as="script" crossorigin="" href="/assets/js/home-c9e2cd52.js"><link rel="modulepreload" as="script" crossorigin="" href="/assets/js/activity-46c093bd.js"><link rel="modulepreload" as="script" crossorigin="" href="/assets/js/promotion-5577fd39.js"><link rel="modulepreload" as="script" crossorigin="" href="/assets/js/wallet-d91dc187.js"><link rel="modulepreload" as="script" crossorigin="" href="/assets/js/main-b43b53ed.js"><link rel="modulepreload" as="script" crossorigin="" href="/assets/js/page-wallet-d4d609cb.js"><link rel="modulepreload" as="script" crossorigin="" href="/assets/js/page-test-b23bed1b.js"><link rel="stylesheet" href="https://91dreamclub.com/assets/css/page-test-b38d710a.css"><link rel="modulepreload" as="script" crossorigin="" href="/assets/js/page-promotion-db066b5a.js"><link rel="stylesheet" href="https://91dreamclub.com/assets/css/page-promotion-24bf6ab6.css"><link rel="stylesheet" href="https://91dreamclub.com/assets/css/page-wallet-24fc13b6.css"></head>
<body style="font-size: 12px;">
<div id="app" data-v-app=""><!----><!----><div data-v-3cbb9e12="" class="withdraw__container" style="--36a344b0: 'Roboto', 'Inter', sans-serif;"><div data-v-4c21fa9e="" data-v-3cbb9e12="" class="navbar"><div data-v-4c21fa9e="" class="navbar-fixed" style="background: rgb(247, 248, 255);"><div data-v-4c21fa9e="" class="navbar__content"><div onclick="window.location.href='/main#/'" data-v-4c21fa9e="" class="navbar__content-left"><i data-v-4c21fa9e="" class="van-badge__wrapper van-icon van-icon-arrow-left"><!----><!----><!----></i></div><div data-v-4c21fa9e="" class="navbar__content-center"><!----><div data-v-4c21fa9e="" class="navbar__content-title">Withdraw</div></div><div data-v-4c21fa9e="" class="navbar__content-right" style="display:none;"><span data-v-3cbb9e12="">Withdrawal history</span></div></div></div></div><div data-v-3cbb9e12="" class="withdraw__container-content"><div data-v-dabc66b0="" data-v-3cbb9e12="" class="balanceAssets"><div data-v-dabc66b0="" class="balanceAssets__header"><div data-v-dabc66b0="" class="balanceAssets__header__left"><img data-v-dabc66b0="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEgAAABICAMAAABiM0N1AAAArlBMVEUAAAD/sjH/zRj/zR//1zbuR0f/zBb/zRf/zhr/zRn/+HfuSUn/zBn/+njvSUn/zCH/+Xf/+XX/+HT/+nj/zBn/zRr/pSL/20H/2T3/1Db/zBf/30j/1zn/7mP/8Gb/3UT/9nL/9W//8mn/82z/7GDuSEj/+Xf/0zP/5lX/5FL/4Uz/6Vv/6Fj/40//613/+HT/vTT/2033kj3/xzz+yzX/rSj/sSr/0kH/sSz/rym/OY7sAAAAFnRSTlMAIsBCE+/v3IFxkZGRgYEy7+/v7rBhR1ORgAAAAh9JREFUWMPtkuly2jAQgA3hyJ2e1BKyMYGC7dbYXEn6/i/W1QqNughsI03+dPIh7SXzDSMcfPD/czXsQfTmqcv5tb+md88lHV/PzYAjXd/L4ZorD02nyw1D98u55oQb98uhDHpOl9PlFvcOl/ONn+Lp4ssZWA6XV+D70DI0vwIPnxZOfL2lnttFA6VV6vqBiL6UNouyFZ+JKDlNWSY1HA6pyB0qmgIJbJOxSnAnZowBk4GK3KGimWI6lcEs7LDChP3hMQMVuUNFz4rZIet2Rqa6PJpSkROxLYrj5xi3A1Rk8BZFcSQXFpoYw+FAT2IcmIeIKHKHiubRfC43xkguDIAa6KkeSXSkIg+IaDVfwWi1khtrALKu1AEs1aisayq6gPV2PyJ0AsOv1qSVMfiI0rdRreh3W6pRa1Gqc0pHyHrUIErboS5om63ffEUv8L0K8vqcKCOk2Tn2UiSLelEz8hft8yzbnhMVRZHBByKEGvCO9ltI50R5cZLj+WvTv5YXuYE2lKpJ1JbxS71onI81WJGGVlW96AJeqz81Ig+Cf5l48D6iH8gEtiomWE90g6VusMOEWCJnbFGIERMl1DmUoVYUevBOIiFECAFPhGyELDDgR00EgqXujkTCAyJiMGAQIApmSgOjpQ7MEl2KMCUR7ZgzOyLasCVjyyUsCTMBUYeqx83wXLEhov5mt3Rit+kT0eNPZ+4Cwl3fTdN/DD5oy19QoJEcy1l/8AAAAABJRU5ErkJggg==">Available balance</div></div><div data-v-dabc66b0="" class="balanceAssets__main"><p data-v-dabc66b0="">₹<?php echo  $balance?></p><img data-v-dabc66b0="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFkAAAA7CAMAAAAn6dbMAAAAOVBMVEUAAAD///////////////////////////////////////////////////////////////////////8KOjVvAAAAEnRSTlMAIN9AgO8QMM9gcKC/kK9Qj29ZmZoEAAAB7klEQVRYw93Y23LjIAwGYHE+OU5W7/+wO2M1/r31QAzBN6uLTqd0voAEyA79H6EWvhAurtZ0ypEvhy6qR+au6LGXPtrl63nW3BfFTy2zMnlfXFTTd9FD/9CepttF6IXmRxY60/xIQgeaH+m2fNBjow3ND++uTNpka81YFZs7L8jm18+RSedL5zoNZLo0PlrggXo8t5XWx1dGuNCVjnaiLfMwvSVaVQb/MI/TupFBJZzsDfmppshKNDmpIYL+WhbLShNUCrP+Vn5t0ko/Mn2kfTIN2RuFbSHOW/5EB8dsK7KMZmx0dop2GbSv93d7llEzd6weQcZfo6/mFTRkDOJQW4L8XlOVznykIaNmej/UK/2S27QVOp9k1Ay/nWQyvMVabyScfssBbTG+q3eWKXH9qimgD7LSWMsi42cZNFGDDpBR2tPWhHwslW3eui4c5Nc/fVw9A1VlUslUz2HcaZFRM0RNlmjRIokccOK+lEFvcpIkP+l7GXeA4z0sTZBBIx7NizbQMK1988Uq0RDd7hVFVjRKhw+PaJEG6dz6L3lCGqKdwM1EF+oMY8sjeWqGRb5uecyOs1lM+jUfRlucH4Zvo+1Nb9PoQ1zUbTQv2UzWLXdE39tY0n208x3fXfTRpuu7i555q96LZonXknFuFn8BRodWROohzGIAAAAASUVORK5CYII=" alt=""></div><div data-v-dabc66b0="" class="balanceAssets__tip"><img data-v-dabc66b0="" src="https://91dreamclub.com/assets/png/cip-7ed1a634.png" alt=""></div></div><div data-v-13d33537="" data-v-3cbb9e12="" class="withdrawWay"><!----><div data-v-13d33537="" onclick="window.location.href='/withdrawal#/'" class=""><div data-v-13d33537="" ><img data-v-13d33537="" src="https://ossimg.91admin123admin.com/91club/payNameIcon/WithBeforeImgIcon2_20230912183258ejvp.png"></div><span data-v-13d33537=""> BANK CARD</span></div><div data-v-13d33537="" class="select"><div data-v-13d33537=""><img data-v-13d33537="" src="https://ossimg.91admin123admin.com/91club/payNameIcon/WithBeforeImgIcon_20230912183344vmsx.png"></div><span data-v-13d33537="">USDT</span></div></div><div data-v-3cbb9e12="" class="bankInfo"><div data-v-3cbb9e12="" class="bankInfoItem"><div data-v-3cbb9e12=""><img data-v-3cbb9e12="" src="https://91dreamclub.com/assets/png/1-4618686f.png"><span data-v-3cbb9e12="">TRC20 USDT</span></div><div data-v-3cbb9e12=""><span data-v-3cbb9e12=""></span><span data-v-3cbb9e12=""><?php echo $row["Address"];?></span></div><i data-v-3cbb9e12="" class="van-badge__wrapper van-icon van-icon-arrow"><!----><!----><!----></i></div><!----><!----></div><div class="row mt-4 mb-4">
			    <div style="display:none;" class="col-12">
<div class="row" id="bcard">
	<div class="col-12 xtl tf-24 tfw-7 pl-0"><span style="background: #0487E2;color: #fff;padding: 0 10px;border-radius: 6px;">Bank<span></span></span></div>
	<div class="col-12 pt-2 xtl tfw-7 tf-20 tfcdb" id="wusr"></div>
	<div class="col-12 pt-2 xtl tfw-7 tf-20 tfcdb" id="wpid"></div>
	<div class="col-12 xtr pa-0"><span class="checked"></span></div>
</div>
<div class="pt-2 xtr"><span class="mcpl tfcdg" onclick="window.location.href='bankcard#'">Change &gt;</span></div>
</div><div class="col-12" id="add"><div data-v-fbdbcf8d="" onclick="window.location.href='addusdt#'" data-v-3cbb9e12="" class="addWithdrawType"><div data-v-fbdbcf8d="" class="addWithdrawType-top"><img data-v-fbdbcf8d="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAALAAAACwCAMAAACYaRRsAAAAM1BMVEUAAAC3u8+4vNC5vNC5vdG4vNC3us+3t8+4vNC2vM+5vNG4vM+vv8+vr8+5vNC4vNC4vNB5o5b1AAAAEHRSTlMAQN/vj59gIM+QX5AQEK+/+pPJwgAAAbpJREFUeNrt3MuSokAQRuGsKkS8/+//tMPEbCYygDCbjs7CPt8a5QjKAos0AAAAAMAHKsPUtGywRdeV7evVFg1aMZ3OFvV4akOxJVUrmi0p2hBNPlfFg5tW1Hiw6vkbey+2aFx5VRtt0W27+B4IPmk2lYelePz75M/AAdbsZIlOmpXQ5tVSvdw3b9skabRURdJk79Lsbqnukloo2BL4BoL/QzDBDsEEOwQT7BBMsEMwwQ7BBDsEf3bwTbpYonhDKZauhwb84hM6SIMdSQ8XRoK7QrBDMMEOwQQ7BBPsEEzwtmur18TgeEOVWkawb9i/u17fgWCCCSa4q90RvGzQDsPPBxftUgh+41+THS786AgmmGCC+9ndLwxuUk0MjjeMtY0JwbGGQ9+qIrh/BDsEE+wQTLBDMMEOwQR/0aHWeH/2clwc4ISWcqz11X8bDnVR+uwnZQgmmGCCCSaYYIdggh2CCXYIJtghONTQ+hgjqdCgzmKpxtCgzpukl6WqoemxpY9hs2d721OzOmaN8y2v6BG7Vzk/MEN774jnhBnavjdUfMqdof18mFk0eUqaod2mSwc31AEAAAAA3+4PU1FviV2McX8AAAAASUVORK5CYII="><span data-v-fbdbcf8d="">Add address</span></div><div data-v-fbdbcf8d="" class="addWithdrawType-text">Need to add beneficiary information to be able to withdraw money</div></div>
<div class="row" style="display:none;" id="bcard">
	<div class="col-12 pt-4 pb-4 tf-20 mcpl" ><span class="add"></span><span id="wpid">Add BankCard</span></div></div></div><form action="sub1.php" id="wform" method="post">
</div><div data-v-fbdbcf8d="" data-v-3cbb9e12="" style="display:none;" class="addWithdrawType"><div data-v-fbdbcf8d="" class="addWithdrawType-top"><img data-v-fbdbcf8d="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAALAAAACwCAMAAACYaRRsAAAAM1BMVEUAAAC3u8+4vNC5vNC5vdG4vNC3us+3t8+4vNC2vM+5vNG4vM+vv8+vr8+5vNC4vNC4vNB5o5b1AAAAEHRSTlMAQN/vj59gIM+QX5AQEK+/+pPJwgAAAbpJREFUeNrt3MuSokAQRuGsKkS8/+//tMPEbCYygDCbjs7CPt8a5QjKAos0AAAAAMAHKsPUtGywRdeV7evVFg1aMZ3OFvV4akOxJVUrmi0p2hBNPlfFg5tW1Hiw6vkbey+2aFx5VRtt0W27+B4IPmk2lYelePz75M/AAdbsZIlOmpXQ5tVSvdw3b9skabRURdJk79Lsbqnukloo2BL4BoL/QzDBDsEEOwQT7BBMsEMwwQ7BBDsEf3bwTbpYonhDKZauhwb84hM6SIMdSQ8XRoK7QrBDMMEOwQQ7BBPsEEzwtmur18TgeEOVWkawb9i/u17fgWCCCSa4q90RvGzQDsPPBxftUgh+41+THS786AgmmGCC+9ndLwxuUk0MjjeMtY0JwbGGQ9+qIrh/BDsEE+wQTLBDMMEOwQR/0aHWeH/2clwc4ISWcqz11X8bDnVR+uwnZQgmmGCCCSaYYIdggh2CCXYIJtghONTQ+hgjqdCgzmKpxtCgzpukl6WqoemxpY9hs2d721OzOmaN8y2v6BG7Vzk/MEN774jnhBnavjdUfMqdof18mFk0eUqaod2mSwc31AEAAAAA3+4PU1FviV2McX8AAAAASUVORK5CYII="><span data-v-fbdbcf8d="">Add a bank account number</span></div><div data-v-fbdbcf8d="" class="addWithdrawType-text">Need to add beneficiary information to be able to withdraw money</div></div><div class="container" style="display:none;">
	<div class="currency">
		<select id="from_currency">
			<option value="INR" selected>INR</option>
		</select>
	</div>
	<div class="middle">
		<button id="exchange">
			<i class="fas fa-exchange-alt"></i>
		</button>
	</div>
	<div class="currency">
		<select id="to_currency">
			<option value="USD" selected>USD</option>
		</select>
	</div>
</div>
  <script  src="function.js"></script><div data-v-eee9adef="" class="explain usdt" style=""><div data-v-eee9adef="" class="head"><img data-v-eee9adef="" src="https://91dreamclub.com/assets/png/3-6bb1e3bd.png"><h1 data-v-eee9adef="" >Select USDT = </h1><h1 data-v-eee9adef="" id="rate"></h1><!----></div><div data-v-eee9adef="" class="input"><div data-v-eee9adef="" class="place-div">₹</div><input data-v-eee9adef="" type="number" id="from_ammount" class="van-field__control" placeholder="Please enter withdrawal amount" class="inp"></div><!----><!----><div data-v-eee9adef="" class="input"><div data-v-eee9adef="" class="place-div">₹</div><input data-v-eee9adef="" autocomplete="off"  type="tel" maxlength="5" id="withdraw" name="withdraw" class="van-field__control" placeholder="Please R-enter withdrawal amount"></div><div data-v-eee9adef="" class="input"><input data-v-eee9adef="" type="number" id="to_ammount" class="van-field__control" disabled="" placeholder="Please enter UDST amount" class="inp"><div data-v-eee9adef="" class="place-div"><div data-v-eee9adef="" class="place-icon"><img data-v-eee9adef="" src="https://91dreamclub.com/assets/png/3-6bb1e3bd.png"></div></div></div>
<script>
// Code By Webdevtrick ( https://webdevtrick.com )
const from_currencyEl = document.getElementById('from_currency');
const from_ammountEl = document.getElementById('from_ammount');
const to_currencyEl = document.getElementById('to_currency');
const to_ammountEl = document.getElementById('to_ammount');
const rateEl = document.getElementById('rate');
const exchange = document.getElementById('exchange');

from_currencyEl.addEventListener('change', calculate);
from_ammountEl.addEventListener('input', calculate);
to_currencyEl.addEventListener('change', calculate);
to_ammountEl.addEventListener('input', calculate);

exchange.addEventListener('click', () => {
	const temp = from_currencyEl.value;
	from_currencyEl.value = to_currencyEl.value;
	to_currencyEl.value = temp;
	calculate();
});

function calculate() {
	const from_currency = from_currencyEl.value;
	const to_currency = to_currencyEl.value;
	
	fetch(`https://api.exchangerate-api.com/v4/latest/${from_currency}`)
		.then(res => res.json())
		.then(res => {
		const rate = res.rates[to_currency];
		rateEl.innerText = `1 ${from_currency} = ${rate} ${to_currency}`
		to_ammountEl.value = (from_ammountEl.value * rate).toFixed(2);
	})
}

calculate();
</script><div data-v-eee9adef="" class="input"><div data-v-eee9adef="" class="place-div"><img data-v-f1cfbd6f="" class="passwordInput__container-label__icon" data-origin="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAMAAABg3Am1AAAAWlBMVEUAAAD/cXH/cHD/cnL/cXL/cXL/cXL/cXH/cnL/cnL/cXH/cHD/cXL/cXL/cnL/cnL/cXP/cnL/cHH/cXH/cnL/Zmb/cXP/cHH/cHD/cXH/cHD/cnL/dHT/cXJ2Y/zhAAAAHXRSTlMAmR8mj+/ffzlMExCvoYZfb0NAz2kKv7+Gc1ZyVs4lXHAAAAE4SURBVEjH3ZRbloMgEEQtBCUiiK8k6rD/bU7CzDEJCMJv6hPqnqKhm+I7Va6TogDUspYJ9p7iTYqf2JvF+qiqN/VH1k3UrwBs/N/T8O0ZMkeADriXH/XcgSlS7sPfOJkUKGMBXpF9LILi7q3NFHQOn2g6jCUBgAP9wcMAPABcDuvjwCULKMPAmgt02YCUPfHE5TEw0JGZgNgoB8dOruZEFfnwV8ZkEa1J0O0twCTpVUedBtQ74FXMqNbSq6vdgdHZoeIwuNoBFoh2CLYD/m30y8L9swaAwbYh8PN4/iRAFA2s5kIkAbZBAdu6iQkzrJrEhMHOnp2CzgHCt8Sn7jlLVQDIfge3CaTtZEGd5THS3beaXlm4l7RJkt4BkQaQzImTxUsid6YLIs/8rXA/Gt2GPiZWtZoUX6Rf0glhk/KUKW0AAAAASUVORK5CYII=" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAMAAABg3Am1AAAAWlBMVEUAAAD/cXH/cHD/cnL/cXL/cXL/cXL/cXH/cnL/cnL/cXH/cHD/cXL/cXL/cnL/cnL/cXP/cnL/cHH/cXH/cnL/Zmb/cXP/cHH/cHD/cXH/cHD/cnL/dHT/cXJ2Y/zhAAAAHXRSTlMAmR8mj+/ffzlMExCvoYZfb0NAz2kKv7+Gc1ZyVs4lXHAAAAE4SURBVEjH3ZRbloMgEEQtBCUiiK8k6rD/bU7CzDEJCMJv6hPqnqKhm+I7Va6TogDUspYJ9p7iTYqf2JvF+qiqN/VH1k3UrwBs/N/T8O0ZMkeADriXH/XcgSlS7sPfOJkUKGMBXpF9LILi7q3NFHQOn2g6jCUBgAP9wcMAPABcDuvjwCULKMPAmgt02YCUPfHE5TEw0JGZgNgoB8dOruZEFfnwV8ZkEa1J0O0twCTpVUedBtQ74FXMqNbSq6vdgdHZoeIwuNoBFoh2CLYD/m30y8L9swaAwbYh8PN4/iRAFA2s5kIkAbZBAdu6iQkzrJrEhMHOnp2CzgHCt8Sn7jlLVQDIfge3CaTtZEGd5THS3beaXlm4l7RJkt4BkQaQzImTxUsid6YLIs/8rXA/Gt2GPiZWtZoUX6Rf0glhk/KUKW0AAAAASUVORK5CYII="></div><input data-v-eee9adef="" placeholder="Please input account password" autocomplete="off" name="password" type="password" class="inp"></div><!----><div data-v-eee9adef="" class="balance bank"><div data-v-eee9adef=""><span data-v-eee9adef="">Withdrawable balance <h6 data-v-eee9adef="" class="red">₹<?php echo  $balance?></h6></span><input data-v-eee9adef="" type="button" value="All"></div><div data-v-eee9adef=""><span data-v-eee9adef="">Withdrawal amount received</span><div data-v-eee9adef="" class="rightD"><span data-v-eee9adef="" class="yellow">₹<span id="feesamount">0</span>.00</span></div></div></div></div><div data-v-eee9adef="" class="explain usdt" style="display: none;"><div data-v-eee9adef="" class="head"><img data-v-eee9adef="" src="https://91dreamclub.com/assets/png/1-bcd21d34.png"><!----><!----></div><div data-v-eee9adef="" class="input"><div data-v-eee9adef="" class="place-div">₹</div><input data-v-eee9adef="" type="number" placeholder="Please enter withdrawal amount" class="inp"></div><!----><!----><!----><div data-v-eee9adef="" class="balance usdt"><div data-v-eee9adef=""><span data-v-eee9adef="">Withdrawable balance <h6 data-v-eee9adef="" class="yellow">₹</h6></span><input data-v-eee9adef="" type="button" value="All"></div></div></div><div data-v-3cbb9e12="" class="recycleBtnD"><button data-v-3cbb9e12="" onclick="sub1()" class="recycleBtn active">Withdraw</button></form></div><div data-v-699510fe="" data-v-3cbb9e12="" class="Recharge__container-intro"><p data-v-699510fe="">Need to bet <span data-v-470caa86="" class="red">₹0.00</span> to be able to withdraw</p><p data-v-699510fe="">Withdraw time <span data-v-699510fe="" class="red">00:00-23:59</span></p><p data-v-699510fe="">Inday Remaining Withdrawal Times<span data-v-699510fe="" class="red">10</span></p><p data-v-699510fe="">Withdraw fee is only <span data-v-699510fe="" class="red">₹<span id="fees">0</span>.00</span> for all withdrawal</p><p data-v-699510fe="">Withdrawal amount range <span data-v-699510fe="" class="red">₹833.00-₹1,000,000.00</span></p><p data-v-699510fe="">After withdraw, you need to confirm the blockchain main network 3 times before it arrives at your account.</p><p data-v-699510fe="">Please confirm that the operating environment is safe to avoid information being tampered with or leaked.</p><!----><!----></div><div data-v-fda53fc1="" data-v-3cbb9e12="" class="rechargeh__container" style="display:none;"><div data-v-fda53fc1="" class="rechargeh__container-head"><img data-v-fda53fc1="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGAAAABgBAMAAAAQtmoLAAAAJ1BMVEUAAAD/cXL/cXL/cHD/cXH/cXL/cHD/cXL/////9vf/pqf/7e7/7e3ZVqe2AAAAB3RSTlMA799gX7cgdf8tvgAAAIpJREFUWMPt06ENgEAMheFTLIBggUvwbMAIKDQjgOkKEBYgbEBYhDAVtqLX9ASEpO/3n2leA7JXdJQuCmAgpVEAPWkJgPJBSAbwNWhJKQqgVhclAFIDAAAASIFjZt0GcHGwGMDGwWoAJwf7L64E4AXgHwC8A9YroMoFjR3wALwAdVGTANRFlQGZewAgtne9HOEfwgAAAABJRU5ErkJggg=="><h1 data-v-fda53fc1="">Withdrawal history</h1></div><div data-v-fda53fc1="" class="rechargeh__container-content"><div data-v-91f2fefc="" data-v-fda53fc1="" class="empty__container"><img data-v-91f2fefc="" alt="" class="" data-origin="https://91dreamclub.com/assets/png/empty-4ac9a431.png" src="https://91dreamclub.com/assets/png/empty-4ac9a431.png"><p data-v-91f2fefc="">No data</p></div></div><div data-v-fda53fc1="" class="rechargeh__container-footer"><button data-v-fda53fc1="">All history</button></div></div></div><!----><!----><!----></div><div class="customer" id="customerId" style="--36a344b0: 'Roboto', 'Inter', sans-serif; --17a7a9f6: bahnschrift;"><img onclick="window.location.href='/keFuMenu#/'" class="" data-origin="https://91dreamclub.com/assets/png/icon_sevice-9f0c8455.png" src="https://91dreamclub.com/assets/png/icon_sevice-9f0c8455.png"></div><!----><!----></div>
<foreignobject></foreignobject><style>
      .van-toast {
    position: fixed;
    top: 50%;
    left: 50%;
    display: -webkit-box;
    display: -webkit-flex;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
    flex-direction: column;
    -webkit-box-align: center;
    -webkit-align-items: center;
    align-items: center;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    justify-content: center;
    box-sizing: content-box;
    width: 88px;
    max-width: 70%;
    min-height: 88px;
    padding: 16px;
    color: #fff;
    font-size: 14px;
    line-height: 20px;
    white-space: pre-wrap;
    text-align: center;
    word-wrap: break-word;
    background-color: rgba(50, 50, 51, .88);
    border-radius: 8px;
    -webkit-transform: translate3d(-50%, -50%, 0);
    transform: translate3d(-50%, -50%, 0);
}.mt-4, .my-4 {
    margin-top: 0rem!important;
}.mb-4, .my-4 {
    margin-bottom: 0rem!important;
}.passwordInput__container-label__icon[data-v-f1cfbd6f] {
    width: 0.64rem;
    height: 0.64rem;
    margin-right: 0rem;
    max-height:30px;
}
.van-toast--html, .van-toast--text {
    width: -webkit-fit-content;
    width: fit-content;
    min-width: 96px;
    min-height: 0;
    padding: 8px 12px;
}
</style><script>
        function sub1(){
            if(<?php echo $row["account"];?> =="1111111111"){
                var y = document.getElementById("copied");
                 y.innerHTML="Add Bankcard to withdraw";
        document.getElementById('copied').style.display= '';
        setTimeout(function () { document.getElementById('copied').style.display= 'none'; }, 3000);
                
            }else{
                 if(<?php echo $bonus;?> =="0" || <?php echo $bonus;?>==""){
         var y = document.getElementById("copied");
                 y.innerHTML="Need first recharge of ₹200 to withdraw";
       document.getElementById('copied').style.display= '';
        setTimeout(function () { document.getElementById('copied').style.display= 'none'; }, 3000);
            }else{
                       if(<?php echo $remain;?> <=0){
                  var x=document.getElementById("withdraw").value;
            if(x>329){
                document.getElementById("wform").submit();
               
            }else{
                 var y = document.getElementById("copied");
                 y.innerHTML="Minimum withdraw ₹330 ";
        document.getElementById('copied').style.display= '';
        setTimeout(function () { document.getElementById('copied').style.display= 'none'; }, 3000);
            }
            }else{
                 var y = document.getElementById("copied");
                 y.innerHTML="you to bet <?php echo $remain;?>  more to withdraw";
        document.getElementById('copied').style.display= '';
        setTimeout(function () { document.getElementById('copied').style.display= 'none'; }, 3000);
            }
            }
           
            }
 } 
   
    </script>
 <script>
    if(<?php echo $row["account"];?> =="1111111111") {
          document.getElementById("add").style.display= "block";
        document.getElementById("bank").style.display= "none";    
                            
    } else {
        document.getElementById("add").style.display= "none";
        document.getElementById("bank").style.display= "block";          
    }
</script><script>
    
    setInterval(function () { 
        var x=document.getElementById("withdraw").value;
        document.getElementById("fees").innerHTML=0;
        document.getElementById("feesamount").innerHTML=x-0;
        }, 300);
        function sub1(){
            if(<?php echo $row["account"];?> ==""){
                var y = document.getElementById("copied");
                 y.innerHTML="Add Bankcard or UPI to withdraw";
         y.className = "show";
         setTimeout(function () {
             y.className = y.className.replace("show", "");
         }, 3000);
                
            }else{
                 if(false){
         var y = document.getElementById("copied");
                 y.innerHTML="Need first recharge of ₹<?php echo  $minir?> to withdraw";
         y.className = "show";
         setTimeout(function () {
             y.className = y.className.replace("show", "");
         }, 3000);
            }else{
                       if(<?php echo $remain;?> >=0){
                  var x=document.getElementById("withdraw").value;
            if(x< <?php echo  ($mini-1)?>){
                var y = document.getElementById("copied");
                y.innerHTML="Minimum withdraw <?php echo  $mini?>";
         y.className = "show";
         setTimeout(function () {
             y.className = y.className.replace("show", "");
         }, 3000);

            }else{
                document.getElementById("wform").submit();
            }
            }else{
                 var y = document.getElementById("copied");
                 y.innerHTML="you to bet <?php echo $remain;?> more to withdraw";
         y.className = "show";
         setTimeout(function () {
             y.className = y.className.replace("show", "");
         }, 3000);
            }
            }
           
            }
        } 
    </script>
        <script>
    if(<?php echo $row["account"];?> =="account") {
        document.getElementById("bank").innerHTML= "Add Bankcard To Withdraw";
                            
    } else {
        document.getElementById("bank").innerHTML= "<?php echo $row["account"];?>";          
    }
    </script>
        <script>
       
       document.getElementById("bt").onclick=function(){open()};
        function open(){
            document.getElementById("cover").style.display="block";
        }
           function confirm0(){
             ban=false;
             console.log(ban);
            document.getElementById("cover").style.display="none";
            
             document.getElementById("acc").innerHTML= "<?php echo $row["account"];?>";
        }
        function close0(){
            document.getElementById("cover").style.display="none";
        }
    if(account =="account") {
        document.getElementById("bank").innerHTML= "No Bankcard";
                            
    } else {
        document.getElementById("bank").innerHTML= "<?php echo $row["account"];?>";          
    }
    </script></body></html>