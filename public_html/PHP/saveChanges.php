<?php
session_start();

require 'connection.php';

$sql;

if(!empty($_POST['submitBtn'])){
    //The user details
    $user_id = $_SESSION['user_id'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    
    
    $sql = "UPDATE `registered-users` SET `fname`='$fname', `lname`='$lname' ,`email`='$email' WHERE `user_id`=$user_id";
    
    if($con->query($sql) === true){
            alert("Your details have been updated");
            
            //Reset session variables with new values
            $_SESSION['fname']=$fname;
            $_SESSION['lname']=$lname;
            $_SESSION['email']=$email;
            
            
            header("refresh: 0.1; url=../myDetails.php");
        }else{
             echo "ERROR: Could not able to execute $sql. " . $con->error;
        }
}else{
    alert("Table data not received");
}

?>

