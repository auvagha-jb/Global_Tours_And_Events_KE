<!DOCTYPE HTML>
<html>
    <head>
        <title>Reset Password</title>
        <link rel="stylesheet" type="text/css" href="../css/Login Styling.css">
        <!--        All jQuery needs to be linked with this...-->
        <script type="text/javascript" src="js/jquery-3.3.1.js"></script>    
    </head>   
    
    <body>
        
        <div class="loginBox">
            <img class="avatar" src="../Pictures/avatar3.png" alt="Avatar"/>   
         <!--I need a target and probably a method on click()-->   
         
         <form id="loginForm" method="POST">
             
             <p class="heading">Verify Reset Code</p>
             
             <label for="username">Reset Code</label>
             <input type="text" name="reset_code" id="username" placeholder="Enter the reset code" required>
             
             <br><br>
            <input type="submit" name="submitBtn" id="submitBtn" value="Verify Reset Code"/>
            
            </form>
         
             <p id="link"> 
                 <a href="send_email2.php" class="linksBelow">Didn't received the code? Try again</a>
            </p>
         </div>
    </body>
    
</html>


<?php

    //Always start with this 
    session_start();

  //Verify the username 
   require '../PHP/connection.php';
            
if ( ! empty( $_POST ) ) {
    if ( !empty($_POST['submitBtn'])) {
        // Getting submitted user data from database
        
        $reset_code = $_POST['reset_code'];
        $email = $_SESSION['email'];
        
        $stmt = $con->prepare("SELECT * FROM `registered-users` WHERE `email` = ? AND reset_password = ?");
        $stmt->bind_param('ss', $email, $reset_code);
        $stmt->execute();
        $result = $stmt->get_result();
    	$user = $result->fetch_object();
    		
        //To ensure that the reset code matches and that the reset code was not set to zero
        if(mysqli_num_rows($result)==1 && $reset_code!==0){
            
            //Generate a random number for a reset code
            $reset="";
            
            $sql = "UPDATE `registered-users` SET reset_password = '$reset' WHERE email = '$email'";
            
            if($con->query($sql) === true){
                alert("Reset code back to default");
                echo 'RESET CODE set';
            }
            
            //redirect to the reset password page
            header("location: reset_password.php");
            
               
        }else{
            alert("Invalid reset code");
            header("refresh: 0.1; url=verify_resetcode.php");
        }
        
    }
    
}
     
    ?>