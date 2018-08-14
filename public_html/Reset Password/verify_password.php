<!DOCTYPE HTML>
<html>
    <head>
        <title>Verify Password</title>
        <link rel="stylesheet" type="text/css" href="../css/Login Styling.css">
        <!--        All jQuery needs to be linked with this...-->
        <script type="text/javascript" src="js/jquery-3.3.1.js"></script>    
    </head>   
    
    <body>
        
        <div class="loginBox">
            <img class="avatar" src="../Pictures/avatar3.png" alt="Avatar"/>   
         <!--I need a target and probably a method on click()-->   
         
         <form id="loginForm" method="POST">
             
             <p class="heading">Verify Password</p>
             
             <label for="password">Current Password</label>
             <input type="password" name="password" id="password" placeholder="Enter your current password" required>
             
             <br><br>
            <input type="submit" name="submitBtn" id="submitBtn" value="Verify Password"/>
            
            </form>
         </div>
    </body>
    
</html>

<?php
   session_start();
  //Connect
   require '../PHP/connection.php';
   
   $email = $_SESSION['email'];
   
   
if ( ! empty( $_POST ) ) {
    if ( !empty($_POST['submitBtn'])) {
        // Getting submitted user data from database
        
        $stmt = $con->prepare("SELECT * FROM `registered-users` WHERE `email` = ?");
        $stmt->bind_param('s', $email);
        $stmt->execute();
        $result = $stmt->get_result();
    	$user = $result->fetch_object();
    		
    if(mysqli_num_rows($result)==1){
            // Compare the password hashes 
            if ( password_verify( $_POST['password'], $user->password ) ) { 
                    alert("Password OK");
                    header("location: reset_password.php");
                    
            }else{
                alert("Invalid password");
                header("refresh:0.1;");
            }   
        }else{
            alert("No results");
        }
   }
}
    ?>