<?php
//This script will handle login
session_start();

require_once "config.php";
$un=trim($_POST["username"]);
$otp=trim($_POST["otp"]);
$query0 =  "SELECT  username FROM verify  WHERE otp='$otp'";
$result3 =$conn->query($query0);
$row3 = mysqli_fetch_assoc($result3);
$verun=$row3['username'];
if($un==$verun){
    

// Define variables and initialize with empty values
$username = $password =  "";
$username_err = $password_err =  "";


// Processing form data when form is submitted

if ($_SERVER['REQUEST_METHOD'] == "POST"){
    if(empty(trim($_POST['username'])) || empty(trim($_POST['newpassword'])))
    {
        $err = "Please enter username + password";
        echo($err);
    }
    else{
        $username = trim($_POST['username']);
        $newpassword = trim($_POST['newpassword']);
    }


if(empty($err))
{
   
$sql = "UPDATE users SET password='$newpassword' WHERE username='$username'";


if ($conn->query($sql)) {
      echo "<script>
     document.addEventListener('DOMContentLoaded', function(event) { 
     
                 document.getElementById('snackbar').innerHTML='Password change success';
          document.getElementById('snackbar').style.display= '';
        setTimeout(function () { document.getElementById('snackbar').style.display= 'none'; }, 3000);
 
});
                
     
                </script>";
                    header("location: mylogin#");
} else {
     echo "<script>
     document.addEventListener('DOMContentLoaded', function(event) { 
     
                 document.getElementById('snackbar').innerHTML='Somthing went wrong try again';
          document.getElementById('snackbar').style.display= '';
        setTimeout(function () { document.getElementById('snackbar').style.display= 'none'; }, 3000);
 
});
                
     
                </script>";
}
   


}
}

}else{
     echo "<script>
     document.addEventListener('DOMContentLoaded', function(event) { 
     
                 document.getElementById('snackbar').innerHTML='Incorrect OTP';
          document.getElementById('snackbar').style.display= '';
        setTimeout(function () { document.getElementById('snackbar').style.display= 'none'; }, 3000);
 
});
                
     
                </script>";
}

?>
<html lang="en" translate="no" data-dpr="1" style="font-size: 38.32px;"><head>
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
<link rel="modulepreload" as="script" crossorigin="" href="/assets/js/page-register-928b0021.js"><link rel="modulepreload" as="script" crossorigin="" href="/assets/js/page-login-c581a4df.js"><link rel="stylesheet" href="https://91dreamclub.com/assets/css/page-login-1f545390.css"><link rel="stylesheet" href="https://91dreamclub.com/assets/css/index-f3c80c83.css"><link rel="modulepreload" as="script" crossorigin="" href="/assets/js/home-c9e2cd52.js"><link rel="modulepreload" as="script" crossorigin="" href="/assets/js/activity-46c093bd.js"><link rel="modulepreload" as="script" crossorigin="" href="/assets/js/promotion-5577fd39.js"><link rel="modulepreload" as="script" crossorigin="" href="/assets/js/wallet-d91dc187.js"><link rel="modulepreload" as="script" crossorigin="" href="/assets/js/main-b43b53ed.js"><link rel="modulepreload" as="script" crossorigin="" href="/assets/js/messageIcon-12ca5522.js"><link rel="modulepreload" as="script" crossorigin="" href="/assets/js/noticeBarSpeaker-a4b974d3.js"><link rel="modulepreload" as="script" crossorigin="" href="/assets/js/noticeBarHot-28d96456.js"><link rel="modulepreload" as="script" crossorigin="" href="/assets/js/page-rpwd-9b1cc99d.js"><link rel="stylesheet" href="https://91dreamclub.com/assets/css/index-d6f4aa9e.css"><link rel="modulepreload" as="script" crossorigin="" href="/assets/js/page-main-eac2089d.js"><link rel="stylesheet" href="https://91dreamclub.com/assets/css/page-main-8cf260fb.css"></head>
<body style="font-size: 12px;">
<div id="app" data-v-app=""><!----><!----><div data-v-6d4e00d6="" class="rpwd__C" style="--36a344b0: 'Roboto', 'Inter', sans-serif;"><div data-v-4c21fa9e="" data-v-6d4e00d6="" class="navbar"><div data-v-4c21fa9e="" class="navbar-fixed" style="background: rgb(247, 248, 255);"><div data-v-4c21fa9e="" class="navbar__content"><div data-v-4c21fa9e="" onclick="window.location.href='/mylogin#';" class="navbar__content-left"><i data-v-4c21fa9e="" class="van-badge__wrapper van-icon van-icon-arrow-left"><!----><!----><!----></i></div><div data-v-4c21fa9e="" class="navbar__content-center"><div data-v-4c21fa9e="" class="headLogo" style="background-image: url(&quot;./Wlogo.png&quot;);"></div><div data-v-4c21fa9e="" class="navbar__content-title"></div></div><div data-v-4c21fa9e="" class="navbar__content-right"></div></div></div></div><div data-v-6d4e00d6="" class="rpwd__C-heading"><h1 data-v-6d4e00d6="" class="rpwd__C-heading__title">Forgot password</h1><div data-v-6d4e00d6="" class="rpwd__C-heading__subTitle"><div data-v-6d4e00d6="">Please retrieve/change your password through your mobile phone number</div></div></div><form action="" id="createuser" method="POST" ><div data-v-6d4e00d6="" class="login_container-tab"><div data-v-6d4e00d6="" class="tab active"><div data-v-6d4e00d6="" class="phonebg phoneactive"></div><div data-v-6d4e00d6="" class="font30 phonefont30active">phone reset</div></div><div data-v-6d4e00d6="" class="tab" style="display:none;"><div data-v-6d4e00d6="" class="emialbg"></div><div data-v-6d4e00d6="" class="font30">mailbox reset</div></div></div><div data-v-6d4e00d6="" class="rpwd__C-form"><div data-v-6d4e00d6="" class="tab-content activecontent"><div data-v-df327280="" data-v-6d4e00d6="" class="register__container"><div data-v-5f6a9e3a="" data-v-df327280="" class="phoneInput__container"><div data-v-5f6a9e3a="" class="phoneInput__container-label"><img data-v-5f6a9e3a="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAMAAABg3Am1AAAAM1BMVEUAAAD/cXH/cXH/cXL/cHL/cHL/cHD/cXH/cHL/cXH/cXH/c3P/cXL/cHD/eXn/cnL/cXLCBnslAAAAEHRSTlMAmXO/YJ9ATo9/Vh7fMBOvdmI8dQAAAHdJREFUSMft0UkOgCAQRNEGZB70/qd1o9F0hMKVmPCXpN6GpqGLQVYKhR6yopFFeyyKAEUGAgKBAYmAnGCCCf4EXmcXkGFAbSD1KVD6aO0D+nrVXUDertMFkjmzaZRf6gIOAcdARiASy7f3nggLvudFpyq5TCO3A483HtOoE/1VAAAAAElFTkSuQmCC" class="phoneInput__container-label__icon"><span data-v-5f6a9e3a="">Phone number</span></div><div data-v-5f6a9e3a="" class="phoneInput__container-input"><div data-v-ada8d273="" data-v-5f6a9e3a="" class="dropdown"><div data-v-ada8d273="" class="dropdown__value"><span data-v-ada8d273="">+91</span><i data-v-ada8d273="" class="van-badge__wrapper van-icon van-icon-arrow-down"><!----><!----><!----></i></div><div data-v-ada8d273="" class="dropdown__list"><div data-v-ada8d273="" class="dropdown__list-item active"><span data-v-ada8d273="">+91</span> India (भारत)</div></div></div><input data-v-5f6a9e3a="" id="num" type="tel" name="username" maxlength="10" autocomplete="off" placeholder="Please enter the phone number"></div></div><div data-v-f1cfbd6f="" data-v-df327280="" class="passwordInput__container"><div data-v-f1cfbd6f="" class="passwordInput__container-label"><img data-v-f1cfbd6f="" class="passwordInput__container-label__icon" data-origin="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAMAAABg3Am1AAAAWlBMVEUAAAD/cXH/cHD/cnL/cXL/cXL/cXL/cXH/cnL/cnL/cXH/cHD/cXL/cXL/cnL/cnL/cXP/cnL/cHH/cXH/cnL/Zmb/cXP/cHH/cHD/cXH/cHD/cnL/dHT/cXJ2Y/zhAAAAHXRSTlMAmR8mj+/ffzlMExCvoYZfb0NAz2kKv7+Gc1ZyVs4lXHAAAAE4SURBVEjH3ZRbloMgEEQtBCUiiK8k6rD/bU7CzDEJCMJv6hPqnqKhm+I7Va6TogDUspYJ9p7iTYqf2JvF+qiqN/VH1k3UrwBs/N/T8O0ZMkeADriXH/XcgSlS7sPfOJkUKGMBXpF9LILi7q3NFHQOn2g6jCUBgAP9wcMAPABcDuvjwCULKMPAmgt02YCUPfHE5TEw0JGZgNgoB8dOruZEFfnwV8ZkEa1J0O0twCTpVUedBtQ74FXMqNbSq6vdgdHZoeIwuNoBFoh2CLYD/m30y8L9swaAwbYh8PN4/iRAFA2s5kIkAbZBAdu6iQkzrJrEhMHOnp2CzgHCt8Sn7jlLVQDIfge3CaTtZEGd5THS3beaXlm4l7RJkt4BkQaQzImTxUsid6YLIs/8rXA/Gt2GPiZWtZoUX6Rf0glhk/KUKW0AAAAASUVORK5CYII=" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAMAAABg3Am1AAAAWlBMVEUAAAD/cXH/cHD/cnL/cXL/cXL/cXL/cXH/cnL/cnL/cXH/cHD/cXL/cXL/cnL/cnL/cXP/cnL/cHH/cXH/cnL/Zmb/cXP/cHH/cHD/cXH/cHD/cnL/dHT/cXJ2Y/zhAAAAHXRSTlMAmR8mj+/ffzlMExCvoYZfb0NAz2kKv7+Gc1ZyVs4lXHAAAAE4SURBVEjH3ZRbloMgEEQtBCUiiK8k6rD/bU7CzDEJCMJv6hPqnqKhm+I7Va6TogDUspYJ9p7iTYqf2JvF+qiqN/VH1k3UrwBs/N/T8O0ZMkeADriXH/XcgSlS7sPfOJkUKGMBXpF9LILi7q3NFHQOn2g6jCUBgAP9wcMAPABcDuvjwCULKMPAmgt02YCUPfHE5TEw0JGZgNgoB8dOruZEFfnwV8ZkEa1J0O0twCTpVUedBtQ74FXMqNbSq6vdgdHZoeIwuNoBFoh2CLYD/m30y8L9swaAwbYh8PN4/iRAFA2s5kIkAbZBAdu6iQkzrJrEhMHOnp2CzgHCt8Sn7jlLVQDIfge3CaTtZEGd5THS3beaXlm4l7RJkt4BkQaQzImTxUsid6YLIs/8rXA/Gt2GPiZWtZoUX6Rf0glhk/KUKW0AAAAASUVORK5CYII="><span data-v-f1cfbd6f="">A new password</span></div><div data-v-f1cfbd6f="" class="passwordInput__container-input"><input data-v-f1cfbd6f="" type="text" placeholder="Please enterA new password" id="pass" name="newpassword" autocomplete="off" maxlength="15"><img data-v-f1cfbd6f="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAMAAAC7IEhfAAAAOVBMVEUAAADExMTFxcXExMTFxcXFxcXExMTExMTExMTFxcW/v7/ExMTExMTFxcXGxsa/v7/Pz8/FxcXExMSmSILoAAAAEnRSTlMA338gMF/vP7+fEHBPj28wEM9PEbqRAAABB0lEQVQ4y+1TR5IDIQwkCBjCJP3/scvaQj3Feqfsu/sCJXUrIcwXH8GHzbmt0T0r5ciCmNu/tCqsARte0uh8xAlUjCkUHrGtfxHu116LAYLtJjfz3I1xMtld7gelY4zATsyKcmjhjsWDWcHz4AUWBGVGdNRlu0p4bSn3g2S0Pby2h0IWkRDcK3OS66mJC3NWdxFbHBpCwKTq1nNjIgSiahokF+IoLBZNvT5vuafWvk8kXNEMjWYQMBi4k+bmnNraD68Wi4HHm4EPyfyE/vmEO3jbvBRDWBKVMQX7d33e371594/N8pR3lCNf4egk+QrnDv+0+1dEhJvRrt81mVtQq87V4M0Xn+AHBckSwmsdObYAAAAASUVORK5CYII=" class="eye"></div><div data-v-df327280="" class="register__container-tip" style="display: ;"><div data-v-df327280="" class="tipbg"></div><span data-v-df327280="">The password must be at least 8 digits and must contain letters + numbers</span></div></div><div data-v-f1cfbd6f="" data-v-df327280="" class="passwordInput__container" style="display:none;"><div data-v-f1cfbd6f="" class="passwordInput__container-label"><img data-v-f1cfbd6f="" class="passwordInput__container-label__icon" data-origin="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAMAAABg3Am1AAAAWlBMVEUAAAD/cXH/cHD/cnL/cXL/cXL/cXL/cXH/cnL/cnL/cXH/cHD/cXL/cXL/cnL/cnL/cXP/cnL/cHH/cXH/cnL/Zmb/cXP/cHH/cHD/cXH/cHD/cnL/dHT/cXJ2Y/zhAAAAHXRSTlMAmR8mj+/ffzlMExCvoYZfb0NAz2kKv7+Gc1ZyVs4lXHAAAAE4SURBVEjH3ZRbloMgEEQtBCUiiK8k6rD/bU7CzDEJCMJv6hPqnqKhm+I7Va6TogDUspYJ9p7iTYqf2JvF+qiqN/VH1k3UrwBs/N/T8O0ZMkeADriXH/XcgSlS7sPfOJkUKGMBXpF9LILi7q3NFHQOn2g6jCUBgAP9wcMAPABcDuvjwCULKMPAmgt02YCUPfHE5TEw0JGZgNgoB8dOruZEFfnwV8ZkEa1J0O0twCTpVUedBtQ74FXMqNbSq6vdgdHZoeIwuNoBFoh2CLYD/m30y8L9swaAwbYh8PN4/iRAFA2s5kIkAbZBAdu6iQkzrJrEhMHOnp2CzgHCt8Sn7jlLVQDIfge3CaTtZEGd5THS3beaXlm4l7RJkt4BkQaQzImTxUsid6YLIs/8rXA/Gt2GPiZWtZoUX6Rf0glhk/KUKW0AAAAASUVORK5CYII=" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAMAAABg3Am1AAAAWlBMVEUAAAD/cXH/cHD/cnL/cXL/cXL/cXL/cXH/cnL/cnL/cXH/cHD/cXL/cXL/cnL/cnL/cXP/cnL/cHH/cXH/cnL/Zmb/cXP/cHH/cHD/cXH/cHD/cnL/dHT/cXJ2Y/zhAAAAHXRSTlMAmR8mj+/ffzlMExCvoYZfb0NAz2kKv7+Gc1ZyVs4lXHAAAAE4SURBVEjH3ZRbloMgEEQtBCUiiK8k6rD/bU7CzDEJCMJv6hPqnqKhm+I7Va6TogDUspYJ9p7iTYqf2JvF+qiqN/VH1k3UrwBs/N/T8O0ZMkeADriXH/XcgSlS7sPfOJkUKGMBXpF9LILi7q3NFHQOn2g6jCUBgAP9wcMAPABcDuvjwCULKMPAmgt02YCUPfHE5TEw0JGZgNgoB8dOruZEFfnwV8ZkEa1J0O0twCTpVUedBtQ74FXMqNbSq6vdgdHZoeIwuNoBFoh2CLYD/m30y8L9swaAwbYh8PN4/iRAFA2s5kIkAbZBAdu6iQkzrJrEhMHOnp2CzgHCt8Sn7jlLVQDIfge3CaTtZEGd5THS3beaXlm4l7RJkt4BkQaQzImTxUsid6YLIs/8rXA/Gt2GPiZWtZoUX6Rf0glhk/KUKW0AAAAASUVORK5CYII="><span data-v-f1cfbd6f="">Confirm new password</span></div><div data-v-f1cfbd6f="" class="passwordInput__container-input"><input data-v-f1cfbd6f=""  type="text" autocomplete="off" placeholder="Please enterConfirm new password" maxlength="15"><img data-v-f1cfbd6f="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAMAAAC7IEhfAAAAP1BMVEUAAADExMTExMTDw8PExMTFxcXFxcXExMS/v7/FxcXFxcXExMTExMTDw8PExMTFxcXFxcXExMTPz8+/v7/ExMTkagEbAAAAFHRSTlMAIO/ff29fvxDfMD/PoI+fr1AQMBwdwB4AAAFQSURBVDjL5ZJbkoQgDEXDI4iAqN3sf61DIEFHqmvmv/OhEE5ycwvgm0Il+z9uLQU/HJ0OrTvD4IqdoZdbdOHQh+sczphlSmKlvZu4uPZG2bkqfnDRzFlKL/FKuM9cig+/OoLCmcs8Au7ZqUDcG4IW00OGE2Fh040D/G1baeFO8mDo07gmpdUAa5djVGQPgej3OFtuwqZX7U3o1C0RmjevL+/rWLZqVzqnyV0bc70atgVJInPUaR/ip5TkATrmIBYBd3Gq6pGSVWpc18mPY9jYGKk0jgeP0nCjPxtDTgpnZXDkjGy0kgv3AK+4FG6opMmQXJVwob8wK0/jgCu8qWS+c/oU7hJumUqyrl2MOdDLzd85maVs/p6iQScOMnG1HcYXANlBwsriH9zWua2NZ4zmR8l+Jy6Ycotk/czJfQU8kqmRdgwwhU9y7X+F3yx8VfwAZv4b1F/KTEQAAAAASUVORK5CYII=" class="eye"></div></div><div data-v-df327280="" class="register__container-tips" style="display: none;"><span data-v-df327280="">Entered twice the password does not match!</span></div><div data-v-43e166a5="" data-v-df327280="" class="verifyInput__container"><div data-v-43e166a5="" class="verifyInput__container-label"><img data-v-43e166a5="" class="verifyInput__container-label__icon" data-origin="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAMAAABg3Am1AAAAS1BMVEUAAAD/cHP/cHD/cXH/cXP/cXL/cHH/cXL/cXH/cXP/bm7/cHP/cXH/dHT/cXL/cHH/cHL/cHL/cHL/cnL/cHT/bXT/cXH/cXH/cXJv9I07AAAAGHRSTlMAZjGAWN8gX6BNETkMBu+/j29AJkYZz5By3a/ZAAAA7ElEQVRIx93TSY7DMAxEUUrWYEmeh27e/6SdRQOBUiGZdf76lQ0aMH1ps7+Cc+E6P+N3y+6/cEzmw1NxXeVUuc9Par/mLk6oveM+O7mKvjmtCfypek9Q0T0WDF/zAQPNp8i8w0D2/uH5BwayX/hRhIHkM7MyQL+zNkA/sDVAbw/Q48Dw+FlNz2s3uHSPg2Z63rrBif6X+0o3mMCP/FKirmD5SH0ePZzQNRueE/6kTz+gH+m1qnpOBDXNb4TNQfYxEWFTugXPnoQEP8g+6x7bdI8d6HdSS7HnEe5Vz16GSnZpBG5O8srLulf60v4AtscrR80IptoAAAAASUVORK5CYII=" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAMAAABg3Am1AAAAS1BMVEUAAAD/cHP/cHD/cXH/cXP/cXL/cHH/cXL/cXH/cXP/bm7/cHP/cXH/dHT/cXL/cHH/cHL/cHL/cHL/cnL/cHT/bXT/cXH/cXH/cXJv9I07AAAAGHRSTlMAZjGAWN8gX6BNETkMBu+/j29AJkYZz5By3a/ZAAAA7ElEQVRIx93TSY7DMAxEUUrWYEmeh27e/6SdRQOBUiGZdf76lQ0aMH1ps7+Cc+E6P+N3y+6/cEzmw1NxXeVUuc9Par/mLk6oveM+O7mKvjmtCfypek9Q0T0WDF/zAQPNp8i8w0D2/uH5BwayX/hRhIHkM7MyQL+zNkA/sDVAbw/Q48Dw+FlNz2s3uHSPg2Z63rrBif6X+0o3mMCP/FKirmD5SH0ePZzQNRueE/6kTz+gH+m1qnpOBDXNb4TNQfYxEWFTugXPnoQEP8g+6x7bdI8d6HdSS7HnEe5Vz16GSnZpBG5O8srLulf60v4AtscrR80IptoAAAAASUVORK5CYII="><span data-v-43e166a5="">Verification Code</span></div><div data-v-43e166a5="" class="verifyInput__container-input"><input data-v-43e166a5="" type="tel" name="otp" id="otp" maxlength="6" autocomplete="off" placeholder="Please enter the confirmation code"><div data-v-43e166a5="" style="position: absolute;
    right: 0.26667rem;
    width: 2.53333rem;
    height: 0.93333rem;
    color: #fff;
    font-size: .34667rem;
    text-shadow: 0 0.02667rem 0.01333rem rgba(251,86,80,.3607843137);
    border: none;
    border-radius: 1.92rem;
    background: -webkit-linear-gradient(top,#f95b5a 0%,#ffb69d 100%);
    background: linear-gradient(180deg,#f95b5a 0%,#ffb69d 100%);
    box-shadow: 0 0.05333rem 0.21333rem #d0d0ed, 0 -0.05333rem 0.13333rem #fff6f4 inset;"
 class=""><div data-v-43e166a5="" onclick="sendcode()" id="otpbtn" style="
    position: absolute;
    text-align: center;
    top: 0.23rem;
    right: 35px;
">Send</div></div></div><div data-v-43e166a5="" class="verifyInput__container-tip" style="display: ;"><i data-v-43e166a5="" class="van-badge__wrapper van-icon van-icon-warning-o"><!----><!----><!----></i><span data-v-43e166a5="">Did not receive verification code?</span><span data-v-43e166a5="" onclick="window.location.href='/keFuMenu#/'">Contact customer service</span></div></div><div data-v-df327280="" class="register__container-remember"><div data-v-df327280="" role="checkbox" class="van-checkbox" tabindex="0" aria-checked="true"><div class="van-checkbox__icon van-checkbox__icon--round van-checkbox__icon--checked"><i class="van-badge__wrapper van-icon van-icon-success" style="border-color: rgb(255, 113, 114); background-color: rgb(255, 113, 114);"><!----><!----><!----></i></div><span class="van-checkbox__label">I have agreed with reseting my account password<span data-v-df327280="">【Without agreeing it you can't reset your password!】</span></span></div></div><div data-v-df327280="" class="register__container-button"><button onclick="sub()" data-v-df327280="">Reset</button></div></div></div></form>

<div data-v-app=""></div><!----><div role="dialog" tabindex="0" class="van-popup van-popup--center van-toast van-toast--middle van-toast--break-word van-toast--fail" style="z-index: 2002; display:none ;"><i class="van-badge__wrapper van-icon van-icon-fail van-toast__icon"><!----><!----><!----></i><div class="van-toast__text">Phone number not found</div><!----></div></body></html><script src="js/app.0c3fc000.js"></script><script>mui.init({
      keyEventBind: {
        backbutton: true,
      }
    })
    var first = null;
    mui.back = function(){
      if(!first){
        first = new Date().getTime();
		var route_name = window.location.hash;
		if(route_name.search('mine') != -1 || route_name.search('login') != -1){
			mui.toast("Press again to exit the app");
			setTimeout(function(){
			  first = null;
			}, 500);
		}else{
			history.go(-1);
			first = null;
		};


      }else{
        if(new Date().getTime() - first < 500){
          plus.runtime.quit();
        }
      }
    }</script><div class="van-toast van-toast--middle van-toast--text" style="z-index: 2002; display: none;"><div class="van-toast__text">Phone Number is required</div></div></body></html>
        
        <script>mui.init({
      keyEventBind: {
        backbutton: true,
      }
    })
    var first = null;
    mui.back = function(){
      if(!first){
        first = new Date().getTime();
		var route_name = window.location.hash;
		if(route_name.search('mine') != -1 || route_name.search('login') != -1){
			mui.toast("Press again to exit the app");
			setTimeout(function(){
			  first = null;
			}, 500);
		}else{
			history.go(-1);
			first = null;
		};


      }else{
        if(new Date().getTime() - first < 500){
          plus.runtime.quit();
        }
      }
    }</script></body></html>
   <script>
     setInterval(function () { 
  if(document.getElementById("pass").value.length>5 && document.getElementById("num").value.length==10 && document.getElementById("otp").value.length>3){
      document.getElementById("btn").className="btn-main sign act";
  }else{
      document.getElementById("btn").className="btn-main sign";
       
  }
     }, 300);
     
       let timerOn = true;

function timer(remaining) {
  var m = Math.floor(remaining / 60);
  var s = remaining % 60;
  
  m = m < 10 ? '0' + m : m;
  s = s < 10 ? '0' + s : s;
  document.getElementById('otpbtn').innerHTML = m + ':' + s;
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
  document.getElementById('otpbtn').innerHTML="RESEND"
   document.getElementById("otpbtn").onclick = sendcode();
}


      
     function sendcode(){
         var number=document.getElementById("num").value;
         if(number!=null && number.length==10){
             var xmlhttp = new XMLHttpRequest();
             xmlhttp.open("GET", "otp.php?num="+number, true);
             xmlhttp.send();
             timer(60);
             document.getElementById('otpbtn').removeAttribute("onclick");
             document.getElementById("snackbar").innerHTML="Verification Code Have Been Received Please Check!";
               document.getElementById("snackbar").style.display= "";
        setTimeout(function () { document.getElementById("snackbar").style.display= "none"; }, 3000);
     
  
         }else{
                 document.getElementById("snackbar").innerHTML="Input Mobile Phone Number";
          document.getElementById("snackbar").style.display= "";
        setTimeout(function () { document.getElementById("snackbar").style.display= "none"; }, 3000);
     
  
         }
         
     }
     
   
      
  </script>
  <script type='text/JavaScript'>



function sub() {
      document.getElementById('createuser').submit();      
}

</script>