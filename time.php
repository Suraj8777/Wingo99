

 
<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'somu');
define('DB_PASSWORD', 'somu');
define('DB_NAME', 'somu');


// Try connecting to the Database
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

//Check the connection
if($conn == false){
    dir('Error: Cannot connect');
}
   
    $sql = "SELECT * FROM record WHERE id='1'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_object($result);
    
?>
  
  <div id="data"></div>
 
<input type="hidden" id="date" value="<?php echo $row->created_at; ?>">


 <script>
 function func() {
        var dateValue = document.getElementById("date").value;
        console.log(dateValue);
 
        var date = Math.abs((new Date().getTime() / 1000).toFixed(0))-20100;
        var date2 = Math.abs((new Date(dateValue).getTime() / 1000).toFixed(0));
        console.log(date);
        console.log(date2);
 
        var diff = date2 - date;
        console.log(diff);
 
    
        var hours = Math.floor(diff / 3600) % 24;
        var minutes = Math.floor(diff / 60) % 60;
        var seconds = diff % 60;
 
       
  
        var hoursStr = hours;
        if (hours < 10) {
            hoursStr = "0" + hours;
        }
  
        var minutesStr = minutes;
        if (minutes < 10) {
            minutesStr = "0" + minutes;
        }
  
        var secondsStr = seconds;
        if (seconds < 10) {
            secondsStr = "0" + seconds;
        }
 
        if ( hours < 0 && minutes < 0 && seconds < 0) {
            daysStr = "00";
            hoursStr = "00";
            minutesStr = "00";
            secondsStr = "00";
 
            console.log("close");
            if (typeof interval !== "undefined") {
                clearInterval(interval);
            }
        }
 
        document.getElementById("data").innerHTML = minutesStr + ":" + secondsStr;
    }
 
    func();
    var interval = setInterval(func, 1000);
    </script>