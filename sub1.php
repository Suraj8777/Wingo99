<?php
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login");
    exit;
}
require_once "config.php";
$sql = "SELECT  password,balance FROM users WHERE username='".$_SESSION['username']."'";
$result = $conn->query($sql);
$row = mysqli_fetch_array($result);
$withdraw="";
$withdrawerr="";
                    

if (empty($_POST["withdraw"] )== false){
if ($_POST["password"]  ==  $row['password']){


                   if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    if (empty($_POST["withdraw"])) {
                        echo '<div data-v-51265586="" class="text_field">
<p data-v-51265586="" style="text-align:center;" >Please enter the amount to withdraw</p>
</div>';
                      
                    } else {
                      $withdraw1 = $_POST['withdraw'];
                      $withdraw = $withdraw1-(0);
                    }

                    
                  
                  }
                  if($withdraw == ""){
                    echo '<div data-v-51265586="" class="text_field">
                    <p data-v-51265586="" style="text-align:center;" >Please enter the amount to withdraw </p>
                    </div>';
                  }elseif($row['balance']<=$withdraw1){
                       header("location: recharge#");
                  }else{

                  $newbalance = $row['balance'] - $withdraw1;
                   $sql = "UPDATE users SET withdraw ='$withdraw', balance = '$newbalance' WHERE username='".$_SESSION['username']."' ";

                  if ($conn->query($sql) === TRUE) {
                    header("location: withdrawalrecord#");
                  
                  } else {
                    echo "Error updating record: " . $conn->error;
                  }
                 $sql = "INSERT INTO record (username, withdraw) VALUES ('".$_SESSION['username']."', $withdraw)";
                
                if ($conn->query($sql) === TRUE) {
                 
                
                } else {
                  echo "Error updating record: " . $conn->error;
                }


                  }
                 
                }else{
                    echo '<div data-v-51265586="" class="text_field">
<p data-v-51265586="" style="text-align:center;" >Incorrect Password</p>
</div>';
                }
              
                
             
           
         
    }
                $conn->close();
?>