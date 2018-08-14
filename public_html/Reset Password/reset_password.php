<!DOCTYPE html>
<html>
<head>
    <title>Reset Password</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" type="text/css" href="../css/Login Styling.css">
    <link type="text/css" href="css/navigation-bar.css" rel="stylesheet"/>
<!--    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">-->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    
    <script type="text/javascript">
        
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
        
    </script>
    
</head>
<body>


    <img class="avatar" src="img/avatar.png" alt="Avatar"/>
    <!--I need a target and probably a method on click()-->

    <div class="loginBox">
            <img class="avatar" src="../Pictures/avatar3.png" alt="Avatar"/>   
         <!--I need a target and probably a method on click()-->   
         
         <form id="loginForm" method="POST" action='reset_password_action.php'>
             
             <p class="heading">Set new password</p>
             
             <label for="password">New Password</label>
             <input type="password" name="password" id="password" placeholder="Enter your new password" required>
             
            <br>
             <label for="password">Confirm Password</label>    
             <input type="password" name="confirmPassword" id="confirmPassword" placeholder="Confirm your new password" required>
            
            <br>
            <input type="submit" name="submitBtn" id="submitBtn" value="Confirm Reset" onclick="checkPwd()"/>
            
            </form>
         
        </div>
</body>
</html>

