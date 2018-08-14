<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Global Tours and Events KE</title>
    <link href="../css/myBookings.css" rel="stylesheet" type="text/css">
    <link href="../css/navigation-bar.css" rel="stylesheet" type="text/css">
    <script src="../js/jquery-3.3.1.js"></script>
    <script src="../js/myJs.js"></script>
    <script src="../ToursManagement/js/main.js"></script>
</head>
<body>

<?php require './nav-bar.php';?>  
    
    <?php
//Sesson started in nav-bar.php
require './connection.php';
?>
<!--    <div style="background: #1dc116; color: white; float: right; width: 100%"><?php // echo ?></div>-->

    <div>
        <?php
        $user_id = $_SESSION['user_id'];
        
        $query = "SELECT * FROM `trips` "
        . "WHERE user_id = '$user_id' ORDER BY date;";
        
        if ($result = $con->query($query)) {

            if ($result->num_rows > 0) {

                echo " <table id='bookings'>";
                echo "<h2>MY BOOKED TRIPS</h2>";
                echo "<thead>";
                echo "<tr>";
                echo "<th>Trip Number</th>";
                echo "<th>Package Name</th>";
                echo "<th>Date of travel</th>";
                echo "<th>Adults</th>";
                echo "<th>Children</th>";
                echo "<th>Special Requirements</th>";
                echo "<th>Price</th>";
                echo "<th>Edit</th>";
                echo "<th>Delete</th>";
                echo "</tr>";
                echo "</thead>";
                echo "<tbody>";

                while ($row = $result->fetch_array()) {
                    echo "<tr>";
                    echo "<td>" . $row['trip_no'] . "</td>";
                    echo "<td>" . $row['package_chosen'] . "</td>";
                    echo "<td>" . $row['date'] . "</td>";
                    echo "<td>" . $row['adult_count'] . "</td>";
                    echo "<td>" . $row['child_count'] . "</td>";
                    echo "<td>" . $row['special_requirements'] . "</td>";
                    echo "<td>" . $row['total_price'] . "</td>";
                    echo '<td><a href="../ToursManagement/user-edit.php?id=' . $row['trip_no'] . '"><img src=\'../ToursManagement/img/update.png\'></a></td>';
                    echo '<td><a class="delete_booking" href="../ToursManagement/booking-delete.php?id='.$row['trip_no'].'&package='.$row['package_chosen'].'"><img src=\'../ToursManagement/img/remove.png\'></a></td>';
                    echo "</tr>";
                }
            }
            echo "</tbody>";
            echo "</table>";
        }
        ?>
    </div>

   
</body>
</html>
