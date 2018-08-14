<?php
    session_start();
    
    require '../PHPMailer-master/PHPMailerAutoload.php';
    require '../PHP/connection.php';
    
    alert("Sending email...");
    $email = $_SESSION['email'];
    $reset_code = generateCode();
    $to = "$email";
    $subject = "Password Reset Code";
    $message = "Your password reset code is: ".$reset_code.". \n\nThank you for choosing to travel with Global Tours and Events KE.";
//    $from = "jerrybenjamin007@gmail.com";
   
   
   $mail = new PHPMailer();
   $mail ->IsSmtp(); 
   $mail ->SMTPDebug = 0; //To enable or disable debug
   $mail ->SMTPAuth = true; //Gmail requires authentication
   $mail ->SMTPSecure = 'ssl'; 
   $mail ->Host = "smtp.gmail.com"; //SMTP host
   $mail ->Port = 465; // Port No. or 587 id the former doesn't work
   $mail ->IsHTML(false); //If HTML format set true 
   $mail ->Username = "jerrybenjamin007@gmail.com";
   $mail ->Password = "Benja@2017!99#";
   $mail ->SetFrom("jerrybenjamin007@gmail.com");
   $mail ->Subject = $subject;
   $mail ->Body = $message;
   $mail ->AddAddress($to);

   if(!$mail->Send())
   {
       alert("Email not sent");
       header("refresh: 0.1; url=verify_resetcode.php");
   }
   else
   {
       alert("Email sent. Check your inbox");
       header("refresh: 0.1; url=verify_resetcode.php");
   }

   
   function generateCode(){
       
            $con = new mysqli("localhost", "root", "", "global_tours_and_events_ke");
            $email=$_SESSION['email'];
            
            //Generate a random number for a reset code
            $reset_code = mt_rand();
            $sql = "UPDATE `registered-users` SET reset_password = '$reset_code' WHERE email = '$email'";
            
            if($con->query($sql) === true){
                alert("Password Reset Code Sent");
            }
            
            return $reset_code;
   }
   
   
?>