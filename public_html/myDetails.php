<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>My Details</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/verifypasswordcss.css">
        <link rel="stylesheet" type="text/css" href="css/navigation-bar.css">
        <script type="text/javascript" src="JS/jquery-3.3.1.js"></script>
        <script type="text/javascript">
            //Detects if form data has been changed
            var changed = false;
            $(document).ready(function(){
               $("form").change(function(){
                  $("form").data("changed", true);
                  changed = true;
               });
              
                $("form").submit(function(e){ 
                    if(!changed){
                        e.preventDefault(e); 
                        alert("No changes were made");
                    }
                });
                
            });
        </script>
         
    </head>
    
    <body>
      
        <?php include './nav-bar.php';?>
        
    <?php
    //Get the user's details
        //Session started in nav-bar.php

        require './PHP/connection.php';        
        $user_id = $_SESSION['user_id'];
        $fname = $_SESSION['fname'];
        $lname = $_SESSION['lname'];
        $email = $_SESSION['email'];
//                    date_default_timezone_set('Africa/Nairobi');
//                    $access_time = date("h:i:sa");
?>
            
        <div class="registrationBox">
            
            <form id="registrationForm" name= "registrationForm" method="POST" action="PHP/saveChanges.php">

        <p class="heading">My Details</p>
        <label for="fname">First Name</label>
        <input type="text" name="fname" id="fname" value="<?php echo $fname;?>" required>
        <br/>
        
        <label for="lname">Last Name</label>
        <input type="text" name="lname" id="lname" value="<?php echo $lname;?>" required>
        <br/>

        <label for="email">Email</label>
        <input type="email" name="email" id="email" value="<?php echo $email;?>" required>
        <br>
        
        <div id="link">
             <a href="Reset Password/verify_password.php" class="linksBelow">Change password</a>
        </div>
        <br>

        <input type="submit" name="submitBtn" id="submitBtn" value="Update my details"/>
        
    </form>

            
    </div>
        
    </body>
</html>
