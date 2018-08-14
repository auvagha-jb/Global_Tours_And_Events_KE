<?php 
        if(session_status() == PHP_SESSION_NONE){
            session_start();
        }
               
                function toggleNavContents(){  
            echo'<script type="text/javascript">
                    console.log("Method called");
                </script>';  
                    //If the user has not logged in
                    if(!isset($_SESSION['user_id'])){
                        echo '
                        <li><a href="../register.php" class="right">SIGN UP</a></li>
                        <li><a href="../Login Page.php" class="right">LOG IN</a></li>
                    ';
                    }else{
                        
                        $name = $_SESSION["fname"]." ".$_SESSION['lname'];
                        echo'
                            
                            <li><a href="#">'.$name.'<a/>
                                <div class="dropdown-content">
                                    <a href="../myDetails.php">Personal Details</a>
                                    <a href="logout.php" id="logout">Log out</a>
                                </div>
                            </li>
                            <li><a href="myBookings.php" id="myBookings">MY BOOKINGS</a></li>
                         ';
                    }
                }
?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" type="text/css" href="../css/navigation-bar.css">
    </head>
    <body>

<ul class="dropdown">
    <li><a class="active" href="../home.php">HOME</a></li>
    <li>
        <a href="#">LOCAL SAFARIS</a>
        <div class="dropdown-content">
            <a href="../Local Safaris/camping-safaris.php">Camping Safaris</a>
            <a href="../Local Safaris/lodging-safaris.php">Lodging Safaris</a>
        </div>
    </li>
    <li><a href="../internationalSafaris.php" id="international">INTERNATIONAL SAFARIS</a></li>
    <li><a href="../contactUs.php" id="contact">CONTACT US</a></li>
    <?php 
        //Display list items depending on whether the user has logged in or not
        toggleNavContents();
    ?>
</ul>
        
    </body>
</html>