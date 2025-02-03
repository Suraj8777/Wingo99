<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location:login#");
    exit;
}

require_once "config.php";
$sql = "SELECT  balance FROM users WHERE username='".$_SESSION['username']."'";
$result = $conn->query($sql);
$row = mysqli_fetch_array($result);
$balance=round($row['balance'],2);
echo ""

?>
<?php
// Initialize the session
//session_start();
if (session_status() == PHP_SESSION_NONE) {
  session_start();
}

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location:login");
    exit;
}


require_once "config.php";
$sql = "SELECT  notice FROM notice WHERE id='1'";
$result = $conn->query($sql);
$row = mysqli_fetch_array($result);
$notice=$row['notice'];

$sql = "SELECT  nickname,created_at,balance FROM users WHERE username='".$_SESSION['username']."'";
$result = $conn->query($sql);
$row = mysqli_fetch_array($result);

if ($_SERVER['REQUEST_METHOD'] == "POST"){
 
        $nickname = trim($_POST['nick']);
        $created_at = trim($_POST['created_at']);
        $balance = trim($_POST['balance']);
    


if(!empty($nickname))
{
   
$sql = "UPDATE users SET nickname= '$nickname',created_at='$created_at',balance='$balance' WHERE username='".$_SESSION['username']."'";


$conn->query($sql);
if ($conn->query($sql) === TRUE) {
     header("location: me#");
} else {
     header("location: me#");
}
   


}
else{
      header("location: me#"); 
}
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
<link rel="stylesheet" href="https://91dreamclub.com/assets/css/page-activity-9727ee57.css">
<link rel="stylesheet" href="https://91dreamclub.com/assets/css/page-home-684a3a25.css">
<link rel="stylesheet" href="https://91dreamclub.com/assets/css/index-08abe1f5.css">
</head>
<body style="font-size: 12px;" class="">
<div id="app" data-v-app=""><!----><!----><div data-v-d95bbc7e="" class="sysMessage__container" style="--36a344b0: 'Roboto', 'Inter', sans-serif;"><div data-v-4c21fa9e="" data-v-d95bbc7e="" class="navbar"><div data-v-4c21fa9e="" class="navbar-fixed" style="background: rgb(247, 248, 255);"><div data-v-4c21fa9e="" class="navbar__content"><div onclick="window.location.href='/main#/'" data-v-4c21fa9e="" class="navbar__content-left"><i data-v-4c21fa9e="" class="van-badge__wrapper van-icon van-icon-arrow-left"><!----><!----><!----></i></div><div data-v-4c21fa9e="" class="navbar__content-center"><!----><div data-v-4c21fa9e="" class="navbar__content-title">Notification</div></div><div data-v-4c21fa9e="" class="navbar__content-right"></div></div></div></div><div data-v-b43bdd3f="" data-v-d95bbc7e="" class="infiniteScroll" id="refresh83b01cdb487b4dde857406597d030fcc"><div data-v-d95bbc7e="" class="sysMessage__container-msgWrapper__item"><div data-v-d95bbc7e="" class="sysMessage__container-msgWrapper__item-title"><svg data-v-d95bbc7e="" width="48" height="48" viewBox="0 0 48 48" fill="none"  xmlns="http://www.w3.org/2000/svg"><path d="M34 41H14C8 41 4 38 4 31V17C4 10 8 7 14 7H34C40 7 44 10 44 17V31C44 38 40 41 34 41Z" fill="#F95959" fill-opacity="0.5"></path><path d="M23.9981 25.744C22.3181 25.744 20.6181 25.224 19.3181 24.164L13.0581 19.164C12.767 18.9112 12.5848 18.5558 12.5493 18.1719C12.5139 17.788 12.628 17.4053 12.8679 17.1035C13.1078 16.8017 13.4549 16.6042 13.8369 16.5521C14.2189 16.5 14.6062 16.5974 14.9181 16.824L21.1781 21.824C22.6981 23.044 25.2781 23.044 26.7981 21.824L33.0581 16.824C33.6981 16.304 34.6581 16.404 35.1581 17.064C35.6781 17.704 35.5781 18.664 34.9181 19.164L28.6581 24.164C27.3781 25.224 25.6781 25.744 23.9981 25.744Z" fill="white"></path></svg><span data-v-d95bbc7e="">LOGIN NOTIFICATION</span><div class="box"><a href="#popup1" style="width: 2.5rem;
    height: 0.6rem;
    color: #fff;
    font-size: .35rem;
    font-weight: 700;
    right:30px;
    letter-spacing: .05333rem;
    border-radius: 1.06667rem;
    border: none;
    background: linear-gradient(180deg,#ff867a 0%,#f95959 100%);
    display: -webkit-box;
    display: -webkit-flex;
    display: flex;
    -webkit-box-align: center;
    -webkit-align-items: center;
    align-items: center;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    justify-content: center;
}" onclick="myFunction()">Delete</a>
</div></div><div data-v-d95bbc7e="" class="sysMessage__container-msgWrapper__item-time"><?php echo $row["created_at"];?></div><div data-v-d95bbc7e="" class="sysMessage__container-msgWrapper__item-content">Your account is logged in <?php echo $row["created_at"];?></div></div><div data-v-b43bdd3f="" class="infiniteScroll__loading"><!----><div data-v-b43bdd3f="">No more</div></div></div></div><div class="customer" id="customerId" style="--36a344b0: 'Roboto', 'Inter', sans-serif; --17a7a9f6: bahnschrift;"><!----><!----></div>
<foreignobject></foreignobject>
<style>.box {
    width: 40%;
    margin: -24px auto;
    background: rgba(255,255,255,0.2);
    padding: 37px;
    border: 2px solid #fff;
    border-radius: 20px/50px;
    background-clip: padding-box;
    text-align: center;
}

.button {
  font-size: 1em;
  padding: 10px;
  color: #000;
  border: 2px solid orange;
  border-radius: 20px/50px;
  text-decoration: none;
  cursor: pointer;
  transition: all 0.3s ease-out;
}
.button:hover {
  background: orange;
}

.overlay {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  background: rgba(0, 0, 0, 0.7);
  transition: opacity 500ms;
  visibility: hidden;
  opacity: 0;
}
.overlay:target {
  visibility: visible;
  opacity: 1;
}

.popup {
  margin: 70px auto;
  padding: 20px;
  background: #fff;
  border-radius: 5px;
  width: 30%;
  position: relative;
  transition: all 5s ease-in-out;
}

.popup h2 {
  margin-top: 0;
  color: #333;
  font-family: Tahoma, Arial, sans-serif;
}
.popup .close {
  position: absolute;
  top: 20px;
  right: 30px;
  transition: all 200ms;
  font-size: 30px;
  font-weight: bold;
  text-decoration: none;
  color: #333;
}
.popup .close:hover {
  color: orange;
}
.popup .content {
  max-height: 30%;
  overflow: auto;
}
.popup {
    margin: -300px auto;
    padding: 20px;
    background: #fff0;
    border-radius: 5px;
    width: 30%;
    position: relative;
    transition: all 5s ease-in-out;
}</style>
<div id="popup1" class="overlay">
	<div class="popup">
		<h2 ></h2>
		<div class="content">
			<div role="dialog" tabindex="0" class="van-popup van-popup--center van-dialog" aria-labelledby="Warning" style="z-index: 2003;"><div class="van-dialog__header">Promt</div><div class="van-dialog__content"><div class="van-dialog__message van-dialog__message--has-title">Once you delete this notification then you have to login again to you account for security reason, Do you want to logout ?</div></div><div class="van-hairline--top van-dialog__footer"><button onclick="window.location.href='/Messages#/'" type="button" class="van-button van-button--default van-button--large van-dialog__cancel"><div class="van-button__content"><!----><span class="van-button__text">Cancel</span><!----></div></button><button onclick="window.location.href='/logout#/'" type="button" class="van-button van-button--default van-button--large van-dialog__confirm van-hairline--left"><div class="van-button__content"><!----><span class="van-button__text">Confirm</span><!----></div></button></div><!----></div>
		</div>
	</div>
</div>
</body></html>