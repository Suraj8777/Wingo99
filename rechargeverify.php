<?php
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login");
    exit;
}
$am=$_GET['am'];
$mid=$_GET['mid'];
?>
<html class="pixel-ratio-3 retina android android-6 android-6-0-1">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Simple Pay Cashier</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <style type="text/css">
       #copied{
            visibility: hidden;
            min-width: 250px;
            margin-left: -125px;
            background-color: #333;
            color: #fff;
            text-align: center;
            border-radius: 6px;
            padding: 16px;
            position: fixed;
            z-index: 1;
            left: 50%;
            bottom: 50px;
            font-size: 17px;
        }

       

        #copied.show {
            visibility: visible;
            margin-bottom: 205px;
            -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
            animation: fadein 0.5s, fadeout 0.5s 2.5s;
        }

        @-webkit-keyframes fadein {
            from {
                bottom: 0;
                opacity: 0;
            }

            to {
                bottom: 30px;
                opacity: 1;
            }
        }

        @keyframes fadein {
            from {
                bottom: 0;
                opacity: 0;
            }

            to {
                bottom: 30px;
                opacity: 1;
            }
        }

        @-webkit-keyframes fadeout {
            from {
                bottom: 30px;
                opacity: 1;
            }

            to {
                bottom: 0;
                opacity: 0;
            }
        }

        @keyframes fadeout {
            from {
                bottom: 30px;
                opacity: 1;
            }

            to {
                bottom: 0;
                opacity: 0;
            }
        }
        body {
            font-family: Arial
        }

        .weui-tabbar__item {
            padding: 5px 0 8px 0
        }

        .weui-tabbar__label {
            font-size: 12px;
            margin-top: -5px
        }

        .diylabel {
            font-size: 12px;
            color: #999
        }

        .money_syb {
            font-size: 16px;
            position: relative;
            top: 0;
            left: 0
        }

        .money_val {
            font-size: 16px
        }

        table.minfo td {
            padding: 0;
            margin: 0;
            border: none;
            padding-right: 10px;
            line-height: 30px;
            font-family: Arial
        }

        .membermenu .weui-cell__ft {
            font-size: 12px
        }

        .menuname {
            font-size: 15px !important
        }

        .membermenu .menuicon {
            width: 24px;
            height: 24px;
            margin-right: 10px;
            display: block
        }

        .weui-pay-inner {
            border-radius: 8px
        }

        .weui-pay-inner:after {
            border: 0
        }

        .moneytable {
            background: 0 0
        }

        .moneytable td {
            padding: 0;
            margin: 0;
            text-align: left;
            border: 0;
            color: #07c15f
        }

        .weui-payselect-li {
            width: 50%
        }

        .weui-payselect-a {
            background-color: #f6fdff;
            color: #888
        }

        .weui-payselect-on {
            background-color: #fff
        }

        .weui-pay-line {
            line-height: 25px
        }

        .weui-pay-name {
            padding-bottom: 10px
        }

        .weui-pay-label {
            width: 60px
        }

        .weui-pay-m::before {
            border: 0
        }
        input{
            color: black;
        }

        #refnoeg {
            padding-bottom: 20px
        }

        #refnoeg>div {
            width: 90%;
            margin-top: 5px;
            text-align: center;
            margin: 0 auto
        }

        #refnoeg img {
            width: 100%
        }

        #refout:after {
            border-bottom: 1px solid #487ef5
        }

        #dplayer {
            margin: 5px 13px 0 13px;
            display: none
        }

        .randomtxt {
            text-decoration: none;
            text-align: center;
            margin: 0;
            color: #f55959fa;
            -webkit-background-clip: text;
            background-size: 200% 100%;
            -webkit-animation: slide 1s infinite linear;
            animation: slide 1s infinite linear;
            font-size: 12px
        }

        @keyframes slide {
            0% {
                background-position: 0 0
            }

            100% {
                background-position: -100% 0
            }
        }
        .loader {
  border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid #3498db;
  width: 120px;
  height: 120px;
  -webkit-animation: spin 2s linear infinite; /* Safari */
  animation: spin 2s linear infinite;
}

/* Safari */
@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}
    </style>
 <script>


        $(document).ready(function () {  $("#check").load('check?id=<?php echo $mid;?>');

            setInterval(function () {
                $("#check").load('check?id=<?php echo $mid;?>');
            }, 2000);
          setInterval(ch, 1000);
        })
       
        function ch(){
                 x=document.getElementById("check").innerHTML;
        if(x.includes("SUCCESS")){
            window.location.replace("/sucess");
        
        }
            </script>
<style>
 .float{ 
       z-index: 99;
    position: fixed;
    width: 46px;
    height: 46px;
    bottom: 99px;
    right: 5px;
    text-align: center;
}


  .floattext{ 
        display: flex;
    background: #6610f2;
    color: #ffffff;
    padding: 6px 4px;
    font-size: 9px;
    width: fit-content;
    border-radius: 4px;
    height: 18px;
    line-height: 11px;
    margin-top: 48px;
    box-shadow: 0 0 6px;
}


.my-float{
	margin-top:22px;
}</style></head>


<body ontouchstart="" style="background-color:#f1f1f1" data-new-gr-c-s-check-loaded="14.1043.0"
    data-gr-ext-installed="">
    <div class="weui-flex"
        style="height: 60px; line-height: 60px; font-size: 20px; background-image: linear-gradient(to right bottom, rgba(255, 255, 255, 0.2), rgba(0, 0, 0, 0.2)); box-shadow: rgba(0, 0, 0, 0.2) 0px 0px 20px;"
        id="header">
        <div
            style="text-align:center;width:100%;color:#fff;background-color:#168afa;background-image:linear-gradient(to bottom right,hsla(0,0%,100%,.2),rgba(0,0,0,.2))">
            Simple Pay Cashier</div>
    </div>
    <div
        style="margin:0px 0px 5px 0px;height:30px;background-color: #fff;border:0px solid #d0d0d0;border-radius:0px;box-shadow:0 0 0px rgb(117 117 117 / 50%);padding:5px 12px 10px 15px;box-shadow:0 0 30px rgb(0 0 0 / 10%)">
        <div style="font-weight:600;font-size:20px;color:#287ed7;margin-top:4px;float:left"><span
                style="position:relative">INR ₹<?php echo $am;?></span></div>
       
    </div>
   
  
    </div>
    <div style="    padding: 50px;
    margin-left: 20%;" class="loader"></div>
<h1>Waiting for Payment Confirmation</h1>
<h2>Do not refresh OR go back</h2>
    <div id="cpbottom"
        style="margin-left: -30px;width:100%;position:fixed;bottom:0;text-align:center;padding:0;font-size:12px;color:#999;line-height:220%;border-bottom:1px solid #287ed6">
        100% Secure payment powered by Simple Pay.</div>
        <div style="display:flex;" id="check">
            
        </div>
        <script>
          
        </script>
 



  </body>

</html>