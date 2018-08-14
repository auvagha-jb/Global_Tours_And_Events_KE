<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Lodging Safaris</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="camping-lodging.css">
        <link rel="stylesheet" type="text/css" href="../css/navigation-bar.css">
<!--        My jQuery and javascript files-->
        <script type="text/javascript" src="../js/jquery-3.3.1.js"></script>
        <script src="../js/myJs.js"></script>
    
    </head>
    <body>
        
        
        <!-- Navigation Bar-->
<?php require './LocalSafaris-nav-bar.php';?>

        
<form name="booking" method="post" action="../PHP/login.php">
    
    <div class="row">
        <div class='pageTitle'><h2>Kenya Lodge Safaris</h2></div>
        
    <div class="column">
        <img src="../Pictures/Lodging Safaris/lake-nakuru-flamingoes.jpg" alt="">
        <h3 id="_11_text">4 Day Lake Nakuru & Maasai Mara Lodge Safari</h3>
        <p>
            Luxurious safari adventure to the famous Maasai Mara, combined with Lake Nakuru known for massive numbers of flamingoes
            <span><br>From <span id="_11_price">14500</span> Kshs per person</span>
        </p>
        <button id="_11">BOOK NOW</button>
    </div>
    
    
    <div class="column">
        <img src="../Pictures/Lodging Safaris/maasai-mara-lions-tree-national-reserve-kenya-image.jpg" alt="sgr">
        <h3 id="_12_text">5 Days Lake Nakuru & Maasai Mara Lodge Safari</h3>
            <p>Safari to the world famous bird sanctuary of Lake Nakuru, then to Kenya's greatest concentration of Game - The Mara
            <span><br>From <span id="_12_price">16000</span> Kshs per person</span>
            </p>
        <button id="_12">BOOK NOW</button>
    </div>
    
    
    <div class="column" style="background-color:white;">
        <img src="../Pictures/Lodging Safaris/amboseli-elephant-family.jpg" alt=''>
        <h3 id="_13_text">7 Days Maasai Mara, Lake Nakuru & Amboseli | Lodge Safari</h3>
        <p>Adventure to the famous vast plains of Mara, Lake Nakuru - ideal for bird-watching enthusiasts - then to Amboseli, renowned for its herds of elephants
        <span><br>From <span id="_13_price">18500</span> Kshs per person</span>
        </p>
        <button id="_13">BOOK NOW</button>
    </div>
</div>
         
        <br><br>
        <!-- Row 2 -->
    
    <div class="row">
    <div class="column">
        <img src="../Pictures/Lodging Safaris/maasai-mara-zebras.jpg" alt="">
        <h3 id="_21_text">8 Days Amboseli, Lake Nakuru & Maasai Mara | Lodge Safari</h3>
            <p>Luxury lodge safari adventure to some of the best destinations in Kenya. Big five in Mara, herds of elephants in Amboseli & thousands of flamingoes in Lake Nakuru
            <span><br>From <span id="_21_price">20000</span> Kshs per person</span>
            </p>
        <button id="_21">BOOK NOW</button>
    </div>
        
        
    <div class="column">
        <img src="../Pictures/Lodging Safaris/photographic-safari-kenya.jpg" alt=''>
        <h3 id="_22_text">11 Days Kenya Wildlife Photographic Safari</h3>
        <p>Adventurous game viewing & photographing holiday safaris. Best destinations for fantastic shots
            <span><br>From <span id="_22_price">23500</span> Kshs per person</span>
        </p>
        <button id="_22">BOOK NOW</button>
    </div>
</div>
        <input type="hidden" id="package" name="package">
        <input type="hidden" id="price" name="price">
    
</form>        
  
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
