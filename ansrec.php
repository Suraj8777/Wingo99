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
if (!isset ($_GET['page']) ) {  
    $page = 1;  
} else {  
    $page = $_GET['page'];  
}  
 
//determine the sql LIMIT starting number for the results on the displaying page  
$page_first_result = ($page-1) * $results_per_page;  

//retrieve the selected results from database   
$query = "SELECT *FROM betrec ORDER BY id DESC LIMIT " . $page_first_result . ',' . $results_per_page;  
$result = mysqli_query($conn, $query);  
  
//display the retrieved result on the webpage  
while ($row2 = mysqli_fetch_array($result)) {  
    if($row2[4]=="green"){
       $c="rgb(0, 230, 118)"; 
    }else if($row2[4]=="red"){
       $c="rgb(255, 23, 68)"; 
    }
    if($row2[5]=="violet"){
       $c1="rgb(101, 31, 255)"; 
    }else{
        $c1="white";
    }
    $dataRow = $dataRow."
    
    <tr data-v-b74b9dc6=''><td data-v-b74b9dc6=''>$row2[1]</td><td data-v-b74b9dc6=''>$row2[3]</td><td data-v-b74b9dc6='' style='color:$c;'>
    $row2[2]
                  </td><td data-v-b74b9dc6=''><span data-v-b74b9dc6=''  style='background:$c;border-radius: 8px !important;'></span>
                  <span data-v-b74b9dc6='' style='background:$c1; border-radius: 8px !important;'></span></td></tr>

";
    
}
    echo  '  <table data-v-b74b9dc6=""><thead data-v-b74b9dc6=""><tr data-v-b74b9dc6=""><th data-v-b74b9dc6="">Period</th><th data-v-b74b9dc6="">Price</th><th data-v-b74b9dc6="">Number</th><th data-v-b74b9dc6="">Result</th></tr><tr data-v-b74b9dc6="" style="border: 0px; width: 100%; display: none;"><th data-v-b74b9dc6="" colspan="4" style="height: 0px; line-height: 0;"><div data-v-b74b9dc6="" class="table_loading"><div data-v-b74b9dc6="" class="v-progress-linear__bar"><div data-v-b74b9dc6="" class="
    v-progress-linear__bar__indeterminate
    v-progress-linear__bar__indeterminate--active
  "><div data-v-b74b9dc6="" class="
      v-progress-linear__bar__indeterminate
      long
      primary
    "></div><div data-v-b74b9dc6="" class="
      v-progress-linear__bar__indeterminate
      short
      primary
    "></div></div></div></div></th></tr></thead><tbody data-v-b74b9dc6="">
'. $dataRow.'</tbody></table>
<div data-v-b74b9dc6="" class="pagination"><ul data-v-b74b9dc6="" class="page_box"><li data-v-b74b9dc6="" class="page"><span data-v-b74b9dc6="">'.(1+($page-1)*10).'-'.($page*10).'</span> of '.$number_of_page.'
              </li><li data-v-b74b9dc6="" class="page_btn">';
              if ( $page ==1 ) {  
    echo'<a href="#"><i data-v-b74b9dc6="" class="van-icon van-icon-arrow-left"><!----></i></a><a href="win?page='.($page+1).'"><i data-v-b74b9dc6="" class="van-icon van-icon-arrow"><!----></i></a></li></ul></div>';
} else {  
     echo'<a href="win?page='.($page-1).'"><i data-v-b74b9dc6="" class="van-icon van-icon-arrow-left"><!----></i></a><a href="win?page='.($page+1).'"><i data-v-b74b9dc6="" class="van-icon van-icon-arrow"><!----></i></a></li></ul></div>';
}  
             





?>
