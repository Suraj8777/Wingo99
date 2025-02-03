<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login");
    exit;
}
require_once "config.php";

$Address=$Address="";
$Addresserr=$Addresserr="";

if (empty($_POST["Address"] )== false){


                   if ($_SERVER["REQUEST_METHOD"] == "POST") {
                   

                    if (empty($_POST["Address"])) {
                      $Addresserr = "Address Number is required";
                    } else {
                      $Address = $_POST['Address'];
                    }

                    if (empty($_POST["Address"])) {
                      $Addresserr = "ifsc code is required";
                    } else {
                      $Address = $_POST['Address'];
                      $name= $_POST['name'];
                      $upi= $_POST['upi'];
                      $email=$_POST['email'];
                    }
                }
                $query0 =  "SELECT  Address FROM `users`  WHERE username!='".$_SESSION['username']."' AND Address='$Address'";
$result3 =$conn->query($query0);
$row3 = mysqli_fetch_assoc($result3);
$first=$row3['Address'];
                if($first==''){
                      $sql = "UPDATE users SET Address ='$Address', Address ='$Address',name='$name',upi='$upi',email='$email' WHERE username='".$_SESSION['username']."' ";

                  if ($conn->query($sql) === TRUE) {
                  header("location: USDTPAYOUT#");
                  } else {
                    echo "Error updating record: " . $conn->error;
                  }
                    
                }else{
                      echo "<script>
     document.addEventListener('DOMContentLoaded', function(event) { 
     
                 document.getElementById('snackbar').innerHTML='Address number already linked';
          document.getElementById('snackbar').style.display= '';
        setTimeout(function () { document.getElementById('snackbar').style.display= 'none'; }, 3000);
 
});
                
     
                </script>";
                }

                

                }
                
                if($_GET["edit"]=="true"){
                    
                }else{
                    
                }


?>
<html lang="en" translate="no" data-dpr="1" style="font-size: 40px;"><head>
<meta charset="UTF-8">
<link rel="icon" href="./ico.png">
<meta name="google" content="notranslate">
<meta name="robots" content="noindex,nofollow">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

<link rel="manifest">
<title>91 Club</title>
<link rel="stylesheet" href="https://91dreamclub.com/assets/css/modules-96f5a6e8.css">
<link rel="stylesheet" href="https://91dreamclub.com/assets/css/page-activity-871556fb.css">
<link rel="stylesheet" href="https://91dreamclub.com/assets/css/page-home-0d70abbb.css">
<link rel="stylesheet" href="https://91dreamclub.com/assets/css/index-08abe1f5.css">
<link rel="modulepreload" as="script" crossorigin="" href="/assets/js/page-login-c581a4df.js"><link rel="stylesheet" href="https://91dreamclub.com/assets/css/page-login-1f545390.css"><link rel="modulepreload" as="script" crossorigin="" href="/assets/js/home-c9e2cd52.js"><link rel="modulepreload" as="script" crossorigin="" href="/assets/js/activity-46c093bd.js"><link rel="modulepreload" as="script" crossorigin="" href="/assets/js/promotion-5577fd39.js"><link rel="modulepreload" as="script" crossorigin="" href="/assets/js/wallet-d91dc187.js"><link rel="modulepreload" as="script" crossorigin="" href="/assets/js/main-b43b53ed.js"><link rel="modulepreload" as="script" crossorigin="" href="/assets/js/messageIcon-12ca5522.js"><link rel="modulepreload" as="script" crossorigin="" href="/assets/js/noticeBarSpeaker-a4b974d3.js"><link rel="modulepreload" as="script" crossorigin="" href="/assets/js/noticeBarHot-28d96456.js"><link rel="modulepreload" as="script" crossorigin="" href="/assets/js/page-main-eac2089d.js"><link rel="stylesheet" href="https://91dreamclub.com/assets/css/page-main-8cf260fb.css"><link rel="modulepreload" as="script" crossorigin="" href="/assets/js/page-wallet-d4d609cb.js"><link rel="modulepreload" as="script" crossorigin="" href="/assets/js/page-test-b23bed1b.js"><link rel="stylesheet" href="https://91dreamclub.com/assets/css/page-test-b38d710a.css"><link rel="modulepreload" as="script" crossorigin="" href="/assets/js/page-promotion-db066b5a.js"><link rel="stylesheet" href="https://91dreamclub.com/assets/css/page-promotion-24bf6ab6.css"><link rel="stylesheet" href="https://91dreamclub.com/assets/css/page-wallet-24fc13b6.css"></head>
<body style="font-size: 12px;" class="">
<div id="app" data-v-app=""><!----><!----><div data-v-9ed902be="" class="addUSDT__container" style="--36a344b0: 'Roboto', 'Inter', sans-serif;"><div data-v-4c21fa9e="" data-v-9ed902be="" class="navbar"><div data-v-4c21fa9e="" class="navbar-fixed" style="background: rgb(247, 248, 255);"><div data-v-4c21fa9e="" class="navbar__content"><div onclick="window.location.href='/USDTPAYOUT#/'" data-v-4c21fa9e="" class="navbar__content-left"><i data-v-4c21fa9e="" class="van-badge__wrapper van-icon van-icon-arrow-left"><!----><!----><!----></i></div><div data-v-4c21fa9e="" class="navbar__content-center"><!----><div data-v-4c21fa9e="" class="navbar__content-title">Add USDT address</div></div><form action="" id="bankcard" method="post"><span id="mwa"></span><div data-v-4c21fa9e="" class="navbar__content-right"></div></div></div></div><div data-v-9ed902be="" class="addUSDT__container-content"><div data-v-9ed902be="" class="addUSDT__container-content-top"><img data-v-9ed902be="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAAkCAMAAADW3miqAAAANlBMVEUAAAD/cHD/cHD/cHD/cXL/cXL/cXL/cHD/cXL/cXP/cHH/cHL/cnL/cXL/cHL/cHD/cHP/cXIabTjwAAAAEXRSTlMAECBA35/vML/PkGCPr3BwUEXfeIsAAAEBSURBVDjLtZThjoQgDIRbbEEQvJv3f9lLXNe5FUj8s/1jqt+UScMo3yndPEcgZt90goQawfIwmlIBrHtSEV32FUDVbowBJfzrHbDbsGSw1Mks3V74e7i+9do+ZqmhXTxweXEYfVWwWYCFYlSKEWQESeIXh8sYkoJyDiXeQQHxZWTDKjNIVmznafsc+jmtZCxzKCEfzwidQ4p4PAGZQwI8gp4fl5F6iG3uVsDVcgVcJiuoDJapkVrW/eIUVL7+jbawczhxWs+AyegSFZjSBC2qoQgb+CVu7RK3l5hBaNol0W+hSvYsZZ/JDhWUcXg5Yr6oiKYj5kVHi3OwYglPfj1fqT/iPw2tBKd4UAAAAABJRU5ErkJggg=="><span data-v-9ed902be="">To ensure the safety of your funds, please link your wallet</span></div><div data-v-9ed902be="" class="addUSDT__container-content-item"><div data-v-9ed902be="" class="label"><img data-v-9ed902be="" src="https://91dreamclub.com/assets/png/network-5814d749.png" class="icon"> Select main network</div><div data-v-9ed902be="" class="ar-searchbar"><div data-v-f330f1f2="" data-v-9ed902be="" class="ar-searchbar__selector"><div data-v-f330f1f2=""><span data-v-f330f1f2="" class="ar-searchbar__selector-default">TRC20</span><i data-v-f330f1f2="" class="van-badge__wrapper van-icon van-icon-arrow-down"><!----><!----><!----></i></div></div></div></div><div data-v-9ed902be="" class="addUSDT__container-content-item"><div data-v-9ed902be="" class="label"><img data-v-9ed902be="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFQAAABUCAMAAAArteDzAAAASFBMVEUAAAD/cHD/cXL/cHL/cXL/cHD/cHL/cHD/cHL/cXP/cHP/cXH/cXL/cXP/cXH/cHL/cHD/cHL/cnL/cHH/cHD/cXH/cHH/cXIL15YiAAAAF3RSTlMAIN+A7xBgQHDPv7+vv5BQMJ+foHBvsO8vYPYAAAM9SURBVFjDvZnrmqMgDIY5BhAE7cys93+n2yLTtEJBxd38sY/Cy0fCMSVNo8Bny9hyN8Gs42EifSa1E0tmwgE9TxyXj2ZPcdVNLHW70aNIFClGD4FGgJyU9oM4h6VuSTZqlX+e9HAcy5MWxuXnIcESlu+TaZJIVS8Xkly2Q+yPQGTD1KpW6FZBj+V2GLAdLpBr0J3cHdKvddTKmjtR5l7T0V2GfmSymuPP1ZKm1marf6bsgRG/tS1XY4tDHpnnqL4wPpF5lqozx4hWjNrREtvqm5fDss/gTZQpOFST81Cis6lFH29m0gMlbuuAW3RoH1Q+HOA2QoGch6ID1LtQ0gHFSvZNqOqHqlfOLbbQBcVatxehoQ+KUoWMPyF6tBOKU0g/AUCqhhRe34dXR6be02ug8lFEpt5b0g1Ft+k0vfRV0O97kT/352N2TR3QPP6ETPFxDTRJpCRUXSqpAuAcoZZrUEpWnQpxFPgSLujZiAeHsQGhzLD4NNbD9OGEw4txkjCze33nIVBZ6D5VgTsTdW/BEBfmIVtM1CgWMQNt+lTxR9NvBZM3GQYfj1Nc7gyUitjNHsJiuF4RDjeWBhTnkNpAY/ntmGB0N5TjSyyaQfV6ln93s2G/BoVLEaN1KB5kha3e7eSkvVkLYgByKJr6Es9haZ3nGkAlAwDuZ8eeBcZSTAkrLnxKO7Y0TBgPsrT4iRyK31Xg82BEBmNm9jqUK00x+kO2QeV0ikRP28uUJV+4mXSuUrig4oLSD8UFBaLeq6DJm/T6RXpaH6ofisEX/2rj+756iwY8APRD8WCS6PwSKA6l2H92DZQ9Z5LE+HdCAx7L4ky1fVAM07w5VndAkUM3N4BeKPsVik3oXiigULytyT4ojUK3d2jXB71FofmFtwf6U/hq8Lp6GIr5guJLehZKWVGUvjDdgeY7EzPlTgx9KaTxPyW7+tNyVyYQf0Srf3I4mGmWLlYY65HgsRCDIzLbJxwtVqzanbcXepfjo9nQRm7c2XYBXpEKJnlqWvAjmeYkV08FjfinisNmj2AXYb1Wk4xvaQA/rk7HvP0xbN3EjMgDWKjkfEYtj/KQW/6TKxJ7bArcDez35j9zaMfmL1iKpCx38W+lAAAAAElFTkSuQmCC" class="icon"> USDT Address</div><div data-v-9ed902be="" class="input"><input data-v-9ed902be="" placeholder="Please enter the USDT address" type="text" name="Address" autocomplete="off" maxlength="36" oninput="value=value.replace(/[^\w\/]/ig,'')"></div></div><div data-v-9ed902be="" style="display:none;" class="addUSDT__container-content-item"><div data-v-9ed902be="" class="label"><img data-v-9ed902be="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGAAAABgBAMAAAAQtmoLAAAAG1BMVEUAAAD/cXL/cHD/cHD/cXL/cXL/cHL/cXH/cXIfNVtVAAAACHRSTlMAgBAg799wbwcds5AAAAFSSURBVFjD7Zc7rsIwEEUfvA2kpERU1NBQUyCWQMkiWADDR/KyKQAdool8c+WGgmmi0Xh8nGR8Pf772VfbdG4mzMIbPyml8wClhAlICAVICAFICAVICAEAYQBAaAAIBwBCA0BYABAaAMICgNCA2x7EKEA3GYdgGKnjAOTGSEBCKIBG5CEasWHEZ/5FJQQrJEFszezrzY9vyAu+FjB8QyLxtQhPpSgvno//l8yfAp9wj11bCmGWUntZwsxQ/ZyEmaH2wwgzQ7UkCDNDLjp8wgCGy7ocB8KUNXW8fCdsU1gknFNYLAkf13lp+7P6P84vDb/4/PLG1v0+abbr+yu5Ref4DSLgyYwvZL5UtovxcljuryIhlfXVPrLcQ9E+dv2D3W8d/OZEI+4HAGaD5bdwFiLa2lCNiLZWWiOi7TqgEdF8pdFi4CG65ouflkwLEf71+GffbA+gYMN541AEvgAAAABJRU5ErkJggg==" class="icon"> Address Alias</div><input data-v-9ed902be="" placeholder="Please enter a remark of the withdrawal address" maxlength="20"></div><div data-v-9ed902be="" class="addUSDT__container-content-btn"><button data-v-9ed902be="" onclick="submit()" class="active">Save</button></form></div></div><div class="van-overlay" role="button" tabindex="0" style="z-index: 2001; display: none;"><!----></div><div role="dialog" tabindex="0" class="van-popup van-popup--round van-popup--bottom" style="z-index: 2001; display: none;"><div data-v-9ed902be="" class="van-picker"><div class="van-picker__toolbar"><button type="button" class="van-picker__cancel van-haptics-feedback">Cancel</button><!----><button type="button" class="van-picker__confirm van-haptics-feedback">Confirm</button></div><!----><!----><div class="van-picker__columns" style="height: 264px;"><div class="van-picker-column"><ul class="van-picker-column__wrapper" style="transform: translate3d(0px, 110px, 0px); transition-duration: 0ms; transition-property: none;"><li role="button" tabindex="0" class="van-picker-column__item van-picker-column__item--selected" style="height: 44px;"><div class="van-ellipsis">TRC</div></li></ul></div><div class="van-picker__mask" style="background-size: 100% 110px;"></div><div class="van-hairline-unset--top-bottom van-picker__frame" style="height: 44px;"></div></div><!----><!----></div><!----></div></div><div class="customer" id="customerId" style="--36a344b0: 'Roboto', 'Inter', sans-serif; --17a7a9f6: bahnschrift;"></div><!----><!----></div>
<foreignobject></foreignobject>

<div></div><!----><!----><style>.addBankCard__container-content-item .selectB[data-v-ae83d79e] {
    display: -webkit-box;
    display: -webkit-flex;
    display: flex;
    -webkit-box-pack: justify;
    -webkit-justify-content: space-between;
    justify-content: space-between;
    -webkit-box-align: center;
    -webkit-align-items: center;
    align-items: center;
    font-size: .37333rem;
    color: #fff;
    background-color: #ff807a;
    height: .93333rem;
    width:9.4rem;
    line-height: .86667rem;
    border-radius: .13333rem;
    padding: 0 .26667rem;
}
      .van-toast--html, .van-toast--text {
    width: -webkit-fit-content;
    width: fit-content;
    min-width: 200px;
    min-height: 0;
    padding: 8px 12px;
}
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
    min-height: 10px;
    padding: 16px;
    color: #fff;
    font-size: 14px;
    line-height: 20px;
    white-space: pre-wrap;
    text-align: center;
    word-wrap: break-word;
    background-color:#ff4440;
    border-radius: 8px;
    -webkit-transform: translate3d(-50%, -50%, 0);
    transform: translate3d(-50%, -50%, 0);
}
  </style><script>
        function submit(){
            document.getElementById("bankcard").submit();
        }
    </script>
</body>

</html><script>window.onload = function () {
			let cfg  = JSON.parse(localStorage.getItem('clientCfg'));
			// console.log(cfg)
			if (cfg) {
				var link = document.querySelector("link[rel*='icon']") || document.createElement('link');
				// var meta = document.querySelector("meta[name*='google-site-verification']") || document.createElement('meta');
				// meta.content = '是十四'
				link.type = 'image/x-icon';
				link.rel = 'shortcut icon';
				link.href = cfg.WebIco;//'http://47.56.7.183:5001/img/tatalogo.jpg';
				document.getElementsByTagName('head')[0].appendChild(link);
				// document.getElementsByTagName('head')[0].appendChild(meta);
				
				document.getElementsByTagName("title")[0].innerText = cfg.ProjectName;
			}
			document.addEventListener('touchstart', function (event) {
				if (event.touches.length > 1) {
					event.preventDefault();  //阻止元素的默认行为
				}
			}, {
				capture: false,
				passive: false,
				once: false
			});
			// document.addEventListener('touchmove', function (event) {
			// 	event.preventDefault();  //阻止元素的默认行为
			// }, {
			// 	passive: false,
			// });
		}</script><style>html,body{ height: 100%; width: 100%; background-color: #fff;padding: 0;margin: 0;}</style><style>
.lookPwd[data-v-55c0a38e] {
    height: 0.96rem;
    width: 0.96rem;
    position: absolute;
    top: 50%;
    right: 0;
    transform: translateY(-50%);
}
 .float{ 
       z-index: 99;
    position: fixed;
    width: 46px;
    height: 46px;
    bottom: 99px;
    right: 5px;
    text-align: center;
}


  .floattext {
    display: flex;
    background: #02a0da;
    color: #fff;
    padding: 5px 3px;
    font-size: 8px;
    font-weight:700;
    width: auto;
    border-radius: 2px;
    height: 16px;
    line-height: 6px;
    margin-top: 53px;
    box-shadow: 0 0 0.21333rem 0.02667rem rgba(2,160,218,.72);
    
}
.mian .bank .bank-btn .btn[data-v-1ea51620] {
    height: 1.01333rem;
    border: 0.02667rem solid #5cba47;
    color: #fff;
    width: 60%;
    background-color: #5cba47;
    box-shadow: 0 0 0.21333rem 0.02667rem rgba(92,186,71,.72);
}
.navbar[data-v-c2022cca] {
    width: 100%;
    max-width: 10.66667rem;
    top: 0;
    height: 1.33333rem;
    line-height: 1.33333rem;
    background-image: linear-gradient(90deg,#cd0103,#f64841);
    display: flex;
    align-items: center;
    justify-content: center;
    position: fixed;
    color: #fff;
    z-index: 999;
}
.mian .bank .box .item .input .ipt[data-v-1ea51620] {
    width: 100%;
    padding: 0 0.4rem;
    height: 0.93333rem;
    line-height: .93333rem;
    border-radius: 0.13333rem;
    border: .05333rem solid rgba(255,153,0,.27);
}
.mian .bank .box .item .input .ipt[data-v-1ea51620] {
    width: 100%;
    padding: 0 0.4rem;
    height: 0.93333rem;
    line-height: .93333rem;
    border-radius: 0.13333rem;
    border: .05333rem solid rgba(255,153,0,.27);
}
.mian .bank .box .txt[data-v-4e9463e6] {
    color: #f90;
}
.my-float{
	margin-top:22px;
}</style> </body></html>