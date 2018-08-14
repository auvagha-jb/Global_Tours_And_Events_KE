<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>International Tours</title>
    <link type="text/css" href="css/international.css" rel="stylesheet"/>
    <link type="text/css" rel="stylesheet" href="css/navigation-bar.css">
    <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Raleway">
<!--    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" >-->
<!--    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>-->
<!--    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>-->

<!--    My javascript and jQuery files-->
    <script src="js/jquery-3.3.1.js"></script>
    <script src="js/myJs.js"></script>
</head>

<body>
<!-- Navigation Bar-->
<?php require './nav-bar.php'; ?>


<!--Title-->
<div class="title">
    <h3 id="page-title">International Safaris</h3>
</div>


<!--Main Content-->
        
 <section id="content">
        
     <form name="booking" action="PHP/login.php">
     
    <div id="row" class="row" style="height: 450px">
        <div class="column" style="background-color:white; height: 440px">
            <img src="img/barcelona.jpg" style="width: 100%" alt="Barcelona">
            <h4 id="_11_text">10 Days in Barcelona, Spain Package</h4>
            <p> A city known for its new cuisine, which for twenty years has greatly influenced the culinary leaders of today.</p>
            <span><br>From <span id="_11_price">120000</span> Kshs per person</span>
            <hr>
            <button id="_11">BOOK NOW</button>
        </div>
        
        
        <div class="column" style="background-color:white; height: 450px">
            <img src="img/saudi-arabia.jpg" style="width: 95%; height: 250px;" alt="">
            <h4 id="_12_text">5 Days in Riyadh Package</h4>
            <p>Attend the carnival of the camels in Riyadh, Saudi Arabia.</p>
            <span><br>From <span id="_12_price">75000</span> Kshs per person</span>
            <hr>
            <button id="_12">BOOK NOW</button>
        </div>
        
        
        <div class="column" style="background-color:white; height: 450px;">
            <img src="img/maldives.jpg" style="width: 95%; height: 250px;" alt="">
            <h4 id="_13_text">7 Days in Maldives Package</h4>
            <p>Have an enjoyable week on the beaches of Maldives.</p>
            <span><br>From <span id="_13_price">100000</span> Kshs per person</span>
            <hr>
            <button id="_13">BOOK NOW</button>
        </div>
        
    </div>

    <br>
    <br>

    <div id="row" class="row" style="height: 450px">
        <div class="column" style="background-color:white; height: 440px;">
            <img src="img/germany.jpg" style="width: 95%; height: 250px;" alt="">
            <h4 id="_21_text">10 Days in Cologne</h4>
            <p>For the love of beer, enjoy the different types of beer in Germany</p>
            <span><br>From <span id="_21_price">125000</span> Kshs per person</span>
            <hr>
            <button id="_21">BOOK NOW</button>
        </div>
        <div class="column" style="background-color:white; height: 440px">
            <img src="img/jamaica.jpg" style="width: 95%; height: 250px;" alt="">
            <h4 id="_22_text">10 Days in Jamaica Package</h4>
            <p>For the love of reggae. Experience Jamaican culture.</p>
            <span><br>From <span id="_22_price">110000</span> Kshs per person</span>
            <hr>
            <button id="_22">BOOK NOW</button>
        </div>
        <div class="column" style="background-color:white; height: 440px;">
            <img src="img/santorini.jpg" style="width: 95%; height: 250px;" alt="">
            <h4 id="_23_text">7 Days in Santorini Package</h4>
            <p>Enjoy the colorful streets of Santorini, Greece.</p>
            <span><br>From <span id="_23_price">100000</span> Kshs per person</span>
            <hr>
            <button id="_23">BOOK NOW</button>
        </div>
    </div>

    <br>
    <br>

    <div id="row" class="row" style="height: 450px">
        <div class="column" style="background-color:white; height: 440px">
            <img src="img/paris.jpg" style="width: 95%; height: 250px" alt="">
            <h4 id="_31_text">14 Days in Paris, France Package</h4>
            <p> Enjoy the French cuisine and see the Eiffel Tower in Paris</p>
            <span><br>From <span id="_31_price">200000</span> Kshs per person</span>
            <hr>
            <button id="_31">BOOK NOW</button>
        </div>
        
        
        <div class="column" style="background-color:white; height: 440px">
            <img src="img/tajmahal.jpg" style="width: 95%; height: 250px;" alt="">
            <h4 id="_32_text">7 Days in India Package</h4>
            <p>Study the various architectures in India. Enjoy the beautiful architecture of the Taj Mahal.</p>
            <span><br>From <span id="_32_price">100000</span> Kshs per person</span>
            <hr>
            <button id="_32">BOOK NOW</button>
        </div>
        
        
        <div class="column" style="background-color:white; height: 440px;">
            <img src="img/rome.jpeg" style="width: 95%; height: 250px;" alt="">
            <h4 id="_33_text">14 Days in Rome, Italy Package</h4>
            <p>Worship in one of the churches in Rome.</p>
            <span><br>From <span id="_33_price">195000</span> Kshs per person</span>
            <hr>
            <button id="_33">BOOK NOW</button>
        </div>
        
    </div>
    
    
    
    <br>
    <br>
<!--    Sends the booking data to PHP script on <button> click-->
    
        <input type="hidden" id="package" name="package">
        <input type="hidden" id="price" name="price">
    </form>
    
</section>
    
      

<!-- Footer 2 -->
<footer style="margin-left: 10px; margin-right: 10px;">

    <div class="search-text">
        <div class="container">
            <div class="row text-center">

                <div class="form" style="margin-left: 450px">
                    <h4>SIGN UP TO OUR NEWSLETTER</h4>
                    <form id="search-form" class="form-search form-horizontal">
                        <input type="text" class="input-search" placeholder="Email Address">
                        <button type="submit" class="btn-search">SUBMIT</button>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <div class="container" style="border-top:1px solid grey;">
        <div class="row text-center">
            <div  style="margin-left: 450px" class="col-lg-6 col-lg-offset-3">
                <ul class="menu">

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
                        <a href="#">Gallery</a>
                    </li>

                    <li>
                        <a href="contactUs.html">Contact</a>
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
