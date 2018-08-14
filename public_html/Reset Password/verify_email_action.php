<?php
    session_start();
  //Verify the username 
   require '../PHP/connection.php';
            
if ( ! empty( $_POST ) ) {
    if ( !empty($_POST['submitBtn'])) {
        // Getting submitted user data from database
        $email = $_POST['username'];
        
        $stmt = $con->prepare("SELECT * FROM `registered-users` WHERE `email` = ?");
        $stmt->bind_param('s', $email);
        $stmt->execute();
        $result = $stmt->get_result();
    	$user = $result->fetch_object();
    		
        if(mysqli_num_rows($result)==1){ 
            
             $_SESSION['email'] = $email;
             
            //redirect to the verify reset code page
            header("location: send_email2.php");
               
        }else{
            alert("Invalid email address or username");
            header("refresh:0.1; url=verify_email.php");
        }
        
    }
    
}
    ?>