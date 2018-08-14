<?php
$host="localhost";
$user="root";
$password = "";
$db_name="global_tours_and_events_ke";

$con = new mysqli("$host", "$user", "$password", "$db_name");

if($con === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}

function alert($msg){
    echo "<script type='text/javascript'>alert('.$msg.');</script>";
}

function console($msg){
    echo '
        <script type="text/javascript">
            console.log('.$msg.');
        </script>
    ';
}
