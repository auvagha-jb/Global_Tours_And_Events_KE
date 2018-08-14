<?php

    require '../PHPMailer-master/PHPMailerAutoload.php';
    require '../PHP/connection.php';
    
   
    
    
    if(isset($_POST['submitBtn'])){
        alert("Sending email...");
        $name = $_POST['name'];
        $from = $_POST['email_address'];
        $subject = $_POST['subject'];
        $body = $_POST{'body'};
    
        
        $to = "jerrybenjamin007@gmail.com";
        $headers = "From: ".$from;
        $text = "You received a message from ".$name.".\n\n".$body; 
    }
    
   $mail = new PHPMailer();
   $mail ->IsSmtp(); 
   $mail ->SMTPDebug = 0; //To enable or disable debug
   $mail ->SMTPAuth = true; //Gmail requires authentication
   $mail ->SMTPSecure = 'ssl'; 
   $mail ->Host = "smtp.gmail.com"; //SMTP host
   $mail ->Port = 465; // Port No. or 587 id the former doesn't work
   $mail ->IsHTML(true); //If HTML format set true 
   $mail ->Username = $from;
   $mail ->Password = "Benja@2017!99#";
   $mail ->SetFrom($from);
   $mail ->Subject = $subject;
   $mail ->Body = $body;
   $mail ->AddAddress($to);

   if(!$mail->Send())
   {
       alert("Mail Not Sent");
   }
   else
   {
       alert("Mail Sent");
       header("refresh: 0.1; url=../home.php");
   }

    
?>