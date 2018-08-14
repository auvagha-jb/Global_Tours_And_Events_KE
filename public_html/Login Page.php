<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Login</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link rel="stylesheet" type="text/css" href="css/Login Styling.css">
        <link type="text/css" href="css/navigation-bar.css" rel="stylesheet"/>

    </head>
    <body>
        <div id="falseNav">
            
        </div>
        
<?php include './nav-bar.php';?>
        
        <div class="loginBox">
            <img class="avatar" src="Pictures/avatar3.png" alt="Avatar"/>   
         <!--I need a target and probably a method on click()-->   
         
         <form id="loginForm" method="POST" action="PHP/login.php">
             
             <p class="heading">Login</p>
             
             <label for="username">Username</label>
            
             <input type="text" name="username" id="username" placeholder="Enter your email address" value="<?php 
             if(isset($_SESSION['username'])){
                 echo $_SESSION['username'];
             }
             ?>" required>
             
            <br>
             <label for="password">Password</label>    
             <input type="password" name="password" id="password" placeholder="Enter Password" required>
            
            <br>
            <input type="submit" name="submitBtn" id="submitBtn" value="Log in "/>
            
            </form>
         
         <p id="link">
             
             <a href="Reset Password/verify_email.php" class="linksBelow">Forgot your password?</a>
             <br><br>
             <a href="register.php" class="linksBelow">New here? Create an account</a>
         </p>
         
        </div>
        
    </body>
</html>
