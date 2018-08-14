<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
<head>
    <title>Registration</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" type="text/css" href="css/registration.css">
    <link type="text/css" href="css/navigation-bar.css" rel="stylesheet"/>
    <script src="js/jquery-3.3.1.js"></script>
    <!--
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>-->
    
    <script type="text/javascript">
        
        function checkPwd(){
            var pwd = document.getElementById('password').value;
            var confirmPwd = document.getElementById('confirmPassword').value;
            
            if(pwd !== confirmPwd)
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
        
        
        
        $(document).ready(function(){
           
            //Boolean to check whether the authentication code is correct 
            var correct = false;
           
            $('.code').hide();
            
            $('#user_type').change(function(){
                var user_type = $("#user_type").val();
                
                if(user_type === "Admin" ||user_type === "Super User"){
                    $('.code').slideDown();
                }else{
                    $('.code').slideUp();
                }
           }); 
           
           
     
           //Authenticate the admin code on focus out
           $("#code").focusout(function(){
              var code = $(this).val();
              var user_type = $("#user_type").val();
              
              //Outline:"action-url" ,{name: value}, function(data, status){});
                $.post("PHP/CreateAccount.php", {code: code, user_type: user_type}, function(data,status){
                 
                   if(data === "Regular"){
                       alert("Incorrect admin code.");
                       correct = false;
                   }else{
                       correct = true;
                   }
                }); 
           });
           
           
           $("#registrationForm").submit(function(e){
           var user_type = $("#user_type").val();
               
           //If the user tries to regiser as admin || Super User with the wrong code, prevent form submission   
            if(user_type === "Admin" || user_type === "Super User"){
                if(!correct){
                    alert("Cannot register as "+user_type+". Enter correct code or register as regular user");
                    e.preventDefault();
                }
            }
           });
           
        });
        
    </script>
    
</head>
<body>

<!--Navigation bar  -->
<?php require './nav-bar.php';?>

<div class="registrationBox" >
    <img class="avatar" src="img/avatar.png" alt="Avatar"/>
    <!--I need a target and probably a method on click()-->

    <form id="registrationForm" method="POST" action="PHP/CreateAccount.php">

        <p class="heading">Registration</p>
        <label for="firstname">First Name</label>
        <input type="text" name="firstname" id="firstname" placeholder="Enter your first name" required>
        <br>

        <label for="lastname">Last Name</label>
        <input type="text" name="lastname" id="lastname" placeholder="Enter your last name" required>
        <br>

        <label for="email">Email</label>
        <input type="email" name="email" id="email" placeholder="Enter your email" required>
        <br>
        
        <label>User type</label>
        <select name="user_type" id="user_type" required>
            <option value="Regular">Regular</option>
            <option value="Admin">Admin</option>
            <option value="Super User">Super User</option>
        </select>
        <br>
        <label for="code" class="code">Authentication Code</label>
        <input type="password" name="code" id="code" class="code" placeholder="Enter authentication code">
        <br>

        <?php
            require './PHP/connection.php';
            //Authenticate the admin code
            
        ?> 
        <label for="password">Password</label>
        <input type="password" name="password" id="password" placeholder="Enter your password" required>
        <br>

        <label for="confirmPassword">Confirm Password</label>
        <input type="password" name="confirmPassword" id="confirmPassword" placeholder="Retype your password" required>
        <br>

        <input type="submit" name="submitBtn" id="submitBtn" value="Register" onclick="checkPwd()"/>

    </form>

    <p id="link">
        <a href="Login Page.html" class="linksBelow">Already have an account? Sign in.</a>
    </p>

</div>

<div class="search-text">
    <div class="container">
        <div class="row text-center">

            <div class="form">
                <h4>SIGN UP TO OUR NEWSLETTER</h4>
                <form id="search-form" class="form-search form-horizontal">
                    <input type="text" class="input-search" placeholder="Email Address">
                    <button type="submit" class="btn-search">SUBMIT</button>
                </form>
            </div>

        </div>
    </div>
</div>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-12">
                <ul class="menu">
                    <span>Menu</span>
                    <li>
                        <a href="home.html">Home</a>
                    </li>

                    <li>
                        <a href="#">About</a>
                    </li>

                    <li>
                        <a href="#">Blog</a>
                    </li>

                    <li>
                        <a href="#">Gallery </a>
                    </li>
                </ul>
            </div>

            <div class="col-md-4 col-sm-6 col-xs-12">
                <ul class="address">
                    <span>Contact</span>
                    <li>
                        <i class="fa fa-phone" aria-hidden="true"></i> <a href="#">Phone</a>
                    </li>
                    <li>
                        <i class="fa fa-map-marker" aria-hidden="true"></i> <a href="#">Adress</a>
                    </li>
                    <li>
                        <i class="fa fa-envelope" aria-hidden="true"></i> <a href="#">Email</a>
                    </li>
                </ul>
            </div>


        </div>
    </div>
</footer>
</body>
</html>

