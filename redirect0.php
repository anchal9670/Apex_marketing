<?php
session_start();
if($_SESSION["username"] != true){
    
    header("Location: login.php");
    exit;
}
if(empty($_SESSION['username'])):
    header('Location:login.php');
endif;
?>