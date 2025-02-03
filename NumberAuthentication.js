
window.onload=function () {


     // Get the modal
     var modal = document.getElementById("modal");

     // Get the button that opens the modal
     var btn = document.getElementById("terms");

     // Get the <span> element that closes the modal
     var span = document.getElementById("close");

     // When the user clicks the button, open the modal 
     btn.onclick = function () {
         modal.style.display = "";
     }

     // When the user clicks on <span> (x), close the modal
     span.onclick = function () {
         modal.style.display = "none";
     }   

  };

    

function codeverify() {
    
        document.getElementById("createuser").submit();
        var x = document.getElementById("alert");
        x.className = "show";
        setTimeout(function () { x.className = x.className.replace("show", ""); }, 3000);
       
}



