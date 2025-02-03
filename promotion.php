<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login");
    exit;
}

require_once "config.php";
$sql = "SELECT  bonus FROM users WHERE username='".$_SESSION['username']."'";
$result = $conn->query($sql);
$row = mysqli_fetch_array($result);
$bon=round($row['bonus'],2);
   
$opt="SELECT SUM(amount) as total FROM `bonus` WHERE usercode='".$_SESSION['usercode']."' AND level='1'";
$optres=$conn->query($opt);
$sum= mysqli_fetch_assoc($optres);
if($sum['total']==""){
    $bonus="0.00";
    
}else{
    $bonus=round($sum['total'],2);
}
$opt2="SELECT SUM(amount) as total FROM `bonus` WHERE usercode='".$_SESSION['usercode']."' AND level='2'";
$optres2=$conn->query($opt2);
$sum2= mysqli_fetch_assoc($optres2);
if($sum2['total']==""){
    $bonus2="0.00";
    
}else{
    $bonus2=round($sum2['total'],2);
}

$opt1="SELECT SUM(amount) as total1 FROM `giftrec` WHERE username= '".$_SESSION['username']."'";
$optres1=$conn->query($opt1);
$sum1= mysqli_fetch_assoc($optres1);
if($sum1['total1']==""){
    $tbal="0.00";
    
}else{
    $tbal=$sum1['total1'];
}                      
                        
$query0 =  "SELECT  * FROM users  WHERE refcode='".$_SESSION['usercode']."'";
$query1 =  "SELECT  * FROM users  WHERE refcode1='".$_SESSION['usercode']."'";
$query2 =  "SELECT  * FROM users  WHERE refcode2='".$_SESSION['usercode']."'";

// result for method one
$result1 = mysqli_query($conn, $query0);
$result3 = mysqli_query($conn, $query1);
$result4 = mysqli_query($conn, $query2);
$rowcount=mysqli_num_rows($result1);
$rowcount2=mysqli_num_rows($result3);
$rowcount3=mysqli_num_rows($result4);


//retrieve the selected results from database   

$query0 =  "SELECT  * FROM users  WHERE refcode='".$_SESSION['usercode']."'";
$query1 =  "SELECT  * FROM users  WHERE refcode1='".$_SESSION['usercode']."'";


// result for method one
$result1 = mysqli_query($conn, $query0);
$result3 = mysqli_query($conn, $query1);

$rowcount=mysqli_num_rows($result1);
$rowcount2=mysqli_num_rows($result3);

//retrieve the selected results from database   
$query = "SELECT * FROM `bonus` WHERE usercode='".$_SESSION['usercode']."' ORDER BY id DESC";  
$result = mysqli_query($conn, $query);  
  
//display the retrieved result on the webpage 
$dataRow = ''; 
while ($row2 = mysqli_fetch_array($result)) {  
    $dataRow = $dataRow."
             <div class='row pt-1 pb-1'>
                                     <div class='col-4 xtl'>$row2[2]</div>
                                    <div class='col' style='display:inline !important;'>₹&nbsp$row2[3]</div>
                                    <span>$row2[4]</span>
                                </div>
             

";
    
}
?>
<!DOCTYPE html> 
<html lang="en" translate="no" data-dpr="1" style="font-size: 36.88px;"><head>
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
<link rel="modulepreload" as="script" crossorigin="" href="/assets/js/page-promotion-db066b5a.js"><link rel="modulepreload" as="script" crossorigin="" href="/assets/js/page-main-eac2089d.js"><link rel="modulepreload" as="script" crossorigin="" href="/assets/js/page-login-c581a4df.js"><link rel="stylesheet" href="https://91dreamclub.com/assets/css/page-login-1f545390.css"><link rel="stylesheet" href="https://91dreamclub.com/assets/css/page-main-8cf260fb.css"><link rel="stylesheet" href="https://91dreamclub.com/assets/css/page-promotion-24bf6ab6.css"><link rel="modulepreload" as="script" crossorigin="" href="/assets/js/home-c9e2cd52.js"><link rel="modulepreload" as="script" crossorigin="" href="/assets/js/activity-46c093bd.js"><link rel="modulepreload" as="script" crossorigin="" href="/assets/js/promotion-5577fd39.js"><link rel="modulepreload" as="script" crossorigin="" href="/assets/js/wallet-d91dc187.js"><link rel="modulepreload" as="script" crossorigin="" href="/assets/js/main-b43b53ed.js"></head><style>.container .info_content[data-v-ab64ca5b] {
    display: -webkit-box;
    display: -webkit-flex;
    display: flex;
    width: 9.33333rem;
    height: 4rem;
    background-color: #fff;
    border-radius: .26667rem;
    overflow: hidden;
    -webkit-box-pack: justify;
    -webkit-justify-content: space-between;
    justify-content: space-between;
    position: relative;
    z-index: 10;
    box-shadow: 0 .10667rem .21333rem #d0d0ed5c;
}</style>
<body style="font-size: 12px;">
<div id="app" data-v-app=""><!----><!----><div data-v-4c21fa9e="" data-v-1159d77b="" class="navbar" style="--36a344b0: 'Roboto', 'Inter', sans-serif;"><div data-v-4c21fa9e="" class="navbar-fixed" style="background: rgb(247, 248, 255);"><div data-v-4c21fa9e="" class="navbar__content"><div data-v-4c21fa9e="" class="navbar__content-left"><!----></div><div data-v-4c21fa9e="" class="navbar__content-center"><!----><div data-v-4c21fa9e="" class="navbar__content-title">Agency</div></div><div data-v-4c21fa9e="" onclick="window.location.href='/bonusrecord#/'" class="navbar__content-right"><img data-v-1159d77b="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAMAAABg3Am1AAAAWlBMVEX/WmYAAAD/WWf/Wmf/WmX/WGj/WGj/WWf/WGX/WWf/WGf/Wmf/W2b/V2X/W2n/WWj/WWX/WGf/WGf/WWP/XmX/U2z/WGj/XGb/W2j/WWf/Wmb/V2f/Wmb/WWdvLvmAAAAAHXRSTlNmALKfM0Ag32BZUS5GJl85H79wTSYNgBlM7++QgAa8nloAAAEfSURBVEjHzdNZcoMwEEXRfhEIJATYBIIzsP9tJnawGiQKNUm5yvf7HWYIB/sb0OcprKj2AO+592EHTFudgJZuWVcLwSvdM7UQcNlRQG3ipgsADS3TDPINUAIjrSoZoIv2X9fj0LqKAd6CfQegpyDHIBAfFsDYhMB4wII/i5riVgDK7zWAjJIAxQzmfQLwo1LR84lBXy/eRhcdPwZEGYNSBCg7CuiZgQVaGajm/2D+cdSLT22B+VWfNTDc9tMitQFGQH8qi58uImBwLyeSXBLZAdd0Q3ER+C3XuroQiQD3eMA3zKkUUFOQ+i8wskuyHjgS5TyoZKD2AI1kb8DgJDsBA7TpfYYlQJbat1gD9GZv3mgw8MTZ7bVx1QAGsp4ZfAM0fzA9owuXkgAAAABJRU5ErkJggg==" alt=""></div></div></div></div><div data-v-ab64ca5b="" data-v-1159d77b="" class="container" style="--36a344b0: 'Roboto', 'Inter', sans-serif;"><div data-v-ab64ca5b="" class="amount">₹<?php echo $bonus+$bonus2?></div><div data-v-ab64ca5b="" class="amount_txt">Yesterday's total commission</div><div data-v-ab64ca5b="" class="tip">6 level commission income is available</div><div data-v-ab64ca5b="" class="info_content"><div data-v-ab64ca5b="" class="info"><div data-v-ab64ca5b="" class="head">Direct subordinates</div><div data-v-ab64ca5b="" class="line1"><div data-v-ab64ca5b=""><?php echo $rowcount2?></div> Number Of Direct Subordinates</div><div data-v-ab64ca5b="" class="line2"><div data-v-ab64ca5b=""><?php echo $rowcount?></div> Today’s Total Invites</div><div data-v-ab64ca5b="" class="line3" style="display:none;"><div data-v-ab64ca5b="">0</div> Deposit amount</div></div><div data-v-ab64ca5b="" class="info"><div data-v-ab64ca5b="" class="head u2">Team subordinates</div><div data-v-ab64ca5b="" class="line1"><div data-v-ab64ca5b=""><?php echo $rowcount+$rowcount2?></div> Total Number Of Teams</div><div data-v-ab64ca5b="" class="line2"><div data-v-ab64ca5b="" onclick="apply()" id="u_com">₹<?php echo $bon?></div>Total Commission Received</div><div data-v-ab64ca5b="" class="line3" style="display:none;"><div data-v-ab64ca5b="">0</div> Deposit amount</div></div></div></div><div data-v-1159d77b="" class="content" style="--36a344b0: 'Roboto', 'Inter', sans-serif;"><div data-v-1159d77b="" class="shareBtnContainer"><div class="col-12 mt-2" id="mylink" style="display:none;">https://91-club.rf.gd/register?r_code=<?php echo  $_SESSION['usercode']?></div><button onclick="copyToClipboard()" data-v-1159d77b=""  class="shareBtn">COPY INVITATION LINK</button></div><div data-v-1159d77b="" class="promote__cell"><div data-v-1159d77b="" class="promote__cell-item"  onclick="RefCodeCopy()"><div data-v-1159d77b="" class="label"><img data-v-1159d77b="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADwAAAA8CAMAAAANIilAAAAAZlBMVEUAAAD6Wlr6WVn5WFj5WVn7WVn/Vlb6Wlr7W1v3Wlr5WVn6WFj8W1v5WVn5WVn4WVn6Wlr6Wlr4Wlr3WFj/VVX4WFj6WVn6Wlr6WVn5WVn5WVn5WVn6WVn4WVn5WFj6W1v/UVH5WVkYbn5UAAAAIXRSTlMAZrKf7XkNn3lA4L5MYM+BWTMmIAaWU/XPxqmOcHA5qRZw9CxiAAABJklEQVRIx+3T3XKCMBCG4SzkpyTyIyit2tru/d9kT6xdCJF8dXrgjO8xz+xOSNSze9r157GjRN2m6m2S2qqmtaoE31JW26WNN5TZZhdhYVd1emd8c0tQdoIrDFfoYFktz6wnsB7dWna+/Z+M5kvaUNQocEdRga8dKKoTmOKOv9hR3G1MrrjkCMWyx8FGs0gbCAeeVEDYTbGDMLlCdHqU00bwe3ltbyjR5COBPYsOi9w0LPIC8yRtlp+3LInZx1hzLmYXX5p8/PoxHwxgLqLBAJ6N1gCejz4yhvmzffmpYBTL/hF71GqBGxQ3ApcoLgSuUVwLbDWIB/X3vUslG+DBshaxrZoV8u2bmmdDtrWCgZuf1GJDuU5DpVJ9jfvgU843ZW3Vszv6BlTHjeSB3A++AAAAAElFTkSuQmCC" alt=""><div class="col-12 mt-2" id="mycode" style="display:none;"><?php echo  $_SESSION['usercode']?></div><span data-v-1159d77b="">Copy invitation code</span></div><div data-v-1159d77b="" class="arrow"><span data-v-1159d77b=""><?php echo  $_SESSION['usercode']?></span><img data-v-1159d77b="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwAgMAAAAqbBEUAAAADFBMVEUAAABmZmZkZGRmZmZ0zVwQAAAAA3RSTlMA3yDHuD3GAAAANUlEQVQoz2MYhIC1AYnDnoDE4byBxGEqQ9Y0F1mTOk01YXAQyjANQBiNsJRGWtgTUANxMAIAk88RuZxQh1MAAAAASUVORK5CYII=" alt=""></div></div><div data-v-1159d77b="" onclick="window.location.href='/myTeam?user=<?php echo  $_SESSION['username']?>'" class="promote__cell-item"><div data-v-1159d77b="" class="label"><img data-v-1159d77b="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADwAAAA8CAMAAAANIilAAAAAbFBMVEX/WmYAAAD/WWj/T2T/W2X/W2f/WWb/WWf/WGf/WGb/WGb/WWb/WWb/WWf/WGX/WGf/WWb/XGX/VGr/WWf/WGf/WWf/WWb/Wmr/WWf/WWf/WWf/WWf/Wmf/XGb/WWj/Wmf/VYD/WWf/WmX/WWcSNvN4AAAAI3RSTlNmAIwMeXlwYLyW44Ev2U5A7yYQ7LCfVx+/OPXfsxnGqAbPR17xxycAAAHhSURBVEjHzdfbkuIgFAVQJkTQkPvNRG27p/f//+PEdAEnhKpAz4v7jVBL2Z6irLA//5F3xHk/tJsHaiqD8R1QdC2Bug3EFYCBPpgAhGIBQNIHNVCHHrsHkNOfAEAfit0vKgGIY8xfmQE8OMkFQMlfIdiVpWSvfAL4ZCQZAMHWVNyPm4Wu+QsgoRhAZhaND3NtWQfcqE0APM1Kcg+u9K4CUBC71hjscvbgUW8OAB7ErjWUXco9/jCbZ7dy5tTY45nijjmY1hDXHR7N5ulZXDZYFUVKlpcdbllwzpWL83CcSRePwVbAxZwF5wLl4CaiMhIHlxGVMWzxF4uojH6Lm5jKmLb4O6Yy7lsszaFOnohtZYrppVA3+PKglZdYTK9yAX9SWhloKR6PsKCVgavB9Cqr7ujYGZbkBM/MJvVEOJVRETxGTXmJtJiz8JxdnEfgbMXK4jJE0cpIDOZ2SyWepLvKGAw2l+Lkn1OXupXRG/xtP9afs1sZk8b2KicH2FTGXeMrPZQvRepWRq1xFT3lJRrL6CkvaX/wR4QV0LkuOOrUdBz5Dx5/UxnlilsWkcJgueL8V5UhonFisVpxE1uZHvtLhuMO7qjy6EHR+zyHNr4ZS/7omvJYiuSpZT3Jt327eWv8D31pUMh1MCbLAAAAAElFTkSuQmCC" alt=""><span data-v-1159d77b="">Team report</span></div><div data-v-1159d77b="" class="arrow"><!----><img data-v-1159d77b="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwAgMAAAAqbBEUAAAADFBMVEUAAABmZmZkZGRmZmZ0zVwQAAAAA3RSTlMA3yDHuD3GAAAANUlEQVQoz2MYhIC1AYnDnoDE4byBxGEqQ9Y0F1mTOk01YXAQyjANQBiNsJRGWtgTUANxMAIAk88RuZxQh1MAAAAASUVORK5CYII=" alt=""></div></div><div data-v-1159d77b="" onclick="apply()" class="promote__cell-item"><div data-v-1159d77b="" class="label"><img data-v-1159d77b="" src="https://91dreamclub.com/assets/png/commission-1a0e795f.png" alt=""><span data-v-1159d77b="">Receive Commission</span></div><div id="snackbar" class="van-toast van-toast--middle van-toast--text" style="z-index: 2009;display:none "><div class="van-toast__text">OTP SENT</div></div><style>
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
    border-radius: 0px;
    -webkit-transform: translate3d(-50%, -50%, 0);
    transform: translate3d(-50%, -50%, 0);
}
.van-toast--html, .van-toast--text {
    width: -webkit-fit-content;
    width: fit-content;
    min-width: 96px;
    min-height: 0;
    padding: 10px 30px;
}
  </style><div data-v-1159d77b="" class="arrow"><!----><img data-v-1159d77b="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwAgMAAAAqbBEUAAAADFBMVEUAAABmZmZkZGRmZmZ0zVwQAAAAA3RSTlMA3yDHuD3GAAAANUlEQVQoz2MYhIC1AYnDnoDE4byBxGEqQ9Y0F1mTOk01YXAQyjANQBiNsJRGWtgTUANxMAIAk88RuZxQh1MAAAAASUVORK5CYII=" alt=""></div></div><div data-v-1159d77b="" onclick="window.location.href='tutorial#'" class="promote__cell-item"><div data-v-1159d77b="" class="label"><img data-v-1159d77b="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADwAAAA8CAMAAAANIilAAAAAVFBMVEX6WloAAAD5WVn6Wlr6WVn7Wlr4Wlr4UFD6WVn7W1v5XFz/W1v/VVX7Wlr6WVn6WVn7W1v6WVn4WVn6Wlr5WVn5WVn5WVn6WVn6W1v5WVn6WVn5WVln1XYhAAAAG3RSTlNmAOwz2U8mDLJfLBsGebxZRsVw9ePGqZtwz4weICORAAABBElEQVRIx+3XyY4CIRAG4Gr2rTd11Jl+//ecGGNASoFqL230P1GHLxBSCQV0L+SLO+2m0QKIJYsAsHJyuoC9hEse4mukfoY5QA0DcISjLeCoMVbQhsFhrMdWbAPCCloxcIRlO5Y5DtCOIWTYU7DPsKJglWFOwXzjeL9fjw/n/rAWizPATqzD83U9r8HDrTB0bGJlaPjIjmlp2ImAcb5487gXLOZnR8PzksbQ8O8dHl44tujf5bY/BxuGUuowldrTkgZ3mCo9sX+ZyTvMFx/3gSXBHRbwWFEPHivo160QDrbVjhrhzhE2jph4cF4ZXOsW407LGpW+PKxL+9jZcXJ6o3+Md8H/Fdgw/IbWcWIAAAAASUVORK5CYII=" alt=""><span data-v-1159d77b="">Invitation rules</span></div><div data-v-1159d77b="" class="arrow"><!----><img data-v-1159d77b="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwAgMAAAAqbBEUAAAADFBMVEUAAABmZmZkZGRmZmZ0zVwQAAAAA3RSTlMA3yDHuD3GAAAANUlEQVQoz2MYhIC1AYnDnoDE4byBxGEqQ9Y0F1mTOk01YXAQyjANQBiNsJRGWtgTUANxMAIAk88RuZxQh1MAAAAASUVORK5CYII=" alt=""></div></div><div data-v-1159d77b="" onclick="window.location.href='/keFuMenu#';" class="promote__cell-item" style="display:;"><div data-v-1159d77b="" class="label"><img data-v-1159d77b="" src="https://91dreamclub.com/assets/png/server-b7c71127.png" alt=""><span data-v-1159d77b="">Agent line customer service</span></div><div data-v-1159d77b="" class="arrow"><!----><img data-v-1159d77b="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwAgMAAAAqbBEUAAAADFBMVEUAAABmZmZkZGRmZmZ0zVwQAAAAA3RSTlMA3yDHuD3GAAAANUlEQVQoz2MYhIC1AYnDnoDE4byBxGEqQ9Y0F1mTOk01YXAQyjANQBiNsJRGWtgTUANxMAIAk88RuZxQh1MAAAAASUVORK5CYII=" alt=""></div></div></div><div data-v-1159d77b="" class="commission"><div data-v-1159d77b="" class="commission__title"><i data-v-1159d77b="" class="van-badge__wrapper van-icon"><!----><img class="van-icon__image" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAMAAABg3Am1AAABHVBMVEUAAAD8jKX9q779nbL8iqH/+Pv/j5/+wM7/j5f+kaf/jaH7jaX/jp3/v8P+6O3/6e7/3uX/jJj+usX+jqb8jaX9hZv/vcT/i6j9i5z8iqT//P3/9ff/f4z/bn3/jZr+mKj+iZn7iqj/v8//ZHH/vsP/9ff/d4P/fYf+8fT/v8X/sLX+c4H/sLf+dYT/wsb/wMX/mqD/lJ3/j5n/dYf/eYX/oan9hp//w8j/w8b/pq7/e4P/t7//t7//////ZHH/c3//ipT/vcP/pq7/anb/Y3D/bHn/f4r/Xmz/aHX/eoX/YG7/XWr/Wmj/fYj/ZXL/e4b/n6j/trz/sbf/qbD/kZr/jJb/eIP/cX3/rLP/hY//Z3T/oqr/l6D/lZ7/k5ydcTwhAAAAPXRSTlMAZnlwQOyfjJ8yXyYK38bFsp+BWFB5YCwfF/Xiw72yhIFGEPXv4+Pf2c/Pxr+zr5+fn5+fgH9wb29fX0AgTxUa5QAAAbFJREFUSMftlNd6gjAYhkG0bq1719G99y5iCxEEGe7Z3v9llCdiBUILPfDM9yzJ9z7hJ8mPbVgnoUw1EcARAslqMGSVz8CwNYkMmvfjf+I354O4DTmTkLQTkqaCkYDNFll7oRzIOi4ZstM4fFkJbtMq4fUSpqmt5mh0ZxRc2y4tHiFVotoork5DAdCU2yDsk3kcih4S4lls4iGPNEEaFQ2CmoGJCKkRhbpqakIdNLMWAkH+QBgEmqHlgIXgXQleRKj8U2j57D4JFZwXLdIMZxQKixWcWP5WFxzlyQIqaAcXxyGuxcER2kg7OJnjuVbM+dWIDSUoOL98FKMTgvZCEfCsWoPzB3QwFVhO9jl+ohXAt1lavlkKOTvhtC6ognjt9M2d19l2mweTK12jSfwefygxal6QqMa9vnMEE+UUGk6lbku7rKDmeSB+PmN63npfTQpMpboehuFZVhAElgHDwczUAc+UgUgBToKKwZKm9EhuKCeYkdfurD8Rh5QFQ3HSV7ppzES8M1bm/UEDYdCfK71OHENIhzvdce8DoTfudvaeMAtq6Yvj8DtCOHz5WMM2rJFvSI53OT9GTq0AAAAASUVORK5CYII="><!----></i><span data-v-1159d77b="">Commission data</span></div><div data-v-1159d77b="" class="commission__body"><div data-v-1159d77b=""><span data-v-1159d77b="">₹<?php echo $bonus+$bonus2?></span><span data-v-1159d77b="">This Week</span></div><span data-v-1159d77b=""></span><div data-v-1159d77b=""><span data-v-1159d77b="">₹<?php echo $bonus?></span><span data-v-1159d77b="">Total commission</span></div></div><div data-v-1159d77b="" class="commission__body"><div data-v-1159d77b=""><span data-v-1159d77b="">₹<?php echo $bonus2?></span><span data-v-1159d77b="">direct subordinate</span></div><span data-v-1159d77b=""></span><div data-v-1159d77b=""><span data-v-1159d77b="">₹<?php echo $bon?></span><span data-v-1159d77b="">Total number of subordinates in the team</span></div></div></div></div><div class="customer" id="customerId" style="--36a344b0: 'Roboto', 'Inter', sans-serif; --17a7a9f6: bahnschrift;"><div data-v-67fe8f9c="" class="tabbar__container" style="--36a344b0: 'Roboto', 'Inter', sans-serif;"><div data-v-67fe8f9c="" onclick="window.location.href='/indexlogin#/';" class="tabbar__container-item"><svg data-v-67fe8f9c="" xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="none" viewBox="0 0 46 44" class=""><circle cx="27" cy="28" r="18" fill="#FFF4F4"></circle><path fill="#FFCDCB" fill-rule="evenodd" d="m23.66 5.278-17.9 12.08v25.507h10.08v-10.44a5.04 5.04 0 0 1 5.04-5.04h6.36a5.04 5.04 0 0 1 5.04 5.04v4.38h-3.36v-4.38a1.68 1.68 0 0 0-1.68-1.68h-6.36a1.68 1.68 0 0 0-1.68 1.68v11.16a2.64 2.64 0 0 1-2.64 2.64H5.04a2.64 2.64 0 0 1-2.64-2.64v-26.61a2.64 2.64 0 0 1 1.163-2.188L22.437 2.05a2.16 2.16 0 0 1 2.382-.023L44.514 14.77a2.64 2.64 0 0 1 1.206 2.217v26.598a2.64 2.64 0 0 1-2.64 2.64H30.6v-3.36h11.76V17.379l-18.7-12.1Z" clip-rule="evenodd"></path><path fill="#FFCDCB" d="M32.4 44.545a1.68 1.68 0 1 1-3.36 0 1.68 1.68 0 0 1 3.36 0ZM32.28 36.745a1.68 1.68 0 1 1-3.36 0 1.68 1.68 0 0 1 3.36 0Z"></path></svg><!----><span data-v-67fe8f9c="">Home</span></div><div data-v-67fe8f9c="" class="tabbar__container-item" onclick="window.location.href='/activity#/';"><svg data-v-67fe8f9c="" xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="none" viewBox="0 0 46 44" class=""><circle cx="27" cy="24" r="18" fill="#FFF4F4"></circle><path fill="#FFCDCB" fill-rule="evenodd" d="M10.512 5.2h26.975a4.8 4.8 0 0 1 4.796 4.6l.51 12.2h3.203L45.48 9.666A8 8 0 0 0 37.489 2H10.511A8 8 0 0 0 2.52 9.666l-1.17 28A8 8 0 0 0 9.34 46h29.317a8 8 0 0 0 7.993-8.334L46.331 30h-3.203l.326 7.8a4.8 4.8 0 0 1-4.796 5H9.341a4.8 4.8 0 0 1-4.795-5l1.17-28a4.8 4.8 0 0 1 4.796-4.6Z" clip-rule="evenodd"></path><path fill="#FFCDCB" fill-rule="evenodd" d="M13.92 16.64c.466 5.158 4.8 9.2 10.08 9.2 5.279 0 9.614-4.042 10.078-9.2h-3.522a6.621 6.621 0 0 1-13.113 0h-3.522Z" clip-rule="evenodd"></path><path fill="#FFCDCB" d="M34.092 16.65a1.75 1.75 0 0 1-1.75 1.75c-.967 0-1.795-.784-1.795-1.75 0-.967.828-1.75 1.795-1.75.966 0 1.75.783 1.75 1.75ZM17.449 16.648c0 .966-.766 1.75-1.733 1.75-.966 0-1.795-.784-1.795-1.75 0-.967.829-1.75 1.795-1.75.967 0 1.733.783 1.733 1.75ZM46 22a1.6 1.6 0 1 1-3.2 0 1.6 1.6 0 0 1 3.2 0ZM46.33 30.044a1.6 1.6 0 1 1-3.2 0 1.6 1.6 0 0 1 3.2 0Z"></path></svg><!----><span data-v-67fe8f9c="">Activity</span></div><div data-v-67fe8f9c="" onclick="window.location.href='/promotion#/';" class="tabbar__container-item active">
<svg data-v-67fe8f9c="" xmlns="http://www.w3.org/2000/svg" width="57" height="49" fill="none" viewBox="0 0 57 49" class=""><path fill="#fff" fill-rule="evenodd" d="M8.939 1.501A4 4 0 0 1 12.062 0h32.155a4 4 0 0 1 3.124 1.501l7.738 9.673c.427.533.749 1.12.968 1.735H.233a5.99 5.99 0 0 1 .967-1.735L8.94 1.501ZM0 16.091h56.28a5.985 5.985 0 0 1-1.277 2.673l-23.79 28.549a4 4 0 0 1-6.146 0l-23.79-28.55A5.984 5.984 0 0 1 0 16.092Zm20.556 5.936 7.195 10.102a.5.5 0 0 0 .816-.002l7.118-10.093a2.44 2.44 0 0 1 4.435 1.406v.2h-.223c-.326 0-.782.248-1.304.93-.506.663-6.466 8.724-9.651 13.035a.975.975 0 0 1-1.563.007L17.32 24.26s-.394-.62-1.06-.62h-.14v-.195a2.445 2.445 0 0 1 4.436-1.418Z" clip-rule="evenodd"></path></svg><div data-v-67fe8f9c="" class="promotionBg"></div><span data-v-67fe8f9c="">Promotion</span></div><div data-v-67fe8f9c="" onclick="window.location.href='./wallet?user=<?php echo  $_SESSION['username']?>'" class="tabbar__container-item"><svg data-v-67fe8f9c="" xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="none" viewBox="0 0 46 44" class="wallet"><circle cx="28" cy="24" r="18" fill="#FFF4F4"></circle><path stroke="#FFCDCB" stroke-linecap="round" stroke-linejoin="round" stroke-width="3.2" d="M3 23c0-5.984 3.526-10.164 9.008-10.868.56-.088 1.14-.132 1.742-.132h21.5c.559 0 1.096.022 1.612.11C42.41 12.77 46 16.972 46 23v11c0 6.6-4.3 11-10.75 11h-21.5C7.3 45 3 40.6 3 34v-2.178"></path><path stroke="#FFCDCB" stroke-linecap="round" stroke-linejoin="round" stroke-width="3.2" d="M46 23.724h-6.452c-2.366 0-4.301 1.862-4.301 4.138S37.182 32 39.548 32H46m-9-20c-.516-.083-1.194 0-1.753 0H14c-.602 0-1.44-.083-2 0 0 0 .731-.648 1.247-1.145l6.99-6.745A7.737 7.737 0 0 1 25.571 2c1.997 0 3.914.758 5.333 2.11l3.764 3.662C36.045 9.076 39.548 12 37 12Z"></path></svg><!----><span data-v-67fe8f9c="">Wallet</span></div><div data-v-67fe8f9c="" onclick="window.location.href='/main#/';" class="tabbar__container-item"><svg data-v-67fe8f9c="" xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="none" viewBox="0 0 46 44" class=""><circle cx="28" cy="24" r="18" fill="#FFF4F4"></circle><path fill="#FFCDCB" fill-rule="evenodd" d="M24.08 5.28C13.741 5.28 5.36 13.661 5.36 24c0 10.339 8.381 18.72 18.72 18.72 10.339 0 18.72-8.381 18.72-18.72v-8.76h3.36V24c0 12.194-9.886 22.08-22.08 22.08C11.886 46.08 2 36.194 2 24 2 11.806 11.886 1.92 24.08 1.92h20.28v3.36H24.08Z" clip-rule="evenodd"></path><path fill="#FFCDCB" d="M46.16 3.6a1.68 1.68 0 1 1-3.36 0 1.68 1.68 0 0 1 3.36 0ZM46.16 15.12a1.68 1.68 0 1 1-3.36 0 1.68 1.68 0 0 1 3.36 0Z"></path><path fill="#FFCDCB" fill-rule="evenodd" d="M15.806 29.582a1.68 1.68 0 0 1 2.372.144c1.15 1.298 2.748 2.794 5.462 2.794 2.872 0 4.857-1.428 5.805-2.533a1.68 1.68 0 0 1 2.55 2.186c-1.451 1.695-4.314 3.707-8.355 3.707-4.198 0-6.647-2.424-7.977-3.926a1.68 1.68 0 0 1 .143-2.372Z" clip-rule="evenodd"></path></svg><!----><span data-v-67fe8f9c="">Account</span></div></div><!----></div>
<foreignobject></foreignobject>
 <script>
  
     
    console.log("Invitation Link Created");
    function copyToClipboard(id) {
var inputc = document.body.appendChild(document.createElement("input"));
inputc.value =id.innerHTML;
inputc.focus();
inputc.select();
document.execCommand('copy');
inputc.parentNode.removeChild(inputc);
  document.getElementById("snackbar").innerHTML= "copy success";
           document.getElementById("snackbar").style.display= "";
        setTimeout(function () { document.getElementById("snackbar").style.display= "none"; }, 3000);
}
  function l1(){
       document.getElementById("level1").style.display= "";
       document.getElementById("level2").style.display= "none";
       document.getElementById("bl1").style.borderColor= "rgb(252, 39, 121)";
       document.getElementById("tl1").style.color= "rgb(252, 39, 121)";
       document.getElementById("bl2").style.borderColor= "transparent";
       document.getElementById("tl2").style.color= "rgb(0, 0, 0)";
    }
    function l2(){
       document.getElementById("level1").style.display= "none";
       document.getElementById("level2").style.display= "";        
       document.getElementById("bl1").style.borderColor= "transparent";
       document.getElementById("tl1").style.color= "rgb(0, 0, 0)";
       document.getElementById("bl2").style.borderColor= "rgb(252, 39, 121)";
       document.getElementById("tl2").style.color= "rgb(252, 39, 121)";
    }
       function apply(){
           if(<?php echo $bon?> >0){
               console.log("applied");
               window.location.href='apply';
           }else{
               document.getElementById("snackbar").innerHTML= "You Only Have ₹<?php echo $bon?>.00 Commission !";
           document.getElementById("snackbar").style.display= "";
        setTimeout(function () { document.getElementById("snackbar").style.display= "none"; }, 3000); 
           }
       }

</script>
<script>
    
     
    console.log("Invitation Link Created");
    function RefCodeCopy(text) {
var inputc = document.body.appendChild(document.createElement("input"));
inputc.value =document.getElementById("mycode").innerHTML;
inputc.focus();
inputc.select();
document.execCommand('copy');
inputc.parentNode.removeChild(inputc);
  document.getElementById("snackbar").innerHTML="Refer Code Copied Successfully !";
           document.getElementById("snackbar").style.display= "";
        setTimeout(function () { document.getElementById("snackbar").style.display= "none"; }, 3000);
}

</script>
<script>
    
     
    console.log("Invitation Link Created");
    function copyToClipboard(text) {
var inputc = document.body.appendChild(document.createElement("input"));
inputc.value =document.getElementById("mylink").innerHTML;
inputc.focus();
inputc.select();
document.execCommand('copy');
inputc.parentNode.removeChild(inputc);
  document.getElementById("snackbar").innerHTML="Registration Link Copied Success !";
           document.getElementById("snackbar").style.display= "";
        setTimeout(function () { document.getElementById("snackbar").style.display= "none"; }, 3000);
}

</script>
</body></html>