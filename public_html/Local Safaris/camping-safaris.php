<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Camping Safaris</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="camping-lodging.css">
        <link rel="stylesheet" type="text/css" href="../css/navigation-bar.css">
        
<!--        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">-->
<!--        <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>-->
        
        <!--        My jQuery Library & Java Script File      -->
        <script type="text/javascript" src="../js/jquery-3.3.1.js"></script>
        <script src="../js/myJs.js"></script>
    </head>
    <body>
        
        
        <!-- Navigation Bar-->
<?php require './LocalSafaris-nav-bar.php';?>

        
<form name="booking" method="post" action="../PHP/login.php">
    
    <div class='pageTitle'><h2>Kenya Camping Safaris</h2></div>
    
    <div class="row">
          
    <div class="column">
        <img src="../Pictures/Camping Safaris/Maasai-Mara-Lion-Mom-Cubs-2.jpg" alt="">
        <h3 id="_11_text">3 Day Maasai Camping Safari</h3>
        <p>Kenya's most celebrated national reserve. It offers the possibility of seeing "the big five" and many other species of wildlife<span><br>From <span id="_11_price">16000</span> Kshs per person</span></p>
        <button id="_11">BOOK NOW</button>
    </div>
    
    
    <div class="column">
        <img src="../Pictures/Camping Safaris/Amboseli-National-Park-elephants.jpg" alt="sgr">
        <h3 id="_12_text">3 Day Amboseli Camping Safari</h3>
            <p>Amboseli National park is one of Kenya's most popular parks. Here, elephants, hippos and bird life can be seen against the backdrop of Mt. Kilimanjaro
                <span><br>From <span id="_12_price">10000</span> Kshs per person</span></p>
        <button id="_12">BOOK NOW</button>
    </div>
    
    
    <div class="column">
        <img src="../Pictures/Camping Safaris/Giraffe-grazing-in-Samburu-National-Reserve.jpg" alt=''>
        <h3 id="_13_text">3 Day Samburu Camping adventure</h3>
        <p>Samburu National reserve is renowned for its rare unique animal species such as the gravy zebra and reticulated giraffe<span><br>From <span id="_13_price">8000</span> Kshs per person</span></p>
        <button id="_13">BOOK NOW</button>
    </div>
</div>
         
        <br><br>
        <!-- Row 2 -->
    
    <div class="row">
    <div class="column">
        <img src="../Pictures/Camping Safaris/Maasai-Mara-zebrasjpg.jpg" alt="">
        <h3 id="_21_text">4 Days Maasai Mara & Lake Nakuru Safari Adventure</h3>
            <p>Camping safari to the world famous bird sanctuary of Lake Nakuru, then to Kenya's greatest national reserve - the Maasai Mara<span><br>From <span id="_21_price">11500</span> Kshs per person</span></p>
        <button id="_21">BOOK NOW</button>
    </div>
        
        
    <div class="column">
        <img src="../Pictures/Camping Safaris/Maasai-Mara-Migration.jpg" alt=''>
        <h3 id="_22_text">4 Day Maasai Mara Camping Migration Safari</h3>
        <p>The safari takes you to the Maasai Mara national reserve; famous for its big cat population and annual wildebeest migration from July to October<span><br>From <span id="_22_price">12000</span> Kshs per person</span></p>
        <button id="_22">BOOK NOW</button>
    </div>
    <div class="column">
        <img src="../Pictures/Camping Safaris/tsavo-east-elephants.jpg" alt=''>
        <h3 id="_23_text">6 Days Amboseli, Tsavo East & Tsavo West & Mombasa Camping Safari</h3>
        <p>6 Days budget package to Amboseli, both Tsavo East & West and ending in Mombasa <span><br>From <span id="_23_price">16000</span> Kshs per person</span></p>
        <button id="_23">BOOK NOW</button>
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
