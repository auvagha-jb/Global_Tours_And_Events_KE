<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 01/07/2018
 * Time: 06:55
 */

//including the database connection file
$con = new mysqli("localhost", "root", "", "global_tours_and_events_ke");
session_start();

$id = $_GET['id'];
$package = $_GET['package'];
$user_type = $_SESSION['user_type'];
$count;

//deleting the row from table
$delete= $con->query("DELETE FROM trips WHERE trip_no='$id'");

//Update the COUNT
$count_query = "SELECT COUNT(*) AS count FROM `trips` WHERE `package_chosen` = '$package';";
        
        $result = $con->query($count_query);
            
          while($res = mysqli_fetch_array($result))
          {
                $count = $res['count'];
          }
            
        
//Update the packages table-->New no
        $update = "UPDATE packages SET no_of_bookings = '$count' WHERE package_name = '$package'";
        
        $con->query($update);
        
            echo 'UPDATED COUNT PACKAGES';
            
            if($user_type == "Admin" || $user_type == "Super User"){
                //redirecting to the display page (index.php in our case)
                header("location: admin-booked.php");
            }else{
                 header("location:../PHP/myBookings.php");
            }
       