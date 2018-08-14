<?php
    require '../PHP/connection.php';
    session_start();
    
    alert("Sending email...");

    $email = $_SESSION['email'];
    $reset_code = $_SESSION['reset_code'];
    
    
    $to = "$email";
    $subject = "Reset Password Code ";
    $message = "Your password reset Password code is: ".$reset_code;
    $from = "jerrybenjamin007@gmail.com";
    
    //Sending the email
    if(mail($to, $subject, $message)){
        alert("Email sent. Check your inbox");
        header("refresh:0.1; url=verify_resetcode.php");
    }else{
        alert("Error sending email. Please try again.");
    }
    
?>