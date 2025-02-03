<?php

// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login");
    exit;
}
require_once "config.php";

// mysql select query

$query1 = "SELECT * FROM `bonus` WHERE usercode='".$_SESSION['usercode']."' ";


// result for method one

// result for method two 
$result1 = mysqli_query($conn, $query1);

$dataRow = "";
$number_of_result = mysqli_num_rows($result1);  
$results_per_page = 10;  

  
//determine the total number of pages available  
$number_of_page = ceil ($number_of_result / $results_per_page);  

//determine which page number visitor is currently on  
if (!isset ($_GET['page']) ) {  
    $page = 1;  
} else {  
    $page = $_GET['page'];  
}  
 
//determine the sql LIMIT starting number for the results on the displaying page  
$page_first_result = ($page-1) * $results_per_page;  

//retrieve the selected results from database   
$query = "SELECT * FROM `bonus` WHERE usercode='".$_SESSION['usercode']."' ORDER BY id DESC LIMIT " . $page_first_result . ',' . $results_per_page;  
$result = mysqli_query($conn, $query);  
  
//display the retrieved result on the webpage  
while ($row2 = mysqli_fetch_array($result)) {  
    $dataRow = $dataRow." 
    <li data-v-a26e082a=''>
    <ol data-v-a26e082a=''>
        <p data-v-a26e082a='' style='text-shadow: 0 0.05333rem 0.02667rem rgba(231,65,65,.5);
    border: none;
    width:120px;
    text-align:center;
    border-radius: 0.06667rem;
    color:white;
    font-weight:450;
    background: -webkit-linear-gradient(top,#ff867a 0%,#f95959 100%);
    background: linear-gradient(180deg,#ff867a 0%,#f95959 100%);
    box-shadow: 0 0.05333rem #e74141;'>+91$row2[1]</p>
        <p data-v-a26e082a='' class='oddnum' style='text-shadow:0 0.05333rem 0.02667rem rgb(0 0 0 / 40%);color:#000;'>$row2[4]</p>
    </ol>
    <ol data-v-a26e082a=''>
        <p data-v-a26e082a='' class='times' style='text-shadow: 0 0.05333rem 0.02667rem rgba(231,65,65,.5);
    border: none;
    width:50px;
    text-align:center;
    border-radius: 0.06667rem;
    color:white;
    font-weight:450;
    background: linear-gradient(180deg,#9fffb8 0%,#00b267 100%);
    box-shadow: 0 0.05333rem #008130;'>₹&nbsp$row2[3]</p>
        <div data-v-a26e082a='' class='icon'><img data-v-a26e082a=''
                src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHgAAAB4CAMAAAAOusbgAAAAYFBMVEUAAAD6Wlr4WFj/YWH6WVn7Wlr5WFj5Wlr5WFj/WFj8Wlr5WVn6WVn5WFj4V1f/V1f5WVn5WFj7WVn7WVn+XFz7Xl75WVn/VVX5WFj4WFj7W1v+W1v5WVn7Wlr5Wlr5WVmJKV1iAAAAH3RSTlMAZsIMWT+2fX8RX29NH40m359ROSwmGQatmUYyz17vxXPQ3wAAAcRJREFUaN7t2m1vgjAQwPEe0AkUUB4ERF2//7ecJG6XLdJKrheMu//LhuTnRRFenJIkSXrXYn2FZq88dQVcdRzS3V9hTitnGubyLKAL97THRTmUi7LLRTmYi7LXRZnu+mV0Uaa7fhldlOmuS0Y3sNwDuGR0A8txAi4Z3UfyQICP8Di97GIdAdbgkL3XcMCg/Ze0BLgEh+xxoVSECofscYu1VpaOBxu0Q5SXfrayLKUetzxYpi6ZE0Y3eJHLzS1j2gFfLCHCyKVlLVuEG8tasQgby5pZhFPLWiqwwPf+A7zZfdxY1vTr/VeryDIWbfU8zpXaZOT6Nd+5VFlbjj5TdBdpE4V+rx4Nsq5iWGgXufqAhRKllMACCyywwAILLLDAAgss8NxpdzuoI2zkg80Hjndj5yo8qvhgqH7GNXDP1N8fxTDCcPo1Lg6NLhMM5jTW1d+zqq4rAzywP4EFFlhggQNUPAsPW8EqMDw9DScEhbSJMhEU0tJPGxbuCUtNpAa1zf3UEFZ8mH9b2DkkHK+Ah5wAkfbJOu6B+b/ls1rXkPC4/uKJyfV3JA9d9OtEpAuCmre9ItR3umiSdWLSTO0xU5IkSe/WF7W+N+28iEaIAAAAAElFTkSuQmCC''></div>
    </ol>
</li>
            

";
    
}




?>
<html translate="no" data-dpr="1" style="font-size: 40px;"><head><meta charset="utf-8"><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="robots" content="noindex,nofollow"><meta content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no" name="viewport"><meta name="google-site-verification"><link rel="icon" href="./ico.png">
<meta name="google" content="notranslate">
<meta name="robots" content="noindex,nofollow">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

<link rel="manifest">
<title>91 Club</title><link href="https://91dreamclub.com/css/chunk-009b4c4c.8f338b77.css" rel="prefetch"><link href="https://91dreamclub.com/css/chunk-01c025bd.1667b8ce.css" rel="prefetch"><link href="https://91dreamclub.com/css/chunk-0258b2a7.9f3612df.css" rel="prefetch"><link href="https://91dreamclub.com/css/chunk-02d640c5.16079f26.css" rel="prefetch"><link href="https://91dreamclub.com/css/chunk-04d9e7e8.f2872521.css" rel="prefetch"><link href="https://91dreamclub.com/css/chunk-05d395a8.27167ad5.css" rel="prefetch"><link href="https://91dreamclub.com/css/chunk-076af0c5.29ef0cc5.css" rel="prefetch"><link href="https://91dreamclub.com/css/chunk-0776880e.4eccb474.css" rel="prefetch"><link href="https://91dreamclub.com/css/chunk-085e8808.15897d4c.css" rel="prefetch"><link href="https://91dreamclub.com/css/chunk-0984719c.48994e09.css" rel="prefetch"><link href="https://
<link rel="stylesheet" href="https://91dreamclub.com/includes/assets/css/light.css?23.04.19.6">
<link rel="stylesheet" href="https://91dreamclub.com/includes/dropzone/css/dropzone.css?23.04.19.6">
<script type="text/javascript" src="/includes/popper/popper.min.js"></script>
<script type="text/javascript" src="/includes/jquery/jquery.min.js"></script>
<script type="text/javascript" src="/includes/jquery/jquery.cookie.min.js"></script>
<script type="text/javascript" src="/includes/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/includes/dropzone/js/dropzone.js"></script>
<script type="text/javascript" src="/includes/osqr/qrious.min.js"></script>
<script type="text/javascript" src="/includes/assets/cinfo/cpin.min.js?23.04.19.6"></script>
</head><link href="css/app.46643acf.css" rel="preload" as="style">
    <link href="css/chunk-vendors.cf06751b.css" rel="preload" as="style">

    <link href="js/chunk-vendors.824d6eef.js" rel="preload" as="script">
    <link href="css/chunk-vendors.cf06751b.css" rel="stylesheet">
    <link href="css/app.46643acf.css" rel="stylesheet">
    <style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>

<body style="font-size: 36px;"><noscript><strong>We're sorry but default doesn't work properly without JavaScript
            enabled. Please enable it to continue.</strong></noscript>
    <div data-v-2cbd0c10="" class="recharge">
        <nav data-v-2cbd0c10="" style="background: linear-gradient(90deg, rgb(249, 89, 89) 0%, rgb(255, 154, 142) 100%);" class="top_nav">
            <div data-v-2cbd0c10="" class="left"><a href="/promotion#/"><img data-v-2cbd0c10=""
                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAByUlEQVRoQ+3ZwSsFURTH8e/5N5SV/0AWtpbIggUlKSlJJCUpSUlJSlKSkpKUbEjK1tbCkhV/hT/gp1deXa95z8y8md4905v1vXfO5515M+feY1Tksoo46EJiy2Q3I60yImkHGAZ6gTszWys7g4VnRNI2sNsQ+JCZvZSJKRQiaQvYSwh43MweXEAkbQL7CcG+mdlAmYja2oVkRNIGcJAQ7DswaWYf0UMkrQOHnUS0nRFJtbfRUacRbUEkrQLHMSByQyStACexIHJBJC0BpzEhMkMkLQJnsSEyQSQtAOcxIlJDJM0DF7EiUkEkzQGXMSP+hUiaBa5iR7SESJoBrj0gmkIkTQM3XhCJEElTwG0TxHLZxV+a9ZP2Nn+qX0mjwFOaxTo85hvoN7PPehyNkEdgrMNBpr39s5mNVB5SjUerlqZK/Nnrz1slXr8Bxv8HMcD4L1ECjP+iMcD4L+MDjP+NVYDxv9UNMP4PHwKM/+OgAOP/gC7A+D8yDTD+D7EDjP+2QoDx3+gJMP5bbwEmqRk6aGavafewecYV0nprvPFve7pW0vQA92Y2kSe4LHNKgQTZ6TOzrywB5R1bKiRvUHnmdSF5frUy51QmIz+4oeozWPEp9QAAAABJRU5ErkJggg=="
                    alt=""></a><span data-v-2cbd0c10="">Bonus Record</span></div>
        </nav>
       <div data-v-62a71d62="" class="recharge_box">
    <div data-v-62a71d62="" class="completed_list">
        <ul data-v-62a71d62="" class="list_box">
           <?php echo $dataRow;?>
        </ul>
    </div>
    <!---->
    <?php echo '<div data-v-aa6d4f0a="" class="pagination">
                <ul data-v-aa6d4f0a="" class="page_box">
                    <li data-v-aa6d4f0a="" class="page"><span data-v-aa6d4f0a="">'.(1+($page-1)*10).'-'.($page*10).'</span> of '.$number_of_page.'
                    </li>';
              if ( $page ==1 ) {  
    echo'<a href="#"><i data-v-b74b9dc6="" class="van-icon van-icon-arrow-left"><!----></i></a><a href="bonusrecord.php?page='.($page+1).'"><i data-v-b74b9dc6="" class="van-icon van-icon-arrow"><!----></i></a></li></ul></div>';
} else {  
     echo'<a href="bonusrecord.php?page='.($page-1).'"><i data-v-b74b9dc6="" class="van-icon van-icon-arrow-left"><!----></i></a><a href="bonusrecord.php?page='.($page+1).'"><i data-v-b74b9dc6="" class="van-icon van-icon-arrow"><!----></i></a></li></ul></div>';
}  ?>
</div>
        </div>
        <style>.teal[data-v-74fec56a] {
    background: linear-gradient(90deg,#f95959 0%,#ff9a8e 100%)!important;
}.Loading[data-v-05faeee2], .Loading[data-v-7692a079] {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    display: -webkit-box;
    display: -webkit-flex;
    display: flex;
    -webkit-box-align: center;
    -webkit-align-items: center;
    align-items: center;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    justify-content: center;
    background: rgba(0,0,0,.7);
    -webkit-transition: opacity .15s ease-in-out,visibility .15s ease-in-out;
    transition: opacity .15s ease-in-out,visibility .15s ease-in-out;
    z-index: 2004;
}.top_nav[data-v-2cbd0c10] {
    height: 56px;
    width: 100%;
    line-height: 56px;
    padding: 0 15px;
    box-sizing: border-box;
    box-shadow: 0 2px 4px -1px rgba(0, 0, 0, .2), 0 4px 5px 0 rgba(0, 0, 0, .14), 0 1px 10px 0 rgba(0, 0, 0, .12);
    transition: .2s cubic-bezier(.4, 0, .2, 1);
    justify-content: space-between;
}</style>
        <div data-v-74fec56a="" data-v-2cbd0c10="" id="loading"  class="loading" >
            <div data-v-7692a079="" data-v-df454e7e="" class="Loading c-row c-row-middle-center" ><div data-v-7692a079="" class="van-loading van-loading--circular"><span data-v-7692a079="" class="van-loading__spinner van-loading__spinner--circular" style="color: rgb(242, 65, 59);"><svg data-v-7692a079="" viewBox="25 25 50 50" class="van-loading__circular"><circle data-v-7692a079="" cx="50" cy="50" r="20" fill="none"></circle></svg></span></div></div>
    </div>
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