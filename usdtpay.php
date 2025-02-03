<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location:login#");
    exit;
}

require_once "config.php";
$sql = "SELECT  nickname FROM users WHERE username='".$_SESSION['username']."'";
$result = $conn->query($sql);
$row = mysqli_fetch_array($result);

if ($_SERVER['REQUEST_METHOD'] == "POST"){
 
        $nickname = trim($_POST['nick']);
  
    


if(!empty($nickname))
{
   
$sql = "UPDATE users SET nickname= '$nickname' WHERE username='".$_SESSION['username']."'";


$conn->query($sql);
if ($conn->query($sql) === TRUE) {
     header("location: main#");
} else {
     header("location: main#");
}
   


}
else{
      header("location: main#"); 
}
$opt="SELECT SUM(amount) as total FROM `bonus` WHERE usercode='".$_SESSION['usercode']."'";
$optres=$conn->query($opt);
$sum= mysqli_fetch_assoc($optres);
if($sum['total']==""){
    $bonus="0.00";
    
}else{
    $bonus=round($sum['total'],2);
}
}
$sql = "SELECT  balance FROM users WHERE username='".$_SESSION['username']."'";
$result = $conn->query($sql);
$row = mysqli_fetch_array($result);
$balance=round($row['balance'],2);
echo ""

?>
<html lang="en" translate="no" data-dpr="1" style="font-size: 38.56px;"><head>
<meta charset="UTF-8">
<link rel="icon" href="./ico.png">
<meta name="google" content="notranslate">
<meta name="robots" content="noindex,nofollow">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

<link rel="manifest">
<title>91 Club</title>
<link rel="stylesheet" href="https://91dreamclub.com//assets/css/modules-96f5a6e8.css">
<link rel="stylesheet" href="https://91dreamclub.com//assets/css/page-activity-871556fb.css">
<link rel="stylesheet" href="https://91dreamclub.com//assets/css/page-home-0d70abbb.css">
<link rel="stylesheet" href="https://91dreamclub.com//assets/css/index-08abe1f5.css">
<link rel="modulepreload" as="script" crossorigin="" href="/assets/js/page-main-eac2089d.js"><link rel="modulepreload" as="script" crossorigin="" href="/assets/js/page-login-c581a4df.js"><link rel="stylesheet" href="https://91dreamclub.com//assets/css/page-login-1f545390.css"><link rel="stylesheet" href="https://91dreamclub.com//assets/css/page-main-8cf260fb.css"><link rel="modulepreload" as="script" crossorigin="" href="/assets/js/home-c9e2cd52.js"><link rel="modulepreload" as="script" crossorigin="" href="/assets/js/activity-46c093bd.js"><link rel="modulepreload" as="script" crossorigin="" href="/assets/js/promotion-5577fd39.js"><link rel="modulepreload" as="script" crossorigin="" href="/assets/js/wallet-d91dc187.js"><link rel="modulepreload" as="script" crossorigin="" href="/assets/js/main-b43b53ed.js"><link rel="modulepreload" as="script" crossorigin="" href="/assets/js/messageIcon-12ca5522.js"><link rel="modulepreload" as="script" crossorigin="" href="/assets/js/noticeBarSpeaker-a4b974d3.js"><link rel="modulepreload" as="script" crossorigin="" href="/assets/js/noticeBarHot-28d96456.js"><link rel="modulepreload" as="script" crossorigin="" href="/assets/js/page-wallet-d4d609cb.js"><link rel="modulepreload" as="script" crossorigin="" href="/assets/js/page-test-b23bed1b.js"><link rel="stylesheet" href="https://91dreamclub.com//assets/css/page-test-b38d710a.css"><link rel="modulepreload" as="script" crossorigin="" href="/assets/js/page-promotion-db066b5a.js"><link rel="stylesheet" href="https://91dreamclub.com//assets/css/page-promotion-24bf6ab6.css"><link rel="stylesheet" href="https://91dreamclub.com//assets/css/page-wallet-24fc13b6.css"></head>
<body style="font-size: 12px;">
<div id="app" data-v-app=""><!----><!----><div data-v-c32a0642="" class="Recharge__box" style="--36a344b0: 'Roboto', 'Inter', sans-serif;"><div data-v-c32a0642="" class="Recharge__container"><div data-v-4c21fa9e="" data-v-c32a0642="" class="navbar"><div data-v-4c21fa9e="" class="navbar-fixed" style="background: rgb(247, 248, 255);"><div data-v-4c21fa9e="" class="navbar__content"><div data-v-4c21fa9e="" onclick="window.location.href='/main#';" class="navbar__content-left"><i data-v-4c21fa9e="" class="van-badge__wrapper van-icon van-icon-arrow-left"><!----><!----><!----></i></div><div data-v-4c21fa9e="" class="navbar__content-center"><!----><div data-v-4c21fa9e="" class="navbar__content-title">Deposit</div></div><div data-v-4c21fa9e="" class="navbar__content-right" style="display:none;"><div data-v-c32a0642="" class="title">Deposit history</div></div></div></div></div><div data-v-d42c1f7a="" data-v-c32a0642="" class="balanceAssets"><div data-v-d42c1f7a="" class="balanceAssets__header"><div data-v-d42c1f7a="" class="balanceAssets__header__left"><img data-v-d42c1f7a="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEgAAABICAMAAABiM0N1AAAArlBMVEUAAAD/sjH/zRj/zR//1zbuR0f/zBb/zRf/zhr/zRn/+HfuSUn/zBn/+njvSUn/zCH/+Xf/+XX/+HT/+nj/zBn/zRr/pSL/20H/2T3/1Db/zBf/30j/1zn/7mP/8Gb/3UT/9nL/9W//8mn/82z/7GDuSEj/+Xf/0zP/5lX/5FL/4Uz/6Vv/6Fj/40//613/+HT/vTT/2033kj3/xzz+yzX/rSj/sSr/0kH/sSz/rym/OY7sAAAAFnRSTlMAIsBCE+/v3IFxkZGRgYEy7+/v7rBhR1ORgAAAAh9JREFUWMPtkuly2jAQgA3hyJ2e1BKyMYGC7dbYXEn6/i/W1QqNughsI03+dPIh7SXzDSMcfPD/czXsQfTmqcv5tb+md88lHV/PzYAjXd/L4ZorD02nyw1D98u55oQb98uhDHpOl9PlFvcOl/ONn+Lp4ssZWA6XV+D70DI0vwIPnxZOfL2lnttFA6VV6vqBiL6UNouyFZ+JKDlNWSY1HA6pyB0qmgIJbJOxSnAnZowBk4GK3KGimWI6lcEs7LDChP3hMQMVuUNFz4rZIet2Rqa6PJpSkROxLYrj5xi3A1Rk8BZFcSQXFpoYw+FAT2IcmIeIKHKHiubRfC43xkguDIAa6KkeSXSkIg+IaDVfwWi1khtrALKu1AEs1aisayq6gPV2PyJ0AsOv1qSVMfiI0rdRreh3W6pRa1Gqc0pHyHrUIErboS5om63ffEUv8L0K8vqcKCOk2Tn2UiSLelEz8hft8yzbnhMVRZHBByKEGvCO9ltI50R5cZLj+WvTv5YXuYE2lKpJ1JbxS71onI81WJGGVlW96AJeqz81Ig+Cf5l48D6iH8gEtiomWE90g6VusMOEWCJnbFGIERMl1DmUoVYUevBOIiFECAFPhGyELDDgR00EgqXujkTCAyJiMGAQIApmSgOjpQ7MEl2KMCUR7ZgzOyLasCVjyyUsCTMBUYeqx83wXLEhov5mt3Rit+kT0eNPZ+4Cwl3fTdN/DD5oy19QoJEcy1l/8AAAAABJRU5ErkJggg=="> Balance</div></div><div data-v-d42c1f7a="" class="balanceAssets__main"><p data-v-d42c1f7a="">₹<?php echo $balance?></p><img data-v-d42c1f7a="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFkAAAA7CAMAAAAn6dbMAAAAOVBMVEUAAAD///////////////////////////////////////////////////////////////////////8KOjVvAAAAEnRSTlMAIN9AgO8QMM9gcKC/kK9Qj29ZmZoEAAAB7klEQVRYw93Y23LjIAwGYHE+OU5W7/+wO2M1/r31QAzBN6uLTqd0voAEyA79H6EWvhAurtZ0ypEvhy6qR+au6LGXPtrl63nW3BfFTy2zMnlfXFTTd9FD/9CepttF6IXmRxY60/xIQgeaH+m2fNBjow3ND++uTNpka81YFZs7L8jm18+RSedL5zoNZLo0PlrggXo8t5XWx1dGuNCVjnaiLfMwvSVaVQb/MI/TupFBJZzsDfmppshKNDmpIYL+WhbLShNUCrP+Vn5t0ko/Mn2kfTIN2RuFbSHOW/5EB8dsK7KMZmx0dop2GbSv93d7llEzd6weQcZfo6/mFTRkDOJQW4L8XlOVznykIaNmej/UK/2S27QVOp9k1Ay/nWQyvMVabyScfssBbTG+q3eWKXH9qimgD7LSWMsi42cZNFGDDpBR2tPWhHwslW3eui4c5Nc/fVw9A1VlUslUz2HcaZFRM0RNlmjRIokccOK+lEFvcpIkP+l7GXeA4z0sTZBBIx7NizbQMK1988Uq0RDd7hVFVjRKhw+PaJEG6dz6L3lCGqKdwM1EF+oMY8sjeWqGRb5uecyOs1lM+jUfRlucH4Zvo+1Nb9PoQ1zUbTQv2UzWLXdE39tY0n208x3fXfTRpuu7i555q96LZonXknFuFn8BRodWROohzGIAAAAASUVORK5CYII=" alt=""></div><div data-v-d42c1f7a="" class="balanceAssets__tip"><img data-v-d42c1f7a="" src="https://91dreamclub.com/assets/png/cip-7ed1a634.png" alt=""></div></div><div data-v-5aaf3cbf="" data-v-c32a0642=""><!----><div data-v-5aaf3cbf="" class="Recharge__container-tabcard"><div data-v-5aaf3cbf="" onclick="window.location.href='/recharge#';" class="Recharge__container-tabcard__items"><div data-v-5aaf3cbf="" class="centers"><div data-v-5aaf3cbf="" class="Recharge__container-tabcard__top"><img data-v-5aaf3cbf="" class="img" src="https://ossimg.91admin123admin.com/91club/payNameIcon/payNameIcon_20230814220354pnun.png" alt=""></div><div data-v-5aaf3cbf="" class="Recharge__container-tabcard__bot">UPI-APP <!----></div></div></div><div data-v-5aaf3cbf="" onclick="window.location.href='/bankpay#';" class="Recharge__container-tabcard__items"><div data-v-5aaf3cbf="" class="centers"><div data-v-5aaf3cbf="" class="Recharge__container-tabcard__top"><img data-v-5aaf3cbf="" class="img" src="https://ossimg.91admin123admin.com/91club/payNameIcon/payNameIcon_20230814220427bfg8.png" alt=""></div><div data-v-5aaf3cbf="" class="Recharge__container-tabcard__bot">UPI-Transfer <!----></div></div></div><div data-v-5aaf3cbf="" class="Recharge__container-tabcard__items" style="display:none;"><div data-v-5aaf3cbf="" class="centers"><div data-v-5aaf3cbf="" class="Recharge__container-tabcard__top"><img data-v-5aaf3cbf="" class="img" src="https://ossimg.91admin123admin.com/91club/payNameIcon/payNameIcon_20230814220511nays.png" alt=""></div><div data-v-5aaf3cbf="" class="Recharge__container-tabcard__bot">PAYTM <!----></div></div></div><div data-v-5aaf3cbf="" class="Recharge__container-tabcard__items active"><div data-v-5aaf3cbf="" class="centers"><div data-v-5aaf3cbf="" class="Recharge__container-tabcard__top"><img data-v-5aaf3cbf="" class="img" src="https://ossimg.91admin123admin.com/91club/payNameIcon/payNameIcon2_202308142205196p3u.jpg" alt=""></div><div data-v-5aaf3cbf="" class="Recharge__container-tabcard__bot">USDT <span data-v-5aaf3cbf="">3%</span></div></div></div></div></div><div data-v-a6dc3363="" data-v-c32a0642="" class="Recharge__content"><span data-v-37666d52="" style="display:none;" class="m-l-10">Fast UPI</span></div><div data-v-37666d52="" style="display:none;" class="rechargeType"><div data-v-37666d52=""  class="customerBox"><div data-v-37666d52="" class="c-row"><div data-v-37666d52="" style="border-radius: 0.26667rem;" class="item c-row c-row-center"><div data-v-37666d52=""><div data-v-37666d52="" class="c-row c-row-center van-ellipsis name">E-PAY</div><input class="hw-20 radiobtn" type="radio" name="payment" value="2"  id="bonr"><div data-v-37666d52="" class="txt m-t-5">Amount:200 - 30K</div><!----></div><div data-v-37666d52="" class="icon"><i data-v-37666d52="" style="color: rgb(255, 255, 255); font-size: 14px;"><!----></i></div></div><div data-v-37666d52="" class="item c-row c-row-center" style="border-radius: 0.26667rem;"><div data-v-37666d52=""><input class="hw-20 radiobtn" type="radio"  name="payment" value="1" id="bonc"><div data-v-37666d52="" class="c-row c-row-center van-ellipsis name">FAST PAY</div><div data-v-37666d52="" class="txt m-t-5">Amount:300 - 50K</div><!----></div><!----></div><div data-v-37666d52="" class="item c-row c-row-center" style="border-radius: 0.26667rem;"><div data-v-37666d52=""><input class="hw-20 radiobtn" type="radio"   checked="checked" name="payment" value="4" id="bonb"><div data-v-37666d52="" class="c-row c-row-center van-ellipsis name">TB PAY</div><div data-v-37666d52="" class="txt m-t-5">Amount:200 - 30K</div><!----></div><!----></div><div data-v-37666d52="" class="item c-row c-row-center" style="border-radius: 0.26667rem;"><div data-v-37666d52=""><input class="hw-20 radiobtn" type="radio"  name="payment" value="5" id="bond"><div data-v-37666d52="" class="c-row c-row-center van-ellipsis name">EK PAY</div><div data-v-37666d52="3" class="txt m-t-5">Amount:500 - 100K</div><!----></div><!----></div><div data-v-37666d52="" class="item c-row c-row-center" style="border-radius: 0.26667rem;"><div data-v-37666d52=""><input class="hw-20 radiobtn" type="radio"  name="payment" value="" id="bona"><div data-v-37666d52="" class="c-row c-row-center van-ellipsis name">Right-Pays</div><div data-v-37666d52="" class="txt m-t-5">Amount:200 - 30K</div><!----></div><!----></div></div></div></div><div data-v-a6dc3363="" class="Recharge__content-quickInfo boxStyle"><div data-v-a6dc3363="" class="Recharge__content-quickInfo__title"><div data-v-a6dc3363="" class="title"><img data-v-a6dc3363="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAMAAABg3Am1AAAANlBMVEUAAAD/cXL/cXP/cHT/cXL/cHL/cHD/cnP/cXP/cHD/cXH/c3P/cXL/cnL/cXL/cXL/cXP/cXLtIiw8AAAAEXRSTlMA379AYCAQn88wkFDvgLBwkJqQ7/MAAADYSURBVEjH1dJLDoMwEAPQyYf8CKS5/2W7gCmqFWSQ2kp9qywMkjWWn7P9nReig4nkHeSNEAt8ED9dIWyxWsy9Cl78xQply2V9rLSC/jfdqrDqo2fywaz/nb9VIUGFdq1CfFVI9uBJBWRGJ4x63cLzWAHULAOTVpg6cvQKfLNHhbw/DouMmf1arbK8Vhh7yAk/zkcBUAGlIAAqAHOeD263woEpC3kKBkE5GATVYBC8AhyYqjfzGQZBeRgEFWEQVIJBMAEOTM2QpwoMgrIwCAoGQTk4MJWb/KEnEComr7MGPBMAAAAASUVORK5CYII=" alt=""><p data-v-a6dc3363="">Select channel</p></div></div><div data-v-a6dc3363="" class="Recharge__content-quickInfo__item item_active"><div data-v-a6dc3363="" class="usdt_icon"><img data-v-a6dc3363="" src="https://91dreamclub.com/assets/png/usdt-40311708.png" alt=""><div data-v-a6dc3363=""><div data-v-a6dc3363="">USDT-TRC20</div><div data-v-a6dc3363="">Balance:10 - 50K</div><div data-v-a6dc3363="" class="bouns"id="rate"></div><div data-v-a6dc3363="" class="bouns">3% bonus</div></div></div></div></div><!----><!----><div data-v-a6dc3363="" class="Recharge__content-paymoney boxStyle"><div data-v-a6dc3363="" class="Recharge__content-paymoney__title"><img data-v-a6dc3363="" src="https://91dreamclub.com/assets/png/usdt-40311708.png" alt=""><p data-v-a6dc3363="">Select amount of USDT</p></div><div data-v-a6dc3363="" class="Recharge__content-paymoney__money-list"><div id="500" data-v-a6dc3363="" class="Recharge__content-paymoney__money-list__item"><img data-v-a6dc3363="" src="https://91dreamclub.com/assets/png/usdt-40311708.png" alt="" class="usdt"> 10</div><div data-v-a6dc3363="" id="1000" class="Recharge__content-paymoney__money-list__item"><img data-v-a6dc3363="" src="https://91dreamclub.com/assets/png/usdt-40311708.png" alt="" class="usdt"> 20</div><div data-v-a6dc3363="" id="2000" class="Recharge__content-paymoney__money-list__item"><img data-v-a6dc3363="" src="https://91dreamclub.com/assets/png/usdt-40311708.png" alt="" class="usdt"> 50</div><select style="display:none;" id="from_currency">
			<option style="display:none;" value="USD" selected>USD</option>
		</select>
	<div  style="display:none;" class="middle">
		<button style="display:none;" id="exchange">
			<i style="display:none;" class="fas fa-exchange-alt"></i>
		</button>
	</div>
	<div style="display:none;" class="currency">
		<select style="display:none;" id="to_currency">
			<option style="display:none;" value="INR" selected>INR</option>
		</select>
		
</div><div data-v-a6dc3363="" id="5000" class="Recharge__content-paymoney__money-list__item"><img data-v-a6dc3363="" src="https://91dreamclub.com/assets/png/usdt-40311708.png" alt="" class="usdt"> 100</div><div data-v-a6dc3363="" id="10000" class="Recharge__content-paymoney__money-list__item"><img data-v-a6dc3363="" src="https://91dreamclub.com/assets/png/usdt-40311708.png" alt="" class="usdt"> 200</div><div data-v-a6dc3363="" id="20000" class="Recharge__content-paymoney__money-list__item"><img data-v-a6dc3363="" src="https://91dreamclub.com/assets/png/usdt-40311708.png" alt="" class="usdt"> 500</div></div><div data-v-a6dc3363="" class="Recharge__content-paymoney__money-input radius"><div data-v-a6dc3363="" class="place-div usdt"></div><div data-v-a6dc3363="" class="van-cell van-field amount-input" modelmodifiers="[object Object]"><!----><!----><div class="van-cell__value van-field__value"><div class="van-field__body"><input type="number" id="from_ammount" class="van-field__control" placeholder="Please enter UDST amount"><!----><!----><!----></div><!----><!----></div><!----><!----></div><div data-v-a6dc3363="" class="place-right"></div></div><div data-v-a6dc3363="" class="Recharge__content-paymoney__money-input radius"><div data-v-a6dc3363="" class="place-div usdt"></div><div data-v-a6dc3363="" class="van-cell van-field amount-input" modelmodifiers="[object Object]"><!----><!----><div class="van-cell__value van-field__value"><div class="van-field__body"><input type="tel" maxlength="5" autocomplete="off"  id="amount" class="van-field__control" placeholder="Please Re-enter UDST amount"><!----><!----><!----></div><!----><!----></div><!----><!----></div><div data-v-a6dc3363="" class="place-right"></div></div><div data-v-a6dc3363="" class="Recharge__content-paymoney__money-input radius"><div data-v-a6dc3363="" class="place-div">₹</div><div data-v-a6dc3363="" class="van-cell van-field van-field--disabled amount-input" modelmodifiers="[object Object]"><!----><!----><div class="van-cell__value van-field__value"><div class="van-field__body"><input type="number" id="to_ammount" class="van-field__control" disabled="" placeholder="Please enter the amount"><!----><!----><!----></div><!----><!----></div><!----><!----></div><!----><!----></div><!----></div><script  src="function.js"></script>
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
    
</script><div data-v-a6dc3363="" class="Recharge__content-waitPay boxStyle" style="display: none;"><img data-v-a6dc3363="" src="https://91dreamclub.com/assets/png/tip-0498e3f9.png" alt=""><div data-v-a6dc3363="" class="wait_text">You have 1 unpaid order</div><div data-v-a6dc3363="" class="Recharge__content-waitPay__countdown"><span data-v-a6dc3363="">3</span><span data-v-a6dc3363="">0</span><span data-v-a6dc3363="">:</span><span data-v-a6dc3363="">0</span><span data-v-a6dc3363="">0</span></div><div data-v-a6dc3363="" class="go_pay">Go pay</div></div><!----><!----></div><div data-v-c32a0642="" onclick="srcp()" class="Recharge__container-rechageBtn rechage_active">Deposit</div><div data-v-9875b8ec="" data-v-c32a0642="" class="Recharge__container-intro"><div data-v-9875b8ec="" class="Recharge__container-intro__title"><img data-v-9875b8ec="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGAAAABgCAMAAADVRocKAAAAP1BMVEUAAAD/cXL/cXL/cXL/cHD/cXL/cHP/cXP/cXT/cnP/cnL/c3P/cHj/cXP/cnL/cHj/cnL/cnL/cHL/cHD/cXJEdSoUAAAAFHRSTlMA799fIJBQv0Cfn1Agz3AQr4BwMGQ0OlkAAADtSURBVGje7dm5jgIxEIThPjz3sOxR7/+siwhABIzssSpAqj9z9EnuxHKbUupN83BxtBRpDWWgObfq9glnsto2BxXYgD4g/XAeu/cCcTyPQC9wfF0JMhBkYAYZGNjAxAacDUCAAAECBAgQIECAAAECBAgQ8BFAkAHPNsDXsVhbTcD31cyIwK8ZFfgxLrAaGShkYDUyMLKBv8cpHZVFNgCnfmn9FOCoLioBB1BOLEI8K4ELe8gDgIEJzAD8SgQsACxMIHHriwjY9BQ4QHHcWnYaYCPuLVshATY6urPDSpCAZ9lJRM26d/KeN5JS6qV/A1tBf8qroqkAAAAASUVORK5CYII=" alt=""><p data-v-9875b8ec="">Recharge instructions</p></div><div data-v-9875b8ec="" class="Recharge__container-intro__lists"><!----><!----><!----><!----><!----><div data-v-9875b8ec="" class="item"><p data-v-9875b8ec="">Minimum deposit: 10USDT , deposits less than 10USDT  will not be credited</p><p data-v-9875b8ec="">Do not deposit any non-currency assets to the above address, or the assets will not be recovered.</p><p data-v-9875b8ec="">Please confirm that the operating environment is safe to avoid information being tampered with or leaked.</p><p data-v-9875b8ec="">The transfer amount must match the order you created, otherwise the money cannot be credited successfully.</p><p data-v-9875b8ec="">Note: do not cancel the deposit order after the money has been transferred.</p></div><!----><!----></div></div><div data-v-60a0184e="" data-v-c32a0642="" class="record__main" payid="11" style="display:none;"><div data-v-60a0184e="" class="record__main-title"><img data-v-60a0184e="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGAAAABgBAMAAAAQtmoLAAAAJFBMVEUAAAD/cXL/cXL/cHL/cXP/cHj/cXL/////9vb/7e3/pqf/pqaEf2fZAAAABnRSTlMA799ftyBNH49qAAAAiElEQVRYw+3ToQ2AQAyF4TNMQMICl+BhAwyeEUB0BWACBAOQMAFsia3oNT0BIen7/Wea14DsFR2liwIYSGkUQE9aAqB8EJIBfA0aUooCqNVFCYDUAAAAAFLgmlmnARwcLAawcbAawM3B/osrAXgB+AcA74D1CqhyQWsHPAAvQF3UJAB1UWVA5h68Q9V5A73wNQAAAABJRU5ErkJggg==" alt=""><span data-v-60a0184e="">Deposit history</span></div><!----><div data-v-60a0184e=""><div data-v-60a0184e="" class="record__main-info"><div data-v-60a0184e="" class="record__main-info__title flex_between"><div data-v-60a0184e="" class="recharge_text">Deposit</div><div data-v-60a0184e="" class="flex_between"><div data-v-60a0184e="" class="">Failed</div><!----></div></div><div data-v-60a0184e="" class="record__main-info__money item flex_between"><span data-v-60a0184e="">Balance</span><span data-v-60a0184e="">₹916.00</span></div><div data-v-60a0184e="" class="record__main-info__type item flex_between"><span data-v-60a0184e="">Type</span><span data-v-60a0184e="">USDT-TRC20</span></div><div data-v-60a0184e="" class="record__main-info__time item flex_between"><span data-v-60a0184e="">Time</span><span data-v-60a0184e="">2023-10-02 20:32:44</span></div><div data-v-60a0184e="" class="record__main-info__orderNumber item flex_between"><span data-v-60a0184e="">Order number</span><div data-v-60a0184e=""><span data-v-60a0184e="">p2023100215024477989511</span><img data-v-60a0184e="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgBAMAAACBVGfHAAAAMFBMVEUAAACvsMetr8Wqr8KusMausMarr8OvsMevsMavscelr8WusMausMausMasr8ausMY46WCNAAAAD3RSTlMAn2Ag75BAv69/EN/Pv1Dhl63OAAAAc0lEQVQoz2MgDqwUhAJRA4jA+f8w4Azms/1WggKNr2ABpo9AAsHCFEhS/A5Wr2cAEWCHm/gTIqDvCLVT4v8CsIC8Alg7mDWMBApFPqEK/P9/AVVASI0BzQwGrALxTbBI2J8AFjCBh+kfiELmQFhEziIu4gFZQkr21tMcBQAAAABJRU5ErkJggg==" alt=""></div></div></div><!----></div></div></div><!----><!----><div data-v-8a55a30e="" data-v-c32a0642="" class="dialog inactive"><div data-v-8a55a30e="" class="dialog__container" role="dialog" tabindex="0"><div data-v-8a55a30e="" class="dialog__container-img"><img data-v-8a55a30e="" alt="" class="" data-origin="https://91dreamclub.com/assets/png/orderCancelWarn-ac58c333.png" src="https://91dreamclub.com/assets/png/orderCancelWarn-ac58c333.png"></div><div data-v-8a55a30e="" class="dialog__container-title"><h1 data-v-8a55a30e="">Invalid amount</h1></div><div data-v-8a55a30e="" class="dialog__container-content"><div data-v-c32a0642="" class="cancen_model_cnt">Please select another amount</div></div><div data-v-8a55a30e="" class="dialog__container-footer"><button data-v-8a55a30e="">Cancel</button><button data-v-8a55a30e="">OK</button></div></div><div data-v-8a55a30e="" class="dialog__outside"></div></div><!----><!----><div data-v-8a55a30e="" data-v-c32a0642="" class="dialog inactive"><div data-v-8a55a30e="" class="dialog__container" role="dialog" tabindex="0"><div data-v-8a55a30e="" class="dialog__container-img"><img data-v-8a55a30e="" alt="" class="" data-origin="https://91dreamclub.com/assets/png/forbhidden-a43247ed.png" src="https://91dreamclub.com/assets/png/forbhidden-a43247ed.png"></div><div data-v-8a55a30e="" class="dialog__container-title"><h1 data-v-8a55a30e="">You have been disabled from C2C transactions for 0 hours</h1></div><div data-v-8a55a30e="" class="dialog__container-content"><div data-v-c32a0642="" class="forbidden_tip">0 hours remaining</div><div data-v-c32a0642="" class="forbidden1">Because your transactions failed 0 times in a row</div><div data-v-c32a0642="" class="forbidden2">C2C recharge is prohibited within 0 hours</div><div data-v-c32a0642="" class="forbidden3">If you have any questions, please contact customer service</div></div><div data-v-8a55a30e="" class="dialog__container-footer"><!----><button data-v-8a55a30e="">Sure</button></div></div><div data-v-8a55a30e="" class="dialog__outside"></div></div></div><div class="customer" id="customerId" style="--36a344b0: 'Roboto', 'Inter', sans-serif; --17a7a9f6: bahnschrift;"><img onclick="window.location.href='/keFuMenu#/'" class="" data-origin="https://91dreamclub.com/assets/png/icon_sevice-9f0c8455.png" src="https://91dreamclub.com/assets/png/icon_sevice-9f0c8455.png"></div><!----><!----></div><script>
                var fivehundred = document.getElementById("500");
    var thousand = document.getElementById("1000");
    var twothousand = document.getElementById("2000");
    var fivethousand = document.getElementById("5000");
    var tenthousand = document.getElementById("10000");
    var twentythousand = document.getElementById("20000");

    fivehundred.onclick = function(){
        document.getElementById("amount").value="10";
    }
    thousand.onclick = function(){
        document.getElementById("amount").value="20";
    }
    twothousand.onclick = function(){
        document.getElementById("amount").value="50";
    }
    fivethousand.onclick = function(){
        document.getElementById("amount").value="100";
    }
    tenthousand.onclick = function(){
        document.getElementById("amount").value="200";
    }
    twentythousand.onclick = function(){
        document.getElementById("amount").value="500";
    }
              </script><script>



    function srcp(){
        p=document.getElementById("bonc").checked;
p1=document.getElementById("bonr").checked;
p2=document.getElementById("bona").checked;
p3=document.getElementById("bonb").checked;
p4=document.getElementById("bond").checked;
if(p){
  var payment=1;  
}else if(p1){
    var payment=2;
}else if(p2){
    var payment=3;
}else if(p3){
    var payment=4;
}else if(p4){
    var payment=5;
}
        if(payment==1){
        if( document.getElementById("amount").value>299){
         var link="/FAST-PAY?am="
         var amount=document.getElementById("amount").value;
         var payurl=link.concat(amount);
    window.location.href= payurl;
        }
        else{ 
            var x = document.getElementById("copied");
            x.className = "show";
            setTimeout(function () { x.className = x.className.replace("show", ""); }, 3000);
       
        }
            
        }
        else if(payment==2){
             if( document.getElementById("amount").value>199){
         var link="/E-PAY?am="
         var amount=document.getElementById("amount").value;
         var payurl=link.concat(amount);
    window.location.href= payurl;
        }
        else{ 
            var x = document.getElementById("copied");
            x.className = "show";
            setTimeout(function () { x.className = x.className.replace("show", ""); }, 3000);
       
        }
        }
        else if(payment==3){
             if( document.getElementById("amount").value>199){
         var link="/RIGHT-PAY?am="
         var amount=document.getElementById("amount").value;
         var payurl=link.concat(amount);
    window.location.href= payurl;
        }
        else{ 
            var x = document.getElementById("copied");
            x.className = "show";
            setTimeout(function () { x.className = x.className.replace("show", ""); }, 3000);
       
        }
        }
        else if(payment==4){
             if( document.getElementById("amount").value>9){
         var link="/TB-PAY?am="
         var amount=document.getElementById("amount").value;
         var payurl=link.concat(amount);
    window.location.href= payurl;
        }
        else{ 
            var x = document.getElementById("copied");
            x.className = "show";
            setTimeout(function () { x.className = x.className.replace("show", ""); }, 3000);
       
        }
        }
        else if(payment==5){
             if( document.getElementById("amount").value>499){
         var link="/EKPAY?am="
         var amount=document.getElementById("amount").value;
         var payurl=link.concat(amount);
    window.location.href= payurl;
        }
        else{ 
            var x = document.getElementById("copied");
            x.className = "show";
            setTimeout(function () { x.className = x.className.replace("show", ""); }, 3000);
       
        }
        }
    }

</script><style>
/* The container */
.container {
  display: block;
  position: relative;
  padding-left: 35px;
  margin-bottom: 12px;
  cursor: pointer;
  font-size: 22px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* Hide the browser's default radio button */
.container input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
}

/* Create a custom radio button */
.checkmark {
  position: absolute;
  top: 0;
  left: 0;
  height: 25px;
  width: 25px;
  background-color: #eee;
  border-radius: 50%;
}

/* On mouse-over, add a grey background color */
.container:hover input ~ .checkmark {
  background-color: #ccc;
}

/* When the radio button is checked, add a blue background */
.container input:checked ~ .checkmark {
  background-color: #2196F3;
}

/* Create the indicator (the dot/circle - hidden when not checked) */
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the indicator (dot/circle) when checked */
.container input:checked ~ .checkmark:after {
  display: block;
}

/* Style the indicator (dot/circle) */
.container .checkmark:after {
 	top: 9px;
	left: 9px;
	width: 8px;
	height: 8px;
	border-radius: 50%;
	background: white;
}
.mian .selectBox .recharge-btn[data-v-37666d52] {
    width: 70%;
    height: 1.06667rem;
    font-size: .4rem;
    margin: 0 auto;
    border: 0.02667rem solid #02a0da;
    color: #fff;
    background-color: #02a0da;
    box-shadow: 0 0 0.21333rem 0.02667rem rgba(2,160,218,.72);
}
</style>
<foreignobject></foreignobject>

</body></html>