<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["adloggedin"]) || $_SESSION["adloggedin"] !== true){
    header("location: adlogin");
    exit;
}
require_once "config.php";
$opt9="SELECT COUNT(*) as total9 FROM `users` ";
$optres9=$conn->query($opt9);
$sum9= mysqli_fetch_assoc($optres9);

if($sum9['total9']==""){
    $bonus9=0;
   
}else{
    $bonus9=$sum9['total9'];
}
$opt="SELECT SUM(withdraw) as total FROM `record` WHERE status='Completed' ";
$optres=$conn->query($opt);
$sum= mysqli_fetch_assoc($optres);
if($sum['total']==""){
    $bonus=0;
    
}else{
    $bonus=round($sum['total'],2);
}

$opt1="SELECT SUM(recharge) as total1 FROM `recharge` WHERE status='Completed'";
$optres1=$conn->query($opt1);
$sum1= mysqli_fetch_assoc($optres1);
if($sum1['total1']==""){
    $tbal=0;
    
}else{
    $tbal=$sum1['total1'];
}
$opt10="SELECT SUM(withdraw) as total10 FROM `withdraw` WHERE status='Processing'";
$optres10=$conn->query($opt10);
$sum10= mysqli_fetch_assoc($optres10);
if($sum10['total10']==""){
    $tbal0=0;
    
}else{
    $tbal0=$sum10['total10'];
}





$opt9t="SELECT COUNT(*) as total9 FROM `users` WHERE  DATE(`time`) = CURDATE() ";
$optres9t=$conn->query($opt9t);
$sum9t= mysqli_fetch_assoc($optres9t);

if($sum9t['total9']==""){
    $bonus9t=0;
   
}else{
    $bonus9t=$sum9t['total9'];
}
$optt="SELECT SUM(withdraw) as total FROM `record` WHERE status='Completed' AND  DATE(`created_at`) = CURDATE() ";
$optrest=$conn->query($optt);
$sumt= mysqli_fetch_assoc($optrest);
if($sumt['total']==""){
    $bonust=0;
    
}else{
    $bonust=round($sumt['total'],2);
}

$opt1t="SELECT SUM(recharge) as total1 FROM `recharge` WHERE status='Completed' AND  DATE(`created_at`) = CURDATE()";
$optres1t=$conn->query($opt1t);
$sum1t= mysqli_fetch_assoc($optres1t);
if($sum1t['total1']==""){
    $tbalt=0;
    
}else{
    $tbalt=$sum1t['total1'];
}
$opt10t="SELECT SUM(withdraw) as total10 FROM `record` WHERE status='Processing' AND  DATE(`created_at`) = CURDATE()";
$optres10t=$conn->query($opt10t);
$sum10t= mysqli_fetch_assoc($optres10t);
if($sum10t['total10']==""){
    $tbal0t=0;
    
}else{
    $tbal0t=$sum10t['total10'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
<title>Admin | 91 Club</title>
<link rel="icon" href="./ico.png">
<link rel="stylesheet" href="admincss/page-main-8cf260fb.css">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">


    <!-- Customized Bootstrap Stylesheet -->
    <link href="admincss/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="admincss/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                    
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="https://www.forcs.com/en/wp-content/uploads/2020/09/06-Korean-National-Police-Agency-2.png" alt="" style="width: 55px; height: 40px;">
                        <div class="bg-Completed rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0"style="
    color: #fff;
">Soumya Gamers</h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="admin" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <a href="users" class="nav-item nav-link"><i class="fa fa-th me-2"></i>users</a>
                    <a href="adpre" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Next Prediction</a>
                    <a href="adreward" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Add Reward</a>
                    <a href="inviterec" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Invite Record</a>
                    <a href="adwith" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Withdraw Req</a>
                    <a href="rechargeRequests" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Recharge Req</a>
                    <a href="gift" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Red envelopes</a>
                     <a href="adduser" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Add User</a>
                    <a href="delete" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Delete User</a>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start --><style>a {
    color: #f95959;
    text-decoration: none;
}.sidebar {
    position: fixed;
    top: 64px;
    left: 0;
    bottom: 0;
    width: 250px;
    height: 100vh;
    overflow-y: auto;
    background: #071251;
    transition: 0.5s;
    z-index: 999;
}.financialServices__container-box>div[data-v-88c90fd8] {
    display: -webkit-box;
    display: -webkit-flex;
    display: flex;
    -webkit-box-align: center;
    -webkit-align-items: center;
    align-items: center;
    -webkit-box-pack: start;
    -webkit-justify-content: flex-start;
    justify-content: flex-start;
    color: #666;
    padding: 1.24rem;
    margin: 0.13333rem 1px;
    background: #fff;
    box-shadow: 0 .05333rem .21333rem #d0d0ed5c;
    border-radius: .13333rem;
}.sidebar {
    position: fixed;
    top: 64px;
    left: 0;
    bottom: 0;
    width: 250px;
    height: 100vh;
    overflow-y: auto;
    background: #071251;
    transition: 0.5s;
    z-index: 999;
}</style>
            <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0" style="background: linear-gradient(90deg,#f95959 0%,#ff9a8e 100%)!important;">
                    
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <form class="d-none d-md-flex ms-4">
                    <input class="form-control border-0" type="search" placeholder="Search">
                </form>
                <div class="navbar-nav align-items-center ms-auto">
                   
                
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="https://www.forcs.com/en/wp-content/uploads/2020/09/06-Korean-National-Police-Agency-2.png" alt="" style="width: 55px; height: 40px;">
                            <span class="d-none d-lg-inline-flex">Soumya Gamers</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                           
                            <a href="/logout" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->


            <!-- Sale & Revenue Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4" style="background-color: ORANGE  !important;">
                            <i class="fa fa-chart-line fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2" style="color: white;">Todays Users/Total users: </p>
                                <h6 class="mb-0" style="color: white;"><?php echo $bonus9t ?>/<?php echo $bonus9 ?></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4"style="background-color: #28c76f  !important;">
                            <i class="fa fa-chart-bar fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2" style="color: white;">Todays Profit/Total Profit: </p>
                                <h6 class="mb-0" style="color: white;"><?php echo ($tbalt-$bonust)?>/ <?php echo ($tbal-$bonus)?></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4"style="background-color: #ea5455  !important;">
                            <i class="fa fa-chart-area fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2" style="color: white;">Today/Total Amount Withdrawn: </p>
                                <h6 class="mb-0" style="color: white;"><?php echo $bonust?>/ <?php echo $bonus?></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4"style="background-color: #f44336  !important;">
                            <i class="fa fa-chart-bar fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2" style="color: white;">Today/Total Recharge Amount: </p>
                                <h6 class="mb-0" style="color: white;"><?php echo $tbalt?>/ <?php echo $tbal?></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <br><div data-v-88c90fd8="" class="financialServices__container-box"><div onclick="window.location.href='getdetails'" data-v-88c90fd8=""><img data-v-88c90fd8="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAMAAACdt4HsAAAAtFBMVEUAAABcp/9cp/9epv9dn/9cpv9cpv9cpf9cp/9bpv9cpv9dp/9cpP9bp/9eqP9apf9Sn/9dpv9Jmv9eqP9ElP9cp/9cpv////82if+t0v/B3f+Zx//W6P/m8f/N4f/0+f9Il/9Ckv9wsf9Rnv9Qmf9Lmf/r9P/a6f+00/86jf+Duf9ao/+jzf9Xo/8+j/+/2v+32P+Pwv9mrP9op//g7v+31/98tv91rv9mq//N4/+jzP+Nvf89OsrBAAAAFnRSTlMAf78gEN/vz29fr58/n28wz49vT09A/ixTGwAAAdVJREFUWMPtlttygjAQhkHAQ221xwSlCSogKJ6t1bbv/16Ngc7KTIBlai+c+t3JzH4uu3802pXzYnbuaoXcdIyicr1OymnnKowGQWHlGaC+zGAq61sETVspsAgeVQsvpAJNhaBZRXCnEOhVBDe/FdSKBdOPVxUOVjCiOfSQgl6eYIwUzPIEb0jBZkyVuOsSAbB2VBzKhljKfxKMVn0FK3wSXarm8+KTSB30EGc9FdMLysEfCuZeMAi8UsHBgcmt4XE8mNgJw/viJGbW2Ccpng0s2gY+SO9EMrAlX+H2KCCWgY7yFOoFjC6P70CEAXGY4AAEstqPmHjCWBjDn7wyiTs4xLuRnP5E1ruZ19IrrHGYtk9Dl7qcRwER1E28QDYQUxoJCU9mIGiiBLDBrRhoRlDDCWCElIb+qaCOE8AOOZWEkZ8IiIkVDBOB+PoEFhCJge8gZboUWxCaFXSAn8FPEvmQUbfiDLyMwF5SuoGbEioHGYHP0ny3cNc8GMKWMXZy2bG0DLdFglhGMaIp3IMGgBopm4LPORdbiPaTOeQQ1wJsUiZxoL70P2AMTri3F+JjA+oxi4DfBMEiJnVdU9KyChWejHRAGrqp5dF90gt5fL7tmtqVs/MN94DbsbuNvhYAAAAASUVORK5CYII="><div data-v-88c90fd8="" class="financialServices__container-box-para"><h3 data-v-88c90fd8="">Members Info</h3><span data-v-88c90fd8=""></span></div></div><div onclick="window.location.href='upi1'" data-v-88c90fd8=""><img data-v-88c90fd8="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAMAAACdt4HsAAAArlBMVEUAAABK461L46xE36RL4q1L465K4q1O4a9K4a1K46xK4qxK4a1K46xL4qxK4q1L4axK4q1K361M4q0T0IE53J8u2JUg2I5L4qz///8GzHal8NW79N+O7MvS9+rg+e4X0oTp/PUo15Al0odi5rdE4KY33J0l04ch1YwLznph5rYQ0H6w8tqa79CC5bpW5LEx2Zcs2JT0/vqD68Z46cHk+vHg+e+P7cvH9uWa7tBt57tTDyxnAAAAF3RSTlMAf78Qn28/H3+vj99g79/PTzDv779vT8FjD08AAAGZSURBVFjD7ZZpb4JAEIaVS8Gj2msArYoCWrxQe/7/P1aWjQTbYXcItompzxcTk3kyzLwLW7tyXlRdU4SYekNU3rwFOVqhonEDJFpFBlZPM6hofRvIaKigC3SwFgwogY4IdIBqz1CHEphVBYpYcHh/wnijCmZ2AS5R4BYJJkTBqkjwShRsJnj9bk8QcPZDjI1siFL+k2C2HCAs6Unc2Tiri0+iPSQP8cPFOFxQDn5R4AdbbxtIBZuhm7HPVXuRw5nfi5N4ssbB8e9g4WTcNUsE6RNSPCfHGDSVHOXDaX24DpkATOph4gcgdo6M7FHIBGDRjvPyOZ3fIidIDEwA/RJrnDsZU2bY8jDQBayBcGRnvKR9qWRB4CSsf3zl2mRBzHvPTTbtwEIEshFkOWCYVQXK3wliB92CVXULvRI5QLeg0q95XpbBkL8QkLueAQL8KDOkAhblzvc7twLCKXADF0Q+dls1QITHDesp+/EAAHknWXIDJ8LqGU2QzIEz9qFl1FDaXRARjJN1LuKOwstR+r26kIdHo1G7cn6+AEIy4spd9Gx2AAAAAElFTkSuQmCC"><div data-v-88c90fd8="" class="financialServices__container-box-para"><h3 data-v-88c90fd8="">Change UPI ID</h3><span data-v-88c90fd8=""></span></div></div><div onclick="window.location.href='notice'" data-v-88c90fd8=""><img data-v-88c90fd8="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAKAAAACgCAMAAAC8EZcfAAAAbFBMVEX6WloAAAD5WFj7WFj6WVn/W1v7Wlr6Wlr7W1v6Wlr6XFz6Wlr5WFj8W1v6WVn6WVn5WVn/VVX7W1v+XV36WVn4WFj6W1v5WVn5WVn7Wlr6W1v8XFz7WVn9XV3/SUn6WVn6Wlr/XFz4WVn5WVlMptElAAAAI3RSTlNmAJ9AxQxNWXkzJRn1X9eOsgZGE+u8cOzigl9ZOSwHqZ8ycDPAW1MAAAL6SURBVHja7dzbbuMgFIXh5WBjAz47SZNOjvX7v+NI7QVSpwkQbGBm9n8bX3zCiVEks5ElHgEJ6BgBk4uABHSMgMnlBiwmeRbsM2ycAvtMCKmGTLcgcFAn/g7dZnZqA907P6mFgYPUOC+gbpTLAYe71nkDdSUrfIGatyhQxwp/4FnzlgeilJ7AYQTWBAJs8AEWJdYGoiwMQINvXaBZCINvZaBZCINvbaAWugM5QgHBXwEKhAPi7A4sEBLYFM5AFhQI7gpUCAuEcgSOoYHcDVggNBCTE5CFB96dgGV4YOMCVAgPhHIAihjAuwOQxwByByBiAJvBGjhFAWKyBso4QGkNFHGAJ2vgGAfIrIE8DpCnDiytgWXqQMQBgoAEJCABCbg2sO73+1udLnB7BIDqLVXgtgK+hGkCv3xfwhSBh0p/WB3SA7Z7QPdxSA2Y41t5WsAd/qhPCdjjh/p0gD1+rE8FeMWDrkkA6xsedksAWB/xpGMdDdjp7fdxelPpggNx0NubWbhFeGDVznNb2V4XAQjs97YXAhGALhHw5whIQAIaIiABCWiIgAQkoKG/Gdjt8mfturjAqp1NHaqYwMNsro0I7GabunjAnRVwFw+YWwFzWkHP72AVD4jewtcjIhDXNwOvvsbe6rrNs7o9QHsxQEACEtAQAQlIQEMEJCABn9a19fxqdV55AUvv/x1m4nHlN9E3s2f1x7rv8rezb1cPIIOx2bsc3xutgScYq1cACmugDHGLbx5HhiYY63x928rj0NXQRHnMLHvwD7d2XvZBzR2AAhESDkCFCCkzUNcgeGX2AJjKPWZOwAnBK2yAOo7AjdlDYBo/E/UQmMYSMvdRGg1CVtgCdWcE7J49ASZwk/lrA3F+IUDmgTjxhYaRQtGFpqFMsYTa5zUYjGHlxovnaDW56iI2Z//hdAXDWjXikvkANVGvYkieBpqT49I6Li8Lz8BUJ94shTsprTMCXbooKQTzSJzlVGSf/Z9jTs0RMLkISEDHCJhcBPzngb8BncLoIXGJNNsAAAAASUVORK5CYII="><div data-v-88c90fd8="" class="financialServices__container-box-para"><h3 data-v-88c90fd8="">Update Notice</h3><span data-v-88c90fd8=""></span></div></div><div onclick="window.location.href='updateadmin'" data-v-88c90fd8=""><img data-v-88c90fd8="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFAAAABQCAMAAAC5zwKfAAAAbFBMVEUAAAD/iRv/ihz/hhr/iBr/iRv/iB3/iRv/ihv/iRz/hR3/iRz/iRr/hRT/iR3/ihv/iRr/hxn/iRv/iRv/gCr/iR3/iRz/hxv/iRz/iRz/iBz/ihz/ixv/hRH/iRz/ih3/iBv/iRv/kiT/iR3fckNCAAAAI3RSTlMAZp8mH1/gb1iPEH9NDPU+MBmxeQbvz0Dsxb6oORLZv5aCBztI/qIAAAHtSURBVFjD7djJkoIwEIDhJISwyiqiuIxOv/87ToFV0wQZk9A5zMH/ZFn6VbNEAfbp02+yDMvKn5Z0MNXkPrg0AUxJ+ngKtELPHop0D0W6RxfRM4t0D0W6hyLd08s9e9BJuqc3ePKw0rMHiWcPlAM4gE2ppbaX+VlYdC7rvYVW5dyhONgZuJC7Vr0Z8xrzDcV/DhnwjQXrnuTcq7gLt4Ph2lbHnFBu3IH0jY5pYLz0ak6sXoAlFbwYtpi6zXtObq8vOjp4pR8Tvdqw7IhnYvBPwOgufrvQwfYGs0Iy+CjAK9gW4Bc8gV8wAs9g4hsUvsGHBRjdT8cCQB1EawajwgRGzewjJzPZGMDHEbQa44jqLShg2WASW/UGjOC1EzclbsUfoOxgpfP2ny8FaxXtVjBcUgqmbi6gZNjXgpNMHmAs2vafInXvMF6MV8578Ypgrnkind582g4gw5Lnl/tejB6bKmHsaO/lDBsdUONgGWT6nY89WC3BZnrZs6lKgSu4W4IDw8oOnhXWXv+67rKV01I5D4gHAMXIsJzNV4dpNxczwO6WXvzNtBJAce4dN95L4VJpkgFmNc4ejog5D3j5Zi+lhzWwteHy2vqZgDBiYV7hdCaxiwJD9c78HBP7koycFMj1zEtpnwkhkjBlnxz6AfNNngUB9TYwAAAAAElFTkSuQmCC"><div data-v-88c90fd8="" class="financialServices__container-box-para"><h3 data-v-88c90fd8="">Change Backend Password</h3><span data-v-88c90fd8=""></span></div></div><div data-v-88c90fd8="" onclick="window.location.href='updateotp'" ><img data-v-88c90fd8="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAMAAACdt4HsAAAAtFBMVEUAAABcp/9cp/9epv9dn/9cpv9cpv9cpf9cp/9bpv9cpv9dp/9cpP9bp/9eqP9apf9Sn/9dpv9Jmv9eqP9ElP9cp/9cpv////82if+t0v/B3f+Zx//W6P/m8f/N4f/0+f9Il/9Ckv9wsf9Rnv9Qmf9Lmf/r9P/a6f+00/86jf+Duf9ao/+jzf9Xo/8+j/+/2v+32P+Pwv9mrP9op//g7v+31/98tv91rv9mq//N4/+jzP+Nvf89OsrBAAAAFnRSTlMAf78gEN/vz29fr58/n28wz49vT09A/ixTGwAAAdVJREFUWMPtlttygjAQhkHAQ221xwSlCSogKJ6t1bbv/16Ngc7KTIBlai+c+t3JzH4uu3802pXzYnbuaoXcdIyicr1OymnnKowGQWHlGaC+zGAq61sETVspsAgeVQsvpAJNhaBZRXCnEOhVBDe/FdSKBdOPVxUOVjCiOfSQgl6eYIwUzPIEb0jBZkyVuOsSAbB2VBzKhljKfxKMVn0FK3wSXarm8+KTSB30EGc9FdMLysEfCuZeMAi8UsHBgcmt4XE8mNgJw/viJGbW2Ccpng0s2gY+SO9EMrAlX+H2KCCWgY7yFOoFjC6P70CEAXGY4AAEstqPmHjCWBjDn7wyiTs4xLuRnP5E1ruZ19IrrHGYtk9Dl7qcRwER1E28QDYQUxoJCU9mIGiiBLDBrRhoRlDDCWCElIb+qaCOE8AOOZWEkZ8IiIkVDBOB+PoEFhCJge8gZboUWxCaFXSAn8FPEvmQUbfiDLyMwF5SuoGbEioHGYHP0ny3cNc8GMKWMXZy2bG0DLdFglhGMaIp3IMGgBopm4LPORdbiPaTOeQQ1wJsUiZxoL70P2AMTri3F+JjA+oxi4DfBMEiJnVdU9KyChWejHRAGrqp5dF90gt5fL7tmtqVs/MN94DbsbuNvhYAAAAASUVORK5CYII="><div data-v-88c90fd8="" class="financialServices__container-box-para"><h3 data-v-88c90fd8="">Update OTP API</h3><span data-v-88c90fd8=""></span></div></div><div data-v-88c90fd8="" onclick="window.location.href='updateperiod'"><img data-v-88c90fd8="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAMAAACdt4HsAAAArlBMVEUAAABK461L46xE36RL4q1L465K4q1O4a9K4a1K46xK4qxK4a1K46xL4qxK4q1L4axK4q1K361M4q0T0IE53J8u2JUg2I5L4qz///8GzHal8NW79N+O7MvS9+rg+e4X0oTp/PUo15Al0odi5rdE4KY33J0l04ch1YwLznph5rYQ0H6w8tqa79CC5bpW5LEx2Zcs2JT0/vqD68Z46cHk+vHg+e+P7cvH9uWa7tBt57tTDyxnAAAAF3RSTlMAf78Qn28/H3+vj99g79/PTzDv779vT8FjD08AAAGZSURBVFjD7ZZpb4JAEIaVS8Gj2msArYoCWrxQe/7/P1aWjQTbYXcItompzxcTk3kyzLwLW7tyXlRdU4SYekNU3rwFOVqhonEDJFpFBlZPM6hofRvIaKigC3SwFgwogY4IdIBqz1CHEphVBYpYcHh/wnijCmZ2AS5R4BYJJkTBqkjwShRsJnj9bk8QcPZDjI1siFL+k2C2HCAs6Unc2Tiri0+iPSQP8cPFOFxQDn5R4AdbbxtIBZuhm7HPVXuRw5nfi5N4ssbB8e9g4WTcNUsE6RNSPCfHGDSVHOXDaX24DpkATOph4gcgdo6M7FHIBGDRjvPyOZ3fIidIDEwA/RJrnDsZU2bY8jDQBayBcGRnvKR9qWRB4CSsf3zl2mRBzHvPTTbtwEIEshFkOWCYVQXK3wliB92CVXULvRI5QLeg0q95XpbBkL8QkLueAQL8KDOkAhblzvc7twLCKXADF0Q+dls1QITHDesp+/EAAHknWXIDJ8LqGU2QzIEz9qFl1FDaXRARjJN1LuKOwstR+r26kIdHo1G7cn6+AEIy4spd9Gx2AAAAAElFTkSuQmCC"><div data-v-88c90fd8="" class="financialServices__container-box-para"><h3 data-v-88c90fd8="">Update Game Period</h3><span data-v-88c90fd8=""></span></div></div><div onclick="window.location.href='unblock'" data-v-88c90fd8=""><img data-v-88c90fd8="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAKAAAACgCAMAAAC8EZcfAAAAbFBMVEX6WloAAAD5WFj7WFj6WVn/W1v7Wlr6Wlr7W1v6Wlr6XFz6Wlr5WFj8W1v6WVn6WVn5WVn/VVX7W1v+XV36WVn4WFj6W1v5WVn5WVn7Wlr6W1v8XFz7WVn9XV3/SUn6WVn6Wlr/XFz4WVn5WVlMptElAAAAI3RSTlNmAJ9AxQxNWXkzJRn1X9eOsgZGE+u8cOzigl9ZOSwHqZ8ycDPAW1MAAAL6SURBVHja7dzbbuMgFIXh5WBjAz47SZNOjvX7v+NI7QVSpwkQbGBm9n8bX3zCiVEks5ElHgEJ6BgBk4uABHSMgMnlBiwmeRbsM2ycAvtMCKmGTLcgcFAn/g7dZnZqA907P6mFgYPUOC+gbpTLAYe71nkDdSUrfIGatyhQxwp/4FnzlgeilJ7AYQTWBAJs8AEWJdYGoiwMQINvXaBZCINvZaBZCINvbaAWugM5QgHBXwEKhAPi7A4sEBLYFM5AFhQI7gpUCAuEcgSOoYHcDVggNBCTE5CFB96dgGV4YOMCVAgPhHIAihjAuwOQxwByByBiAJvBGjhFAWKyBso4QGkNFHGAJ2vgGAfIrIE8DpCnDiytgWXqQMQBgoAEJCABCbg2sO73+1udLnB7BIDqLVXgtgK+hGkCv3xfwhSBh0p/WB3SA7Z7QPdxSA2Y41t5WsAd/qhPCdjjh/p0gD1+rE8FeMWDrkkA6xsedksAWB/xpGMdDdjp7fdxelPpggNx0NubWbhFeGDVznNb2V4XAQjs97YXAhGALhHw5whIQAIaIiABCWiIgAQkoKG/Gdjt8mfturjAqp1NHaqYwMNsro0I7GabunjAnRVwFw+YWwFzWkHP72AVD4jewtcjIhDXNwOvvsbe6rrNs7o9QHsxQEACEtAQAQlIQEMEJCABn9a19fxqdV55AUvv/x1m4nHlN9E3s2f1x7rv8rezb1cPIIOx2bsc3xutgScYq1cACmugDHGLbx5HhiYY63x928rj0NXQRHnMLHvwD7d2XvZBzR2AAhESDkCFCCkzUNcgeGX2AJjKPWZOwAnBK2yAOo7AjdlDYBo/E/UQmMYSMvdRGg1CVtgCdWcE7J49ASZwk/lrA3F+IUDmgTjxhYaRQtGFpqFMsYTa5zUYjGHlxovnaDW56iI2Z//hdAXDWjXikvkANVGvYkieBpqT49I6Li8Lz8BUJ94shTsprTMCXbooKQTzSJzlVGSf/Z9jTs0RMLkISEDHCJhcBPzngb8BncLoIXGJNNsAAAAASUVORK5CYII="><div data-v-88c90fd8="" class="financialServices__container-box-para"><h3 data-v-88c90fd8="">Unblock Members ID</h3><span data-v-88c90fd8=""></span></div></div><div onclick="window.location.href='block'" data-v-88c90fd8=""><img data-v-88c90fd8="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFAAAABQCAMAAAC5zwKfAAAAbFBMVEUAAAD/iRv/ihz/hhr/iBr/iRv/iB3/iRv/ihv/iRz/hR3/iRz/iRr/hRT/iR3/ihv/iRr/hxn/iRv/iRv/gCr/iR3/iRz/hxv/iRz/iRz/iBz/ihz/ixv/hRH/iRz/ih3/iBv/iRv/kiT/iR3fckNCAAAAI3RSTlMAZp8mH1/gb1iPEH9NDPU+MBmxeQbvz0Dsxb6oORLZv5aCBztI/qIAAAHtSURBVFjD7djJkoIwEIDhJISwyiqiuIxOv/87ToFV0wQZk9A5zMH/ZFn6VbNEAfbp02+yDMvKn5Z0MNXkPrg0AUxJ+ngKtELPHop0D0W6RxfRM4t0D0W6hyLd08s9e9BJuqc3ePKw0rMHiWcPlAM4gE2ppbaX+VlYdC7rvYVW5dyhONgZuJC7Vr0Z8xrzDcV/DhnwjQXrnuTcq7gLt4Ph2lbHnFBu3IH0jY5pYLz0ak6sXoAlFbwYtpi6zXtObq8vOjp4pR8Tvdqw7IhnYvBPwOgufrvQwfYGs0Iy+CjAK9gW4Bc8gV8wAs9g4hsUvsGHBRjdT8cCQB1EawajwgRGzewjJzPZGMDHEbQa44jqLShg2WASW/UGjOC1EzclbsUfoOxgpfP2ny8FaxXtVjBcUgqmbi6gZNjXgpNMHmAs2vafInXvMF6MV8578Ypgrnkind582g4gw5Lnl/tejB6bKmHsaO/lDBsdUONgGWT6nY89WC3BZnrZs6lKgSu4W4IDw8oOnhXWXv+67rKV01I5D4gHAMXIsJzNV4dpNxczwO6WXvzNtBJAce4dN95L4VJpkgFmNc4ejog5D3j5Zi+lhzWwteHy2vqZgDBiYV7hdCaxiwJD9c78HBP7koycFMj1zEtpnwkhkjBlnxz6AfNNngUB9TYwAAAAAElFTkSuQmCC"><div data-v-88c90fd8="" class="financialServices__container-box-para"><h3 data-v-88c90fd8="">Block Members ID</h3><span data-v-88c90fd8=""></span></div></div></div>
   
               
                    
                   <!--<h2 style="font-size:20px;padding:5px; color:black; text-align:center;"onclick="window.location.href='helpapprove'"> Click Here to check Quries</h2>-->
            <!-- Sale & Revenue End -->


            <!-- Sales Chart Start -->
       
            <!-- Sales Chart End -->


            <!-- Recent Sales End -->


            <!-- Widgets Start -->
            
            <!-- Widgets End -->


            <!-- Footer Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light rounded-top p-4"style="
    background-color: #efefef !important;
    margin-top: 0px;
    margin-right: -24px;
    margin-left: -25px;
">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="https://t.me/SoumyaGamers">Contact Developer</a>                        </div>
                        <div class="col-12 col-sm-6 text-center text-sm-end">
                           
                            Created By <a href="https://t.me/SoumyaGamers">Soumya Gamers</a>
                        
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Template Javascript -->
    <script src="adminjs/main.js"></script>
</body>

</html>