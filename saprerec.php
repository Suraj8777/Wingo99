<?php
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login");
    exit;
}
 require_once "config.php";

 

                    

                       
$query =  "SELECT * FROM saprebetting ORDER BY id DESC";


// result for method two 
$result = mysqli_query($conn, $query);


$dataRow = "";
$number_of_result = mysqli_num_rows($result);  
$results_per_page = 10;  

  
//determine the total number of pages available  
$number_of_page = ceil ($number_of_result / $results_per_page);  

//determine which page number visitor is currently on  
if (!isset ($_GET['srpage']) ) {  
    $srpage = 1;  
} else {  
    $srpage = $_GET['srpage'];  
}  
 
//determine the sql LIMIT starting number for the results on the displaying page  
$page_first_result = ($srpage-1) * $results_per_page;  

//retrieve the selected results from database   
$query = "SELECT *FROM saprebetting WHERE username='".$_SESSION['username']."' ORDER BY id DESC LIMIT " . $page_first_result . ',' . $results_per_page;  
$result = mysqli_query($conn, $query);
$status1 = '';
$amount = '';

  
//display the retrieved result on the webpage  
while ($row2 = mysqli_fetch_array($result)) { 
    if($row2[6]=='fail'){
        $status1="red";
$add =($row2[4]-(5/100)*$row2[4]);        
$amount="-$add";
 }elseif($row2[6]=='success'){
     $status1="green";
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
    $dataRow = $dataRow."
    
    
    <uni-view data-v-91f724d0=''>
    <uni-view data-v-91f724d0='' class=''>
        <uni-view data-v-91f724d0='' class='flex padding-xl solid-top'>
            <uni-view data-v-372233a8='' data-v-91f724d0=''>
                <uni-view data-v-372233a8='' class='flex open'>
                    <uni-view data-v-372233a8='' style='margin-left: 10px;'>$row2[2]
                    </uni-view>
                    <uni-view data-v-372233a8='' class='margin-left text-$status1'>$row2[6]
                    </uni-view>
                    <uni-view data-v-372233a8='' class='margin-left text-$status1'>$amount
                    </uni-view>
                    <uni-text data-v-372233a8='' class='my-arrow cuIcon-unfold'>
                        <span></span></uni-text>
                </uni-view>
                <uni-view data-v-372233a8='' class='margin-top margin-left' style='display:none;'>
                    <uni-text data-v-372233a8='' class='text-green margin-bottom'><span>Period Detail</span></uni-text>
                    <uni-view data-v-372233a8='' class='flex justify-start my-space-y'>
                        <uni-view data-v-372233a8='' class='portrait-box' style='width: 104px;'>Period</uni-view>
                        <uni-view data-v-372233a8='' style='margin-left: 104px; text-align: left;'>
                            <uni-text data-v-372233a8='' class='username'><span>$row2[2]</span></uni-text>
                        </uni-view>
                    </uni-view>
                    <uni-view data-v-372233a8='' class=' flex justify-start my-space-y'>
                        <uni-view data-v-372233a8='' class='portrait-box' style='width: 104px;'>Contract Money</uni-view>
                        <uni-view data-v-372233a8='' style='text-align: left; margin-left: 104px;'>
                            <uni-text data-v-372233a8='' class='username'><span>$row2[4]</span></uni-text>
                        </uni-view>
                    </uni-view>
                   
                    <uni-view data-v-372233a8='' class=' flex justify-start my-space-y'>
                        <uni-view data-v-372233a8='' class='portrait-box' style='width: 104px;'>Delivery</uni-view>
                        <uni-view data-v-372233a8='' style='text-align: left; margin-left: 104px;'>
                            <uni-text data-v-372233a8='' class='username text-yellow'><span>".($row2[4]-(5/100)*$row2[4])."</span></uni-text>
                        </uni-view>
                    </uni-view>
                    <uni-view data-v-372233a8='' class=' flex justify-start my-space-y'>
                        <uni-view data-v-372233a8='' class='portrait-box' style='width: 104px;'>Fee</uni-view>
                        <uni-view data-v-372233a8='' style='text-align: left; margin-left: 104px;'>
                            <uni-text data-v-372233a8='' class='username'><span>".((5/100)*$row2[4])."</span></uni-text>
                        </uni-view>
                    </uni-view>
                    <uni-view data-v-372233a8='' class=' flex justify-start my-space-y'>
                        <uni-view data-v-372233a8='' class='portrait-box' style='width: 104px;'>Open Price</uni-view>
                        <uni-view data-v-372233a8='' style='text-align: left; margin-left: 104px;'>
                            <uni-text data-v-372233a8='' class='username'><span>$row2[8]</span></uni-text>
                        </uni-view>
                    </uni-view>
                    <uni-view data-v-372233a8='' class=' flex justify-start my-space-y'>
                        <uni-view data-v-372233a8='' class='portrait-box' style='width: 104px;'>Result</uni-view>
                        <uni-view data-v-372233a8='' style='text-align: left; margin-left: 104px;'>
                            <uni-text data-v-372233a8='' class='text-blue my-space-x'><span>$row2[9]</span></uni-text>
                            <uni-text data-v-372233a8='' class='my-space-x text-red'><span>$row2[12]</span></uni-text>
                            <uni-text data-v-372233a8='' class='my-space-x text-red'><span>$row2[10]</span></uni-text>
                        </uni-view>
                    </uni-view>
                    <uni-view data-v-372233a8='' class=' flex justify-start my-space-y'>
                        <uni-view data-v-372233a8='' class='portrait-box' style='width: 104px;'>Select</uni-view>
                        <uni-view data-v-372233a8='' style='text-align: left; margin-left: 104px;'>
                            <uni-text data-v-372233a8='' class='username text-green'><span>$row2[3]</span></uni-text>
                        </uni-view>
                    </uni-view>
                    <uni-view data-v-372233a8='' class=' flex justify-start my-space-y'>
                        <uni-view data-v-372233a8='' class='portrait-box' style='width: 104px;'>Status</uni-view>
                        <uni-view data-v-372233a8='' style='text-align: left; margin-left: 104px;'>
                            <uni-text data-v-372233a8='' class='username text-$status1'><span>$row2[6]</span></uni-text>
                        </uni-view>
                    </uni-view>
                    <uni-view data-v-372233a8='' class=' flex justify-start my-space-y'>
                        <uni-view data-v-372233a8='' class='portrait-box' style='width: 104px;'>Amount</uni-view>
                        <uni-view data-v-372233a8='' style='text-align: left; margin-left: 104px;'>
                            <uni-text data-v-372233a8='' class='username text-$status1'><span>$amount</span></uni-text>
                        </uni-view>
                    </uni-view>
                    <uni-view data-v-372233a8='' class=' flex justify-start my-space-y'>
                        <uni-view data-v-372233a8='' class='portrait-box' style='width: 104px;'>Create Time</uni-view>
                        <uni-view data-v-372233a8='' style='text-align: left; margin-left: 104px;'>
                            <uni-text data-v-372233a8='' class='username'><span>$row2[7]</span></uni-text>
                        </uni-view>
                    </uni-view>
                </uni-view>
                <!---->
            </uni-view>
        </uni-view>
    </uni-view>
</uni-view>
    
 
";
    
}
  
             
             
echo' 
      <uni-view data-v-91f724d0="" class="bg-white shadow solid-top">
                
                <uni-view data-v-91f724d0="" class="my-line-height block bg-blue"></uni-view> '. $dataRow.'';
        
  if ( $srpage ==1 ) {  
    echo'
  
    
     <uni-view data-v-91f724d0="" class="padding bg-white my-textsize solid-top"
                    style="height: 52px;">
                    <uni-view data-v-91f724d0="" class="my-lottery-info">
                        <uni-text data-v-91f724d0="" class="my-textsize my-space-x"><span>'.(1+($srpage-1)*10).'-'.($srpage*10).' of
                            '.$number_of_page.'</span></uni-text>
                            <a href="#">
                        <uni-button data-v-91f724d0="" class="cu-btn cuIcon sm round my-space-x"
                            data-type="down">
                            <uni-text data-v-91f724d0="" class="cuIcon-back"><span></span></uni-text>
                        </uni-button></a>
                        <a href="/win?srpage='.($srpage+1).'">
                        <uni-button data-v-91f724d0="" class="cu-btn cuIcon sm round" data-type="up">
                            <uni-text data-v-91f724d0="" class="cuIcon-right"><span></span></uni-text>
                        </uni-button></a>
                    </uni-view>
                </uni-view>
            </uni-view>';
} else {  
     echo'
     
      <uni-view data-v-91f724d0="" class="padding bg-white my-textsize solid-top"
                    style="height: 52px;">
                    <uni-view data-v-91f724d0="" class="my-lottery-info">
                        <uni-text data-v-91f724d0="" class="my-textsize my-space-x"><span>'.(1+($srpage-1)*10).'-'.($srpage*10).' of
                            '.$number_of_page.'</span></uni-text>
                            <a href="win?srpage='.($srpage-1).'">
                        <uni-button data-v-91f724d0="" class="cu-btn cuIcon sm round my-space-x"
                            data-type="down">
                            <uni-text data-v-91f724d0="" class="cuIcon-back"><span></span></uni-text>
                        </uni-button></a>
                        <a href="win?srpage='.($srpage+1).'">
                        <uni-button data-v-91f724d0="" class="cu-btn cuIcon sm round" data-type="up">
                            <uni-text data-v-91f724d0="" class="cuIcon-right"><span></span></uni-text>
                        </uni-button></a>
                    </uni-view>
                </uni-view>
            </uni-view>
            
            
            
            
            
     ';
}  
                  echo'  </div>
                  <script>
                           var coll = document.getElementsByClassName("open");
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
