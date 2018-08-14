<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Global Tours and Events KE</title>
    <link href="css/admin-package.css" rel="stylesheet" type="text/css">
    <script src="../js/jquery-3.3.1.js"></script>
    <script src="js/main.js"></script>
</head>
<body>
<?php
 $con = new mysqli("localhost", "root", "", "global_tours_and_events_ke");
?>

<header>
</header>
<br>
<br>
<?php require './nav-bar.php';?>
<section id="side-bar">
    <div>
        <?php
        if ($result = $con->query("SELECT `trip_no`,`registered-users`.`user_id`, `fname`, `lname`,`date`, `adult_count`, `child_count`, `country`, `phone_number`, `package_chosen`, `special_requirements`, `total_price` FROM `trips` JOIN `registered-users` WHERE `registered-users`.`user_id` = `trips`.`user_id` ORDER BY date")) {

            if ($result->num_rows > 0) {

                echo " <table id='bookings'>";
                echo "<h2>BOOKINGS MADE</h2>";
                echo "<thead>";
                echo "<tr>";
                echo "<th>Trip Number</th>";
                echo "<th>Name</th>";
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
                    echo "<td>" . $row['fname'] ." ".$row['lname']. "</td>";
                    echo "<td>" . $row['package_chosen'] . "</td>";
                    echo "<td>" . $row['date'] . "</td>";
                    echo "<td>" . $row['adult_count'] . "</td>";
                    echo "<td>" . $row['child_count'] . "</td>";
                    echo "<td>" . $row['special_requirements'] . "</td>";
                    echo "<td>" . $row['total_price'] . "</td>";
                    echo '<td><a href="booking-edit-test.php?id=' . $row['trip_no'] .'"><img src=\'img/update.png\'></a></td>';
                    echo '<td><a class="delete_booking" href="booking-delete.php?id='.$row['trip_no'].'&package='.$row['package_chosen'].'"><img src=\'img/remove.png\'></a></td>';
                    echo "</tr>";
                }
            }
            echo "</tbody>";
            echo "</table>";
        }
        ?>
    </div>
</section>
</body>
</html>
