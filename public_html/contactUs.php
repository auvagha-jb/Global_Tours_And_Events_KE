<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Contact Us</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/contactUs.css">
        <link rel="stylesheet" type="text/css" href="css/navigation-bar.css">
<!--         <link type="text/css" href="css/international.css" rel="stylesheet"/>
        <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Raleway">-->
    </head>
    <body>
        
<!--        Navigation Bar-->
<?php require './nav-bar.php';?>
        
<div class="division"></div>
        <div class="title">Contact us</div>
        
        <div class="row">
            
                    
        <div class="column">
            <form name="contact-form" action="PHP/contactUs.php" method="post">
                    <h3>Email Us</h3>
                    <input type="text" name="name" placeholder="Your name" required>
                    <input type="email" name="email_address" placeholder="Your email address" required>
                    <input type="text" name="subject" placeholder="Subject" required>
                    <textarea name="body" placeholder="Message" required></textarea>
                    <button type="submit" name="submitBtn">SEND</button>
                </form>
        </div>
            
            
            
        <div class="column">

            <h3>Call us</h3><br>
            <h4>Safaricom</h4>
            +254 722 309 497<br>
            +254 789 309 458<br>
            <br>
            <h4>Airtel</h4>
            +254 789 654 654<br>
            +254 789 654 655<br>
            <br>
            <h3>Calling hours</h3>
            <p>Weekdays: 9:00 am to 5:00 pm</p>
            <p>Saturdays: 10:00 am to 2:00 pm</p>
            Unavailable on Sundays and Public holidays
            <br>
                 
           </div>
            
        </div>
        
   

<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-12">
                <ul class="menu">
                    <span>Menu</span>
                    <li>
                        <a href="#">Home</a>
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

<div class="copyright">
    <div class="container">

        <div class="row text-center">
            <p>Copyright © 2018 All rights reserved</p>
        </div>

    </div>
</div>
    </body>
</html>
