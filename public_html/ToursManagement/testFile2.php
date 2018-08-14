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
<br>
<br>
<?php require './nav-bar.php';?>
<section id="side-bar">
    <div>
        <?php
        $sql = "SELECT * FROM `packages` ORDER BY no_of_bookings DESC;";
        if ($result = $con->query($sql)) {
            if ($result->num_rows > 0) {

                echo " <table id='package-listings'>";
                echo "<h2>PACKAGE LISTINGS</h2>";
                echo "<thead>";
                echo "<tr>";
                echo "<th>Package Number</th>";
                echo "<th>Package Name</th>";
                echo "<th>Package Price</th>";
                echo "<th>Number of bookings</th>";
                echo "<th>Edit</th>";
                echo "<th>Delete</th>";
                echo "</tr>";
                echo "</thead>";
                echo "<tbody>";

                while ($row = $result->fetch_array()) {
                    echo "<tr>";
                    echo "<td>" . $row['package_id'] . "</td>";
                    echo "<td>" . $row['package_name'] . "</td>";
                    echo "<td>" . $row['package_price'] . "</td>";
                    echo "<td>" . $row['no_of_bookings'] . "</td>";
                    echo '<td><a class="delete" href="admin-edit.php?id='. $row['package_name'] .'"><img src=\'img/update.png\'></a></td>';
                    echo '<td><a href="admin-delete.php?id=' . $row['package_id'] . '"><img src=\'img/remove.png\'></a></td>';
                    echo "</tr>";
                }
            }
            echo "</tbody>";
            echo "</table>";
        }

//        echo '<a class="delete" href="admin-addpackage.php">Click for confirm dialog</a>';
        ?>
        
        
        
    </div>
</section>
</body>
</html>
