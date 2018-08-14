<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Global Tours and Events KE</title>
    <link type="text/css" href="css/home.css" rel="stylesheet"/>
    <link type="text/css" href="css/navigation-bar.css" rel="stylesheet"/>
<!--    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">-->
<!--    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>-->
<!--    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>-->
<script src="bootstrap-3.3.7-dist/css/bootstrap.min.css"></script>
<script src="js/jquery-3.3.1.js"></script>
<script src="vegas/vegas.min.js"></script>
<script src="js/myJs.js"></script>
    
</head>
<body>
    
    <div class="slogan">
        Global Tours and Events KE
    </div>
    
<?php include './nav-bar.php';?>
 
    
    
    <br><br>
<br>
<br>

<div class="slideshow-container">

    <!-- Full-width images with number and caption text -->
    <div class="mySlides fade">
        <div class="numbertext">1 / 8</div>
        <img src="img/rusinga.jpg" style="width:100%" alt="Rusinga">
        <div class="text">Rusinga Island - Kenya</div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext">2 / 8</div>
        <img src="img/saltlick.jpg" style="width:100%" alt="saltlick">
        <div class="text">Tsavo Salt Lick Lodge - Kenya</div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext">3 / 8</div>
        <img src="img/saltlick.jpg" style="width:100%" alt="saltlick">
        <div class="text">Giraffe Manor - Kenya</div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext">4 / 8</div>
        <img src="img/porini.jpg" style="width: 100%" alt="porini">
        <div class="text">Porini Safari Camp - Kenya</div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext">5 / 8</div>
        <img src="img/makanyane.jpg" style="width: 100%" alt="makanyane">
        <div class="text">Makanyane Safari Lodge - South Africa</div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext">6 / 8</div>
        <img src="img/capelegrand.jpg" style="width: 100%">
        <div class="text">Cape Le Grand Beach - Australia</div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext">7 / 8</div>
        <img src="img/argentina.jpg" style="width: 100%" alt="argentina">
        <div class="text">Buenos Aires - Argentina</div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext">8 / 8</div>
        <img src="img/myanmar.png" style="width: 100%" alt="myanmar">
        <div class="text">Secret Ancient City of Bagan - Myanmar</div>
    </div>

    <!-- Next and previous buttons -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
    <span class="dot" onclick="currentSlide(4)"></span>
    <span class="dot" onclick="currentSlide(5)"></span>
    <span class="dot" onclick="currentSlide(6)"></span>
    <span class="dot" onclick="currentSlide(7)"></span>
    <span class="dot" onclick="currentSlide(8)"></span>
</div>  

<script>
    var slideIndex = 0;
    showSlides();

    function showSlides() {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) {slideIndex = 1}
        slides[slideIndex-1].style.display = "block";
        setTimeout(showSlides, 5000); // Change image every 5 seconds
    }
</script>

<h2>Top Holiday Packages</h2>
<div class="row">
    <div class="column" style="background-color:white;">
        <img src="img/riftvalley.jpg" style="width: 95%">
        <h3>Rift Valley Deals</h3>
        <p>Sirville Elementaita at <span style="color: #009933; font-size: 25px;">Kshs. 6,000</span></p>
        <hr>
        <p>Lake Naivasha Sopa Lodge at <span style="color: #009933; font-size: 25px;">Kshs. 9,900</span></p>
        <hr>
        <p>Enashipai Resort Spa and Lodge at <span style="color: #009933; font-size: 25px;">Kshs. 13,250</span></p>
        <button onclick="location.href='Local Safaris/lodging-safaris.php'">SEE ALL PACKAGES</button>
    </div>
    <div class="column" style="background-color:white;">
        <img src="img/sgr.jpg" style="width:100%">
        <h3>Mombasa SGR Train Deals</h3>
        <p>Plaza Beach Hotel - 3 days at <span style="color: #009933; font-size: 25px;">Kshs. 13,000</span></p>
        <hr>
        <p>Neptune Bamburi - 5 days at <span style="color: #009933; font-size: 25px;">Kshs. 30,600</span></p>
        <hr>
        <p>Amani Tiwi - 3 days at <span style="color: #009933; font-size: 25px;">Kshs. 19,800</span></p>
        <button onclick="location.href='Local Safaris/lodging-safaris.php'">SEE ALL PACKAGES</button>
    </div>
    <div class="column" style="bacakground-color:white;">
        <img src="img/holiday.jpg" style="width: 100%">
        <h3>Early Holiday Deals</h3>
        <p>3 Days Masai Mara Budget Package at <span style="color: #009933; font-size: 25px;">Kshs. 14,500</span></p>
        <hr>
        <p>4 Days Neptune Beach Bamburi at <span style="color: #009933; font-size: 25px;">Kshs. 20,200</span></p>
        <hr>
        <p>4 Days Voi Wildlife & Bamburi Beach at <span style="color: #009933; font-size: 25px;">Kshs. 28,600</span></p>
        <button onclick="location.href='Local Safaris/lodging-safaris.php'">SEE ALL PACKAGES</button>
    </div>
</div>
<br>
<br>


<form method="post" action="PHP/login.php">
    <div class="row2">
    <h2>Featured Packages</h2>
    
    <div class="column2" style="background-color:white;">
        <img src="img/wildebeest.jpeg" style="width: 100%" alt="">
        <h3 id="_11_text">Masai Mara Wildebeest Migration Safari Packages</h3>
        <p>Wildebeest migration adventure in Maasai Mara, Kenya. 3 Days 
            <span>from Kshs <span id="_11_price">14500</span></span>
        </p>
        <button id="_11">BOOK NOW</button>
    </div>
    
    <div class="column2" style="background-color:white;">
        <img src="img/rusinga-island..jpg" style="width:100%" alt="">
        <h3 id="_12_text">Rusinga Island Family Holiday Packages</h3>
        <p>5 Days, 4 Nights packages 
            <span>from Kshs <span id="_12_price">15500</span></span>
        </p>
        <button id="_12">BOOK NOW</button>
    </div>
    
    <div class="column2" style="background-color:white;">
        <img src="img/mombasa-beaches.jpg" style="width: 100%" alt="">
        <h3 id="_13_text">3 Days, 2 Nights Mombasa Beach Family Holiday Packages</h3>
        <p>Awesome family vacations <span>from Kshs<span id="_13_price">26800</span></span></p>
        <button id="_13">BOOK NOW</button>
    </div>
    
    <div class="column2" style="background-color:white;">
        <img src="img/ngare-ndare.jpg" style="width: 100%" alt="">
        <h3 id="_14_text">Nanyuki Camping Packages</h3>
        <p>3 Days, 2 Nights Ngare Ndare Camping <span>from Kshs <span id="_14_price">16000</span></span></p>
        <button id="_14">BOOK NOW</button>
    </div>
    
</div>

<div class="row2">
    <h2>Out of Kenya Packages</h2>
      <div class="column2" style="background-color:white;">
        <img src="img/dubai.jpg" style="width: 100%" alt="">
        <h3 id="_21_text">5 Days, 4 Nights Dubai Packages</h3>
        <p>Wide range of water-sports, indoor snow-skiing, world championship golf courses and exciting desert adventures 
            <span>from Kshs<span id="_21_price">64500</span></span>
        </p>
        <button id="_21">BOOK NOW</button>
    </div>
    <div class="column2" style="background-color:white;">
        <img src="img/zanzibar.jpg" style="width:100%" alt="">
        <h3 id="_22_text">5 Days Zanzibar Holiday Package</h3>
        <p>Includes 4 nights' accommodation, return flights, airport transfers, full day safari Blue Island excursion, sunset cruise 
            <span>from Kshs <span id="_22_price">73900</span></span>
        </p>
        <button id="_22">BOOK NOW</button>
    </div>
    <div class="column2" style="background-color:white;">
        <img src="img/amsterdam.jpg" style="width: 100%" alt="">
        <h3 id="_23_text">11 Days, 10 Nights Europe Tour Package</h3>
        <p>Explore some of the best locations ins Europe: Rome, Amsterdam, Paris, Venice, Lugano. Rate per person sharing: 
            <span>from Kshs <span id="_23_price">290000</span></span>
        </p>
        <button id="_23">BOOK NOW</button>
    </div>
    <div class="column2" style="background-color:white;">
        <img src="img/honeymoon.jpg" style="width: 100%" alt="">
        <h3 id="_24_text">11 Days Kenya Bush and Beach Honeymoon Package</h3>
        <p>Destinations: Samburu, Mt. Kenya Safari and Mombasa. 
            <span>from Kshs <span id="_24_price">163500</span></span>
        </p>
        <button id="_24">BOOK NOW</button>
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
</body>
</html>
