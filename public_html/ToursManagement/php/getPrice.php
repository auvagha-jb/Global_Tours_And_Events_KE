<?php

require '../../PHP/connection.php';

session_start();

if(isset($_POST['package'])){
    
    
    $package = $_POST['package'];

    $query = "SELECT package_price FROM packages WHERE package_name = '$package'";

    $result=$con->query($query);

    while($res = mysqli_fetch_array($result)){
        echo $res['package_price'];
    }
}
?>
