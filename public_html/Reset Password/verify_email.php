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
         
         <form id="loginForm" method="POST" action="verify_email_action.php">
             
             <p class="heading">Verify Email</p>
             
             <label for="username">Email Address</label>
             <input type="text" name="username" id="username" placeholder="Enter your email address" required>
             
             <br><br>
            <input type="submit" name="submitBtn" id="submitBtn" value="Verify Username"/>
            
            </form>
         </div>
    </body>
    
</html>


