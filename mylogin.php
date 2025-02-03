<?php

// check if the user is already logged in
if(isset($_SESSION['username']))
{
    header("location: main#");
    exit;
}
require_once "config.php";

$username = $password = "";
$err = "";

// if request method is post
if ($_SERVER['REQUEST_METHOD'] == "POST"){
    if(empty(trim($_POST['username'])) || empty(trim($_POST['password'])))
    {
        $err = "Wrong Details";
        echo($err);
    }
    else{
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);
      
        
    }


if(empty($err))
{
    $res = mysqli_query($conn,"SELECT* FROM users WHERE username='$username'and password='$password'");
    $result=mysqli_fetch_array($res);
    if($result)
 {
    $sql2 = "SELECT * FROM users WHERE username='$username'";
    $result2 =$conn->query($sql2);
    $row2 = mysqli_fetch_assoc($result2);
    
                               session_start();
                            $_SESSION["username"] = $row2['username'];
                            $_SESSION["id"] = $row2['id'];
                            $_SESSION["usercode"] = $row2['usercode'];
                            $_SESSION["refcode"] = $row2['refcode'];
                            $_SESSION["refcode1"] = $row2['refcode1'];
                            $_SESSION["refcode2"] = $row2['refcode2'];
                            $_SESSION["loggedin"] = true;

                            header("location: /main#");
}else{
            echo "<script>
     document.addEventListener('DOMContentLoaded', function(event) { 
     
                 document.getElementById('snackbar').innerHTML='Passwor/Mobile Number Error! Please Check!';
          document.getElementById('snackbar').style.display= '';
        setTimeout(function () { document.getElementById('snackbar').style.display= 'none'; }, 3000);
 
});
                
     
                </script>";
}
                    
}  


}


?>
 <!DOCTYPE html>                         
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
<link rel="modulepreload" as="script" crossorigin="" href="/assets/js/page-login-c581a4df.js"><link rel="stylesheet" href="https://91dreamclub.com/assets/css/page-login-1f545390.css"></head>
<body style="font-size: 12px;">
<style>
    .signIn__container-button .register[data-v-ca3ffb94] {
    width: 5.73333rem;
    height: 0.8rem;
    color: #ff7172;
    font-size: 0.4rem;
    background: #f7f8ff;
    border-radius: 1.06667rem;
    border: .01333rem solid #ff7172;
    box-shadow: none;
    text-shadow: none;
    margin-top: -0.2rem;
}
.signIn__container-button[data-v-ca3ffb94] {
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
    width: 100%;
    margin-top: 0.1rem;
}
</style>
<div id="app" data-v-app=""><!----><!----><div data-v-b34be079="" class="login__container" style="--36a344b0: 'Roboto', 'Inter', sans-serif;"><div data-v-4c21fa9e="" data-v-b34be079="" class="navbar"><div data-v-4c21fa9e="" class="navbar-fixed" style="background: rgb(247, 248, 255);"><div data-v-4c21fa9e="" class="navbar__content"><div data-v-4c21fa9e="" onclick="window.location.href='/myhome#';"  class="navbar__content-left"><i data-v-4c21fa9e="" class="van-badge__wrapper van-icon van-icon-arrow-left"><!----><!----><!----></i></div><div data-v-4c21fa9e="" class="navbar__content-center"><div data-v-4c21fa9e="" class="headLogo" style="background-image: url(&quot;./Wlogo.png&quot;);"></div><div data-v-4c21fa9e="" class="navbar__content-title"></div></div><div data-v-4c21fa9e="" class="navbar__content-right"></div></div></div></div><div data-v-b34be079="" class="login__container-heading"><h1 data-v-b34be079="" class="login__container-heading__title" >Log in</h1><div data-v-b34be079="" class="login__container-heading__subTitle"><div data-v-ca3ffb94="" class="signIn__container-button"><button data-v-ca3ffb94="" onclick="window.location.href='/register#';" class="register">Register</button></div><div data-v-b34be079="">If you're not a user then register now, terms & conditions apply !</div></div></div><form method="POST" id="login" action=""><div data-v-b34be079="" class="login_container-tab"><div data-v-b34be079="" class="tab active"><div data-v-b34be079="" class="phonebg phoneactive"></div><div data-v-b34be079="" class="font30 phonefont30active">Log in with phone</div></div><div data-v-b34be079="" class="tab " style="display:none;"><div data-v-b34be079="" class="emialbg"></div><div data-v-b34be079="" class="font30">Email Login</div></div></div><div data-v-b34be079="" class="login__container-form"><div data-v-b34be079="" class="tab-content activecontent"><div data-v-ca3ffb94="" data-v-b34be079="" class="signIn__container"><div data-v-5f6a9e3a="" data-v-ca3ffb94="" class="phoneInput__container"><div data-v-5f6a9e3a="" class="phoneInput__container-label"><img data-v-5f6a9e3a="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAMAAABg3Am1AAAAM1BMVEUAAAD/cXH/cXH/cXL/cHL/cHL/cHD/cXH/cHL/cXH/cXH/c3P/cXL/cHD/eXn/cnL/cXLCBnslAAAAEHRSTlMAmXO/YJ9ATo9/Vh7fMBOvdmI8dQAAAHdJREFUSMft0UkOgCAQRNEGZB70/qd1o9F0hMKVmPCXpN6GpqGLQVYKhR6yopFFeyyKAEUGAgKBAYmAnGCCCf4EXmcXkGFAbSD1KVD6aO0D+nrVXUDertMFkjmzaZRf6gIOAcdARiASy7f3nggLvudFpyq5TCO3A483HtOoE/1VAAAAAElFTkSuQmCC" class="phoneInput__container-label__icon"><span data-v-5f6a9e3a="">Phone number</span></div><div data-v-5f6a9e3a="" class="phoneInput__container-input"><div data-v-ada8d273="" data-v-5f6a9e3a="" class="dropdown"><div data-v-ada8d273="" class="dropdown__value"><span data-v-ada8d273="">+91</span><i data-v-ada8d273="" class="van-badge__wrapper van-icon van-icon-arrow-down"><!----><!----><!----></i></div><div data-v-ada8d273="" class="dropdown__list"><div data-v-ada8d273="" class="dropdown__list-item active"><span data-v-ada8d273="">+91</span> India (भारत)</div></div></div><input data-v-5f6a9e3a="" type="tel" id="num" name="username" type="tel" maxlength="10" autocomplete="off" placeholder="Please enter the phone number"></div></div><div data-v-f1cfbd6f="" data-v-ca3ffb94="" class="passwordInput__container"><div data-v-f1cfbd6f="" class="passwordInput__container-label"><img data-v-f1cfbd6f="" class="passwordInput__container-label__icon" data-origin="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAMAAABg3Am1AAAAWlBMVEUAAAD/cXH/cHD/cnL/cXL/cXL/cXL/cXH/cnL/cnL/cXH/cHD/cXL/cXL/cnL/cnL/cXP/cnL/cHH/cXH/cnL/Zmb/cXP/cHH/cHD/cXH/cHD/cnL/dHT/cXJ2Y/zhAAAAHXRSTlMAmR8mj+/ffzlMExCvoYZfb0NAz2kKv7+Gc1ZyVs4lXHAAAAE4SURBVEjH3ZRbloMgEEQtBCUiiK8k6rD/bU7CzDEJCMJv6hPqnqKhm+I7Va6TogDUspYJ9p7iTYqf2JvF+qiqN/VH1k3UrwBs/N/T8O0ZMkeADriXH/XcgSlS7sPfOJkUKGMBXpF9LILi7q3NFHQOn2g6jCUBgAP9wcMAPABcDuvjwCULKMPAmgt02YCUPfHE5TEw0JGZgNgoB8dOruZEFfnwV8ZkEa1J0O0twCTpVUedBtQ74FXMqNbSq6vdgdHZoeIwuNoBFoh2CLYD/m30y8L9swaAwbYh8PN4/iRAFA2s5kIkAbZBAdu6iQkzrJrEhMHOnp2CzgHCt8Sn7jlLVQDIfge3CaTtZEGd5THS3beaXlm4l7RJkt4BkQaQzImTxUsid6YLIs/8rXA/Gt2GPiZWtZoUX6Rf0glhk/KUKW0AAAAASUVORK5CYII=" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAMAAABg3Am1AAAAWlBMVEUAAAD/cXH/cHD/cnL/cXL/cXL/cXL/cXH/cnL/cnL/cXH/cHD/cXL/cXL/cnL/cnL/cXP/cnL/cHH/cXH/cnL/Zmb/cXP/cHH/cHD/cXH/cHD/cnL/dHT/cXJ2Y/zhAAAAHXRSTlMAmR8mj+/ffzlMExCvoYZfb0NAz2kKv7+Gc1ZyVs4lXHAAAAE4SURBVEjH3ZRbloMgEEQtBCUiiK8k6rD/bU7CzDEJCMJv6hPqnqKhm+I7Va6TogDUspYJ9p7iTYqf2JvF+qiqN/VH1k3UrwBs/N/T8O0ZMkeADriXH/XcgSlS7sPfOJkUKGMBXpF9LILi7q3NFHQOn2g6jCUBgAP9wcMAPABcDuvjwCULKMPAmgt02YCUPfHE5TEw0JGZgNgoB8dOruZEFfnwV8ZkEa1J0O0twCTpVUedBtQ74FXMqNbSq6vdgdHZoeIwuNoBFoh2CLYD/m30y8L9swaAwbYh8PN4/iRAFA2s5kIkAbZBAdu6iQkzrJrEhMHOnp2CzgHCt8Sn7jlLVQDIfge3CaTtZEGd5THS3beaXlm4l7RJkt4BkQaQzImTxUsid6YLIs/8rXA/Gt2GPiZWtZoUX6Rf0glhk/KUKW0AAAAASUVORK5CYII="><span data-v-f1cfbd6f="">Password</span></div><div data-v-f1cfbd6f="" class="passwordInput__container-input"><input data-v-f1cfbd6f="" type="password" name="password" id="pass" autocomplete="off" placeholder="Please enterPassword" maxlength="32"><img data-v-f1cfbd6f="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAMAAAC7IEhfAAAAP1BMVEUAAADExMTExMTDw8PExMTFxcXFxcXExMS/v7/FxcXFxcXExMTExMTDw8PExMTFxcXFxcXExMTPz8+/v7/ExMTkagEbAAAAFHRSTlMAIO/ff29fvxDfMD/PoI+fr1AQMBwdwB4AAAFQSURBVDjL5ZJbkoQgDEXDI4iAqN3sf61DIEFHqmvmv/OhEE5ycwvgm0Il+z9uLQU/HJ0OrTvD4IqdoZdbdOHQh+sczphlSmKlvZu4uPZG2bkqfnDRzFlKL/FKuM9cig+/OoLCmcs8Au7ZqUDcG4IW00OGE2Fh040D/G1baeFO8mDo07gmpdUAa5djVGQPgej3OFtuwqZX7U3o1C0RmjevL+/rWLZqVzqnyV0bc70atgVJInPUaR/ip5TkATrmIBYBd3Gq6pGSVWpc18mPY9jYGKk0jgeP0nCjPxtDTgpnZXDkjGy0kgv3AK+4FG6opMmQXJVwob8wK0/jgCu8qWS+c/oU7hJumUqyrl2MOdDLzd85maVs/p6iQScOMnG1HcYXANlBwsriH9zWua2NZ4zmR8l+Jy6Ycotk/czJfQU8kqmRdgwwhU9y7X+F3yx8VfwAZv4b1F/KTEQAAAAASUVORK5CYII=" class="eye"></div></div><div data-v-ca3ffb94="" class="signIn__container-button"><button onclick="verify()" data-v-ca3ffb94="" class="active">Log in</button></div><div data-v-ca3ffb94="" class="signIn_footer"><div data-v-ca3ffb94="" onclick="window.location.href='/forgot#';" class="forgetcon"><div data-v-ca3ffb94="" class="forgetbg"></div><div data-v-ca3ffb94="" class="font24">Forgot password</div></div><div data-v-ca3ffb94="" onclick="window.location.href='/keFuMenu#';" class="customcon"><div data-v-ca3ffb94="" class="custombg"></div><div data-v-ca3ffb94="" class="font24">Customer Service</div></div></div><div data-v-8a55a30e="" data-v-ca3ffb94="" class="dialog inactive"><div data-v-8a55a30e="" class="dialog__container" role="dialog" tabindex="0"><div data-v-8a55a30e="" class="dialog__container-img"><img data-v-8a55a30e="" alt="" class="" data-origin="https://91dreamclub.com/assets/png/orderCancelWarn-ac58c333.png" src="https://91dreamclub.com/assets/png/orderCancelWarn-ac58c333.png"></div><div data-v-8a55a30e="" class="dialog__container-title"><h1 data-v-8a55a30e="">Account has been locked</h1></div><div data-v-8a55a30e="" class="dialog__container-content"><div data-v-ca3ffb94="" class="idlockTip">You have entered the wrong password 10 times in a row <br data-v-ca3ffb94="">Contact customer service to unlock</div></div><div data-v-8a55a30e="" class="dialog__container-footer"><button data-v-ca3ffb94="" class="dialogBtn">Cancel</button><button data-v-ca3ffb94="" class="dialogBtn"><img data-v-ca3ffb94="" src="https://91dreamclub.com/assets/png/iconservr-dafbd4f0.png"> Contact customer service</button></div></div><div data-v-8a55a30e="" class="dialog__outside"></div></div><!----><!----></div></div><div data-v-b34be079="" class="tab-content"><div data-v-867fa208="" data-v-b34be079="" class="signIn__container"><div data-v-9ea79214="" data-v-867fa208="" class="emailcontainer"><div data-v-9ea79214="" class="emailinput__container"><div data-v-9ea79214="" class="emailinput__container-label"><img data-v-9ea79214="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAANsSURBVHgB7Vj/edowED25C9ANPELZINkgTFAyQW13AJwFsDNB6QRkg3SDskHYoEzg693JkoUwtgUE+MPv+5wgWz/eWffuTgYYMWLEiBEjRtwOyr+BSTIBiAp68kTNCdwHtoDwpspl6j+I/BuqLHcA1SuZsoO7AdJV/W57YneA3nxM/3bagLqt1Dt1ieGmQHr7+Ei8ttISD4GJaTc7EEULUNHf2hCQDjSQhmzgVkD8Q9fUIR8zRyL7w3RpdiDN/oH2eSJezWiQJY5JxppI4JpAKF2fJ/LfiPyafsbAnlIsv/J9VwNGsLHeicwSlokU5HA1YOKRn+s3L+TB4XooYgsFBQ3MbXO5fOGdoZ+fKe6d7H5RvJobmKY5kf91bEDUOZ2KFpiR+5hmWb7RAlMR1sXBYq2msgZosRL5Fa266BoV9U1LvpjQRG3i3sLFQIFiP9KYCPi9b2S/AQLFAnr3jJiSm73BuVCw8sjLWrLmAAw0QFCLO3mSdSlfkC5mZ4kbq5zmeHZyz1yTt2LtRYgBjAmHshZxpxAMjjTli201Yg0qX0IN0DgUdwmohuqC3jY+eJGm7BPrUSrNJBlCKDhTAj63iC8+MuCwLFBf1mwQBIISmXA/bQfsLOqB/lqxdZcfEmlsWVDj6RTyLs4zQPvxXiRiguQeUy4Fmm5UFtA9R6yTuu/qNP00ON0AjiC1H7PrkAt+tJYf3G+vLKA+OpoZI8pzItlpGhBSOoJoP1ZN3MbqhZ7lrcO0WOtK0iYvvStZtqCdygcyOEMDDnk9E4vQSTpehJIhXBZk2bohLx1pjFrbloRjx+0GImwHKGty4mnGSK1yJN3LG57pcR3JKWhOZ1j4DuDGWyjvXkjKjw+5ujIrwnwvMRbFPOQQNdAA7a+2pcmflHhawW7nGBFyEhxggCSfmRXbpckbOEbIWuJ+/Zm9x4CDzDn/FPIGbESailsOLds7DPDJ/3zoOhldDmoVYsQxA3a122y5oWt0XMPVoEpZE6wRR4+y7QZg9Wi+StSfMpj8Nb/STbwD1IY5tXV0DagtxLlHPuiAcUG0GfG8z9U1gL491vWNfMK7MXmD2DNiJcUfNkdZZweq1KtvzEekW8MY0RR/0FSwqm2E1C0oX6fvCPvFn8GBiMXSSo59W7gfUFRUrMtrBpIRI0aMGID/EYgKCbjmh1gAAAAASUVORK5CYII=" class="emailinput__container-label__icon"><span data-v-9ea79214="">Mail</span></div><div data-v-9ea79214="" class="emailinput__container-input"><input data-v-9ea79214="" type="text" name="userEmail" maxlength="250" placeholder="please input your email"></div></div></div><div data-v-f1cfbd6f="" data-v-867fa208="" class="passwordInput__container"><div data-v-f1cfbd6f="" class="passwordInput__container-label"><img data-v-f1cfbd6f="" class="passwordInput__container-label__icon" data-origin="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAMAAABg3Am1AAAAWlBMVEUAAAD/cXH/cHD/cnL/cXL/cXL/cXL/cXH/cnL/cnL/cXH/cHD/cXL/cXL/cnL/cnL/cXP/cnL/cHH/cXH/cnL/Zmb/cXP/cHH/cHD/cXH/cHD/cnL/dHT/cXJ2Y/zhAAAAHXRSTlMAmR8mj+/ffzlMExCvoYZfb0NAz2kKv7+Gc1ZyVs4lXHAAAAE4SURBVEjH3ZRbloMgEEQtBCUiiK8k6rD/bU7CzDEJCMJv6hPqnqKhm+I7Va6TogDUspYJ9p7iTYqf2JvF+qiqN/VH1k3UrwBs/N/T8O0ZMkeADriXH/XcgSlS7sPfOJkUKGMBXpF9LILi7q3NFHQOn2g6jCUBgAP9wcMAPABcDuvjwCULKMPAmgt02YCUPfHE5TEw0JGZgNgoB8dOruZEFfnwV8ZkEa1J0O0twCTpVUedBtQ74FXMqNbSq6vdgdHZoeIwuNoBFoh2CLYD/m30y8L9swaAwbYh8PN4/iRAFA2s5kIkAbZBAdu6iQkzrJrEhMHOnp2CzgHCt8Sn7jlLVQDIfge3CaTtZEGd5THS3beaXlm4l7RJkt4BkQaQzImTxUsid6YLIs/8rXA/Gt2GPiZWtZoUX6Rf0glhk/KUKW0AAAAASUVORK5CYII=" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAMAAABg3Am1AAAAWlBMVEUAAAD/cXH/cHD/cnL/cXL/cXL/cXL/cXH/cnL/cnL/cXH/cHD/cXL/cXL/cnL/cnL/cXP/cnL/cHH/cXH/cnL/Zmb/cXP/cHH/cHD/cXH/cHD/cnL/dHT/cXJ2Y/zhAAAAHXRSTlMAmR8mj+/ffzlMExCvoYZfb0NAz2kKv7+Gc1ZyVs4lXHAAAAE4SURBVEjH3ZRbloMgEEQtBCUiiK8k6rD/bU7CzDEJCMJv6hPqnqKhm+I7Va6TogDUspYJ9p7iTYqf2JvF+qiqN/VH1k3UrwBs/N/T8O0ZMkeADriXH/XcgSlS7sPfOJkUKGMBXpF9LILi7q3NFHQOn2g6jCUBgAP9wcMAPABcDuvjwCULKMPAmgt02YCUPfHE5TEw0JGZgNgoB8dOruZEFfnwV8ZkEa1J0O0twCTpVUedBtQ74FXMqNbSq6vdgdHZoeIwuNoBFoh2CLYD/m30y8L9swaAwbYh8PN4/iRAFA2s5kIkAbZBAdu6iQkzrJrEhMHOnp2CzgHCt8Sn7jlLVQDIfge3CaTtZEGd5THS3beaXlm4l7RJkt4BkQaQzImTxUsid6YLIs/8rXA/Gt2GPiZWtZoUX6Rf0glhk/KUKW0AAAAASUVORK5CYII="><span data-v-f1cfbd6f="">Password</span></div><div data-v-f1cfbd6f="" class="passwordInput__container-input"><input data-v-f1cfbd6f="" type="password" placeholder="Please enterPassword" maxlength="32"><img data-v-f1cfbd6f="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAMAAAC7IEhfAAAAP1BMVEUAAADExMTExMTDw8PExMTFxcXFxcXExMS/v7/FxcXFxcXExMTExMTDw8PExMTFxcXFxcXExMTPz8+/v7/ExMTkagEbAAAAFHRSTlMAIO/ff29fvxDfMD/PoI+fr1AQMBwdwB4AAAFQSURBVDjL5ZJbkoQgDEXDI4iAqN3sf61DIEFHqmvmv/OhEE5ycwvgm0Il+z9uLQU/HJ0OrTvD4IqdoZdbdOHQh+sczphlSmKlvZu4uPZG2bkqfnDRzFlKL/FKuM9cig+/OoLCmcs8Au7ZqUDcG4IW00OGE2Fh040D/G1baeFO8mDo07gmpdUAa5djVGQPgej3OFtuwqZX7U3o1C0RmjevL+/rWLZqVzqnyV0bc70atgVJInPUaR/ip5TkATrmIBYBd3Gq6pGSVWpc18mPY9jYGKk0jgeP0nCjPxtDTgpnZXDkjGy0kgv3AK+4FG6opMmQXJVwob8wK0/jgCu8qWS+c/oU7hJumUqyrl2MOdDLzd85maVs/p6iQScOMnG1HcYXANlBwsriH9zWua2NZ4zmR8l+Jy6Ycotk/czJfQU8kqmRdgwwhU9y7X+F3yx8VfwAZv4b1F/KTEQAAAAASUVORK5CYII=" class="eye"></div></div><div data-v-867fa208="" class="signIn__container-button"><button data-v-867fa208="" class="">Log in</button><button data-v-867fa208="" class="register">Register</button></div><div data-v-867fa208="" class="signIn_footer"><div data-v-867fa208="" class="forgetcon"><div data-v-867fa208="" class="forgetbg"></div><div data-v-867fa208="" class="font24">Forgot password</div></div><div data-v-867fa208="" class="customcon"><div data-v-867fa208="" class="custombg"></div><div data-v-867fa208="" class="font24">Customer Service</div></div></div><div data-v-8a55a30e="" data-v-867fa208="" class="dialog inactive"><div data-v-8a55a30e="" class="dialog__container" role="dialog" tabindex="0"><div data-v-8a55a30e="" class="dialog__container-img"><img data-v-8a55a30e="" alt="" class="" data-origin="https://91dreamclub.com/assets/png/orderCancelWarn-ac58c333.png" src="https://91dreamclub.com/assets/png/orderCancelWarn-ac58c333.png"></div><div data-v-8a55a30e="" class="dialog__container-title"><h1 data-v-8a55a30e="">Account has been locked</h1></div><div data-v-8a55a30e="" class="dialog__container-content"><div data-v-867fa208="" class="idlockTip">You have entered the wrong password 10 times in a row <br data-v-867fa208="">Contact customer service to unlock</div></div><div data-v-8a55a30e="" class="dialog__container-footer"><button data-v-867fa208="" class="dialogBtn">Cancel</button><button data-v-867fa208="" class="dialogBtn"><img data-v-867fa208="" src="https://91dreamclub.com/assets/png/iconservr-dafbd4f0.png"> Contact customer service</button></div></div><div data-v-8a55a30e="" class="dialog__outside"></div></div><!----><!----></div></div></div></div><div class="customer" id="customerId" style="--36a344b0: 'Roboto', 'Inter', sans-serif; --17a7a9f6: bahnschrift;"><!----><!----></div>
<foreignobject></foreignobject>

<!----><!----><!----><!----></body></html>