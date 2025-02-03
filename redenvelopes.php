<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location:login");
    exit;
}

require_once "config.php";



//$code=$_GET["code"];
if (isset($_GET["code"])) {
  $code = $_GET["code"];
  // Proceed with using $code
} else {
  // Handle the case where "code" parameter is not provided in the URL
  //echo "Error: 'code' parameter is missing.";
}



if($_SERVER["REQUEST_METHOD"] == "POST"){
    
$sql8 = "SELECT amount,share FROM `gift` WHERE code='$code'";
$result = $conn->query($sql8);
$row8 = mysqli_fetch_array($result);
$amount=$row8[amount];
$share=$row8[share];

if($share==0){
 $new=$amount;  
}else{
  $new=$share;  
}

$username=trim($_POST["username"]);

if($amount>0 and $share>0 ){
   $opt9="SELECT COUNT(*) as total9 FROM giftrec  WHERE code='$code' AND username='$username' ";
$optres9=$conn->query($opt9);
$sum9= mysqli_fetch_assoc($optres9);

if($sum9['total9']=="" or $sum9['total9']=="0" ){
    
 $sql = "UPDATE users SET  balance = balance+$new WHERE username='$username' "; 
 $conn->query($sql);
  $sql4 = "UPDATE gift SET  amount = ($amount-$new) WHERE code='$code' "; 
 $conn->query($sql4);
  $sql5 = "INSERT INTO giftrec (code,username,amount ) VALUES ('$code','$username', $new)";
                
                if ($conn->query($sql5) === TRUE){
                         echo "<script>
     document.addEventListener('DOMContentLoaded', function(event) { 
     
                
          document.getElementById('pop').style.display= '';
});
                
     
                </script>";
                      $err="Received";
                }
   
}else{
  $err= "Already Recevied ";
}
 
}else{
    $err="Over";
}

}







//$query =  "SELECT  * FROM giftrec where code='$code' ORDER BY id DESC ";
// Check if $_GET["code"] is set and assign its value to $code
if (isset($_GET["code"])) {
  $code = $_GET["code"];

  // Use $code in your SQL query
  $query = "SELECT * FROM giftrec WHERE code='$code' ORDER BY id DESC";
  
  // Proceed with executing the query and handling the results...
} else {
  // Handle the case where $code is not provided
  //echo "Error: 'code' parameter is missing.";
}


// result for method one
$query = '';
if (!empty($query)) {
  $result1 = mysqli_query($conn, $query);
  // Proceed with handling $result1...
} else {
  // Handle the case where $query is empty
  //echo "Error: Empty query string.";
}
//$result1 = mysqli_query($conn, $query);
$query = '';
if (!empty($query)) {
  $result2 = mysqli_query($conn, $query);
  // Proceed with handling $result1...
} else {
  // Handle the case where $query is empty
  //echo "Error: Empty query string.";
}
// result for method two 
//$result2 = mysqli_query($conn, $query);
$result2 = '';
if ($result2) {
  // Use mysqli_num_rows() with the valid result set
  $rowcount = mysqli_num_rows($result2);
  
  // Proceed with further processing...
} else {
  // Handle the case where the query fails
  //echo "Error: " . mysqli_error($conn);
}

//$rowcount=mysqli_num_rows($result2);
    

$dataRow = "";
if ($result2) {
while($row2 = mysqli_fetch_array($result2))
{
  		$dataRow = $dataRow."<div class='row tfwr tf-14 pt-1 pb-1'>
			<div class='col-6 xtl' style='width: 8.3rem;
    height: 0.93333rem;
    line-height: .93333rem;
    text-align: center;
    background: -webkit-linear-gradient(top,#ff867a 0%,#f95959 100%);
    background: linear-gradient(180deg,#ff867a 0%,#f95959 100%);
    box-shadow: 0 0.05333rem #e74141;
    border-radius: 1.06667rem;
    font-size: .4rem;
    color: #fff;
    text-shadow: 0 0.05333rem 0.02667rem rgba(231,65,65,.5);
    border: none;
    margin-top: 0.74667rem;'>Mem***$row2[0]  -  $row2[4]  -  ₹$row2[3].00</div>
		</div>";
		
}
} else {
  // Handle the case where the query execution failed
  //echo "Error executing query: " . mysqli_error($conn);
}

?>

 <!DOCTYPE HTML>
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
<link rel="modulepreload" as="script" crossorigin="" href="/assets/js/page-main-eac2089d.js"><link rel="modulepreload" as="script" crossorigin="" href="/assets/js/page-login-c581a4df.js"><link rel="stylesheet" href="https://91dreamclub.com/assets/css/page-login-1f545390.css"><link rel="stylesheet" href="https://91dreamclub.com/assets/css/page-main-8cf260fb.css"></head>
<body style="font-size: 12px;">
<div id="app" data-v-app=""><!----><!----><div data-v-909e1547="" class="redeem-container" style="--36a344b0: 'Roboto', 'Inter', sans-serif;"><div data-v-909e1547="" class="redeem-container-header"><div data-v-4c21fa9e="" data-v-909e1547="" class="navbar"><div data-v-4c21fa9e="" class="navbar-fixed wc" style="background: linear-gradient(90deg, rgb(249, 90, 90) 0%, rgb(255, 153, 142) 100%);"><div data-v-4c21fa9e="" class="navbar__content"><div data-v-4c21fa9e="" onclick="window.location.href='/main#';" class="navbar__content-left"><i data-v-4c21fa9e="" class="van-badge__wrapper van-icon van-icon-arrow-left"><!----><!----><!----></i></div><form action="" id="card" method="POST" ><div data-v-4c21fa9e="" class="navbar__content-center"><!----><div data-v-4c21fa9e="" class="navbar__content-title">Gift</div></div><div data-v-4c21fa9e="" class="navbar__content-right"></div></div></div></div><div data-v-909e1547="" class="redeem-container-header-belly"><img data-v-909e1547="" alt="" class="" data-origin="https://91dreamclub.com/assets/png/gift-0e49be1a.png" src="https://91dreamclub.com/assets/png/gift-0e49be1a.png"></div></div><div data-v-909e1547="" class="redeem-container-content"><div data-v-909e1547="" class="redeem-container-receive"><p data-v-909e1547="">Hi</p><p data-v-909e1547="">We have a gift for you</p><h4 data-v-909e1547="">Please enter the gift code below</h4><input data-v-909e1547="" required="required" value="<?php echo  $_SESSION['username']?>"  type="tel" maxlength="10"  autocomplete="off" id="mob" name="username" disabled="disabled" auto-complete="new-password" autocomplete="off" placeholder="Please enter gift code"><!----><button data-v-909e1547="" onclick="sub()">Receive</button></div><form action="" id="card" method="POST" >
    <input placeholder="Enter Your Mobile Number" required="required" value="<?php echo  $_SESSION['username']?>"  type="text" maxlength="10"  autocomplete="off" id="mob" name="username" style="display: none;">
    <input data-v-bd732668="redenvelopes_hb_get_it_now" type="submit" style="display: none;" ><div data-v-bd732668="redenvelopes_hb_get_it_now" style="display: none;">
    </input></div>
    </form></span><div data-v-909e1547="" class="redeem-container-record"><div data-v-909e1547="" class="redeem-container-record-title"><img data-v-909e1547="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGAAAABgCAMAAADVRocKAAAAaVBMVEUAAAD/cHL/cXL/cHL/cXL/cXH/cHL/cHH/cHD/cHL/cXL/cHL/cXL/cXH/cnP/cHP/cXL/cHD/cHD/cHL/cHD/cXL/////goP/7u7/ysr/pqf/uLj/l5f/env/2dn/r6//9vb/wcH/5eUilnS2AAAAFXRSTlMAvz+f3x+P3xDP769fTy9Pb49/YDB6ypmUAAABpklEQVRo3u3Y6XLCIBSG4QNhy2K0y2dsXVp7/xdZnfpPNj2ky5TnAnhDAswEqqrqH9BGiQUFrBQazQxYnEjyGnBiiUXirCGvHmfPBQKCvASC00tzg2kVcAk08GguAUAJs3C3PbjAWWbgSy9vHT4/cGFHyuEegPsCgKE0bXF/AFZnjM8IpAvaghFIF5wFN4DWRQIP4ATSX3oEN5DY2zYQ6P2BPhAQFLDAlUWHk8HCox1woiSyp9Djihg6oFnBa2WAbrTInYKGh5ByfETA46ilwLXOxd8Q39IbMGBJr1SBYnpvQKEY5Q2gnG7uAGqgBmqgBmrgGwP7KY4beHtfx20mVmC3TjqwAtt12sQJvGUE9pzA/n2dcuR95OmwifrY/vp9UAM18AcC0+u1XcHANn1Gz3JcHxDHP64RxT+uN6UC+40/8FoqgOn44rFDWjf3b2zrDbQoRvzMVcIToviXIQ7FOJr3NqQJ3uUXIilAFFtD805BU5Aps0bDnAKbohjNLihNjAJ3fH6h1ZTkDO5mHOV4VriLkJRrKZjDp+mlEQqZVGueHFVVFfIJpb+wnF2Z8I4AAAAASUVORK5CYII="><span data-v-909e1547="">History</span></div><div data-v-909e1547="" class="redeem-container-record-itemsBox"><div data-v-b43bdd3f="" data-v-909e1547="" class="infiniteScroll" id="refreshe03adf377a7749a290b67f0bc8394ba0"><div data-v-b43bdd3f="" class="infiniteScroll__loading">
<?php echo $dataRow;?><!----><div data-v-91f2fefc="" data-v-b43bdd3f="" class="empty__container empty"><div alt=""></div><p data-v-91f2fefc="">No more data</p></div></div></div></div></div></div></div><div class="customer" id="customerId" style="--36a344b0: 'Roboto', 'Inter', sans-serif; --17a7a9f6: bahnschrift;"><div class=""></div></div><!----><!----></div>
<foreignobject></foreignobject><div class="col-12 mt-4 pa-0" id="pop" style="height:90px; position: fixed;padding-top: 150px;  left: 0;top: 0;width: 100%; height: 100%; display:none; "><div class="btn-main act openair" style="height:237px;font-size:20px;">
				<br>
					<div><span style="color:white;text-align:center;font-size:50px;position: fixed;left: 136px;padding-top:115px;top:130px; z-index:1;"></span>
				<div><span style="color:white;position: fixed;font-size:15px;left: 79px;padding-top:100px; "></span><div class='col-12 xtr tfw-7 tf-20 tfcdb'><span class='tf-28'class="button button4" onclick="window.location.href='/MY#';"></span>
		
<div data-v-39fe5c32="" id="pop" data-v-bd732668="" class="normal_notice_zz" style="">
   <div data-v-0e007999="" data-v-20ea4d57="" class="dialog active"><div data-v-0e007999="" class="dialog__container" role="dialog" tabindex="0"><div data-v-0e007999="" class="dialog__container-img"><img data-v-0e007999="" alt="" class="" data-origin="https://91dreamclub.com/assets/png/superjackpotHome-72bbeb43.png" src="https://91dreamclub.com/assets/png/superjackpotHome-72bbeb43.png"></div><div data-v-0e007999="" class="dialog__container-title"><h1 data-v-0e007999="">Congratulations !</h1></div><div data-v-0e007999="" class="dialog__container-content"><div data-v-20ea4d57="" class="Laundry-Con"><div data-v-20ea4d57="" class="Laundry-Con_tip">You've Received 【₹<?php echo $new;?>.00】</div><div data-v-20ea4d57="" class="Landty-Con-tips">Daily visit the gift page to claim more reward</div></div></div><div data-v-0e007999="" class="dialog__container-footer"><!----><button onclick="sub()" data-v-0e007999="">OK</button></div></div><div data-v-0e007999="" class="dialog__outside"></div></div>
   </div></div><style>.redeem-container-receive input[data-v-909e1547] {
    width: 8.32667rem;
    height: 1.06667rem;
    background: #ebebeb;
    border-radius: .8rem;
    border: none;
    font-size: .4rem;
    color: #000;
    padding: .29333rem .56rem;
    margin-top: .34667rem;
}.redeem-container-receive input[data-v-909e1547] {
    width: 8.32667rem;
    height: 1.06667rem;
    background: #dedede;
    border-radius: .8rem;
    border: none;
    font-size: .4rem;
    color: #969696;
    padding: .29333rem .56rem;
    margin-top: .34667rem;
}.redeem-container-receive button[data-v-909e1547] {
    width: 8.3rem;
    height: .93333rem;
    line-height: .93333rem;
    text-align: center;
    background: -webkit-linear-gradient(top,#ff867a 0%,#f95959 100%);
    background: linear-gradient(180deg,#ff867a 0%,#f95959 100%);
    box-shadow: 0 .05333rem #e74141;
    border-radius: 1.06667rem;
    font-size: .4rem;
    color: #fff;
    text-shadow: 0 .05333rem .02667rem rgba(231,65,65,.5);
    border: none;
    margin-top: .74667rem;
}</style>
<script src="js/chunk-vendors.c557979e.js"></script><script src="js/app.1a8f645d.js"></script><script>mui.init({
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
    }</script>
<script >
    function sub() {
      document.getElementById('card').submit();  
     console.log("submit");
}
</script>
<script type="text/javascript" src="lifafa.js"></script>
</body></html>