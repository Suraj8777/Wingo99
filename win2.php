<?php
session_start();
 
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login");
    exit;
}
   require_once "config.php";
   
    $sql = "SELECT * FROM bet WHERE id='1'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_object($result);
 
// Initialize the session
  $ssql3 = "SELECT period FROM emredperiod WHERE id='1'";
    $sresult3 =$conn->query($ssql3);
    $srow3 = mysqli_fetch_assoc($sresult3);
    $sperio=$srow3['period']; 
    
  
   
                      

                       
$query =  "SELECT * FROM emredbetrec ORDER BY id DESC";


// result for method one
$result1 = mysqli_query($conn, $query);

// result for method two 
$result2 = mysqli_query($conn, $query);


$dataRow = "";

while($row2 = mysqli_fetch_array($result2))
{
    $dataRow = $dataRow."<tr><td>$row2[1]</td><td> $row2[2]</td><td>$row2[3]</td></tr>";
    
}


if (!isset ($_GET['spage']) ) {  
    $spage = 1;  
} else {  
    $spage = $_GET['spage'];  
}  


if (!isset ($_GET['srpage']) ) {  
    $srpage = 1;  
} else {  
    $srpage = $_GET['srpage'];  
}  

?>
<?php
// Initialize the session
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

require_once "config.php";
$opt="SELECT SUM(amount) as total FROM `emredbetting` WHERE status='pending' AND ans='red'";
$optres=$conn->query($opt);
$sum= mysqli_fetch_assoc($optres);
$red=round($sum['total'],2);

$optg="SELECT SUM(amount) as total FROM `emredbetting` WHERE status='pending' AND ans='green'";
$optresg=$conn->query($optg);
$sumg= mysqli_fetch_assoc($optresg);
$green=round($sumg['total'],2);

$optv="SELECT SUM(amount) as total FROM `emredbetting` WHERE status='pending' AND ans='violet'";
$optresv=$conn->query($optv);
$sumv= mysqli_fetch_assoc($optresv);
$violet=round($sumv['total'],2);

$opt0="SELECT SUM(amount) as total FROM `emredbetting` WHERE status='pending' AND ans='0'";
$optres0=$conn->query($opt0);
$sum0= mysqli_fetch_assoc($optres0);
$zero=round($sum0['total'],2);

$opt1="SELECT SUM(amount) as total FROM `emredbetting` WHERE status='pending' AND ans='1'";
$optres1=$conn->query($opt1);
$sum1= mysqli_fetch_assoc($optres1);
$one=round($sum1['total'],2);

$opt2="SELECT SUM(amount) as total FROM `emredbetting` WHERE status='pending' AND ans='2'";
$optres2=$conn->query($opt2);
$sum2= mysqli_fetch_assoc($optres2);
$two=round($sum2['total'],2);

$opt3="SELECT SUM(amount) as total FROM `emredbetting` WHERE status='pending' AND ans='3'";
$optres3=$conn->query($opt3);
$sum3= mysqli_fetch_assoc($optres3);
$three=round($sum3['total'],2);

$opt4="SELECT SUM(amount) as total FROM `emredbetting` WHERE status='pending' AND ans='4'";
$optres4=$conn->query($opt4);
$sum4= mysqli_fetch_assoc($optres4);
$four=round($sum4['total'],2);

$opt5="SELECT SUM(amount) as total FROM `betting` WHERE status='pending' AND ans='5'";
$optres5=$conn->query($opt5);
$sum5= mysqli_fetch_assoc($optres5);
$five=round($sum5['total'],2);

$opt6="SELECT SUM(amount) as total FROM `emredbetting` WHERE status='pending' AND ans='6'";
$optres6=$conn->query($opt6);
$sum6= mysqli_fetch_assoc($optres6);
$six=round($sum6['total'],2);

$opt7="SELECT SUM(amount) as total FROM `emredbetting` WHERE status='pending' AND ans='7'";
$optres7=$conn->query($opt7);
$sum7= mysqli_fetch_assoc($optres7);
$seven=round($sum7['total'],2);

$opt8="SELECT SUM(amount) as total FROM `emredbetting` WHERE status='pending' AND ans='8'";
$optres8=$conn->query($opt8);
$sum8= mysqli_fetch_assoc($optres8);
$eight=round($sum8['total'],2);

$opt9="SELECT SUM(amount) as total FROM `emredbetting` WHERE status='pending' AND ans='9'";
$optres9=$conn->query($opt9);
$sum9= mysqli_fetch_assoc($optres9);
$nine=round($sum9['total'],2);

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
<link rel="stylesheet" href="./win_files/index.e18c94d4.css">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, viewport-fit=cover">

    <style type="text/css">
        @charset "UTF-8";

        /*每个页面公共css */
        /*
  ColorUi for uniApp  v2.1.6 | by 文晓港 2019-05-31 10:44:24
  仅供学习交流，如作它用所承受的法律责任一概与作者无关  
  
  *使用ColorUi开发扩展与插件时，请注明基于ColorUi开发 
  
  （QQ交流群：240787041）
*/
        /* ==================
        初始化
 ==================== */
        body {
            background-color: #fff;
            font-size: 14px;
            color: #333;
        }

        uni-view,
        uni-scroll-view,
        uni-swiper,
        uni-button,
        uni-input,
        uni-textarea,
        uni-label,
        uni-navigator,
        uni-image {
            box-sizing: border-box
        }

        .round {
            border-radius: 2620px
        }

.radius {
    border-radius: 18px;
}

        /* ==================
          图片
 ==================== */
        uni-image {
            max-width: 100%;
            display: inline-block;
            position: relative;
            z-index: 0
        }

        uni-image.loading::before {
            content: "";
            background-color: #f5f5f5;
            display: block;
            position: absolute;
            width: 100%;
            height: 100%;
            z-index: -2
        }

        uni-image.loading::after {
            content: "\e7f1";
            font-family: cuIcon;
            position: absolute;
            top: 0;
            left: 0;
            width: 16px;
            height: 16px;
            line-height: 16px;
            right: 0;
            bottom: 0;
            z-index: -1;
            font-size: 16px;
            margin: auto;
            color: #ccc;
            -webkit-animation: cuIcon-spin 2s infinite linear;
            animation: cuIcon-spin 2s infinite linear;
            display: block
        }

        .response {
            width: 100%
        }

        /* ==================
         开关
 ==================== */
        uni-switch,
        uni-checkbox,
        uni-radio {
            position: relative
        }

        uni-switch::after,
        uni-switch::before {
            font-family: cuIcon;
            content: "\e645";
            position: absolute;
            color: #fff !important;
            top: 0;
            left: 0px;
            font-size: 13px;
            line-height: 26px;
            width: 50%;
            text-align: center;
            pointer-events: none;
            -webkit-transform: scale(0);
            transform: scale(0);
            -webkit-transition: all .3s ease-in-out 0s;
            transition: all .3s ease-in-out 0s;
            z-index: 9;
            bottom: 0;
            height: 26px;
            margin: auto
        }

        uni-switch::before {
            content: "\e646";
            right: 0;
            -webkit-transform: scale(1);
            transform: scale(1);
            left: auto
        }

        uni-switch[checked]::after,
        uni-switch.checked::after {
            -webkit-transform: scale(1);
            transform: scale(1)
        }

        uni-switch[checked]::before,
        uni-switch.checked::before {
            -webkit-transform: scale(0);
            transform: scale(0)
        }

        uni-radio::before,
        uni-checkbox::before {
            font-family: cuIcon;
            content: "\e645";
            position: absolute;
            color: #fff !important;
            top: 50%;
            margin-top: -8px;
            right: 5px;
            font-size: 16px;
            line-height: 16px;
            pointer-events: none;
            -webkit-transform: scale(1);
            transform: scale(1);
            -webkit-transition: all .3s ease-in-out 0s;
            transition: all .3s ease-in-out 0s;
            z-index: 9
        }

        uni-radio .wx-radio-input,
        uni-checkbox .wx-checkbox-input,
        uni-radio .uni-radio-input,
        uni-checkbox .uni-checkbox-input {
            margin: 0;
            width: 24px;
            height: 24px
        }

        uni-checkbox.round .wx-checkbox-input,
        uni-checkbox.round .uni-checkbox-input {
            border-radius: 52px
        }

        uni-switch[checked]::before {
            -webkit-transform: scale(0);
            transform: scale(0)
        }

        uni-switch .wx-switch-input,
        uni-switch .uni-switch-input {
            border: none;
            padding: 0 24px;
            width: 48px;
            height: 26px;
            margin: 0;
            border-radius: 52px
        }

        uni-switch .wx-switch-input:not([class*="bg-"]),
        uni-switch .uni-switch-input:not([class*="bg-"]) {
            background: #8799a3 !important
        }

        uni-switch .wx-switch-input::after,
        uni-switch .uni-switch-input::after {
            margin: auto;
            width: 26px;
            height: 26px;
            border-radius: 52px;
            left: 0px;
            top: 0px;
            bottom: 0px;
            position: absolute;
            -webkit-transform: scale(.9);
            transform: scale(.9);
            -webkit-transition: all .1s ease-in-out 0s;
            transition: all .1s ease-in-out 0s
        }

        uni-switch .wx-switch-input.wx-switch-input-checked::after,
        uni-switch .uni-switch-input.uni-switch-input-checked::after {
            margin: auto;
            left: 22px;
            box-shadow: none;
            -webkit-transform: scale(.9);
            transform: scale(.9)
        }

        uni-radio-group {
            display: inline-block
        }

        uni-switch.radius .wx-switch-input::after,
        uni-switch.radius .wx-switch-input,
        uni-switch.radius .wx-switch-input::before,
        uni-switch.radius .uni-switch-input::after,
        uni-switch.radius .uni-switch-input,
        uni-switch.radius .uni-switch-input::before {
            border-radius: 5px
        }

        uni-switch .wx-switch-input::before,
        uni-radio.radio::before,
        uni-checkbox .wx-checkbox-input::before,
        uni-radio .wx-radio-input::before,
        uni-switch .uni-switch-input::before,
        uni-radio.radio::before,
        uni-checkbox .uni-checkbox-input::before,
        uni-radio .uni-radio-input::before {
            display: none
        }

        uni-radio.radio[checked]::after,
        uni-radio.radio .uni-radio-input-checked::after {
            content: "";
            background-color: initial;
            display: block;
            position: absolute;
            width: 8px;
            height: 8px;
            z-index: 999;
            top: 0px;
            left: 0px;
            right: 0;
            bottom: 0;
            margin: auto;
            border-radius: 104px;
            border: 7px solid #fff !important;
        }

        .switch-sex::after {
            content: "\e71c"
        }

        .switch-sex::before {
            content: "\e71a"
        }

        .switch-sex .wx-switch-input,
        .switch-sex .uni-switch-input {
            background: #ff0015 !important;
            border-color: #ff0015 !important
        }

        .switch-sex[checked] .wx-switch-input,
        .switch-sex.checked .uni-switch-input {
            background-image: linear-gradient(90deg, rgb(222, 35, 37) 0%, rgb(255, 80, 74) 100%);
            border-color: linear-gradient(90deg, rgb(222, 35, 37) 0%, rgb(255, 80, 74) 100%); !important
        }

        uni-switch.red[checked] .wx-switch-input.wx-switch-input-checked,
        uni-checkbox.red[checked] .wx-checkbox-input,
        uni-radio.red[checked] .wx-radio-input,
        uni-switch.red.checked .uni-switch-input.uni-switch-input-checked,
        uni-checkbox.red.checked .uni-checkbox-input,
        uni-radio.red.checked .uni-radio-input {
            background-color: #ff0015 !important;
            border-color: #ff0015 !important;
            color: #fff !important
        }

        uni-switch.orange[checked] .wx-switch-input,
        uni-checkbox.orange[checked] .wx-checkbox-input,
        uni-radio.orange[checked] .wx-radio-input,
        uni-switch.orange.checked .uni-switch-input,
        uni-checkbox.orange.checked .uni-checkbox-input,
        uni-radio.orange.checked .uni-radio-input {
            background-color: #f37b1d !important;
            border-color: #f37b1d !important;
            color: #fff !important
        }

        uni-switch.yellow[checked] .wx-switch-input,
        uni-checkbox.yellow[checked] .wx-checkbox-input,
        uni-radio.yellow[checked] .wx-radio-input,
        uni-switch.yellow.checked .uni-switch-input,
        uni-checkbox.yellow.checked .uni-checkbox-input,
        uni-radio.yellow.checked .uni-radio-input {
            background-color: #fbbd08 !important;
            border-color: #fbbd08 !important;
            color: #333 !important
        }

        uni-switch.olive[checked] .wx-switch-input,
        uni-checkbox.olive[checked] .wx-checkbox-input,
        uni-radio.olive[checked] .wx-radio-input,
        uni-switch.olive.checked .uni-switch-input,
        uni-checkbox.olive.checked .uni-checkbox-input,
        uni-radio.olive.checked .uni-radio-input {
            background-color: #8dc63f !important;
            border-color: #8dc63f !important;
            color: #fff !important
        }

        uni-switch.green[checked] .wx-switch-input,
        uni-switch[checked] .wx-switch-input,
        uni-checkbox.green[checked] .wx-checkbox-input,
        uni-checkbox[checked] .wx-checkbox-input,
        uni-radio.green[checked] .wx-radio-input,
        uni-radio[checked] .wx-radio-input,
        uni-switch.green.checked .uni-switch-input,
        uni-switch.checked .uni-switch-input,
        uni-checkbox.green.checked .uni-checkbox-input,
        uni-checkbox.checked .uni-checkbox-input,
        uni-radio.green.checked .uni-radio-input,
        uni-radio.checked .uni-radio-input {
            background-color: #32b16c !important;
            border-color: #32b16c !important;
            color: #fff !important;
            border-color: #32b16c !important
        }

        uni-switch.cyan[checked] .wx-switch-input,
        uni-checkbox.cyan[checked] .wx-checkbox-input,
        uni-radio.cyan[checked] .wx-radio-input,
        uni-switch.cyan.checked .uni-switch-input,
        uni-checkbox.cyan.checked .uni-checkbox-input,
        uni-radio.cyan.checked .uni-radio-input {
            background-color: #1cbbb4 !important;
            border-color: #1cbbb4 !important;
            color: #fff !important
        }

        uni-switch.blue[checked] .wx-switch-input,
        uni-checkbox.blue[checked] .wx-checkbox-input,
        uni-radio.blue[checked] .wx-radio-input,
        uni-switch.blue.checked .uni-switch-input,
        uni-checkbox.blue.checked .uni-checkbox-input,
        uni-radio.blue.checked .uni-radio-input {
            background-image: linear-gradient(90deg, rgb(222, 35, 37) 0%, rgb(255, 80, 74) 100%);
            border-color: linear-gradient(90deg, rgb(222, 35, 37) 0%, rgb(255, 80, 74) 100%); !important;
            color: #fff !important
        }

        uni-switch.purple[checked] .wx-switch-input,
        uni-checkbox.purple[checked] .wx-checkbox-input,
        uni-radio.purple[checked] .wx-radio-input,
        uni-switch.purple.checked .uni-switch-input,
        uni-checkbox.purple.checked .uni-checkbox-input,
        uni-radio.purple.checked .uni-radio-input {
            background-color: #901ffd !important;
            border-color: #901ffd !important;
            color: #fff !important
        }

        uni-switch.mauve[checked] .wx-switch-input,
        uni-checkbox.mauve[checked] .wx-checkbox-input,
        uni-radio.mauve[checked] .wx-radio-input,
        uni-switch.mauve.checked .uni-switch-input,
        uni-checkbox.mauve.checked .uni-checkbox-input,
        uni-radio.mauve.checked .uni-radio-input {
            background-color: #9c26b0 !important;
            border-color: #9c26b0 !important;
            color: #fff !important
        }

        uni-switch.pink[checked] .wx-switch-input,
        uni-checkbox.pink[checked] .wx-checkbox-input,
        uni-radio.pink[checked] .wx-radio-input,
        uni-switch.pink.checked .uni-switch-input,
        uni-checkbox.pink.checked .uni-checkbox-input,
        uni-radio.pink.checked .uni-radio-input {
            background-color: #e03997 !important;
            border-color: #e03997 !important;
            color: #fff !important
        }

        uni-switch.brown[checked] .wx-switch-input,
        uni-checkbox.brown[checked] .wx-checkbox-input,
        uni-radio.brown[checked] .wx-radio-input,
        uni-switch.brown.checked .uni-switch-input,
        uni-checkbox.brown.checked .uni-checkbox-input,
        uni-radio.brown.checked .uni-radio-input {
            background-color: #a5673f !important;
            border-color: #a5673f !important;
            color: #fff !important
        }

        uni-switch.grey[checked] .wx-switch-input,
        uni-checkbox.grey[checked] .wx-checkbox-input,
        uni-radio.grey[checked] .wx-radio-input,
        uni-switch.grey.checked .uni-switch-input,
        uni-checkbox.grey.checked .uni-checkbox-input,
        uni-radio.grey.checked .uni-radio-input {
            background-color: #8799a3 !important;
            border-color: #8799a3 !important;
            color: #fff !important
        }

        uni-switch.gray[checked] .wx-switch-input,
        uni-checkbox.gray[checked] .wx-checkbox-input,
        uni-radio.gray[checked] .wx-radio-input,
        uni-switch.gray.checked .uni-switch-input,
        uni-checkbox.gray.checked .uni-checkbox-input,
        uni-radio.gray.checked .uni-radio-input {
            background-color: #f0f0f0 !important;
            border-color: #f0f0f0 !important;
            color: #333 !important
        }

        uni-switch.black[checked] .wx-switch-input,
        uni-checkbox.black[checked] .wx-checkbox-input,
        uni-radio.black[checked] .wx-radio-input,
        uni-switch.black.checked .uni-switch-input,
        uni-checkbox.black.checked .uni-checkbox-input,
        uni-radio.black.checked .uni-radio-input {
            background-color: #333 !important;
            border-color: #333 !important;
            color: #fff !important
        }

        uni-switch.white[checked] .wx-switch-input,
        uni-checkbox.white[checked] .wx-checkbox-input,
        uni-radio.white[checked] .wx-radio-input,
        uni-switch.white.checked .uni-switch-input,
        uni-checkbox.white.checked .uni-checkbox-input,
        uni-radio.white.checked .uni-radio-input {
            background-color: #fff !important;
            border-color: #fff !important;
            color: #333 !important
        }

        /* ==================
          边框
 ==================== */
        /* -- 实线 -- */
        .solid,
        .solid-top,
        .solid-right,
        .solid-bottom,
        .solid-left,
        .solids,
        .solids-top,
        .solids-right,
        .solids-bottom,
        .solids-left,
        .dashed,
        .dashed-top,
        .dashed-right,
        .dashed-bottom,
        .dashed-left {
            position: relative
        }

        .solid::after,
        .solid-top::after,
        .solid-right::after,
        .solid-bottom::after,
        .solid-left::after,
        .solids::after,
        .solids-top::after,
        .solids-right::after,
        .solids-bottom::after,
        .solids-left::after,
        .dashed::after,
        .dashed-top::after,
        .dashed-right::after,
        .dashed-bottom::after,
        .dashed-left::after {
            content: " ";
            width: 200%;
            height: 200%;
            position: absolute;
            top: 0;
            left: 0;
            border-radius: inherit;
            -webkit-transform: scale(.5);
            transform: scale(.5);
            -webkit-transform-origin: 0 0;
            transform-origin: 0 0;
            pointer-events: none;
            box-sizing: border-box
        }

        .solid::after {
            border: 1px solid rgba(0, 0, 0, .1)
        }

        .solid-top::after {
            border-top: 1px solid rgba(0, 0, 0, .1)
        }

        .solid-right::after {
            border-right: 1px solid rgba(0, 0, 0, .1)
        }

        .solid-bottom::after {
            border-bottom: 1px solid rgba(0, 0, 0, .1)
        }

        .solid-left::after {
            border-left: 1px solid rgba(0, 0, 0, .1)
        }

        .solids::after {
            border: 4px solid #eee
        }

        .solids-top::after {
            border-top: 4px solid #eee
        }

        .solids-right::after {
            border-right: 4px solid #eee
        }

        .solids-bottom::after {
            border-bottom: 4px solid #eee
        }

        .solids-left::after {
            border-left: 4px solid #eee
        }

        /* -- 虚线 -- */
        .dashed::after {
            border: 1px dashed #ddd
        }

        .dashed-top::after {
            border-top: 1px dashed #ddd
        }

        .dashed-right::after {
            border-right: 1px dashed #ddd
        }

        .dashed-bottom::after {
            border-bottom: 1px dashed #ddd
        }

        .dashed-left::after {
            border-left: 1px dashed #ddd
        }

        /* -- 阴影 -- */
        .shadow[class*="white"] {
            --ShadowSize: 0 1px 3px
        }

        .shadow-lg {
            --ShadowSize: 0px 20px 52px 0px
        }

        .shadow-warp {
            position: relative;
            box-shadow: 0 0 5px rgba(0, 0, 0, .1)
        }

        .shadow-warp:before,
        .shadow-warp:after {
            position: absolute;
            content: "";
            top: 10px;
            bottom: 15px;
            left: 10px;
            width: 50%;
            box-shadow: 0 15px 10px rgba(0, 0, 0, .2);
            -webkit-transform: rotate(-3deg);
            transform: rotate(-3deg);
            z-index: -1
        }

        .shadow-warp:after {
            right: 10px;
            left: auto;
            -webkit-transform: rotate(3deg);
            transform: rotate(3deg)
        }

        .shadow-blur {
            position: relative
        }

        .shadow-blur::before {
            content: "";
            display: block;
            background: inherit;
            -webkit-filter: blur(5px);
            filter: blur(5px);
            position: absolute;
            width: 100%;
            height: 100%;
            top: 5px;
            left: 5px;
            z-index: -1;
            opacity: .4;
            -webkit-transform-origin: 0 0;
            transform-origin: 0 0;
            border-radius: inherit;
            -webkit-transform: scale(1);
            transform: scale(1)
        }

        /* ==================
          按钮
 ==================== */
        .cu-btn {
            position: relative;
            border: 0px;
            display: -webkit-inline-box;
            display: -webkit-inline-flex;
            display: inline-flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            align-items: center;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            box-sizing: border-box;
            padding: 0 15px;
            font-size: 14px;
            height: 33px;
            line-height: 1;
            text-align: center;
            text-decoration: none;
            overflow: visible;
            margin-left: 0;
            -webkit-transform: translate(0px, 0px);
            transform: translate(0px, 0px);
            margin-right: 0
        }

        .cu-btn::after {
            display: none
        }

        .cu-btn:not([class*="bg-"]) {
            background-color: #f0f0f0
        }

        .cu-btn[class*="line"] {
            background-color: initial
        }

        .cu-btn[class*="line"]::after {
            content: " ";
            display: block;
            width: 200%;
            height: 200%;
            position: absolute;
            top: 0;
            left: 0;
            border: 1px solid currentColor;
            -webkit-transform: scale(.5);
            transform: scale(.5);
            -webkit-transform-origin: 0 0;
            transform-origin: 0 0;
            box-sizing: border-box;
            border-radius: 6px;
            z-index: 1;
            pointer-events: none
        }

        .cu-btn.round[class*="line"]::after {
            border-radius: 524px
        }

        .cu-btn[class*="lines"]::after {
            border: 3px solid currentColor
        }

        .cu-btn[class*="bg-"]::after {
            display: none
        }

        .cu-btn.sm {
            padding: 0 10px;
            font-size: 10px;
            height: 25px
        }

        .cu-btn.lg {
            padding: 0 20px;
            font-size: 16px;
            height: 41px
        }

        .cu-btn.cuIcon.sm {
            width: 25px;
            height: 25px
        }

        .cu-btn.cuIcon {
            width: 33px;
            height: 33px;
            border-radius: 262px;
            padding: 0
        }

        uni-button.cuIcon.lg {
            width: 41px;
            height: 41px
        }

        .cu-btn.shadow-blur::before {
            top: 2px;
            left: 2px;
            -webkit-filter: blur(3px);
            filter: blur(3px);
            opacity: .6
        }

        .cu-btn.button-hover {
            -webkit-transform: translate(1px, 1px);
            transform: translate(1px, 1px)
        }

        .block {
            display: block
        }

        .cu-btn.block {
            display: -webkit-box;
            display: -webkit-flex;
            display: flex
        }

        .cu-btn[disabled] {
            opacity: .6;
            color: #fff
        }

        /* ==================
          徽章
 ==================== */
        .cu-tag {
            font-size: 12px;
            vertical-align: middle;
            position: relative;
            display: -webkit-inline-box;
            display: -webkit-inline-flex;
            display: inline-flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            align-items: center;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            box-sizing: border-box;
            padding: 0px 8px;
            height: 25px;
            font-family: Helvetica Neue, Helvetica, sans-serif;
            white-space: nowrap
        }

        .cu-tag:not([class*="bg"]):not([class*="line"]) {
            background-color: #f1f1f1
        }

        .cu-tag[class*="line-"]::after {
            content: " ";
            width: 200%;
            height: 200%;
            position: absolute;
            top: 0;
            left: 0;
            border: 1px solid currentColor;
            -webkit-transform: scale(.5);
            transform: scale(.5);
            -webkit-transform-origin: 0 0;
            transform-origin: 0 0;
            box-sizing: border-box;
            border-radius: inherit;
            z-index: 1;
            pointer-events: none
        }

        .cu-tag.radius[class*="line"]::after {
            border-radius: 6px
        }

        .cu-tag.round[class*="line"]::after {
            border-radius: 524px
        }

        .cu-tag[class*="line-"]::after {
            border-radius: 0
        }

        .cu-tag+.cu-tag {
            margin-left: 5px
        }

        .cu-tag.sm {
            font-size: 10px;
            padding: 0px 6px;
            height: 16px
        }

        .cu-capsule {
            display: -webkit-inline-box;
            display: -webkit-inline-flex;
            display: inline-flex;
            vertical-align: middle
        }

        .cu-capsule+.cu-capsule {
            margin-left: 5px
        }

        .cu-capsule .cu-tag {
            margin: 0
        }

        .cu-capsule .cu-tag[class*="line-"]:last-child::after {
            border-left: 0px solid transparent
        }

        .cu-capsule .cu-tag[class*="line-"]:first-child::after {
            border-right: 0px solid transparent
        }

        .cu-capsule.radius .cu-tag:first-child {
            border-top-left-radius: 3px;
            border-bottom-left-radius: 3px
        }

        .cu-capsule.radius .cu-tag:last-child::after,
        .cu-capsule.radius .cu-tag[class*="line-"] {
            border-top-right-radius: 6px;
            border-bottom-right-radius: 6px
        }

        .cu-capsule.round .cu-tag:first-child {
            border-top-left-radius: 104px;
            border-bottom-left-radius: 104px;
            text-indent: 2px
        }

        .cu-capsule.round .cu-tag:last-child::after,
        .cu-capsule.round .cu-tag:last-child {
            border-top-right-radius: 104px;
            border-bottom-right-radius: 104px;
            text-indent: -2px
        }

        .cu-tag.badge {
            border-radius: 104px;
            position: absolute;
            top: -5px;
            right: -5px;
            font-size: 10px;
            padding: 0px 5px;
            height: 14px;
            color: #fff
        }

        .cu-tag.badge:not([class*="bg-"]) {
            background-color: #dd514c
        }

        .cu-tag:empty:not([class*="cuIcon-"]) {
            padding: 0px;
            width: 8px;
            height: 8px;
            top: -2px;
            right: -2px
        }

        .cu-tag[class*="cuIcon-"] {
            width: 16px;
            height: 16px;
            top: -2px;
            right: -2px
        }

        /* ==================
          头像
 ==================== */
        .cu-avatar {
            font-variant: small-caps;
            margin: 0;
            padding: 0;
            display: -webkit-inline-box;
            display: -webkit-inline-flex;
            display: inline-flex;
            text-align: center;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-box-align: center;
            -webkit-align-items: center;
            align-items: center;
            background-color: #ccc;
            color: #fff;
            white-space: nowrap;
            position: relative;
            width: 33px;
            height: 33px;
            background-size: cover;
            background-position: 50%;
            vertical-align: middle;
            font-size: 1.5em
        }

        .cu-avatar.sm {
            width: 25px;
            height: 25px;
            font-size: 1em
        }

        .cu-avatar.lg {
            width: 50px;
            height: 50px;
            font-size: 2em
        }

        .cu-avatar.xl {
            width: 67px;
            height: 67px;
            font-size: 2.5em
        }

        .cu-avatar .avatar-text {
            font-size: .4em
        }

        .cu-avatar-group {
            direction: rtl;
            unicode-bidi: bidi-override;
            padding: 0 5px 0 20px;
            display: inline-block
        }

        .cu-avatar-group .cu-avatar {
            margin-left: -15px;
            border: 2px solid #f1f1f1;
            vertical-align: middle
        }

        .cu-avatar-group .cu-avatar.sm {
            margin-left: -10px;
            border: 1px solid #f1f1f1
        }

        /* ==================
         进度条
 ==================== */
        .cu-progress {
            overflow: hidden;
            height: 14px;
            background-color: #ebeef5;
            display: -webkit-inline-box;
            display: -webkit-inline-flex;
            display: inline-flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            align-items: center;
            width: 100%
        }

        .cu-progress+uni-view,
        .cu-progress+uni-text {
            line-height: 1
        }

        .cu-progress.xs {
            height: 5px
        }

        .cu-progress.sm {
            height: 10px
        }

        .cu-progress uni-view {
            width: 0;
            height: 100%;
            -webkit-box-align: center;
            -webkit-align-items: center;
            align-items: center;
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            justify-items: flex-end;
            -webkit-justify-content: space-around;
            justify-content: space-around;
            font-size: 10px;
            color: #fff;
            -webkit-transition: width .6s ease;
            transition: width .6s ease
        }

        .cu-progress uni-text {
            -webkit-box-align: center;
            -webkit-align-items: center;
            align-items: center;
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            font-size: 10px;
            color: #333;
            text-indent: 5px
        }

        .cu-progress.text-progress {
            padding-right: 31px
        }

        .cu-progress.striped uni-view {
            background-image: -webkit-linear-gradient(45deg, hsla(0, 0%, 100%, .15) 25%, transparent 0, transparent 50%, hsla(0, 0%, 100%, .15) 0, hsla(0, 0%, 100%, .15) 75%, transparent 0, transparent);
            background-image: linear-gradient(45deg, hsla(0, 0%, 100%, .15) 25%, transparent 0, transparent 50%, hsla(0, 0%, 100%, .15) 0, hsla(0, 0%, 100%, .15) 75%, transparent 0, transparent);
            background-size: 37px 37px
        }

        .cu-progress.active uni-view {
            -webkit-animation: progress-stripes 2s linear infinite;
            animation: progress-stripes 2s linear infinite
        }

        @-webkit-keyframes progress-stripes {
            from {
                background-position: 37px 0
            }

            to {
                background-position: 0 0
            }
        }

        @keyframes progress-stripes {
            from {
                background-position: 37px 0
            }

            to {
                background-position: 0 0
            }
        }

        /* ==================
          加载
 ==================== */
        .cu-load {
            display: block;
            line-height: 3em;
            text-align: center
        }

        .cu-load::before {
            font-family: cuIcon;
            display: inline-block;
            margin-right: 3px
        }

        .cu-load.loading::before {
            content: "\e67a";
            -webkit-animation: cuIcon-spin 2s infinite linear;
            animation: cuIcon-spin 2s infinite linear
        }

        .cu-load.loading::after {
            content: "加载中..."
        }

        .cu-load.over::before {
            content: "\e64a"
        }

        .cu-load.over::after {
            content: "没有更多了"
        }

        .cu-load.erro::before {
            content: "\e658"
        }

        .cu-load.erro::after {
            content: "加载失败"
        }

        .cu-load.load-cuIcon::before {
            font-size: 16px
        }

        .cu-load.load-cuIcon::after {
            display: none
        }

        .cu-load.load-cuIcon.over {
            display: none
        }

        .cu-load.load-modal {
            position: fixed;
            top: 0;
            right: 0;
            bottom: 73px;
            left: 0;
            margin: auto;
            width: 136px;
            height: 136px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 0px 1048px rgba(0, 0, 0, .5);
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            align-items: center;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            flex-direction: column;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            font-size: 14px;
            z-index: 9999;
            line-height: 2.4em
        }

        .cu-load.load-modal [class*="cuIcon-"] {
            font-size: 31px
        }

        .cu-load.load-modal uni-image {
            width: 36px;
            height: 36px
        }

        .cu-load.load-modal::after {
            content: "";
            position: absolute;
            background-color: #fff;
            border-radius: 50%;
            width: 104px;
            height: 104px;
            font-size: 10px;
            border-top: 3px solid rgba(0, 0, 0, .05);
            border-right: 3px solid rgba(0, 0, 0, .05);
            border-bottom: 3px solid rgba(0, 0, 0, .05);
            border-left: 3px solid #f37b1d;
            -webkit-animation: cuIcon-spin 1s infinite linear;
            animation: cuIcon-spin 1s infinite linear;
            z-index: -1
        }

        .load-progress {
            pointer-events: none;
            top: 0;
            position: fixed;
            width: 100%;
            left: 0;
            z-index: 2000
        }

        .load-progress.hide {
            display: none
        }

        .load-progress .load-progress-bar {
            position: relative;
            width: 100%;
            height: 2px;
            overflow: hidden;
            -webkit-transition: all .2s ease 0s;
            transition: all .2s ease 0s
        }

        .load-progress .load-progress-spinner {
            position: absolute;
            top: 5px;
            right: 5px;
            z-index: 2000;
            display: block
        }

        .load-progress .load-progress-spinner::after {
            content: "";
            display: block;
            width: 12px;
            height: 12px;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            border: solid 2px transparent;
            border-top-color: inherit;
            border-left-color: inherit;
            border-radius: 50%;
            -webkit-animation: load-progress-spinner .4s linear infinite;
            animation: load-progress-spinner .4s linear infinite
        }

        /* ==================
          列表
 ==================== */
        .grayscale {
            -webkit-filter: grayscale(1);
            filter: grayscale(1)
        }

        .cu-list+.cu-list {
            margin-top: 15px
        }

        .cu-list>.cu-item {
            -webkit-transition: all .6s ease-in-out 0s;
            transition: all .6s ease-in-out 0s;
            -webkit-transform: translateX(0px);
            transform: translateX(0px)
        }

        .cu-list>.cu-item.move-cur {
            -webkit-transform: translateX(-136px);
            transform: translateX(-136px)
        }

        .cu-list>.cu-item .move {
            position: absolute;
            right: 0;
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            width: 136px;
            height: 100%;
            -webkit-transform: translateX(100%);
            transform: translateX(100%)
        }

        .cu-list>.cu-item .move uni-view {
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            -webkit-box-flex: 1;
            -webkit-flex: 1;
            flex: 1;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-box-align: center;
            -webkit-align-items: center;
            align-items: center
        }

        .cu-list.menu-avatar {
            overflow: hidden
        }

        .cu-list.menu-avatar>.cu-item {
            position: relative;
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            padding-right: 5px;
            height: 73px;
            background-color: #fff;
            -webkit-box-pack: end;
            -webkit-justify-content: flex-end;
            justify-content: flex-end;
            -webkit-box-align: center;
            -webkit-align-items: center;
            align-items: center
        }

        .cu-list.menu-avatar>.cu-item>.cu-avatar {
            position: absolute;
            left: 15px
        }

        .cu-list.menu-avatar>.cu-item .flex .text-cut {
            max-width: 267px
        }

        .cu-list.menu-avatar>.cu-item .content {
            position: absolute;
            left: 76px;
            width: calc(100% - 50px - 31px - 62px - 10px);
            line-height: 1.6em
        }

        .cu-list.menu-avatar>.cu-item .content.flex-sub {
            width: calc(100% - 50px - 31px - 10px)
        }

        .cu-list.menu-avatar>.cu-item .content>uni-view:first-child {
            font-size: 15px;
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            align-items: center
        }

        .cu-list.menu-avatar>.cu-item .content .cu-tag.sm {
            display: inline-block;
            margin-left: 5px;
            height: 14px;
            font-size: 8px;
            line-height: 16px
        }

        .cu-list.menu-avatar>.cu-item .action {
            width: 52px;
            text-align: center
        }

        .cu-list.menu-avatar>.cu-item .action uni-view+uni-view {
            margin-top: 5px
        }

        .cu-list.menu-avatar.comment>.cu-item .content {
            position: relative;
            left: 0;
            width: auto;
            -webkit-box-flex: 1;
            -webkit-flex: 1;
            flex: 1
        }

        .cu-list.menu-avatar.comment>.cu-item {
            padding: 15px 15px 15px 62px;
            height: auto
        }

        .cu-list.menu-avatar.comment .cu-avatar {
            -webkit-align-self: flex-start;
            align-self: flex-start
        }

        .cu-list.menu>.cu-item {
            position: relative;
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            padding: 0 15px;
            min-height: 52px;
            background-color: #fff;
            -webkit-box-pack: justify;
            -webkit-justify-content: space-between;
            justify-content: space-between;
            -webkit-box-align: center;
            -webkit-align-items: center;
            align-items: center
        }

        .cu-list.menu>.cu-item:last-child:after {
            border: none
        }

        .cu-list.menu-avatar>.cu-item:after,
        .cu-list.menu>.cu-item:after {
            position: absolute;
            top: 0;
            left: 0;
            box-sizing: border-box;
            width: 200%;
            height: 200%;
            border-bottom: 1px solid #ddd;
            border-radius: inherit;
            content: " ";
            -webkit-transform: scale(.5);
            transform: scale(.5);
            -webkit-transform-origin: 0 0;
            transform-origin: 0 0;
            pointer-events: none
        }

        .cu-list.menu>.cu-item.grayscale {
            background-color: #f5f5f5
        }

        .cu-list.menu>.cu-item.cur {
            background-color: #fcf7e9
        }

        .cu-list.menu>.cu-item.arrow {
            padding-right: 47px
        }

        .cu-list.menu>.cu-item.arrow:before {
            position: absolute;
            top: 0;
            right: 15px;
            bottom: 0;
            display: block;
            margin: auto;
            width: 15px;
            height: 15px;
            color: #8799a3;
            content: "\e6a3";
            text-align: center;
            font-size: 17px;
            font-family: cuIcon;
            line-height: 15px
        }

        .cu-list.menu>.cu-item uni-button.content {
            padding: 0;
            background-color: initial;
            -webkit-box-pack: start;
            -webkit-justify-content: flex-start;
            justify-content: flex-start
        }

        .cu-list.menu>.cu-item uni-button.content:after {
            display: none
        }

        .cu-list.menu>.cu-item .cu-avatar-group .cu-avatar {
            border-color: #fff
        }

        .cu-list.menu>.cu-item .content>uni-view:first-child {
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            align-items: center
        }

        .cu-list.menu>.cu-item .content>uni-text[class*=cuIcon] {
            display: inline-block;
            margin-right: 5px;
            width: 1.6em;
            text-align: center
        }

        .cu-list.menu>.cu-item .content>uni-image {
            display: inline-block;
            margin-right: 5px;
            width: 1.6em;
            height: 1.6em;
            vertical-align: middle
        }

        .cu-list.menu>.cu-item .content {
            font-size: 15px;
            line-height: 1.6em;
            -webkit-box-flex: 1;
            -webkit-flex: 1;
            flex: 1
        }

        .cu-list.menu>.cu-item .content .cu-tag.sm {
            display: inline-block;
            margin-left: 5px;
            height: 14px;
            font-size: 8px;
            line-height: 16px
        }

        .cu-list.menu>.cu-item .action .cu-tag:empty {
            right: 5px
        }

        .cu-list.menu {
            display: block;
            overflow: hidden
        }

        .cu-list.menu.sm-border>.cu-item:after {
            left: 15px;
            width: calc(200% - 62px)
        }

        .cu-list.grid>.cu-item {
            position: relative;
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            padding: 10px 0 15px;
            -webkit-transition-duration: 0s;
            transition-duration: 0s;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            flex-direction: column
        }

        .cu-list.grid>.cu-item:after {
            position: absolute;
            top: 0;
            left: 0;
            box-sizing: border-box;
            width: 200%;
            height: 200%;
            border-right: 1px solid rgba(0, 0, 0, .1);
            border-bottom: 1px solid rgba(0, 0, 0, .1);
            border-radius: inherit;
            content: " ";
            -webkit-transform: scale(.5);
            transform: scale(.5);
            -webkit-transform-origin: 0 0;
            transform-origin: 0 0;
            pointer-events: none
        }

        .cu-list.grid>.cu-item uni-text {
            display: block;
            margin-top: 5px;
            color: #888;
            font-size: 13px;
            line-height: 20px
        }

        .cu-list.grid>.cu-item [class*=cuIcon] {
            position: relative;
            display: block;
            margin-top: 10px;
            width: 100%;
            font-size: 25px
        }

        .cu-list.grid>.cu-item .cu-tag {
            right: auto;
            left: 50%;
            margin-left: 10px
        }

        .cu-list.grid {
            background-color: #fff;
            text-align: center
        }

        .cu-list.grid.no-border>.cu-item {
            padding-top: 5px;
            padding-bottom: 10px
        }

        .cu-list.grid.no-border>.cu-item:after {
            border: none
        }

        .cu-list.grid.no-border {
            padding: 10px 5px
        }

        .cu-list.grid.col-3>.cu-item:nth-child(3n):after,
        .cu-list.grid.col-4>.cu-item:nth-child(4n):after,
        .cu-list.grid.col-5>.cu-item:nth-child(5n):after {
            border-right-width: 0
        }

        .cu-list.card-menu {
            overflow: hidden;
            margin-right: 15px;
            margin-left: 15px;
            border-radius: 10px
        }

        /* ==================
          操作条
 ==================== */
        .cu-bar {
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            position: relative;
            -webkit-box-align: center;
            -webkit-align-items: center;
            align-items: center;
            min-height: 52px;
            -webkit-box-pack: justify;
            -webkit-justify-content: space-between;
            justify-content: space-between
        }

        .cu-bar .action {
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            align-items: center;
            height: 100%;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            max-width: 100%
        }

        .cu-bar .action.border-title {
            position: relative;
            top: -5px
        }

        .cu-bar .action.border-title uni-text[class*="bg-"]:last-child {
            position: absolute;
            bottom: -.5rem;
            min-width: 2rem;
            height: 3px;
            left: 0
        }

        .cu-bar .action.sub-title {
            position: relative;
            top: -.2rem
        }

        .cu-bar .action.sub-title uni-text {
            position: relative;
            z-index: 1
        }

        .cu-bar .action.sub-title uni-text[class*="bg-"]:last-child {
            position: absolute;
            display: inline-block;
            bottom: -.2rem;
            border-radius: 3px;
            width: 100%;
            height: .6rem;
            left: .6rem;
            opacity: .3;
            z-index: 0
        }

        .cu-bar .action.sub-title uni-text[class*="text-"]:last-child {
            position: absolute;
            display: inline-block;
            bottom: -.7rem;
            left: .5rem;
            opacity: .2;
            z-index: 0;
            text-align: right;
            font-weight: 900;
            font-size: 18px
        }

        .cu-bar.justify-center .action.border-title uni-text:last-child,
        .cu-bar.justify-center .action.sub-title uni-text:last-child {
            left: 0;
            right: 0;
            margin: auto;
            text-align: center
        }

        .cu-bar .action:first-child {
            margin-left: 15px;
            font-size: 15px
        }

        .cu-bar .action uni-text.text-cut {
            text-align: left;
            width: 100%
        }

        .cu-bar .cu-avatar:first-child {
            margin-left: 10px
        }

        .cu-bar .action:first-child>uni-text[class*="cuIcon-"] {
            margin-left: -.3em;
            margin-right: .3em
        }

        .cu-bar .action:last-child {
            margin-right: 15px
        }

        .cu-bar .action>uni-text[class*="cuIcon-"],
        .cu-bar .action>uni-view[class*="cuIcon-"] {
            font-size: 18px
        }

        .cu-bar .action>uni-text[class*="cuIcon-"]+uni-text[class*="cuIcon-"] {
            margin-left: .5em
        }

        .cu-bar .content {
            position: absolute;
            text-align: center;
            width: calc(100% - 178px);
            left: 0;
            right: 0;
            bottom: 0;
            top: 50px;
            margin: auto;
            height: 31px;
            font-size: 16px;
            line-height: 31px;
            cursor: none;
            pointer-events: none;
            text-overflow: ellipsis;
            white-space: nowrap;
            overflow: hidden
        }

        .cu-bar.ios .content {
            bottom: 7px;
            height: 30px;
            font-size: 16px;
            line-height: 30px
        }

        .cu-bar.btn-group {
            -webkit-justify-content: space-around;
            justify-content: space-around
        }

        .cu-bar.btn-group uni-button {
            padding: 10px 16px
        }

        .cu-bar.btn-group uni-button {
            -webkit-box-flex: 1;
            -webkit-flex: 1;
            flex: 1;
            margin: 0 10px;
            max-width: 50%
        }

        .cu-bar .search-form {
            background-color: #f5f5f5;
            line-height: 33px;
            height: 33px;
            font-size: 12px;
            color: #333;
            -webkit-box-flex: 1;
            -webkit-flex: 1;
            flex: 1;
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            align-items: center;
            margin: 0 15px
        }

        .cu-bar .search-form+.action {
            margin-right: 15px
        }

        .cu-bar .search-form uni-input {
            -webkit-box-flex: 1;
            -webkit-flex: 1;
            flex: 1;
            padding-right: 15px;
            height: 33px;
            line-height: 33px;
            font-size: 13px;
            background-color: initial
        }

        .cu-bar .search-form [class*="cuIcon-"] {
            margin: 0 .5em 0 .8em
        }

        .cu-bar .search-form [class*="cuIcon-"]::before {
            top: 0px
        }

        .cu-bar.fixed,
        .nav.fixed {
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1024;
            box-shadow: 0 1px 3px rgba(0, 0, 0, .1)
        }

        .cu-bar.foot {
            position: fixed;
            width: 100%;
            bottom: 0;
            z-index: 1024;
            box-shadow: 0 -1px 3px rgba(0, 0, 0, .1)
        }

        .cu-bar.tabbar {
            padding: 0;
            height: calc(52px + env(safe-area-inset-bottom) / 2);
            padding-bottom: calc(env(safe-area-inset-bottom) / 2)
        }

        .cu-tabbar-height {
            min-height: 52px;
            height: calc(52px + env(safe-area-inset-bottom) / 2)
        }

        .cu-bar.tabbar.shadow {
            box-shadow: 0 -1px 3px rgba(0, 0, 0, .1)
        }

        .cu-bar.tabbar .action {
            font-size: 11px;
            position: relative;
            -webkit-box-flex: 1;
            -webkit-flex: 1;
            flex: 1;
            text-align: center;
            padding: 0;
            display: block;
            height: auto;
            line-height: 1;
            margin: 0;
            background-color: inherit;
            overflow: initial
        }

        .cu-bar.tabbar.shop .action {
            width: 73px;
            -webkit-box-flex: initial;
            -webkit-flex: initial;
            flex: initial
        }

        .cu-bar.tabbar .action.add-action {
            position: relative;
            z-index: 2;
            padding-top: 26px
        }

        .cu-bar.tabbar .action.add-action [class*="cuIcon-"] {
            position: absolute;
            width: 36px;
            z-index: 2;
            height: 36px;
            border-radius: 50%;
            line-height: 36px;
            font-size: 26px;
            top: -18px;
            left: 0;
            right: 0;
            margin: auto;
            padding: 0
        }

        .cu-bar.tabbar .action.add-action::after {
            content: "";
            position: absolute;
            width: 52px;
            height: 52px;
            top: -26px;
            left: 0;
            right: 0;
            margin: auto;
            box-shadow: 0 -1px 4px rgba(0, 0, 0, .08);
            border-radius: 26px;
            background-color: inherit;
            z-index: 0
        }

        .cu-bar.tabbar .action.add-action::before {
            content: "";
            position: absolute;
            width: 52px;
            height: 15px;
            bottom: 15px;
            left: 0;
            right: 0;
            margin: auto;
            background-color: inherit;
            z-index: 1
        }

        .cu-bar.tabbar .btn-group {
            -webkit-box-flex: 1;
            -webkit-flex: 1;
            flex: 1;
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            -webkit-justify-content: space-around;
            justify-content: space-around;
            -webkit-box-align: center;
            -webkit-align-items: center;
            align-items: center;
            padding: 0 5px
        }

        .cu-bar.tabbar uni-button.action::after {
            border: 0
        }

        .cu-bar.tabbar .action [class*="cuIcon-"] {
            width: 52px;
            position: relative;
            display: block;
            height: auto;
            margin: 0 auto 5px;
            text-align: center;
            font-size: 20px
        }

        .cu-bar.tabbar .action .cuIcon-cu-image {
            margin: 0 auto
        }

        .cu-bar.tabbar .action .cuIcon-cu-image uni-image {
            width: 26px;
            height: 26px;
            display: inline-block
        }

        .cu-bar.tabbar .submit {
            -webkit-box-align: center;
            -webkit-align-items: center;
            align-items: center;
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            text-align: center;
            position: relative;
            -webkit-box-flex: 2;
            -webkit-flex: 2;
            flex: 2;
            -webkit-align-self: stretch;
            align-self: stretch
        }

        .cu-bar.tabbar .submit:last-child {
            -webkit-box-flex: 2.6;
            -webkit-flex: 2.6;
            flex: 2.6
        }

        .cu-bar.tabbar .submit+.submit {
            -webkit-box-flex: 2;
            -webkit-flex: 2;
            flex: 2
        }

        .cu-bar.tabbar.border .action::before {
            content: " ";
            width: 200%;
            height: 200%;
            position: absolute;
            top: 0;
            left: 0;
            -webkit-transform: scale(.5);
            transform: scale(.5);
            -webkit-transform-origin: 0 0;
            transform-origin: 0 0;
            border-right: 1px solid rgba(0, 0, 0, .1);
            z-index: 3
        }

        .cu-bar.tabbar.border .action:last-child:before {
            display: none
        }

        .cu-bar.input {
            padding-right: 10px;
            background-color: #fff
        }

        .cu-bar.input uni-input {
            overflow: initial;
            line-height: 33px;
            height: 33px;
            min-height: 33px;
            -webkit-box-flex: 1;
            -webkit-flex: 1;
            flex: 1;
            font-size: 15px;
            margin: 0 10px
        }

        .cu-bar.input .action {
            margin-left: 10px
        }

        .cu-bar.input .action [class*="cuIcon-"] {
            font-size: 25px
        }

        .cu-bar.input uni-input+.action {
            margin-right: 10px;
            margin-left: 0px
        }

        .cu-bar.input .action:first-child [class*="cuIcon-"] {
            margin-left: 0px
        }

        .cu-custom {
            display: block;
            position: relative
        }

        .cu-custom .cu-bar .content {
            width: calc(100% - 230px)
        }

        .cu-custom .cu-bar .content uni-image {
            height: 31px;
            width: 125px
        }

        .cu-custom .cu-bar {
            min-height: 0;



            box-shadow: 0px 0px 0px;
            z-index: 9999
        }

        .cu-custom .cu-bar .border-custom {
            position: relative;
            background: rgba(0, 0, 0, .15);
            border-radius: 524px;
            height: 30px
        }

        .cu-custom .cu-bar .border-custom::after {
            content: " ";
            width: 200%;
            height: 200%;
            position: absolute;
            top: 0;
            left: 0;
            border-radius: inherit;
            -webkit-transform: scale(.5);
            transform: scale(.5);
            -webkit-transform-origin: 0 0;
            transform-origin: 0 0;
            pointer-events: none;
            box-sizing: border-box;
            border: 1px solid #fff;
            opacity: .5
        }

        .cu-custom .cu-bar .border-custom::before {
            content: " ";
            width: 1px;
            height: 110%;
            position: absolute;
            top: 22.5%;
            left: 0;
            right: 0;
            margin: auto;
            -webkit-transform: scale(.5);
            transform: scale(.5);
            -webkit-transform-origin: 0 0;
            transform-origin: 0 0;
            pointer-events: none;
            box-sizing: border-box;
            opacity: .6;
            background-color: #fff
        }

        .cu-custom .cu-bar .border-custom uni-text {
            display: block;
            -webkit-box-flex: 1;
            -webkit-flex: 1;
            flex: 1;
            margin: auto !important;
            text-align: center;
            font-size: 17px
        }

        /* ==================
         导航栏
 ==================== */
        .nav {
            white-space: nowrap
        }

        ::-webkit-scrollbar {
            display: none
        }

        .nav .cu-item {
            height: 47px;
            display: inline-block;
            line-height: 47px;
            margin: 0 5px;
            padding: 0 10px
        }

        .nav .cu-item.cur {
            border-bottom: 2px solid
        }

        /* ==================
         时间轴
 ==================== */
        .cu-timeline {
            display: block;
            background-color: #fff
        }

        .cu-timeline .cu-time {
            width: 62px;
            text-align: center;
            padding: 10px 0;
            font-size: 13px;
            color: #888;
            display: block
        }

        .cu-timeline>.cu-item {
            padding: 15px 15px 15px 62px;
            position: relative;
            display: block;
            z-index: 0
        }

        .cu-timeline>.cu-item:not([class*="text-"]) {
            color: #ccc
        }

        .cu-timeline>.cu-item::after {
            content: "";
            display: block;
            position: absolute;
            width: 1px;
            background-color: #ddd;
            left: 31px;
            height: 100%;
            top: 0;
            z-index: 8
        }

        .cu-timeline>.cu-item::before {
            font-family: cuIcon;
            display: block;
            position: absolute;
            top: 18px;
            z-index: 9;
            background-color: #fff;
            width: 26px;
            height: 26px;
            text-align: center;
            border: none;
            line-height: 26px;
            left: 18px
        }

        .cu-timeline>.cu-item:not([class*="cuIcon-"])::before {
            content: "\e763"
        }

        .cu-timeline>.cu-item[class*="cuIcon-"]::before {
            background-color: #fff;
            width: 26px;
            height: 26px;
            text-align: center;
            border: none;
            line-height: 26px;
            left: 18px
        }

        .cu-timeline>.cu-item>.content {
            padding: 15px;
            border-radius: 3px;
            display: block;
            line-height: 1.6
        }

        .cu-timeline>.cu-item>.content:not([class*="bg-"]) {
            background-color: #f1f1f1;
            color: #333
        }

        .cu-timeline>.cu-item>.content+.content {
            margin-top: 10px
        }

        /* ==================
         聊天
 ==================== */
        .cu-chat {
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            flex-direction: column
        }

        .cu-chat .cu-item {
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            padding: 15px 15px 36px;
            position: relative
        }

        .cu-chat .cu-item>.cu-avatar {
            width: 41px;
            height: 41px
        }

        .cu-chat .cu-item>.main {
            max-width: calc(100% - 136px);
            margin: 0 20px;
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            align-items: center
        }

        .cu-chat .cu-item>uni-image {
            height: 167px
        }

        .cu-chat .cu-item>.main .content {
            padding: 10px;
            border-radius: 3px;
            display: -webkit-inline-box;
            display: -webkit-inline-flex;
            display: inline-flex;
            max-width: 100%;
            -webkit-box-align: center;
            -webkit-align-items: center;
            align-items: center;
            font-size: 15px;
            position: relative;
            min-height: 41px;
            line-height: 20px;
            text-align: left
        }

        .cu-chat .cu-item>.main .content:not([class*="bg-"]) {
            background-color: #fff;
            color: #333
        }

        .cu-chat .cu-item .date {
            position: absolute;
            font-size: 12px;
            color: #8799a3;
            width: calc(100% - 167px);
            bottom: 10px;
            left: 83px
        }

        .cu-chat .cu-item .action {
            padding: 0 15px;
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            align-items: center
        }

        .cu-chat .cu-item>.main .content::after {
            content: "";
            top: 14px;
            -webkit-transform: rotate(45deg);
            transform: rotate(45deg);
            position: absolute;
            z-index: 100;
            display: inline-block;
            overflow: hidden;
            width: 12px;
            height: 12px;
            left: -6px;
            right: auto;
            background-color: inherit
        }

        .cu-chat .cu-item.self>.main .content::after {
            left: auto;
            right: -6px
        }

        .cu-chat .cu-item>.main .content::before {
            content: "";
            top: 15px;
            -webkit-transform: rotate(45deg);
            transform: rotate(45deg);
            position: absolute;
            z-index: -1;
            display: inline-block;
            overflow: hidden;
            width: 12px;
            height: 12px;
            left: -6px;
            right: auto;
            background-color: inherit;
            -webkit-filter: blur(2px);
            filter: blur(2px);
            opacity: .3
        }

        .cu-chat .cu-item>.main .content:not([class*="bg-"])::before {
            background-color: #333;
            opacity: .1
        }

        .cu-chat .cu-item.self>.main .content::before {
            left: auto;
            right: -6px
        }

        .cu-chat .cu-item.self {
            -webkit-box-pack: end;
            -webkit-justify-content: flex-end;
            justify-content: flex-end;
            text-align: right
        }

        .cu-chat .cu-info {
            display: inline-block;
            margin: 10px auto;
            font-size: 12px;
            padding: 4px 6px;
            background-color: rgba(0, 0, 0, .2);
            border-radius: 3px;
            color: #fff;
            max-width: 209px;
            line-height: 1.4
        }

        /* ==================
         卡片
 ==================== */
        .cu-card {
            display: block;
            overflow: hidden
        }

        .cu-card>.cu-item {
            display: block;
            background-color: #fff;
            overflow: hidden;
            border-radius: 5px;
            margin: 15px
        }

        .cu-card>.cu-item.shadow-blur {
            overflow: initial
        }

        .cu-card.no-card>.cu-item {
            margin: 0px;
            border-radius: 0px
        }

        .cu-card .grid.grid-square {
            margin-bottom: -10px
        }

        .cu-card.case .image {
            position: relative
        }

        .cu-card.case .image uni-image {
            width: 100%
        }

        .cu-card.case .image .cu-tag {
            position: absolute;
            right: 0;
            top: 0
        }

        .cu-card.case .image .cu-bar {
            position: absolute;
            bottom: 0;
            width: 100%;
            background-color: initial;
            padding: 0px 15px
        }

        .cu-card.case.no-card .image {
            margin: 15px 15px 0;
            overflow: hidden;
            border-radius: 5px
        }

        .cu-card.dynamic {
            display: block
        }

        .cu-card.dynamic>.cu-item {
            display: block;
            background-color: #fff;
            overflow: hidden
        }

        .cu-card.dynamic>.cu-item>.text-content {
            padding: 0 15px 0;
            max-height: 6.4em;
            overflow: hidden;
            font-size: 15px;
            margin-bottom: 10px
        }

        .cu-card.dynamic>.cu-item .square-img {
            width: 100%;
            height: 104px;
            border-radius: 3px
        }

        .cu-card.dynamic>.cu-item .only-img {
            width: 100%;
            height: 167px;
            border-radius: 3px
        }

        /* card.dynamic>.cu-item .comment {
  padding: 20upx;
  background-color: #f1f1f1;
  margin: 0 30upx 30upx;
  border-radius: 6upx;
} */
        .cu-card.article {
            display: block
        }

        .cu-card.article>.cu-item {
            padding-bottom: 15px
        }

        .cu-card.article>.cu-item .title {
            font-size: 15px;
            font-weight: 900;
            color: #333;
            line-height: 52px;
            padding: 0 15px
        }

        .cu-card.article>.cu-item .content {
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            padding: 0 15px
        }

        .cu-card.article>.cu-item .content>uni-image {
            width: 125px;
            height: 6.4em;
            margin-right: 10px;
            border-radius: 3px
        }

        .cu-card.article>.cu-item .content .desc {
            -webkit-box-flex: 1;
            -webkit-flex: 1;
            flex: 1;
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            flex-direction: column;
            -webkit-box-pack: justify;
            -webkit-justify-content: space-between;
            justify-content: space-between
        }

        .cu-card.article>.cu-item .content .text-content {
            font-size: 14px;
            color: #888;
            height: 4.8em;
            overflow: hidden
        }

        /* ==================
         表单
 ==================== */
        .cu-form-group {
            background-color: #fff;
            padding: 1px 15px;
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            align-items: center;
            min-height: 52px;
            -webkit-box-pack: justify;
            -webkit-justify-content: space-between;
            justify-content: space-between
        }

        .cu-form-group+.cu-form-group {
            border-top: 1px solid #eee
        }

        .cu-form-group .title {
            text-align: justify;
            padding-right: 15px;
            font-size: 15px;
            position: relative;
            height: 31px;
            line-height: 31px
        }

        .cu-form-group uni-input {
            -webkit-box-flex: 1;
            -webkit-flex: 1;
            flex: 1;
            font-size: 15px;
            color: #555;
            padding-right: 10px
        }

        .cu-form-group>uni-text[class*="cuIcon-"] {
            font-size: 18px;
            padding: 0;
            box-sizing: border-box
        }

        .cu-form-group uni-textarea {
            margin: 16px 0 15px;
            height: 4.6em;
            width: 100%;
            line-height: 1.2em;
            -webkit-box-flex: 1;
            -webkit-flex: 1;
            flex: 1;
            font-size: 14px;
            padding: 0
        }

        .cu-form-group.align-start .title {
            height: 1em;
            margin-top: 16px;
            line-height: 1em
        }

        .cu-form-group uni-picker {
            -webkit-box-flex: 1;
            -webkit-flex: 1;
            flex: 1;
            padding-right: 20px;
            overflow: hidden;
            position: relative
        }

        .cu-form-group uni-picker .picker {
            line-height: 52px;
            font-size: 14px;
            text-overflow: ellipsis;
            white-space: nowrap;
            overflow: hidden;
            width: 100%;
            text-align: right
        }

        .cu-form-group uni-picker::after {
            font-family: cuIcon;
            display: block;
            content: "\e6a3";
            position: absolute;
            font-size: 17px;
            color: #8799a3;
            line-height: 52px;
            width: 31px;
            text-align: center;
            top: 0;
            bottom: 0;
            right: -10px;
            margin: auto
        }

        .cu-form-group uni-textarea[disabled],
        .cu-form-group uni-textarea[disabled] .placeholder {
            color: transparent
        }

        /* ==================
         模态窗口
 ==================== */
        .cu-modal {
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 1110;
            opacity: 0;
            outline: 0;
            text-align: center;
            -ms-transform: scale(1.185);
            -webkit-transform: scale(1.185);
            transform: scale(1.185);
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            -webkit-perspective: 1048px;
            perspective: 1048px;
            background: rgba(0, 0, 0, .6);
            -webkit-transition: all .3s ease-in-out 0s;
            transition: all .3s ease-in-out 0s;
            pointer-events: none
        }

        .cu-modal::before {
            content: "\200B";
            display: inline-block;
            height: 100%;
            vertical-align: middle
        }

        .cu-modal.show {
            opacity: 1;
            -webkit-transition-duration: .3s;
            transition-duration: .3s;
            -ms-transform: scale(1);
            -webkit-transform: scale(1);
            transform: scale(1);
            overflow-x: hidden;
            overflow-y: auto;
            pointer-events: auto
        }

        .cu-dialog {
            position: relative;
            display: inline-block;
            vertical-align: middle;
            margin-left: auto;
            margin-right: auto;
            width: 356px;
            max-width: 100%;
            background-color: #f8f8f8;
            border-radius: 5px;
            overflow: hidden
        }

        .cu-modal.bottom-modal::before {
            vertical-align: bottom
        }

        .cu-modal.bottom-modal .cu-dialog {
            width: 100%;
            border-radius: 0
        }

        .cu-modal.bottom-modal {
            margin-bottom: -524px
        }

        .cu-modal.bottom-modal.show {
            margin-bottom: 0
        }

        .cu-modal.drawer-modal {
            -webkit-transform: scale(1);
            transform: scale(1);
            display: -webkit-box;
            display: -webkit-flex;
            display: flex
        }

        .cu-modal.drawer-modal .cu-dialog {
            height: 100%;
            min-width: 104px;
            border-radius: 0;
            margin: initial;
            -webkit-transition-duration: .3s;
            transition-duration: .3s
        }

        .cu-modal.drawer-modal.justify-start .cu-dialog {
            -webkit-transform: translateX(-100%);
            transform: translateX(-100%)
        }

        .cu-modal.drawer-modal.justify-end .cu-dialog {
            -webkit-transform: translateX(100%);
            transform: translateX(100%)
        }

        .cu-modal.drawer-modal.show .cu-dialog {
            -webkit-transform: translateX(0);
            transform: translateX(0)
        }

        .cu-modal .cu-dialog>.cu-bar:first-child .action {
            min-width: 52px;
            margin-right: 0;
            min-height: 52px
        }

        /* ==================
         轮播
 ==================== */
        uni-swiper .a-swiper-dot {
            display: inline-block;
            width: 8px;
            height: 8px;
            background: rgba(0, 0, 0, .3);
            border-radius: 50%;
            vertical-align: middle
        }

        uni-swiper[class*="-dot"] .wx-swiper-dots,
        uni-swiper[class*="-dot"] .a-swiper-dots,
        uni-swiper[class*="-dot"] .uni-swiper-dots {
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            align-items: center;
            width: 100%;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            justify-content: center
        }

        uni-swiper.square-dot .wx-swiper-dot,
        uni-swiper.square-dot .a-swiper-dot,
        uni-swiper.square-dot .uni-swiper-dot {
            background-color: #fff;
            opacity: .4;
            width: 5px;
            height: 5px;
            border-radius: 10px;
            margin: 0 4px !important
        }

        uni-swiper.square-dot .wx-swiper-dot.wx-swiper-dot-active,
        uni-swiper.square-dot .a-swiper-dot.a-swiper-dot-active,
        uni-swiper.square-dot .uni-swiper-dot.uni-swiper-dot-active {
            opacity: 1;
            width: 15px
        }

        uni-swiper.round-dot .wx-swiper-dot,
        uni-swiper.round-dot .a-swiper-dot,
        uni-swiper.round-dot .uni-swiper-dot {
            width: 5px;
            height: 5px;
            position: relative;
            margin: 2px 4px !important
        }

        uni-swiper.round-dot .wx-swiper-dot.wx-swiper-dot-active::after,
        uni-swiper.round-dot .a-swiper-dot.a-swiper-dot-active::after,
        uni-swiper.round-dot .uni-swiper-dot.uni-swiper-dot-active::after {
            content: "";
            position: absolute;
            width: 5px;
            height: 5px;
            top: 0px;
            left: 0px;
            right: 0;
            bottom: 0;
            margin: auto;
            background-color: #fff;
            border-radius: 10px
        }

        uni-swiper.round-dot .wx-swiper-dot.wx-swiper-dot-active,
        uni-swiper.round-dot .a-swiper-dot.a-swiper-dot-active,
        uni-swiper.round-dot .uni-swiper-dot.uni-swiper-dot-active {
            width: 9px;
            height: 9px
        }

        .screen-swiper {
            min-height: 301px
                /* 滚动视图高度 */
        }

        .screen-swiper uni-image,
        .screen-swiper uni-video,
        .swiper-item uni-image,
        .swiper-item uni-video {
            width: 100%;
            display: block;
            height: 100%;
            margin: 0;
            pointer-events: none
        }

        .card-swiper {
            height: 220px !important
        }

        .card-swiper uni-swiper-item {
            width: 319px !important;
            left: 36px;
            box-sizing: border-box;
            padding: 20px 0px 36px;
            overflow: initial
        }

        .card-swiper uni-swiper-item .swiper-item {
            width: 100%;
            display: block;
            height: 100%;
            border-radius: 5px;
            -webkit-transform: scale(.9);
            transform: scale(.9);
            -webkit-transition: all .2s ease-in 0s;
            transition: all .2s ease-in 0s;
            overflow: hidden
        }

        .card-swiper uni-swiper-item.cur .swiper-item {
            -webkit-transform: none;
            transform: none;
            -webkit-transition: all .2s ease-in 0s;
            transition: all .2s ease-in 0s
        }

        .tower-swiper {
            height: 220px;
            position: relative;
            max-width: 393px;
            overflow: hidden
        }

        .tower-swiper .tower-item {
            position: absolute;
            width: 157px;
            height: 199px;
            top: 0;
            bottom: 0;
            left: 50%;
            margin: auto;
            -webkit-transition: all .2s ease-in 0s;
            transition: all .2s ease-in 0s;
            opacity: 1
        }

        .tower-swiper .tower-item.none {
            opacity: 0
        }

        .tower-swiper .tower-item .swiper-item {
            width: 100%;
            height: 100%;
            border-radius: 3px;
            overflow: hidden
        }

        /* ==================
          步骤条
 ==================== */
        .cu-steps {
            display: -webkit-box;
            display: -webkit-flex;
            display: flex
        }

        uni-scroll-view.cu-steps {
            display: block;
            white-space: nowrap
        }

        uni-scroll-view.cu-steps .cu-item {
            display: inline-block
        }

        .cu-steps .cu-item {
            -webkit-box-flex: 1;
            -webkit-flex: 1;
            flex: 1;
            text-align: center;
            position: relative;
            min-width: 52px
        }

        .cu-steps .cu-item:not([class*="text-"]) {
            color: #8799a3
        }

        .cu-steps .cu-item [class*="cuIcon-"],
        .cu-steps .cu-item .num {
            display: block;
            font-size: 20px;
            line-height: 41px
        }

        .cu-steps .cu-item::before,
        .cu-steps .cu-item::after,
        .cu-steps.steps-arrow .cu-item::before,
        .cu-steps.steps-arrow .cu-item::after {
            content: "";
            display: block;
            position: absolute;
            height: 0;
            width: calc(100% - 41px);
            border-bottom: 1px solid #ccc;
            left: calc(0px - (100% - 41px) / 2);
            top: 20px;
            z-index: 0
        }

        .cu-steps.steps-arrow .cu-item::before,
        .cu-steps.steps-arrow .cu-item::after {
            content: "\e6a3";
            font-family: cuIcon;
            height: 15px;
            border-bottom-width: 0;
            line-height: 15px;
            top: 0;
            bottom: 0;
            margin: auto;
            color: #ccc
        }

        .cu-steps.steps-bottom .cu-item::before,
        .cu-steps.steps-bottom .cu-item::after {
            bottom: 20px;
            top: auto
        }

        .cu-steps .cu-item::after {
            border-bottom: 1px solid currentColor;
            width: 0;
            -webkit-transition: all .3s ease-in-out 0s;
            transition: all .3s ease-in-out 0s
        }

        .cu-steps .cu-item[class*="text-"]::after {
            width: calc(100% - 41px);
            color: currentColor
        }

        .cu-steps .cu-item:first-child::before,
        .cu-steps .cu-item:first-child::after {
            display: none
        }

        .cu-steps .cu-item .num {
            width: 20px;
            height: 20px;
            border-radius: 50%;
            line-height: 20px;
            margin: 10px auto;
            font-size: 12px;
            border: 1px solid currentColor;
            position: relative;
            overflow: hidden
        }

        .cu-steps .cu-item[class*="text-"] .num {
            background-color: currentColor
        }

        .cu-steps .cu-item .num::before,
        .cu-steps .cu-item .num::after {
            content: attr(data-index);
            position: absolute;
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            margin: auto;
            -webkit-transition: all .3s ease-in-out 0s;
            transition: all .3s ease-in-out 0s;
            -webkit-transform: translateY(0px);
            transform: translateY(0px)
        }

        .cu-steps .cu-item[class*="text-"] .num::before {
            -webkit-transform: translateY(-20px);
            transform: translateY(-20px);
            color: #fff
        }

        .cu-steps .cu-item .num::after {
            -webkit-transform: translateY(20px);
            transform: translateY(20px);
            color: #fff;
            -webkit-transition: all .3s ease-in-out 0s;
            transition: all .3s ease-in-out 0s
        }

        .cu-steps .cu-item[class*="text-"] .num::after {
            content: "\e645";
            font-family: cuIcon;
            color: #fff;
            -webkit-transform: translateY(0px);
            transform: translateY(0px)
        }

        .cu-steps .cu-item[class*="text-"] .num.err::after {
            content: "\e646"
        }

        /* ==================
          布局
 ==================== */
        /*  -- flex弹性布局 -- */
        .flex {
            display: -webkit-box;
            display: -webkit-flex;
            display: flex
        }

        .basis-xs {
            -webkit-flex-basis: 20%;
            flex-basis: 20%
        }

        .basis-sm {
            -webkit-flex-basis: 40%;
            flex-basis: 40%
        }

        .basis-df {
            -webkit-flex-basis: 50%;
            flex-basis: 50%
        }

        .basis-lg {
            -webkit-flex-basis: 60%;
            flex-basis: 60%
        }

        .basis-xl {
            -webkit-flex-basis: 80%;
            flex-basis: 80%
        }

        .flex-sub {
            -webkit-box-flex: 1;
            -webkit-flex: 1;
            flex: 1
        }

        .flex-twice {
            -webkit-box-flex: 2;
            -webkit-flex: 2;
            flex: 2
        }

        .flex-treble {
            -webkit-box-flex: 3;
            -webkit-flex: 3;
            flex: 3
        }

        .flex-direction {
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            flex-direction: column
        }

        .flex-wrap {
            -webkit-flex-wrap: wrap;
            flex-wrap: wrap
        }

        .align-start {
            -webkit-box-align: start;
            -webkit-align-items: flex-start;
            align-items: flex-start
        }

        .align-end {
            -webkit-box-align: end;
            -webkit-align-items: flex-end;
            align-items: flex-end
        }

        .align-center {
            -webkit-box-align: center;
            -webkit-align-items: center;
            align-items: center
        }

        .align-stretch {
            -webkit-box-align: stretch;
            -webkit-align-items: stretch;
            align-items: stretch
        }

        .self-start {
            -webkit-align-self: flex-start;
            align-self: flex-start
        }

        .self-center {
            -webkit-align-self: flex-center;
            align-self: flex-center
        }

        .self-end {
            -webkit-align-self: flex-end;
            align-self: flex-end
        }

        .self-stretch {
            -webkit-align-self: stretch;
            align-self: stretch
        }

        .align-stretch {
            -webkit-box-align: stretch;
            -webkit-align-items: stretch;
            align-items: stretch
        }

        .justify-start {
            -webkit-box-pack: start;
            -webkit-justify-content: flex-start;
            justify-content: flex-start
        }

        .justify-end {
            -webkit-box-pack: end;
            -webkit-justify-content: flex-end;
            justify-content: flex-end
        }

        .justify-center {
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            justify-content: center
        }

        .justify-between {
            -webkit-box-pack: justify;
            -webkit-justify-content: space-between;
            justify-content: space-between
        }

        .justify-around {
            -webkit-justify-content: space-around;
            justify-content: space-around
        }

        /* grid布局 */
        .grid {
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            -webkit-flex-wrap: wrap;
            flex-wrap: wrap
        }

        .grid.grid-square {
            overflow: hidden
        }

        .grid.grid-square .cu-tag {
            position: absolute;
            right: 0;
            top: 0;
            border-bottom-left-radius: 3px;
            padding: 3px 6px;
            height: auto;
            background-color: rgba(0, 0, 0, .5)
        }

        .grid.grid-square>uni-view>uni-text[class*="cuIcon-"] {
            font-size: 27px;
            position: absolute;
            color: #8799a3;
            margin: auto;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-box-align: center;
            -webkit-align-items: center;
            align-items: center;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            flex-direction: column
        }

        .grid.grid-square>uni-view {
            margin-right: 10px;
            margin-bottom: 10px;
            border-radius: 3px;
            position: relative;
            overflow: hidden
        }

        .grid.grid-square>uni-view.bg-img uni-image {
            width: 100%;
            height: 100%;
            position: absolute
        }

        .grid.col-1.grid-square>uni-view {
            padding-bottom: 100%;
            height: 0;
            margin-right: 0
        }

        .grid.col-2.grid-square>uni-view {
            padding-bottom: calc((100% - 10px)/2);
            height: 0;
            width: calc((100% - 10px)/2)
        }

        .grid.col-3.grid-square>uni-view {
            padding-bottom: calc((100% - 20px)/3);
            height: 0;
            width: calc((100% - 20px)/3)
        }

        .grid.col-4.grid-square>uni-view {
            padding-bottom: calc((100% - 31px)/4);
            height: 0;
            width: calc((100% - 31px)/4)
        }

        .grid.col-5.grid-square>uni-view {
            padding-bottom: calc((100% - 41px)/5);
            height: 0;
            width: calc((100% - 41px)/5)
        }

        .grid.col-2.grid-square>uni-view:nth-child(2n),
        .grid.col-3.grid-square>uni-view:nth-child(3n),
        .grid.col-4.grid-square>uni-view:nth-child(4n),
        .grid.col-5.grid-square>uni-view:nth-child(5n) {
            margin-right: 0
        }

        .grid.col-1>uni-view {
            width: 100%
        }

        .grid.col-2>uni-view {
            width: 50%
        }

        .grid.col-3>uni-view {
            width: 33.33%
        }

        .grid.col-4>uni-view {
            width: 25%
        }

        .grid.col-5>uni-view {
            width: 20%
        }

        /*  -- 内外边距 -- */
        .margin-0 {
            margin: 0
        }

        .margin-xs {
            margin: 5px
        }

        .margin-sm {
            margin: 10px
        }

        .margin {
            margin: 15px
        }

        .margin-lg {
            margin: 20px
        }

        .margin-xl {
            margin: 26px
        }

        .margin-top-xs {
            margin-top: 5px
        }

        .margin-top-sm {
            margin-top: 10px
        }

        .margin-top {
            margin-top: 15px
        }

        .margin-top-lg {
            margin-top: 20px
        }

        .margin-top-xl {
            margin-top: 26px
        }

        .margin-right-xs {
            margin-right: 5px
        }

        .margin-right-sm {
            margin-right: 10px
        }

        .margin-right {
            margin-right: 15px
        }

        .margin-right-lg {
            margin-right: 20px
        }

        .margin-right-xl {
            margin-right: 26px
        }

        .margin-bottom-xs {
            margin-bottom: 5px
        }

        .margin-bottom-sm {
            margin-bottom: 10px
        }

        .margin-bottom {
            margin-bottom: 15px
        }

        .margin-bottom-lg {
            margin-bottom: 20px
        }

        .margin-bottom-xl {
            margin-bottom: 26px
        }

        .margin-left-xs {
            margin-left: 5px
        }

        .margin-left-sm {
            margin-left: 10px
        }

        .margin-left {
            margin-left: 15px
        }

        .margin-left-lg {
            margin-left: 20px
        }

        .margin-left-xl {
            margin-left: 26px
        }

        .margin-lr-xs {
            margin-left: 5px;
            margin-right: 5px
        }

        .margin-lr-sm {
            margin-left: 10px;
            margin-right: 10px
        }

        .margin-lr {
            margin-left: 15px;
            margin-right: 15px
        }

        .margin-lr-lg {
            margin-left: 20px;
            margin-right: 20px
        }

        .margin-lr-xl {
            margin-left: 26px;
            margin-right: 26px
        }

        .margin-tb-xs {
            margin-top: 5px;
            margin-bottom: 5px
        }

        .margin-tb-sm {
            margin-top: 10px;
            margin-bottom: 10px
        }

        .margin-tb {
            margin-top: 15px;
            margin-bottom: 15px
        }

        .margin-tb-lg {
            margin-top: 20px;
            margin-bottom: 20px
        }

        .margin-tb-xl {
            margin-top: 26px;
            margin-bottom: 26px
        }

        .padding-0 {
            padding: 0
        }

        .padding-xs {
            padding: 5px
        }

        .padding-sm {
            padding: 10px
        }

        .padding {
            padding: 10px
        }

        .padding-lg {
            padding: 20px
        }

        .padding-xl {
            padding: 26px
        }

        .padding-top-xs {
            padding-top: 5px
        }

        .padding-top-sm {
            padding-top: 10px
        }

        .padding-top {
            padding-top: 15px
        }

        .padding-top-lg {
            padding-top: 20px
        }

        .padding-top-xl {
            padding-top: 26px
        }

        .padding-right-xs {
            padding-right: 5px
        }

        .padding-right-sm {
            padding-right: 10px
        }

        .padding-right {
            padding-right: 15px
        }

        .padding-right-lg {
            padding-right: 20px
        }

        .padding-right-xl {
            padding-right: 26px
        }

        .padding-bottom-xs {
            padding-bottom: 5px
        }

        .padding-bottom-sm {
            padding-bottom: 10px
        }

        .padding-bottom {
            padding-bottom: 15px
        }

        .padding-bottom-lg {
            padding-bottom: 20px
        }

        .padding-bottom-xl {
            padding-bottom: 26px
        }

        .padding-left-xs {
            padding-left: 5px
        }

        .padding-left-sm {
            padding-left: 10px
        }

        .padding-left {
            padding-left: 15px
        }

        .padding-left-lg {
            padding-left: 20px
        }

        .padding-left-xl {
            padding-left: 26px
        }

        .padding-lr-xs {
            padding-left: 5px;
            padding-right: 5px
        }

        .padding-lr-sm {
            padding-left: 10px;
            padding-right: 10px
        }

        .padding-lr {
            padding-left: 15px;
            padding-right: 15px
        }

        .padding-lr-lg {
            padding-left: 20px;
            padding-right: 20px
        }

        .padding-lr-xl {
            padding-left: 26px;
            padding-right: 26px
        }

        .padding-tb-xs {
            padding-top: 5px;
            padding-bottom: 5px
        }

        .padding-tb-sm {
            padding-top: 10px;
            padding-bottom: 10px
        }

        .padding-tb {
            padding-top: 15px;
            padding-bottom: 15px
        }

        .padding-tb-lg {
            padding-top: 20px;
            padding-bottom: 20px
        }

        .padding-tb-xl {
            padding-top: 26px;
            padding-bottom: 26px
        }

        /* -- 浮动 --  */
        .cf::after,
        .cf::before {
            content: " ";
            display: table
        }

        .cf::after {
            clear: both
        }

        .fl {
            float: left
        }

        .fr {
            float: right
        }

        /* ==================
          背景
 ==================== */
        .line-red::after,
        .lines-red::after {
            border-color: #ff0015
        }

        .line-orange::after,
        .lines-orange::after {
            border-color: #f37b1d
        }

        .line-yellow::after,
        .lines-yellow::after {
            border-color: #fbbd08
        }

        .line-olive::after,
        .lines-olive::after {
            border-color: #8dc63f
        }

        .line-green::after,
        .lines-green::after {
            border-color: #32b16c
        }

        .line-cyan::after,
        .lines-cyan::after {
            border-color: #1cbbb4
        }

        .line-blue::after,
        .lines-blue::after {
            border-color: linear-gradient(90deg, rgb(222, 35, 37) 0%, rgb(255, 80, 74) 100%);
        }

        .line-purple::after,
        .lines-purple::after {
            border-color: #901ffd
        }

        .line-mauve::after,
        .lines-mauve::after {
            border-color: #9c26b0
        }

        .line-pink::after,
        .lines-pink::after {
            border-color: #e03997
        }

        .line-brown::after,
        .lines-brown::after {
            border-color: #a5673f
        }

        .line-grey::after,
        .lines-grey::after {
            border-color: #8799a3
        }

        .line-gray::after,
        .lines-gray::after {
            border-color: #aaa
        }

        .line-black::after,
        .lines-black::after {
            border-color: #333
        }

        .line-white::after,
        .lines-white::after {
            border-color: #fff
        }

        .bg-red {
            background-color: #ff0015;
            color: #fff
        }

        .bg-orange {
            background-color: #f37b1d;
            color: #fff
        }

        .bg-yellow {
            background-color: #fbbd08;
            color: #333
        }

        .bg-olive {
            background-color: #8dc63f;
            color: #fff
        }

        .bg-green {
            background-color: #32b16c;
            color: #fff
        }

        .bg-cyan {
            background-color: #1cbbb4;
            color: #fff
        }

        .bg-blue {
            background-image: linear-gradient(90deg, rgb(222, 35, 37) 0%, rgb(255, 80, 74) 100%);
            color: #fff
        }

        .bg-purple {
            background-color: #901ffd;
            color: #fff
        }

        .bg-mauve {
            background-color: #9c26b0;
            color: #fff
        }

        .bg-pink {
            background-color: #e03997;
            color: #fff
        }

        .bg-brown {
            background-color: #a5673f;
            color: #fff
        }

        .bg-grey {
            background-color: #8799a3;
            color: #fff
        }

        .bg-gray {
            background-color: #f0f0f0;
            color: #333
        }

        .bg-black {
            background-color: #333;
            color: #fff
        }

        .bg-white {
            background-color: #fff;
            color: #666
        }

        .bg-shadeTop {
            background-image: -webkit-linear-gradient(#000, rgba(0, 0, 0, .01));
            background-image: linear-gradient(#000, rgba(0, 0, 0, .01));
            color: #fff
        }

        .bg-shadeBottom {
            background-image: -webkit-linear-gradient(rgba(0, 0, 0, .01), #000);
            background-image: linear-gradient(rgba(0, 0, 0, .01), #000);
            color: #fff
        }

        .bg-red.light {
            color: #ff0015;
            background-color: #fadbd9
        }

        .bg-orange.light {
            color: #f37b1d;
            background-color: #fde6d2
        }

        .bg-yellow.light {
            color: #fbbd08;
            background-color: rgba(254, 242, 206, .82)
        }

        .bg-olive.light {
            color: #8dc63f;
            background-color: #e8f4d9
        }

        .bg-green.light {
            color: #32b16c;
            background-color: #d7f0db
        }

        .bg-cyan.light {
            color: #1cbbb4;
            background-color: #d2f1f0
        }

        .bg-blue.light {
            color: linear-gradient(90deg, rgb(222, 35, 37) 0%, rgb(255, 80, 74) 100%);;
            background-color: #cce6ff
        }

        .bg-purple.light {
            color: #901ffd;
            background-color: #e1d7f0
        }

        .bg-mauve.light {
            color: #9c26b0;
            background-color: #ebd4ef
        }

        .bg-pink.light {
            color: #e03997;
            background-color: #f9d7ea
        }

        .bg-brown.light {
            color: #a5673f;
            background-color: #ede1d9
        }

        .bg-grey.light {
            color: #8799a3;
            background-color: #e7ebed
        }

        .bg-gradual-red {
            background-image: -webkit-linear-gradient(45deg, #f43f3b, #ec008c);
            background-image: linear-gradient(45deg, #f43f3b, #ec008c);
            color: #fff
        }

        .bg-gradual-orange {
            background-image: -webkit-linear-gradient(45deg, #ff9700, #ed1c24);
            background-image: linear-gradient(45deg, #ff9700, #ed1c24);
            color: #fff
        }

        .bg-gradual-green {
            background-image: -webkit-linear-gradient(45deg, #32b16c, #8dc63f);
            background-image: linear-gradient(45deg, #32b16c, #8dc63f);
            color: #fff
        }

        .bg-gradual-purple {
            background-image: -webkit-linear-gradient(45deg, #9000ff, #5e00ff);
            background-image: linear-gradient(45deg, #9000ff, #5e00ff);
            color: #fff
        }

        .bg-gradual-pink {
            background-image: -webkit-linear-gradient(45deg, #ec008c, #901ffd);
            background-image: linear-gradient(45deg, #ec008c, #901ffd);
            color: #fff
        }

        .bg-gradual-blue {
            background-image: linear-gradient(90deg, rgb(222, 35, 37) 0%, rgb(255, 80, 74) 100%);
            color: #fff
        }

        .shadow[class*="-red"] {
            box-shadow: 3px 3px 4px rgba(204, 69, 59, .2)
        }

        .shadow[class*="-orange"] {
            box-shadow: 3px 3px 4px rgba(217, 109, 26, .2)
        }

        .shadow[class*="-yellow"] {
            box-shadow: 3px 3px 4px rgba(224, 170, 7, .2)
        }

        .shadow[class*="-olive"] {
            box-shadow: 3px 3px 4px rgba(124, 173, 55, .2)
        }

        .shadow[class*="-green"] {
            box-shadow: 3px 3px 4px rgba(48, 156, 63, .2)
        }

        .shadow[class*="-cyan"] {
            box-shadow: 3px 3px 4px rgba(28, 187, 180, .2)
        }

        .shadow[class*="-blue"] {
            box-shadow: 3px 3px 4px rgba(0, 102, 204, .2)
        }

        .shadow[class*="-purple"] {
            box-shadow: 3px 3px 4px rgba(88, 48, 156, .2)
        }

        .shadow[class*="-mauve"] {
            box-shadow: 3px 3px 4px rgba(133, 33, 150, .2)
        }

        .shadow[class*="-pink"] {
            box-shadow: 3px 3px 4px rgba(199, 50, 134, .2)
        }

        .shadow[class*="-brown"] {
            box-shadow: 3px 3px 4px rgba(140, 88, 53, .2)
        }

        .shadow[class*="-grey"] {
            box-shadow: 3px 3px 4px rgba(114, 130, 138, .2)
        }

        .shadow[class*="-gray"] {
            box-shadow: 3px 3px 4px rgba(114, 130, 138, .2)
        }

        .shadow[class*="-black"] {
            box-shadow: 3px 3px 4px rgba(26, 26, 26, .2)
        }

        .shadow[class*="-white"] {
            box-shadow: 3px 3px 4px rgba(26, 26, 26, .2)
        }

        .text-shadow[class*="-red"] {
            text-shadow: 3px 3px 4px rgba(204, 69, 59, .2)
        }

        .text-shadow[class*="-orange"] {
            text-shadow: 3px 3px 4px rgba(217, 109, 26, .2)
        }

        .text-shadow[class*="-yellow"] {
            text-shadow: 3px 3px 4px rgba(224, 170, 7, .2)
        }

        .text-shadow[class*="-olive"] {
            text-shadow: 3px 3px 4px rgba(124, 173, 55, .2)
        }

        .text-shadow[class*="-green"] {
            text-shadow: 3px 3px 4px rgba(48, 156, 63, .2)
        }

        .text-shadow[class*="-cyan"] {
            text-shadow: 3px 3px 4px rgba(28, 187, 180, .2)
        }

        .text-shadow[class*="-blue"] {
            text-shadow: 3px 3px 4px rgba(0, 102, 204, .2)
        }

        .text-shadow[class*="-purple"] {
            text-shadow: 3px 3px 4px rgba(88, 48, 156, .2)
        }

        .text-shadow[class*="-mauve"] {
            text-shadow: 3px 3px 4px rgba(133, 33, 150, .2)
        }

        .text-shadow[class*="-pink"] {
            text-shadow: 3px 3px 4px rgba(199, 50, 134, .2)
        }

        .text-shadow[class*="-brown"] {
            text-shadow: 3px 3px 4px rgba(140, 88, 53, .2)
        }

        .text-shadow[class*="-grey"] {
            text-shadow: 3px 3px 4px rgba(114, 130, 138, .2)
        }

        .text-shadow[class*="-gray"] {
            text-shadow: 3px 3px 4px rgba(114, 130, 138, .2)
        }

        .text-shadow[class*="-black"] {
            text-shadow: 3px 3px 4px rgba(26, 26, 26, .2)
        }

        .bg-img {
            background-size: cover;
            background-position: 50%;
            background-repeat: no-repeat
        }

        .bg-mask {
            background-color: #333;
            position: relative
        }

        .bg-mask::after {
            content: "";
            border-radius: inherit;
            width: 100%;
            height: 100%;
            display: block;
            background-color: rgba(0, 0, 0, .4);
            position: absolute;
            left: 0;
            right: 0;
            bottom: 0;
            top: 0
        }

        .bg-mask uni-view,
        .bg-mask uni-cover-view {
            z-index: 5;
            position: relative
        }

        .bg-video {
            position: relative
        }

        .bg-video uni-video {
            display: block;
            height: 100%;
            width: 100%;
            -o-object-fit: cover;
            object-fit: cover;
            position: absolute;
            top: 0;
            z-index: 0;
            pointer-events: none
        }

        /* ==================
          文本
 ==================== */
        .text-xs {
            font-size: 10px
        }

        .text-sm {
            font-size: 12px
        }

        .text-df {
            font-size: 14px
        }

        .text-lg {
            font-size: 16px
        }

        .text-xl {
            font-size: 18px
        }

        .text-xxl {
            font-size: 23px
        }

        .text-sl {
            font-size: 41px
        }

        .text-xsl {
            font-size: 62px
        }

        .text-Abc {
            text-transform: Capitalize
        }

        .text-ABC {
            text-transform: Uppercase
        }

        .text-abc {
            text-transform: Lowercase
        }

        .text-price::before {
            content: "¥";
            font-size: 80%;
            margin-right: 2px
        }

        .text-cut {
            text-overflow: ellipsis;
            white-space: nowrap;
            overflow: hidden
        }

        .text-bold {
            font-weight: 700
        }

        .text-center {
            text-align: center
        }

        .text-content {
            line-height: 1.6
        }

        .text-left {
            text-align: left
        }

        .text-right {
            text-align: right
        }

        .text-red,
        .line-red,
        .lines-red {
            color: #ff0015
        }

        .text-orange,
        .line-orange,
        .lines-orange {
            color: #f37b1d
        }

        .text-yellow,
        .line-yellow,
        .lines-yellow {
            color: #fbbd08
        }

        .text-olive,
        .line-olive,
        .lines-olive {
            color: #8dc63f
        }

        .text-green,
        .line-green,
        .lines-green {
            color: #32b16c
        }

        .text-cyan,
        .line-cyan,
        .lines-cyan {
            color: #1cbbb4
        }

.text-blue, .line-blue, .lines-blue {
    color: #f64841;
}
.text-bluee{
    color:white;
    background-image:linear-gradient(90deg, rgb(222, 35, 37) 0%, rgb(255, 80, 74) 100%);
}
        .text-purple,
        .line-purple,
        .lines-purple {
            color: #901ffd
        }

        .text-mauve,
        .line-mauve,
        .lines-mauve {
            color: #9c26b0
        }

        .text-pink,
        .line-pink,
        .lines-pink {
            color: #e03997
        }

        .text-brown,
        .line-brown,
        .lines-brown {
            color: #a5673f
        }

        .text-grey,
        .line-grey,
        .lines-grey {
            color: #8799a3
        }

        .text-gray,
        .line-gray,
        .lines-gray {
            color: #aaa
        }

        .text-black,
        .line-black,
        .lines-black {
            color: #333
        }

        .text-white,
        .line-white,
        .lines-white {
            color: #fff
        }

        @-webkit-keyframes cuIcon-spin {
            0% {
                -webkit-transform: rotate(0);
                transform: rotate(0)
            }

            100% {
                -webkit-transform: rotate(359deg);
                transform: rotate(359deg)
            }
        }

        @keyframes cuIcon-spin {
            0% {
                -webkit-transform: rotate(0);
                transform: rotate(0)
            }

            100% {
                -webkit-transform: rotate(359deg);
                transform: rotate(359deg)
            }
        }

        .cuIconfont-spin {
            -webkit-animation: cuIcon-spin 2s infinite linear;
            animation: cuIcon-spin 2s infinite linear;
            display: inline-block
        }

        .cuIconfont-pulse {
            -webkit-animation: cuIcon-spin 1s infinite steps(8);
            animation: cuIcon-spin 1s infinite steps(8);
            display: inline-block
        }

        [class*="cuIcon-"] {
            font-family: cuIcon;
            font-size: inherit;
            font-style: normal
        }

        @font-face {
            font-family: cuIcon;
            src: url(//at.alicdn.com/t/font_533566_yfq2d9wdij.eot?t=1545239985831);
            /* IE9*/
            src: url(//at.alicdn.com/t/font_533566_yfq2d9wdij.eot?t=1545239985831#iefix) format("embedded-opentype"), url("data:application/x-font-woff;charset=utf-8;base64,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") format("woff"), url(//at.alicdn.com/t/font_533566_yfq2d9wdij.ttf?t=1545239985831) format("truetype"), url(//at.alicdn.com/t/font_533566_yfq2d9wdij.svg?t=1545239985831#cuIconfont) format("svg")
                /* iOS 4.1- */
        }

        .cuIcon-appreciate:before {
            content: "\e644"
        }

        .cuIcon-check:before {
            content: "\e645"
        }

        .cuIcon-close:before {
            content: "\e646"
        }

        .cuIcon-edit:before {
            content: "\e649"
        }

        .cuIcon-emoji:before {
            content: "\e64a"
        }

        .cuIcon-favorfill:before {
            content: "\e64b"
        }

        .cuIcon-favor:before {
            content: "\e64c"
        }

        .cuIcon-loading:before {
            content: "\e64f"
        }

        .cuIcon-locationfill:before {
            content: "\e650"
        }

        .cuIcon-location:before {
            content: "\e651"
        }

        .cuIcon-phone:before {
            content: "\e652"
        }

        .cuIcon-roundcheckfill:before {
            content: "\e656"
        }

        .cuIcon-roundcheck:before {
            content: "\e657"
        }

        .cuIcon-roundclosefill:before {
            content: "\e658"
        }

        .cuIcon-roundclose:before {
            content: "\e659"
        }

        .cuIcon-roundrightfill:before {
            content: "\e65a"
        }

        .cuIcon-roundright:before {
            content: "\e65b"
        }

        .cuIcon-search:before {
            content: "\e65c"
        }

        .cuIcon-taxi:before {
            content: "\e65d"
        }

        .cuIcon-timefill:before {
            content: "\e65e"
        }

        .cuIcon-time:before {
            content: "\e65f"
        }

        .cuIcon-unfold:before {
            content: "\e661"
        }

        .cuIcon-warnfill:before {
            content: "\e662"
        }

        .cuIcon-warn:before {
            content: "\e663"
        }

        .cuIcon-camerafill:before {
            content: "\e664"
        }

        .cuIcon-camera:before {
            content: "\e665"
        }

        .cuIcon-commentfill:before {
            content: "\e666"
        }

        .cuIcon-comment:before {
            content: "\e667"
        }

        .cuIcon-likefill:before {
            content: "\e668"
        }

        .cuIcon-like:before {
            content: "\e669"
        }

        .cuIcon-notificationfill:before {
            content: "\e66a"
        }

        .cuIcon-notification:before {
            content: "\e66b"
        }

        .cuIcon-order:before {
            content: "\e66c"
        }

        .cuIcon-samefill:before {
            content: "\e66d"
        }

        .cuIcon-same:before {
            content: "\e66e"
        }

        .cuIcon-deliver:before {
            content: "\e671"
        }

        .cuIcon-evaluate:before {
            content: "\e672"
        }

        .cuIcon-pay:before {
            content: "\e673"
        }

        .cuIcon-send:before {
            content: "\e675"
        }

        .cuIcon-shop:before {
            content: "\e676"
        }

        .cuIcon-ticket:before {
            content: "\e677"
        }

        .cuIcon-back:before {
            content: "\e679"
        }

        .cuIcon-cascades:before {
            content: "\e67c"
        }

        .cuIcon-discover:before {
            content: "\e67e"
        }

        .cuIcon-list:before {
            content: "\e682"
        }

        .cuIcon-more:before {
            content: "\e684"
        }

        .cuIcon-scan:before {
            content: "\e689"
        }

        .cuIcon-settings:before {
            content: "\e68a"
        }

        .cuIcon-questionfill:before {
            content: "\e690"
        }

        .cuIcon-question:before {
            content: "\e691"
        }

        .cuIcon-shopfill:before {
            content: "\e697"
        }

        .cuIcon-form:before {
            content: "\e699"
        }

        .cuIcon-pic:before {
            content: "\e69b"
        }

        .cuIcon-filter:before {
            content: "\e69c"
        }

        .cuIcon-footprint:before {
            content: "\e69d"
        }

        .cuIcon-top:before {
            content: "\e69e"
        }

        .cuIcon-pulldown:before {
            content: "\e69f"
        }

        .cuIcon-pullup:before {
            content: "\e6a0"
        }

        .cuIcon-right:before {
            content: "\e6a3"
        }

        .cuIcon-refresh:before {
            content: "\e6a4"
        }

        .cuIcon-moreandroid:before {
            content: "\e6a5"
        }

        .cuIcon-deletefill:before {
            content: "\e6a6"
        }

        .cuIcon-refund:before {
            content: "\e6ac"
        }

        .cuIcon-cart:before {
            content: "\e6af"
        }

        .cuIcon-qrcode:before {
            content: "\e6b0"
        }

        .cuIcon-remind:before {
            content: "\e6b2"
        }

        .cuIcon-delete:before {
            content: "\e6b4"
        }

        .cuIcon-profile:before {
            content: "\e6b7"
        }

        .cuIcon-home:before {
            content: "\e6b8"
        }

        .cuIcon-cartfill:before {
            content: "\e6b9"
        }

        .cuIcon-discoverfill:before {
            content: "\e6ba"
        }

        .cuIcon-homefill:before {
            content: "\e6bb"
        }

        .cuIcon-message:before {
            content: "\e6bc"
        }

        .cuIcon-addressbook:before {
            content: "\e6bd"
        }

        .cuIcon-link:before {
            content: "\e6bf"
        }

        .cuIcon-lock:before {
            content: "\e6c0"
        }

        .cuIcon-unlock:before {
            content: "\e6c2"
        }

        .cuIcon-vip:before {
            content: "\e6c3"
        }

        .cuIcon-weibo:before {
            content: "\e6c4"
        }

        .cuIcon-activity:before {
            content: "\e6c5"
        }

        .cuIcon-friendaddfill:before {
            content: "\e6c9"
        }

        .cuIcon-friendadd:before {
            content: "\e6ca"
        }

        .cuIcon-friendfamous:before {
            content: "\e6cb"
        }

        .cuIcon-friend:before {
            content: "\e6cc"
        }

        .cuIcon-goods:before {
            content: "\e6cd"
        }

        .cuIcon-selection:before {
            content: "\e6ce"
        }

        .cuIcon-explore:before {
            content: "\e6d2"
        }

        .cuIcon-present:before {
            content: "\e6d3"
        }

        .cuIcon-squarecheckfill:before {
            content: "\e6d4"
        }

        .cuIcon-square:before {
            content: "\e6d5"
        }

        .cuIcon-squarecheck:before {
            content: "\e6d6"
        }

        .cuIcon-round:before {
            content: "\e6d7"
        }

        .cuIcon-roundaddfill:before {
            content: "\e6d8"
        }

        .cuIcon-roundadd:before {
            content: "\e6d9"
        }

        .cuIcon-add:before {
            content: "\e6da"
        }

        .cuIcon-notificationforbidfill:before {
            content: "\e6db"
        }

        .cuIcon-explorefill:before {
            content: "\e6dd"
        }

        .cuIcon-fold:before {
            content: "\e6de"
        }

        .cuIcon-game:before {
            content: "\e6df"
        }

        .cuIcon-redpacket:before {
            content: "\e6e0"
        }

        .cuIcon-selectionfill:before {
            content: "\e6e1"
        }

        .cuIcon-similar:before {
            content: "\e6e2"
        }

        .cuIcon-appreciatefill:before {
            content: "\e6e3"
        }

        .cuIcon-infofill:before {
            content: "\e6e4"
        }

        .cuIcon-info:before {
            content: "\e6e5"
        }

        .cuIcon-forwardfill:before {
            content: "\e6ea"
        }

        .cuIcon-forward:before {
            content: "\e6eb"
        }

        .cuIcon-rechargefill:before {
            content: "\e6ec"
        }

        .cuIcon-recharge:before {
            content: "\e6ed"
        }

        .cuIcon-vipcard:before {
            content: "\e6ee"
        }

        .cuIcon-voice:before {
            content: "\e6ef"
        }

        .cuIcon-voicefill:before {
            content: "\e6f0"
        }

        .cuIcon-friendfavor:before {
            content: "\e6f1"
        }

        .cuIcon-wifi:before {
            content: "\e6f2"
        }

        .cuIcon-share:before {
            content: "\e6f3"
        }

        .cuIcon-wefill:before {
            content: "\e6f4"
        }

        .cuIcon-we:before {
            content: "\e6f5"
        }

        .cuIcon-lightauto:before {
            content: "\e6f6"
        }

        .cuIcon-lightforbid:before {
            content: "\e6f7"
        }

        .cuIcon-lightfill:before {
            content: "\e6f8"
        }

        .cuIcon-camerarotate:before {
            content: "\e6f9"
        }

        .cuIcon-light:before {
            content: "\e6fa"
        }

        .cuIcon-barcode:before {
            content: "\e6fb"
        }

        .cuIcon-flashlightclose:before {
            content: "\e6fc"
        }

        .cuIcon-flashlightopen:before {
            content: "\e6fd"
        }

        .cuIcon-searchlist:before {
            content: "\e6fe"
        }

        .cuIcon-service:before {
            content: "\e6ff"
        }

        .cuIcon-sort:before {
            content: "\e700"
        }

        .cuIcon-down:before {
            content: "\e703"
        }

        .cuIcon-mobile:before {
            content: "\e704"
        }

        .cuIcon-mobilefill:before {
            content: "\e705"
        }

        .cuIcon-copy:before {
            content: "\e706"
        }

        .cuIcon-countdownfill:before {
            content: "\e707"
        }

        .cuIcon-countdown:before {
            content: "\e708"
        }

        .cuIcon-noticefill:before {
            content: "\e709"
        }

        .cuIcon-notice:before {
            content: "\e70a"
        }

        .cuIcon-upstagefill:before {
            content: "\e70e"
        }

        .cuIcon-upstage:before {
            content: "\e70f"
        }

        .cuIcon-babyfill:before {
            content: "\e710"
        }

        .cuIcon-baby:before {
            content: "\e711"
        }

        .cuIcon-brandfill:before {
            content: "\e712"
        }

        .cuIcon-brand:before {
            content: "\e713"
        }

        .cuIcon-choicenessfill:before {
            content: "\e714"
        }

        .cuIcon-choiceness:before {
            content: "\e715"
        }

        .cuIcon-clothesfill:before {
            content: "\e716"
        }

        .cuIcon-clothes:before {
            content: "\e717"
        }

        .cuIcon-creativefill:before {
            content: "\e718"
        }

        .cuIcon-creative:before {
            content: "\e719"
        }

        .cuIcon-female:before {
            content: "\e71a"
        }

        .cuIcon-keyboard:before {
            content: "\e71b"
        }

        .cuIcon-male:before {
            content: "\e71c"
        }

        .cuIcon-newfill:before {
            content: "\e71d"
        }

        .cuIcon-new:before {
            content: "\e71e"
        }

        .cuIcon-pullleft:before {
            content: "\e71f"
        }

        .cuIcon-pullright:before {
            content: "\e720"
        }

        .cuIcon-rankfill:before {
            content: "\e721"
        }

        .cuIcon-rank:before {
            content: "\e722"
        }

        .cuIcon-bad:before {
            content: "\e723"
        }

        .cuIcon-cameraadd:before {
            content: "\e724"
        }

        .cuIcon-focus:before {
            content: "\e725"
        }

        .cuIcon-friendfill:before {
            content: "\e726"
        }

        .cuIcon-cameraaddfill:before {
            content: "\e727"
        }

        .cuIcon-apps:before {
            content: "\e729"
        }

        .cuIcon-paintfill:before {
            content: "\e72a"
        }

        .cuIcon-paint:before {
            content: "\e72b"
        }

        .cuIcon-picfill:before {
            content: "\e72c"
        }

        .cuIcon-refresharrow:before {
            content: "\e72d"
        }

        .cuIcon-colorlens:before {
            content: "\e6e6"
        }

        .cuIcon-markfill:before {
            content: "\e730"
        }

        .cuIcon-mark:before {
            content: "\e731"
        }

        .cuIcon-presentfill:before {
            content: "\e732"
        }

        .cuIcon-repeal:before {
            content: "\e733"
        }

        .cuIcon-album:before {
            content: "\e734"
        }

        .cuIcon-peoplefill:before {
            content: "\e735"
        }

        .cuIcon-people:before {
            content: "\e736"
        }

        .cuIcon-servicefill:before {
            content: "\e737"
        }

        .cuIcon-repair:before {
            content: "\e738"
        }

        .cuIcon-file:before {
            content: "\e739"
        }

        .cuIcon-repairfill:before {
            content: "\e73a"
        }

        .cuIcon-taoxiaopu:before {
            content: "\e73b"
        }

        .cuIcon-weixin:before {
            content: "\e612"
        }

        .cuIcon-attentionfill:before {
            content: "\e73c"
        }

        .cuIcon-attention:before {
            content: "\e73d"
        }

        .cuIcon-commandfill:before {
            content: "\e73e"
        }

        .cuIcon-command:before {
            content: "\e73f"
        }

        .cuIcon-communityfill:before {
            content: "\e740"
        }

        .cuIcon-community:before {
            content: "\e741"
        }

        .cuIcon-read:before {
            content: "\e742"
        }

        .cuIcon-calendar:before {
            content: "\e74a"
        }

        .cuIcon-cut:before {
            content: "\e74b"
        }

        .cuIcon-magic:before {
            content: "\e74c"
        }

        .cuIcon-backwardfill:before {
            content: "\e74d"
        }

        .cuIcon-playfill:before {
            content: "\e74f"
        }

        .cuIcon-stop:before {
            content: "\e750"
        }

        .cuIcon-tagfill:before {
            content: "\e751"
        }

        .cuIcon-tag:before {
            content: "\e752"
        }

        .cuIcon-group:before {
            content: "\e753"
        }

        .cuIcon-all:before {
            content: "\e755"
        }

        .cuIcon-backdelete:before {
            content: "\e756"
        }

        .cuIcon-hotfill:before {
            content: "\e757"
        }

        .cuIcon-hot:before {
            content: "\e758"
        }

        .cuIcon-post:before {
            content: "\e759"
        }

        .cuIcon-radiobox:before {
            content: "\e75b"
        }

        .cuIcon-rounddown:before {
            content: "\e75c"
        }

        .cuIcon-upload:before {
            content: "\e75d"
        }

        .cuIcon-writefill:before {
            content: "\e760"
        }

        .cuIcon-write:before {
            content: "\e761"
        }

        .cuIcon-radioboxfill:before {
            content: "\e763"
        }

        .cuIcon-punch:before {
            content: "\e764"
        }

        .cuIcon-shake:before {
            content: "\e765"
        }

        .cuIcon-move:before {
            content: "\e768"
        }

        .cuIcon-safe:before {
            content: "\e769"
        }

        .cuIcon-activityfill:before {
            content: "\e775"
        }

        .cuIcon-crownfill:before {
            content: "\e776"
        }

        .cuIcon-crown:before {
            content: "\e777"
        }

        .cuIcon-goodsfill:before {
            content: "\e778"
        }

        .cuIcon-messagefill:before {
            content: "\e779"
        }

        .cuIcon-profilefill:before {
            content: "\e77a"
        }

        .cuIcon-sound:before {
            content: "\e77b"
        }

        .cuIcon-sponsorfill:before {
            content: "\e77c"
        }

        .cuIcon-sponsor:before {
            content: "\e77d"
        }

        .cuIcon-upblock:before {
            content: "\e77e"
        }

        .cuIcon-weblock:before {
            content: "\e77f"
        }

        .cuIcon-weunblock:before {
            content: "\e780"
        }

        .cuIcon-my:before {
            content: "\e78b"
        }

        .cuIcon-myfill:before {
            content: "\e78c"
        }

        .cuIcon-emojifill:before {
            content: "\e78d"
        }

        .cuIcon-emojiflashfill:before {
            content: "\e78e"
        }

        .cuIcon-flashbuyfill:before {
            content: "\e78f"
        }

        .cuIcon-text:before {
            content: "\e791"
        }

        .cuIcon-goodsfavor:before {
            content: "\e794"
        }

        .cuIcon-musicfill:before {
            content: "\e795"
        }

        .cuIcon-musicforbidfill:before {
            content: "\e796"
        }

        .cuIcon-card:before {
            content: "\e624"
        }

        .cuIcon-triangledownfill:before {
            content: "\e79b"
        }

        .cuIcon-triangleupfill:before {
            content: "\e79c"
        }

        .cuIcon-roundleftfill-copy:before {
            content: "\e79e"
        }

        .cuIcon-font:before {
            content: "\e76a"
        }

        .cuIcon-title:before {
            content: "\e82f"
        }

        .cuIcon-recordfill:before {
            content: "\e7a4"
        }

        .cuIcon-record:before {
            content: "\e7a6"
        }

        .cuIcon-cardboardfill:before {
            content: "\e7a9"
        }

        .cuIcon-cardboard:before {
            content: "\e7aa"
        }

        .cuIcon-formfill:before {
            content: "\e7ab"
        }

        .cuIcon-coin:before {
            content: "\e7ac"
        }

        .cuIcon-cardboardforbid:before {
            content: "\e7af"
        }

        .cuIcon-circlefill:before {
            content: "\e7b0"
        }

        .cuIcon-circle:before {
            content: "\e7b1"
        }

        .cuIcon-attentionforbid:before {
            content: "\e7b2"
        }

        .cuIcon-attentionforbidfill:before {
            content: "\e7b3"
        }

        .cuIcon-attentionfavorfill:before {
            content: "\e7b4"
        }

        .cuIcon-attentionfavor:before {
            content: "\e7b5"
        }

        .cuIcon-titles:before {
            content: "\e701"
        }

        .cuIcon-icloading:before {
            content: "\e67a"
        }

        .cuIcon-full:before {
            content: "\e7bc"
        }

        .cuIcon-mail:before {
            content: "\e7bd"
        }

        .cuIcon-peoplelist:before {
            content: "\e7be"
        }

        .cuIcon-goodsnewfill:before {
            content: "\e7bf"
        }

        .cuIcon-goodsnew:before {
            content: "\e7c0"
        }

        .cuIcon-medalfill:before {
            content: "\e7c1"
        }

        .cuIcon-medal:before {
            content: "\e7c2"
        }

        .cuIcon-newsfill:before {
            content: "\e7c3"
        }

        .cuIcon-newshotfill:before {
            content: "\e7c4"
        }

        .cuIcon-newshot:before {
            content: "\e7c5"
        }

        .cuIcon-news:before {
            content: "\e7c6"
        }

        .cuIcon-videofill:before {
            content: "\e7c7"
        }

        .cuIcon-video:before {
            content: "\e7c8"
        }

        .cuIcon-exit:before {
            content: "\e7cb"
        }

        .cuIcon-skinfill:before {
            content: "\e7cc"
        }

        .cuIcon-skin:before {
            content: "\e7cd"
        }

        .cuIcon-moneybagfill:before {
            content: "\e7ce"
        }

        .cuIcon-usefullfill:before {
            content: "\e7cf"
        }

        .cuIcon-usefull:before {
            content: "\e7d0"
        }

        .cuIcon-moneybag:before {
            content: "\e7d1"
        }

        .cuIcon-redpacket_fill:before {
            content: "\e7d3"
        }

        .cuIcon-subscription:before {
            content: "\e7d4"
        }

        .cuIcon-loading1:before {
            content: "\e633"
        }

        .cuIcon-github:before {
            content: "\e692"
        }

        .cuIcon-global:before {
            content: "\e7eb"
        }

        .cuIcon-settingsfill:before {
            content: "\e6ab"
        }

        .cuIcon-back_android:before {
            content: "\e7ed"
        }

        .cuIcon-expressman:before {
            content: "\e7ef"
        }

        .cuIcon-evaluate_fill:before {
            content: "\e7f0"
        }

        .cuIcon-group_fill:before {
            content: "\e7f5"
        }

        .cuIcon-play_forward_fill:before {
            content: "\e7f6"
        }

        .cuIcon-deliver_fill:before {
            content: "\e7f7"
        }

        .cuIcon-notice_forbid_fill:before {
            content: "\e7f8"
        }

        .cuIcon-fork:before {
            content: "\e60c"
        }

        .cuIcon-pick:before {
            content: "\e7fa"
        }

        .cuIcon-wenzi:before {
            content: "\e6a7"
        }

        .cuIcon-ellipse:before {
            content: "\e600"
        }

        .cuIcon-qr_code:before {
            content: "\e61b"
        }

        .cuIcon-dianhua:before {
            content: "\e64d"
        }

        .cuIcon-cuIcon:before {
            content: "\e602"
        }

        .cuIcon-loading2:before {
            content: "\e7f1"
        }

        .cuIcon-btn:before {
            content: "\e601"
        }

        @font-face {
            font-family: iconfont;
            src: url(https://at.alicdn.com/t/font_1044281_p16f7wd686.eot?t=1550815807589);
            /* IE9 */
            src: url(https://at.alicdn.com/t/font_1044281_p16f7wd686.eot?t=1550815807589#iefix) format("embedded-opentype"), url("data:application/x-font-woff2;charset=utf-8;base64,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") format("woff2"), url(https://at.alicdn.com/t/font_1044281_p16f7wd686.woff?t=1550815807589) format("woff"), url(https://at.alicdn.com/t/font_1044281_p16f7wd686.ttf?t=1550815807589) format("truetype"), url(https://at.alicdn.com/t/font_1044281_p16f7wd686.svg?t=1550815807589#iconfont) format("svg")
                /* iOS 4.1- */
        }

        .iconfont {
            font-family: iconfont !important;
            font-size: 16px;
            font-style: normal;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .icon-tianmaotmall:before {
            content: "\e7c5"
        }

        .icon-shoucang:before {
            content: "\e688"
        }

        .icon-fankui:before {
            content: "\e62b"
        }

        .icon-shouy:before {
            content: "\e605"
        }

        .icon-tupian:before {
            content: "\e665"
        }

        .icon-di:before {
            content: "\e631"
        }

        .icon-taobao:before {
            content: "\e6b3"
        }

        .icon-shouye:before {
            content: "\e61b"
        }

        .icon-youjiantou:before {
            content: "\e641"
        }

        .icon-zuojiantou:before {
            content: "\e642"
        }

        .icon-zuji:before {
            content: "\e619"
        }

        .icon-fankui1:before {
            content: "\e61c"
        }

        .icon-xiala:before {
            content: "\e658"
        }

        .icon-kefu-:before {
            content: "\e625"
        }

        .icon-ping:before {
            content: "\e601"
        }

        .icon-sousuo:before {
            content: "\e603"
        }

        .icon-wode:before {
            content: "\e604"
        }

        .icon-shangla:before {
            content: "\e600"
        }

        .icon-search:before {
            content: "\e63f"
        }

        .icon-kouling:before {
            content: "\e689"
        }

        .icon-close:before {
            content: "\e606"
        }

        .icon-gao:before {
            content: "\e602"
        }

        .icon-guanbi:before {
            content: "\e609"
        }

        .icon-detail_icon_gou:before {
            content: "\e610"
        }

        @-webkit-keyframes icon-spin {
            0% {
                -webkit-transform: rotate(0);
                transform: rotate(0)
            }

            100% {
                -webkit-transform: rotate(359deg);
                transform: rotate(359deg)
            }
        }

        @keyframes icon-spin {
            0% {
                -webkit-transform: rotate(0);
                transform: rotate(0)
            }

            100% {
                -webkit-transform: rotate(359deg);
                transform: rotate(359deg)
            }
        }

        .simplepro-spin {
            -webkit-animation: icon-spin 2s infinite linear;
            animation: icon-spin 2s infinite linear;
            display: inline-block
        }

        .simplepro-pulse {
            -webkit-animation: icon-spin 1s infinite steps(8);
            animation: icon-spin 1s infinite steps(8);
            display: inline-block
        }

        [class*="icon-"] {
            /*    font-family: "simplepro" !important;
    font-size: inherit;
    font-style: normal; */
        }

        @font-face {
            font-family: simplepro;
            src: url(https://at.alicdn.com/t/font_533566_yfq2d9wdij.eot?t=1545239985831);
            /* IE9*/
            src: url(https://at.alicdn.com/t/font_533566_yfq2d9wdij.eot?t=1545239985831#iefix) format("embedded-opentype"), url("data:application/x-font-woff;charset=utf-8;base64,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") format("woff"), url(https://at.alicdn.com/t/font_533566_yfq2d9wdij.ttf?t=1545239985831) format("truetype"), url(https://at.alicdn.com/t/font_533566_yfq2d9wdij.svg?t=1545239985831#iconfont) format("svg")
                /* iOS 4.1- */
        }

        .icon-appreciate:before {
            content: "\e644"
        }

        .icon-check:before {
            content: "\e645"
        }

        .icon-close:before {
            content: "\e646"
        }

        .icon-edit:before {
            content: "\e649"
        }

        .icon-emoji:before {
            content: "\e64a"
        }

        .icon-favorfill:before {
            content: "\e64b"
        }

        .icon-favor:before {
            content: "\e64c"
        }

        .icon-loading:before {
            content: "\e64f"
        }

        .icon-locationfill:before {
            content: "\e650"
        }

        .icon-location:before {
            content: "\e651"
        }

        .icon-phone:before {
            content: "\e652"
        }

        .icon-roundcheckfill:before {
            content: "\e656"
        }

        .icon-roundcheck:before {
            content: "\e657"
        }

        .icon-roundclosefill:before {
            content: "\e658"
        }

        .icon-roundclose:before {
            content: "\e659"
        }

        .icon-roundrightfill:before {
            content: "\e65a"
        }

        .icon-roundright:before {
            content: "\e65b"
        }

        .icon-search:before {
            content: "\e65c"
        }

        .icon-taxi:before {
            content: "\e65d"
        }

        .icon-timefill:before {
            content: "\e65e"
        }

        .icon-time:before {
            content: "\e65f"
        }

        .icon-unfold:before {
            content: "\e661"
        }

        .icon-warnfill:before {
            content: "\e662"
        }

        .icon-warn:before {
            content: "\e663"
        }

        .icon-camerafill:before {
            content: "\e664"
        }

        .icon-camera:before {
            content: "\e665"
        }

        .icon-commentfill:before {
            content: "\e666"
        }

        .icon-comment:before {
            content: "\e667"
        }

        .icon-likefill:before {
            content: "\e668"
        }

        .icon-like:before {
            content: "\e669"
        }

        .icon-notificationfill:before {
            content: "\e66a"
        }

        .icon-notification:before {
            content: "\e66b"
        }

        .icon-order:before {
            content: "\e66c"
        }

        .icon-samefill:before {
            content: "\e66d"
        }

        .icon-same:before {
            content: "\e66e"
        }

        .icon-deliver:before {
            content: "\e671"
        }

        .icon-evaluate:before {
            content: "\e672"
        }

        .icon-pay:before {
            content: "\e673"
        }

        .icon-send:before {
            content: "\e675"
        }

        .icon-shop:before {
            content: "\e676"
        }

        .icon-ticket:before {
            content: "\e677"
        }

        .icon-back:before {
            content: "\e679"
        }

        .icon-cascades:before {
            content: "\e67c"
        }

        .icon-discover:before {
            content: "\e67e"
        }

        .icon-list:before {
            content: "\e682"
        }

        .icon-more:before {
            content: "\e684"
        }

        .icon-scan:before {
            content: "\e689"
        }

        .icon-settings:before {
            content: "\e68a"
        }

        .icon-questionfill:before {
            content: "\e690"
        }

        .icon-question:before {
            content: "\e691"
        }

        .icon-shopfill:before {
            content: "\e697"
        }

        .icon-form:before {
            content: "\e699"
        }

        .icon-pic:before {
            content: "\e69b"
        }

        .icon-filter:before {
            content: "\e69c"
        }

        .icon-footprint:before {
            content: "\e69d"
        }

        .icon-top:before {
            content: "\e69e"
        }

        .icon-pulldown:before {
            content: "\e69f"
        }

        .icon-pullup:before {
            content: "\e6a0"
        }

        .icon-right:before {
            content: "\e6a3"
        }

        .icon-refresh:before {
            content: "\e6a4"
        }

        .icon-moreandroid:before {
            content: "\e6a5"
        }

        .icon-deletefill:before {
            content: "\e6a6"
        }

        .icon-refund:before {
            content: "\e6ac"
        }

        .icon-cart:before {
            content: "\e6af"
        }

        .icon-qrcode:before {
            content: "\e6b0"
        }

        .icon-remind:before {
            content: "\e6b2"
        }

        .icon-delete:before {
            content: "\e6b4"
        }

        .icon-profile:before {
            content: "\e6b7"
        }

        .icon-home:before {
            content: "\e6b8"
        }

        .icon-cartfill:before {
            content: "\e6b9"
        }

        .icon-discoverfill:before {
            content: "\e6ba"
        }

        .icon-homefill:before {
            content: "\e6bb"
        }

        .icon-message:before {
            content: "\e6bc"
        }

        .icon-addressbook:before {
            content: "\e6bd"
        }

        .icon-link:before {
            content: "\e6bf"
        }

        .icon-lock:before {
            content: "\e6c0"
        }

        .icon-unlock:before {
            content: "\e6c2"
        }

        .icon-vip:before {
            content: "\e6c3"
        }

        .icon-weibo:before {
            content: "\e6c4"
        }

        .icon-activity:before {
            content: "\e6c5"
        }

        .icon-friendaddfill:before {
            content: "\e6c9"
        }

        .icon-friendadd:before {
            content: "\e6ca"
        }

        .icon-friendfamous:before {
            content: "\e6cb"
        }

        .icon-friend:before {
            content: "\e6cc"
        }

        .icon-goods:before {
            content: "\e6cd"
        }

        .icon-selection:before {
            content: "\e6ce"
        }

        .icon-explore:before {
            content: "\e6d2"
        }
.award {
    background: url(https://damangames.in/img/icon_wallet.86908b64.png) no-repeat;
    background-size: contain;
    display: inline-block;
    height: 20px;
    width: 20px;
    margin-left: 5px;
    vertical-align: text-bottom;
}        .icon-present:before {
            content: "\e6d3"
        }

        .icon-squarecheckfill:before {
            content: "\e6d4"
        }

        .icon-square:before {
            content: "\e6d5"
        }

        .icon-squarecheck:before {
            content: "\e6d6"
        }

        .icon-round:before {
            content: "\e6d7"
        }

        .icon-roundaddfill:before {
            content: "\e6d8"
        }

        .icon-roundadd:before {
            content: "\e6d9"
        }

        .icon-add:before {
            content: "\e6da"
        }

        .icon-notificationforbidfill:before {
            content: "\e6db"
        }

        .icon-explorefill:before {
            content: "\e6dd"
        }

        .icon-fold:before {
            content: "\e6de"
        }

        .icon-game:before {
            content: "\e6df"
        }

        .icon-redpacket:before {
            content: "\e6e0"
        }

        .icon-selectionfill:before {
            content: "\e6e1"
        }

        .icon-similar:before {
            content: "\e6e2"
        }

        .icon-appreciatefill:before {
            content: "\e6e3"
        }

        .icon-infofill:before {
            content: "\e6e4"
        }

        .icon-info:before {
            content: "\e6e5"
        }

        .icon-forwardfill:before {
            content: "\e6ea"
        }

        .icon-forward:before {
            content: "\e6eb"
        }

        .icon-rechargefill:before {
            content: "\e6ec"
        }

        .icon-recharge:before {
            content: "\e6ed"
        }

        .icon-vipcard:before {
            content: "\e6ee"
        }

        .icon-voice:before {
            content: "\e6ef"
        }

        .icon-voicefill:before {
            content: "\e6f0"
        }

        .icon-friendfavor:before {
            content: "\e6f1"
        }

        .icon-wifi:before {
            content: "\e6f2"
        }

        .icon-share:before {
            content: "\e6f3"
        }

        .icon-wefill:before {
            content: "\e6f4"
        }

        .icon-we:before {
            content: "\e6f5"
        }

        .icon-lightauto:before {
            content: "\e6f6"
        }

        .icon-lightforbid:before {
            content: "\e6f7"
        }

        .icon-lightfill:before {
            content: "\e6f8"
        }

        .icon-camerarotate:before {
            content: "\e6f9"
        }

        .icon-light:before {
            content: "\e6fa"
        }

        .icon-barcode:before {
            content: "\e6fb"
        }

        .icon-flashlightclose:before {
            content: "\e6fc"
        }

        .icon-flashlightopen:before {
            content: "\e6fd"
        }

        .icon-searchlist:before {
            content: "\e6fe"
        }

        .icon-service:before {
            content: "\e6ff"
        }

        .icon-sort:before {
            content: "\e700"
        }

        .icon-down:before {
            content: "\e703"
        }

        .icon-mobile:before {
            content: "\e704"
        }

        .icon-mobilefill:before {
            content: "\e705"
        }

        .icon-copy:before {
            content: "\e706"
        }

        .icon-countdownfill:before {
            content: "\e707"
        }

        .icon-countdown:before {
            content: "\e708"
        }

        .icon-noticefill:before {
            content: "\e709"
        }

        .icon-notice:before {
            content: "\e70a"
        }

        .icon-upstagefill:before {
            content: "\e70e"
        }

        .icon-upstage:before {
            content: "\e70f"
        }

        .icon-babyfill:before {
            content: "\e710"
        }

        .icon-baby:before {
            content: "\e711"
        }

        .icon-brandfill:before {
            content: "\e712"
        }

        .icon-brand:before {
            content: "\e713"
        }

        .icon-choicenessfill:before {
            content: "\e714"
        }

        .icon-choiceness:before {
            content: "\e715"
        }

        .icon-clothesfill:before {
            content: "\e716"
        }

        .icon-clothes:before {
            content: "\e717"
        }

        .icon-creativefill:before {
            content: "\e718"
        }

        .icon-creative:before {
            content: "\e719"
        }

        .icon-female:before {
            content: "\e71a"
        }

        .icon-keyboard:before {
            content: "\e71b"
        }

        .icon-male:before {
            content: "\e71c"
        }

        .icon-newfill:before {
            content: "\e71d"
        }

        .icon-new:before {
            content: "\e71e"
        }

        .icon-pullleft:before {
            content: "\e71f"
        }

        .icon-pullright:before {
            content: "\e720"
        }

        .icon-rankfill:before {
            content: "\e721"
        }

        .icon-rank:before {
            content: "\e722"
        }

        .icon-bad:before {
            content: "\e723"
        }

        .icon-cameraadd:before {
            content: "\e724"
        }

        .icon-focus:before {
            content: "\e725"
        }

        .icon-friendfill:before {
            content: "\e726"
        }

        .icon-cameraaddfill:before {
            content: "\e727"
        }

        .icon-apps:before {
            content: "\e729"
        }

        .icon-paintfill:before {
            content: "\e72a"
        }

        .icon-paint:before {
            content: "\e72b"
        }

        .icon-picfill:before {
            content: "\e72c"
        }

        .icon-refresharrow:before {
            content: "\e72d"
        }

        .icon-colorlens:before {
            content: "\e6e6"
        }

        .icon-markfill:before {
            content: "\e730"
        }

        .icon-mark:before {
            content: "\e731"
        }

        .icon-presentfill:before {
            content: "\e732"
        }

        .icon-repeal:before {
            content: "\e733"
        }

        .icon-album:before {
            content: "\e734"
        }

        .icon-peoplefill:before {
            content: "\e735"
        }

        .icon-people:before {
            content: "\e736"
        }

        .icon-servicefill:before {
            content: "\e737"
        }

        .icon-repair:before {
            content: "\e738"
        }

        .icon-file:before {
            content: "\e739"
        }

        .icon-repairfill:before {
            content: "\e73a"
        }

        .icon-taoxiaopu:before {
            content: "\e73b"
        }

        .icon-weixin:before {
            content: "\e612"
        }

        .icon-attentionfill:before {
            content: "\e73c"
        }

        .icon-attention:before {
            content: "\e73d"
        }

        .icon-commandfill:before {
            content: "\e73e"
        }

        .icon-command:before {
            content: "\e73f"
        }

        .icon-communityfill:before {
            content: "\e740"
        }

        .icon-community:before {
            content: "\e741"
        }

        .icon-read:before {
            content: "\e742"
        }

        .icon-calendar:before {
            content: "\e74a"
        }

        .icon-cut:before {
            content: "\e74b"
        }

        .icon-magic:before {
            content: "\e74c"
        }

        .icon-backwardfill:before {
            content: "\e74d"
        }

        .icon-playfill:before {
            content: "\e74f"
        }

        .icon-stop:before {
            content: "\e750"
        }

        .icon-tagfill:before {
            content: "\e751"
        }

        .icon-tag:before {
            content: "\e752"
        }

        .icon-group:before {
            content: "\e753"
        }

        .icon-all:before {
            content: "\e755"
        }

        .icon-backdelete:before {
            content: "\e756"
        }

        .icon-hotfill:before {
            content: "\e757"
        }

        .icon-hot:before {
            content: "\e758"
        }

        .icon-post:before {
            content: "\e759"
        }

        .icon-radiobox:before {
            content: "\e75b"
        }

        .icon-rounddown:before {
            content: "\e75c"
        }

        .icon-upload:before {
            content: "\e75d"
        }

        .icon-writefill:before {
            content: "\e760"
        }

        .icon-write:before {
            content: "\e761"
        }

        .icon-radioboxfill:before {
            content: "\e763"
        }

        .icon-punch:before {
            content: "\e764"
        }

        .icon-shake:before {
            content: "\e765"
        }

        .icon-move:before {
            content: "\e768"
        }

        .icon-safe:before {
            content: "\e769"
        }

        .icon-activityfill:before {
            content: "\e775"
        }

        .icon-crownfill:before {
            content: "\e776"
        }

        .icon-crown:before {
            content: "\e777"
        }

        .icon-goodsfill:before {
            content: "\e778"
        }

        .icon-messagefill:before {
            content: "\e779"
        }

        .icon-profilefill:before {
            content: "\e77a"
        }

        .icon-sound:before {
            content: "\e77b"
        }

        .icon-sponsorfill:before {
            content: "\e77c"
        }

        .icon-sponsor:before {
            content: "\e77d"
        }

        .icon-upblock:before {
            content: "\e77e"
        }

        .icon-weblock:before {
            content: "\e77f"
        }

        .icon-weunblock:before {
            content: "\e780"
        }

        .icon-my:before {
            content: "\e78b"
        }

        .icon-myfill:before {
            content: "\e78c"
        }

        .icon-emojifill:before {
            content: "\e78d"
        }

        .icon-emojiflashfill:before {
            content: "\e78e"
        }

        .icon-flashbuyfill:before {
            content: "\e78f"
        }

        .icon-text:before {
            content: "\e791"
        }

        .icon-goodsfavor:before {
            content: "\e794"
        }

        .icon-musicfill:before {
            content: "\e795"
        }

        .icon-musicforbidfill:before {
            content: "\e796"
        }

        .icon-card:before {
            content: "\e624"
        }

        .icon-triangledownfill:before {
            content: "\e79b"
        }

        .icon-triangleupfill:before {
            content: "\e79c"
        }

        .icon-roundleftfill-copy:before {
            content: "\e79e"
        }

        .icon-font:before {
            content: "\e76a"
        }

        .icon-title:before {
            content: "\e82f"
        }

        .icon-recordfill:before {
            content: "\e7a4"
        }

        .icon-record:before {
            content: "\e7a6"
        }

        .icon-cardboardfill:before {
            content: "\e7a9"
        }

        .icon-cardboard:before {
            content: "\e7aa"
        }

        .icon-formfill:before {
            content: "\e7ab"
        }

        .icon-coin:before {
            content: "\e7ac"
        }

        .icon-cardboardforbid:before {
            content: "\e7af"
        }

        .icon-circlefill:before {
            content: "\e7b0"
        }

        .icon-circle:before {
            content: "\e7b1"
        }

        .icon-attentionforbid:before {
            content: "\e7b2"
        }

        .icon-attentionforbidfill:before {
            content: "\e7b3"
        }

        .icon-attentionfavorfill:before {
            content: "\e7b4"
        }

        .icon-attentionfavor:before {
            content: "\e7b5"
        }

        .icon-titles:before {
            content: "\e701"
        }

        .icon-icloading:before {
            content: "\e67a"
        }

        .icon-full:before {
            content: "\e7bc"
        }

        .icon-mail:before {
            content: "\e7bd"
        }

        .icon-peoplelist:before {
            content: "\e7be"
        }

        .icon-goodsnewfill:before {
            content: "\e7bf"
        }

        .icon-goodsnew:before {
            content: "\e7c0"
        }

        .icon-medalfill:before {
            content: "\e7c1"
        }

        .icon-medal:before {
            content: "\e7c2"
        }

        .icon-newsfill:before {
            content: "\e7c3"
        }

        .icon-newshotfill:before {
            content: "\e7c4"
        }

        .icon-newshot:before {
            content: "\e7c5"
        }

        .icon-news:before {
            content: "\e7c6"
        }

        .icon-videofill:before {
            content: "\e7c7"
        }

        .icon-video:before {
            content: "\e7c8"
        }

        .icon-exit:before {
            content: "\e7cb"
        }

        .icon-skinfill:before {
            content: "\e7cc"
        }

        .icon-skin:before {
            content: "\e7cd"
        }

        .icon-moneybagfill:before {
            content: "\e7ce"
        }

        .icon-usefullfill:before {
            content: "\e7cf"
        }

        .icon-usefull:before {
            content: "\e7d0"
        }

        .icon-moneybag:before {
            content: "\e7d1"
        }

        .icon-redpacket_fill:before {
            content: "\e7d3"
        }

        .icon-subscription:before {
            content: "\e7d4"
        }

        .icon-loading1:before {
            content: "\e633"
        }

        .icon-github:before {
            content: "\e692"
        }

        .icon-global:before {
            content: "\e7eb"
        }

        .icon-settingsfill:before {
            content: "\e6ab"
        }

        .icon-back_android:before {
            content: "\e7ed"
        }

        .icon-expressman:before {
            content: "\e7ef"
        }

        .icon-evaluate_fill:before {
            content: "\e7f0"
        }

        .icon-group_fill:before {
            content: "\e7f5"
        }

        .icon-play_forward_fill:before {
            content: "\e7f6"
        }

        .icon-deliver_fill:before {
            content: "\e7f7"
        }

        .icon-notice_forbid_fill:before {
            content: "\e7f8"
        }

        .icon-fork:before {
            content: "\e60c"
        }

        .icon-pick:before {
            content: "\e7fa"
        }

        .icon-wenzi:before {
            content: "\e6a7"
        }

        .icon-ellipse:before {
            content: "\e600"
        }

        .icon-qr_code:before {
            content: "\e61b"
        }

        .icon-dianhua:before {
            content: "\e64d"
        }

        .icon-icon:before {
            content: "\e602"
        }

        .icon-loading2:before {
            content: "\e7f1"
        }

        .icon-btn:before {
            content: "\e601"
        }

        /* Simple Pro 简
 * Author 芥末
 * 2018-09-27
 */
        /* 全局变量  */
        .s-page-wrapper {
            max-width: 750 rpx
        }

        /* 含有阴影 */
        .has-shadow {
            box-shadow: 3px 5px 7px 3px rgba(29, 29, 31, .09)
        }

        /* 含有边框 */
        .has-border {
            border: 1px solid #dcdee2
        }

        .has-radius {
            border-radius: 4px
        }

        .has-break {
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap
        }

        /* 混合颜色 */
        /* 网格 */
        .is-flex {
            display: -webkit-box;
            display: -webkit-flex;
            display: flex
        }

        .is-block {
            display: block
        }

        .is-column {
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            flex-direction: column
        }

        .s-row {
            position: relative;
            margin-left: 0;
            margin-right: 0;
            height: auto;
            zoom: 1;
            display: block
        }

        .s-row::after,
        .s-row::before {
            content: "";
            display: table
        }

        .s-row::after {
            clear: both;
            visibility: hidden;
            font-size: 0;
            height: 0
        }

        .s-row-flex {
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -ms-flex-direction: row;
            -webkit-flex-direction: row;
            flex-direction: row;
            -ms-flex-wrap: wrap;
            -webkit-flex-wrap: wrap;
            flex-wrap: wrap
        }

        .s-row-flex,
        .s-row-flex::after,
        .s-row-flex::before {
            display: -webkit-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex
        }

        .s-col {
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            flex-direction: column
        }

        .is-justify-end {
            -webkit-box-pack: end;
            -webkit-justify-content: flex-end;
            justify-content: flex-end
        }

        .is-justify-center {
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            justify-content: center
        }

        .is-justify-start {
            -webkit-box-pack: start;
            -webkit-justify-content: flex-start;
            justify-content: flex-start
        }

        .is-justify-between {
            -webkit-box-pack: justify;
            -webkit-justify-content: space-between;
            justify-content: space-between
        }

        .is-justify-around {
            -webkit-justify-content: space-around;
            justify-content: space-around
        }

        .is-align-start {
            -webkit-box-align: start;
            -webkit-align-items: flex-start;
            align-items: flex-start
        }

        .is-align-center {
            -webkit-box-align: center;
            -webkit-align-items: center;
            align-items: center
        }

        .is-align-end {
            -webkit-box-align: end;
            -webkit-align-items: flex-end;
            align-items: flex-end
        }

        .is-align-stretch {
            -webkit-box-align: stretch;
            -webkit-align-items: stretch;
            align-items: stretch
        }

        .s-col {
            position: relative;
            display: block;
            box-sizing: border-box
        }

        .is-col-1,
        .is-col-2,
        .is-col-3,
        .is-col-4,
        .is-col-5,
        .is-col-6,
        .is-col-7,
        .is-col-8,
        .is-col-9,
        .is-col-10,
        .is-col-11,
        .is-col-12,
        .is-col-13,
        .is-col-14,
        .is-col-15,
        .is-col-16,
        .is-col-17,
        .is-col-18,
        .is-col-19,
        .is-col-20,
        .is-col-21,
        .is-col-22,
        .is-col-23,
        .is-col-24,
        .is-col-1-5,
        .is-col-1-8 {
            float: left;
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            -webkit-flex: 0 0 auto;
            flex: 0 0 auto
        }

        .is-col-1-5 {
            display: block;
            width: 20%
        }

        .is-push-1-5 {
            left: 20%
        }

        .is-pull-1-5 {
            right: 20%
        }

        .is-offset-1-5 {
            margin-left: 20%
        }

        .is-col-1-8 {
            display: block;
            width: 12.5%
        }

        .is-push-1-8 {
            left: 12.5%
        }

        .is-pull-1-8 {
            right: 12.5%
        }

        .is-offset-1-8 {
            margin-left: 12.5%
        }

        .is-col-24 {
            display: block;
            width: 100%
        }

        .is-push-24 {
            left: 100%
        }

        .is-pull-24 {
            right: 100%
        }

        .is-offset-24 {
            margin-left: 100%
        }

        .is-order-24 {
            -webkit-box-ordinal-group: 25;
            -ms-flex-order: 24;
            -webkit-order: 24;
            order: 24
        }

        .is-col-23 {
            display: block;
            width: 95.83333333%
        }

        .is-push-23 {
            left: 95.83333333%
        }

        .is-pull-23 {
            right: 95.83333333%
        }

        .is-offset-23 {
            margin-left: 95.83333333%
        }

        .is-order-23 {
            -webkit-box-ordinal-group: 24;
            -ms-flex-order: 23;
            -webkit-order: 23;
            order: 23
        }

        .is-col-22 {
            display: block;
            width: 91.66666667%
        }

        .is-push-22 {
            left: 91.66666667%
        }

        .is-pull-22 {
            right: 91.66666667%
        }

        .is-offset-22 {
            margin-left: 91.66666667%
        }

        .is-order-22 {
            -webkit-box-ordinal-group: 23;
            -ms-flex-order: 22;
            -webkit-order: 22;
            order: 22
        }

        .is-col-21 {
            display: block;
            width: 87.5%
        }

        .is-push-21 {
            left: 87.5%
        }

        .is-pull-21 {
            right: 87.5%
        }

        .is-offset-21 {
            margin-left: 87.5%
        }

        .is-order-21 {
            -webkit-box-ordinal-group: 22;
            -ms-flex-order: 21;
            -webkit-order: 21;
            order: 21
        }

        .is-col-20 {
            display: block;
            width: 83.33333333%
        }

        .is-push-20 {
            left: 83.33333333%
        }

        .is-pull-20 {
            right: 83.33333333%
        }

        .is-offset-20 {
            margin-left: 83.33333333%
        }

        .is-order-20 {
            -webkit-box-ordinal-group: 21;
            -ms-flex-order: 20;
            -webkit-order: 20;
            order: 20
        }

        .is-col-19 {
            display: block;
            width: 79.16666667%
        }

        .is-push-19 {
            left: 79.16666667%
        }

        .is-pull-19 {
            right: 79.16666667%
        }

        .is-offset-19 {
            margin-left: 79.16666667%
        }

        .is-order-19 {
            -webkit-box-ordinal-group: 20;
            -ms-flex-order: 19;
            -webkit-order: 19;
            order: 19
        }

        .is-col-18 {
            display: block;
            width: 75%
        }

        .is-push-18 {
            left: 75%
        }

        .is-pull-18 {
            right: 75%
        }

        .is-offset-18 {
            margin-left: 75%
        }

        .is-order-18 {
            -webkit-box-ordinal-group: 19;
            -ms-flex-order: 18;
            -webkit-order: 18;
            order: 18
        }

        .is-col-17 {
            display: block;
            width: 70.83333333%
        }

        .is-push-17 {
            left: 70.83333333%
        }

        .is-pull-17 {
            right: 70.83333333%
        }

        .is-offset-17 {
            margin-left: 70.83333333%
        }

        .is-order-17 {
            -webkit-box-ordinal-group: 18;
            -ms-flex-order: 17;
            -webkit-order: 17;
            order: 17
        }

        .is-col-16 {
            display: block;
            width: 66.66666667%
        }

        .is-push-16 {
            left: 66.66666667%
        }

        .is-pull-16 {
            right: 66.66666667%
        }

        .is-offset-16 {
            margin-left: 66.66666667%
        }

        .is-order-16 {
            -webkit-box-ordinal-group: 17;
            -ms-flex-order: 16;
            -webkit-order: 16;
            order: 16
        }

        .is-col-15 {
            display: block;
            width: 62.5%
        }

        .is-push-15 {
            left: 62.5%
        }

        .is-pull-15 {
            right: 62.5%
        }

        .is-offset-15 {
            margin-left: 62.5%
        }

        .is-order-15 {
            -webkit-box-ordinal-group: 16;
            -ms-flex-order: 15;
            -webkit-order: 15;
            order: 15
        }

        .is-col-14 {
            display: block;
            width: 58.33333333%
        }

        .is-push-14 {
            left: 58.33333333%
        }

        .is-pull-14 {
            right: 58.33333333%
        }

        .is-offset-14 {
            margin-left: 58.33333333%
        }

        .is-order-14 {
            -webkit-box-ordinal-group: 15;
            -ms-flex-order: 14;
            -webkit-order: 14;
            order: 14
        }

        .is-col-13 {
            display: block;
            width: 54.16666667%
        }

        .is-push-13 {
            left: 54.16666667%
        }

        .is-pull-13 {
            right: 54.16666667%
        }

        .is-offset-13 {
            margin-left: 54.16666667%
        }

        .is-order-13 {
            -webkit-box-ordinal-group: 14;
            -ms-flex-order: 13;
            -webkit-order: 13;
            order: 13
        }

        .is-col-12 {
            display: block;
            width: 50%
        }

        .is-push-12 {
            left: 50%
        }

        .is-pull-12 {
            right: 50%
        }

        .is-offset-12 {
            margin-left: 50%
        }

        .is-order-12 {
            -webkit-box-ordinal-group: 13;
            -ms-flex-order: 12;
            -webkit-order: 12;
            order: 12
        }

        .is-col-11 {
            display: block;
            width: 45.83333333%
        }

        .is-push-11 {
            left: 45.83333333%
        }

        .is-pull-11 {
            right: 45.83333333%
        }

        .is-offset-11 {
            margin-left: 45.83333333%
        }

        .is-order-11 {
            -webkit-box-ordinal-group: 12;
            -ms-flex-order: 11;
            -webkit-order: 11;
            order: 11
        }

        .is-col-10 {
            display: block;
            width: 41.66666667%
        }

        .is-push-10 {
            left: 41.66666667%
        }

        .is-pull-10 {
            right: 41.66666667%
        }

        .is-offset-10 {
            margin-left: 41.66666667%
        }

        .is-order-10 {
            -webkit-box-ordinal-group: 11;
            -ms-flex-order: 10;
            -webkit-order: 10;
            order: 10
        }

        .is-col-9 {
            display: block;
            width: 37.5%
        }

        .is-push-9 {
            left: 37.5%
        }

        .is-pull-9 {
            right: 37.5%
        }

        .is-offset-9 {
            margin-left: 37.5%
        }

        .is-order-9 {
            -webkit-box-ordinal-group: 10;
            -ms-flex-order: 9;
            -webkit-order: 9;
            order: 9
        }

        .is-col-8 {
            display: block;
            width: 33.33333333%
        }

        .is-push-8 {
            left: 33.33333333%
        }

        .is-pull-8 {
            right: 33.33333333%
        }

        .is-offset-8 {
            margin-left: 33.33333333%
        }

        .is-order-8 {
            -webkit-box-ordinal-group: 9;
            -ms-flex-order: 8;
            -webkit-order: 8;
            order: 8
        }

        .is-col-7 {
            display: block;
            width: 29.16666667%
        }

        .is-push-7 {
            left: 29.16666667%
        }

        .is-pull-7 {
            right: 29.16666667%
        }

        .is-offset-7 {
            margin-left: 29.16666667%
        }

        .is-order-7 {
            -webkit-box-ordinal-group: 8;
            -ms-flex-order: 7;
            -webkit-order: 7;
            order: 7
        }

        .is-col-6 {
            display: block;
            width: 25%
        }

        .is-push-6 {
            left: 25%
        }

        .is-pull-6 {
            right: 25%
        }

        .is-offset-6 {
            margin-left: 25%
        }

        .is-order-6 {
            -webkit-box-ordinal-group: 7;
            -ms-flex-order: 6;
            -webkit-order: 6;
            order: 6
        }

        .is-col-5 {
            display: block;
            width: 20.83333333%
        }

        .is-push-5 {
            left: 20.83333333%
        }

        .is-pull-5 {
            right: 20.83333333%
        }

        .is-offset-5 {
            margin-left: 20.83333333%
        }

        .is-order-5 {
            -webkit-box-ordinal-group: 6;
            -ms-flex-order: 5;
            -webkit-order: 5;
            order: 5
        }

        .is-col-4 {
            display: block;
            width: 16.66666667%
        }

        .is-push-4 {
            left: 16.66666667%
        }

        .is-pull-4 {
            right: 16.66666667%
        }

        .is-offset-4 {
            margin-left: 16.66666667%
        }

        .is-order-4 {
            -webkit-box-ordinal-group: 5;
            -ms-flex-order: 4;
            -webkit-order: 4;
            order: 4
        }

        .is-col-3 {
            display: block;
            width: 12.5%
        }

        .is-push-3 {
            left: 12.5%
        }

        .is-pull-3 {
            right: 12.5%
        }

        .is-offset-3 {
            margin-left: 12.5%
        }

        .is-order-3 {
            -webkit-box-ordinal-group: 4;
            -ms-flex-order: 3;
            -webkit-order: 3;
            order: 3
        }

        .is-col-2 {
            display: block;
            width: 8.33333333%
        }

        .is-push-2 {
            left: 8.33333333%
        }

        .is-pull-2 {
            right: 8.33333333%
        }

        .is-offset-2 {
            margin-left: 8.33333333%
        }

        .is-order-2 {
            -webkit-box-ordinal-group: 3;
            -ms-flex-order: 2;
            -webkit-order: 2;
            order: 2
        }

        .is-col-1 {
            display: block;
            width: 4.16666667%
        }

        .is-push-1 {
            left: 4.16666667%
        }

        .is-pull-1 {
            right: 4.16666667%
        }

        .is-offset-1 {
            margin-left: 4.16666667%
        }

        .is-order-1 {
            -webkit-box-ordinal-group: 2;
            -ms-flex-order: 1;
            -webkit-order: 1;
            order: 1
        }

        .is-col-0 {
            display: none
        }

        .is-push-0 {
            left: auto
        }

        .is-pull-0 {
            right: auto
        }

        /* 间隙 */
        /* 间隙 */
        .has-space-mg-1 {
            margin-left: -2 rpx !important;
            margin-right: -2 rpx !important
        }

        .has-space-pd-1 {
            padding-left: 2 rpx !important;
            padding-right: 2 rpx !important
        }

        .has-space-mg-2 {
            margin-left: -4 rpx !important;
            margin-right: -4 rpx !important
        }

        .has-space-pd-2 {
            padding-left: 4 rpx !important;
            padding-right: 4 rpx !important
        }

        .has-space-mg-3 {
            margin-left: -6 rpx !important;
            margin-right: -6 rpx !important
        }

        .has-space-pd-3 {
            padding-left: 6 rpx !important;
            padding-right: 6 rpx !important
        }

        .has-space-mg-5 {
            margin-left: -10 rpx !important;
            margin-right: -10 rpx !important
        }

        .has-space-pd-5 {
            padding-left: 10 rpx !important;
            padding-right: 10 rpx !important
        }

        .has-space-mg-7 {
            margin-left: -14 rpx !important;
            margin-right: -14 rpx !important
        }

        .has-space-pd-7 {
            padding-left: 14 rpx !important;
            padding-right: 14 rpx !important
        }

        .has-space-mg-8 {
            margin-left: -16 rpx !important;
            margin-right: -16 rpx !important
        }

        .has-space-pd-8 {
            padding-left: 16 rpx !important;
            padding-right: 16 rpx !important
        }

        .has-space-mg-10 {
            margin-left: -20 rpx !important;
            margin-right: -20 rpx !important
        }

        .has-space-pd-10 {
            padding-left: 20 rpx !important;
            padding-right: 20 rpx !important
        }

        .has-space-mg-15 {
            margin-left: -30 rpx !important;
            margin-right: -30 rpx !important
        }

        .has-space-pd-15 {
            padding-left: 30 rpx !important;
            padding-right: 30 rpx !important
        }

        .has-space-mg-20 {
            margin-left: -40 rpx !important;
            margin-right: -40 rpx !important
        }

        .has-space-pd-20 {
            padding-left: 40 rpx !important;
            padding-right: 40 rpx !important
        }

        .has-space-mg-25 {
            margin-left: -50 rpx !important;
            margin-right: -50 rpx !important
        }

        .has-space-pd-25 {
            padding-left: 50 rpx !important;
            padding-right: 50 rpx !important
        }

        .has-space-mg-30 {
            margin-left: -60 rpx !important;
            margin-right: -60 rpx !important
        }

        .has-space-pd-30 {
            padding-left: 60 rpx !important;
            padding-right: 60 rpx !important
        }

        .has-space-mg-35 {
            margin-left: -70 rpx !important;
            margin-right: -70 rpx !important
        }

        .has-space-pd-35 {
            padding-left: 70 rpx !important;
            padding-right: 70 rpx !important
        }

        .has-space-mg-40 {
            margin-left: -80 rpx !important;
            margin-right: -80 rpx !important
        }

        .has-space-pd-40 {
            padding-left: 80 rpx !important;
            padding-right: 80 rpx !important
        }

        .has-space-mg-45 {
            margin-left: -90 rpx !important;
            margin-right: -90 rpx !important
        }

        .has-space-pd-45 {
            padding-left: 90 rpx !important;
            padding-right: 90 rpx !important
        }

        .has-space-mg-50 {
            margin-left: -100 rpx !important;
            margin-right: -100 rpx !important
        }

        .has-space-pd-50 {
            padding-left: 100 rpx !important;
            padding-right: 100 rpx !important
        }

        .has-space-mg-55 {
            margin-left: -110 rpx !important;
            margin-right: -110 rpx !important
        }

        .has-space-pd-55 {
            padding-left: 110 rpx !important;
            padding-right: 110 rpx !important
        }

        .has-space-mg-60 {
            margin-left: -120 rpx !important;
            margin-right: -120 rpx !important
        }

        .has-space-pd-60 {
            padding-left: 120 rpx !important;
            padding-right: 120 rpx !important
        }

        /* 宫格 */
        .s-grids {
            position: relative;
            overflow: hidden
        }

        .is-grid:before {
            top: 0;
            width: 1px;
            border-right: 1px solid #dcdee2;
            -webkit-transform-origin: 100% 0;
            transform-origin: 100% 0;
            -webkit-transform: scaleX(.5);
            transform: scaleX(.5)
        }

        .is-grid::after,
        .is-grid::before {
            content: " ";
            position: absolute;
            right: 0;
            bottom: 0;
            color: #dcdee2
        }

        .is-grid::after {
            left: 0;
            height: 1px;
            border-bottom: 1px solid #dcdee2;
            -webkit-transform-origin: 0 100%;
            transform-origin: 0 100%;
            -webkit-transform: scaleY(.5);
            transform: scaleY(.5)
        }

        .s-grids-noborder {
            position: relative;
            overflow: hidden
        }

        .s-grids::before {
            right: 0;
            height: 1px;
            -webkit-transform-origin: 0 0;
            transform-origin: 0 0;
            -webkit-transform: scaleY(.5);
            transform: scaleY(.5)
        }

        .s-grids::after,
        .s-grids::before {
            content: " ";
            position: absolute;
            left: 0;
            top: 0;
            color: #dcdee2
        }

        .s-grids::after {
            width: 1px;
            bottom: 0;
            /* border-left: 1px solid #dcdee2; */
            -webkit-transform-origin: 0 0;
            transform-origin: 0 0;
            -webkit-transform: scaleX(.5);
            transform: scaleX(.5)
        }

        .is-grid {
            position: relative;
            float: left;
            box-sizing: border-box
        }

        .is-grid-2 {
            width: 50%
        }

        .is-grid-3 {
            width: 33.33333333%
        }

        .is-grid-4 {
            width: 25%
        }

        .is-grid-5 {
            width: 20%
        }

        /* 模拟 a 的点击效果 */
        a {
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
            text-decoration: none
        }

        .is-a {
            text-decoration: none;
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
            color: inherit
        }

        .is-a:active {
            background-color: #ececec
        }

        .has-underline {
            text-decoration: underline
        }

        .is-red {
            color: #e64340 !important
        }

        .has-bg-red {
            background-color: #e64340 !important
        }

        .is-grey {
            color: #888 !important
        }

        .has-bg-grey {
            background-color: #888 !important
        }

        .is-green {
            color: #09bb07 !important
        }

        .has-bg-green {
            background-color: #09bb07 !important
        }

        .is-blue {
            color: #2a62ff !important
        }

        .has-bg-blue {
            background-color: #2a62ff !important
        }

        .is-black {
            color: #000 !important
        }

        .has-bg-black {
            background-color: #000 !important
        }

        .is-white {
            color: #fff !important
        }

        .has-bg-white {
            background-color: #fff !important
        }

        .has-title-color {
            color: #000
        }

        .has-content-color {
            color: #353535
        }

        .has-desc-color {
            color: #888
        }

        .has-link-color {
            color: #576b95
        }

        .is-normal {
            font-weight: 400
        }

        .is-light {
            font-weight: 300
        }

        .is-bold {
            font-weight: 700 !important
        }

        .is-italic {
            font-style: italic
        }

        .is-left {
            text-align: left !important
        }

        .is-oneline {
            max-width: 100%;
            overflow: hidden;
            white-space: nowrap;
            text-overflow: ellipsis
        }

        .is-right {
            text-align: center !important
        }

        /* 字体居中 */
        .is-center {
            text-align: center !important
        }

        .is-p {
            font-size: 32 rpx;
            color: #353535;
            line-height: 2;
            margin-bottom: 30 rpx;
            text-align: justify
        }

        .is-h1,
        .is-h2,
        .is-h3,
        .is-h4,
        .is-h5,
        .is-h6 {
            color: #000;
            font-weight: 400
        }

        .is-h1 {
            font-size: 48 rpx !important
        }

        .is-h2 {
            font-size: 44 rpx !important
        }

        .is-h3 {
            font-size: 36 rpx !important
        }

        .is-h4 {
            font-size: 32 rpx !important
        }

        .is-h5 {
            font-size: 28 rpx !important
        }

        .is-h6 {
            font-size: 24 rpx !important
        }

        /* 排版容器，小程序可以不用，正文排版等，请在容器上添加此类，自动格式化 */
        .s-typo p {
            font-size: 32 rpx;
            color: #353535;
            line-height: 2;
            margin-bottom: 30 rpx;
            text-align: justify
        }

        .s-typo h1,
        .s-typo h2,
        .s-typo h3,
        .s-typo h4,
        .s-typo h5,
        .s-typo h6 {
            color: #000;
            font-weight: 400
        }

        .s-typo h1 {
            font-size: 48 rpx
        }

        .s-typo h2 {
            font-size: 44 rpx
        }

        .s-typo h3 {
            font-size: 36 rpx
        }

        .s-typo h4 {
            font-size: 32 rpx
        }

        .s-typo h5 {
            font-size: 28 rpx
        }

        .s-typo h6 {
            font-size: 24 rpx
        }

        .s-typo ol li {
            list-style-type: decimal;
            margin-left: 1rem;
            line-height: 2
        }

        .s-typo ul li {
            list-style-type: disc;
            margin-left: 1rem;
            line-height: 2
        }

        .s-typo img {
            display: inline-block;
            height: auto;
            max-width: 100%
        }

        /* 辅助类 */
        /* 页面高度 */
        .is-100vh {
            height: 100vh
        }

        .is-33vh {
            height: 33vh
        }

        .is-50vh {
            height: 50vh
        }

        .is-20vh {
            height: 20vh
        }

        /*页面宽度*/
        .is-width-30 {
            width: 30% !important
        }

        .is-width-40 {
            width: 40% !important
        }

        .is-width-50 {
            width: 50% !important
        }

        .is-width-60 {
            width: 60% !important
        }

        .is-width-70 {
            width: 70% !important
        }

        .is-width-80 {
            width: 80% !important
        }

        .is-width-90 {
            width: 90% !important
        }

        .is-width-100 {
            width: 100% !important
        }

        .is-width-100px {
            width: 200 rpx !important
        }

        .is-width-130px {
            width: 260 rpx !important
        }

        .is-width-150px {
            width: 300 rpx !important
        }

        .is-width-180px {
            width: 360 rpx !important
        }

        .is-width-200px {
            width: 400 rpx !important
        }

        .is-width-220px {
            width: 440 rpx !important
        }

        /* 图片 */
        .is-img {
            display: block
        }

        /* 图片响应式 小程序的兼容 mode='widthFix' */
        .is-response {
            display: block;
            width: 100%;
            max-width: 100%;
            height: auto
        }

        .has-floatr {
            float: right
        }

        .has-floatl {
            float: left
        }

        .is-absolute {
            position: absolute
        }

        .is-relative {
            position: relative
        }

        .is-fixed {
            position: fixed
        }

        .has-right0 {
            right: 0
        }

        .has-left0 {
            left: 0
        }

        .has-top0 {
            top: 0
        }

        .hsa-bottom0 {
            bottom: 0
        }

        /* 圆角 */
        .is-circle {
            border-radius: 50%
        }

        /* 行高 */
        .is-lh-1 {
            line-height: 1 !important
        }

        .is-lh-15 {
            line-height: 1.5 !important
        }

        .is-lh-16 {
            line-height: 1.6 !important
        }

        .is-lh-18 {
            line-height: 1.8 !important
        }

        .is-lh-2 {
            line-height: 2 !important
        }

        .is-lh-25 {
            line-height: 2.5 !important
        }

        /* 字体大小 */
        .is-size-12 {
            font-size: 24 rpx !important
        }

        .is-size-14 {
            font-family: Franklin Gothic Medium;
            font-size: 28 rpx !important;
            color: #333
        }

        .is-size-16 {
            font-size: 32 rpx !important
        }

        .is-size-17 {
            font-size: 34 rpx !important
        }

        .is-size-18 {
            font-size: 36 rpx !important
        }

        .is-size-20 {
            font-size: 40 rpx !important
        }

        .is-size-25 {
            font-size: 50 rpx !important
        }

        .is-size-30 {
            font-size: 60 rpx !important
        }

        .is-size-35 {
            font-size: 70 rpx !important
        }

        .is-size-40 {
            font-size: 80 rpx !important
        }

        .is-size-50 {
            font-size: 100 rpx !important
        }

        .is-size-60 {
            font-size: 120 rpx !important
        }

        /* 徽标 */
        .has-badge-border {
            border: 1px solid #dcdee2;
            padding: 3px 3px
        }

        .has-radius {
            border-radius: 8 rpx
        }

        .has-radius-0 {
            border-radius: 0 rpx
        }

        .has-radius-2 {
            border-radius: 4 rpx
        }

        .has-radius-top-2 {
            border-top-left-radius: 4 rpx;
            border-top-right-radius: 4 rpx
        }

        .has-radius-4 {
            border-radius: 8 rpx
        }

        .has-radius-top-4 {
            border-top-left-radius: 8 rpx;
            border-top-right-radius: 8 rpx
        }

        .has-radius-6 {
            border-radius: 12 rpx
        }

        .has-radius-8 {
            border-radius: 16 rpx
        }

        /* 1px 边框 */
        .has-borderb:before {
            border-bottom: 1px solid #dcdee2;
            content: "";
            display: block;
            width: 100%;
            position: absolute;
            left: 0;
            bottom: 0;
            -webkit-transform-origin: left bottom
        }

        @media screen and (-webkit-min-device-pixel-ratio:2) {
            .has-borderb:before {
                -webkit-transform: scaleY(.5)
            }
        }

        @media screen and (-webkit-min-device-pixel-ratio:3) {
            .has-borderb:before {
                -webkit-transform: scaleY(.3333)
            }
        }

        .has-bordert:before {
            border-top: 1px solid #dcdee2;
            content: "";
            display: block;
            width: 100%;
            position: absolute;
            left: 0;
            top: 0;
            -webkit-transform-origin: left top
        }

        @media screen and (-webkit-min-device-pixel-ratio:2) {
            .has-bordert:before {
                -webkit-transform: scaleY(.5)
            }
        }

        @media screen and (-webkit-min-device-pixel-ratio:3) {
            .has-bordert:before {
                -webkit-transform: scaleY(.3333)
            }
        }

        .has-borderl:before {
            border-left: 1px solid #dcdee2;
            content: "";
            display: block;
            bottom: 0;
            position: absolute;
            left: 0;
            top: 0;
            -webkit-transform-origin: left top
        }

        @media screen and (-webkit-min-device-pixel-ratio:2) {
            .has-borderl:before {
                -webkit-transform: scaleX(.5)
            }
        }

        @media screen and (-webkit-min-device-pixel-ratio:3) {
            .has-borderl:before {
                -webkit-transform: scaleX(.3333)
            }
        }

        .has-borderr:before {
            border-right: 1px solid #dcdee2;
            content: "";
            display: block;
            bottom: 0;
            position: absolute;
            right: 0;
            top: 0;
            -webkit-transform-origin: right top
        }

        @media screen and (-webkit-min-device-pixel-ratio:2) {
            .has-borderr:before {
                -webkit-transform: scaleX(.5)
            }
        }

        @media screen and (-webkit-min-device-pixel-ratio:3) {
            .has-borderr:before {
                -webkit-transform: scaleX(.3333)
            }
        }

        .has-bordert,
        .has-borderl,
        .has-borderb,
        .has-borderr,
        .has-bordertb,
        .has-bordera,
        .has-border-radius {
            position: relative
        }

        .has-bordertb:before {
            border-top: 1px solid #dcdee2;
            content: "";
            display: block;
            width: 100%;
            position: absolute;
            left: 0;
            top: 0;
            -webkit-transform-origin: left top
        }

        @media screen and (-webkit-min-device-pixel-ratio:2) {
            .has-bordertb:before {
                -webkit-transform: scaleY(.5)
            }
        }

        @media screen and (-webkit-min-device-pixel-ratio:3) {
            .has-bordertb:before {
                -webkit-transform: scaleY(.3333)
            }
        }

        .has-bordertb:after {
            border-bottom: 1px solid #dcdee2;
            content: "";
            display: block;
            width: 100%;
            position: absolute;
            left: 0;
            bottom: 0;
            -webkit-transform-origin: left bottom
        }

        @media screen and (-webkit-min-device-pixel-ratio:2) {
            .has-bordertb:after {
                -webkit-transform: scaleY(.5)
            }
        }

        @media screen and (-webkit-min-device-pixel-ratio:3) {
            .has-bordertb:after {
                -webkit-transform: scaleY(.3333)
            }
        }

        .has-bordera:before {
            content: "";
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
            border: 1px solid #dcdee2;
            -webkit-transform-origin: 0 0;
            padding: 1px;
            -webkit-box-sizing: border-box;
            pointer-events: none;
            z-index: 10;
            pointer-events: none
        }

        @media screen and (-webkit-min-device-pixel-ratio:2) {
            .has-bordera:before {
                width: 200%;
                height: 200%;
                -webkit-transform: scale(.5)
            }
        }

        @media screen and (-webkit-min-device-pixel-ratio:3) {
            .has-bordera:before {
                width: 300%;
                height: 300%;
                -webkit-transform: scale(.3333)
            }
        }

        .has-border-radius:before {
            content: "";
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
            border: 1px solid #dcdee2;
            -webkit-transform-origin: 0 0;
            padding: 1px;
            -webkit-box-sizing: border-box;
            border-radius: 4px;
            pointer-events: none;
            z-index: 10
        }

        @media screen and (-webkit-min-device-pixel-ratio:2) {
            .has-border-radius:before {
                width: 200%;
                height: 200%;
                -webkit-transform: scale(.5);
                border-radius: 8px
            }
        }

        @media screen and (-webkit-min-device-pixel-ratio:3) {
            .has-border-radius:before {
                width: 300%;
                height: 300%;
                -webkit-transform: scale(.3333);
                border-radius: 12px
            }
        }

        /* 浮动 */
        .has-mg-0 {
            margin: 0 rpx !important
        }

        .has-mgtb-0 {
            margin-top: 0 rpx !important;
            margin-bottom: 0 rpx !important
        }

        .has-mglr-0 {
            margin-left: 0 rpx !important;
            margin-right: 0 rpx !important
        }

        .has-pd-0 {
            padding: 0 rpx !important
        }

        .has-pdtb-0 {
            padding-top: 0 rpx !important;
            padding-bottom: 0 rpx !important
        }

        .has-pdlr-0 {
            padding-left: 0 rpx !important;
            padding-right: 0 rpx !important
        }

        .has-mgt-0 {
            margin-top: 0 rpx !important
        }

        .has-mgl-0 {
            margin-left: 0 rpx !important
        }

        .has-mgr-0 {
            margin-right: 0 rpx !important
        }

        .has-mgb-0 {
            margin-bottom: 0 rpx !important
        }

        .has-pdt-0 {
            padding-top: 0 rpx !important
        }

        .has-pdl-0 {
            padding-left: 0 rpx !important
        }

        .has-pdr-0 {
            padding-right: 0 rpx !important
        }

        .has-pdb-0 {
            padding-bottom: 0 rpx !important
        }

        .has-mg-1 {
            margin: 2 rpx !important
        }

        .has-mgtb-1 {
            margin-top: 2 rpx !important;
            margin-bottom: 2 rpx !important
        }

        .has-mglr-1 {
            margin-left: 2 rpx !important;
            margin-right: 2 rpx !important
        }

        .has-pd-1 {
            padding: 2 rpx !important
        }

        .has-pdtb-1 {
            padding-top: 2 rpx !important;
            padding-bottom: 2 rpx !important
        }

        .has-pdlr-1 {
            padding-left: 2 rpx !important;
            padding-right: 2 rpx !important
        }

        .has-mgt-1 {
            margin-top: 2 rpx !important
        }

        .has-mgl-1 {
            margin-left: 2 rpx !important
        }

        .has-mgr-1 {
            margin-right: 2 rpx !important
        }

        .has-mgb-1 {
            margin-bottom: 2 rpx !important
        }

        .has-pdt-1 {
            padding-top: 2 rpx !important
        }

        .has-pdl-1 {
            padding-left: 2 rpx !important
        }

        .has-pdr-1 {
            padding-right: 2 rpx !important
        }

        .has-pdb-1 {
            padding-bottom: 2 rpx !important
        }

        .has-mg-2 {
            margin: 4 rpx !important
        }

        .has-mgtb-2 {
            margin-top: 4 rpx !important;
            margin-bottom: 4 rpx !important
        }

        .has-mglr-2 {
            margin-left: 4 rpx !important;
            margin-right: 4 rpx !important
        }

        .has-pd-2 {
            padding: 4 rpx !important
        }

        .has-pdtb-2 {
            padding-top: 4 rpx !important;
            padding-bottom: 4 rpx !important
        }

        .has-pdlr-2 {
            padding-left: 4 rpx !important;
            padding-right: 4 rpx !important
        }

        .has-mgt-2 {
            margin-top: 4 rpx !important
        }

        .has-mgl-2 {
            margin-left: 4 rpx !important
        }

        .has-mgr-2 {
            margin-right: 4 rpx !important
        }

        .has-mgb-2 {
            margin-bottom: 4 rpx !important
        }

        .has-pdt-2 {
            padding-top: 4 rpx !important
        }

        .has-pdl-2 {
            padding-left: 4 rpx !important
        }

        .has-pdr-2 {
            padding-right: 4 rpx !important
        }

        .has-pdb-2 {
            padding-bottom: 4 rpx !important
        }

        .has-mg-3 {
            margin: 6 rpx !important
        }

        .has-mgtb-3 {
            margin-top: 6 rpx !important;
            margin-bottom: 6 rpx !important
        }

        .has-mglr-3 {
            margin-left: 6 rpx !important;
            margin-right: 6 rpx !important
        }

        .has-pd-3 {
            padding: 6 rpx !important
        }

        .has-pdtb-3 {
            padding-top: 6 rpx !important;
            padding-bottom: 6 rpx !important
        }

        .has-pdlr-3 {
            padding-left: 6 rpx !important;
            padding-right: 6 rpx !important
        }

        .has-mgt-3 {
            margin-top: 6 rpx !important
        }

        .has-mgl-3 {
            margin-left: 6 rpx !important
        }

        .has-mgr-3 {
            margin-right: 6 rpx !important
        }

        .has-mgb-3 {
            margin-bottom: 6 rpx !important
        }

        .has-pdt-3 {
            padding-top: 6 rpx !important
        }

        .has-pdl-3 {
            padding-left: 6 rpx !important
        }

        .has-pdr-3 {
            padding-right: 6 rpx !important
        }

        .has-pdb-3 {
            padding-bottom: 6 rpx !important
        }

        .has-mg-4 {
            margin: 8 rpx !important
        }

        .has-mgtb-4 {
            margin-top: 8 rpx !important;
            margin-bottom: 8 rpx !important
        }

        .has-mglr-4 {
            margin-left: 8 rpx !important;
            margin-right: 8 rpx !important
        }

        .has-pd-4 {
            padding: 8 rpx !important
        }

        .has-pdtb-4 {
            padding-top: 8 rpx !important;
            padding-bottom: 8 rpx !important
        }

        .has-pdlr-4 {
            padding-left: 8 rpx !important;
            padding-right: 8 rpx !important
        }

        .has-mgt-4 {
            margin-top: 8 rpx !important
        }

        .has-mgl-4 {
            margin-left: 8 rpx !important
        }

        .has-mgr-4 {
            margin-right: 8 rpx !important
        }

        .has-mgb-4 {
            margin-bottom: 8 rpx !important
        }

        .has-pdt-4 {
            padding-top: 8 rpx !important
        }

        .has-pdl-4 {
            padding-left: 8 rpx !important
        }

        .has-pdr-4 {
            padding-right: 8 rpx !important
        }

        .has-pdb-4 {
            padding-bottom: 8 rpx !important
        }

        .has-mg-5 {
            margin: 10 rpx !important
        }

        .has-mgtb-5 {
            margin-top: 10 rpx !important;
            margin-bottom: 10 rpx !important
        }

        .has-mglr-5 {
            margin-left: 10 rpx !important;
            margin-right: 10 rpx !important
        }

        .has-pd-5 {
            padding: 10 rpx !important
        }

        .has-pdtb-5 {
            padding-top: 10 rpx !important;
            padding-bottom: 10 rpx !important
        }

        .has-pdlr-5 {
            padding-left: 10 rpx !important;
            padding-right: 10 rpx !important
        }

        .has-mgt-5 {
            margin-top: 10 rpx !important
        }

        .has-mgl-5 {
            margin-left: 10 rpx !important
        }

        .has-mgr-5 {
            margin-right: 10 rpx !important
        }

        .has-mgb-5 {
            margin-bottom: 10 rpx !important
        }

        .has-pdt-5 {
            padding-top: 10 rpx !important
        }

        .has-pdl-5 {
            padding-left: 10 rpx !important
        }

        .has-pdr-5 {
            padding-right: 10 rpx !important
        }

        .has-pdb-5 {
            padding-bottom: 10 rpx !important
        }

        .has-mg-6 {
            margin: 12 rpx !important
        }

        .has-mgtb-6 {
            margin-top: 12 rpx !important;
            margin-bottom: 12 rpx !important
        }

        .has-mglr-6 {
            margin-left: 12 rpx !important;
            margin-right: 12 rpx !important
        }

        .has-pd-6 {
            padding: 12 rpx !important
        }

        .has-pdtb-6 {
            padding-top: 12 rpx !important;
            padding-bottom: 12 rpx !important
        }

        .has-pdlr-6 {
            padding-left: 12 rpx !important;
            padding-right: 12 rpx !important
        }

        .has-mgt-6 {
            margin-top: 12 rpx !important
        }

        .has-mgl-6 {
            margin-left: 12 rpx !important
        }

        .has-mgr-6 {
            margin-right: 12 rpx !important
        }

        .has-mgb-6 {
            margin-bottom: 12 rpx !important
        }

        .has-pdt-6 {
            padding-top: 12 rpx !important
        }

        .has-pdl-6 {
            padding-left: 12 rpx !important
        }

        .has-pdr-6 {
            padding-right: 12 rpx !important
        }

        .has-pdb-6 {
            padding-bottom: 12 rpx !important
        }

        .has-mg-7 {
            margin: 14 rpx !important
        }

        .has-mgtb-7 {
            margin-top: 14 rpx !important;
            margin-bottom: 14 rpx !important
        }

        .has-mglr-7 {
            margin-left: 14 rpx !important;
            margin-right: 14 rpx !important
        }

        .has-pd-7 {
            padding: 14 rpx !important
        }

        .has-pdtb-7 {
            padding-top: 14 rpx !important;
            padding-bottom: 14 rpx !important
        }

        .has-pdlr-7 {
            padding-left: 14 rpx !important;
            padding-right: 14 rpx !important
        }

        .has-mgt-7 {
            margin-top: 14 rpx !important
        }

        .has-mgl-7 {
            margin-left: 14 rpx !important
        }

        .has-mgr-7 {
            margin-right: 14 rpx !important
        }

        .has-mgb-7 {
            margin-bottom: 14 rpx !important
        }

        .has-pdt-7 {
            padding-top: 14 rpx !important
        }

        .has-pdl-7 {
            padding-left: 14 rpx !important
        }

        .has-pdr-7 {
            padding-right: 14 rpx !important
        }

        .has-pdb-7 {
            padding-bottom: 14 rpx !important
        }

        .has-mg-8 {
            margin: 16 rpx !important
        }

        .has-mgtb-8 {
            margin-top: 16 rpx !important;
            margin-bottom: 16 rpx !important
        }

        .has-mglr-8 {
            margin-left: 16 rpx !important;
            margin-right: 16 rpx !important
        }

        .has-pd-8 {
            padding: 16 rpx !important
        }

        .has-pdtb-8 {
            padding-top: 16 rpx !important;
            padding-bottom: 16 rpx !important
        }

        .has-pdlr-8 {
            padding-left: 16 rpx !important;
            padding-right: 16 rpx !important
        }

        .has-mgt-8 {
            margin-top: 16 rpx !important
        }

        .has-mgl-8 {
            margin-left: 16 rpx !important
        }

        .has-mgr-8 {
            margin-right: 16 rpx !important
        }

        .has-mgb-8 {
            margin-bottom: 16 rpx !important
        }

        .has-pdt-8 {
            padding-top: 16 rpx !important
        }

        .has-pdl-8 {
            padding-left: 16 rpx !important
        }

        .has-pdr-8 {
            padding-right: 16 rpx !important
        }

        .has-pdb-8 {
            padding-bottom: 16 rpx !important
        }

        .has-mg-10 {
            margin: 20 rpx !important
        }

        .has-mgtb-10 {
            margin-top: 20 rpx !important;
            margin-bottom: 20 rpx !important
        }

        .has-mglr-10 {
            margin-left: 20 rpx !important;
            margin-right: 20 rpx !important
        }

        .has-pd-10 {
            padding: 20 rpx !important
        }

        .has-pdtb-10 {
            padding-top: 20 rpx !important;
            padding-bottom: 20 rpx !important
        }

        .has-pdlr-10 {
            padding-left: 20 rpx !important;
            padding-right: 20 rpx !important
        }

        .has-mgt-10 {
            margin-top: 20 rpx !important
        }

        .has-mgl-10 {
            margin-left: 20 rpx !important
        }

        .has-mgr-10 {
            margin-right: 20 rpx !important
        }

        .has-mgb-10 {
            margin-bottom: 20 rpx !important
        }

        .has-pdt-10 {
            padding-top: 20 rpx !important
        }

        .has-pdl-10 {
            padding-left: 20 rpx !important
        }

        .has-pdr-10 {
            padding-right: 20 rpx !important
        }

        .has-pdb-10 {
            padding-bottom: 20 rpx !important
        }

        .has-mg-12 {
            margin: 24 rpx !important
        }

        .has-mgtb-12 {
            margin-top: 24 rpx !important;
            margin-bottom: 24 rpx !important
        }

        .has-mglr-12 {
            margin-left: 24 rpx !important;
            margin-right: 24 rpx !important
        }

        .has-pd-12 {
            padding: 24 rpx !important
        }

        .has-pdtb-12 {
            padding-top: 24 rpx !important;
            padding-bottom: 24 rpx !important
        }

        .has-pdlr-12 {
            padding-left: 24 rpx !important;
            padding-right: 24 rpx !important
        }

        .has-mgt-12 {
            margin-top: 24 rpx !important
        }

        .has-mgl-12 {
            margin-left: 24 rpx !important
        }

        .has-mgr-12 {
            margin-right: 24 rpx !important
        }

        .has-mgb-12 {
            margin-bottom: 24 rpx !important
        }

        .has-pdt-12 {
            padding-top: 24 rpx !important
        }

        .has-pdl-12 {
            padding-left: 24 rpx !important
        }

        .has-pdr-12 {
            padding-right: 24 rpx !important
        }

        .has-pdb-12 {
            padding-bottom: 24 rpx !important
        }

        .has-mg-15 {
            margin: 30 rpx !important
        }

        .has-mgtb-15 {
            margin-top: 30 rpx !important;
            margin-bottom: 30 rpx !important
        }

        .has-mglr-15 {
            margin-left: 30 rpx !important;
            margin-right: 30 rpx !important
        }

        .has-pd-15 {
            padding: 30 rpx !important
        }

        .has-pdtb-15 {
            padding-top: 30 rpx !important;
            padding-bottom: 30 rpx !important
        }

        .has-pdlr-15 {
            padding-left: 30 rpx !important;
            padding-right: 30 rpx !important
        }

        .has-mgt-15 {
            margin-top: 30 rpx !important
        }

        .has-mgl-15 {
            margin-left: 30 rpx !important
        }

        .has-mgr-15 {
            margin-right: 30 rpx !important
        }

        .has-mgb-15 {
            margin-bottom: 30 rpx !important
        }

        .has-pdt-15 {
            padding-top: 30 rpx !important
        }

        .has-pdl-15 {
            padding-left: 30 rpx !important
        }

        .has-pdr-15 {
            padding-right: 30 rpx !important
        }

        .has-pdb-15 {
            padding-bottom: 30 rpx !important
        }

        .has-mg-18 {
            margin: 36 rpx !important
        }

        .has-mgtb-18 {
            margin-top: 36 rpx !important;
            margin-bottom: 36 rpx !important
        }

        .has-mglr-18 {
            margin-left: 36 rpx !important;
            margin-right: 36 rpx !important
        }

        .has-pd-18 {
            padding: 36 rpx !important
        }

        .has-pdtb-18 {
            padding-top: 36 rpx !important;
            padding-bottom: 36 rpx !important
        }

        .has-pdlr-18 {
            padding-left: 36 rpx !important;
            padding-right: 36 rpx !important
        }

        .has-mgt-18 {
            margin-top: 36 rpx !important
        }

        .has-mgl-18 {
            margin-left: 36 rpx !important
        }

        .has-mgr-18 {
            margin-right: 36 rpx !important
        }

        .has-mgb-18 {
            margin-bottom: 36 rpx !important
        }

        .has-pdt-18 {
            padding-top: 36 rpx !important
        }

        .has-pdl-18 {
            padding-left: 36 rpx !important
        }

        .has-pdr-18 {
            padding-right: 36 rpx !important
        }

        .has-pdb-18 {
            padding-bottom: 36 rpx !important
        }

        .has-mg-20 {
            margin: 40 rpx !important
        }

        .has-mgtb-20 {
            margin-top: 40 rpx !important;
            margin-bottom: 40 rpx !important
        }

        .has-mglr-20 {
            margin-left: 40 rpx !important;
            margin-right: 40 rpx !important
        }

        .has-pd-20 {
            padding: 40 rpx !important
        }

        .has-pdtb-20 {
            padding-top: 40 rpx !important;
            padding-bottom: 40 rpx !important
        }

        .has-pdlr-20 {
            padding-left: 40 rpx !important;
            padding-right: 40 rpx !important
        }

        .has-mgt-20 {
            margin-top: 40 rpx !important
        }

        .has-mgl-20 {
            margin-left: 40 rpx !important
        }

        .has-mgr-20 {
            margin-right: 40 rpx !important
        }

        .has-mgb-20 {
            margin-bottom: 40 rpx !important
        }

        .has-pdt-20 {
            padding-top: 40 rpx !important
        }

        .has-pdl-20 {
            padding-left: 40 rpx !important
        }

        .has-pdr-20 {
            padding-right: 40 rpx !important
        }

        .has-pdb-20 {
            padding-bottom: 40 rpx !important
        }

        .has-mg-25 {
            margin: 50 rpx !important
        }

        .has-mgtb-25 {
            margin-top: 50 rpx !important;
            margin-bottom: 50 rpx !important
        }

        .has-mglr-25 {
            margin-left: 50 rpx !important;
            margin-right: 50 rpx !important
        }

        .has-pd-25 {
            padding: 50 rpx !important
        }

        .has-pdtb-25 {
            padding-top: 50 rpx !important;
            padding-bottom: 50 rpx !important
        }

        .has-pdlr-25 {
            padding-left: 50 rpx !important;
            padding-right: 50 rpx !important
        }

        .has-mgt-25 {
            margin-top: 50 rpx !important
        }

        .has-mgl-25 {
            margin-left: 50 rpx !important
        }

        .has-mgr-25 {
            margin-right: 50 rpx !important
        }

        .has-mgb-25 {
            margin-bottom: 50 rpx !important
        }

        .has-pdt-25 {
            padding-top: 50 rpx !important
        }

        .has-pdl-25 {
            padding-left: 50 rpx !important
        }

        .has-pdr-25 {
            padding-right: 50 rpx !important
        }

        .has-pdb-25 {
            padding-bottom: 50 rpx !important
        }

        .has-mg-30 {
            margin: 60 rpx !important
        }

        .has-mgtb-30 {
            margin-top: 60 rpx !important;
            margin-bottom: 60 rpx !important
        }

        .has-mglr-30 {
            margin-left: 60 rpx !important;
            margin-right: 60 rpx !important
        }

        .has-pd-30 {
            padding: 60 rpx !important
        }

        .has-pdtb-30 {
            padding-top: 60 rpx !important;
            padding-bottom: 60 rpx !important
        }

        .has-pdlr-30 {
            padding-left: 60 rpx !important;
            padding-right: 60 rpx !important
        }

        .has-mgt-30 {
            margin-top: 60 rpx !important
        }

        .has-mgl-30 {
            margin-left: 60 rpx !important
        }

        .has-mgr-30 {
            margin-right: 60 rpx !important
        }

        .has-mgb-30 {
            margin-bottom: 60 rpx !important
        }

        .has-pdt-30 {
            padding-top: 60 rpx !important
        }

        .has-pdl-30 {
            padding-left: 60 rpx !important
        }

        .has-pdr-30 {
            padding-right: 60 rpx !important
        }

        .has-pdb-30 {
            padding-bottom: 60 rpx !important
        }

        .has-mg-35 {
            margin: 70 rpx !important
        }

        .has-mgtb-35 {
            margin-top: 70 rpx !important;
            margin-bottom: 70 rpx !important
        }

        .has-mglr-35 {
            margin-left: 70 rpx !important;
            margin-right: 70 rpx !important
        }

        .has-pd-35 {
            padding: 70 rpx !important
        }

        .has-pdtb-35 {
            padding-top: 70 rpx !important;
            padding-bottom: 70 rpx !important
        }

        .has-pdlr-35 {
            padding-left: 70 rpx !important;
            padding-right: 70 rpx !important
        }

        .has-mgt-35 {
            margin-top: 70 rpx !important
        }

        .has-mgl-35 {
            margin-left: 70 rpx !important
        }

        .has-mgr-35 {
            margin-right: 70 rpx !important
        }

        .has-mgb-35 {
            margin-bottom: 70 rpx !important
        }

        .has-pdt-35 {
            padding-top: 70 rpx !important
        }

        .has-pdl-35 {
            padding-left: 70 rpx !important
        }

        .has-pdr-35 {
            padding-right: 70 rpx !important
        }

        .has-pdb-35 {
            padding-bottom: 70 rpx !important
        }

        .has-mg-40 {
            margin: 80 rpx !important
        }

        .has-mgtb-40 {
            margin-top: 80 rpx !important;
            margin-bottom: 80 rpx !important
        }

        .has-mglr-40 {
            margin-left: 80 rpx !important;
            margin-right: 80 rpx !important
        }

        .has-pd-40 {
            padding: 80 rpx !important
        }

        .has-pdtb-40 {
            padding-top: 80 rpx !important;
            padding-bottom: 80 rpx !important
        }

        .has-pdlr-40 {
            padding-left: 80 rpx !important;
            padding-right: 80 rpx !important
        }

        .has-mgt-40 {
            margin-top: 80 rpx !important
        }

        .has-mgl-40 {
            margin-left: 80 rpx !important
        }

        .has-mgr-40 {
            margin-right: 80 rpx !important
        }

        .has-mgb-40 {
            margin-bottom: 80 rpx !important
        }

        .has-pdt-40 {
            padding-top: 80 rpx !important
        }

        .has-pdl-40 {
            padding-left: 80 rpx !important
        }

        .has-pdr-40 {
            padding-right: 80 rpx !important
        }

        .has-pdb-40 {
            padding-bottom: 80 rpx !important
        }

        .has-mg-45 {
            margin: 90 rpx !important
        }

        .has-mgtb-45 {
            margin-top: 90 rpx !important;
            margin-bottom: 90 rpx !important
        }

        .has-mglr-45 {
            margin-left: 90 rpx !important;
            margin-right: 90 rpx !important
        }

        .has-pd-45 {
            padding: 90 rpx !important
        }

        .has-pdtb-45 {
            padding-top: 90 rpx !important;
            padding-bottom: 90 rpx !important
        }

        .has-pdlr-45 {
            padding-left: 90 rpx !important;
            padding-right: 90 rpx !important
        }

        .has-mgt-45 {
            margin-top: 90 rpx !important
        }

        .has-mgl-45 {
            margin-left: 90 rpx !important
        }

        .has-mgr-45 {
            margin-right: 90 rpx !important
        }

        .has-mgb-45 {
            margin-bottom: 90 rpx !important
        }

        .has-pdt-45 {
            padding-top: 90 rpx !important
        }

        .has-pdl-45 {
            padding-left: 90 rpx !important
        }

        .has-pdr-45 {
            padding-right: 90 rpx !important
        }

        .has-pdb-45 {
            padding-bottom: 90 rpx !important
        }

        .has-mg-50 {
            margin: 100 rpx !important
        }

        .has-mgtb-50 {
            margin-top: 100 rpx !important;
            margin-bottom: 100 rpx !important
        }

        .has-mglr-50 {
            margin-left: 100 rpx !important;
            margin-right: 100 rpx !important
        }

        .has-pd-50 {
            padding: 100 rpx !important
        }

        .has-pdtb-50 {
            padding-top: 100 rpx !important;
            padding-bottom: 100 rpx !important
        }

        .has-pdlr-50 {
            padding-left: 100 rpx !important;
            padding-right: 100 rpx !important
        }

        .has-mgt-50 {
            margin-top: 100 rpx !important
        }

        .has-mgl-50 {
            margin-left: 100 rpx !important
        }

        .has-mgr-50 {
            margin-right: 100 rpx !important
        }

        .has-mgb-50 {
            margin-bottom: 100 rpx !important
        }

        .has-pdt-50 {
            padding-top: 100 rpx !important
        }

        .has-pdl-50 {
            padding-left: 100 rpx !important
        }

        .has-pdr-50 {
            padding-right: 100 rpx !important
        }

        .has-pdb-50 {
            padding-bottom: 100 rpx !important
        }

        .has-mg-55 {
            margin: 110 rpx !important
        }

        .has-mgtb-55 {
            margin-top: 110 rpx !important;
            margin-bottom: 110 rpx !important
        }

        .has-mglr-55 {
            margin-left: 110 rpx !important;
            margin-right: 110 rpx !important
        }

        .has-pd-55 {
            padding: 110 rpx !important
        }

        .has-pdtb-55 {
            padding-top: 110 rpx !important;
            padding-bottom: 110 rpx !important
        }

        .has-pdlr-55 {
            padding-left: 110 rpx !important;
            padding-right: 110 rpx !important
        }

        .has-mgt-55 {
            margin-top: 110 rpx !important
        }

        .has-mgl-55 {
            margin-left: 110 rpx !important
        }

        .has-mgr-55 {
            margin-right: 110 rpx !important
        }

        .has-mgb-55 {
            margin-bottom: 110 rpx !important
        }

        .has-pdt-55 {
            padding-top: 110 rpx !important
        }

        .has-pdl-55 {
            padding-left: 110 rpx !important
        }

        .has-pdr-55 {
            padding-right: 110 rpx !important
        }

        .has-pdb-55 {
            padding-bottom: 110 rpx !important
        }

        .has-mg-60 {
            margin: 120 rpx !important
        }

        .has-mgtb-60 {
            margin-top: 120 rpx !important;
            margin-bottom: 120 rpx !important
        }

        .has-mglr-60 {
            margin-left: 120 rpx !important;
            margin-right: 120 rpx !important
        }

        .has-pd-60 {
            padding: 120 rpx !important
        }

        .has-pdtb-60 {
            padding-top: 120 rpx !important;
            padding-bottom: 120 rpx !important
        }

        .has-pdlr-60 {
            padding-left: 120 rpx !important;
            padding-right: 120 rpx !important
        }

        .has-mgt-60 {
            margin-top: 120 rpx !important
        }

        .has-mgl-60 {
            margin-left: 120 rpx !important
        }

        .has-mgr-60 {
            margin-right: 120 rpx !important
        }

        .has-mgb-60 {
            margin-bottom: 120 rpx !important
        }

        .has-pdt-60 {
            padding-top: 120 rpx !important
        }

        .has-pdl-60 {
            padding-left: 120 rpx !important
        }

        .has-pdr-60 {
            padding-right: 120 rpx !important
        }

        .has-pdb-60 {
            padding-bottom: 120 rpx !important
        }

        /* 按钮  */
        .is-btn,
        .is-btn-lg,
        .is-btn-md {
            position: relative;
            text-align: center;
            background-color: #fff;
            vertical-align: top;
            color: #000;
            -webkit-box-sizing: border-box;
            -webkit-background-clip: padding-box;
            background-clip: padding-box;
            border: 1px solid #dcdee2;
            border-radius: 6 rpx;
            text-decoration: none
        }

        .is-btn:not(.disabled):not(:disabled):active,
        .is-btn.active,
        .is-btn-lg:not(.disabled):not(:disabled):active,
        .is-btn-lg.active,
        .is-btn-md:not(.disabled):not(:disabled):active,
        .is-btn-md.active {
            background-color: #f0f0f0;
            -webkit-background-clip: padding-box;
            background-clip: padding-box;
            border-color: #dcdee2
        }

        .is-btn.disabled,
        .is-btn:disabled,
        .is-btn-lg.disabled,
        .is-btn-lg:disabled,
        .is-btn-md.disabled,
        .is-btn-md:disabled {
            border: 0;
            color: #bbb;
            background: #e9ebec;
            -webkit-background-clip: padding-box;
            background-clip: padding-box
        }

        .is-btn {
            height: 60 rpx;
            line-height: 60 rpx;
            padding: 0 rpx 32 rpx;
            display: block;
            text-align: center;
            font-size: 28 rpx;
            border-radius: 4 rpx;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            overflow: hidden
        }

        .is-btn-md {
            display: block;
            text-align: center;
            width: 280 rpx;
            height: 80 rpx;
            line-height: 80 rpx;
            font-size: 34 rpx;
            border-radius: 6 rpx;
            margin: auto;
            margin-bottom: 30 rpx
        }

        .is-btn-lg {
            font-size: 34 rpx;
            height: 80 rpx;
            line-height: 80 rpx;
            display: block;
            text-align: center;
            width: 100%;
            border-radius: 6 rpx;
            margin-bottom: 30 rpx
        }

        .has-btn-radius {
            border-radius: 50px
        }

        .has-bg-green {
            border: 0;
            background-color: #09bb07;
            color: #fff;
            -webkit-background-clip: padding-box;
            background-clip: padding-box
        }

        .has-bg-green:not(.disabled):not(:disabled):active,
        .has-bg-green.active {
            background: #179b16 !important;
            color: hsla(0, 0%, 100%, .6) !important;
            -webkit-background-clip: padding-box;
            background-clip: padding-box
        }

        .has-bg-blue {
            border: 0;
            background-color: #2a62ff;
            color: #fff;
            -webkit-background-clip: padding-box;
            background-clip: padding-box;
            box-shadow: 0 2px 6px #71b6f7
        }

        .has-bg-blue:not(.disabled):not(:disabled):active,
        .has-bg-blue.active {
            background: #0e80d2 !important;
            color: hsla(0, 0%, 100%, .6) !important;
            -webkit-background-clip: padding-box;
            background-clip: padding-box;
            box-shadow: 0 2px 6px #71b6f7
        }

        .has-bg-red {
            border: 0;
            background-color: #e64340;
            color: #fff;
            -webkit-background-clip: padding-box;
            background-clip: padding-box;
            box-shadow: 0 2px 6px #ffa299
        }

        .has-bg-red:not(.disabled):not(:disabled):active,
        .has-bg-red.active {
            background: #ce3c39 !important;
            color: hsla(0, 0%, 100%, .6) !important;
            -webkit-background-clip: padding-box;
            background-clip: padding-box;
            box-shadow: 0 2px 6px #ffa299
        }

        /* 列表 */
        .s-list-title {
            margin-bottom: -24 rpx;
            padding-left: 30 rpx;
            padding-right: 30 rpx;
            color: #888;
            font-size: 28 rpx;
            margin-top: 30 rpx
        }

        .s-list {
            margin-top: 40 rpx;
            background-color: #fff;
            line-height: 1.47058824;
            font-size: 32 rpx;
            overflow: hidden;
            position: relative
        }

        .s-list:before {
            top: 0;
            border-top: 1px solid #dcdee2;
            -webkit-transform-origin: 0 0;
            transform-origin: 0 0;
            -webkit-transform: scaleY(.5);
            transform: scaleY(.5)
        }

        .s-list:after,
        .s-list:before {
            content: " ";
            position: absolute;
            left: 0;
            right: 0;
            height: 1px;
            color: #dcdee2;
            z-index: 2
        }

        .s-list:after {
            bottom: 0;
            border-bottom: 1px solid #dcdee2;
            -webkit-transform-origin: 0 100%;
            transform-origin: 0 100%;
            -webkit-transform: scaleY(.5);
            transform: scaleY(.5)
        }

        .is-item-line {
            padding: 20 rpx 30 rpx;
            position: relative;
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            align-items: center;
            text-decoration: none;
            color: #353535;
            -webkit-tap-highlight-color: transparent
        }

        .is-item-line:before {
            content: " ";
            position: absolute;
            left: 0;
            top: 0;
            right: 0;
            height: 1px;
            border-top: 1px solid #dcdee2;
            color: #dcdee2;
            -webkit-transform-origin: 0 0;
            transform-origin: 0 0;
            -webkit-transform: scaleY(.5);
            transform: scaleY(.5);
            z-index: 2
        }

        .is-item,
        .is-item-line {
            padding: 20 rpx 30 rpx;
            position: relative;
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            align-items: center;
            text-decoration: none;
            color: #353535;
            -webkit-tap-highlight-color: transparent
        }

        .is-item.has-right-icon .is-item-ft,
        .is-item-line.has-right-icon .is-item-ft {
            padding-right: 26 rpx;
            position: relative
        }

        .is-item.has-right-icon .is-item-ft:after,
        .is-item-line.has-right-icon .is-item-ft:after {
            content: " ";
            display: inline-block;
            height: 12 rpx;
            width: 12 rpx;
            border-width: 4 rpx 4 rpx 0 0;
            border-color: #c8c8cd;
            border-style: solid;
            -webkit-transform: matrix(.71, .71, -.71, .71, 0, 0);
            transform: matrix(.71, .71, -.71, .71, 0, 0);
            position: relative;
            top: -4 rpx;
            position: absolute;
            top: 50%;
            margin-top: -8 rpx;
            right: 4 rpx
        }

        .is-item:before {
            content: " ";
            position: absolute;
            left: 0;
            top: 0;
            right: 0;
            height: 1px;
            border-top: 1px solid #dcdee2;
            color: #dcdee2;
            -webkit-transform-origin: 0 0;
            transform-origin: 0 0;
            -webkit-transform: scaleY(.5);
            transform: scaleY(.5);
            left: 30 rpx;
            z-index: 2
        }

        .is-item:first-child:before,
        .is-item-line:first-child:before {
            display: none !important
        }

        .is-item-bd {
            -webkit-box-flex: 1;
            -webkit-flex: 1;
            flex: 1
        }

        .is-item-ft {
            text-align: right;
            font-size: 28 rpx;
            color: #888
        }

        .is-bd-subline {
            font-size: 28 rpx;
            color: #888
        }

        .s-list2-title {
            padding-left: 30 rpx;
            padding-right: 30 rpx;
            color: #888;
            font-size: 28 rpx;
            margin-top: 30 rpx;
            margin-bottom: 18 rpx
        }

        .s-list2 {
            background-color: #fff;
            width: 100%
        }

        .is-item2 {
            position: relative;
            padding-left: 24 rpx;
            display: -webkit-box;
            display: -webkit-flex;
            display: flex
        }

        .is-list2-info {
            -webkit-box-flex: 1;
            -webkit-flex: 1;
            flex: 1;
            padding-top: 16 rpx;
            padding-bottom: 16 rpx;
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            flex-direction: column;
            padding-right: 24 rpx
        }

        .is-list2-link .has-list2-tip {
            padding-right: 50 rpx
        }

        .is-list2-img {
            margin: 16 rpx 24 rpx 16 rpx 0 rpx
        }

        .is-item2.is-list2-link:after {
            content: " ";
            display: inline-block;
            height: 16 rpx;
            width: 16 rpx;
            border-width: 4 rpx 4 rpx 0 0;
            border-color: #c8c8cd;
            border-style: solid;
            -webkit-transform: matrix(.71, .71, -.71, .71, 0, 0);
            transform: matrix(.71, .71, -.71, .71, 0, 0);
            position: relative;
            top: -4 rpx;
            position: absolute;
            top: 50%;
            margin-top: -14 rpx;
            right: 24 rpx
        }

        .s-list2 .is-item2:first-child .has-bordert:before {
            border: none
        }

        .has-list2-tip {
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -webkit-flex-direction: row;
            flex-direction: row;
            -webkit-box-pack: justify;
            -webkit-justify-content: space-between;
            justify-content: space-between
        }

        .is-list2-tip {
            color: #888;
            font-size: 28 rpx
        }

        .s-divide {
            height: 1px;
            text-align: center
        }

        .s-divide .is-divide-otext {
            position: relative;
            top: -24 rpx;
            padding: 0 40 rpx
        }

        /* 顶部 底部菜单 */
        .flex-sub {
            -webkit-box-flex: 1;
            -webkit-flex: 1;
            flex: 1
        }

        .simple-bar {
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            position: relative;
            -webkit-box-align: center;
            -webkit-align-items: center;
            align-items: center;
            background: #fff;
            height: 100 rpx;
            -webkit-box-pack: justify;
            -webkit-justify-content: space-between;
            justify-content: space-between
        }

        .simple-bar .action {
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            align-items: center;
            height: 100%;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            max-width: 100%
        }

        .simple-bar .action:first-child {
            margin-left: 30 rpx;
            font-size: 30 rpx
        }

        .simple-bar .action uni-text.text-cut {
            text-align: left;
            width: 100%
        }

        .simple-bar .avatar:first-child {
            margin-left: 20 rpx
        }

        .simple-bar .action:first-child>uni-text[class*="icon"] {
            margin-left: -.3em;
            margin-right: .3em
        }

        .simple-bar .action:last-child {
            margin-right: 30 rpx
        }

        .simple-bar .action>uni-text[class*="icon"] {
            font-size: 36 rpx
        }

        .simple-bar .action>uni-text[class*="icon"]+uni-text[class*="icon"] {
            margin-left: .5em
        }

        .simple-bar .content {
            position: absolute;
            text-align: center;
            width: 400 rpx;
            left: 0;
            right: 0;
            bottom: 16 rpx;
            margin: auto;
            height: 60 rpx;
            font-size: 36 rpx;
            line-height: 60 rpx;
            cursor: none;
            pointer-events: none;
            text-overflow: ellipsis;
            white-space: nowrap;
            overflow: hidden
        }

        .simple-bar.btn-group {
            -webkit-justify-content: space-around;
            justify-content: space-around
        }

        .simple-bar.btn-group uni-button {
            padding: 20 rpx 32 rpx
        }

        .simple-bar.btn-group uni-button {
            -webkit-box-flex: 1;
            -webkit-flex: 1;
            flex: 1;
            margin: 0 20 rpx;
            max-width: 50%
        }

        .modal-box {
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 1110;
            opacity: 0;
            outline: 0;
            text-align: center;
            -ms-transform: scale(1.185);
            -webkit-transform: scale(1.185);
            transform: scale(1.185);
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            -webkit-perspective: 2000 rpx;
            perspective: 2000 rpx;
            background: rgba(0, 0, 0, .6);
            -webkit-transition: all .6s ease-in-out 0;
            transition: all .6s ease-in-out 0;
            pointer-events: none
        }

        .modal-box::before {
            content: "\200B";
            display: inline-block;
            height: 100%;
            vertical-align: middle
        }

        .modal-box.show {
            opacity: 1;
            -webkit-transition-duration: .3s;
            transition-duration: .3s;
            -ms-transform: scale(1);
            -webkit-transform: scale(1);
            transform: scale(1);
            overflow-x: hidden;
            overflow-y: auto;
            pointer-events: auto
        }

        .dialog {
            position: relative;
            display: inline-block;
            vertical-align: middle;
            margin-left: auto;
            margin-right: auto;
            width: 680 rpx;
            max-width: 100%;
            background: #fff;
            border-radius: 8px
        }

        .modal-box.bottom-modal::before {
            vertical-align: bottom
        }

        .modal-box.bottom-modal .dialog {
            width: 100%;
            border-radius: 0
        }

        .modal-box.bottom-modal {
            margin-bottom: -1000 rpx
        }

        .modal-box.bottom-modal.show {
            margin-bottom: 0
        }

        .bg-img {
            background-size: cover;
            background-position: 50%;
            background-repeat: no-repeat
        }

        .shadow-blur {
            position: relative
        }

        .shadow-blur::before {
            content: "";
            display: block;
            background: inherit;
            -webkit-filter: blur(10 rpx);
            filter: blur(10 rpx);
            position: absolute;
            width: 100%;
            height: 100%;
            top: 10 rpx;
            left: 10 rpx;
            z-index: -1;
            opacity: .4;
            -webkit-transform-origin: 0 0;
            transform-origin: 0 0;
            border-radius: inherit;
            -webkit-transform: scale(1);
            transform: scale(1)
        }

        uni-swiper.square-dot .wx-swiper-dot {
            background: #fff;
            opacity: .4;
            width: 10 rpx !important;
            height: 10 rpx !important;
            border-radius: 20 rpx !important;
            -webkit-transition: all .3s ease-in-out 0s !important;
            transition: all .3s ease-in-out 0s !important
        }

        uni-swiper.square-dot .wx-swiper-dot.wx-swiper-dot-active {
            opacity: 1;
            width: 30 rpx !important
        }

        uni-swiper.round-dot .wx-swiper-dot {
            /* background: #32b16c; */
            width: 10 rpx !important;
            height: 10 rpx !important;
            top: -4 rpx !important;
            -webkit-transition: all .3s ease-in-out 0s !important;
            transition: all .3s ease-in-out 0s !important;
            position: relative
        }

        uni-swiper.round-dot .wx-swiper-dot.wx-swiper-dot-active::after {
            content: "";
            position: absolute;
            width: 10 rpx;
            height: 10 rpx;
            top: 0 rpx;
            left: 0 rpx;
            right: 0;
            bottom: 0;
            margin: auto;
            background: #fff;
            border-radius: 20 rpx
        }

        uni-swiper.round-dot .wx-swiper-dot.wx-swiper-dot-active {
            width: 18 rpx !important;
            height: 18 rpx !important;
            top: 0 rpx !important
        }

        .screen-swiper {
            min-height: 375 rpx
        }

        .screen-swiper uni-image {
            width: 100%;
            display: block;
            height: 100%;
            margin: 0
        }

        .simple-card-swiper {
            height: 420 rpx
        }

        .simple-card-swiper uni-swiper-item {
            width: 610 rpx !important;
            left: 70 rpx !important;
            box-sizing: border-box;
            padding: 40 rpx 0 rpx 70 rpx;
            overflow: initial !important
        }

        .simple-card-swiper uni-swiper-item .bg-img {
            width: 100%;
            display: block;
            height: 100%;
            border-radius: 10 rpx;
            -webkit-transform: scale(.9);
            transform: scale(.9);
            -webkit-transition: all .2s ease-in 0s;
            transition: all .2s ease-in 0s
        }

        .simple-card-swiper uni-swiper-item.cur .bg-img {
            -webkit-transform: none;
            transform: none;
            -webkit-transition: all .2s ease-in 0s;
            transition: all .2s ease-in 0s
        }

        .tower-swiper {
            height: 420 rpx;
            position: relative
        }

        .tower-swiper .tower-item {
            position: absolute;
            width: 300 rpx;
            height: 380 rpx;
            top: 0;
            bottom: 0;
            left: 50%;
            margin: auto;
            -webkit-transition: all .3s ease-in 0s;
            transition: all .3s ease-in 0s;
            opacity: 1
        }

        .tower-swiper .tower-item.none {
            opacity: 0
        }

        .tower-swiper .tower-item .bg-img {
            width: 100%;
            height: 100%;
            border-radius: 6 rpx
        }

        .simple-load {
            display: block;
            line-height: 3em;
            text-align: center
        }

        .simple-load::before {
            font-family: simplepro !important;
            display: inline-block;
            margin-right: 6 rpx
        }

        .simple-load.loading::before {
            content: "\e67a";
            -webkit-animation: icon-spin 2s infinite linear;
            animation: icon-spin 2s infinite linear
        }

        .simple-load.loading::after {
            content: "加载中..."
        }

        .simple-load.over::before {
            content: "\e64a"
        }

        .simple-load.over::after {
            content: "没有更多了"
        }

        .simple-load.erro::before {
            content: "\e658"
        }

        .simple-load.erro::after {
            content: "加载失败"
        }

        .simple-load.load-icon::before {
            font-size: 32 rpx
        }

        .simple-load.load-icon::after {
            display: none
        }

        .simple-load.load-icon.over {
            display: none
        }

        .simple-load.load-modal {
            position: fixed;
            top: 0;
            right: 0;
            bottom: 140 rpx;
            left: 0;
            margin: auto;
            width: 260 rpx;
            height: 260 rpx;
            background: #fff;
            border-radius: 10 rpx;
            box-shadow: 0 0 0 rpx 2000 rpx rgba(0, 0, 0, .5);
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            align-items: center;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            flex-direction: column;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            font-size: 28 rpx;
            z-index: 999999;
            line-height: 2.4em
        }

        .simple-load.load-modal [class*="icon"] {
            font-size: 60 rpx
        }

        .simple-load.load-modal uni-image {
            width: 70 rpx;
            height: 70 rpx
        }

        .simple-load.load-modal::after {
            content: "";
            position: absolute;
            background: #fff;
            border-radius: 50%;
            width: 200 rpx;
            height: 200 rpx;
            font-size: 10px;
            border-top: 6 rpx solid rgba(0, 0, 0, .05);
            border-right: 6 rpx solid rgba(0, 0, 0, .05);
            border-bottom: 6 rpx solid rgba(0, 0, 0, .05);
            border-left: 6 rpx solid #f37b1d;
            -webkit-animation: icon-spin 1s infinite linear;
            animation: icon-spin 1s infinite linear;
            z-index: -1
        }

        .load-progress {
            pointer-events: none;
            top: 0;
            position: fixed;
            width: 100%;
            left: 0;
            z-index: 2000
        }

        .load-progress.hide {
            display: none
        }

        .load-progress .load-progress-bar {
            position: relative;
            width: 100%;
            height: 4 rpx;
            overflow: hidden;
            -webkit-transition: all .2s ease 0s;
            transition: all .2s ease 0s
        }

        .load-progress .load-progress-spinner {
            position: absolute;
            top: 10 rpx;
            right: 10 rpx;
            z-index: 2000;
            display: block
        }

        .load-progress .load-progress-spinner::after {
            content: "";
            display: block;
            width: 24 rpx;
            height: 24 rpx;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            border: solid 4 rpx transparent;
            border-top-color: inherit;
            border-left-color: inherit;
            border-radius: 50%;
            -webkit-animation: load-progress-spinner .4s linear infinite;
            animation: load-progress-spinner .4s linear infinite
        }

        @-webkit-keyframes load-progress-spinner {
            0% {
                -webkit-transform: rotate(0);
                transform: rotate(0)
            }

            100% {
                -webkit-transform: rotate(1turn);
                transform: rotate(1turn)
            }
        }

        @keyframes load-progress-spinner {
            0% {
                -webkit-transform: rotate(0);
                transform: rotate(0)
            }

            100% {
                -webkit-transform: rotate(1turn);
                transform: rotate(1turn)
            }
        }

        .cu-list.menu {
            display: block;
            overflow: hidden
        }

        .cu-list+.cu-list {
            margin-top: 30 rpx
        }

        .cu-list.menu>.cu-item {
            position: relative;
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            -webkit-box-pack: justify;
            -webkit-justify-content: space-between;
            justify-content: space-between;
            -webkit-box-align: center;
            -webkit-align-items: center;
            align-items: center;
            min-height: 100 rpx;
            background: #fff;
            padding: 0 30 rpx
        }

        .cu-list.menu>.cu-item::after {
            content: " ";
            width: 200%;
            height: 200%;
            position: absolute;
            top: 0;
            left: 0;
            border-radius: inherit;
            -webkit-transform: scale(.5);
            transform: scale(.5);
            -webkit-transform-origin: 0 0;
            transform-origin: 0 0;
            pointer-events: none;
            box-sizing: border-box;
            border-bottom: 1 rpx solid #ddd
        }

        .cu-list.menu.sm-border>.cu-item::after {
            width: calc(200% - 62px);
            left: 30 rpx
        }

        .cu-list.menu>.cu-item:last-child::after {
            border: none
        }

        .cu-list.menu>.cu-item.cur {
            background-color: #fcf7e9
        }

        .cu-list.menu-avatar>.cu-item {
            padding-left: 140 rpx
        }

        .cu-list.menu-avatar>.cu-item .cu-avatar {
            left: 30 rpx
        }

        .cu-list.menu>.cu-item .content {
            line-height: 1.6em;
            -webkit-box-flex: 1;
            -webkit-flex: 1;
            flex: 1;
            font-size: 30 rpx
        }

        .cu-list.menu>.cu-item uni-button.content {
            padding: 0;
            -webkit-box-pack: start;
            -webkit-justify-content: flex-start;
            justify-content: flex-start;
            background-color: initial
        }

        .cu-list.menu>.cu-item uni-button.content::after {
            display: none
        }

        .cu-list.menu>.cu-item .content>uni-text[class*="icon"] {
            margin-right: 10 rpx;
            display: inline-block;
            width: 1.6em;
            text-align: center
        }

        .cu-list.menu>.cu-item .content>uni-image {
            margin-right: 10 rpx;
            display: inline-block;
            width: 1.6em;
            height: 1.6em;
            vertical-align: middle
        }

        .cu-list.menu-avatar>.cu-item .action {
            text-align: center
        }

        .cu-list.menu-avatar>.cu-item .action uni-view+uni-view {
            margin-top: 10 rpx
        }

        .cu-list.menu>.cu-item .action .cu-tag:empty {
            right: 10 rpx
        }

        .cu-list.menu>.cu-item.arrow {
            padding-right: 90 rpx
        }

        .cu-list.menu>.cu-item.arrow::before {
            font-family: simplepro !important;
            display: block;
            content: "\e6a3";
            position: absolute;
            font-size: 34 rpx;
            color: #aaa;
            line-height: 30 rpx;
            height: 30 rpx;
            width: 30 rpx;
            text-align: center;
            top: 0 rpx;
            bottom: 0;
            right: 30 rpx;
            margin: auto
        }

        .cu-list.menu>.cu-item .cu-avatar-group .cu-avatar {
            border-color: #fff
        }

        .cu-list.card-menu {
            margin-left: 30 rpx;
            margin-right: 30 rpx;
            border-radius: 20 rpx;
            overflow: hidden
        }

        .cu-list.menu-avatar>.cu-item {
            padding-left: 140 rpx;
            height: 140 rpx
        }

        .cu-list.menu-avatar>.cu-item>.cu-avatar {
            position: absolute;
            left: 30 rpx
        }

        .cu-list.menu-avatar.comment>.cu-item {
            height: auto;
            padding-top: 30 rpx;
            padding-bottom: 30 rpx;
            padding-left: 120 rpx
        }

        .cu-list.menu-avatar.comment .cu-avatar {
            -webkit-align-self: flex-start;
            align-self: flex-start
        }

        .cu-list.menu>.cu-item .content .cu-tag.sm {
            font-size: 16 rpx;
            line-height: 80%;
            padding: 8 rpx 6 rpx 4 rpx;
            margin-top: -6 rpx
        }

        .cu-list.grid {
            text-align: center;
            background: #fff
        }

        .cu-list.grid>.cu-item {
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            flex-direction: column;
            padding: 20 rpx 0 30 rpx;
            position: relative;
            -webkit-transition-duration: 0s;
            transition-duration: 0s
        }

        .cu-list.grid>.cu-item [class*="icon"] {
            display: block;
            width: 100%;
            position: relative;
            font-size: 48 rpx;
            margin-top: 20 rpx
        }

        .cu-list.grid>.cu-item uni-text {
            display: block;
            color: #888;
            margin-top: 10 rpx;
            line-height: 40 rpx;
            font-size: 26 rpx
        }

        .cu-list.grid>.cu-item .cu-tag {
            left: 50%;
            right: auto;
            margin-left: 20 rpx
        }

        .cu-list.grid>.cu-item::after {
            content: " ";
            width: 200%;
            height: 200%;
            position: absolute;
            top: 0;
            left: 0;
            border-radius: inherit;
            -webkit-transform: scale(.5);
            transform: scale(.5);
            -webkit-transform-origin: 0 0;
            transform-origin: 0 0;
            pointer-events: none;
            box-sizing: border-box;
            border-right: 1px solid rgba(0, 0, 0, .1);
            border-bottom: 1px solid rgba(0, 0, 0, .1)
        }

        .cu-list.grid.col-3>.cu-item:nth-child(3n)::after {
            border-right-width: 0
        }

        .cu-list.grid.col-4>.cu-item:nth-child(4n)::after {
            border-right-width: 0
        }

        .cu-list.grid.col-5>.cu-item:nth-child(5n)::after {
            border-right-width: 0
        }

        .cu-list.grid.no-border {
            padding: 20 rpx 10 rpx
        }

        .cu-list.grid.no-border>.cu-item {
            padding-top: 10 rpx;
            padding-bottom: 20 rpx
        }

        .cu-list.grid.no-border>.cu-item::after {
            border: none !important
        }

        .cu-list>.cu-item {
            -webkit-transform: translateX(0 rpx);
            transform: translateX(0 rpx);
            -webkit-transition: all .6s ease-in-out 0s;
            transition: all .6s ease-in-out 0s
        }

        .cu-list>.cu-item .move {
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            width: 260 rpx;
            height: 100%;
            position: absolute;
            right: 0;
            -webkit-transform: translateX(100%);
            transform: translateX(100%)
        }

        .cu-list>.cu-item.move-cur {
            -webkit-transform: translateX(-260 rpx);
            transform: translateX(-260 rpx)
        }

        .cu-list>.cu-item .move uni-view {
            -webkit-box-flex: 1;
            -webkit-flex: 1;
            flex: 1;
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-box-align: center;
            -webkit-align-items: center;
            align-items: center
        }

        .nav-list {
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            -webkit-flex-wrap: wrap;
            flex-wrap: wrap;
            padding: 0 2px 0;
            /*width:  900upx */
            position: center;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            justify-content: center
        }

        .nav-li {
            padding: 5px;
            border-radius: 6px;
            width: 46%;
            margin: 5px 5px;
            /*上下左右 */
            background-size: contain;
            background-position: 50%;
            position: relative;
            z-index: 1
        }

        .nav-li::after {
            content: "";
            position: absolute;
            z-index: -1;
            background-color: inherit;
            width: 100%;
            height: 100%;
            left: 0;
            bottom: -10%;
            border-radius: 5px;
            opacity: .2;
            -webkit-transform: scale(.9);
            transform: scale(.9)
        }

        .nav-li.cur {
            color: #fff;
            background: #5eb95e;
            box-shadow: 2px 2px 3px rgba(94, 185, 94, .4)
        }

        .nav-title {
            font-size: 16px;
            font-weight: 300
        }

        .nav-title::first-letter {
            font-size: 20px;
            margin-right: 2px
        }

        .nav-name {
            font-size: 14px;
            text-transform: Capitalize;
            margin-top: 10px;
            position: relative
        }

        .nav-name::before {
            content: "";
            position: absolute;
            display: block;
            width: 20px;
            height: 3px;
            background: #fff;
            bottom: 0;
            right: 0;
            opacity: .5
        }

        .nav-name::after {
            content: "";
            position: absolute;
            display: block;
            width: 52px;
            height: 1px;
            background: #fff;
            bottom: 0;
            right: 20px;
            opacity: .3
        }

        .nav-name::first-letter {
            font-weight: 700;
            font-size: 18px;
            margin-right: 1px
        }

        .nav-li uni-text {
            position: absolute;
            right: 15px;
            top: 15px;
            font-size: 27px;
            width: 31px;
            height: 31px;
            text-align: center;
            line-height: 31px
        }

        .text-light {
            font-weight: 300
        }

        uni-tabbar .uni-tabbar__icon {
            width: 20px;
            height: 20px
        }

        @keyframes show {
            0% {
                -webkit-transform: translateY(-50px);
                transform: translateY(-50px)
            }

            60% {
                -webkit-transform: translateY(20px);
                transform: translateY(20px)
            }

            100% {
                -webkit-transform: translateY(0);
                transform: translateY(0)
            }
        }

        @-webkit-keyframes show {
            0% {
                -webkit-transform: translateY(-50px);
                transform: translateY(-50px)
            }

            60% {
                -webkit-transform: translateY(20px);
                transform: translateY(20px)
            }

            100% {
                -webkit-transform: translateY(0);
                transform: translateY(0)
            }
        }
    </style>
    <style type="text/css">
        .content[data-v-1f700c9a] {
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
            justify-content: center
        }

        .logo[data-v-1f700c9a] {
            height: 104px;
            width: 104px;
            margin-top: 104px;
            margin-left: auto;
            margin-right: auto;
            margin-bottom: 26px
        }

        .text-area[data-v-1f700c9a] {
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            justify-content: center
        }

        /*Welcome Back*/
        .title[data-v-1f700c9a] {
            margin-top: 10px;
            font-size: 18px;
            color: #00f
        }

        /*Quality Guarantee*/
        .title2[data-v-1f700c9a] {
            margin-top: 2px;
            font-size: 10px;
            color: grey
        }

        .screen-swiper[data-v-1f700c9a] {
            margin-top: 7px
        }

        .nav-list[data-v-1f700c9a] {
            margin-top: 13px
        }

        .product-money[data-v-1f700c9a] {
            color: #f37b1d
        }

        .product-name[data-v-1f700c9a] {
            font-size: 11px;
            text-align: center
        }

        .product-item[data-v-1f700c9a] {
            /* width: 250rpx; */
            /* height: 250rpx; */
        }
    </style>
    <style type="text/css">
        @charset "UTF-8";

        /**
 * 这里是uni-app内置的常用样式变量
 *
 * uni-app 官方扩展插件及插件市场（https://ext.dcloud.net.cn）上很多三方插件均使用了这些样式变量
 * 如果你是插件开发者，建议你使用scss预处理，并在插件代码中直接使用这些变量（无需 import 这个文件），方便用户通过搭积木的方式开发整体风格一致的App
 *
 */
        /**
 * 如果你是App开发者（插件使用者），你可以通过修改这些变量来定制自己的插件主题，实现自定义主题功能
 *
 * 如果你的项目同样使用了scss预处理，你也可以直接在你的 scss 代码中使用如下变量，同时无需 import 这个文件
 */
        /* 颜色变量 */
        /* 行为相关颜色 */
        /* 文字基本颜色 */
        /* 背景颜色 */
        /* 边框颜色 */
        /* 尺寸变量 */
        /* 文字尺寸 */
        /* 图片尺寸 */
        /* Border Radius */
        /* 水平间距 */
        /* 垂直间距 */
        /* 透明度 */
        /* 文章场景相关 */
        .serach[data-v-38b6b902] {
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            width: 100%;
            box-sizing: border-box;
            font-size: 14px
        }

        .serach .content[data-v-38b6b902] {
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            align-items: center;
            width: 100%;
            height: 36px;
            background: #fff;
            overflow: hidden;
            -webkit-transition: all .2s linear;
            transition: all .2s linear;
            border-radius: 30px
        }

        .serach .content .content-box[data-v-38b6b902] {
            width: 100%;
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            align-items: center
        }

        .serach .content .content-box.center[data-v-38b6b902] {
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            justify-content: center
        }

        .serach .content .content-box .icon[data-v-38b6b902] {
            padding: 0 7px
        }

        .serach .content .content-box .icon.icon-del[data-v-38b6b902] {
            font-size: 19px
        }

        .serach .content .content-box .icon.icon-del[data-v-38b6b902]:before {
            content: "\e644"
        }

        .serach .content .content-box .icon.icon-serach[data-v-38b6b902]:before {
            content: "\e61c"
        }

        .serach .content .content-box .input[data-v-38b6b902] {
            width: 100%;
            max-width: 100%;
            line-height: 31px;
            height: 31px;
            -webkit-transition: all .2s linear;
            transition: all .2s linear
        }

        .serach .content .content-box .input.center[data-v-38b6b902] {
            width: 157px
        }

        .serach .content .content-box .input.sub[data-v-38b6b902] {
            width: auto;
            color: grey
        }

        .serach .content .serachBtn[data-v-38b6b902] {
            height: 100%;
            -webkit-flex-shrink: 0;
            flex-shrink: 0;
            padding: 0 15px;
            background: -webkit-linear-gradient(left, #ff9801, #ff570a);
            background: linear-gradient(90deg, #ff9801, #ff570a);
            line-height: 31px;
            color: #fff;
            -webkit-transition: all .3s;
            transition: all .3s
        }

        .serach .button[data-v-38b6b902] {
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            align-items: center;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            position: relative;
            -webkit-flex-shrink: 0;
            flex-shrink: 0;
            width: 0;
            -webkit-transition: all .2s linear;
            transition: all .2s linear;
            white-space: nowrap;
            overflow: hidden
        }

        .serach .button.active[data-v-38b6b902] {
            padding-left: 7px;
            width: 52px
        }

        @font-face {
            font-family: iconfont;
            src: url("data:application/x-font-woff;charset=utf-8;base64,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")
        }

        .icon[data-v-38b6b902] {
            font-family: iconfont;
            font-size: 16px;
            font-style: normal;
            color: #999
        }
    </style>
    <style type="text/css">
        .content[data-v-43d18a05] {
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
            justify-content: center
        }

        .search-box[data-v-43d18a05] {
            width: 100%;
            background-color: #f2f2f2;
            padding: 10px 2.5%;
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            -webkit-box-pack: justify;
            -webkit-justify-content: space-between;
            justify-content: space-between;
            position: -webkit-sticky;
            position: sticky;
            top: 0;
            z-index: 10
        }

        .search-box .mSearch-input-box[data-v-43d18a05] {
            width: 100%
        }

        .search-box .input-box[data-v-43d18a05] {
            width: 85%;
            -webkit-flex-shrink: 1;
            flex-shrink: 1;
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-box-align: center;
            -webkit-align-items: center;
            align-items: center
        }

        .search-box .search-btn[data-v-43d18a05] {
            width: 15%;
            margin: 0 0 0 2%;
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-box-align: center;
            -webkit-align-items: center;
            align-items: center;
            -webkit-flex-shrink: 0;
            flex-shrink: 0;
            font-size: 14px;
            color: #fff;
            background: -webkit-linear-gradient(left, #ff9801, #ff570a);
            background: linear-gradient(90deg, #ff9801, #ff570a);
            border-radius: 31px
        }

        .search-box .input-box>uni-input[data-v-43d18a05] {
            width: 100%;
            height: 31px;
            font-size: 16px;
            border: 0;
            border-radius: 31px;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            padding: 0 3%;
            margin: 0;
            background-color: #fff
        }

        .placeholder-class[data-v-43d18a05] {
            color: #9e9e9e
        }

        .search-keyword[data-v-43d18a05] {
            width: 100%;
            background-color: #f2f2f2
        }

        .keyword-list-box[data-v-43d18a05] {
            height: calc(100vh - 57px);
            padding-top: 5px;
            border-radius: 10px 10px 0 0;
            background-color: #fff
        }

        .keyword-entry-tap[data-v-43d18a05] {
            background-color: #eee
        }

        .keyword-entry[data-v-43d18a05] {
            width: 94%;
            height: 41px;
            margin: 0 3%;
            font-size: 15px;
            color: #333;
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            -webkit-box-pack: justify;
            -webkit-justify-content: space-between;
            justify-content: space-between;
            -webkit-box-align: center;
            -webkit-align-items: center;
            align-items: center;
            border-bottom: solid 1px #e7e7e7
        }

        .keyword-entry uni-image[data-v-43d18a05] {
            width: 31px;
            height: 31px
        }

        .keyword-entry .keyword-text[data-v-43d18a05],
        .keyword-entry .keyword-img[data-v-43d18a05] {
            height: 41px;
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            align-items: center
        }

        .keyword-entry .keyword-text[data-v-43d18a05] {
            width: 90%
        }

        .keyword-entry .keyword-img[data-v-43d18a05] {
            width: 10%;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            justify-content: center
        }

        .keyword-box[data-v-43d18a05] {
            height: calc(100vh - 57px);
            border-radius: 10px 10px 0 0;
            background-color: #fff
        }

        .keyword-box .keyword-block[data-v-43d18a05] {
            padding: 5px 0
        }

        .keyword-box .keyword-block .keyword-list-header[data-v-43d18a05] {
            width: 94%;
            padding: 5px 3%;
            font-size: 14px;
            color: #333;
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            -webkit-box-pack: justify;
            -webkit-justify-content: space-between;
            justify-content: space-between
        }

        .keyword-box .keyword-block .keyword-list-header uni-image[data-v-43d18a05] {
            width: 20px;
            height: 20px
        }

        .keyword-box .keyword-block .keyword[data-v-43d18a05] {
            width: 94%;
            padding: 3px 3%;
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            -webkit-flex-flow: wrap;
            flex-flow: wrap;
            -webkit-box-pack: start;
            -webkit-justify-content: flex-start;
            justify-content: flex-start
        }

        .keyword-box .keyword-block .hide-hot-tis[data-v-43d18a05] {
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            font-size: 14px;
            color: #6b6b6b
        }

        .keyword-box .keyword-block .keyword>uni-view[data-v-43d18a05] {
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-box-align: center;
            -webkit-align-items: center;
            align-items: center;
            border-radius: 31px;
            padding: 0 10px;
            margin: 5px 10px 5px 0;
            height: 31px;
            font-size: 14px;
            background-color: #f2f2f2;
            color: #6b6b6b
        }

        .nav-list[data-v-43d18a05] {
            margin-top: 13px
        }

        .product-money[data-v-43d18a05] {
            color: #f37b1d
        }

        .product-name[data-v-43d18a05] {
            font-size: 11px;
            text-align: center
        }

        .my-header-height[data-v-43d18a05] {
            min-height: 29px;
            height: calc(29px + env(safe-area-inset-bottom) / 2)
        }
    </style>
    <style type="text/css">
        .my-loading-block[data-v-46ab16a2] {
            position: relative;
            border: 0px;
            display: -webkit-inline-box;
            display: -webkit-inline-flex;
            display: inline-flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            align-items: center;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            box-sizing: border-box;
            padding: 0 15px;
            font-size: 14px;
            height: 15px;
            width: 100%;
            line-height: 1;
            text-align: center;
            text-decoration: none;
            overflow: visible;
            margin-left: 0;
            -webkit-transform: translate(0px, 0px);
            transform: translate(0px, 0px);
            margin-right: 0
        }
    </style>
    <style type="text/css">
        .my-arrow[data-v-372233a8] {
            position: absolute;
            /*相对父节点 绝对位置*/
            right: 15px
        }

        .my-btn-prepay[data-v-372233a8] {
            position: absolute;
            /*相对父节点 绝对位置*/
            right: 15px;
            bottom: 10px;
            font-size: 1em
        }

        .user-info-box[data-v-372233a8] {
            /* height: 100px; */
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            align-items: center;
            position: relative;
            z-index: 1
        }

        .username[data-v-372233a8] {
            font-size: 13px;
            /* color: #f2f2f2; */
            margin-top: 8px;
            margin-left: 2px
        }

        .my-space-x[data-v-372233a8] {
            margin-right: 10px
        }

        .my-space-y[data-v-372233a8] {
            margin-top: 5px
        }
    </style>
    <style type="text/css">
        @charset "UTF-8";

        /**
 * 这里是uni-app内置的常用样式变量
 *
 * uni-app 官方扩展插件及插件市场（https://ext.dcloud.net.cn）上很多三方插件均使用了这些样式变量
 * 如果你是插件开发者，建议你使用scss预处理，并在插件代码中直接使用这些变量（无需 import 这个文件），方便用户通过搭积木的方式开发整体风格一致的App
 *
 */
        /**
 * 如果你是App开发者（插件使用者），你可以通过修改这些变量来定制自己的插件主题，实现自定义主题功能
 *
 * 如果你的项目同样使用了scss预处理，你也可以直接在你的 scss 代码中使用如下变量，同时无需 import 这个文件
 */
        /* 颜色变量 */
        /* 行为相关颜色 */
        /* 文字基本颜色 */
        /* 背景颜色 */
        /* 边框颜色 */
        /* 尺寸变量 */
        /* 文字尺寸 */
        /* 图片尺寸 */
        /* Border Radius */
        /* 水平间距 */
        /* 垂直间距 */
        /* 透明度 */
        /* 文章场景相关 */
        .uni-numbox[data-v-9d9b8ed0] {
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -webkit-flex-direction: row;
            flex-direction: row;
            height: 35px;
            line-height: 35px;
            width: 140px
        }

        .uni-numbox__value[data-v-9d9b8ed0] {
            background-color: #fff;
            width: 100px;
            height: 35px;
            text-align: center;
            font-size: 16px;
            border-width: 1px;
            border-style: solid;
            border-color: #c8c7cc;
            border-left-width: 0;
            border-right-width: 0
        }

        .uni-numbox__minus[data-v-9d9b8ed0] {
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -webkit-flex-direction: row;
            flex-direction: row;
            -webkit-box-align: center;
            -webkit-align-items: center;
            align-items: center;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            width: 48px;
            height: 35px;
            font-size: 20px;
            color: #333;
            background-color: #f8f8f8;
            border-width: 1px;
            border-style: solid;
            border-color: #c8c7cc;
            border-top-left-radius: 3px;
            border-bottom-left-radius: 3px;
            border-right-width: 0
        }

        .uni-numbox__plus[data-v-9d9b8ed0] {
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -webkit-flex-direction: row;
            flex-direction: row;
            -webkit-box-align: center;
            -webkit-align-items: center;
            align-items: center;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            width: 48px;
            height: 35px;
            border-width: 1px;
            border-style: solid;
            border-color: #c8c7cc;
            border-top-right-radius: 3px;
            border-bottom-right-radius: 3px;
            background-color: #f8f8f8;
            border-left-width: 0
        }

        .uni-numbox--text[data-v-9d9b8ed0] {
            font-size: 20px;
            color: #333
        }

        .uni-numbox--disabled[data-v-9d9b8ed0] {
            color: silver
        }
    </style>
    <style type="text/css">
        .content[data-v-91f724d0] {
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
            justify-content: center
        }

        .my-textsize-balance[data-v-91f724d0] {
            font-size: 16px
        }

        .my-textsize[data-v-91f724d0] {
            font-size: 12px
        }

        .padding-xl[data-v-91f724d0] {
            padding: 10px
        }

        .my-text[data-v-91f724d0] {
            position: absolute;
            /*相对父节点 绝对位置*/
            right: 26px;
            top: 104px
        }

        .my-btn-num[data-v-91f724d0] {
            width: 68px;
            font-size: 12px;
            color: #fff;
            background-color: #009970;
            /* background-image: linear-gradient(to bottom right, purple, red); */
            /* background-image :url('/static/ic_notify.png'); */
            margin-bottom: 10px
        }

        .my-btn-num[disabled][data-v-91f724d0] {
            opacity: .5;
            background-color: #555
        }

        .my-btn-num.shadow-blur[data-v-91f724d0]::before {
            top: 2px;
            left: 2px;
            -webkit-filter: blur(3px);
            filter: blur(3px);
            opacity: .6
        }

        .my-btn-num.button-hover[data-v-91f724d0] {
            -webkit-transform: translate(1px, 1px);
            transform: translate(1px, 1px)
        }

        .my-lottery-info[data-v-91f724d0] {
            position: absolute;
            /*相对父节点 绝对位置*/
            right: 15px
        }

        .my-lottery-time[data-v-91f724d0] {
            position: absolute;
            /*相对父节点 绝对位置*/
            right: 15px;
            font-size: 2em
        }

        .my-record-view[data-v-91f724d0] {
            margin-top: -20px
        }

        .my-next-line[data-v-91f724d0] {
            display: block
        }

        .my-line-height[data-v-91f724d0] {
            height: 2px
        }

        .my-space-x[data-v-91f724d0] {
            margin-right: 10px
        }

        .my-record-color[data-v-91f724d0] {
            /* width: 50upx; */
            padding-left: 52px
        }

        .my-header-height[data-v-91f724d0] {
            min-height: 12px;
            height: calc(12px + env(safe-area-inset-bottom) / 2)
        }
    </style>
    <style type="text/css">
        .mix-tree-list[data-v-0f3e59c5] {
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            flex-direction: column;
            padding-left: 15px
        }

        .mix-tree-item[data-v-0f3e59c5] {
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            align-items: center;
            font-size: 15px;
            color: #333;
            height: 0;
            opacity: 0;
            -webkit-transition: .2s;
            transition: .2s;
            position: relative
        }

        .mix-tree-item.border[data-v-0f3e59c5] {
            border-bottom: 1px solid #e2e2e2
        }

        .mix-tree-item.show[data-v-0f3e59c5] {
            height: 41px;
            opacity: 1
        }

        .mix-tree-icon[data-v-0f3e59c5] {
            width: 13px;
            height: 13px;
            margin-right: 4px;
            opacity: .9
        }

        .mix-tree-icon2[data-v-0f3e59c5] {
            width: 13px;
            height: 13px;
            margin-right: 4px;
            opacity: .9
        }

        .mix-tree-icon2[data-v-0f3e59c5]:before {
            /* margin-right: 8upx; */
            color: #901ffd
        }

        .mix-tree-icon2[data-v-0f3e59c5]:after {
            /* margin-right: 8upx; */
            color: #ce3c39
        }

        .mix-tree-icon3[data-v-0f3e59c5] {
            position: absolute;
            right: 20px
        }

        .mix-tree-item.showchild[data-v-0f3e59c5]:before {
            /* transform: rotate(90deg); */
            color: #901ffd
        }
    </style>
    <style type="text/css">
        .btn-logout[data-v-3ff3c467] {
            width: 209px
        }

        .padding-xl[data-v-3ff3c467] {
            padding: 10px
        }

        .starimg[data-v-3ff3c467] {
            position: absolute;
            left: 50%
        }

        .btn-notice[data-v-3ff3c467] {
            position: absolute;
            right: 20px;
            top: 52px;
            z-index: 99
        }

        .head-img[data-v-3ff3c467] {
            width: 41px;
            height: 41px
        }

        .user-info-box[data-v-3ff3c467] {
            /* height: 100px; */
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            align-items: center;
            position: relative;
            z-index: 1
        }

        .username[data-v-3ff3c467] {
            font-size: 16px;
            color: #f2f2f2;
            margin-top: 8px;
            margin-left: 2px
        }

        .notice-title[data-v-3ff3c467] {
            font-size: 29px;
            margin-top: 8px;
            margin-left: 2px
        }

        .notice-content[data-v-3ff3c467] {
            font-size: 9px;
            color: #555
        }

        .btn-closeNotice[data-v-3ff3c467] {
            color: #007aff;
            position: absolute;
            right: 10px;
            bottom: 0px
        }

        .nickname-title[data-v-3ff3c467] {
            font-size: 18px;
            margin-top: 8px;
            margin-left: 2px
        }

        .nickname-text[data-v-3ff3c467] {
            font-size: 16px;
            color: #6e6e6e;
            margin-left: 41px
        }

        .btn-closeNick[data-v-3ff3c467] {
            color: #007aff;
            position: absolute;
            right: 104px;
            bottom: 0px
        }

        .btn-confirmNick[data-v-3ff3c467] {
            color: #007aff;
            position: absolute;
            right: 20px;
            bottom: 0px
        }

        .logout-title[data-v-3ff3c467] {
            font-size: 18px;
            margin-top: 8px;
            margin-left: 2px
        }

        .logout-text[data-v-3ff3c467] {
            /* font-size: 24upx; */
            /* color:#007AFF; */
            /* position: absolute; */
            /* margin-top: 20rpx; */
            margin-left: 41px
        }

        .btn-closeLogout[data-v-3ff3c467] {
            color: #007aff;
            position: absolute;
            right: 104px;
            bottom: 0px
        }

        .btn-logout2[data-v-3ff3c467] {
            color: #007aff;
            position: absolute;
            right: 20px;
            bottom: 0px
        }

        .my-line-height[data-v-3ff3c467] {
            height: 1px;
            margin-top: -10px
        }

        .my-header-height[data-v-3ff3c467] {
            min-height: 12px;
            height: calc(12px + env(safe-area-inset-bottom) / 2)
        }
    </style>
    <style type="text/css">
        .btn-login[data-v-6b07b770] {
            width: 209px
        }
    </style>
    <style type="text/css">
        .icon[data-v-3a572a86] {
            width: 46px;
            height: 46px
        }
    </style>

    <style type="text/css">
        .uni-app--showtabbar uni-page-wrapper {
            display: block;
            height: calc(100% - 50px);
            height: calc(100% - 50px - constant(safe-area-inset-bottom));
            height: calc(100% - 50px - env(safe-area-inset-bottom));
        }

        .uni-app--showtabbar uni-page-wrapper::after {
            content: "";
            display: block;
            width: 100%;
            height: 50px;
            height: calc(50px + constant(safe-area-inset-bottom));
            height: calc(50px + env(safe-area-inset-bottom));
        }

        .uni-app--showtabbar uni-page-head[uni-page-head-type="default"]~uni-page-wrapper {
            height: calc(100% - 44px - 50px);
            height: calc(100% - 44px - constant(safe-area-inset-top) - 50px - constant(safe-area-inset-bottom));
            height: calc(100% - 44px - env(safe-area-inset-top) - 50px - env(safe-area-inset-bottom));
        }
    </style>
    <style type="text/css">
        .uni-app--showtabbar uni-page-wrapper {
            display: block;
            height: calc(100% - 50px);
            height: calc(100% - 50px - constant(safe-area-inset-bottom));
            height: calc(100% - 50px - env(safe-area-inset-bottom));
        }

        .uni-app--showtabbar uni-page-wrapper::after {
            content: "";
            display: block;
            width: 100%;
            height: 50px;
            height: calc(50px + constant(safe-area-inset-bottom));
            height: calc(50px + env(safe-area-inset-bottom));
        }

        .uni-app--showtabbar uni-page-head[uni-page-head-type="default"]~uni-page-wrapper {
            height: calc(100% - 44px - 50px);
            height: calc(100% - 44px - constant(safe-area-inset-top) - 50px - constant(safe-area-inset-bottom));
            height: calc(100% - 44px - env(safe-area-inset-top) - 50px - env(safe-area-inset-bottom));
        }
    </style>
    <style type="text/css">
        .uni-app--showtabbar uni-page-wrapper {
            display: block;
            height: calc(100% - 50px);
            height: calc(100% - 50px - constant(safe-area-inset-bottom));
            height: calc(100% - 50px - env(safe-area-inset-bottom));
        }

        .uni-app--showtabbar uni-page-wrapper::after {
            content: "";
            display: block;
            width: 100%;
            height: 50px;
            height: calc(50px + constant(safe-area-inset-bottom));
            height: calc(50px + env(safe-area-inset-bottom));
        }

        .uni-app--showtabbar uni-page-head[uni-page-head-type="default"]~uni-page-wrapper {
            height: calc(100% - 44px - 50px);
            height: calc(100% - 44px - constant(safe-area-inset-top) - 50px - constant(safe-area-inset-bottom));
            height: calc(100% - 44px - env(safe-area-inset-top) - 50px - env(safe-area-inset-bottom));
        }
    </style>
    
    <script>


        $(document).ready(function () {  $("#emredbalancetop").load('balance.php');

            setInterval(function () {
                $("#emredbalancetop").load('balance.php');
            }, 2000);

                  
            $("#emredansrec").load('emredansrec.php?spage=<?php echo $spage; ?>');

setInterval(function () {
    $("#emredansrec").load('emredansrec.php?spage=<?php echo $spage; ?>');
}, 2000);
  $("#emredmybet").load('emredrec.php?srpage=<?php echo $srpage; ?>');



  


      setInterval(function () {
          if(typeof m == 'undefined'){m=10;}
   document.getElementById("emredgtotal").innerHTML=document.getElementById("emredgin").value*m;
   document.getElementById("emredgfamount").value=document.getElementById("emredgin").value*m;
             if(typeof n == 'undefined'){n=10;}
   document.getElementById("emredrtotal").innerHTML=document.getElementById("emredrin").value*n;
   document.getElementById("emredrfamount").value=document.getElementById("emredrin").value*n;
    if(typeof o == 'undefined'){o=10;}
   document.getElementById("emredvtotal").innerHTML=document.getElementById("emredvin").value*o;
   document.getElementById("emredvfamount").value=document.getElementById("emredvin").value*o;  
    
     if(typeof p == 'undefined'){p=10;}
   document.getElementById("emred0total").innerHTML=document.getElementById("emredin0").value*p;
   document.getElementById("emredfamount0").value=document.getElementById("emredin0").value*p;  
          
           if(typeof q == 'undefined'){q=10;}
   document.getElementById("emred1total").innerHTML=document.getElementById("emredin1").value*q;
   document.getElementById("emredfamount1").value=document.getElementById("emredin1").value*q; 
          
           if(typeof r == 'undefined'){r=10;}
   document.getElementById("emred2total").innerHTML=document.getElementById("emredin2").value*r;
   document.getElementById("emredfamount2").value=document.getElementById("emredin2").value*r; 
    
           if(typeof s == 'undefined'){s=10;}
   document.getElementById("emred3total").innerHTML=document.getElementById("emredin3").value*s;
   document.getElementById("emredfamount3").value=document.getElementById("emredin3").value*s; 
   
    if(typeof t == 'undefined'){t=10;}
   document.getElementById("emred4total").innerHTML=document.getElementById("emredin4").value*t;
   document.getElementById("emredfamount4").value=document.getElementById("emredin4").value*t; 
   
    if(typeof u == 'undefined'){u=10;}
   document.getElementById("emred5total").innerHTML=document.getElementById("emredin5").value*u;
   document.getElementById("emredfamount5").value=document.getElementById("emredin5").value*u; 
   
    if(typeof v == 'undefined'){v=10;}v
   document.getElementById("emred6total").innerHTML=document.getElementById("emredin6").value*v;
   document.getElementById("emredfamount6").value=document.getElementById("emredin6").value*v; 
   
    if(typeof w == 'undefined'){w=10;}
   document.getElementById("emred7total").innerHTML=document.getElementById("emredin7").value*w;
   document.getElementById("emredfamount7").value=document.getElementById("emredin7").value*w; 
   
    if(typeof z== 'undefined'){z=10;}
   document.getElementById("emred8total").innerHTML=document.getElementById("emredin8").value*z;
   document.getElementById("emredfamount8").value=document.getElementById("emredin8").value*z; 
   
    if(typeof y == 'undefined'){y=10;}
   document.getElementById("emred9total").innerHTML=document.getElementById("emredin9").value*y;
   document.getElementById("emredfamount9").value=document.getElementById("emredin9").value*y; 
      }, 100);
        })
        function emredsel(e){
            
            document.getElementById("emred1").className="cu-item";
            document.getElementById("emred2").className="cu-item";
            document.getElementById("emred3").className="cu-item";
            document.getElementById("emred4").className="cu-item";
           document.getElementById("emred"+e).className="cu-item text-blue cur";
            var x=e;
                if(x==1){
               m=10;
           }
           if(x==2){
               m=100;
           }
           if(x==3){
               m=1000;
           }
           if(x==4){
              m=10000; 
           }
       }
       
       function minus(id){
           var x=id.value;
          if(x>1){
            id.value= x-1;  
          }
           
       }
       function plus(id){
           id.value++;
       }
       
       function emredselr(e){
           
            document.getElementById("emred5").className="cu-item";
            document.getElementById("emred6").className="cu-item";
            document.getElementById("emred7").className="cu-item";
            document.getElementById("emred8").className="cu-item";
           document.getElementById("emred"+e).className="cu-item text-blue cur";
            var x=e;
                if(x==5){
               n=10;
           }
           if(x==6){
               n=100;
           }
           if(x==7){
               n=1000;
           }
           if(x==8){
              n=10000; 
           }
       }
       
         function emredselv(e){
           
            document.getElementById("emred9").className="cu-item";
            document.getElementById("emred10").className="cu-item";
            document.getElementById("emred11").className="cu-item";
            document.getElementById("emred12").className="cu-item";
           document.getElementById("emred"+e).className="cu-item text-blue cur";
            var x=e;
                if(x==9){
               o=10;
           }
           if(x==10){
               o=100;
           }
           if(x==11){
               o=1000;
           }
           if(x==12){
              o=10000; 
           }
       }
       
       function emredsel0(e){
           
            document.getElementById("emred13").className="cu-item";
            document.getElementById("emred14").className="cu-item";
            document.getElementById("emred15").className="cu-item";
            document.getElementById("emred16").className="cu-item";
           document.getElementById("emred"+e).className="cu-item text-blue cur";
            var x=e;
                if(x==13){
               p=10;
           }
           if(x==14){
               p=100;
           }
           if(x==15){
               p=1000;
           }
           if(x==16){
              p=10000; 
           }
       }
       
       function emredsel1(e){
           
            document.getElementById("emred17").className="cu-item";
            document.getElementById("emred18").className="cu-item";
            document.getElementById("emred19").className="cu-item";
            document.getElementById("emred20").className="cu-item";
           document.getElementById("emred"+e).className="cu-item text-blue cur";
            var x=e;
                if(x==17){
               q=10;
           }
           if(x==18){
               q=100;
           }
           if(x==19){
               q=1000;
           }
           if(x==20){
              q=10000; 
           }
       } 
       
       function emredsel2(e){
           
            document.getElementById("emred21").className="cu-item";
            document.getElementById("emred22").className="cu-item";
            document.getElementById("emred23").className="cu-item";
            document.getElementById("emred24").className="cu-item";
           document.getElementById("emred"+e).className="cu-item text-blue cur";
            var x=e;
                if(x==21){
               r=10;
           }
           if(x==22){
               r=100;
           }
           if(x==23){
               r=1000;
           }
           if(x==24){
              r=10000; 
           }
       }
       
       
        function emredsel3(e){
           
            document.getElementById("emred25").className="cu-item";
            document.getElementById("emred26").className="cu-item";
            document.getElementById("emred27").className="cu-item";
            document.getElementById("emred28").className="cu-item";
           document.getElementById("emred"+e).className="cu-item text-blue cur";
            var x=e;
                if(x==25){
               s=10;
           }
           if(x==26){
               s=100;
           }
           if(x==27){
               s=1000;
           }
           if(x==28){
              s=10000; 
           }
       } 
       
            function emredsel4(e){
           
            document.getElementById("emred29").className="cu-item";
            document.getElementById("emred30").className="cu-item";
            document.getElementById("emred31").className="cu-item";
            document.getElementById("emred32").className="cu-item";
           document.getElementById("emred"+e).className="cu-item text-blue cur";
            var x=e;
                if(x==29){
               t=10;
           }
           if(x==30){
               t=100;
           }
           if(x==31){
               t=1000;
           }
           if(x==32){
              t=10000; 
           }
       }
       
          function emredsel5(e){
           
            document.getElementById("emred33").className="cu-item";
            document.getElementById("emred34").className="cu-item";
            document.getElementById("emred35").className="cu-item";
            document.getElementById("emred36").className="cu-item";
           document.getElementById("emred"+e).className="cu-item text-blue cur";
            var x=e;
                if(x==33){
               u=10;
           }
           if(x==34){
               u=100;
           }
           if(x==35){
               u=1000;
           }
           if(x==36){
              u=10000; 
           }
       }
       
          function emredsel6(e){
           
            document.getElementById("emred37").className="cu-item";
            document.getElementById("emred38").className="cu-item";
            document.getElementById("emred39").className="cu-item";
            document.getElementById("emred40").className="cu-item";
           document.getElementById("emred"+e).className="cu-item text-blue cur";
            var x=e;
                if(x==37){
               v=10;
           }
           if(x==38){
               v=100;
           }
           if(x==39){
               v=1000;
           }
           if(x==40){
              v=10000; 
           }
       }
       
        function emredsel7(e){
           
            document.getElementById("emred41").className="cu-item";
            document.getElementById("emred42").className="cu-item";
            document.getElementById("emred43").className="cu-item";
            document.getElementById("emred44").className="cu-item";
           document.getElementById("emred"+e).className="cu-item text-blue cur";
            var x=e;
                if(x==41){
               w=10;
           }
           if(x==42){
               w=100;
           }
           if(x==43){
               w=1000;
           }
           if(x==44){
              w=10000; 
           }
       }
       
       function emredsel8(e){
           
            document.getElementById("emred45").className="cu-item";
            document.getElementById("emred46").className="cu-item";
            document.getElementById("emred47").className="cu-item";
            document.getElementById("emred48").className="cu-item";
           document.getElementById("emred"+e).className="cu-item text-blue cur";
            var x=e;
                if(x==45){
               z=10;
           }
           if(x==46){
               z=100;
           }
           if(x==47){
               z=1000;
           }
           if(x==48){
              z=10000; 
           }
       }
       
        function emredsel9(e){
           
            document.getElementById("emred49").className="cu-item";
            document.getElementById("emred50").className="cu-item";
            document.getElementById("emred51").className="cu-item";
            document.getElementById("emred52").className="cu-item";
           document.getElementById("emred"+e).className="cu-item text-blue cur";
            var x=e;
                if(x==49){
               y=10;
           }
           if(x==50){
               y=100;
           }
           if(x==51){
               y=1000;
           }
           if(x==52){
              y=10000; 
           }
       }
       
       
       
       function red() {
console.log("red")
document.getElementById("emredred").className = "cu-modal show";
}
function green() {
    document.getElementById("emredgreenbox").className = "cu-modal show";
}     
  function vio() {
 document.getElementById("emredviobox").className = "cu-modal show";
}      

function emrednum0() {
 document.getElementById("emred0box").className = "cu-modal show";
}
function emrednum1() {
 document.getElementById("emred1box").className = "cu-modal show";
}
function emrednum2() {
 document.getElementById("emred2box").className = "cu-modal show";
}
function emrednum3() {
 document.getElementById("emred3box").className = "cu-modal show";
}
function emrednum4() {
 document.getElementById("emred4box").className = "cu-modal show";
}
function emrednum5() {
 document.getElementById("emred5box").className = "cu-modal show";
}
function emrednum6() {
 document.getElementById("emred6box").className = "cu-modal show";
}
function emrednum7() {
 document.getElementById("emred7box").className = "cu-modal show";
} 
function emrednum8() {
 document.getElementById("emred8box").className = "cu-modal show";
}
function emrednum9() {
 document.getElementById("emred9box").className = "cu-modal show";
}
function emredc0() {
 document.getElementById("emred0box").className = "cu-modal";
}
function emredc1() {
 document.getElementById("emred1box").className = "cu-modal";
}
function emredc2() {
 document.getElementById("emred2box").className = "cu-modal";
}
function emredc3() {
 document.getElementById("emred3box").className = "cu-modal";
}
function emredc4() {
 document.getElementById("emred4box").className = "cu-modal";
}
function emredc5() {
 document.getElementById("emred5box").className = "cu-modal";
} 
function emredc6() {
 document.getElementById("emred6box").className = "cu-modal";
}
function emredc7() {
 document.getElementById("emred7box").className = "cu-modal";
}
function emredc8() {
 document.getElementById("emred8box").className = "cu-modal";
}
function emredc9() {
 document.getElementById("emred9box").className = "cu-modal";
}


       function gemredproceed() {
    
           
      
    if (document.getElementById("emredgtotal").innerHTML==0) {
       
        var x = document.getElementById("emredcopied");
        x.className = "show";
        setTimeout(function () {
            x.className = x.className.replace("show", "");
        }, 3000);

    }else{
        console.log("submit");
        document.getElementById("emredgform").submit();
    }
}

    function vemredproceed() {
    
           
      
    if (document.getElementById("emredvtotal").innerHTML ==0) {
       
        var x = document.getElementById("emredcopied");
        x.className = "show";
        setTimeout(function () {
            x.className = x.className.replace("show", "");
        }, 3000);

    }else{
        console.log("submit");
        document.getElementById("emredvform").submit();
    }
}


function remredproceed() {
    
           
      
    if (document.getElementById("emredrtotal").innerHTML == 0) {
       
        var x = document.getElementById("emredcopied");
        x.className = "show";
        setTimeout(function () {
            x.className = x.className.replace("show", "");
        }, 3000);

    }else{
        console.log("submit");
        document.getElementById("emredrform").submit();
    }
}
 
 
 

function emredproceed0() {
    
           
      
    if (document.getElementById("emred0total").innerHTML == 0) {
       
        var x = document.getElementById("emredcopied");
        x.className = "show";
        setTimeout(function () {
            x.className = x.className.replace("show", "");
        }, 3000);

    }else{
        console.log("submit");
        document.getElementById("emred0form").submit();
    }
}
 

function emredproceed1() {
    
           
      
    if (document.getElementById("emred1total").innerHTML == 0) {
       
        var x = document.getElementById("emredcopied");
        x.className = "show";
        setTimeout(function () {
            x.className = x.className.replace("show", "");
        }, 3000);

    }else{
        console.log("submit");
        document.getElementById("emred1form").submit();
    }
}
   
function emredproceed2() {
    
           
      
    if (document.getElementById("emred2total").innerHTML == 0) {
       
        var x = document.getElementById("emredcopied");
        x.className = "show";
        setTimeout(function () {
            x.className = x.className.replace("show", "");
        }, 3000);

    }else{
        console.log("submit");
        document.getElementById("emred2form").submit();
    }
}

 
function emredproceed3() {
    
           
      
    if (document.getElementById("emred3total").innerHTML == 0) {
       
        var x = document.getElementById("emredcopied");
        x.className = "show";
        setTimeout(function () {
            x.className = x.className.replace("show", "");
        }, 3000);

    }else{
        console.log("submit");
        document.getElementById("emred3form").submit();
    }
}
       
function emredproceed4() {
    
           
      
    if (document.getElementById("emred4total").innerHTML == 0) {
       
        var x = document.getElementById("emredcopied");
        x.className = "show";
        setTimeout(function () {
            x.className = x.className.replace("show", "");
        }, 3000);

    }else{
        console.log("submit");
        document.getElementById("emred4form").submit();
    }
}
  
function emredproceed5() {
    
           
      
    if (document.getElementById("emred5total").innerHTML == 0) {
       
        var x = document.getElementById("emredcopied");
        x.className = "show";
        setTimeout(function () {
            x.className = x.className.replace("show", "");
        }, 3000);

    }else{
        console.log("submit");
        document.getElementById("emred5form").submit();
    }
}

function emredproceed6() {
    
           
      
    if (document.getElementById("emred6total").innerHTML == 0) {
       
        var x = document.getElementById("emredcopied");
        x.className = "show";
        setTimeout(function () {
            x.className = x.className.replace("show", "");
        }, 3000);

    }else{
        console.log("submit");
        document.getElementById("emred6form").submit();
    }
}

function emredproceed7() {
    
           
      
    if (document.getElementById("emred7total").innerHTML == 0) {
       
        var x = document.getElementById("emredcopied");
        x.className = "show";
        setTimeout(function () {
            x.className = x.className.replace("show", "");
        }, 3000);

    }else{
        console.log("submit");
        document.getElementById("emred7form").submit();
    }
}

function emredproceed8() {
    
           
      
    if (document.getElementById("emred8total").innerHTML == 0) {
       
        var x = document.getElementById("emredcopied");
        x.className = "show";
        setTimeout(function () {
            x.className = x.className.replace("show", "");
        }, 3000);

    }else{
        console.log("submit");
        document.getElementById("emred8form").submit();
    }
}

 function emredproceed9() {
    
           
      
    if (document.getElementById("emred9total").innerHTML == 0) {
       
        var x = document.getElementById("emredcopied");
        x.className = "show";
        setTimeout(function () {
            x.className = x.className.replace("show", "");
        }, 3000);

    }else{
        console.log("submit");
        document.getElementById("emred9form").submit();
    }
}


 //emred

 

 
    </script>
</head>
<meta charset="UTF-8">
<link rel="icon" type="image/svg+xml" href="./ico.png">
<meta name="google" content="notranslate">
<meta name="robots" content="noindex,nofollow">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

<link rel="manifest">
<link rel="stylesheet" href="https://91dreamclub.com/assets/css/modules-96f5a6e8.css">
<link rel="stylesheet" href="https://91dreamclub.com/assets/css/page-activity-871556fb.css">
<link rel="stylesheet" href="https://91dreamclub.com/assets/css/page-home-0d70abbb.css">
<link rel="stylesheet" href="https://91dreamclub.com/assets/css/index-08abe1f5.css"></head>
<body><div id="app" data-v-app=""><!----><!----><div data-v-f31474c6="" class="WinGo__C" style="--36a344b0: 'Roboto', 'Inter', sans-serif;"><div data-v-4c21fa9e="" data-v-f31474c6="" class="navbar"><div data-v-4c21fa9e="" class="navbar-fixed wc" style="background: linear-gradient(90deg, rgb(222, 35, 37) 0%, rgb(255, 80, 74) 100%);"><div data-v-4c21fa9e="" class="navbar__content"><div data-v-4c21fa9e="" onclick="window.location.href='/indexlogin#/'" class="navbar__content-left"><i data-v-4c21fa9e="" class="van-badge__wrapper van-icon van-icon-arrow-left"><!----><!----><!----></i></div><div data-v-4c21fa9e="" class="navbar__content-center"><div data-v-4c21fa9e="" class="headLogo" style="background-image: url(&quot;Wlogo.png&quot;);"></div><div data-v-4c21fa9e="" class="navbar__content-title"></div></div><div data-v-4c21fa9e="" class="navbar__content-right"><div data-v-f31474c6="" onclick="window.location.href='/keFuMenu#/'" class="WinGo__C-head-more"><div data-v-f31474c6=""></div><div ></div></div></div></div></div></div><div data-v-ed6673b8="" data-v-f31474c6="" class="Wallet__C"><div data-v-ed6673b8="" class="Wallet__C-balance"><div data-v-ed6673b8="" class="Wallet__C-balance-l1"><div onclick="location.reload()" data-v-ed6673b8="">₹<span id="emredbalancetop">0.00</span></div></div><div data-v-ed6673b8="" class="Wallet__C-balance-l2"><div data-v-ed6673b8="">Wallet balance</div></div><div data-v-ed6673b8="" class="Wallet__C-balance-l3"><div data-v-ed6673b8="" onclick="location.href='/withdrawal#/'">Withdraw</div><div data-v-ed6673b8="" onclick="location.href='/recharge#/'">Deposit</div></div></div></div><div data-v-b4633b52="" data-v-f31474c6="" class="noticeBar__container"><svg data-v-b4633b52="" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_589_37747)"><path d="M15.9993 4V28C11.3327 28 7.86502 21.8927 7.86502 21.8927H3.99935C3.26297 21.8927 2.66602 21.2958 2.66602 20.5594V11.3405C2.66602 10.6041 3.26297 10.0072 3.99935 10.0072H7.86502C7.86502 10.0072 11.3327 4 15.9993 4Z" fill="url(#paint0_linear_589_37747)"></path><path d="M21.334 10C21.7495 10.371 22.1261 10.7865 22.4567 11.2392C23.4265 12.5669 24.0007 14.2149 24.0007 16C24.0007 17.7697 23.4363 19.4045 22.4819 20.7262C22.1452 21.1923 21.7601 21.6195 21.334 22" stroke="url(#paint1_linear_589_37747)" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"></path><path d="M22.8242 27.4571C26.7227 25.1302 29.3336 20.87 29.3336 16C29.3336 11.2057 26.8031 7.00234 23.005 4.65271" stroke="url(#paint2_linear_589_37747)" stroke-width="1.8" stroke-linecap="round"></path></g><defs><linearGradient id="paint0_linear_589_37747" x1="9.33268" y1="4" x2="9.33268" y2="28" gradientUnits="userSpaceOnUse"><stop stop-color="#FF7C7C"></stop><stop offset="0.74876" stop-color="#F54545"></stop></linearGradient><linearGradient id="paint1_linear_589_37747" x1="22.6673" y1="10" x2="22.6673" y2="22" gradientUnits="userSpaceOnUse"><stop stop-color="#FF7C7C"></stop><stop offset="0.74876" stop-color="#F54545"></stop></linearGradient><linearGradient id="paint2_linear_589_37747" x1="26.0789" y1="4.65271" x2="26.0789" y2="27.4571" gradientUnits="userSpaceOnUse"><stop stop-color="#FF7C7C"></stop><stop offset="0.74876" stop-color="#F54545"></stop></linearGradient><clipPath id="clip0_589_37747"><rect width="32" height="32" fill="white"></rect></clipPath></defs></svg><div data-v-b4633b52="" class="noticeBar__container-body"><div data-v-b4633b52="" class="noticeBar__container-body-text">We apologize there is no telegram contact for our customer service, if you need our assistant please go to the website and press customer service menu to get the contact, and for the balance and data account be safe please beware and careful from someone who pro-claimed as 91club customer service. Thank you。</div></div><button data-v-b4633b52=""><svg data-v-b4633b52="" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_589_37755)"><path d="M24 0H0V24H24V0Z" fill="white" fill-opacity="0.01"></path><path d="M12 22C16.1173 22 19.4999 18.7371 19.4999 14.5491C19.4999 13.5209 19.4476 12.4187 18.8778 10.7058C18.3079 8.9929 18.1931 8.7718 17.5905 7.71395C17.333 9.8727 15.9555 10.7724 15.6055 11.0413C15.6055 10.7615 14.7722 7.66795 13.5088 5.81695C12.2685 4 10.5817 2.80796 9.59265 2C9.59265 3.53489 9.16095 5.81695 8.5427 6.9797C7.92445 8.14245 7.80835 8.1848 7.0361 9.0501C6.2639 9.9154 5.90945 10.1826 5.2637 11.2325C4.61798 12.2825 4.5 13.6809 4.5 14.7091C4.5 18.8971 7.88265 22 12 22Z" fill="white"></path></g><defs><clipPath id="clip0_589_37755"><rect width="24" height="24" fill="white"></rect></clipPath></defs></svg> Detail</button></div><div data-v-78027f36="" style="width: 100%;
    height: 4.375rem;
    padding: 0 0.3rem;
    margin-bottom: 0.375rem;
    position: relative;
    z-index: 1;" class="bonus-box"><div style="width: 100%;
    height: 100%;
    background: url(./UBanner.png) no-repeat 50%;
    border-radius: 0.36667rem;
    background-size: cover;" data-v-78027f36="" class="bonus-bg" style=""><div data-v-78027f36="" style="font-family: MulticoloreFont;
    color: #d37116;
    font-size: .75rem;
    line-height: .5rem;
    position: absolute;
    width: 100%;
    text-align: center;
    font-weight: 600;
    top: 0.60rem;
    left: 50%;
    -webkit-transform: translateX(-50%);
    transform: translateX(-50%);" class="inner"><span style="font-family: MulticoloreFont;
    color: #d37116;
    font-size: .75rem;
    line-height: .5rem;
    position: absolute;
    width: 100%;
    text-align: center;
    font-weight: 600;
    top: 0.60rem;
    left: 50%;
    -webkit-transform: translateX(-50%);
    transform: translateX(-50%);" data-v-78027f36="">₹ <?php echo $red+$green+$violet+$zero+$one+$two+$three+$four+$five+$six+$seven+$eight+$nine;?>.00</span><!----></div></div></div><div data-v-c0d1aac6="" class="TimeLeft__C"><div data-v-c0d1aac6="" class="TimeLeft__C-rule" id="readrule" >How to play</div><div data-v-c0d1aac6="" class="TimeLeft__C-name">Win Go 5Min</div><div data-v-c0d1aac6="" class="TimeLeft__C-num"><div data-v-c0d1aac6="" class="n1"></div><div data-v-c0d1aac6="" class="n8"></div><div data-v-c0d1aac6="" class="n8"></div><div data-v-c0d1aac6="" class="n2"></div><div data-v-c0d1aac6="" class="n6"></div></div><div data-v-c0d1aac6="" class="TimeLeft__C-id"  style="font-size:0.52667rem;"><span id="period"><?php echo  $sperio?></span></div><div data-v-c0d1aac6="" class="TimeLeft__C-text">Time remaining</div><div data-v-c0d1aac6="" class="TimeLeft__C-time"><div data-v-c0d1aac6=""><span id="demo"></span></div></div></div><!----><!----><div data-v-43251c11="" data-v-f31474c6="" class="Betting__C" voicetype="1" typeid="1"><div data-v-43251c11="" class="Betting__C-mark" style="display: none;"><div data-v-43251c11="">0</div><div data-v-43251c11="">7</div></div><div data-v-43251c11="" class="Betting__C-head"><div data-v-43251c11="" class="Betting__C-head-g" data-color="green" id="emredgreen"  onclick="green()">Green</div><div data-v-43251c11="" class="Betting__C-head-p" data-color="violet" id="emredvoilet" onclick="vio()">Violet</div><div data-v-43251c11="" class="Betting__C-head-r" data-color="red"  id="emredredbutton" onclick="red()">Red</div></div><div data-v-43251c11="" class="Betting__C-numC"><div data-num="0" id="emrednum0" onclick="emrednum0()" data-v-43251c11="" class="Betting__C-numC-item0"></div><div data-v-43251c11="" data-num="1" id="emrednum1" onclick="emrednum1()" class="Betting__C-numC-item1"></div><div data-num="2" id="emrednum2" onclick="emrednum2()" data-v-43251c11="" class="Betting__C-numC-item2"></div><div data-v-43251c11="" data-num="3" id="emrednum3" onclick="emrednum3()" class="Betting__C-numC-item3"></div><div data-num="4" id="emrednum4" onclick="emrednum4()" data-v-43251c11="" class="Betting__C-numC-item4"></div><div data-v-43251c11="" data-num="5" id="emrednum5" onclick="emrednum5()" class="Betting__C-numC-item5"></div><div data-num="6" id="emrednum6" onclick="emrednum6()" data-v-43251c11="" class="Betting__C-numC-item6"></div><div data-v-43251c11="" data-num="7" id="emrednum7" onclick="emrednum7()" class="Betting__C-numC-item7"></div><div data-num="8" id="emrednum8" onclick="emrednum8()" data-v-43251c11="" class="Betting__C-numC-item8"></div><div data-v-43251c11="" data-num="9" id="emrednum9" onclick="emrednum9()" class="Betting__C-numC-item9"></div></div><style>.Betting__C[data-v-43251c11] {
    height: 5.3rem;
    width: calc(100% - .69333rem);
    margin: .29333rem auto 0;
    background: #fff;
    box-shadow: 0 .05333rem .10667rem #c5c5da40;
    border-radius: .26667rem;
    padding: .18667rem .26667rem .25333rem .18667rem;
    position: relative;
}.content {
    background: #f7f8ff00!important;
}.RecordNav__C>div[data-v-4e271e20] {
    width: calc((300% - .50667rem)/3);
    height: 100%;
    background: #e8e7e8;
    border-radius: 0.11333rem;
    font-size: .37333rem;
    color: #333;
    text-align: center;
    overflow: hidden;
}</style><div data-v-43251c11="" class="Betting__C-multiple" style="display:none;"><div data-v-43251c11="" class="Betting__C-multiple-l">Random</div><div data-v-43251c11="" class="Betting__C-multiple-r active"> X1</div><div data-v-43251c11="" class="Betting__C-multiple-r"> X5</div><div data-v-43251c11="" class="Betting__C-multiple-r"> X10</div><div data-v-43251c11="" class="Betting__C-multiple-r"> X20</div><div data-v-43251c11="" class="Betting__C-multiple-r"> X50</div><div data-v-43251c11="" class="Betting__C-multiple-r"> X100</div></div>
<div data-v-43251c11="" style="display:none;" class="Betting__C-foot"><div data-v-43251c11="" class="Betting__C-foot-b">Big</div><div data-v-43251c11="" class="Betting__C-foot-s">Small</div></div><!----><!----><!----><!----></div><div data-v-4e271e20="" data-v-f31474c6="" class="RecordNav__C"><div data-v-4e271e20="" class="active">Game history</div><div style="display:none;"data-v-4e271e20="" class="">Chart</div><div data-v-4e271e20="" style="display:none;"class="">My history</div></div><div data-v-c74f4bba="" data-v-f31474c6="" class="GameRecord__C" apifun="e=>l(g.WinGoGetMyEmerdList,e).then(A=>A.data)" listapi="e=>l(g.WinGoGetNoaverageEmerdList,e).then(A=>A.data)" emerdapi="e=>l(g.WinGoGetEmerdList,e).then(A=>A.data)" gopathname="AllLotteryGames-BettingRecordWin"><div data-v-c74f4bba="" class=""><div data-v-c74f4bba="" class="van-row">
    <div data-v-c74f4bba="" class="van-col van-col--8"></div><div data-v-c74f4bba="" class="van-col van-col--5"></div><div data-v-c74f4bba="" class="van-col van-col--5"></div>
<div data-v-c74f4bba="" class="van-col van-col--6"></div></div></div><div style="margin: 0.60rem auto 0;" id="emredansrec"> </div><div style="display:none;" data-v-c74f4bba="" class="GameRecord__C-foot"><div data-v-c74f4bba=""  class="GameRecord__C-foot-previous disabled"><i data-v-c74f4bba="" class="van-badge__wrapper van-icon van-icon-arrow-left GameRecord__C-icon" style="font-size: 20px;"><!----><!----><!----></i></div><div data-v-c74f4bba="" class="GameRecord__C-foot-page">1/4590</div><div data-v-c74f4bba="" class="GameRecord__C-foot-next"><i data-v-c74f4bba="" class="van-badge__wrapper van-icon van-icon-arrow GameRecord__C-icon" style="font-size: 20px;"><!----><!----><!----></i></div></div></div><div data-v-4e271e20="" data-v-f31474c6="" class="RecordNav__C"><div data-v-4e271e20="" class="active">My history</div><div style="display:none;" data-v-4e271e20="" class="">Chart</div><div data-v-4e271e20="" style="display:none;" class=""></div></div><div style="margin: 0.80rem auto 0;">
   <uni-view data-v-91f724d0="" class="my-record-view bg-white shadow">
        
        
        <uni-view data-v-91f724d0="">
                <div data-v-c74f4bba="" class="GameRecord__C-head"><div data-v-c74f4bba="" class="van-row">
    <div data-v-c74f4bba="" class="van-col van-col--8"></div><div data-v-c74f4bba="" class="van-col van-col--5"></div><div data-v-c74f4bba="" class="van-col van-col--5"></div>
<div data-v-c74f4bba="" class="van-col van-col--6"></div></div></div>
        </uni-view>
  <div id="emredmybet"></div>
                            <uni-view data-v-6d17f23c="" data-v-91f724d0="" id="rule" class="cu-modal">
								<div role="dialog" tabindex="0" class="van-popup van-popup--round van-popup--center" style="z-index: 2003;"><div data-v-a7a14dc2="" class="TimeLeft__C-PreSale"><div data-v-a7a14dc2="" class="TimeLeft__C-PreSale-head">How to play</div><div data-v-a7a14dc2="" class="TimeLeft__C-PreSale-body"><div data-v-a7a14dc2=""><p><font face="Arial, Microsoft YaHei, \\5FAE软雅黑, \\5B8B体, Malgun Gothic, Meiryo, sans-serif">1 minutes 1 issue, 45 seconds to order, 15 seconds waiting for the draw. It opens all day. The total number of trade is 1440 issues.</font><br></p><p><font face="Arial, Microsoft YaHei, \\5FAE软雅黑, \\5B8B体, Malgun Gothic, Meiryo, sans-serif">If you spend 100 to trade, after deducting 2 service fee, your contract amount is 98:</font></p><p><font face="Arial, Microsoft YaHei, \\5FAE软雅黑, \\5B8B体, Malgun Gothic, Meiryo, sans-serif">1.&nbsp;</font><span style="font-family: Arial, &quot;Microsoft YaHei&quot;, &quot;\\5FAE软雅黑&quot;, &quot;\\5B8B体&quot;, &quot;Malgun Gothic&quot;, Meiryo, sans-serif;">Select</span><font face="Arial, Microsoft YaHei, \\5FAE软雅黑, \\5B8B体, Malgun Gothic, Meiryo, sans-serif">&nbsp;green: if the result shows 1,3,7,9 you will get (98*2) 196;If the result shows 5, you will get (98*1.5) 147</font></p><p><font face="Arial, Microsoft YaHei, \\5FAE软雅黑, \\5B8B体, Malgun Gothic, Meiryo, sans-serif">2.&nbsp;</font><span style="font-family: Arial, &quot;Microsoft YaHei&quot;, &quot;\\5FAE软雅黑&quot;, &quot;\\5B8B体&quot;, &quot;Malgun Gothic&quot;, Meiryo, sans-serif;">Select</span><font face="Arial, Microsoft YaHei, \\5FAE软雅黑, \\5B8B体, Malgun Gothic, Meiryo, sans-serif">&nbsp;red:&nbsp; &nbsp;if the result shows 2,4,6,8 you will get (98*2) 196;If the result shows 0, you will get (98*1.5) 147</font></p><p><font face="Arial, Microsoft YaHei, \\5FAE软雅黑, \\5B8B体, Malgun Gothic, Meiryo, sans-serif">3.&nbsp;</font><span style="font-family: Arial, &quot;Microsoft YaHei&quot;, &quot;\\5FAE软雅黑&quot;, &quot;\\5B8B体&quot;, &quot;Malgun Gothic&quot;, Meiryo, sans-serif;">Select</span><font face="Arial, Microsoft YaHei, \\5FAE软雅黑, \\5B8B体, Malgun Gothic, Meiryo, sans-serif">&nbsp;violet:if the result shows 0 or 5, you will get (98*4.5) 441</font></p><p><font face="Arial, Microsoft YaHei, \\5FAE软雅黑, \\5B8B体, Malgun Gothic, Meiryo, sans-serif">4. Select number:if the result is the same as the number you selected, you will get (98*9) 882&nbsp;</font></p><p><font face="Arial, Microsoft YaHei, \\5FAE软雅黑, \\5B8B体, Malgun Gothic, Meiryo, sans-serif">5. Select big: if the result shows 5,6,7,8,9 you will get (98 * 2) 196</font></p><p><font face="Arial, Microsoft YaHei, \\5FAE软雅黑, \\5B8B体, Malgun Gothic, Meiryo, sans-serif">6. Select small: if the result shows 0,1,2,3,4 you will get (98 * 2) 196</font></p></div></div><div data-v-a7a14dc2="" class="TimeLeft__C-PreSale-foot"><div id="ruleclose" data-v-a7a14dc2="" class="TimeLeft__C-PreSale-foot-btn">Close</div></div></div><!----></div>
							</uni-view>
                           
                           
                            <uni-view data-v-1a01b218="" data-v-91f724d0="" id="emredgreenbox" class="cu-modal">
                                <uni-view data-v-1a01b218="" class="cu-dialog bg-white">
                                    <uni-view data-v-1a01b218="" class="cu-bar justify-end bg-green">
                                        <uni-view data-v-1a01b218="" class="content" style="font-weight: bold;">Join Green
                                        </uni-view>
                                    </uni-view>
                                    <uni-view data-v-1a01b218="">
                                        <uni-view data-v-1a01b218="" class="cu-bar padding-xl">
                                            <uni-text data-v-1a01b218=""><span>Contract Money</span></uni-text>
                                        </uni-view>
                                        <uni-scroll-view data-v-1a01b218="" class="bg-white nav text-left"
                                            style="margin-left: 10px; margin-top: -20px;">
                                            <div class="uni-scroll-view">
                                                <div class="uni-scroll-view" style="overflow: auto hidden;">
                                                    <div class="uni-scroll-view-content">
                                                        <!---->
                                                        <uni-view data-v-1a01b218="" data-id="0"  id="emred1" onclick="emredsel(1)"
                                                            class="cu-item text-blue cur">10</uni-view>
                                                        <uni-view data-v-1a01b218="" data-id="1" id="emred2" onclick="emredsel(2)" class="cu-item">100
                                                        </uni-view>
                                                        <uni-view data-v-1a01b218="" data-id="2" id="emred3" onclick="emredsel(3)" class="cu-item">1000
                                                        </uni-view>
                                                        <uni-view data-v-1a01b218="" data-id="3" id="emred4" onclick="emredsel(4)" class="cu-item">10000
                                                        </uni-view>
                                                    </div>
                                                </div>
                                            </div>
                                        </uni-scroll-view>
                                        <uni-view data-v-1a01b218="" class="cu-bar  padding-xl justify-start">
                                            <uni-text data-v-1a01b218=""><span>Number</span></uni-text>
                                            <uni-view data-v-9d9b8ed0="" data-v-1a01b218="" class="uni-numbox"
                                                style="margin-left: 10px;">
                                                <uni-view data-v-9d9b8ed0="" class="uni-numbox__minus"  onclick="minus(emredgin)">
                                                    <uni-text data-v-9d9b8ed0="" class="uni-numbox--text"><span>-</span>
                                                    </uni-text>
                                                </uni-view>
                                                <uni-input data-v-9d9b8ed0="" class="uni-numbox__value">
                                                    <div class="uni-input-wrapper">
                                                        <div class="uni-input-placeholder input-placeholder"
                                                            data-v-9d9b8ed0="" data-v-1a01b218="" data-v-91f724d0=""
                                                            data-v-5d7012ef="" style="display: none;"></div><input
                                                            maxlength="140" step="0.000000000000000001" id="emredgin" value="1"
                                                            enterkeyhint="done" autocomplete="off" type="number"
                                                            class="uni-input-input">
                                                        <!---->
                                                    </div>
                                                </uni-input>
                                                <uni-view data-v-9d9b8ed0="" class="uni-numbox__plus" onclick="plus(emredgin)">
                                                    <uni-text data-v-9d9b8ed0="" class="uni-numbox--text"><span>+</span>
                                                    </uni-text>
                                                </uni-view>
                                            </uni-view>
                                        </uni-view>
                                        <form id="emredgform" method="post" action="emredoption.php">
                                                                        <input type="hidden" id="emredper" name="period" value="000000">
                                                                        <input type="hidden" name="ans" value="green">
                                                                        <input type="hidden" type="text" id="emredgfamount" name="amount" value="10">
                                                                    </form>
                                        <uni-view data-v-1a01b218="" class=" margin-bottom">
                                            <uni-text data-v-1a01b218=""><span>Total contract money is <span id="emredgtotal">10</span></span>
                                            </uni-text>
                                        </uni-view>
                                        <uni-checkbox-group data-v-1a01b218="" class=" block text-left margin-left">
                                            <uni-checkbox data-v-1a01b218="" class="checked">
                                                <div class="uni-checkbox-wrapper">
                                                    <div class="uni-checkbox-input uni-checkbox-input-checked"
                                                        style="color: rgb(0, 122, 255);"></div>
                                                </div>
                                            </uni-checkbox>
                                            <uni-text data-v-1a01b218="" class="sm margin-left"><span>I agree</span>
                                            </uni-text>
                                            <uni-text data-v-1a01b218="" class="sm text-blue margin-left"><span>PRESALE
                                                    RULE</span></uni-text>
                                        </uni-checkbox-group>
                                    </uni-view>
                                    <uni-view data-v-1a01b218="" class="cu-bar justify-end solids-top margin-top">
                                        <uni-view data-v-1a01b218="" class="action">
                                            <uni-button data-v-1a01b218="" id="emredclose"   class="cu-btn text-gray border">CLOSE
                                            </uni-button>
                                            <uni-button data-v-1a01b218=""   onclick="gemredproceed()" class="cu-btn text-blue border margin-left">
                                                CONFIRM</uni-button>
                                        </uni-view>
                                    </uni-view>
                                </uni-view>
                            </uni-view>





                                
                                  <uni-view data-v-1a01b218="" data-v-91f724d0="" id="emredred" class="cu-modal ">
                                <uni-view data-v-1a01b218="" class="cu-dialog bg-white">
                                    <uni-view data-v-1a01b218="" class="cu-bar justify-end bg-red">
                                        <uni-view data-v-1a01b218="" class="content" style="font-weight: bold;">Join Red
                                        </uni-view>
                                    </uni-view>
                                    <uni-view data-v-1a01b218="">
                                        <uni-view data-v-1a01b218="" class="cu-bar padding-xl">
                                            <uni-text data-v-1a01b218=""><span>Contract Money</span></uni-text>
                                        </uni-view>
                                        <uni-scroll-view data-v-1a01b218="" class="bg-white nav text-left"
                                            style="margin-left: 10px; margin-top: -20px;">
                                            <div class="uni-scroll-view">
                                                <div class="uni-scroll-view" style="overflow: auto hidden;">
                                                    <div class="uni-scroll-view-content">
                                                        <!---->
                                                        <uni-view data-v-1a01b218="" data-id="0" id="emred5" onclick="emredselr(5)"
                                                            class="cu-item text-blue cur">10</uni-view>
                                                        <uni-view data-v-1a01b218="" data-id="1"  id="emred6" onclick="emredselr(6)" class="cu-item">100
                                                        </uni-view>
                                                        <uni-view data-v-1a01b218="" data-id="2" id="emred7" onclick="emredselr(7)" class="cu-item">1000
                                                        </uni-view>
                                                        <uni-view data-v-1a01b218="" data-id="3" id="emred8" onclick="emredselr(8)" class="cu-item">10000
                                                        </uni-view>
                                                    </div>
                                                </div>
                                            </div>
                                        </uni-scroll-view>
                                        <uni-view data-v-1a01b218="" class="cu-bar  padding-xl justify-start">
                                            <uni-text data-v-1a01b218=""><span>Number</span></uni-text>
                                            <uni-view data-v-9d9b8ed0="" data-v-1a01b218="" class="uni-numbox"
                                                style="margin-left: 10px;">
                                                <uni-view data-v-9d9b8ed0="" class="uni-numbox__minus" onclick="minus(emredrin)">
                                                    <uni-text data-v-9d9b8ed0="" class="uni-numbox--text"><span>-</span>
                                                    </uni-text>
                                                </uni-view>
                                                <uni-input data-v-9d9b8ed0="" class="uni-numbox__value">
                                                    <div class="uni-input-wrapper">
                                                        <div class="uni-input-placeholder input-placeholder"
                                                            data-v-9d9b8ed0="" data-v-1a01b218="" data-v-91f724d0=""
                                                            data-v-5d7012ef="" style="display: none;"></div><input
                                                            maxlength="140" step="0.000000000000000001" id="emredrin" value="1"
                                                            enterkeyhint="done" autocomplete="off" type="number"
                                                            class="uni-input-input">
                                                        <!---->
                                                    </div>
                                                </uni-input>
                                                <uni-view data-v-9d9b8ed0="" class="uni-numbox__plus" onclick="plus(emredrin)">
                                                    <uni-text data-v-9d9b8ed0="" class="uni-numbox--text"><span>+</span>
                                                    </uni-text>
                                                </uni-view>
                                            </uni-view>
                                        </uni-view>
                                        <form id="emredrform" method="post" action="emredoption.php">
                                                                        <input type="hidden" id="emredrper" name="period" value="000000">
                                                                        <input type="hidden" name="ans" value="red">
                                                                        <input type="hidden" type="text" id="emredrfamount" name="amount"
                                                                            value="10">
                                                                    </form>
                                        <uni-view data-v-1a01b218="" class=" margin-bottom">
                                            <uni-text data-v-1a01b218=""><span>Total contract money is <span  id="emredrtotal">10</span></span>
                                            </uni-text>
                                        </uni-view>
                                        <uni-checkbox-group data-v-1a01b218="" class=" block text-left margin-left">
                                            <uni-checkbox data-v-1a01b218="" class="checked">
                                                <div class="uni-checkbox-wrapper">
                                                    <div class="uni-checkbox-input uni-checkbox-input-checked"
                                                        style="color: rgb(0, 122, 255);"></div>
                                                </div>
                                            </uni-checkbox>
                                            <uni-text data-v-1a01b218="" class="sm margin-left"><span>I agree</span>
                                            </uni-text>
                                            <uni-text data-v-1a01b218="" class="sm text-blue margin-left"><span>PRESALE
                                                    RULE</span></uni-text>
                                        </uni-checkbox-group>
                                    </uni-view>
                                    <uni-view data-v-1a01b218="" class="cu-bar justify-end solids-top margin-top">
                                        <uni-view data-v-1a01b218="" class="action">
                                            <uni-button data-v-1a01b218="" id="emredclose3" class="cu-btn text-gray border">CLOSE
                                            </uni-button>
                                            <uni-button data-v-1a01b218="" onclick="remredproceed()" class="cu-btn text-blue border margin-left">
                                                CONFIRM</uni-button>
                                        </uni-view>
                                    </uni-view>
                                </uni-view>
                            </uni-view>





                                <uni-view data-v-1a01b218="" data-v-91f724d0="" id="emredviobox" class="cu-modal ">
                                    <uni-view data-v-1a01b218="" class="cu-dialog bg-white">
                                        <uni-view data-v-1a01b218="" class="cu-bar justify-end bg-purple">
                                            <uni-view data-v-1a01b218="" class="content" style="font-weight: bold;">Join Violet
                                            </uni-view>
                                        </uni-view>
                                        <uni-view data-v-1a01b218="">
                                            <uni-view data-v-1a01b218="" class="cu-bar padding-xl">
                                                <uni-text data-v-1a01b218=""><span>Contract Money</span></uni-text>
                                            </uni-view>
                                            <uni-scroll-view data-v-1a01b218="" class="bg-white nav text-left"
                                                style="margin-left: 10px; margin-top: -20px;">
                                                <div class="uni-scroll-view">
                                                    <div class="uni-scroll-view" style="overflow: auto hidden;">
                                                        <div class="uni-scroll-view-content">
                                                            <!---->
                                                            <uni-view data-v-1a01b218="" data-id="0"  id="emred9" onclick="emredselv(9)"
                                                                class="cu-item text-blue cur">10</uni-view>
                                                            <uni-view data-v-1a01b218="" data-id="1" id="emred10" onclick="emredselv(10)" class="cu-item">100
                                                            </uni-view>
                                                            <uni-view data-v-1a01b218="" data-id="2" id="emred11" onclick="emredselv(11)" class="cu-item">1000
                                                            </uni-view>
                                                            <uni-view data-v-1a01b218="" data-id="3" id="emred12" onclick="emredselv(12)"  class="cu-item">10000
                                                            </uni-view>
                                                        </div>
                                                    </div>
                                                </div>
                                            </uni-scroll-view>
                                            <uni-view data-v-1a01b218="" class="cu-bar  padding-xl justify-start">
                                                <uni-text data-v-1a01b218=""><span>Number</span></uni-text>
                                                <uni-view data-v-9d9b8ed0="" data-v-1a01b218="" class="uni-numbox"
                                                    style="margin-left: 10px;">
                                                    <uni-view data-v-9d9b8ed0="" class="uni-numbox__minus" onclick="minus(emredvin)">
                                                        <uni-text data-v-9d9b8ed0="" class="uni-numbox--text"><span>-</span>
                                                        </uni-text>
                                                    </uni-view>
                                                    <uni-input data-v-9d9b8ed0="" class="uni-numbox__value">
                                                        <div class="uni-input-wrapper">
                                                            <div class="uni-input-placeholder input-placeholder"
                                                                data-v-9d9b8ed0="" data-v-1a01b218="" data-v-91f724d0=""
                                                                data-v-5d7012ef="" style="display: none;"></div><input
                                                                maxlength="140" step="0.000000000000000001"  id="emredvin" value="1"
                                                                enterkeyhint="done" autocomplete="off" type="number"
                                                                class="uni-input-input">
                                                            <!---->
                                                        </div>
                                                    </uni-input>
                                                    <uni-view data-v-9d9b8ed0="" class="uni-numbox__plus" onclick="plus(emredvin)">
                                                        <uni-text data-v-9d9b8ed0="" class="uni-numbox--text"><span>+</span>
                                                        </uni-text>
                                                    </uni-view>
                                                </uni-view>
                                            </uni-view>
                                            <form id="emredvform" method="post" action="emredoption.php">
                                                                        <input type="hidden" id="emredvper" name="period" value="000000">
                                                                        <input type="hidden" name="ans" value="violet">
                                                                        <input type="hidden" type="text" id="emredvfamount" name="amount" value="10">
                                                                    </form>
                                            <uni-view data-v-1a01b218="" class=" margin-bottom">
                                                <uni-text data-v-1a01b218=""><span>Total contract money is <span id="emredvtotal">10</span></span>
                                                </uni-text>
                                            </uni-view>
                                            <uni-checkbox-group data-v-1a01b218="" class=" block text-left margin-left">
                                                <uni-checkbox data-v-1a01b218="" class="checked">
                                                    <div class="uni-checkbox-wrapper">
                                                        <div class="uni-checkbox-input uni-checkbox-input-checked"
                                                            style="color: rgb(0, 122, 255);"></div>
                                                    </div>
                                                </uni-checkbox>
                                                <uni-text data-v-1a01b218="" class="sm margin-left"><span>I agree</span>
                                                </uni-text>
                                                <uni-text data-v-1a01b218="" class="sm text-blue margin-left"><span>PRESALE
                                                        RULE</span></uni-text>
                                            </uni-checkbox-group>
                                        </uni-view>
                                        <uni-view data-v-1a01b218="" class="cu-bar justify-end solids-top margin-top">
                                            <uni-view data-v-1a01b218="" class="action">
                                                <uni-button data-v-1a01b218="" id="emredclose1" class="cu-btn text-gray border">CLOSE
                                                </uni-button>
                                                <uni-button data-v-1a01b218="" onclick="vemredproceed()" class="cu-btn text-blue border margin-left">
                                                    CONFIRM</uni-button>
                                            </uni-view>
                                        </uni-view>
                                    </uni-view>
                                </uni-view>











                                    <uni-view data-v-1a01b218="" data-v-91f724d0="" id="emred0box" class="cu-modal ">
                                        <uni-view data-v-1a01b218="" class="cu-dialog bg-white">
                                            <uni-view data-v-1a01b218="" class="cu-bar justify-end bg-blue">
                                                <uni-view data-v-1a01b218="" class="content" style="font-weight: bold;"> Select 0
                                                </uni-view>
                                            </uni-view>
                                            <uni-view data-v-1a01b218="">
                                                <uni-view data-v-1a01b218="" class="cu-bar padding-xl">
                                                    <uni-text data-v-1a01b218=""><span>Contract Money</span></uni-text>
                                                </uni-view>
                                                <uni-scroll-view data-v-1a01b218="" class="bg-white nav text-left"
                                                    style="margin-left: 10px; margin-top: -20px;">
                                                    <div class="uni-scroll-view">
                                                        <div class="uni-scroll-view" style="overflow: auto hidden;">
                                                            <div class="uni-scroll-view-content">
                                                                <!---->
                                                                <uni-view data-v-1a01b218="" data-id="0"  id="emred13" onclick="emredsel0(13)"
                                                                    class="cu-item text-blue cur">10</uni-view>
                                                                <uni-view data-v-1a01b218="" data-id="1"  id="emred14" onclick="emredsel0(14)" class="cu-item">100
                                                                </uni-view>
                                                                <uni-view data-v-1a01b218="" data-id="2" id="emred15" onclick="emredsel0(15)" class="cu-item">1000
                                                                </uni-view>
                                                                <uni-view data-v-1a01b218="" data-id="3" id="emred16" onclick="emredsel0(16)" class="cu-item">10000
                                                                </uni-view>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </uni-scroll-view>
                                                <uni-view data-v-1a01b218="" class="cu-bar  padding-xl justify-start">
                                                    <uni-text data-v-1a01b218=""><span>Number</span></uni-text>
                                                    <uni-view data-v-9d9b8ed0="" data-v-1a01b218="" class="uni-numbox"
                                                        style="margin-left: 10px;">
                                                        <uni-view data-v-9d9b8ed0="" class="uni-numbox__minus" onclick="minus(emredin0)">
                                                            <uni-text data-v-9d9b8ed0="" class="uni-numbox--text"><span>-</span>
                                                            </uni-text>
                                                        </uni-view>
                                                        <uni-input data-v-9d9b8ed0="" class="uni-numbox__value">
                                                            <div class="uni-input-wrapper">
                                                                <div class="uni-input-placeholder input-placeholder"
                                                                    data-v-9d9b8ed0="" data-v-1a01b218="" data-v-91f724d0=""
                                                                    data-v-5d7012ef="" style="display: none;"></div><input
                                                                    maxlength="140" step="0.000000000000000001" id="emredin0" value="1"
                                                                    enterkeyhint="done" autocomplete="off" type="number"
                                                                    class="uni-input-input">
                                                                <!---->
                                                            </div>
                                                        </uni-input>
                                                        <uni-view data-v-9d9b8ed0="" class="uni-numbox__plus"  onclick="plus(emredin0)">
                                                            <uni-text data-v-9d9b8ed0="" class="uni-numbox--text"><span>+</span>
                                                            </uni-text>
                                                        </uni-view>
                                                    </uni-view>
                                                </uni-view>
                                                <form id="emred0form" method="post" action="emredoption.php">
                                                                        <input type="hidden" id="emredper0" name="period" value="000000">
                                                                        <input type="hidden" name="ans" value="0">
                                                                        <input type="hidden" type="text" id="emredfamount0" name="amount" value="10">
                                                                    </form>
                                                <uni-view data-v-1a01b218="" class=" margin-bottom">
                                                    <uni-text data-v-1a01b218=""><span>Total contract money is <span id="emred0total" >10</span></span>
                                                    </uni-text>
                                                </uni-view>
                                                <uni-checkbox-group data-v-1a01b218="" class=" block text-left margin-left">
                                                    <uni-checkbox data-v-1a01b218="" class="checked">
                                                        <div class="uni-checkbox-wrapper">
                                                            <div class="uni-checkbox-input uni-checkbox-input-checked"
                                                                style="color: rgb(0, 122, 255);"></div>
                                                        </div>
                                                    </uni-checkbox>
                                                    <uni-text data-v-1a01b218="" class="sm margin-left"><span>I agree</span>
                                                    </uni-text>
                                                    <uni-text data-v-1a01b218="" class="sm text-blue margin-left"><span>PRESALE
                                                            RULE</span></uni-text>
                                                </uni-checkbox-group>
                                            </uni-view>
                                            <uni-view data-v-1a01b218="" class="cu-bar justify-end solids-top margin-top">
                                                <uni-view data-v-1a01b218="" class="action">
                                                    <uni-button data-v-1a01b218="" class="cu-btn text-gray border"  onclick="emredc0()">CLOSE
                                                    </uni-button>
                                                    <uni-button data-v-1a01b218="" class="cu-btn text-blue border margin-left" onclick="emredproceed0()">
                                                        CONFIRM</uni-button>
                                                </uni-view>
                                            </uni-view>
                                        </uni-view>
                                    </uni-view>
                                        




                                
                                  <uni-view data-v-1a01b218="" data-v-91f724d0="" id="emred1box" class="cu-modal ">
                                    <uni-view data-v-1a01b218="" class="cu-dialog bg-white">
                                        <uni-view data-v-1a01b218="" class="cu-bar justify-end bg-blue">
                                            <uni-view data-v-1a01b218="" class="content" style="font-weight: bold;">Select 1
                                            </uni-view>
                                        </uni-view>
                                        <uni-view data-v-1a01b218="">
                                            <uni-view data-v-1a01b218="" class="cu-bar padding-xl">
                                                <uni-text data-v-1a01b218=""><span>Contract Money</span></uni-text>
                                            </uni-view>
                                            <uni-scroll-view data-v-1a01b218="" class="bg-white nav text-left"
                                                style="margin-left: 10px; margin-top: -20px;">
                                                <div class="uni-scroll-view">
                                                    <div class="uni-scroll-view" style="overflow: auto hidden;">
                                                        <div class="uni-scroll-view-content">
                                                            <!---->
                                                            <uni-view data-v-1a01b218="" data-id="0" id="emred17" onclick="emredsel1(17)"
                                                                class="cu-item text-blue cur">10</uni-view>
                                                            <uni-view data-v-1a01b218="" data-id="1"  id="emred18" onclick="emredsel1(18)" class="cu-item">100
                                                            </uni-view>
                                                            <uni-view data-v-1a01b218="" data-id="2" id="emred19" onclick="emredsel1(19)" class="cu-item">1000
                                                            </uni-view>
                                                            <uni-view data-v-1a01b218="" data-id="3" id="emred20" onclick="emredsel1(20)" class="cu-item">10000
                                                            </uni-view>
                                                        </div>
                                                    </div>
                                                </div>
                                            </uni-scroll-view>
                                            <uni-view data-v-1a01b218="" class="cu-bar  padding-xl justify-start">
                                                <uni-text data-v-1a01b218=""><span>Number</span></uni-text>
                                                <uni-view data-v-9d9b8ed0="" data-v-1a01b218="" class="uni-numbox"
                                                    style="margin-left: 10px;">
                                                    <uni-view data-v-9d9b8ed0="" class="uni-numbox__minus" onclick="minus(emredin1)">
                                                        <uni-text data-v-9d9b8ed0="" class="uni-numbox--text"><span>-</span>
                                                        </uni-text>
                                                    </uni-view>
                                                    <uni-input data-v-9d9b8ed0="" class="uni-numbox__value">
                                                        <div class="uni-input-wrapper">
                                                            <div class="uni-input-placeholder input-placeholder"
                                                                data-v-9d9b8ed0="" data-v-1a01b218="" data-v-91f724d0=""
                                                                data-v-5d7012ef="" style="display: none;"></div><input
                                                                maxlength="140" step="0.000000000000000001" id="emredin1" value="1"
                                                                enterkeyhint="done" autocomplete="off" type="number"
                                                                class="uni-input-input">
                                                            <!---->
                                                        </div>
                                                    </uni-input>
                                                    <uni-view data-v-9d9b8ed0="" class="uni-numbox__plus" onclick="plus(emredin1)">
                                                        <uni-text data-v-9d9b8ed0="" class="uni-numbox--text"><span>+</span>
                                                        </uni-text>
                                                    </uni-view>
                                                </uni-view>
                                            </uni-view>
                                            <form id="emred1form" method="post" action="emredoption.php">
                                                                        <input type="hidden" id="emredper1" name="period" value="000000">
                                                                        <input type="hidden" name="ans" value="1">
                                                                        <input type="hidden" type="text" id="emredfamount1" name="amount" value="10">
                                                                    </form>
                                            <uni-view data-v-1a01b218="" class=" margin-bottom">
                                                <uni-text data-v-1a01b218=""><span>Total contract money is <span id="emred1total">10</span></span>
                                                </uni-text>
                                            </uni-view>
                                            <uni-checkbox-group data-v-1a01b218="" class=" block text-left margin-left">
                                                <uni-checkbox data-v-1a01b218="" class="checked">
                                                    <div class="uni-checkbox-wrapper">
                                                        <div class="uni-checkbox-input uni-checkbox-input-checked"
                                                            style="color: rgb(0, 122, 255);"></div>
                                                    </div>
                                                </uni-checkbox>
                                                <uni-text data-v-1a01b218="" class="sm margin-left"><span>I agree</span>
                                                </uni-text>
                                                <uni-text data-v-1a01b218="" class="sm text-blue margin-left"><span>PRESALE
                                                        RULE</span></uni-text>
                                            </uni-checkbox-group>
                                        </uni-view>
                                        <uni-view data-v-1a01b218="" class="cu-bar justify-end solids-top margin-top">
                                            <uni-view data-v-1a01b218="" class="action">
                                                <uni-button data-v-1a01b218="" class="cu-btn text-gray border" onclick="emredc1()">CLOSE
                                                </uni-button>
                                                <uni-button data-v-1a01b218="" class="cu-btn text-blue border margin-left" onclick="emredproceed1()">
                                                    CONFIRM</uni-button>
                                            </uni-view>
                                        </uni-view>
                                    </uni-view>
                                </uni-view>
                                    




                                
                                  <uni-view data-v-1a01b218="" data-v-91f724d0="" id="emred2box" class="cu-modal ">
                                    <uni-view data-v-1a01b218="" class="cu-dialog bg-white">
                                        <uni-view data-v-1a01b218="" class="cu-bar justify-end bg-blue">
                                            <uni-view data-v-1a01b218="" class="content" style="font-weight: bold;">Select 2
                                            </uni-view>
                                        </uni-view>
                                        <uni-view data-v-1a01b218="">
                                            <uni-view data-v-1a01b218="" class="cu-bar padding-xl">
                                                <uni-text data-v-1a01b218=""><span>Contract Money</span></uni-text>
                                            </uni-view>
                                            <uni-scroll-view data-v-1a01b218="" class="bg-white nav text-left"
                                                style="margin-left: 10px; margin-top: -20px;">
                                                <div class="uni-scroll-view">
                                                    <div class="uni-scroll-view" style="overflow: auto hidden;">
                                                        <div class="uni-scroll-view-content">
                                                            <!---->
                                                            <uni-view data-v-1a01b218="" data-id="0" id="emred21" onclick="emredsel2(21)"
                                                                class="cu-item text-blue cur">10</uni-view>
                                                            <uni-view data-v-1a01b218="" data-id="1" id="emred22" onclick="emredsel2(22)" class="cu-item">100
                                                            </uni-view>
                                                            <uni-view data-v-1a01b218="" data-id="2" id="emred23" onclick="emredsel2(23)" class="cu-item">1000
                                                            </uni-view>
                                                            <uni-view data-v-1a01b218="" data-id="3" id="emred24" onclick="emredsel2(24)" class="cu-item">10000
                                                            </uni-view>
                                                        </div>
                                                    </div>
                                                </div>
                                            </uni-scroll-view>
                                            <uni-view data-v-1a01b218="" class="cu-bar  padding-xl justify-start">
                                                <uni-text data-v-1a01b218=""><span>Number</span></uni-text>
                                                <uni-view data-v-9d9b8ed0="" data-v-1a01b218="" class="uni-numbox"
                                                    style="margin-left: 10px;">
                                                    <uni-view data-v-9d9b8ed0="" class="uni-numbox__minus" onclick="minus(emredin2)">
                                                        <uni-text data-v-9d9b8ed0="" class="uni-numbox--text"><span>-</span>
                                                        </uni-text>
                                                    </uni-view>
                                                    <uni-input data-v-9d9b8ed0="" class="uni-numbox__value">
                                                        <div class="uni-input-wrapper">
                                                            <div class="uni-input-placeholder input-placeholder"
                                                                data-v-9d9b8ed0="" data-v-1a01b218="" data-v-91f724d0=""
                                                                data-v-5d7012ef="" style="display: none;"></div><input
                                                                maxlength="140" step="0.000000000000000001" id="emredin2" value="1"
                                                                enterkeyhint="done" autocomplete="off" type="number"
                                                                class="uni-input-input">
                                                            <!---->
                                                        </div>
                                                    </uni-input>
                                                    <uni-view data-v-9d9b8ed0="" class="uni-numbox__plus" onclick="plus(emredin2)">
                                                        <uni-text data-v-9d9b8ed0="" class="uni-numbox--text"><span>+</span>
                                                        </uni-text>
                                                    </uni-view>
                                                </uni-view>
                                            </uni-view>
                                            <form id="emred2form" method="post" action="emredoption.php">
                                                                        <input type="hidden" id="emredper2" name="period" value="000000">
                                                                        <input type="hidden" name="ans" value="2">
                                                                        <input type="hidden" type="text" id="emredfamount2" name="amount" value="10">
                                                                    </form>
                                            <uni-view data-v-1a01b218="" class=" margin-bottom">
                                                <uni-text data-v-1a01b218=""><span>Total contract money is <span id="emred2total">10</span></span>
                                                </uni-text>
                                            </uni-view>
                                            <uni-checkbox-group data-v-1a01b218="" class=" block text-left margin-left">
                                                <uni-checkbox data-v-1a01b218="" class="checked">
                                                    <div class="uni-checkbox-wrapper">
                                                        <div class="uni-checkbox-input uni-checkbox-input-checked"
                                                            style="color: rgb(0, 122, 255);"></div>
                                                    </div>
                                                </uni-checkbox>
                                                <uni-text data-v-1a01b218="" class="sm margin-left"><span>I agree</span>
                                                </uni-text>
                                                <uni-text data-v-1a01b218="" class="sm text-blue margin-left"><span>PRESALE
                                                        RULE</span></uni-text>
                                            </uni-checkbox-group>
                                        </uni-view>
                                        <uni-view data-v-1a01b218="" class="cu-bar justify-end solids-top margin-top">
                                            <uni-view data-v-1a01b218="" class="action">
                                                <uni-button data-v-1a01b218=""  class="cu-btn text-gray border" onclick="emredc2()">CLOSE
                                                </uni-button>
                                                <uni-button data-v-1a01b218="" class="cu-btn text-blue border margin-left"  onclick="emredproceed2()">
                                                    CONFIRM</uni-button>
                                            </uni-view>
                                        </uni-view>
                                    </uni-view>
                                </uni-view>
    
    

                                    




                                
                                  <uni-view data-v-1a01b218="" data-v-91f724d0="" id="emred3box" class="cu-modal ">
                                    <uni-view data-v-1a01b218="" class="cu-dialog bg-white">
                                        <uni-view data-v-1a01b218="" class="cu-bar justify-end bg-blue">
                                            <uni-view data-v-1a01b218="" class="content" style="font-weight: bold;">Select 3
                                            </uni-view>
                                        </uni-view>
                                        <uni-view data-v-1a01b218="">
                                            <uni-view data-v-1a01b218="" class="cu-bar padding-xl">
                                                <uni-text data-v-1a01b218=""><span>Contract Money</span></uni-text>
                                            </uni-view>
                                            <uni-scroll-view data-v-1a01b218="" class="bg-white nav text-left"
                                                style="margin-left: 10px; margin-top: -20px;">
                                                <div class="uni-scroll-view">
                                                    <div class="uni-scroll-view" style="overflow: auto hidden;">
                                                        <div class="uni-scroll-view-content">
                                                            <!---->
                                                            <uni-view data-v-1a01b218="" data-id="0" id="emred25" onclick="emredsel3(25)" 
                                                                class="cu-item text-blue cur">10</uni-view>
                                                            <uni-view data-v-1a01b218="" data-id="1"  id="emred26" onclick="emredsel3(26)" class="cu-item">100
                                                            </uni-view>
                                                            <uni-view data-v-1a01b218="" data-id="2" id="emred27" onclick="emredsel3(27)" class="cu-item">1000
                                                            </uni-view>
                                                            <uni-view data-v-1a01b218="" data-id="3" id="emred28" onclick="emredsel3(28)" class="cu-item">10000
                                                            </uni-view>
                                                        </div>
                                                    </div>
                                                </div>
                                            </uni-scroll-view>
                                            <uni-view data-v-1a01b218="" class="cu-bar  padding-xl justify-start">
                                                <uni-text data-v-1a01b218=""><span>Number</span></uni-text>
                                                <uni-view data-v-9d9b8ed0="" data-v-1a01b218="" class="uni-numbox"
                                                    style="margin-left: 10px;">
                                                    <uni-view data-v-9d9b8ed0="" class="uni-numbox__minus" onclick="minus(emredin3)">
                                                        <uni-text data-v-9d9b8ed0="" class="uni-numbox--text"><span>-</span>
                                                        </uni-text>
                                                    </uni-view>
                                                    <uni-input data-v-9d9b8ed0="" class="uni-numbox__value">
                                                        <div class="uni-input-wrapper">
                                                            <div class="uni-input-placeholder input-placeholder"
                                                                data-v-9d9b8ed0="" data-v-1a01b218="" data-v-91f724d0=""
                                                                data-v-5d7012ef="" style="display: none;"></div><input
                                                                maxlength="140" step="0.000000000000000001" id="emredin3" value="1"
                                                                enterkeyhint="done" autocomplete="off" type="number"
                                                                class="uni-input-input">
                                                            <!---->
                                                        </div>
                                                    </uni-input>
                                                    <uni-view data-v-9d9b8ed0="" class="uni-numbox__plus" onclick="plus(emredin3)">
                                                        <uni-text data-v-9d9b8ed0="" class="uni-numbox--text"><span>+</span>
                                                        </uni-text>
                                                    </uni-view>
                                                </uni-view>
                                            </uni-view>
                                            <form id="emred3form" method="post" action="emredoption.php">
                                                                        <input type="hidden" id="emredper3" name="period" value="000000">
                                                                        <input type="hidden" name="ans" value="3">
                                                                        <input type="hidden" type="text" id="emredfamount3" name="amount" value="10">
                                                                    </form>
                                            <uni-view data-v-1a01b218="" class=" margin-bottom">
                                                <uni-text data-v-1a01b218=""><span>Total contract money is <span id="emred3total" >10</span></span>
                                                </uni-text>
                                            </uni-view>
                                            <uni-checkbox-group data-v-1a01b218="" class=" block text-left margin-left">
                                                <uni-checkbox data-v-1a01b218="" class="checked">
                                                    <div class="uni-checkbox-wrapper">
                                                        <div class="uni-checkbox-input uni-checkbox-input-checked"
                                                            style="color: rgb(0, 122, 255);"></div>
                                                    </div>
                                                </uni-checkbox>
                                                <uni-text data-v-1a01b218="" class="sm margin-left"><span>I agree</span>
                                                </uni-text>
                                                <uni-text data-v-1a01b218="" class="sm text-blue margin-left"><span>PRESALE
                                                        RULE</span></uni-text>
                                            </uni-checkbox-group>
                                        </uni-view>
                                        <uni-view data-v-1a01b218="" class="cu-bar justify-end solids-top margin-top">
                                            <uni-view data-v-1a01b218="" class="action">
                                                <uni-button data-v-1a01b218="" class="cu-btn text-gray border" onclick="emredc3()">CLOSE
                                                </uni-button>
                                                <uni-button data-v-1a01b218="" class="cu-btn text-blue border margin-left" onclick="emredproceed3()">
                                                    CONFIRM</uni-button>
                                            </uni-view>
                                        </uni-view>
                                    </uni-view>
                                </uni-view>
    
    
    
                                    




                                
                                  <uni-view data-v-1a01b218="" data-v-91f724d0="" id="emred4box" class="cu-modal ">
                                    <uni-view data-v-1a01b218="" class="cu-dialog bg-white">
                                        <uni-view data-v-1a01b218="" class="cu-bar justify-end bg-blue">
                                            <uni-view data-v-1a01b218="" class="content" style="font-weight: bold;">Select 4
                                            </uni-view>
                                        </uni-view>
                                        <uni-view data-v-1a01b218="">
                                            <uni-view data-v-1a01b218="" class="cu-bar padding-xl">
                                                <uni-text data-v-1a01b218=""><span>Contract Money</span></uni-text>
                                            </uni-view>
                                            <uni-scroll-view data-v-1a01b218="" class="bg-white nav text-left"
                                                style="margin-left: 10px; margin-top: -20px;">
                                                <div class="uni-scroll-view">
                                                    <div class="uni-scroll-view" style="overflow: auto hidden;">
                                                        <div class="uni-scroll-view-content">
                                                            <!---->
                                                            <uni-view data-v-1a01b218="" data-id="0" id="emred29" onclick="emredsel4(29)"
                                                                class="cu-item text-blue cur">10</uni-view>
                                                            <uni-view data-v-1a01b218="" data-id="1"  id="emred30" onclick="emredsel4(30)" class="cu-item">100
                                                            </uni-view>
                                                            <uni-view data-v-1a01b218="" data-id="2" id="emred31" onclick="emredsel4(31)" class="cu-item">1000
                                                            </uni-view>
                                                            <uni-view data-v-1a01b218="" data-id="3" id="emred32" onclick="emredsel4(32)" class="cu-item">10000
                                                            </uni-view>
                                                        </div>
                                                    </div>
                                                </div>
                                            </uni-scroll-view>
                                            <uni-view data-v-1a01b218="" class="cu-bar  padding-xl justify-start">
                                                <uni-text data-v-1a01b218=""><span>Number</span></uni-text>
                                                <uni-view data-v-9d9b8ed0="" data-v-1a01b218="" class="uni-numbox"
                                                    style="margin-left: 10px;">
                                                    <uni-view data-v-9d9b8ed0="" class="uni-numbox__minus" onclick="minus(emredin4)">
                                                        <uni-text data-v-9d9b8ed0="" class="uni-numbox--text"><span>-</span>
                                                        </uni-text>
                                                    </uni-view>
                                                    <uni-input data-v-9d9b8ed0="" class="uni-numbox__value">
                                                        <div class="uni-input-wrapper">
                                                            <div class="uni-input-placeholder input-placeholder"
                                                                data-v-9d9b8ed0="" data-v-1a01b218="" data-v-91f724d0=""
                                                                data-v-5d7012ef="" style="display: none;"></div><input
                                                                maxlength="140" step="0.000000000000000001" id="emredin4" value="1"
                                                                enterkeyhint="done" autocomplete="off" type="number"
                                                                class="uni-input-input">
                                                            <!---->
                                                        </div>
                                                    </uni-input>
                                                    <uni-view data-v-9d9b8ed0="" class="uni-numbox__plus" onclick="plus(emredin4)">
                                                        <uni-text data-v-9d9b8ed0="" class="uni-numbox--text"><span>+</span>
                                                        </uni-text>
                                                    </uni-view>
                                                </uni-view>
                                            </uni-view>
                                            <form id="emred4form" method="post" action="emredoption.php">
                                                                        <input type="hidden" id="emredper4" name="period" value="000000">
                                                                        <input type="hidden" name="ans" value="4">
                                                                        <input type="hidden" type="text" id="emredfamount4" name="amount" value="10">
                                                                    </form>
                                            <uni-view data-v-1a01b218="" class=" margin-bottom">
                                                <uni-text data-v-1a01b218=""><span>Total contract money is <span id="emred4total">10</span></span>
                                                </uni-text>
                                            </uni-view>
                                            <uni-checkbox-group data-v-1a01b218="" class=" block text-left margin-left">
                                                <uni-checkbox data-v-1a01b218="" class="checked">
                                                    <div class="uni-checkbox-wrapper">
                                                        <div class="uni-checkbox-input uni-checkbox-input-checked"
                                                            style="color: rgb(0, 122, 255);"></div>
                                                    </div>
                                                </uni-checkbox>
                                                <uni-text data-v-1a01b218="" class="sm margin-left"><span>I agree</span>
                                                </uni-text>
                                                <uni-text data-v-1a01b218="" class="sm text-blue margin-left"><span>PRESALE
                                                        RULE</span></uni-text>
                                            </uni-checkbox-group>
                                        </uni-view>
                                        <uni-view data-v-1a01b218="" class="cu-bar justify-end solids-top margin-top">
                                            <uni-view data-v-1a01b218="" class="action">
                                                <uni-button data-v-1a01b218="" class="cu-btn text-gray border" onclick="emredc4()">CLOSE
                                                </uni-button>
                                                <uni-button data-v-1a01b218="" class="cu-btn text-blue border margin-left" onclick="emredproceed4()">
                                                    CONFIRM</uni-button>
                                            </uni-view>
                                        </uni-view>
                                    </uni-view>
                                     </uni-view>
    
    

                                    




                                
                                  <uni-view data-v-1a01b218="" data-v-91f724d0="" id="emred5box" class="cu-modal ">
                                    <uni-view data-v-1a01b218="" class="cu-dialog bg-white">
                                        <uni-view data-v-1a01b218="" class="cu-bar justify-end bg-blue">
                                            <uni-view data-v-1a01b218="" class="content" style="font-weight: bold;">Select 5
                                            </uni-view>
                                        </uni-view>
                                        <uni-view data-v-1a01b218="">
                                            <uni-view data-v-1a01b218="" class="cu-bar padding-xl">
                                                <uni-text data-v-1a01b218=""><span>Contract Money</span></uni-text>
                                            </uni-view>
                                            <uni-scroll-view data-v-1a01b218="" class="bg-white nav text-left"
                                                style="margin-left: 10px; margin-top: -20px;">
                                                <div class="uni-scroll-view">
                                                    <div class="uni-scroll-view" style="overflow: auto hidden;">
                                                        <div class="uni-scroll-view-content">
                                                            <!---->
                                                            <uni-view data-v-1a01b218="" data-id="0"  id="emred33" onclick="emredsel5(33)"
                                                                class="cu-item text-blue cur">10</uni-view>
                                                            <uni-view data-v-1a01b218="" data-id="1" id="emred34" onclick="emredsel5(34)" class="cu-item">100
                                                            </uni-view>
                                                            <uni-view data-v-1a01b218="" data-id="2" id="emred35" onclick="emredsel5(35)" class="cu-item">1000
                                                            </uni-view>
                                                            <uni-view data-v-1a01b218="" data-id="3" id="emred36" onclick="emredsel5(36)" class="cu-item">10000
                                                            </uni-view>
                                                        </div>
                                                    </div>
                                                </div>
                                            </uni-scroll-view>
                                            <uni-view data-v-1a01b218="" class="cu-bar  padding-xl justify-start">
                                                <uni-text data-v-1a01b218=""><span>Number</span></uni-text>
                                                <uni-view data-v-9d9b8ed0="" data-v-1a01b218="" class="uni-numbox"
                                                    style="margin-left: 10px;">
                                                    <uni-view data-v-9d9b8ed0="" class="uni-numbox__minus" onclick="minus(emredin5)">
                                                        <uni-text data-v-9d9b8ed0="" class="uni-numbox--text"><span>-</span>
                                                        </uni-text>
                                                    </uni-view>
                                                    <uni-input data-v-9d9b8ed0="" class="uni-numbox__value">
                                                        <div class="uni-input-wrapper">
                                                            <div class="uni-input-placeholder input-placeholder"
                                                                data-v-9d9b8ed0="" data-v-1a01b218="" data-v-91f724d0=""
                                                                data-v-5d7012ef="" style="display: none;"></div><input
                                                                maxlength="140" step="0.000000000000000001" id="emredin5" value="1"
                                                                enterkeyhint="done" autocomplete="off" type="number"
                                                                class="uni-input-input">
                                                            <!---->
                                                        </div>
                                                    </uni-input>
                                                    <uni-view data-v-9d9b8ed0="" class="uni-numbox__plus" onclick="plus(emredin5)">
                                                        <uni-text data-v-9d9b8ed0="" class="uni-numbox--text"><span>+</span>
                                                        </uni-text>
                                                    </uni-view>
                                                </uni-view>
                                            </uni-view>
                                            <form id="emred5form" method="post" action="emredoption.php">
                                                                        <input type="hidden" id="emredper5" name="period" value="000000">
                                                                        <input type="hidden" name="ans" value="5">
                                                                        <input type="hidden" type="text" id="emredfamount5" name="amount" value="10">
                                                                    </form>
                                            <uni-view data-v-1a01b218="" class=" margin-bottom">
                                                <uni-text data-v-1a01b218=""><span>Total contract money is <span id="emred5total">10</span></span>
                                                </uni-text>
                                            </uni-view>
                                            <uni-checkbox-group data-v-1a01b218="" class=" block text-left margin-left">
                                                <uni-checkbox data-v-1a01b218="" class="checked">
                                                    <div class="uni-checkbox-wrapper">
                                                        <div class="uni-checkbox-input uni-checkbox-input-checked"
                                                            style="color: rgb(0, 122, 255);"></div>
                                                    </div>
                                                </uni-checkbox>
                                                <uni-text data-v-1a01b218="" class="sm margin-left"><span>I agree</span>
                                                </uni-text>
                                                <uni-text data-v-1a01b218="" class="sm text-blue margin-left"><span>PRESALE
                                                        RULE</span></uni-text>
                                            </uni-checkbox-group>
                                        </uni-view>
                                        <uni-view data-v-1a01b218="" class="cu-bar justify-end solids-top margin-top">
                                            <uni-view data-v-1a01b218="" class="action">
                                                <uni-button data-v-1a01b218="" class="cu-btn text-gray border" onclick="emredc5()">CLOSE
                                                </uni-button>
                                                <uni-button data-v-1a01b218="" class="cu-btn text-blue border margin-left" onclick="emredproceed5()">
                                                    CONFIRM</uni-button>
                                            </uni-view>
                                        </uni-view>
                                    </uni-view>
                                </uni-view>
    
    

                                    




                                
                                  <uni-view data-v-1a01b218="" data-v-91f724d0="" id="emred6box" class="cu-modal ">
                                    <uni-view data-v-1a01b218="" class="cu-dialog bg-white">
                                        <uni-view data-v-1a01b218="" class="cu-bar justify-end bg-blue">
                                            <uni-view data-v-1a01b218="" class="content" style="font-weight: bold;">Select 6
                                            </uni-view>
                                        </uni-view>
                                        <uni-view data-v-1a01b218="">
                                            <uni-view data-v-1a01b218="" class="cu-bar padding-xl">
                                                <uni-text data-v-1a01b218=""><span>Contract Money</span></uni-text>
                                            </uni-view>
                                            <uni-scroll-view data-v-1a01b218="" class="bg-white nav text-left"
                                                style="margin-left: 10px; margin-top: -20px;">
                                                <div class="uni-scroll-view">
                                                    <div class="uni-scroll-view" style="overflow: auto hidden;">
                                                        <div class="uni-scroll-view-content">
                                                            <!---->
                                                            <uni-view data-v-1a01b218="" data-id="0" id="emred37" onclick="emredsel6(37)"
                                                                class="cu-item text-blue cur">10</uni-view>
                                                            <uni-view data-v-1a01b218="" data-id="1" id="emred38" onclick="emredsel6(38)"  class="cu-item">100
                                                            </uni-view>
                                                            <uni-view data-v-1a01b218="" data-id="2" id="emred39" onclick="emredsel6(39)"  class="cu-item">1000
                                                            </uni-view>
                                                            <uni-view data-v-1a01b218="" data-id="3"  id="emred40" onclick="emredsel6(40)" class="cu-item">10000
                                                            </uni-view>
                                                        </div>
                                                    </div>
                                                </div>
                                            </uni-scroll-view>
                                            <uni-view data-v-1a01b218="" class="cu-bar  padding-xl justify-start">
                                                <uni-text data-v-1a01b218=""><span>Number</span></uni-text>
                                                <uni-view data-v-9d9b8ed0="" data-v-1a01b218="" class="uni-numbox"
                                                    style="margin-left: 10px;">
                                                    <uni-view data-v-9d9b8ed0="" class="uni-numbox__minus" onclick="minus(emredin6)">
                                                        <uni-text data-v-9d9b8ed0="" class="uni-numbox--text"><span>-</span>
                                                        </uni-text>
                                                    </uni-view>
                                                    <uni-input data-v-9d9b8ed0="" class="uni-numbox__value">
                                                        <div class="uni-input-wrapper">
                                                            <div class="uni-input-placeholder input-placeholder"
                                                                data-v-9d9b8ed0="" data-v-1a01b218="" data-v-91f724d0=""
                                                                data-v-5d7012ef="" style="display: none;"></div><input
                                                                maxlength="140" step="0.000000000000000001"  id="emredin6" value="1"
                                                                enterkeyhint="done" autocomplete="off" type="number"
                                                                class="uni-input-input">
                                                            <!---->
                                                        </div>
                                                    </uni-input>
                                                    <uni-view data-v-9d9b8ed0="" class="uni-numbox__plus" onclick="plus(emredin6)">
                                                        <uni-text data-v-9d9b8ed0="" class="uni-numbox--text"><span>+</span>
                                                        </uni-text>
                                                    </uni-view>
                                                </uni-view>
                                            </uni-view>
                                            <form id="emred6form" method="post" action="emredoption.php">
                                                                        <input type="hidden" id="emredper6" name="period" value="000000">
                                                                        <input type="hidden" name="ans" value="6">
                                                                        <input type="hidden" type="text" id="emredfamount6" name="amount" value="10">
                                                                    </form>
                                            <uni-view data-v-1a01b218="" class=" margin-bottom">
                                                <uni-text data-v-1a01b218=""><span>Total contract money is <span id="emred6total">10</span></span>
                                                </uni-text>
                                            </uni-view>
                                            <uni-checkbox-group data-v-1a01b218="" class=" block text-left margin-left">
                                                <uni-checkbox data-v-1a01b218="" class="checked">
                                                    <div class="uni-checkbox-wrapper">
                                                        <div class="uni-checkbox-input uni-checkbox-input-checked"
                                                            style="color: rgb(0, 122, 255);"></div>
                                                    </div>
                                                </uni-checkbox>
                                                <uni-text data-v-1a01b218="" class="sm margin-left"><span>I agree</span>
                                                </uni-text>
                                                <uni-text data-v-1a01b218="" class="sm text-blue margin-left"><span>PRESALE
                                                        RULE</span></uni-text>
                                            </uni-checkbox-group>
                                        </uni-view>
                                        <uni-view data-v-1a01b218="" class="cu-bar justify-end solids-top margin-top">
                                            <uni-view data-v-1a01b218="" class="action">
                                                <uni-button data-v-1a01b218="" class="cu-btn text-gray border"  onclick="emredc6()">CLOSE
                                                </uni-button>
                                                <uni-button data-v-1a01b218="" class="cu-btn text-blue border margin-left" onclick="emredproceed6()">
                                                    CONFIRM</uni-button>
                                            </uni-view>
                                        </uni-view>
                                    </uni-view>
                                </uni-view>
    
    

                                    




                                
                                  <uni-view data-v-1a01b218="" data-v-91f724d0="" id="emred7box" class="cu-modal ">
                                    <uni-view data-v-1a01b218="" class="cu-dialog bg-white">
                                        <uni-view data-v-1a01b218="" class="cu-bar justify-end bg-blue">
                                            <uni-view data-v-1a01b218="" class="content" style="font-weight: bold;">Select 7
                                            </uni-view>
                                        </uni-view>
                                        <uni-view data-v-1a01b218="">
                                            <uni-view data-v-1a01b218="" class="cu-bar padding-xl">
                                                <uni-text data-v-1a01b218=""><span>Contract Money</span></uni-text>
                                            </uni-view>
                                            <uni-scroll-view data-v-1a01b218="" class="bg-white nav text-left"
                                                style="margin-left: 10px; margin-top: -20px;">
                                                <div class="uni-scroll-view">
                                                    <div class="uni-scroll-view" style="overflow: auto hidden;">
                                                        <div class="uni-scroll-view-content">
                                                            <!---->
                                                            <uni-view data-v-1a01b218="" data-id="0" id="emred41" onclick="emredsel7(41)"
                                                                class="cu-item text-blue cur">10</uni-view>
                                                            <uni-view data-v-1a01b218="" data-id="1" id="emred42" onclick="emredsel7(42)" class="cu-item">100
                                                            </uni-view>
                                                            <uni-view data-v-1a01b218="" data-id="2" id="emred43" onclick="emredsel7(43)" class="cu-item">1000
                                                            </uni-view>
                                                            <uni-view data-v-1a01b218="" data-id="3" id="emred44" onclick="emredsel7(44)" class="cu-item">10000
                                                            </uni-view>
                                                        </div>
                                                    </div>
                                                </div>
                                            </uni-scroll-view>
                                            <uni-view data-v-1a01b218="" class="cu-bar  padding-xl justify-start">
                                                <uni-text data-v-1a01b218=""><span>Number</span></uni-text>
                                                <uni-view data-v-9d9b8ed0="" data-v-1a01b218="" class="uni-numbox"
                                                    style="margin-left: 10px;">
                                                    <uni-view data-v-9d9b8ed0="" class="uni-numbox__minus" onclick="minus(emredin7)">
                                                        <uni-text data-v-9d9b8ed0="" class="uni-numbox--text"><span>-</span>
                                                        </uni-text>
                                                    </uni-view>
                                                    <uni-input data-v-9d9b8ed0="" class="uni-numbox__value">
                                                        <div class="uni-input-wrapper">
                                                            <div class="uni-input-placeholder input-placeholder"
                                                                data-v-9d9b8ed0="" data-v-1a01b218="" data-v-91f724d0=""
                                                                data-v-5d7012ef="" style="display: none;"></div><input
                                                                maxlength="140" step="0.000000000000000001" id="emredin7" value="1"
                                                                enterkeyhint="done" autocomplete="off" type="number"
                                                                class="uni-input-input">
                                                            <!---->
                                                        </div>
                                                    </uni-input>
                                                    <uni-view data-v-9d9b8ed0="" class="uni-numbox__plus" onclick="plus(emredin7)">
                                                        <uni-text data-v-9d9b8ed0="" class="uni-numbox--text"><span>+</span>
                                                        </uni-text>
                                                    </uni-view>
                                                </uni-view>
                                            </uni-view>
                                            <form id="emred7form" method="post" action="emredoption.php">
                                                                        <input type="hidden" id="emredper7" name="period" value="000000">
                                                                        <input type="hidden" name="ans" value="7">
                                                                        <input type="hidden" type="text" id="emredfamount7" name="amount" value="10">
                                                                    </form>
                                            <uni-view data-v-1a01b218="" class=" margin-bottom">
                                                <uni-text data-v-1a01b218=""><span>Total contract money is <span id="emred7total" >10</span></span>
                                                </uni-text>
                                            </uni-view>
                                            <uni-checkbox-group data-v-1a01b218="" class=" block text-left margin-left">
                                                <uni-checkbox data-v-1a01b218="" class="checked">
                                                    <div class="uni-checkbox-wrapper">
                                                        <div class="uni-checkbox-input uni-checkbox-input-checked"
                                                            style="color: rgb(0, 122, 255);"></div>
                                                    </div>
                                                </uni-checkbox>
                                                <uni-text data-v-1a01b218="" class="sm margin-left"><span>I agree</span>
                                                </uni-text>
                                                <uni-text data-v-1a01b218="" class="sm text-blue margin-left"><span>PRESALE
                                                        RULE</span></uni-text>
                                            </uni-checkbox-group>
                                        </uni-view>
                                        <uni-view data-v-1a01b218="" class="cu-bar justify-end solids-top margin-top">
                                            <uni-view data-v-1a01b218="" class="action">
                                                <uni-button data-v-1a01b218="" class="cu-btn text-gray border" onclick="emredc7()">CLOSE
                                                </uni-button>
                                                <uni-button data-v-1a01b218="" class="cu-btn text-blue border margin-left" onclick="emredproceed7()">
                                                    CONFIRM</uni-button>
                                            </uni-view>
                                        </uni-view>
                                    </uni-view>
                                </uni-view>
    
    

                                    




                                
                                  <uni-view data-v-1a01b218="" data-v-91f724d0="" id="emred8box" class="cu-modal ">
                                    <uni-view data-v-1a01b218="" class="cu-dialog bg-white">
                                        <uni-view data-v-1a01b218="" class="cu-bar justify-end bg-blue">
                                            <uni-view data-v-1a01b218="" class="content" style="font-weight: bold;">Select 8
                                            </uni-view>
                                        </uni-view>
                                        <uni-view data-v-1a01b218="">
                                            <uni-view data-v-1a01b218="" class="cu-bar padding-xl">
                                                <uni-text data-v-1a01b218=""><span>Contract Money</span></uni-text>
                                            </uni-view>
                                            <uni-scroll-view data-v-1a01b218="" class="bg-white nav text-left"
                                                style="margin-left: 10px; margin-top: -20px;">
                                                <div class="uni-scroll-view">
                                                    <div class="uni-scroll-view" style="overflow: auto hidden;">
                                                        <div class="uni-scroll-view-content">
                                                            <!---->
                                                            <uni-view data-v-1a01b218="" data-id="0" id="emred45" onclick="emredsel8(45)"
                                                                class="cu-item text-blue cur">10</uni-view>
                                                            <uni-view data-v-1a01b218="" data-id="1" id="emred46" onclick="emredsel8(46)" class="cu-item">100
                                                            </uni-view>
                                                            <uni-view data-v-1a01b218="" data-id="2" id="emred47" onclick="emredsel8(47)" class="cu-item">1000
                                                            </uni-view>
                                                            <uni-view data-v-1a01b218="" data-id="3" id="emred48" onclick="emredsel8(48)" class="cu-item">10000
                                                            </uni-view>
                                                        </div>
                                                    </div>
                                                </div>
                                            </uni-scroll-view>
                                            <uni-view data-v-1a01b218="" class="cu-bar  padding-xl justify-start">
                                                <uni-text data-v-1a01b218=""><span>Number</span></uni-text>
                                                <uni-view data-v-9d9b8ed0="" data-v-1a01b218="" class="uni-numbox"
                                                    style="margin-left: 10px;">
                                                    <uni-view data-v-9d9b8ed0="" class="uni-numbox__minus" onclick="minus(emredin8)">
                                                        <uni-text data-v-9d9b8ed0="" class="uni-numbox--text"><span>-</span>
                                                        </uni-text>
                                                    </uni-view>
                                                    <uni-input data-v-9d9b8ed0="" class="uni-numbox__value">
                                                        <div class="uni-input-wrapper">
                                                            <div class="uni-input-placeholder input-placeholder"
                                                                data-v-9d9b8ed0="" data-v-1a01b218="" data-v-91f724d0=""
                                                                data-v-5d7012ef="" style="display: none;"></div><input
                                                                maxlength="140" step="0.000000000000000001" id="emredin8" value="1"
                                                                enterkeyhint="done" autocomplete="off" type="number"
                                                                class="uni-input-input">
                                                            <!---->
                                                        </div>
                                                    </uni-input>
                                                    <uni-view data-v-9d9b8ed0="" class="uni-numbox__plus" onclick="plus(emredin8)">
                                                        <uni-text data-v-9d9b8ed0="" class="uni-numbox--text"><span>+</span>
                                                        </uni-text>
                                                    </uni-view>
                                                </uni-view>
                                            </uni-view>
                                            <form id="emred8form" method="post" action="emredoption.php">
                                                                        <input type="hidden" id="emredper8" name="period" value="000000">
                                                                        <input type="hidden" name="ans" value="8">
                                                                        <input type="hidden" type="text" id="emredfamount8" name="amount" value="10">
                                                                    </form>
                                            <uni-view data-v-1a01b218="" class=" margin-bottom">
                                                <uni-text data-v-1a01b218=""><span>Total contract money is <span id="emred8total">10</span></span>
                                                </uni-text>
                                            </uni-view>
                                            <uni-checkbox-group data-v-1a01b218="" class=" block text-left margin-left">
                                                <uni-checkbox data-v-1a01b218="" class="checked">
                                                    <div class="uni-checkbox-wrapper">
                                                        <div class="uni-checkbox-input uni-checkbox-input-checked"
                                                            style="color: rgb(0, 122, 255);"></div>
                                                    </div>
                                                </uni-checkbox>
                                                <uni-text data-v-1a01b218="" class="sm margin-left"><span>I agree</span>
                                                </uni-text>
                                                <uni-text data-v-1a01b218="" class="sm text-blue margin-left"><span>PRESALE
                                                        RULE</span></uni-text>
                                            </uni-checkbox-group>
                                        </uni-view>
                                        <uni-view data-v-1a01b218="" class="cu-bar justify-end solids-top margin-top">
                                            <uni-view data-v-1a01b218="" class="action">
                                                <uni-button data-v-1a01b218="" class="cu-btn text-gray border"  onclick="emredc8()">CLOSE
                                                </uni-button>
                                                <uni-button data-v-1a01b218="" class="cu-btn text-blue border margin-left"  onclick="emredproceed8()">
                                                    CONFIRM</uni-button>
                                            </uni-view>
                                        </uni-view>
                                    </uni-view>
                                </uni-view>
    
    





                                
                                    <uni-view data-v-1a01b218="" data-v-91f724d0="" id="emred9box" class="cu-modal ">
                                        <uni-view data-v-1a01b218="" class="cu-dialog bg-white">
                                            <uni-view data-v-1a01b218="" class="cu-bar justify-end bg-blue">
                                                <uni-view data-v-1a01b218="" class="content" style="font-weight: bold;">Select 9
                                                </uni-view>
                                            </uni-view>
                                            <uni-view data-v-1a01b218="">
                                                <uni-view data-v-1a01b218="" class="cu-bar padding-xl">
                                                    <uni-text data-v-1a01b218=""><span>Contract Money</span></uni-text>
                                                </uni-view>
                                                <uni-scroll-view data-v-1a01b218="" class="bg-white nav text-left"
                                                    style="margin-left: 10px; margin-top: -20px;">
                                                    <div class="uni-scroll-view">
                                                        <div class="uni-scroll-view" style="overflow: auto hidden;">
                                                            <div class="uni-scroll-view-content">
                                                                <!---->
                                                                <uni-view data-v-1a01b218="" data-id="0" id="emred49" onclick="emredsel9(49)"
                                                                    class="cu-item text-blue cur">10</uni-view>
                                                                <uni-view data-v-1a01b218="" data-id="1" id="emred50" onclick="emredsel9(50)" class="cu-item">100
                                                                </uni-view>
                                                                <uni-view data-v-1a01b218="" data-id="2" id="emred51" onclick="emredsel9(51)" class="cu-item">1000
                                                                </uni-view>
                                                                <uni-view data-v-1a01b218="" data-id="3" id="emred52" onclick="emredsel9(52)" class="cu-item">10000
                                                                </uni-view>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </uni-scroll-view>
                                                <uni-view data-v-1a01b218="" class="cu-bar  padding-xl justify-start">
                                                    <uni-text data-v-1a01b218=""><span>Number</span></uni-text>
                                                    <uni-view data-v-9d9b8ed0="" data-v-1a01b218="" class="uni-numbox"
                                                        style="margin-left: 10px;">
                                                        <uni-view data-v-9d9b8ed0="" class="uni-numbox__minus" onclick="minus(emredin9)">
                                                            <uni-text data-v-9d9b8ed0="" class="uni-numbox--text"><span>-</span>
                                                            </uni-text>
                                                        </uni-view>
                                                        <uni-input data-v-9d9b8ed0="" class="uni-numbox__value">
                                                            <div class="uni-input-wrapper">
                                                                <div class="uni-input-placeholder input-placeholder"
                                                                    data-v-9d9b8ed0="" data-v-1a01b218="" data-v-91f724d0=""
                                                                    data-v-5d7012ef="" style="display: none;"></div><input
                                                                    maxlength="140" step="0.000000000000000001" id="emredin9" value="1"
                                                                    enterkeyhint="done" autocomplete="off" type="number"
                                                                    class="uni-input-input">
                                                                <!---->
                                                            </div>
                                                        </uni-input>
                                                        <uni-view data-v-9d9b8ed0="" class="uni-numbox__plus" onclick="plus(emredin9)">
                                                            <uni-text data-v-9d9b8ed0="" class="uni-numbox--text"><span>+</span>
                                                            </uni-text>
                                                        </uni-view>
                                                    </uni-view>
                                                </uni-view>
                                                <form id="emred9form" method="post" action="emredoption.php">
                                                                        <input type="hidden" id="emredper9" name="period" value="000000">
                                                                        <input type="hidden" name="ans" value="9">
                                                                        <input type="hidden" type="text" id="emredfamount9" name="amount" value="10">
                                                                    </form>
                                                <uni-view data-v-1a01b218="" class=" margin-bottom">
                                                    <uni-text data-v-1a01b218=""><span>Total contract money is <span id="emred9total">10</span></span>
                                                    </uni-text>
                                                </uni-view>
                                                <uni-checkbox-group data-v-1a01b218="" class=" block text-left margin-left">
                                                    <uni-checkbox data-v-1a01b218="" class="checked">
                                                        <div class="uni-checkbox-wrapper">
                                                            <div class="uni-checkbox-input uni-checkbox-input-checked"
                                                                style="color: rgb(0, 122, 255);"></div>
                                                        </div>
                                                    </uni-checkbox>
                                                    <uni-text data-v-1a01b218="" class="sm margin-left"><span>I agree</span>
                                                    </uni-text>
                                                    <uni-text data-v-1a01b218="" class="sm text-blue margin-left"><span>PRESALE
                                                            RULE</span></uni-text>
                                                </uni-checkbox-group>
                                            </uni-view>
                                            <uni-view data-v-1a01b218="" class="cu-bar justify-end solids-top margin-top">
                                                <uni-view data-v-1a01b218="" class="action">
                                                    <uni-button data-v-1a01b218="" class="cu-btn text-gray border" onclick="emredc9()">CLOSE
                                                    </uni-button>
                                                    <uni-button data-v-1a01b218="" class="cu-btn text-blue border margin-left" onclick="emredproceed9()">
                                                        CONFIRM</uni-button>
                                                </uni-view>
                                            </uni-view>
                                        </uni-view>
                                    </uni-view>
        
        
            
    
    
    
                                
                                
                                
                                
                                
                               
                            </uni-view>
                        </uni-view>
                        <!---->
                </uni-page-body>
            </uni-page-wrapper>
        </uni-page>
        <!---->
        <!---->
        <uni-actionsheet>
            <div class="uni-mask uni-actionsheet__mask" style="display: none;"></div>
            <div class="uni-actionsheet">
                <div class="uni-actionsheet__menu">
                    <!---->
                    <!---->
                    <div style="max-height: 260px; overflow: hidden;">
                        <div style="transform: translateY(0px) translateZ(0px);"></div>
                    </div>
                </div>
                <div class="uni-actionsheet__action">
                    <div class="uni-actionsheet__cell" style="color: rgb(0, 0, 0);"> 取消 </div>
                </div>
                <div></div>
            </div>
            <!---->
        </uni-actionsheet>
        <uni-modal style="display: none;">
            <div class="uni-mask"></div>
            <div class="uni-modal">
                <div class="uni-modal__hd"><strong class="uni-modal__title">Fail</strong></div>
                <div class="uni-modal__bd">Operating too fast</div>
                <div class="uni-modal__ft">
                    <!---->
                    <div class="uni-modal__btn uni-modal__btn_primary" style="color: rgb(0, 122, 255);"> OK </div>
                </div>
            </div>
            <!---->
        </uni-modal>
        <!---->
    </uni-app>
   
    <div
        style="position: absolute; left: 0px; top: 0px; width: 0px; height: 0px; z-index: -1; overflow: hidden; visibility: hidden;">
        <div
            style="position: absolute; width: 100px; height: 200px; box-sizing: border-box; overflow: hidden; padding-bottom: env(safe-area-inset-top);">
            <div
                style="transition: all 0s ease 0s; animation: 0s ease 0s 1 normal none running none; width: 400px; height: 400px;">
            </div>
        </div>
        <div
            style="position: absolute; width: 100px; height: 200px; box-sizing: border-box; overflow: hidden; padding-bottom: env(safe-area-inset-top);">
            <div
                style="transition: all 0s ease 0s; animation: 0s ease 0s 1 normal none running none; width: 250%; height: 250%;">
            </div>
        </div>
        <div
            style="position: absolute; width: 100px; height: 200px; box-sizing: border-box; overflow: hidden; padding-bottom: env(safe-area-inset-left);">
            <div
                style="transition: all 0s ease 0s; animation: 0s ease 0s 1 normal none running none; width: 400px; height: 400px;">
            </div>
        </div>
        <div
            style="position: absolute; width: 100px; height: 200px; box-sizing: border-box; overflow: hidden; padding-bottom: env(safe-area-inset-left);">
            <div
                style="transition: all 0s ease 0s; animation: 0s ease 0s 1 normal none running none; width: 250%; height: 250%;">
            </div>
        </div>
        <div
            style="position: absolute; width: 100px; height: 200px; box-sizing: border-box; overflow: hidden; padding-bottom: env(safe-area-inset-right);">
            <div
                style="transition: all 0s ease 0s; animation: 0s ease 0s 1 normal none running none; width: 400px; height: 400px;">
            </div>
        </div>
        <div
            style="position: absolute; width: 100px; height: 200px; box-sizing: border-box; overflow: hidden; padding-bottom: env(safe-area-inset-right);">
            <div
                style="transition: all 0s ease 0s; animation: 0s ease 0s 1 normal none running none; width: 250%; height: 250%;">
            </div>
        </div>
        <div
            style="position: absolute; width: 100px; height: 200px; box-sizing: border-box; overflow: hidden; padding-bottom: env(safe-area-inset-bottom);">
            <div
                style="transition: all 0s ease 0s; animation: 0s ease 0s 1 normal none running none; width: 400px; height: 400px;">
            </div>
        </div>
        <div
            style="position: absolute; width: 100px; height: 200px; box-sizing: border-box; overflow: hidden; padding-bottom: env(safe-area-inset-bottom);">
            <div
                style="transition: all 0s ease 0s; animation: 0s ease 0s 1 normal none running none; width: 250%; height: 250%;">
            </div>
        </div>
    </div>
       <div style="display:none;" id="emreddate"></div>

    <script>
        $(window).on("load",function(){
            setTimeout(
function() 
{
$(".loader-wrapper").css("display", "none");
}, 1200);
 
});


function func() {
        
    
                var countDownDate = Date.parse(new Date) / 1e3;
  var now = new Date().getTime();
  var distance = 300 - countDownDate % 300;
  //alert(distance);
  var i = distance / 60,
   n = distance % 60,
   o = n / 10,
   s = n % 10;
  var minutes = Math.floor(i);
  var seconds = ('0'+Math.floor(n)).slice(-2);
  document.getElementById("demo").innerHTML = "   <span><span >0"+Math.floor(minutes)+"</span>:<span >"+seconds+"</span></span>";

var diff=distance;
console.log(distance);
            
           $("#period").load('emredperiod.php');
               if(diff<6){ 
                   console.log("Timeout");
                 
                  
                   document.getElementById("emredred").className="cu-modal";
                   document.getElementById("emredgreenbox").className="cu-modal";
                   document.getElementById("emredviobox").className="cu-modal";
                   document.getElementById("emred0box").className="cu-modal";
                   document.getElementById("emred1box").className="cu-modal";
                   document.getElementById("emred2box").className="cu-modal";
                   document.getElementById("emred3box").className="cu-modal";
                   document.getElementById("emred4box").className="cu-modal";
                   document.getElementById("emred5box").className="cu-modal";
                   document.getElementById("emred6box").className="cu-modal";
                   document.getElementById("emred7box").className="cu-modal";
                   document.getElementById("emred8box").className="cu-modal";
                   document.getElementById("emred9box").className="cu-modal";
                   
                  
                    document.getElementById("emredgreen").setAttribute("disabled", "true");
                  
                    document.getElementById("emredvoilet").setAttribute("disabled", "true");
     
                 
                  
                    
                   document.getElementById("emredredbutton").setAttribute("disabled", "true");
             
         
               
       document.getElementById("emrednum0").setAttribute("disabled", "true");
    
       document.getElementById("emrednum1").setAttribute("disabled", "true");
       
       document.getElementById("emrednum2").setAttribute("disabled", "true");
 
       document.getElementById("emrednum3").setAttribute("disabled", "true");

       document.getElementById("emrednum4").setAttribute("disabled", "true");

       document.getElementById("emrednum5").setAttribute("disabled", "true");

       document.getElementById("emrednum6").setAttribute("disabled", "true");

       document.getElementById("emrednum7").setAttribute("disabled", "true");
   
       document.getElementById("emrednum8").setAttribute("disabled", "true");

       document.getElementById("emrednum9").setAttribute("disabled", "true");
  
             
              
               }
               
               if(diff==180){
                     
                
                     $("#emredmybet").load('emredrec.php?srpage=<?php echo $srpage; ?>');
               }
               if(diff>30){
                   document.getElementById("emredgreen").removeAttribute('disabled');
                  
                  document.getElementById("emredvoilet").removeAttribute('disabled');
   
               
                
                  
                 document.getElementById("emredredbutton").removeAttribute('disabled');
           
       
             
     document.getElementById("emrednum0").removeAttribute('disabled');
  
     document.getElementById("emrednum1").removeAttribute('disabled');
     
     document.getElementById("emrednum2").removeAttribute('disabled');

     document.getElementById("emrednum3").removeAttribute('disabled');

     document.getElementById("emrednum4").removeAttribute('disabled');

     document.getElementById("emrednum5").removeAttribute('disabled');

     document.getElementById("emrednum6").removeAttribute('disabled');

     document.getElementById("emrednum7").removeAttribute('disabled');
 
     document.getElementById("emrednum8").removeAttribute('disabled');

     document.getElementById("emrednum9").removeAttribute('disabled');
               }
                   if(diff==178){
                     
                     $("#emredmybet").load('emredrec.php?srpage=<?php echo $srpage; ?>');
                   
               }


              
              
               document.getElementById("emredper").value =    <?php echo  $sperio?> ;
               document.getElementById("emredrper").value =    <?php echo  $sperio?> ;
               document.getElementById("emredvper").value =    <?php echo  $sperio?> ;
               document.getElementById("emredper1").value =    <?php echo  $sperio?> ;
               document.getElementById("emredper2").value =    <?php echo  $sperio?> ;
               document.getElementById("emredper3").value =    <?php echo  $sperio?> ;
               document.getElementById("emredper4").value =    <?php echo  $sperio?> ;
               document.getElementById("emredper5").value =    <?php echo  $sperio?> ;
               document.getElementById("emredper6").value =    <?php echo  $sperio?> ;
               document.getElementById("emredper7").value =    <?php echo  $sperio?> ;
               document.getElementById("emredper8").value =    <?php echo  $sperio?> ;
               document.getElementById("emredper9").value =    <?php echo  $sperio?> ;
               document.getElementById("emredper0").value =    <?php echo  $sperio?> ;
           
           }

           func();
           var interval = setInterval(func, 1000);

             


// Get the button that opens the modal







var emredmodal = document.getElementById("emredgreenbox");
var emredspan = document.getElementById("emredclose");



var emredspan3 = document.getElementById("emredclose3");
var emredspan1 = document.getElementById("emredclose1");

emredspan3.onclick = function () {
document.getElementById("emredred").className = "cu-modal";
}
emredspan1.onclick = function () {
document.getElementById("emredviobox").className= "cu-modal";
}




emredspan.onclick = function () {
emredmodal.className = "cu--modal";
}




  document.getElementById("readrule").onclick = function () {
        document.getElementById("rule").className = "cu-modal show";
    }
    document.getElementById("ruleclose").onclick = function () {
        document.getElementById("rule").className= "cu-modal";
    }





  


       </script>
</body>

</html>