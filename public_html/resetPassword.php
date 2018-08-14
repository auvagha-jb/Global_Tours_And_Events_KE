<!DOCTYPE HTML>
<html>
    <head>
        <title>Reset Password</title>
        <link rel="stylesheet" type="text/css" href="css/Login Styling.css">
        <!--        All jQuery needs to be linked with this...-->
        <script type="text/javascript" src="js/jquery-3.3.1.js"></script>

        <script type="text/javascript">
            
            function hideAll(){
//                $('#username').hide();
            }
            
            
            $(document).ready(function(){
           
            });
            
            
            function checkPwd(){
                 function checkPwd(){
            var pwd = document.getElementById('password').value;
            var confirmPwd = document.getElementById('confirmPassword').value;
            
            if(pwd!==confirmPwd)
            {
                document.getElementById('password').value="";
                document.getElementById('confirmPassword').value="";
                alert("The passwords do not match!");
                
            }
            
            else if(pwd.length<6){
                document.getElementById('password').value="";
                document.getElementById('confirmPassword').value="";
                alert("The password is too short!");
            }
            
        }
    }
        
        
        
        </script>
        
        
    </head>   
    
    <body>
        
        <!-- Navigation Bar-->
        <?php require './nav-bar.php';?>
        
        <div class="loginBox">
            <img class="avatar" src="Pictures/avatar3.png" alt="Avatar"/>   
         <!--I need a target and probably a method on click()-->   
         
         <form id="loginForm" method="POST" action="PHP/login.php">
             
             <p class="heading">Reset Password</p>
             
             <label for="username">Email Address</label>
             <input type="text" name="username" id="username" placeholder="Enter your email address" value="" required>
             
             <br><br>
            <input type="submit" name="submitBtn" id="submitBtn" value="Verify Username"/>
            
            </form>
        
        </div>
       
    </body>
    
    
    
</html>