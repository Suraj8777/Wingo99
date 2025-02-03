<?php
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login");
    exit;
}
 require_once "config.php";

 

                    

                       
$query =  "SELECT * FROM betrec ORDER BY id DESC";


// result for method two 
$result = mysqli_query($conn, $query);


$dataRow = "";
$number_of_result = mysqli_num_rows($result);  
$results_per_page = 10;  

  
//determine the total number of pages available  
$number_of_page = ceil ($number_of_result / $results_per_page);  

//determine which page number visitor is currently on  
if (!isset ($_GET['rpage']) ) {  
    $rpage = 1;  
} else {  
    $rpage = $_GET['rpage'];  
}  
 
//determine the sql LIMIT starting number for the results on the displaying page  
$page_first_result = ($rpage-1) * $results_per_page;  

//retrieve the selected results from database   
$query = "SELECT *FROM betting WHERE username='".$_SESSION['username']."' ORDER BY id DESC LIMIT " . $page_first_result . ',' . $results_per_page;  
$result = mysqli_query($conn, $query);



  
//display the retrieved result on the webpage  
while ($row2 = mysqli_fetch_array($result)) { 
    if($row2[6]=='fail'){
$add =($row2[4]-(5/100)*$row2[4]);        
$amount="-$add";
 }elseif($row2[6]=='success'){
     if($row2[3]==$row2[9]){
         $add=($row2[4]-(5/100)*$row2[4])*9;
     }elseif($row2[3]==$row2[10]){
         if($row2[12]=='violet'){
            $add=($row2[4]-(5/100)*$row2[4])*1.5;   
         }else{
           $add=($row2[4]-(5/100)*$row2[4])*2;  
         }
     }elseif($row2[3]==$row2[12]){
          $add=($row2[4]-(5/100)*$row2[4])*3;
     }
     $amount="+$add";
 }
 if(fmod($amount, 1) !== 0.00 || $row2[6]=='wait'){
     $s='';
 }
 else{
     $s='.00';
 }
    $dataRow = $dataRow."
    <div data-v-b74b9dc6='' class='van-collapse van-hairline--top-bottom'>
                   <div data-v-b74b9dc6='' class='van-collapse-item'>
            <div role='button' tabindex='0' aria-expanded='true'
                class='van-cell van-cell--clickable van-collapse-item__title'>
                <div class='van-cell__title'>
                    <div data-v-b74b9dc6='' class='myParity_info'><span data-v-b74b9dc6=''
                            class='timenum'>$row2[2]</span>
                        <!----><span data-v-b74b9dc6='' class='$row2[6]'> $row2[6]</span>
                        <!---->
                        <!----><span data-v-b74b9dc6='' class=' $row2[6]'>$amount<span>$s</span></span>
                        <!---->
                    </div>
                </div><i class='van-icon van-icon-arrow van-cell__right-icon'>
                    <!---->
                </i>
            </div>
            <div class='van-collapse-item__content' style='display:none;'>
                <div data-v-b74b9dc6='' class='myParity'>
                    <p data-v-b74b9dc6='' class='myParity_title'>Period Detail</p>
                    <ul data-v-b74b9dc6=''>
                        <li data-v-b74b9dc6=''>
                            <ol data-v-b74b9dc6=''>
                                Period
                            </ol>
                            <ol data-v-b74b9dc6=''>
                                $row2[2]
                            </ol>
                        </li>
                        <li data-v-b74b9dc6=''>
                            <ol data-v-b74b9dc6=''>
                                Contract Money
                            </ol>
                            <ol data-v-b74b9dc6=''>
                                $row2[4]
                            </ol>
                        </li>
                        
                        <li data-v-b74b9dc6=''>
                            <ol data-v-b74b9dc6=''>
                                Delivery
                            </ol>
                            <ol data-v-b74b9dc6=''><span data-v-b74b9dc6='' style='color:orange'>".($row2[4]-(5/100)*$row2[4])."</span></ol>
                        </li>
                        <li data-v-b74b9dc6=''>
                            <ol data-v-b74b9dc6=''>
                                Fee
                            </ol>
                            <ol data-v-b74b9dc6=''>
                                ".((5/100)*$row2[4])."
                            </ol>
                        </li>
                        <li data-v-b74b9dc6=''>
                            <ol data-v-b74b9dc6=''>
                                Open Price
                            </ol>
                            <ol data-v-b74b9dc6=''>
                                $row2[8]
                            </ol>
                        </li>
                        <li data-v-b74b9dc6=''>
                            <ol data-v-b74b9dc6=''>
                                Result
                            </ol>
                            <ol data-v-b74b9dc6=''><span data-v-b74b9dc6='' class='bluecolor'>$row2[9]&nbsp</span><span
                                    data-v-b74b9dc6='' style='color: $row2[10];'>$row2[10]&nbsp$row2[12]</span></ol>
                        </li>
                        <li data-v-b74b9dc6=''>
                            <ol data-v-b74b9dc6=''>
                                Select
                            </ol>
                            <ol data-v-b74b9dc6=''><span data-v-b74b9dc6='' style='color: $row2[3];'>$row2[3]</span>
                            </ol>
                        </li>
                        <li data-v-b74b9dc6=''>
                            <ol data-v-b74b9dc6=''>
                                Status
                            </ol>
                            <ol data-v-b74b9dc6=''>
                                <!----><span data-v-b74b9dc6='' class='$row2[6]'>$row2[6]</span>
                                <!---->
                            </ol>
                        </li>
                        <li data-v-b74b9dc6=''>
                            <ol data-v-b74b9dc6=''>
                                Amount
                            </ol>
                            <ol data-v-b74b9dc6=''>
                                <!----><span data-v-b74b9dc6='' class='$row2[6]'>$amount</span>
                                <!---->
                            </ol>
                        </li>
                        <li data-v-b74b9dc6=''>
                            <ol data-v-b74b9dc6=''>
                                Create Time
                            </ol>
                            <ol data-v-b74b9dc6=''>
                               $row2[7]
                            </ol>
                        </li>
                    </ul>
                    <div data-v-b74b9dc6='' class='myParity_btn'><button data-v-b74b9dc6=''>Pre Pay</button></div>
                </div>
            </div>
        </div>
            </div>";
    
}
  
             
             
echo' 
       '. $dataRow.'
        
       

</div>

<div data-v-b74b9dc6="" class="pagination">
 <ul data-v-b74b9dc6="" class="page_box"><li data-v-b74b9dc6="" class="page"><span data-v-b74b9dc6="">'.(1+($rpage-1)*10).'-'.($rpage*10).'</span> of '.$number_of_page.'
              </li><li data-v-b74b9dc6="" class="page_btn">';
               if ( $rpage ==1 ) {  
    echo'<a href="#"><i data-v-b74b9dc6="" class="van-icon van-icon-arrow-left"><!----></i></a><a href="win?rpage='.($rpage+1).'"><i data-v-b74b9dc6="" class="van-icon van-icon-arrow"><!----></i></a></li></ul></div>';
} else {  
     echo'<a href="win?rpage='.($rpage-1).'"><i data-v-b74b9dc6="" class="van-icon van-icon-arrow-left"><!----></i></a><a href="win?rpage='.($rpage+1).'"><i data-v-b74b9dc6="" class="van-icon van-icon-arrow"><!----></i></a></li></ul></div>';
}  
                  echo'  </div>
                  <script>
                           var coll = document.getElementsByClassName("van-cell van-cell--clickable van-collapse-item__title");
var i;
console.log("hii");

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    console.log("hii");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
      console.log("hii");
    } else {
      console.log("hii");
      content.style.display = "block";
    }
  });
}
    
                  </script>';




?>
