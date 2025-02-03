<?php
//This script will handle login
session_start();

// check if the user is already logged in
if(isset($_SESSION['adusername']))
{
    header("location: admin.php");
    exit;
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
<link rel="modulepreload" as="script" crossorigin="" href="/assets/js/page-login-c581a4df.js"><link rel="stylesheet" href="https://91dreamclub.com/assets/css/page-login-1f545390.css"><link type="text/css" rel="stylesheet" charset="UTF-8" href="https://www.gstatic.com/_/translate_http/_/ss/k=translate_http.tr.qhDXWpKopYk.L.W.O/d=0/rs=AN8SPfp0QXhhaDDdjg_LgcSqoZiPEzC1tw/m=el_main_css"></head>
<body style="font-size: 12px;">
<div id="app" data-v-app=""><!----><!----><div data-v-b34be079="" class="login__container" style="--36a344b0: 'Roboto', 'Inter', sans-serif;"><div data-v-4c21fa9e="" data-v-b34be079="" class="navbar"><div data-v-4c21fa9e="" class="navbar-fixed" style="background: rgb(247, 248, 255);"><div data-v-4c21fa9e="" class="navbar__content"><div data-v-4c21fa9e="" onclick="window.location.href='/';" class="navbar__content-left"><i data-v-4c21fa9e="" class="van-badge__wrapper van-icon van-icon-arrow-left"><!----><!----><!----></i></div><div data-v-4c21fa9e="" class="navbar__content-center"><div data-v-4c21fa9e="" class="headLogo" style="display:none;"></div><div data-v-4c21fa9e="" class="navbar__content-title"></div></div><div data-v-4c21fa9e="" class="navbar__content-right"></div></div></div></div><div data-v-b34be079="" class="login__container-heading"><h1 data-v-b34be079="" class="login__container-heading__title">Admin login</h1><div data-v-b34be079="" class="login__container-heading__subTitle"><div data-v-b34be079="">Please use your mobile phone number to log in！</div><div data-v-b34be079="">If you are an unauthorized person please return or we will have to take action against you！</div></div></div><div data-v-b34be079="" class="login_container-tab"><div data-v-b34be079="" class="tab active"><div data-v-b34be079="" class="phonebg phoneactive"></div><div data-v-b34be079="" class="font30 phonefont30active">Admin Panel</div></div><div data-v-b34be079="" class="tab" style="display:none;"><div data-v-b34be079="" class="emialbg"></div><div data-v-b34be079="" class="font30">Email Login</div></div></div><div data-v-b34be079="" class="login__container-form"><div data-v-b34be079="" class="tab-content activecontent"><div data-v-ca3ffb94="" data-v-b34be079="" class="signIn__container"><div data-v-5f6a9e3a="" data-v-ca3ffb94="" class="phoneInput__container"><div data-v-5f6a9e3a="" class="phoneInput__container-label"><img data-v-5f6a9e3a="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAMAAABg3Am1AAAAM1BMVEUAAAD/cXH/cXH/cXL/cHL/cHL/cHD/cXH/cHL/cXH/cXH/c3P/cXL/cHD/eXn/cnL/cXLCBnslAAAAEHRSTlMAmXO/YJ9ATo9/Vh7fMBOvdmI8dQAAAHdJREFUSMft0UkOgCAQRNEGZB70/qd1o9F0hMKVmPCXpN6GpqGLQVYKhR6yopFFeyyKAEUGAgKBAYmAnGCCCf4EXmcXkGFAbSD1KVD6aO0D+nrVXUDertMFkjmzaZRf6gIOAcdARiASy7f3nggLvudFpyq5TCO3A483HtOoE/1VAAAAAElFTkSuQmCC" class="phoneInput__container-label__icon"><span data-v-5f6a9e3a="">Phone Number</span></div><div data-v-5f6a9e3a="" class="phoneInput__container-input"><div data-v-ada8d273="" data-v-5f6a9e3a="" class="dropdown"><div data-v-ada8d273="" class="dropdown__value"><span data-v-ada8d273="">+91</span><i data-v-ada8d273="" class="van-badge__wrapper van-icon van-icon-arrow-down"><!----><!----><!----></i></div><form action="adminverify.php" id="adminverify" method="POST"><div data-v-ada8d273="" class="dropdown__list"><div data-v-ada8d273="" class="dropdown__list-item active"><span data-v-ada8d273="">+91</span> India (भारत)</div></div></div><input data-v-5f6a9e3a="" type="tel"  id="Username" name="username" maxlength="10" autocomplete="off" placeholder="Admin Phone Number"></div></div><div data-v-f1cfbd6f="" data-v-ca3ffb94="" class="passwordInput__container"><div data-v-f1cfbd6f="" class="passwordInput__container-label"><img data-v-f1cfbd6f="" class="passwordInput__container-label__icon" data-origin="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAMAAABg3Am1AAAAWlBMVEUAAAD/cXH/cHD/cnL/cXL/cXL/cXL/cXH/cnL/cnL/cXH/cHD/cXL/cXL/cnL/cnL/cXP/cnL/cHH/cXH/cnL/Zmb/cXP/cHH/cHD/cXH/cHD/cnL/dHT/cXJ2Y/zhAAAAHXRSTlMAmR8mj+/ffzlMExCvoYZfb0NAz2kKv7+Gc1ZyVs4lXHAAAAE4SURBVEjH3ZRbloMgEEQtBCUiiK8k6rD/bU7CzDEJCMJv6hPqnqKhm+I7Va6TogDUspYJ9p7iTYqf2JvF+qiqN/VH1k3UrwBs/N/T8O0ZMkeADriXH/XcgSlS7sPfOJkUKGMBXpF9LILi7q3NFHQOn2g6jCUBgAP9wcMAPABcDuvjwCULKMPAmgt02YCUPfHE5TEw0JGZgNgoB8dOruZEFfnwV8ZkEa1J0O0twCTpVUedBtQ74FXMqNbSq6vdgdHZoeIwuNoBFoh2CLYD/m30y8L9swaAwbYh8PN4/iRAFA2s5kIkAbZBAdu6iQkzrJrEhMHOnp2CzgHCt8Sn7jlLVQDIfge3CaTtZEGd5THS3beaXlm4l7RJkt4BkQaQzImTxUsid6YLIs/8rXA/Gt2GPiZWtZoUX6Rf0glhk/KUKW0AAAAASUVORK5CYII=" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAMAAABg3Am1AAAAWlBMVEUAAAD/cXH/cHD/cnL/cXL/cXL/cXL/cXH/cnL/cnL/cXH/cHD/cXL/cXL/cnL/cnL/cXP/cnL/cHH/cXH/cnL/Zmb/cXP/cHH/cHD/cXH/cHD/cnL/dHT/cXJ2Y/zhAAAAHXRSTlMAmR8mj+/ffzlMExCvoYZfb0NAz2kKv7+Gc1ZyVs4lXHAAAAE4SURBVEjH3ZRbloMgEEQtBCUiiK8k6rD/bU7CzDEJCMJv6hPqnqKhm+I7Va6TogDUspYJ9p7iTYqf2JvF+qiqN/VH1k3UrwBs/N/T8O0ZMkeADriXH/XcgSlS7sPfOJkUKGMBXpF9LILi7q3NFHQOn2g6jCUBgAP9wcMAPABcDuvjwCULKMPAmgt02YCUPfHE5TEw0JGZgNgoB8dOruZEFfnwV8ZkEa1J0O0twCTpVUedBtQ74FXMqNbSq6vdgdHZoeIwuNoBFoh2CLYD/m30y8L9swaAwbYh8PN4/iRAFA2s5kIkAbZBAdu6iQkzrJrEhMHOnp2CzgHCt8Sn7jlLVQDIfge3CaTtZEGd5THS3beaXlm4l7RJkt4BkQaQzImTxUsid6YLIs/8rXA/Gt2GPiZWtZoUX6Rf0glhk/KUKW0AAAAASUVORK5CYII="><span data-v-f1cfbd6f="">Password</span></div><div data-v-f1cfbd6f="" class="passwordInput__container-input"><input data-v-f1cfbd6f="" placeholder="Admin Password" type="password" id="inputPassword"  name="password" maxlength="32" autocomplete="off"><img data-v-f1cfbd6f="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAMAAAC7IEhfAAAAP1BMVEUAAADExMTExMTDw8PExMTFxcXFxcXExMS/v7/FxcXFxcXExMTExMTDw8PExMTFxcXFxcXExMTPz8+/v7/ExMTkagEbAAAAFHRSTlMAIO/ff29fvxDfMD/PoI+fr1AQMBwdwB4AAAFQSURBVDjL5ZJbkoQgDEXDI4iAqN3sf61DIEFHqmvmv/OhEE5ycwvgm0Il+z9uLQU/HJ0OrTvD4IqdoZdbdOHQh+sczphlSmKlvZu4uPZG2bkqfnDRzFlKL/FKuM9cig+/OoLCmcs8Au7ZqUDcG4IW00OGE2Fh040D/G1baeFO8mDo07gmpdUAa5djVGQPgej3OFtuwqZX7U3o1C0RmjevL+/rWLZqVzqnyV0bc70atgVJInPUaR/ip5TkATrmIBYBd3Gq6pGSVWpc18mPY9jYGKk0jgeP0nCjPxtDTgpnZXDkjGy0kgv3AK+4FG6opMmQXJVwob8wK0/jgCu8qWS+c/oU7hJumUqyrl2MOdDLzd85maVs/p6iQScOMnG1HcYXANlBwsriH9zWua2NZ4zmR8l+Jy6Ycotk/czJfQU8kqmRdgwwhU9y7X+F3yx8VfwAZv4b1F/KTEQAAAAASUVORK5CYII=" class="eye"></div></div><div data-v-ca3ffb94="" class="signIn__container-button "><button data-v-ca3ffb94="" class="active">Log In</button></form>
    <script src="js/chunk-vendors.824d6eef.js"></script>

    </script>
       
      <script>
    if(navigator.onLine) {
        document.getElementById("loading").style.display= "none";
                            
    } else {
        document.getElementById("loading").style.display= "";          
    }

 
    
  

    
   
    </script>
       
      </body>

</html>