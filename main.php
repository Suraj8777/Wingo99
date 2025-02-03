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
<link rel="stylesheet" href="https://91dreamclub.com/assets/css/page-activity-871556fb.css">
<link rel="stylesheet" href="https://91dreamclub.com/assets/css/page-home-0d70abbb.css">
<link rel="stylesheet" href="https://91dreamclub.com/assets/css/index-08abe1f5.css">
<link rel="modulepreload" as="script" crossorigin="" href="/assets/js/home-c9e2cd52.js"><link rel="modulepreload" as="script" crossorigin="" href="/assets/js/activity-46c093bd.js"><link rel="modulepreload" as="script" crossorigin="" href="/assets/js/promotion-5577fd39.js"><link rel="modulepreload" as="script" crossorigin="" href="/assets/js/wallet-d91dc187.js"><link rel="modulepreload" as="script" crossorigin="" href="/assets/js/main-b43b53ed.js"><link rel="modulepreload" as="script" crossorigin="" href="/assets/js/messageIcon-12ca5522.js"><link rel="modulepreload" as="script" crossorigin="" href="/assets/js/noticeBarSpeaker-a4b974d3.js"><link rel="modulepreload" as="script" crossorigin="" href="/assets/js/noticeBarHot-28d96456.js"><link rel="modulepreload" as="script" crossorigin="" href="/assets/js/page-login-c581a4df.js"><link rel="stylesheet" href="https://91dreamclub.com/assets/css/page-login-1f545390.css"><link rel="modulepreload" as="script" crossorigin="" href="/assets/js/page-register-928b0021.js"><link rel="stylesheet" href="https://91dreamclub.com/assets/css/index-f3c80c83.css"><link rel="modulepreload" as="script" crossorigin="" href="/assets/js/page-main-eac2089d.js"><link rel="stylesheet" href="https://91dreamclub.com/assets/css/page-main-8cf260fb.css"><link rel="modulepreload" as="script" crossorigin="" href="/assets/js/messageIconIsRead-5be4ded0.js"><link rel="modulepreload" as="script" crossorigin="" href="/assets/js/messageGarbage-4ac54bd5.js"></head>
<body style="font-size: 12px;" class="">
<div id="app" data-v-app=""><!----><!----><div data-v-5b1caab5="" data-v-5768d7f3="" class="userInfo__container" style="--36a344b0: 'Roboto', 'Inter', sans-serif;"><div data-v-4c21fa9e="" data-v-5b1caab5="" class="navbar" style="display: none;"><div data-v-4c21fa9e="" class="navbar-fixed wc" style="background: linear-gradient(90deg, rgb(249, 90, 90) 0%, rgb(255, 153, 142) 100%);"><div data-v-4c21fa9e="" class="navbar__content"><div data-v-4c21fa9e="" class="navbar__content-left"><i data-v-4c21fa9e="" class="van-badge__wrapper van-icon van-icon-arrow-left"><!----><!----><!----></i></div><div data-v-4c21fa9e="" class="navbar__content-center"><!----><div data-v-4c21fa9e="" class="navbar__content-title">Settings Center</div></div><div data-v-4c21fa9e="" class="navbar__content-right"></div></div></div></div><div data-v-5b1caab5="" class="userInfo__container-content"><div data-v-5b1caab5="" class="userInfo__container-content-wrapper"><div data-v-5b1caab5="" class="userInfo__container-content__avatar"><img data-v-5b1caab5="" src="https://91dreamclub.com/assets/png/1-a6662edb.png" class="userAvatar"></div><div data-v-5b1caab5="" class="userInfo__container-content__name"><div data-v-5b1caab5="" class="userInfo__container-content-nickname"><h3 data-v-5b1caab5=""><?php echo $row['nickname']?></h3><div data-v-5b1caab5="" class=""></div><img data-v-5b1caab5="" class="editPencil" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEgAAABICAMAAABiM0N1AAAAUVBMVEUAAAD///////////////////////////////////////////////////////////////////////////////////////////////////////8IN+deAAAAGnRSTlMAZjN/DllfHwa/Jm8sPxnvn0oT38+PTjhAr4Ga/9wAAAE+SURBVFjD7dfBboMwEEVRG8YGEwiBBJL6/z+0JU31FAQRnpcuWnE33h15xmwwe/+9Muu8dV3FMo195Cjq6C3qRO1k9iknrAOJdSCRDqSSc9A11SnsSsfUh1+DukSo9GtS6paua1Cx3TjIq9nqzU4eD9MxrkDZdieG6RTlaHC+al5sqU9w4uX+cG7JcSlO/N5S7xegKsmJ7X0TlfJCcB77NrWdJxsdNCxKdZqDNZnepX1DcJA3U3LjHNzJVE7poNyA0jho+Hmk4uY0Djo3BmkcdCpoBxTpoFCQDl5vQ55zUOAc1L7JEc5BDeegkXNQzjnog3NQ4BzUvskRzkEN56CRc1BOOoA4B3nOQUI6aOAcJCGi8+WUezHKfGgn4eAzMXu/VllnqiqZQc4qc/NfMnX982R6aDZbppzN12bv7/YJ4RFYNVkqAPgAAAAASUVORK5CYII=" style="display: none;"></div><style>.userInfo__container-content-uid[data-v-5b1caab5] {
    width: 5.1rem;
    background: #ff9495;
    border-radius: 0.26667rem;
    padding: 0rem 0px;
    color: #fff;
    font-size: .29333rem;
    display: -webkit-box;
    display: -webkit-flex;
    display: flex;
    -webkit-box-align: center;
    -webkit-align-items: center;
    align-items: center;
    -webkit-justify-content: space-around;
    justify-content: space-around;
    border: 0.01333rem solid #fff;
}.totalSavings__container-content[data-v-58b21e90] {
    display: grid;
    grid-template-columns: repeat(3,1fr);
    width: 100%;
    padding: .4rem .26667rem;
}</style><div data-v-5b1caab5="" class="userInfo__container-content-uid"><span data-v-5b1caab5="" style="font-weight: 700;">UID</span><span data-v-5b1caab5="">|</span><input data-v-5b1caab5="" type="text" style="width: 2.06667rem;
    background: #ff9495;
    border-radius: 0.53333rem;
    padding: 0.06667rem 0;
    color: #fff;
    font-size: .29333rem;
    display: -webkit-box;
    display: -webkit-flex;
    display: flex;
    -webkit-box-align: center;
    -webkit-align-items: center;
    align-items: center;
    font-weight: 700;
    -webkit-justify-content: space-around;
    justify-content: space-around;
    border: none;
" value="<?php echo  $_SESSION['usercode']?>" id="myInput" disabled="disabled"><div class="col-12 mt-2" id="mycode" style="display:none;"><?php echo  $_SESSION['usercode']?></div><button style="width: 1.5rem;
    height: 0.4rem;
    color: #fff;
    font-size: .30rem;
    font-weight: 700;
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
}" onclick="RefCodeCopy()">Copy</button></div><div id="snackbar" role="dialog" tabindex="0" class="van-popup van-popup--center van-toast van-toast--middle van-toast--success" style="z-index: 2009;display:none "><i class="van-badge__wrapper van-icon van-icon-success van-toast__icon"><!----><!----><!----></i><div class="van-toast__text">Copy successful</div><!----></div><div data-v-5b1caab5="" class="userInfo__container-content-logintime"><span data-v-5b1caab5="">Last login:&nbsp;</span><span data-v-5b1caab5=""><?php echo $row["created_at"];?></span></div><div data-v-5b1caab5="" class="userInfo__container-content-logintime" style="display: none;"><span data-v-5b1caab5="">&nbsp;</span></div></div></div><div data-v-5b1caab5="" class="userInfo__container-content-right" style="display: none;"><h5 data-v-5b1caab5="">Change avatar</h5></div></div><div data-v-5b1caab5="" class="userInfo__container-setting-center" style="display: none;"><div data-v-5b1caab5="" class="userInfo__container-setting-center-header"><div data-v-5b1caab5="" class="userInfo__container-content__avatar"><img data-v-5b1caab5="" data-img="https://91dreamclub.com/assets/png/avatar1-2f23f3bd.png" class="ar-lazyload" data-origin="https://91dreamclub.com/assets/png/1-a6662edb.png"></div><div data-v-5b1caab5="" class="userInfo__container-setting-center-header-edit"><span data-v-5b1caab5="">Change avatar</span><i data-v-5b1caab5="" class="van-badge__wrapper van-icon van-icon-arrow" style="color: rgb(136, 136, 136);"><!----><!----><!----></i></div></div><div data-v-5b1caab5="" class="userInfo__container-setting-center-content ar-1px-b"><h5 data-v-5b1caab5="">Nickname</h5><div data-v-5b1caab5=""><span data-v-5b1caab5="">MemberNNG3UFVK</span><i data-v-5b1caab5="" class="van-badge__wrapper van-icon van-icon-arrow" style="color: rgb(136, 136, 136);"><!----><!----><!----></i></div></div><div data-v-5b1caab5="" class="userInfo__container-setting-center-content"><h5 data-v-5b1caab5="">UID</h5><div data-v-5b1caab5=""><span data-v-5b1caab5="">12481</span><img data-v-5b1caab5="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEQAAABECAMAAAAPzWOAAAAAPFBMVEUAAAD/mJ3/mZ7/mJz/l5//l5f/mZ3/mJ3/mJz/mZ3/mZ3/mZ3/mZ7/mJz/mJz/n5//mZz/mZ3/mJ3/mZ2EdgcPAAAAE3RSTlMA39+fICBfn79/j+8/L28Qz6+v4XBg7QAAAMdJREFUWMPt0DsSwyAMRVFhE5mfwQn732ugSiMlkuNxpVsx85hTCKz72pOTFBD4YpcWGmfULi8whnddUaERHFMuj9/tx/j5opE0plV2//HT0dM2JhQh3hAJ0jCtMzemsHLF8g2puctynkViF5d3BvFdUWCQrWsqNHKokEgjiwpZDTHEEEMMMeR+BMfzOI0EnMU8PQJR5y9AIvyN5ArnEbfNEjY4j3yuaci1SKKRpwpBGikaw3mgCwqkAlOTKxH4MCyS0g7Wbb0BWRmxAQ/pIb8AAAAASUVORK5CYII="></div></div></div><div data-v-cb2d8429="" data-v-5b1caab5="" class="info-dialog"><!----><!----></div><div data-v-5b1caab5="" class="info-dialog"><!----><!----></div></div><div data-v-5768d7f3="" class="userinfo-content" style="--36a344b0: 'Roboto', 'Inter', sans-serif;"><div data-v-58b21e90="" data-v-5768d7f3="" class="totalSavings__container"><div data-v-58b21e90="" class="totalSavings__container-header"><div data-v-58b21e90="" class="totalSavings__container-header-box ar-1px-b"><div data-v-58b21e90="" class="totalSavings__container-header__title"><span data-v-58b21e90="">Total balance</span></div><p data-v-58b21e90="" class="totalSavings__container-header__subtitle"><span data-v-58b21e90="">₹<?php echo $row['balance']?></span><img data-v-58b21e90="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACoAAAAqCAMAAADyHTlpAAAAOVBMVEUAAACjo6OgoKCjo6OhoaGjo6Ofn5+np6ejo6Ojo6OlpaWioqKkpKSjo6Ojo6Ojo6Ojo6OkpKSjo6PuE3LfAAAAEnRSTlMAf0C/H98QIM/vMGCfj29Qr1+b1SuLAAAA4UlEQVQ4y+3Sy3aEIBBF0eJR8hCx+/7/x8amdCVCZYUMetZnpm4BBfr05hbblX+lEX2pBJ1uUDKTK1ojUGgyA2z/sHmcbVetG4YNDHBQaEXqxjykbj3gbzceSIdUbUcN8ARyQlz+oBUwHqC7dTF8000ehISNXpQsflh5T6gBrHw8L0JpBR6nlDmE7ucOZ7CnRsVe9AVio4GvAexCjcqFPaG8Vw6a27RXQrvEAg7sh189VNHa7/sFWP24AEY5F0qri3VcVwo0GYNnbU7g56xlgIvp0mfyBWNMer4W11Xp03v7Att9D7xKb3uAAAAAAElFTkSuQmCC"></p></div></div><div data-v-58b21e90="" class="totalSavings__container-content"><div data-v-58b21e90="" onclick="window.location.href='./wallet?user=<?php echo  $_SESSION['username']?>'" class="totalSavings__container-content-item"><div data-v-58b21e90=""><img data-v-58b21e90="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAMAAABg3Am1AAAAYFBMVEUAAAD6Wlr5WVn6WVn7Wlr5WFj/UFD6Wlr9WVn6Wlr6WVn7Wlr6Wlr6Wlr5WVn5WVn6Wlr/X1/6WVn6WVn6WVn5WFj4WVn6WVn5WVn/XV35WVn6Wlr6WVn5WVn/Tk75WVlLe7bNAAAAH3RSTlMAZrKfeb8QMh5ZgF8m7+BwTAzZz4897IxTLM+WklANO3xKZAAAAN5JREFUSMfd09kOgyAQQFEQxY26r93m//+y1UQKtJWZ+OZ9NHOSEQI7cb0o2k4yZDK7wFKLEjKPYKtErNJd4JPwrlKAVbQ7/dCrYECiV8GBWI/jQFIADQgggpYKYKmJArd7vDYnP8A15DulygUB9xTbIODeZhMMHNHTAAIDegNkGJAaYPsmAithi28gwEkcA5SVyvCdNMB+YwNrGRLcYEviwKBBggIlEEFIBbyggpH60zwkHSv94nTsAMg5otwAFQZUBlAYoJjRhHyhujr1zteMJKaauakq/3s+lWJn6gU8RSptRN4NfwAAAABJRU5ErkJggg==" alt=""><span data-v-58b21e90="">Wallet</span></div></div><div data-v-58b21e90="" onclick="window.location.href='/recharge#/'" class="totalSavings__container-content-item"><div data-v-58b21e90=""><img data-v-58b21e90="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHgAAAB4CAMAAAAOusbgAAAAjVBMVEUAAAD3eAD3dwD4dgD5dwD2dgD4dgD0bwD4eQD4dwD4dwD4dwD7dwD5dwD2dgD5dgD4dwDtcQD5dgD2eAD5dwD4dwD4dwD4dwD4dwD4eAD3eAD4dgD/dAD3dQDqbgD5dwD3dgD4dwD5eQD5dwD5dwD4dwD5dwD6dgD4dwD4dgD6eQD7dgD4eAD2dAD4dwAMGSgcAAAALnRSTlMAZsyZxU2mEkxrQN9yn3OMcg19OfPqv6+UWTImHxoI0YZULfiE2HlfuI9fQnM4FNyjywAAAtFJREFUaN7s1u9ymkAUBfDdPYBDKAERkdZ/WFF0THn/x2sTSy5JENiF64eMvxc4c+7smVnx8PDw8O1N7chJlEqcQP6airuZykTV4Oda3IVdxRLsJoKdVA32sf9b8HpWDbzyn20hGEnVJC7feP5KMLFVk235zn8SHNaJajIva7yCoXbQUpjE/or30PS0vhj5jS9Uo33ZwF/dvTBFMxeOyxu8grXwobztPGEsPC9beCuGwrQl3mRH52mR7cBrb/4ojS3VnYW5pR3ipFmYPAlDsxCArzS3RBLD2AyvFi1b4qi8DnFlaW+JqEj7gV1Q0d8SmQO23ksOUUn0C5M9AFej9CRDxTfZEnEA5BODXNMtUTAla+XCMtsSBVOyRu6wLVEw8o3oFoIYPi2C/0LRyUaNY7glmlPl0nlo1J0GFvZQ6fwYRCCmWyIW0PPYM9QtzLZEFiBL0SZDnTWwcIyacHDhQ9nXAehZ+QfG2xJdurvyBF+elnXynU+sHraHuLo02fS89Mlyghdp7JimKT649Lt0cHTlUMeg361BqOswL7XWZ3HDEpU0kmS81uuu787ZlSNy30vPRLMdrnJXjivC1U40c/GGzjx2ctH6qHPJIMer57bgQLIIuoJTV7Io0o7gSDIJ24MzySZqDXYlGzdtCc4ko+PfdukYx2EQCsLwmwI50ESsKyAgmWJX8v0PuE2aFOPYjqeJ+C7wa6TZCHsIeR6+Q+pOw7+Q+qFhDynPwh5inoT/ILaS8AKxhYQdXn1P+DbCI/w0wiM8wiO8OxxAqMMzxAIJd4jNJFwg1kl4gtiDhBvEJiMStIwJkLoZ0yE1GxMhVY1yEErGZQgF4xqEJiPIr8Wf1t+r2qYMkWDbWoJEivbGBIlib3UIZNshi7tcFne5mnChtdtuMeAyLtoR0eESqdhRMayfr612yiMsOG11vdl5rZYc3HJkfEouzCXaMAzDt/kHbN7wdhAVLO0AAAAASUVORK5CYII=" alt=""><span data-v-58b21e90="">Deposit</span></div></div><div data-v-58b21e90="" onclick="window.location.href='/withdrawal#/'" class="totalSavings__container-content-item"><div data-v-58b21e90=""><img data-v-58b21e90="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHgAAAB4CAMAAAAOusbgAAAAXVBMVEUAAABcpf9cpv9bpv9cpv9cpv9dpv9cpv9bpf9dpv9ZpP9cpv9cp/9cpf9bpP9Yp/9cp/9ZoP9cpv9cpv9cp/9Ypf9Ynf9Onf9cpv9cpf9bpf9dpv9fpP9ao/9cpv/+vZV2AAAAHnRSTlMAZoxfTb9Z3yY/H/DFeXAazxGWj4I5DQbZvJ9wRkB5MVsiAAABcklEQVRo3u3T3XKCMBCG4Q0/ASMoiIBa3fu/zHac2nQwESzZHHS+5zAHvGwWCAAAAOBJm3Z5wasUeZe19J5NzoHk6TvZhgMqlqZNzoFdzKJxtxxcsaFZKYtIV3RFyxsW8/K2TcFitob8Liwoj77g+csuWFQReeD5kXN2kd+yYXEtuWQsLiWXjsV1cVds5TF/pvkfiiNAGOEHhP9ZWEWAMMIPCCOMMMIII4zwD4QRRhhhhBH2ho+JZU93iUsdLnzY8i/bw3e2YbdqFyhc88TxflyxT7M+7C6c7eu47cKETzxxUl8S9kvChM9PS7yvmP3qv4X19JN2P7dhn0rN0eSSLfyqK3ZrPtScjFx69SSxjva0Tlxs1q8nl1KJM+QyKnEjeZYsLCO3vRJWkodWojRR/JHtwPG3fCO/IVVi9EBWzMtu6aVSWYILli/b7qxWq+D0nhYYbiqwbKBlSh00u6flzDVy1hpNn+mVm7325UgAAAAAU5/94mxKVD2pxAAAAABJRU5ErkJggg==" alt=""><span data-v-58b21e90="">Withdraw</span></div></div><div data-v-58b21e90="" class="totalSavings__container-content-item" style="display:none;"><div data-v-58b21e90=""><img data-v-58b21e90="" alt="" class="" data-origin="https://91dreamclub.com/assets/png/VipIcon-3c72b1cc.png" src="https://91dreamclub.com/assets/png/VipIcon-3c72b1cc.png"><span data-v-58b21e90="">VIP</span></div></div></div></div><div data-v-88c90fd8="" data-v-5768d7f3="" class="financialServices__container"><div data-v-88c90fd8="" class="financialServices__container-footer" style="display:none;"><div data-v-88c90fd8=""><img data-v-88c90fd8="" src="https://91dreamclub.com/assets/png/vault-a933a89f.png" alt=""><div data-v-88c90fd8=""><div data-v-88c90fd8=""><span data-v-88c90fd8="">Safe</span><div data-v-88c90fd8="" class="financialServices__container-footer-des"><h4 data-v-88c90fd8="">₹0.00</h4><i data-v-88c90fd8="" class="van-badge__wrapper van-icon van-icon-arrow"><!----><!----><!----></i></div></div><span data-v-88c90fd8="">Daily interest rate 0.1%  + VIP extra income safe, calculated every 1 minute</span></div></div><!----></div><div data-v-88c90fd8="" class="financialServices__container-box"><div data-v-88c90fd8="" style="display:none;"><img data-v-88c90fd8="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAMAAACdt4HsAAAAtFBMVEUAAABcp/9cp/9epv9dn/9cpv9cpv9cpf9cp/9bpv9cpv9dp/9cpP9bp/9eqP9apf9Sn/9dpv9Jmv9eqP9ElP9cp/9cpv////82if+t0v/B3f+Zx//W6P/m8f/N4f/0+f9Il/9Ckv9wsf9Rnv9Qmf9Lmf/r9P/a6f+00/86jf+Duf9ao/+jzf9Xo/8+j/+/2v+32P+Pwv9mrP9op//g7v+31/98tv91rv9mq//N4/+jzP+Nvf89OsrBAAAAFnRSTlMAf78gEN/vz29fr58/n28wz49vT09A/ixTGwAAAdVJREFUWMPtlttygjAQhkHAQ221xwSlCSogKJ6t1bbv/16Ngc7KTIBlai+c+t3JzH4uu3802pXzYnbuaoXcdIyicr1OymnnKowGQWHlGaC+zGAq61sETVspsAgeVQsvpAJNhaBZRXCnEOhVBDe/FdSKBdOPVxUOVjCiOfSQgl6eYIwUzPIEb0jBZkyVuOsSAbB2VBzKhljKfxKMVn0FK3wSXarm8+KTSB30EGc9FdMLysEfCuZeMAi8UsHBgcmt4XE8mNgJw/viJGbW2Ccpng0s2gY+SO9EMrAlX+H2KCCWgY7yFOoFjC6P70CEAXGY4AAEstqPmHjCWBjDn7wyiTs4xLuRnP5E1ruZ19IrrHGYtk9Dl7qcRwER1E28QDYQUxoJCU9mIGiiBLDBrRhoRlDDCWCElIb+qaCOE8AOOZWEkZ8IiIkVDBOB+PoEFhCJge8gZboUWxCaFXSAn8FPEvmQUbfiDLyMwF5SuoGbEioHGYHP0ny3cNc8GMKWMXZy2bG0DLdFglhGMaIp3IMGgBopm4LPORdbiPaTOeQQ1wJsUiZxoL70P2AMTri3F+JjA+oxi4DfBMEiJnVdU9KyChWejHRAGrqp5dF90gt5fL7tmtqVs/MN94DbsbuNvhYAAAAASUVORK5CYII="><div data-v-88c90fd8="" class="financialServices__container-box-para"><h3 data-v-88c90fd8="">Bet</h3><span data-v-88c90fd8="">My betting history</span></div></div><div data-v-88c90fd8="" style="display:none;"><img data-v-88c90fd8="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAMAAACdt4HsAAAArlBMVEUAAABK461L46xE36RL4q1L465K4q1O4a9K4a1K46xK4qxK4a1K46xL4qxK4q1L4axK4q1K361M4q0T0IE53J8u2JUg2I5L4qz///8GzHal8NW79N+O7MvS9+rg+e4X0oTp/PUo15Al0odi5rdE4KY33J0l04ch1YwLznph5rYQ0H6w8tqa79CC5bpW5LEx2Zcs2JT0/vqD68Z46cHk+vHg+e+P7cvH9uWa7tBt57tTDyxnAAAAF3RSTlMAf78Qn28/H3+vj99g79/PTzDv779vT8FjD08AAAGZSURBVFjD7ZZpb4JAEIaVS8Gj2msArYoCWrxQe/7/P1aWjQTbYXcItompzxcTk3kyzLwLW7tyXlRdU4SYekNU3rwFOVqhonEDJFpFBlZPM6hofRvIaKigC3SwFgwogY4IdIBqz1CHEphVBYpYcHh/wnijCmZ2AS5R4BYJJkTBqkjwShRsJnj9bk8QcPZDjI1siFL+k2C2HCAs6Unc2Tiri0+iPSQP8cPFOFxQDn5R4AdbbxtIBZuhm7HPVXuRw5nfi5N4ssbB8e9g4WTcNUsE6RNSPCfHGDSVHOXDaX24DpkATOph4gcgdo6M7FHIBGDRjvPyOZ3fIidIDEwA/RJrnDsZU2bY8jDQBayBcGRnvKR9qWRB4CSsf3zl2mRBzHvPTTbtwEIEshFkOWCYVQXK3wliB92CVXULvRI5QLeg0q95XpbBkL8QkLueAQL8KDOkAhblzvc7twLCKXADF0Q+dls1QITHDesp+/EAAHknWXIDJ8LqGU2QzIEz9qFl1FDaXRARjJN1LuKOwstR+r26kIdHo1G7cn6+AEIy4spd9Gx2AAAAAElFTkSuQmCC"><div data-v-88c90fd8="" class="financialServices__container-box-para"><h3 data-v-88c90fd8="">Transaction</h3><span data-v-88c90fd8="">My transaction history</span></div></div><div data-v-88c90fd8="" onclick="window.location.href='/rechargerecord#/'"><img data-v-88c90fd8="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAKAAAACgCAMAAAC8EZcfAAAAbFBMVEX6WloAAAD5WFj7WFj6WVn/W1v7Wlr6Wlr7W1v6Wlr6XFz6Wlr5WFj8W1v6WVn6WVn5WVn/VVX7W1v+XV36WVn4WFj6W1v5WVn5WVn7Wlr6W1v8XFz7WVn9XV3/SUn6WVn6Wlr/XFz4WVn5WVlMptElAAAAI3RSTlNmAJ9AxQxNWXkzJRn1X9eOsgZGE+u8cOzigl9ZOSwHqZ8ycDPAW1MAAAL6SURBVHja7dzbbuMgFIXh5WBjAz47SZNOjvX7v+NI7QVSpwkQbGBm9n8bX3zCiVEks5ElHgEJ6BgBk4uABHSMgMnlBiwmeRbsM2ycAvtMCKmGTLcgcFAn/g7dZnZqA907P6mFgYPUOC+gbpTLAYe71nkDdSUrfIGatyhQxwp/4FnzlgeilJ7AYQTWBAJs8AEWJdYGoiwMQINvXaBZCINvZaBZCINvbaAWugM5QgHBXwEKhAPi7A4sEBLYFM5AFhQI7gpUCAuEcgSOoYHcDVggNBCTE5CFB96dgGV4YOMCVAgPhHIAihjAuwOQxwByByBiAJvBGjhFAWKyBso4QGkNFHGAJ2vgGAfIrIE8DpCnDiytgWXqQMQBgoAEJCABCbg2sO73+1udLnB7BIDqLVXgtgK+hGkCv3xfwhSBh0p/WB3SA7Z7QPdxSA2Y41t5WsAd/qhPCdjjh/p0gD1+rE8FeMWDrkkA6xsedksAWB/xpGMdDdjp7fdxelPpggNx0NubWbhFeGDVznNb2V4XAQjs97YXAhGALhHw5whIQAIaIiABCWiIgAQkoKG/Gdjt8mfturjAqp1NHaqYwMNsro0I7GabunjAnRVwFw+YWwFzWkHP72AVD4jewtcjIhDXNwOvvsbe6rrNs7o9QHsxQEACEtAQAQlIQEMEJCABn9a19fxqdV55AUvv/x1m4nHlN9E3s2f1x7rv8rezb1cPIIOx2bsc3xutgScYq1cACmugDHGLbx5HhiYY63x928rj0NXQRHnMLHvwD7d2XvZBzR2AAhESDkCFCCkzUNcgeGX2AJjKPWZOwAnBK2yAOo7AjdlDYBo/E/UQmMYSMvdRGg1CVtgCdWcE7J49ASZwk/lrA3F+IUDmgTjxhYaRQtGFpqFMsYTa5zUYjGHlxovnaDW56iI2Z//hdAXDWjXikvkANVGvYkieBpqT49I6Li8Lz8BUJ94shTsprTMCXbooKQTzSJzlVGSf/Z9jTs0RMLkISEDHCJhcBPzngb8BncLoIXGJNNsAAAAASUVORK5CYII="><div data-v-88c90fd8="" class="financialServices__container-box-para"><h3 data-v-88c90fd8="">Deposit</h3><span data-v-88c90fd8="">My deposit history</span></div></div><div data-v-88c90fd8="" onclick="window.location.href='/withdrawalrecord#/'"><img data-v-88c90fd8="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFAAAABQCAMAAAC5zwKfAAAAbFBMVEUAAAD/iRv/ihz/hhr/iBr/iRv/iB3/iRv/ihv/iRz/hR3/iRz/iRr/hRT/iR3/ihv/iRr/hxn/iRv/iRv/gCr/iR3/iRz/hxv/iRz/iRz/iBz/ihz/ixv/hRH/iRz/ih3/iBv/iRv/kiT/iR3fckNCAAAAI3RSTlMAZp8mH1/gb1iPEH9NDPU+MBmxeQbvz0Dsxb6oORLZv5aCBztI/qIAAAHtSURBVFjD7djJkoIwEIDhJISwyiqiuIxOv/87ToFV0wQZk9A5zMH/ZFn6VbNEAfbp02+yDMvKn5Z0MNXkPrg0AUxJ+ngKtELPHop0D0W6RxfRM4t0D0W6hyLd08s9e9BJuqc3ePKw0rMHiWcPlAM4gE2ppbaX+VlYdC7rvYVW5dyhONgZuJC7Vr0Z8xrzDcV/DhnwjQXrnuTcq7gLt4Ph2lbHnFBu3IH0jY5pYLz0ak6sXoAlFbwYtpi6zXtObq8vOjp4pR8Tvdqw7IhnYvBPwOgufrvQwfYGs0Iy+CjAK9gW4Bc8gV8wAs9g4hsUvsGHBRjdT8cCQB1EawajwgRGzewjJzPZGMDHEbQa44jqLShg2WASW/UGjOC1EzclbsUfoOxgpfP2ny8FaxXtVjBcUgqmbi6gZNjXgpNMHmAs2vafInXvMF6MV8578Ypgrnkind582g4gw5Lnl/tejB6bKmHsaO/lDBsdUONgGWT6nY89WC3BZnrZs6lKgSu4W4IDw8oOnhXWXv+67rKV01I5D4gHAMXIsJzNV4dpNxczwO6WXvzNtBJAce4dN95L4VJpkgFmNc4ejog5D3j5Zi+lhzWwteHy2vqZgDBiYV7hdCaxiwJD9c78HBP7koycFMj1zEtpnwkhkjBlnxz6AfNNngUB9TYwAAAAAElFTkSuQmCC"><div data-v-88c90fd8="" class="financialServices__container-box-para"><h3 data-v-88c90fd8="">Withdraw</h3><span data-v-88c90fd8="">My withdraw history</span></div></div></div></div><div data-v-1b2464ab="" data-v-5768d7f3="" class="settingPanel__container"><div data-v-1b2464ab="" class="settingPanel__container-items"><div data-v-1b2464ab="" onclick="window.location.href='/Messages#/'" class="settingPanel__container-items__item ar-1px-b"><div data-v-1b2464ab="" class="settingPanel__container-items__title"><img data-v-1b2464ab="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHgAAAB4CAMAAAAOusbgAAAAYFBMVEX6WloAAAD7Wlr6Wlr7Wlr7Wlr6WVn8W1v/WFj6Wlr/X1/5WVn6WVn4WVn6W1v6WVn6WVn6Wlr5WVn5WFj5WFj/UVH6WVn6WVn6W1v7WVn8XV36WVn7Wlr4WFj8W1v5WVk1zszIAAAAH3RSTlNmADN5P1nsXwwZEuKfTSWojHCyvPUGxdlfUizPgpZKdJ6sfgAAAipJREFUaN7t2u1SqzAUheHVkgBBAoEW+mE193+Xx3E87nFkGzDsik7eC+AZs37YgWD3QyWYK8EJTnCCE5xgtjvDpWmu+291bUz5PXgwyp4R1dkqsxQ2itA4XFULYGOxYracCQ8KK7cf5sClxurpMgxXZwhUVAGYXGkZ0udMp/0lfIFY9iu4gWBXHi41BCsGFt5DtD0La4hWcHAD4QwDKwinGFhDuGIariBeNQk3EK+ZhBXEU5OwhXjPk/AF4l0mYQ3x9CSMO7QEduNYY0ld/3iq4+Hev/SQYXbZg3/pFAs/+dfy2bLL/Wt1JHzwb7WYVevfeoyER/+/HuG6gyd4laOmocPzrnPUONGz8iw8L/3BcTCtHB669dQBETDzwPC8/lhjDRi3nBmamTe/IQJe9lR39O+dOsTCVM8Mza8RD4cf3Y3svPEwsg9Ds0NkiIHDQ9eg/0XMvFEwP/RxbF2WuXY8eqoHRGC0nonmjYXDQ1M0rxxMQ1M0rxxMQ1M0rzCMOv/M5g4CcJA+9h1EYcqN71vnBwdAHKY65+r66dZhUb/iB32CE5zgBCc4wfeBt/WC7cdeKT5DPLut18YNxGu29WlgV0A4vbXPPwbCNQwsfdZ6ex81hwKC6ZKFd1fIRQsTTFmIddnm5YRdxcwseh2DZAF3u1duJC4ZqWHmtapy3WtVZsFFskoVK42rzNI7e0bZIhK1ygy/57Lg/P7UvUwqwQlOcIITnGC2vwP/A8YJWveoD7GJAAAAAElFTkSuQmCC"><span data-v-1b2464ab="">Notification</span></div><div data-v-1b2464ab="" class="settingPanel__container-items-right"><h5 data-v-1b2464ab="">1</h5><span data-v-1b2464ab="" style="display: none;">English</span><i data-v-1b2464ab="" class="van-badge__wrapper van-icon van-icon-arrow" style="color: rgb(51, 51, 51);"><!----><!----><!----></i></div></div><div data-v-1b2464ab="" class="settingPanel__container-items__item ar-1px-b" style="display:none;"><div data-v-1b2464ab="" class="settingPanel__container-items__title"><img data-v-1b2464ab="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHgAAAB4CAMAAAAOusbgAAAAZlBMVEUAAAD6Wlr7WVn6WVn6WVn6WFj/VFT5WVn5WVn5WFj6WFj5WVn5WVn5WFj5WFj/VVX7Wlr5WFj5WFj6W1v/Zmb8Wlr5V1f6WFj5WVn9XV34XFz6Wlr7WVn6Wlr6Wlr4WVn5WVn5WVnZ41UvAAAAIXRSTlMAZh9fQI8Q79+/n89vsX8GMvXfWQxNz8VTLCZ5ORmo4+JMLD6tAAACvUlEQVRo3u3aYXOjIBAG4F1AUDFqYnJN0rR3+///5DntdHacsQJBuLHn87Ff3lmFhayF3W63+08IWVSlIaKyKqSATHRb0sSpyJGtKppRp44WNbGM0Y2hb50kJFPQogLS0L/IwWpgCXIzJ3PuAgsswfvN+Z4leWpgVeJEnoyANdXkrV61YAqg8hbMqswFM513K7EW1nKiIGXmJ81E3ubBZIJXnLVvVsSybqiSWNbVRaFM5mC29WBDoba+uMK309YbSHjL3PohAWXetcXavK+Y6YgnnXFD1bAeFVTwT7jQgzDkqRSwqoY8yZ/yMxXA5v1hzrTNPYrg5NDcrY+bRnLhuDANzNv0SPHb6EpBeqIoaaJsNaTHg/Ix0nwOyne7n081h9IQGVu1CrLR7ZjJTrWAHHSds5uyxuT8QMOKpCfm+d4rNQwSR3K4XlQvtPNzyUFDjE48rhLnXB6i+5Xout3dLrikokXFuqmspqnS0NTlmdheosPrNMcqADE9t41eMZa9TMv9CNHT5DZBLL7O/pBpIkoWEn28zH6JUfRsyecL+jE+wQZ8vUn0U5AzmP/s1qOvg19wAz46hd4s37AvYqThkxipihunV+4V/f1Z7IxFyATsPGCA4+LkRRv/1dUNGMIxt7X+g+wrBnFMBCrv4Aey+EctvDdyjyysf1ix9P8U1rWwMJTl+1UrR/qr345a472dBgz1vkoD6ZGt2zL7tR40OzqD3f1D4RMO8cfiGZ/RTEuWs59RhKvg+JKruW/8tbvg+JIPAkDXIQPlO7KohV1ZQxMyoknHXOjb+KblvvAx76Z1xzTJ5QO8N3H8bmYVKuc5HKU2NOP4jjjAog4jvb7MlNvgqIMlGjE+2kyqPTT4QcOSN1xDcbC/j2Omse8FfnG1j2TusOSGydz+VXDveMfJvMGifsAk5A12u91u6/4C4bSA/cwCa0wAAAAASUVORK5CYII="><span data-v-1b2464ab="">Invitation bonus</span></div><div data-v-1b2464ab="" class="settingPanel__container-items-right"><h5 data-v-1b2464ab="" style="display: none;">1</h5><span data-v-1b2464ab="" style="display: none;">English</span><i data-v-1b2464ab="" class="van-badge__wrapper van-icon van-icon-arrow" style="color: rgb(51, 51, 51);"><!----><!----><!----></i></div></div><div data-v-1b2464ab="" class="settingPanel__container-items__item ar-1px-b" onclick="window.location.href='/redenvelopes#'"><div data-v-1b2464ab="" class="settingPanel__container-items__title"><img data-v-1b2464ab="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHgAAAB4CAMAAAAOusbgAAAAYFBMVEUAAAD6Wlr4WFj/YWH6WVn7Wlr5WFj5Wlr5WFj/WFj8Wlr5WVn6WVn5WFj4V1f/V1f5WVn5WFj7WVn7WVn+XFz7Xl75WVn/VVX5WFj4WFj7W1v+W1v5WVn7Wlr5Wlr5WVmJKV1iAAAAH3RSTlMAZsIMWT+2fX8RX29NH40m359ROSwmGQatmUYyz17vxXPQ3wAAAcRJREFUaN7t2m1vgjAQwPEe0AkUUB4ERF2//7ecJG6XLdJKrheMu//LhuTnRRFenJIkSXrXYn2FZq88dQVcdRzS3V9hTitnGubyLKAL97THRTmUi7LLRTmYi7LXRZnu+mV0Uaa7fhldlOmuS0Y3sNwDuGR0A8txAi4Z3UfyQICP8Di97GIdAdbgkL3XcMCg/Ze0BLgEh+xxoVSECofscYu1VpaOBxu0Q5SXfrayLKUetzxYpi6ZE0Y3eJHLzS1j2gFfLCHCyKVlLVuEG8tasQgby5pZhFPLWiqwwPf+A7zZfdxY1vTr/VeryDIWbfU8zpXaZOT6Nd+5VFlbjj5TdBdpE4V+rx4Nsq5iWGgXufqAhRKllMACCyywwAILLLDAAgss8NxpdzuoI2zkg80Hjndj5yo8qvhgqH7GNXDP1N8fxTDCcPo1Lg6NLhMM5jTW1d+zqq4rAzywP4EFFlhggQNUPAsPW8EqMDw9DScEhbSJMhEU0tJPGxbuCUtNpAa1zf3UEFZ8mH9b2DkkHK+Ah5wAkfbJOu6B+b/ls1rXkPC4/uKJyfV3JA9d9OtEpAuCmre9ItR3umiSdWLSTO0xU5IkSe/WF7W+N+28iEaIAAAAAElFTkSuQmCC"><span data-v-1b2464ab="">Gifts</span></div><div data-v-1b2464ab="" class="settingPanel__container-items-right"><h5 data-v-1b2464ab="" style="background: #66BB6A;">₹5.00</h5><span data-v-1b2464ab="" style="display: none;">English</span><i data-v-1b2464ab="" class="van-badge__wrapper van-icon van-icon-arrow" style="color: rgb(51, 51, 51);"><!----><!----><!----></i></div></div><div data-v-1b2464ab="" class="settingPanel__container-items__item ar-1px-b" style="display: none;"><div data-v-1b2464ab="" class="settingPanel__container-items__title"><img data-v-1b2464ab="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHgAAAB4CAMAAAAOusbgAAAAZlBMVEX6WloAAAD7Wlr6WVn7W1v/WFj7Wlr8W1v6WVn6W1v5WVn/X1/6WFj7Wlr+XFz1WFj5WVn6WVn/VVX6WVn7WVn6WVn6WVn7W1v/SUn5WFj4WFj6WVn4WFj7WVn/XFz6Wlr7Wlr5WVmvcrXyAAAAIXRSTlNmADPZWQw/X+wmcBKheSwaslMGTTnFjEYH9ePPvB8ZvIImAPz+AAACDElEQVRo3u3a627yMAyAYZM6CSGspQdWdoDv6/3f5KSpmqWFBRPcsWl+/yGBHpqmKBKG1Z1S+KsUVljhW2EbjBtbRLgij23vzDGWwyfn4YbQHYtg4+HmMFwNxxZEQnsdHD0I5SMPJldO5sMWQTDs2PAAohkubEE23zFhA8IZJozSMPLgCOJZFhzk4cCCnTzsWHArD7cs2MvDngN3sEAdA46wQJYBN7BAJwYcYIGOZfC2mqbq8RY4MOAaPref3tvB3MNrlWu7KYNNcr3T3OPsPk351hsZeD3NvcB71XSpXQLXBfCGroRe51snsPke+FkEpqXec5d6LwLT5vo/b671pZV+kIHh9fPj9K/K9LLbgBAM2+fpqfAHpBymFFZYYYV/E0xnroVh+TOXudeZy9zrzGX0zKVnLj1z/dXfaoUVVlhhhRVWWGGFFVZYYYUVhgWqGXANCxR+8h/XEdK8q4MZ4VJ+NMGMCGmnoqkIbOapJ5NnzWFeM+ROReRnjNyBNWGGlt42Fg2gDJlxGYs5l3IlIzdN7jMNY9IjlWMOpnqgBubTVufWrV/x4Ej7pc5+Lcpl5+AsD6ZHuT/3iQ5TFw+rNDt/RR/4c5nWecChWZ2tuXCDqca14F0UG3OuOcOAi8xX97kbTMnDHSY3OEkSpiwy5oklYZIdzA2Z6xWGacfSzj/fbxze/0hhhRVWOOkNzLdtCg3xP8oAAAAASUVORK5CYII="><span data-v-1b2464ab="">Product code</span></div><div data-v-1b2464ab="" class="settingPanel__container-items-right"><h5 data-v-1b2464ab="" style="display: none;">1</h5><span data-v-1b2464ab="" style="display: none;">English</span><i data-v-1b2464ab="" class="van-badge__wrapper van-icon van-icon-arrow" style="color: rgb(51, 51, 51);"><!----><!----><!----></i></div></div><div data-v-1b2464ab="" class="settingPanel__container-items__item ar-1px-b" style="display:none;"><div data-v-1b2464ab="" class="settingPanel__container-items__title"><img data-v-1b2464ab="" src="https://91dreamclub.com/assets/png/laundryIcon-9cc9dbdc.png"><span data-v-1b2464ab="">Betting rebate</span></div><div data-v-1b2464ab="" class="settingPanel__container-items-right"><h5 data-v-1b2464ab="" style="display: none;">1</h5><span data-v-1b2464ab="" style="display: none;">English</span><i data-v-1b2464ab="" class="van-badge__wrapper van-icon van-icon-arrow" style="color: rgb(51, 51, 51);"><!----><!----><!----></i></div></div><div data-v-1b2464ab="" class="settingPanel__container-items__item ar-1px-b" style="display:none;"><div data-v-1b2464ab="" class="settingPanel__container-items__title"><img data-v-1b2464ab="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHgAAAB4CAMAAAAOusbgAAAAP1BMVEUAAAD6Wlr4WVn8W1v6WVn5WFj6WVn6WFj9XFz/Wlr5WVn4WFj4WVn6WVn7W1v5WFj5WVn6WFj/UFD4Wlr5WVlzcdAPAAAAFHRSTlMAZk1MX3+/Pykf77+/U0bfz5cQbxtI08QAAADoSURBVGje7dnLDoJADEDRQSsgKC/7/9/qRkiYStjYhuA964abIZN0MQkAsKjaRmetpDA3XbmlIKKZKsV45OE2xdBck2Kokb4iTJgw4dOHpdXFIFFhu2ujwqIZCQrbXRsUVoMwYcKE/zY83T+m0PCr10UvceFRV8aosN21QeHB7NqgsBqECRMmTJgwYcKECRMmTJgwYcKECRMmfLxwozmfmf2X0tJlxqo0Iz4z+6/hXjOWlDprymp3RueZne8AAH6k7q5+6u3us3D13Dxv4WzrzJfCWbcR7gpn16P96rDLZdUXP12dgHN7Az9pIk/r/Zr3AAAAAElFTkSuQmCC"><span data-v-1b2464ab="">Game statistics</span></div><div data-v-1b2464ab="" class="settingPanel__container-items-right"><h5 data-v-1b2464ab="" style="display: none;">1</h5><span data-v-1b2464ab="" style="display: none;">English</span><i data-v-1b2464ab="" class="van-badge__wrapper van-icon van-icon-arrow" style="color: rgb(51, 51, 51);"><!----><!----><!----></i></div></div><div data-v-1b2464ab="" class="settingPanel__container-items__item ar-1px-b" onclick="window.location.href='/mission#/'"><div data-v-1b2464ab="" class="settingPanel__container-items__title"><img data-v-1b2464ab="" src="https://91dreamclub.com/assets/png/superIcon-d7856c8e.png"><span data-v-1b2464ab="">Super Jackpot</span></div><div data-v-1b2464ab="" class="settingPanel__container-items-right"><h5 data-v-1b2464ab="" style="display: none;">1</h5><span data-v-1b2464ab="" style="display: none;"></span><i data-v-1b2464ab="" class="van-badge__wrapper van-icon van-icon-arrow" style="color: rgb(51, 51, 51);"><!----><!----><!----></i></div></div><script>
setInterval(myTimer, 1000);

function myTimer() {
  const d = new Date();
  document.getElementById("demo").innerHTML = d.toLocaleTimeString();
}
</script>
<div data-v-1b2464ab="" class="settingPanel__container-items__item ar-1px-b"><div data-v-1b2464ab="" class="settingPanel__container-items__title"><img data-v-1b2464ab="" src="https://91dreamclub.com/assets/png/languageIcon-4c117d4d.png"><span data-v-1b2464ab="">Language</span></div><div data-v-1b2464ab="" class="settingPanel__container-items-right"><h5 data-v-1b2464ab="" style="display: ;" id="demo"></h5><span data-v-1b2464ab="" style="color: #868686;">English (India)</span><i data-v-1b2464ab="" class="" style="color: rgb(51, 51, 51);"><!----><!----><!----></i></div></div></div></div><div data-v-a43fb6cf="" data-v-5768d7f3="" class="serviceCenter-wrap"><div data-v-a43fb6cf="" class="serviceCenter__container"><h1 data-v-a43fb6cf="">Service center</h1><div data-v-a43fb6cf="" class="serviceCenter__container-items"><div data-v-a43fb6cf="" onclick="window.location.href='/myProfile#/'" class="serviceCenter__container-items__item"><img data-v-a43fb6cf="" class="" data-origin="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHgAAAB4CAMAAAAOusbgAAAAY1BMVEUAAAD6Wlr/W1v/UVH6Wlr7W1v6Wlr6WVn8W1v/XV38Xl77W1v6Wlr/Xl78WVn6WVn6Wlr6WVn5V1f7W1v5WFj5WFj7Wlr5WVn/XFz5WVn7W1v5WFj5WVn5WVn8Wlr4WFj5WVmWy2Q/AAAAIHRSTlMAZgwGTFkzU18sJj8ZEzjsqIwmRsGagnAy4nn1snlS48+T4koAAAKxSURBVGje7drbjpswEAbgGR8AcwwhISHpbv3+T9nVqpKbBGx2xogS8d0a6ZcPcQZj2O12u907kaKShHauXOGX9Eho5yhT/EsLGCFce8xoodDJqpEHNDqdgDjkFR9o+fKExgdFlGiT4ZManiT4RJsYk/vqabAFOpGmWhY4Jn0cbI1OnPGWKY6rvQPt1j9VgVOu7qEapyggynFaKtwvbZIBGo0+3bEsc4U+GZBUyFYChUES/lgnyFZsK9ggWwIU5VqLCzJkyiSsM8k10Ehil/mbdcLtMJVEFgFkChkU0NW8kabLkcGsFXwEOsPbL+m6lRaXQBZOsceiltm4Lre27S/oc+W+qb1qT439NpzOvj6LH6caX+zhbv/ReKOPFcwiTae1Rp9+sE+aD/TJdNodRfDVMORgRxzQIUy4VBj0y476hUGphCkp/rS/zoGRnGDQh53UY1BN36caO2nAMEn9KzpbJ94CU6QOO3cM+iSW0Wfr1WIQjMGgk/U6LRY8WK9mqeCLDbgsFNzbgNtCwa0NaN8t+GYD+ndbXNhYr99b20Ay7uo6E4MVBt2ZG9cntQ44MDtck488BlaHUZBLn96zXzIKTbVwsff/lbcAiV6qoM8S8BJ5l+oMfW4vG9jQ+zO17oyEWSrvof/5Ifru664ylYz5mno+DfZbc2p9seUSL+Z9294uy5x0dcjSAZXI8Nm7n2XyDti2eKS42iFqggw1bG9xCWSRjClmuQKVRpZM0pfWOl3WyJTJbX3UNMiWbOvD9Za/mJttXceAFH2UKcu8QB+9xJWbckYteoz/51TMWYNp/GtVxZxvvVpEv0im5wyMksCRa3wlwlWwLsGJFV0Et5osgQhEEZo7qfFBLcHhRs+/EKoqcOKNt64AfMm6hLjyFL+oRAbaIT5ZVTLYvtvtdrs38gceAYlmarNG9wAAAABJRU5ErkJggg==" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHgAAAB4CAMAAAAOusbgAAAAY1BMVEUAAAD6Wlr/W1v/UVH6Wlr7W1v6Wlr6WVn8W1v/XV38Xl77W1v6Wlr/Xl78WVn6WVn6Wlr6WVn5V1f7W1v5WFj5WFj7Wlr5WVn/XFz5WVn7W1v5WFj5WVn5WVn8Wlr4WFj5WVmWy2Q/AAAAIHRSTlMAZgwGTFkzU18sJj8ZEzjsqIwmRsGagnAy4nn1snlS48+T4koAAAKxSURBVGje7drbjpswEAbgGR8AcwwhISHpbv3+T9nVqpKbBGx2xogS8d0a6ZcPcQZj2O12u907kaKShHauXOGX9Eho5yhT/EsLGCFce8xoodDJqpEHNDqdgDjkFR9o+fKExgdFlGiT4ZManiT4RJsYk/vqabAFOpGmWhY4Jn0cbI1OnPGWKY6rvQPt1j9VgVOu7qEapyggynFaKtwvbZIBGo0+3bEsc4U+GZBUyFYChUES/lgnyFZsK9ggWwIU5VqLCzJkyiSsM8k10Ehil/mbdcLtMJVEFgFkChkU0NW8kabLkcGsFXwEOsPbL+m6lRaXQBZOsceiltm4Lre27S/oc+W+qb1qT439NpzOvj6LH6caX+zhbv/ReKOPFcwiTae1Rp9+sE+aD/TJdNodRfDVMORgRxzQIUy4VBj0y476hUGphCkp/rS/zoGRnGDQh53UY1BN36caO2nAMEn9KzpbJ94CU6QOO3cM+iSW0Wfr1WIQjMGgk/U6LRY8WK9mqeCLDbgsFNzbgNtCwa0NaN8t+GYD+ndbXNhYr99b20Ay7uo6E4MVBt2ZG9cntQ44MDtck488BlaHUZBLn96zXzIKTbVwsff/lbcAiV6qoM8S8BJ5l+oMfW4vG9jQ+zO17oyEWSrvof/5Ifru664ylYz5mno+DfZbc2p9seUSL+Z9294uy5x0dcjSAZXI8Nm7n2XyDti2eKS42iFqggw1bG9xCWSRjClmuQKVRpZM0pfWOl3WyJTJbX3UNMiWbOvD9Za/mJttXceAFH2UKcu8QB+9xJWbckYteoz/51TMWYNp/GtVxZxvvVpEv0im5wyMksCRa3wlwlWwLsGJFV0Et5osgQhEEZo7qfFBLcHhRs+/EKoqcOKNt64AfMm6hLjyFL+oRAbaIT5ZVTLYvtvtdrs38gceAYlmarNG9wAAAABJRU5ErkJggg=="><span data-v-a43fb6cf="">Settings</span></div><div data-v-a43fb6cf="" class="serviceCenter__container-items__item" onclick="window.location.href='mailto:sahoosoumyaranjan798@gmail.com'"><img data-v-a43fb6cf="" class="" data-origin="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADwAAAA8CAMAAAANIilAAAAAYFBMVEUAAAD6Wlr5WFj7Wlr5WVn6WVn7W1v4WFj/VFT5WVn5WVn5WVn6WVn6WVn7W1v7WVn7W1v7WVn6Wlr/XFz5WFj7W1v/XV39XFz6WVn/Zmb5WFj5WVn5WVn6Wlr5WVn5WVnIvMgnAAAAH3RSTlMAZp9M2u0/vg2zcBnFjHlfWTkzMpZGLCYfCvVTz6h5gltZtQAAAP1JREFUSMft1d2OgjAQhuFOa1so8iciuO4u93+XcqBIMmP9Ih6o4T1/MikzCWrtFTlvh1nW97gtB1aJ2t5ybBN8MC8AMGvayks4PZldEqeGxrYS3tKYifAdURSPNQ8seQl7YlqypCW8p0sHyR7pWpBWRVPSux1NFZbZgqaMPPim9Wbebxpo1pHhjuD4q1scO4YNjtsl2Kz4K3CuWf8o9gPvJ4DYDkIaxKk0uQAx7TUrfMCqPhTPLywXMH5hfxzjF7bhGL+wlFn8wvI3X5Vb8rs54LhjOMFxolgGfzIvwwcL1ZhtlJiDP/WTs2t1t66K0ypTsXp3IrmyqjO1tqgzPZ0xAYt3JnkAAAAASUVORK5CYII=" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADwAAAA8CAMAAAANIilAAAAAYFBMVEUAAAD6Wlr5WFj7Wlr5WVn6WVn7W1v4WFj/VFT5WVn5WVn5WVn6WVn6WVn7W1v7WVn7W1v7WVn6Wlr/XFz5WFj7W1v/XV39XFz6WVn/Zmb5WFj5WVn5WVn6Wlr5WVn5WVnIvMgnAAAAH3RSTlMAZp9M2u0/vg2zcBnFjHlfWTkzMpZGLCYfCvVTz6h5gltZtQAAAP1JREFUSMft1d2OgjAQhuFOa1so8iciuO4u93+XcqBIMmP9Ih6o4T1/MikzCWrtFTlvh1nW97gtB1aJ2t5ybBN8MC8AMGvayks4PZldEqeGxrYS3tKYifAdURSPNQ8seQl7YlqypCW8p0sHyR7pWpBWRVPSux1NFZbZgqaMPPim9Wbebxpo1pHhjuD4q1scO4YNjtsl2Kz4K3CuWf8o9gPvJ4DYDkIaxKk0uQAx7TUrfMCqPhTPLywXMH5hfxzjF7bhGL+wlFn8wvI3X5Vb8rs54LhjOMFxolgGfzIvwwcL1ZhtlJiDP/WTs2t1t66K0ypTsXp3IrmyqjO1tqgzPZ0xAYt3JnkAAAAASUVORK5CYII="><span data-v-a43fb6cf="">Feedback</span></div><div data-v-a43fb6cf="" style="display:none;"><img data-v-a43fb6cf="" class="" data-origin="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHgAAAB4CAMAAAAOusbgAAAAXVBMVEUAAAD4WFj5WVn6WVn4WFj5WVn6WVn6WVn3WFj5WVn6WVn5WVn5WVn4WFj4V1f5WVn7WVn/Xl73WFj5Wlr/Vlb6WVn5WVn5WVn5WFjzWlr5WFj6WVn5WVn5WVn5WVkLa5K7AAAAHnRSTlMAmd/wIHGPv4ZW0KBOv49BORNgLxD45a58CqXFtV94gzL6AAABwElEQVRo3u3Y227CMAyAYedYeoAC7Ths4Pd/zE2aNGswEIoXe2j+r9t+ipS2ScCyLMuyrF9tSnnvPX4VQKA5NQEvg+qNDWmC8NkjKsADsZJwbBA14BRQA557RA04dqgCR4+yMLmyMLkq8OxRB86oAyesCK/Tyt3o9aUevDm423msBm8Wd9wl1oPvuS7Ug9eOMWAOnBgDpj4vX6V2ehjOjAFTdM9i2DwGO96UJpjoNRd+xRL4o5YJL0tht+XBvhh2LQt+KYfdyID3yIDzsRx+48BuKIc7FpyPxfCOBbtYDAce3GrBh2IYeXDWgt2/g7PW5ErP9zp5HjwpfTIXUAwvWfCg9FtcbJQWAmtgwDutpc9bMXwGFtxrLW/drghejewtzKkAXg1HhU3boY3HP79NhQNjyPWOIk7VYJLxKprYVY+b8Kqqx03UjaclLRh6LXjulGCIXhwmWRgmWRomWQmGOQvDVApKMMS9MExtvThMtDRMdCMMU3HbBGGYGlNuOk9XBiH4OoMNNthgg3/KYIOfB/aXbgcy9ZdwDzKNl/AAQjXfXQ9SxYBIhQhiTQHJnUAw2gY3EWQb+g7R9yNYlmVZAO+iU4WdA6Pt7AAAAABJRU5ErkJggg==" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHgAAAB4CAMAAAAOusbgAAAAXVBMVEUAAAD4WFj5WVn6WVn4WFj5WVn6WVn6WVn3WFj5WVn6WVn5WVn5WVn4WFj4V1f5WVn7WVn/Xl73WFj5Wlr/Vlb6WVn5WVn5WVn5WFjzWlr5WFj6WVn5WVn5WVn5WVkLa5K7AAAAHnRSTlMAmd/wIHGPv4ZW0KBOv49BORNgLxD45a58CqXFtV94gzL6AAABwElEQVRo3u3Y227CMAyAYedYeoAC7Ths4Pd/zE2aNGswEIoXe2j+r9t+ipS2ScCyLMuyrF9tSnnvPX4VQKA5NQEvg+qNDWmC8NkjKsADsZJwbBA14BRQA557RA04dqgCR4+yMLmyMLkq8OxRB86oAyesCK/Tyt3o9aUevDm423msBm8Wd9wl1oPvuS7Ug9eOMWAOnBgDpj4vX6V2ehjOjAFTdM9i2DwGO96UJpjoNRd+xRL4o5YJL0tht+XBvhh2LQt+KYfdyID3yIDzsRx+48BuKIc7FpyPxfCOBbtYDAce3GrBh2IYeXDWgt2/g7PW5ErP9zp5HjwpfTIXUAwvWfCg9FtcbJQWAmtgwDutpc9bMXwGFtxrLW/drghejewtzKkAXg1HhU3boY3HP79NhQNjyPWOIk7VYJLxKprYVY+b8Kqqx03UjaclLRh6LXjulGCIXhwmWRgmWRomWQmGOQvDVApKMMS9MExtvThMtDRMdCMMU3HbBGGYGlNuOk9XBiH4OoMNNthgg3/KYIOfB/aXbgcy9ZdwDzKNl/AAQjXfXQ9SxYBIhQhiTQHJnUAw2gY3EWQb+g7R9yNYlmVZAO+iU4WdA6Pt7AAAAABJRU5ErkJggg=="><span data-v-a43fb6cf="">Notification</span></div><div data-v-a43fb6cf="" onclick="window.location.href='/keFuMenu#/'" class="serviceCenter__container-items__item"><img data-v-a43fb6cf="" class="" data-origin="https://91dreamclub.com/assets/png/serviceCenter-ed250156.png" src="https://91dreamclub.com/assets/png/serviceCenter-ed250156.png"><span data-v-a43fb6cf="">24/7 Customer service</span></div><div data-v-a43fb6cf="" class="serviceCenter__container-items__item" style="display:none;"><img data-v-a43fb6cf="" class="" data-origin="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADwAAAA8CAMAAAANIilAAAAAb1BMVEUAAAD6Wlr7W1v6WVn6Wlr7Wlr/Vlb5WVn6WVn6WFj3WFj6Wlr8XFz4WVn6WVn5WVn/Xl74WVn6WVn5WFj4V1f1WFj/TEz5WVn5WVn7WVn/XFz6WVn6WVn5WVn7Wlr4V1f4WFj7Wlr7W1v/Wlr5WVm+biE6AAAAJHRSTlMAZnnFP1kO306PIO8mcF+8E+y/fy4aBp9TORn1z8+yr5aCRh+2VEayAAABCElEQVRIx+3Wx3KDMBSF4SuhTjfFJT3R+z9j4qBINgGbq43tGf4lh29g0AZYu0UiM4d+wW2tYmZ8TZFj/LOt5mGbb6U9tj3jPSc+zg5TkunU+qSA0N5B76tJGWogtCPjVBZWtbHjJITIRNzxQtqJ5nDgAoC5p2KwSz1bG42JXfEl/JEMvcfg2i1POR5TP2k8Jq9uSaI+WE5/e7CjIvSvCFz6rUTj3IYoGtd+q/GvTctkqKQPdVQrXvEsLrA4hZDC4jcIdVhs4KQMhws4S7BdsQynL9rA/yqzVxdxutHqC+brDePTWGom4HpV8F42DBbXsROcaob+keUDlo2AiH64lQXE1jFYu5e+AXBomYy+4tfiAAAAAElFTkSuQmCC" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADwAAAA8CAMAAAANIilAAAAAb1BMVEUAAAD6Wlr7W1v6WVn6Wlr7Wlr/Vlb5WVn6WVn6WFj3WFj6Wlr8XFz4WVn6WVn5WVn/Xl74WVn6WVn5WFj4V1f1WFj/TEz5WVn5WVn7WVn/XFz6WVn6WVn5WVn7Wlr4V1f4WFj7Wlr7W1v/Wlr5WVm+biE6AAAAJHRSTlMAZnnFP1kO306PIO8mcF+8E+y/fy4aBp9TORn1z8+yr5aCRh+2VEayAAABCElEQVRIx+3Wx3KDMBSF4SuhTjfFJT3R+z9j4qBINgGbq43tGf4lh29g0AZYu0UiM4d+wW2tYmZ8TZFj/LOt5mGbb6U9tj3jPSc+zg5TkunU+qSA0N5B76tJGWogtCPjVBZWtbHjJITIRNzxQtqJ5nDgAoC5p2KwSz1bG42JXfEl/JEMvcfg2i1POR5TP2k8Jq9uSaI+WE5/e7CjIvSvCFz6rUTj3IYoGtd+q/GvTctkqKQPdVQrXvEsLrA4hZDC4jcIdVhs4KQMhws4S7BdsQynL9rA/yqzVxdxutHqC+brDePTWGom4HpV8F42DBbXsROcaob+keUDlo2AiH64lQXE1jFYu5e+AXBomYy+4tfiAAAAAElFTkSuQmCC"><span data-v-a43fb6cf="">Beginner's Guide</span></div><div data-v-a43fb6cf="" style="display:none;"><img data-v-a43fb6cf="" class="" data-origin="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADwAAAA8CAMAAAANIilAAAAAP1BMVEUAAAD6Wlr6Wlr/VFT7Wlr6WVn4WFj5WVn6WFj6W1v5WVn6WVn5Wlr8WFj5XV3/UlL9XFz6WFj5WVn4WFj5WVkVSZV8AAAAFHRSTlMAZhkOS0Ag379Yf5/vOCYGLo+vb8qn634AAAEoSURBVEjH7dRbDoMgEEBRhqegqG3d/1qrTclIBnm1n95P8ThGguzuf6nBmAE66fbJqC4aGnUT1SPSRi7chA55M8WMq7CvQCmHAlWGGMKLn5hW2DeBNNMoknjcqnomB2+VpUbrWqxTk6f2yZirsw5FpCtmT6/a80B7CIJq+aBZPj1cUnVBFi99eCMwWcrDrSFhYU9dcwOBStizZ31cyfDJCaSf5AnDN+TapWkoxpSP8e4IpASn+GN4Ov2lCqCMkWNIyxg50iym+bDoARoxboeCHgzrsTRDH7bHku3EIBhb4AfMuzG/8QWWrVieMG/FMzul2rBnUb4Fq4XFcVmLJUdFOMWUZjnFlFJuCS5TbLYRFoTW8gXPM9Iyx9/QSmiZSyvX8CS707t/9AZGVTXAbo1QkAAAAABJRU5ErkJggg==" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADwAAAA8CAMAAAANIilAAAAAP1BMVEUAAAD6Wlr6Wlr/VFT7Wlr6WVn4WFj5WVn6WFj6W1v5WVn6WVn5Wlr8WFj5XV3/UlL9XFz6WFj5WVn4WFj5WVkVSZV8AAAAFHRSTlMAZhkOS0Ag379Yf5/vOCYGLo+vb8qn634AAAEoSURBVEjH7dRbDoMgEEBRhqegqG3d/1qrTclIBnm1n95P8ThGguzuf6nBmAE66fbJqC4aGnUT1SPSRi7chA55M8WMq7CvQCmHAlWGGMKLn5hW2DeBNNMoknjcqnomB2+VpUbrWqxTk6f2yZirsw5FpCtmT6/a80B7CIJq+aBZPj1cUnVBFi99eCMwWcrDrSFhYU9dcwOBStizZ31cyfDJCaSf5AnDN+TapWkoxpSP8e4IpASn+GN4Ov2lCqCMkWNIyxg50iym+bDoARoxboeCHgzrsTRDH7bHku3EIBhb4AfMuzG/8QWWrVieMG/FMzul2rBnUb4Fq4XFcVmLJUdFOMWUZjnFlFJuCS5TbLYRFoTW8gXPM9Iyx9/QSmiZSyvX8CS707t/9AZGVTXAbo1QkAAAAABJRU5ErkJggg=="><span data-v-a43fb6cf="">About us</span></div></div></div><div data-v-a43fb6cf="" class="serviceCenter-wrap-header"><button onclick="window.location.href='/logout#/'" data-v-a43fb6cf=""><img data-v-a43fb6cf="" class="" data-origin="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGAAAABgCAMAAADVRocKAAAAQlBMVEUAAABlZWVmZmZlZWVmZmZmZmZmZmZkZGRmZmZlZWVra2tmZmZmZmZnZ2dmZmZgYGBmZmZmZmZlZWViYmJlZWVmZmYJxgEqAAAAFXRSTlMA799/v18fEI9vHz+fL68gT88wL2Dza9ruAAACiklEQVRo3u1YS2KrMAxE8hdMEmjr+1/1vbhpZxEcG4l0xSzB1li/EWY4ceKv4Yjd8E5wzjS8E/k/hgE4CU6CBkZi1yZwxKPI/Oeac6Y2Aeec2QuOn+/gNgGVhWan+WDLNuoJEZeldpcTt+9Nc+hJsp9z3hmmz+I2pZ4qghN02WffTv1l6lcw9NqP+/rA9DPcCFXRSQAG35tfs7+TTWemV9jvJwCDHYD6KiPToojcVZHua65SsSvdmVozN/MkJQhle2gFKMnlOjVk6YYgCudBfF2rMwIkJAh0l7CXDjjdRHP3Ff6VA9qRyYhyxQExAVygUH3FmqGPCTdW22TUEKDUbTVCk54g1Ow4MIsJEIn6cz3BiJM+JefjCAKfNy8RH3gsIWgfdYFOawmum/0UoYNyApiKm7TLMQRfm8GwmARyAqRz3RSpSUuAMuLNrUFLgF4mwVbNKjxslzi/lcAxOSEBIQcKQE8FVQSIqmiFgGiRIKdPAqIFZK0uIHoYmKoIiBIWsvY0D+Rojy46oIxwVMFMBiQzGc/1sJV6DFnfy/i+qjGbY4rUVmNHegKudmwgZTPj63qqfw3wEQ7MVRXUV6pDiitXHAqqEoIDW/CkVbwIBwT3ZEB2T8ZVXRUgbh/BikUCAVL8MWkE2HSdwojtr81lnguD0D53TBRPIgaToRENXEiQh4i/jr0Mq99Rnxb2uxi4xLNbWRfaYx+ZznOXE+Gakd9uhscm0zZvqCy1QVAVJU6+aV6o8p4fFHM1tik+zNuLbHhwfnDE9Hz2FH9ek3hIeUP5BzaO6VLyOE3LGO3vGzKaEeVHzhXAvBLuWrdu03AEwjJv+MHzVxiOg1/MbFcqltnO4+KHEydO9OIfEq1JSVrjUXcAAAAASUVORK5CYII=" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGAAAABgCAMAAADVRocKAAAAQlBMVEUAAABlZWVmZmZlZWVmZmZmZmZmZmZkZGRmZmZlZWVra2tmZmZmZmZnZ2dmZmZgYGBmZmZmZmZlZWViYmJlZWVmZmYJxgEqAAAAFXRSTlMA799/v18fEI9vHz+fL68gT88wL2Dza9ruAAACiklEQVRo3u1YS2KrMAxE8hdMEmjr+1/1vbhpZxEcG4l0xSzB1li/EWY4ceKv4Yjd8E5wzjS8E/k/hgE4CU6CBkZi1yZwxKPI/Oeac6Y2Aeec2QuOn+/gNgGVhWan+WDLNuoJEZeldpcTt+9Nc+hJsp9z3hmmz+I2pZ4qghN02WffTv1l6lcw9NqP+/rA9DPcCFXRSQAG35tfs7+TTWemV9jvJwCDHYD6KiPToojcVZHua65SsSvdmVozN/MkJQhle2gFKMnlOjVk6YYgCudBfF2rMwIkJAh0l7CXDjjdRHP3Ff6VA9qRyYhyxQExAVygUH3FmqGPCTdW22TUEKDUbTVCk54g1Ow4MIsJEIn6cz3BiJM+JefjCAKfNy8RH3gsIWgfdYFOawmum/0UoYNyApiKm7TLMQRfm8GwmARyAqRz3RSpSUuAMuLNrUFLgF4mwVbNKjxslzi/lcAxOSEBIQcKQE8FVQSIqmiFgGiRIKdPAqIFZK0uIHoYmKoIiBIWsvY0D+Rojy46oIxwVMFMBiQzGc/1sJV6DFnfy/i+qjGbY4rUVmNHegKudmwgZTPj63qqfw3wEQ7MVRXUV6pDiitXHAqqEoIDW/CkVbwIBwT3ZEB2T8ZVXRUgbh/BikUCAVL8MWkE2HSdwojtr81lnguD0D53TBRPIgaToRENXEiQh4i/jr0Mq99Rnxb2uxi4xLNbWRfaYx+ZznOXE+Gakd9uhscm0zZvqCy1QVAVJU6+aV6o8p4fFHM1tik+zNuLbHhwfnDE9Hz2FH9ek3hIeUP5BzaO6VLyOE3LGO3vGzKaEeVHzhXAvBLuWrdu03AEwjJv+MHzVxiOg1/MbFcqltnO4+KHEydO9OIfEq1JSVrjUXcAAAAASUVORK5CYII="> Log out</button></div><div data-v-8a55a30e="" data-v-a43fb6cf="" class="dialog inactive"><div data-v-8a55a30e="" class="dialog__container" role="dialog" tabindex="0"><div data-v-8a55a30e="" class="dialog__container-img"><img data-v-8a55a30e="" alt="" class="" data-origin="https://91dreamclub.com/assets/png/orderCancelWarn-ac58c333.png" src="https://91dreamclub.com/assets/png/orderCancelWarn-ac58c333.png"></div><div data-v-8a55a30e="" class="dialog__container-title"><h1 data-v-8a55a30e="">Do you want to log out?</h1></div><div data-v-8a55a30e="" class="dialog__container-content"></div><div data-v-8a55a30e="" class="dialog__container-footer"><button data-v-8a55a30e="">Cancel</button><button data-v-8a55a30e="">Confirm</button></div></div><div data-v-8a55a30e="" class="dialog__outside"></div></div>
</div></div><div class="customer" id="customerId" style="--36a344b0: 'Roboto', 'Inter', sans-serif; --17a7a9f6: bahnschrift;"><div data-v-67fe8f9c="" class="tabbar__container" style="--36a344b0: 'Roboto', 'Inter', sans-serif;"><div data-v-67fe8f9c="" onclick="window.location.href='/indexlogin#/';" class="tabbar__container-item"><svg data-v-67fe8f9c="" xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="none" viewBox="0 0 46 44" class=""><circle cx="27" cy="28" r="18" fill="#FFF4F4"></circle><path fill="#FFCDCB" fill-rule="evenodd" d="m23.66 5.278-17.9 12.08v25.507h10.08v-10.44a5.04 5.04 0 0 1 5.04-5.04h6.36a5.04 5.04 0 0 1 5.04 5.04v4.38h-3.36v-4.38a1.68 1.68 0 0 0-1.68-1.68h-6.36a1.68 1.68 0 0 0-1.68 1.68v11.16a2.64 2.64 0 0 1-2.64 2.64H5.04a2.64 2.64 0 0 1-2.64-2.64v-26.61a2.64 2.64 0 0 1 1.163-2.188L22.437 2.05a2.16 2.16 0 0 1 2.382-.023L44.514 14.77a2.64 2.64 0 0 1 1.206 2.217v26.598a2.64 2.64 0 0 1-2.64 2.64H30.6v-3.36h11.76V17.379l-18.7-12.1Z" clip-rule="evenodd"></path><path fill="#FFCDCB" d="M32.4 44.545a1.68 1.68 0 1 1-3.36 0 1.68 1.68 0 0 1 3.36 0ZM32.28 36.745a1.68 1.68 0 1 1-3.36 0 1.68 1.68 0 0 1 3.36 0Z"></path></svg><!----><span data-v-67fe8f9c="">Home</span></div><div data-v-67fe8f9c="" class="tabbar__container-item" onclick="window.location.href='/activity#/';"><svg data-v-67fe8f9c="" xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="none" viewBox="0 0 46 44" class=""><circle cx="27" cy="24" r="18" fill="#FFF4F4"></circle><path fill="#FFCDCB" fill-rule="evenodd" d="M10.512 5.2h26.975a4.8 4.8 0 0 1 4.796 4.6l.51 12.2h3.203L45.48 9.666A8 8 0 0 0 37.489 2H10.511A8 8 0 0 0 2.52 9.666l-1.17 28A8 8 0 0 0 9.34 46h29.317a8 8 0 0 0 7.993-8.334L46.331 30h-3.203l.326 7.8a4.8 4.8 0 0 1-4.796 5H9.341a4.8 4.8 0 0 1-4.795-5l1.17-28a4.8 4.8 0 0 1 4.796-4.6Z" clip-rule="evenodd"></path><path fill="#FFCDCB" fill-rule="evenodd" d="M13.92 16.64c.466 5.158 4.8 9.2 10.08 9.2 5.279 0 9.614-4.042 10.078-9.2h-3.522a6.621 6.621 0 0 1-13.113 0h-3.522Z" clip-rule="evenodd"></path><path fill="#FFCDCB" d="M34.092 16.65a1.75 1.75 0 0 1-1.75 1.75c-.967 0-1.795-.784-1.795-1.75 0-.967.828-1.75 1.795-1.75.966 0 1.75.783 1.75 1.75ZM17.449 16.648c0 .966-.766 1.75-1.733 1.75-.966 0-1.795-.784-1.795-1.75 0-.967.829-1.75 1.795-1.75.967 0 1.733.783 1.733 1.75ZM46 22a1.6 1.6 0 1 1-3.2 0 1.6 1.6 0 0 1 3.2 0ZM46.33 30.044a1.6 1.6 0 1 1-3.2 0 1.6 1.6 0 0 1 3.2 0Z"></path></svg><!----><span data-v-67fe8f9c="">Activity</span></div><div data-v-67fe8f9c="" onclick="window.location.href='/promotion#/';" class="tabbar__container-item">
<svg data-v-67fe8f9c="" xmlns="http://www.w3.org/2000/svg" width="57" height="49" fill="none" viewBox="0 0 57 49" class=""><path fill="#fff" fill-rule="evenodd" d="M8.939 1.501A4 4 0 0 1 12.062 0h32.155a4 4 0 0 1 3.124 1.501l7.738 9.673c.427.533.749 1.12.968 1.735H.233a5.99 5.99 0 0 1 .967-1.735L8.94 1.501ZM0 16.091h56.28a5.985 5.985 0 0 1-1.277 2.673l-23.79 28.549a4 4 0 0 1-6.146 0l-23.79-28.55A5.984 5.984 0 0 1 0 16.092Zm20.556 5.936 7.195 10.102a.5.5 0 0 0 .816-.002l7.118-10.093a2.44 2.44 0 0 1 4.435 1.406v.2h-.223c-.326 0-.782.248-1.304.93-.506.663-6.466 8.724-9.651 13.035a.975.975 0 0 1-1.563.007L17.32 24.26s-.394-.62-1.06-.62h-.14v-.195a2.445 2.445 0 0 1 4.436-1.418Z" clip-rule="evenodd"></path></svg><div data-v-67fe8f9c="" class="promotionBg"></div><span data-v-67fe8f9c="">Promotion</span></div><div data-v-67fe8f9c="" onclick="window.location.href='./wallet?user=<?php echo  $_SESSION['username']?>'" class="tabbar__container-item"><svg data-v-67fe8f9c="" xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="none" viewBox="0 0 46 44" class="wallet"><circle cx="28" cy="24" r="18" fill="#FFF4F4"></circle><path stroke="#FFCDCB" stroke-linecap="round" stroke-linejoin="round" stroke-width="3.2" d="M3 23c0-5.984 3.526-10.164 9.008-10.868.56-.088 1.14-.132 1.742-.132h21.5c.559 0 1.096.022 1.612.11C42.41 12.77 46 16.972 46 23v11c0 6.6-4.3 11-10.75 11h-21.5C7.3 45 3 40.6 3 34v-2.178"></path><path stroke="#FFCDCB" stroke-linecap="round" stroke-linejoin="round" stroke-width="3.2" d="M46 23.724h-6.452c-2.366 0-4.301 1.862-4.301 4.138S37.182 32 39.548 32H46m-9-20c-.516-.083-1.194 0-1.753 0H14c-.602 0-1.44-.083-2 0 0 0 .731-.648 1.247-1.145l6.99-6.745A7.737 7.737 0 0 1 25.571 2c1.997 0 3.914.758 5.333 2.11l3.764 3.662C36.045 9.076 39.548 12 37 12Z"></path></svg><!----><span data-v-67fe8f9c="">Wallet</span></div><div data-v-67fe8f9c="" onclick="window.location.href='/main#/';" class="tabbar__container-item active"><svg data-v-67fe8f9c="" xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="none" viewBox="0 0 46 44" class=""><circle cx="28" cy="24" r="18" fill="#FFF4F4"></circle><path fill="#FFCDCB" fill-rule="evenodd" d="M24.08 5.28C13.741 5.28 5.36 13.661 5.36 24c0 10.339 8.381 18.72 18.72 18.72 10.339 0 18.72-8.381 18.72-18.72v-8.76h3.36V24c0 12.194-9.886 22.08-22.08 22.08C11.886 46.08 2 36.194 2 24 2 11.806 11.886 1.92 24.08 1.92h20.28v3.36H24.08Z" clip-rule="evenodd"></path><path fill="#FFCDCB" d="M46.16 3.6a1.68 1.68 0 1 1-3.36 0 1.68 1.68 0 0 1 3.36 0ZM46.16 15.12a1.68 1.68 0 1 1-3.36 0 1.68 1.68 0 0 1 3.36 0Z"></path><path fill="#FFCDCB" fill-rule="evenodd" d="M15.806 29.582a1.68 1.68 0 0 1 2.372.144c1.15 1.298 2.748 2.794 5.462 2.794 2.872 0 4.857-1.428 5.805-2.533a1.68 1.68 0 0 1 2.55 2.186c-1.451 1.695-4.314 3.707-8.355 3.707-4.198 0-6.647-2.424-7.977-3.926a1.68 1.68 0 0 1 .143-2.372Z" clip-rule="evenodd"></path></svg><!----><span data-v-67fe8f9c="">Account</span></div></div><!----></div>
<foreignobject></foreignobject>

<div data-v-app=""></div><!----><div role="dialog" tabindex="0" class="van-popup van-popup--center van-toast van-toast--middle van-toast--break-word van-toast--fail" style="z-index: 2008; display: none;"><i class="van-badge__wrapper van-icon van-icon-fail van-toast__icon"><!----><!----><!----></i><div class="van-toast__text">Error: 117 
 Wrong password</div><!----></div><div data-v-app=""></div><div class="van-overlay" style="z-index: 2006; display: none;"><!----></div><div role="dialog" tabindex="0" class="van-popup van-popup--center van-dialog" aria-labelledby="Warning" style="z-index: 2006; display: none;"><div class="van-dialog__header">Warning</div><div class="van-dialog__content"><div class="van-dialog__message van-dialog__message--has-title">Are you sure to delete this message?</div></div><div class="van-hairline--top van-dialog__footer"><button type="button" class="van-button van-button--default van-button--large van-dialog__cancel"><div class="van-button__content"><!----><span class="van-button__text">Cancel</span><!----></div></button><button type="button" class="van-button van-button--default van-button--large van-dialog__confirm van-hairline--left"><div class="van-button__content"><!----><span class="van-button__text">Confirm</span><!----></div></button></div><!----></div><style>.serviceCenter__container[data-v-a43fb6cf] {
    padding: 0.53333rem 0.32rem;
    border-radius: 0.26667rem;
    background: #fff;
    height: 3.8rem;
    box-shadow: 0 .05333rem .21333rem #d0d0ed5c;
}</style><script>window.onload = function () {
			let cfg  = JSON.parse(localStorage.getItem('clientCfg'));
			// console.log(cfg)
			if (cfg) {
				var link = document.querySelector("link[rel*='icon']") || document.createElement('link');
				// var meta = document.querySelector("meta[name*='google-site-verification']") || document.createElement('meta');
				// meta.content = '是十四'
				link.type = 'image/x-icon';
				link.rel = 'shortcut icon';
				link.href = cfg.WebIco;//'http://47.56.7.183:5001/img/tatalogo.jpg';
				document.getElementsByTagName('head')[0].appendChild(link);
				// document.getElementsByTagName('head')[0].appendChild(meta);
				
				document.getElementsByTagName("title")[0].innerText = cfg.ProjectName;
			}
			document.addEventListener('touchstart', function (event) {
				if (event.touches.length > 1) {
					event.preventDefault();  //阻止元素的默认行为
				}
			}, {
				capture: false,
				passive: false,
				once: false
			});
			// document.addEventListener('touchmove', function (event) {
			// 	event.preventDefault();  //阻止元素的默认行为
			// }, {
			// 	passive: false,
			// });
		}</script>
				
				<style></style>
				<script>
function myFunction() {
  var copyText = document.getElementById("myInput");
  copyText.select();
  copyText.setSelectionRange(0, 99999);
  navigator.clipboard.writeText(copyText.value);
  
  var tooltip = document.getElementById("myTooltip");
  tooltip.innerHTML = "Copied: " + copyText.value;
}

function outFunc() {
  var tooltip = document.getElementById("myTooltip");
  tooltip.innerHTML = "Copy to clipboard";
}
</script>
				
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
    }</script>
  <script>
    
     
    console.log("Invitation Link Created");
    function copyToClipboard(text) {
var inputc = document.body.appendChild(document.createElement("input"));
inputc.value =document.getElementById("mylink").innerHTML;
inputc.focus();
inputc.select();
document.execCommand('copy');
inputc.parentNode.removeChild(inputc);
  document.getElementById("snackbar").innerHTML="URL Copied Successfully! ";
           document.getElementById("snackbar").style.display= "";
        setTimeout(function () { document.getElementById("snackbar").style.display= "none"; }, 3000);
}

</script><script>
function myFunction() {
  // Get the text field
  var copyText = document.getElementById("myInput");

  // Select the text field
  copyText.select();
  copyText.setSelectionRange(0, 99999); // For mobile devices

  // Copy the text inside the text field
  navigator.clipboard.writeText(copyText.value);
  
  // Alert the copied text
  alert("UID Copied Successfully : " + copyText.value);
}
</script><script>
const d = new Date();
document.getElementById("demo").innerHTML = d;
</script>
    <script>

    function mud(){
        document.getElementById("nickname").style.display="block";
    }
    function cancel(){
        document.getElementById("nickname").style.display="none";
    }
    function frm(){
         document.getElementById("nick").submit();
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
  document.getElementById("snackbar").innerHTML="UID Copied Successfully !";
           document.getElementById("snackbar").style.display= "";
        setTimeout(function () { document.getElementById("snackbar").style.display= "none"; }, 3000);
}

</script>
</body>

</html>