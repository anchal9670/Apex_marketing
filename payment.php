<?php
session_start();
if(isset($_POST['amt']) && isset($_POST['name'])){
    $amt=$_POST['amt'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $payment_status="pending";
    $added_on=date('Y-m-d h:i:s');
    
   
}


if(isset($_POST['payment_id']) && isset($_SESSION['OID'])){
    $payment_id=$_POST['payment_id'];
   
}
?>