<?php
    //Our requirements 
    require 'PHP/connection.php';
    require 'PHP/comments_action.php';
    if(session_status() == PHP_SESSION_NONE){
        session_start(); 
    }   
    
    //Get the  current page url
    $_SESSION['url'] = $_SERVER['REQUEST_URI'];
    
    //Get the time
    date_default_timezone_set('Africa/Nairobi');
    $date = date('Y-m-d');
    $time = date('H:i:s');
?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="css/comments.css">
    <script src='js/jquery-3.3.1.js'></script>
    <script>
       $(document).ready(function(){
        
           function loggedIn(){  
                var loggedIn = 1;
                
                $.post("PHP/comments_action.php", {loggedIn: loggedIn}, function(data,status){
                    console.log("Sent to comments_action.php:"+status);
                    
                    //If the user is not logged in...
                    if(data === "Not logged in"){
                        window.location.replace("PHP/comments_login.php");
                    }
                });
            }
        
        $("#comment").click(function(){
           loggedIn();
        });
          
          
       });
        
    </script>
</head>
<body>
    <?php
    echo '
        <form method="post" action="'.setComment($con).'">
            <textarea name="comment" id="comment" placeholder="Type your comment here"></textarea>
            <input type="hidden" name="date" value='.$date.'>
            <input type="hidden" name="time" value='.$time.'><br>
            <button type="submit" name="submitComment">Submit</button>
        </form>
    ';
    
    getComments($con);
    ?>
    
</body>
</html>
