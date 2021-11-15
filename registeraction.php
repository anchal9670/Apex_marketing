<?php

include('connect.php');
$errors = array();
    if (isset($_POST['register'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $mob=$_POST['mobile'];
        $password=$_POST['password'];
          // first check the database to make sure 
          // a user does not already exist with the same username and/or email
          $user_check_query = "SELECT Email FROM login WHERE email='$email'  LIMIT 1";
          $result = mysqli_query($conn, $user_check_query);
          $user = mysqli_fetch_assoc($result);
          
          if ($user) { // if user exis
        
            if ($user['Email'] === $email) {
              array_push($errors, "email already exists");
             
              echo '<script type ="text/JavaScript">';  
              echo 'alert("email already exists")';  
              echo '</script>';
              echo"<script>
                window.location.href='register.php';
                </script>
                ";
            }
            // if ($user['Id'] !=$sponsor) {
            //      array_push($errors, "sponsor  id not  exists");
            //      echo "sponsor  id not  exists";
            // }
          }

        
        if (count($errors) == 0)
        {
            $sql="INSERT INTO login(Name,Email,mob,password) VALUES 
            ('$name','$email','$mob','$password');";
            $result=mysqli_query($conn,$sql);
            if($result){
                echo '<script type ="text/JavaScript">';  
                echo 'alert("You are successfully Register")';  
                echo '</script>';
                echo"<script>
                window.location.href='index.php';
                </script>
                ";
             
            }
            else{
                echo '<script type ="text/JavaScript">';  
                echo 'alert("ERROR -found something wrong")';  
                echo '</script>';
                echo"<script>
                window.location.href='register.php';
                </script>
                ";
            }
        }

    }

?>