// Function to toggle the plus menu into minus
function myFunction(x) {
    x.classList.toggle("fa fa-bars");
}
// Function to toggle the bar
function apex() {
    var x = document.getElementById("menus");
    var y = document.getElementById("content");

    if (x.style.display === "block") {
        x.style.display = "none";
        y.style.display ="block";
        document.getElementById("background").classList.remove('background1');
        document.getElementById("background").classList.add('background');

    } else {
        x.style.display = "block";
        y.style.display ="none";
        document.getElementById("background").classList.remove('background');
        document.getElementById("background").classList.add('background1');
        
       
    }
   
}
//login
function login(){
        location.href = "login.php";
    }
//register
function register(){
        location.href = "register.php";
    }
//payment gatway
