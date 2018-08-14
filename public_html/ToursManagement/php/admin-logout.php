<?php
    //Always begin with this
    session_start();

    function alert($msg){
        echo "<script type='text/javascript'>alert('$msg');</script>";
    }

    //remove all session variables
    session_unset();
    
    //destroy the sesion
    session_destroy();
    
    if(empty($_SESSION['user_id'])){
       header("location:../../home.php");
    }
    
    
    
?>