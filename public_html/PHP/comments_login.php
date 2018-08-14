<!DOCTYPE HTML>
<?php
    require './connection.php';
    session_start();
    
    
        if(isset($_POST['submitBtn'])){
            // Getting submitted user data from database
            $stmt = $con->prepare("SELECT * FROM `registered-users` WHERE `email` = ?");
            $stmt->bind_param('s', $_POST['username']);
            $stmt->execute();

            //Get the array of results then have an object to fetch results based on column
            $result = $stmt->get_result();
            $row = $result->fetch_object();
    	
            if(mysqli_num_rows($result)==1){
                $user_type = $row->user_type;
                
                // Compare hashes, to confirm the password is correct
                if ( password_verify($_POST['password'], $row->password ) ) {
                        $_SESSION['user_id'] = $row->user_id;
                        $_SESSION['fname'] = $row->fname;
                        $_SESSION['lname'] = $row->lname;
                        $_SESSION['email'] = $row->email;
                        $_SESSION['user_type'] = $user_type;

                        alert("Login Success");

                        //Check the user_type
//                        if($user_type == "Admin" || $user_type == "Super User"){
//                            header("refresh:0.1; url=../ToursManagement/admin-home.php");
//                            exit();
//                        }


                         //Redirecting to the page where the user was so they can comment
                        $url = $_SESSION['url'];
                        ?>

                <script>
                     var url = <?php echo $url; ?>
                     console.log(url);
                </script>
                <?php
                        header("location: $url");
                  
                }else{
                    alert("Invalid password");
                     $_SESSION['username'] = $row->email;
                     $username=$_SESSION['username'];
                    header("refresh:0.1; url=comments_login.php");
                }

            }else{
                alert("Invalid username");
                header("refresh:0.1; url=comments_login.php");
            }
        }
?>


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
        <link rel="stylesheet" type="text/css" href="../css/Login Styling.css">
    </head>
    <body>
        <div id="falseNav">
            
        </div>
        
<?php include './nav-bar.php';?>
        
        <div class="loginBox">
            <img class="avatar" src="../Pictures/avatar3.png" alt="Avatar"/>   
         <!--I need a target and probably a method on click()-->   
         
         <form id="loginForm" method="POST">
             
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
             
             <a href="../Reset Password/verify_email.php" class="linksBelow">Forgot your password?</a>
             <br><br>
             <a href="../register.php" class="linksBelow">New here? Create an account</a>
         </p>

        </div>        
    </body>
</html>
