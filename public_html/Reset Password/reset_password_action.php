<?php
    require '../PHP/connection.php';
    session_start(); //Always needed when using session variables
    
    $email = $_SESSION['email'];
    $password = $con->real_escape_string($_REQUEST['password']);
    $hash=password_hash($password, PASSWORD_DEFAULT);
        
    $sql = "UPDATE `registered-users` SET password = '$hash' WHERE email = '$email'";
    
    if($con->query($sql) === true){
            alert("Password updated succesfully");
           
            //If package had  been chosen
            if(isset($_SESSION['package'])){
                header('location:../book.php');
            }else{
                 header("location:../home.php");
            }
            
    }else{
        echo $con->error;
    }
?>
