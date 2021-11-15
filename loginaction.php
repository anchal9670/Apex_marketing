<?php

include("connect.php");


if (isset($_POST['submit'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $user_check_query = "SELECT Email ,password FROM login WHERE email='$username'  LIMIT 1";
    $result = mysqli_query($conn, $user_check_query);
    $user = mysqli_fetch_assoc($result);
    
    if ($user) { // if user exis
        
        if ($user['password']===$password) 
        {
             session_start();
            // Storing username in session variable
            
            $_SESSION['username'] = $username;
         
            // Page on which the user is sent
            // to after logging in
            
            echo"<script>
            
            window.location.href='home.php';
            </script>
            ";
            
            
           
            
        }
        else
        {
            echo '<script type ="text/JavaScript">';  
            echo 'alert("Password is incorrect")';  
            echo '</script>'; 
            echo"<script>
            
            window.location.href='login.php';
            </script>
            ";
        }
    }
    else{
            echo '<script type ="text/JavaScript">';  
            echo 'alert("email is incorrect or not register")';  
            echo '</script>'; 
            echo"<script>
            
            window.location.href='login.php';
            </script>
            ";
    }
}


?>