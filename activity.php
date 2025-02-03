<?php
//This script will handle login
error_reporting(0);
session_start();

require_once "config.php";
if (array_key_exists('username', $_POST)) {
    $un = trim($_POST['username']);
    // Now $un contains the value of the 'username' field from the form submission
    // Proceed with further processing
} else {
    // 'username' field is not present in the form submission
    // Handle this case accordingly
}
if (isset($_POST['otp'])) {
    $otp = trim($_POST['otp']);
    // Proceed with further processing
} else {
    // Handle the case where 'otp' is not present in the form submission
}



//$otp=trim($_POST["otp"]);
//
// Retrieve and sanitize the OTP value from the form submission
$otp = isset($_POST['otp']) ? trim($_POST['otp']) : '';

// Debugging: Check the value of $otp
//var_dump($otp);

// Proceed with your SQL query
$query0 = "SELECT username FROM verify WHERE otp='$otp'";

$result3 =$conn->query($query0);
$row3 = mysqli_fetch_assoc($result3);
if ($row3 !== null && isset($row3['username'])) {
    $verun = $row3['username'];
    // Proceed with further processing
} else {
    // Handle the case where $row3 is null or 'username' is not set
}

if (isset($un)) {
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
}

?><html lang="en" translate="no" data-dpr="1" style="font-size: 40px;"><head>
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
<link rel="modulepreload" as="script" crossorigin="" href="/assets/js/page-promotion-db066b5a.js"><link rel="modulepreload" as="script" crossorigin="" href="/assets/js/page-main-eac2089d.js"><link rel="modulepreload" as="script" crossorigin="" href="/assets/js/page-login-c581a4df.js"><link rel="stylesheet" href="https://91dreamclub.com/assets/css/page-login-1f545390.css"><link rel="stylesheet" href="https://91dreamclub.com/assets/css/page-main-8cf260fb.css"><link rel="stylesheet" href="https://91dreamclub.com/assets/css/page-promotion-24bf6ab6.css"><link rel="modulepreload" as="script" crossorigin="" href="/assets/js/home-c9e2cd52.js"><link rel="modulepreload" as="script" crossorigin="" href="/assets/js/activity-46c093bd.js"><link rel="modulepreload" as="script" crossorigin="" href="/assets/js/promotion-5577fd39.js"><link rel="modulepreload" as="script" crossorigin="" href="/assets/js/wallet-d91dc187.js"><link rel="modulepreload" as="script" crossorigin="" href="/assets/js/main-b43b53ed.js"></head>
<body style="font-size: 12px;">
<div id="app" data-v-app=""><!----><!----><div data-v-4c21fa9e="" data-v-3d31d6c1="" class="navbar" style="--36a344b0: 'Roboto', 'Inter', sans-serif;"><div data-v-4c21fa9e="" class="navbar-fixed" style="background: rgb(247, 248, 255);"><div data-v-4c21fa9e="" class="navbar__content"><div data-v-4c21fa9e="" class="navbar__content-left"><!----></div><div data-v-4c21fa9e="" class="navbar__content-center"><!----><img data-v-3d31d6c1="" src="./favicon.png" alt=""></div><div data-v-4c21fa9e="" class="navbar__content-right"></div></div></div></div><div data-v-adddb413="" data-v-3d31d6c1="" class="infiniteScroll" id="refresh3bc4e9947fbe4ca9a5a6ca9a6d66d2a5" style="--36a344b0: 'Roboto', 'Inter', sans-serif;"><div data-v-513662bd="" data-v-3d31d6c1="" class="activitySection__container"><div onclick="window.location.href='/recharge#/';" data-v-513662bd="" class="box"><img data-v-513662bd="" src="https://ossimg.91admin123admin.com/91club/banner/Banner_20230611110711jaex.png" class="act_0"><div data-v-513662bd="" class="box-content"><h1 data-v-513662bd="">Deposit and Get Bonus Check-in</h1></div></div><div data-v-513662bd="" style="display:none;" class="box"><img data-v-513662bd="" src="https://ossimg.91admin123admin.com/91club/banner/Banner_20230615171653i2s9.jpg" class="act_1"><div data-v-513662bd="" class="box-content"><h1 data-v-513662bd="">Bonus Winning Streak</h1></div></div><div data-v-513662bd="" style="display:none;"class="box"><img data-v-513662bd="" src="https://ossimg.91admin123admin.com/91club/banner/Banner_20230615171900e3bc.jpg" class="act_2"><div data-v-513662bd="" class="box-content"><h1 data-v-513662bd="">Complete Awesome Rewarded Missions</h1></div></div><div data-v-513662bd="" style="display:none;"class="box"><img data-v-513662bd="" src="https://ossimg.91admin123admin.com/91club/banner/Banner_20230615172059etie.jpg" class="act_3"><div data-v-513662bd="" class="box-content"><h1 data-v-513662bd="">" Loss Bonus "  - Turn Losses Into Wins</h1></div></div><div data-v-513662bd="" style="display:none;"class="box"><img data-v-513662bd="" src="https://ossimg.91admin123admin.com/91club/banner/Banner_20230615172319qg3h.jpg" class="act_4"><div data-v-513662bd="" class="box-content"><h1 data-v-513662bd="">Monthly Bonus Promotion</h1></div></div><div data-v-513662bd="" style="display:none;"class="box"><img data-v-513662bd="" src="https://ossimg.91admin123admin.com/91club/banner/Banner_20230615172451icpw.jpg" class="act_5"><div data-v-513662bd="" class="box-content"><h1 data-v-513662bd="">Play Wingo Get Super Bonuses</h1></div></div><div data-v-513662bd="" style="display:none;"class="box"><img data-v-513662bd="" src="https://ossimg.91admin123admin.com/91club/banner/Banner_202308111639363cbt.jpg" class="act_6"><div data-v-513662bd="" class="box-content"><h1 data-v-513662bd="">Aviator High Betting Reward</h1></div></div><div data-v-513662bd="" style="display:none;" class="box"><img data-v-513662bd="" src="https://ossimg.91admin123admin.com/91club/banner/Banner_20230615171303xhpa.jpg" class="act_7"><div data-v-513662bd="" class="box-content"><h1 data-v-513662bd="">Youtube Creative Video</h1></div></div></div><div data-v-adddb413="" class="infiniteScroll__loading"><!----><div data-v-adddb413="">No more</div></div></div><br data-v-3d31d6c1="" style="--36a344b0: 'Roboto', 'Inter', sans-serif;"><br data-v-3d31d6c1="" style="--36a344b0: 'Roboto', 'Inter', sans-serif;"><br data-v-3d31d6c1="" style="--36a344b0: 'Roboto', 'Inter', sans-serif;"><br data-v-3d31d6c1="" style="--36a344b0: 'Roboto', 'Inter', sans-serif;"><div class="customer" id="customerId" style="--36a344b0: 'Roboto', 'Inter', sans-serif; --17a7a9f6: bahnschrift;"></div><div data-v-67fe8f9c="" class="tabbar__container" style="--36a344b0: 'Roboto', 'Inter', sans-serif;"><div data-v-67fe8f9c="" onclick="window.location.href='/indexlogin#/';" class="tabbar__container-item"><svg data-v-67fe8f9c="" xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="none" viewBox="0 0 46 44" class=""><circle cx="27" cy="28" r="18" fill="#FFF4F4"></circle><path fill="#FFCDCB" fill-rule="evenodd" d="m23.66 5.278-17.9 12.08v25.507h10.08v-10.44a5.04 5.04 0 0 1 5.04-5.04h6.36a5.04 5.04 0 0 1 5.04 5.04v4.38h-3.36v-4.38a1.68 1.68 0 0 0-1.68-1.68h-6.36a1.68 1.68 0 0 0-1.68 1.68v11.16a2.64 2.64 0 0 1-2.64 2.64H5.04a2.64 2.64 0 0 1-2.64-2.64v-26.61a2.64 2.64 0 0 1 1.163-2.188L22.437 2.05a2.16 2.16 0 0 1 2.382-.023L44.514 14.77a2.64 2.64 0 0 1 1.206 2.217v26.598a2.64 2.64 0 0 1-2.64 2.64H30.6v-3.36h11.76V17.379l-18.7-12.1Z" clip-rule="evenodd"></path><path fill="#FFCDCB" d="M32.4 44.545a1.68 1.68 0 1 1-3.36 0 1.68 1.68 0 0 1 3.36 0ZM32.28 36.745a1.68 1.68 0 1 1-3.36 0 1.68 1.68 0 0 1 3.36 0Z"></path></svg><!----><span data-v-67fe8f9c="">Home</span></div><div data-v-67fe8f9c="" class="tabbar__container-item active" onclick="window.location.href='/activity#/';"><svg data-v-67fe8f9c="" xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="none" viewBox="0 0 46 44" class=""><circle cx="27" cy="24" r="18" fill="#FFF4F4"></circle><path fill="#FFCDCB" fill-rule="evenodd" d="M10.512 5.2h26.975a4.8 4.8 0 0 1 4.796 4.6l.51 12.2h3.203L45.48 9.666A8 8 0 0 0 37.489 2H10.511A8 8 0 0 0 2.52 9.666l-1.17 28A8 8 0 0 0 9.34 46h29.317a8 8 0 0 0 7.993-8.334L46.331 30h-3.203l.326 7.8a4.8 4.8 0 0 1-4.796 5H9.341a4.8 4.8 0 0 1-4.795-5l1.17-28a4.8 4.8 0 0 1 4.796-4.6Z" clip-rule="evenodd"></path><path fill="#FFCDCB" fill-rule="evenodd" d="M13.92 16.64c.466 5.158 4.8 9.2 10.08 9.2 5.279 0 9.614-4.042 10.078-9.2h-3.522a6.621 6.621 0 0 1-13.113 0h-3.522Z" clip-rule="evenodd"></path><path fill="#FFCDCB" d="M34.092 16.65a1.75 1.75 0 0 1-1.75 1.75c-.967 0-1.795-.784-1.795-1.75 0-.967.828-1.75 1.795-1.75.966 0 1.75.783 1.75 1.75ZM17.449 16.648c0 .966-.766 1.75-1.733 1.75-.966 0-1.795-.784-1.795-1.75 0-.967.829-1.75 1.795-1.75.967 0 1.733.783 1.733 1.75ZM46 22a1.6 1.6 0 1 1-3.2 0 1.6 1.6 0 0 1 3.2 0ZM46.33 30.044a1.6 1.6 0 1 1-3.2 0 1.6 1.6 0 0 1 3.2 0Z"></path></svg><!----><span data-v-67fe8f9c="">Activity</span></div><div data-v-67fe8f9c="" onclick="window.location.href='/promotion#/';" class="tabbar__container-item">
<svg data-v-67fe8f9c="" xmlns="http://www.w3.org/2000/svg" width="57" height="49" fill="none" viewBox="0 0 57 49" class=""><path fill="#fff" fill-rule="evenodd" d="M8.939 1.501A4 4 0 0 1 12.062 0h32.155a4 4 0 0 1 3.124 1.501l7.738 9.673c.427.533.749 1.12.968 1.735H.233a5.99 5.99 0 0 1 .967-1.735L8.94 1.501ZM0 16.091h56.28a5.985 5.985 0 0 1-1.277 2.673l-23.79 28.549a4 4 0 0 1-6.146 0l-23.79-28.55A5.984 5.984 0 0 1 0 16.092Zm20.556 5.936 7.195 10.102a.5.5 0 0 0 .816-.002l7.118-10.093a2.44 2.44 0 0 1 4.435 1.406v.2h-.223c-.326 0-.782.248-1.304.93-.506.663-6.466 8.724-9.651 13.035a.975.975 0 0 1-1.563.007L17.32 24.26s-.394-.62-1.06-.62h-.14v-.195a2.445 2.445 0 0 1 4.436-1.418Z" clip-rule="evenodd"></path></svg><div data-v-67fe8f9c="" class="promotionBg"></div><span data-v-67fe8f9c="">Promotion</span></div><div data-v-67fe8f9c="" onclick="window.location.href='./wallet?user=<?php echo  $_SESSION['username']?>'" class="tabbar__container-item"><svg data-v-67fe8f9c="" xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="none" viewBox="0 0 46 44" class="wallet"><circle cx="28" cy="24" r="18" fill="#FFF4F4"></circle><path stroke="#FFCDCB" stroke-linecap="round" stroke-linejoin="round" stroke-width="3.2" d="M3 23c0-5.984 3.526-10.164 9.008-10.868.56-.088 1.14-.132 1.742-.132h21.5c.559 0 1.096.022 1.612.11C42.41 12.77 46 16.972 46 23v11c0 6.6-4.3 11-10.75 11h-21.5C7.3 45 3 40.6 3 34v-2.178"></path><path stroke="#FFCDCB" stroke-linecap="round" stroke-linejoin="round" stroke-width="3.2" d="M46 23.724h-6.452c-2.366 0-4.301 1.862-4.301 4.138S37.182 32 39.548 32H46m-9-20c-.516-.083-1.194 0-1.753 0H14c-.602 0-1.44-.083-2 0 0 0 .731-.648 1.247-1.145l6.99-6.745A7.737 7.737 0 0 1 25.571 2c1.997 0 3.914.758 5.333 2.11l3.764 3.662C36.045 9.076 39.548 12 37 12Z"></path></svg><!----><span data-v-67fe8f9c="">Wallet</span></div><div data-v-67fe8f9c="" onclick="window.location.href='/main#/';" class="tabbar__container-item"><svg data-v-67fe8f9c="" xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="none" viewBox="0 0 46 44" class=""><circle cx="28" cy="24" r="18" fill="#FFF4F4"></circle><path fill="#FFCDCB" fill-rule="evenodd" d="M24.08 5.28C13.741 5.28 5.36 13.661 5.36 24c0 10.339 8.381 18.72 18.72 18.72 10.339 0 18.72-8.381 18.72-18.72v-8.76h3.36V24c0 12.194-9.886 22.08-22.08 22.08C11.886 46.08 2 36.194 2 24 2 11.806 11.886 1.92 24.08 1.92h20.28v3.36H24.08Z" clip-rule="evenodd"></path><path fill="#FFCDCB" d="M46.16 3.6a1.68 1.68 0 1 1-3.36 0 1.68 1.68 0 0 1 3.36 0ZM46.16 15.12a1.68 1.68 0 1 1-3.36 0 1.68 1.68 0 0 1 3.36 0Z"></path><path fill="#FFCDCB" fill-rule="evenodd" d="M15.806 29.582a1.68 1.68 0 0 1 2.372.144c1.15 1.298 2.748 2.794 5.462 2.794 2.872 0 4.857-1.428 5.805-2.533a1.68 1.68 0 0 1 2.55 2.186c-1.451 1.695-4.314 3.707-8.355 3.707-4.198 0-6.647-2.424-7.977-3.926a1.68 1.68 0 0 1 .143-2.372Z" clip-rule="evenodd"></path></svg><!----><span data-v-67fe8f9c="">Account</span></div></div><!----></div>
<foreignobject></foreignobject>

<div data-v-app=""></div><!----><div role="dialog" tabindex="0" class="van-popup van-popup--center van-toast van-toast--middle van-toast--break-word van-toast--fail" style="z-index: 2002; display: none;"><i class="van-badge__wrapper van-icon van-icon-fail van-toast__icon"><!----><!----><!----></i><div class="van-toast__text">Error: 502 
 The deposit amount does not meet the standard</div><!----></div></body></html>