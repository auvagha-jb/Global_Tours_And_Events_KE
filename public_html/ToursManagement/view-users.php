<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Global Tours and Events KE</title>
    <link href="css/admin-package.css" rel="stylesheet" type="text/css">
     <script src='../js/jquery-3.3.1.js'></script>
     
    <script type='text/javascript'>
    
    function filter() {
        // Declare variables 
        var input, filter, table, tr, td, i, column;
        input = document.getElementById("search");
        filter = input.value.toUpperCase();
        table = document.getElementById("usersTbl");
        tr = table.getElementsByTagName("tr");
        column = document.getElementById("column").value;

        // Loop through all table rows, and hide those who don't match the search query
        for (i = 0; i < tr.length; i++) {
          td = tr[i].getElementsByTagName("td")[column];
          if (td) {
            if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
              tr[i].style.display = "";
            } else {
              tr[i].style.display = "none";
            }
          } 
        }
      }

     $(document).ready(function(){
        $("#column").val("1");
        
        $("#search").keyup(function(){
            filter();
        });
         
     });
        
    </script>
    <script src="js/main.js"></script>
</head>
<body>

<!--    Navigation Bar-->
    <?php require './nav-bar.php'; ?>
    
<!-- Drop-down-list Search Box-->
    <center>
        <select id="column">
            <option value="0">User ID</option>
            <option value="1">Name</option>
            <option value="2">Email Address</option>
            <option value="3">User Type</option>
        </select>
        <input type="text" name="search" id="search" placeholder="Search..">
    </center>
<?php
$con = new mysqli("localhost", "root", "", "global_tours_and_events_ke");
?>
<br>
<br>
<section id="side-bar">
    <div>
        <?php
        session_start();
        $user_type = $_SESSION['user_type'];
        
        //Set the visibility scope-->depending on the user type. Super User or Admin
        if($user_type =="Super User"){
            $sql = "SELECT `user_id`, `fname`, `lname`, `email`, `user_type`, `password` FROM `registered-users` "
                    . "WHERE NOT user_type = 'Super User' ORDER BY user_type DESC ";
        }else{
            $sql = "SELECT `user_id`, `fname`, `lname`, `email`, `user_type`, `password` FROM `registered-users` WHERE NOT user_type = 'Admin' AND NOT user_type = 'Super User'";
        }
        
        
        //Display table
        if ($result = $con->query($sql)) {
            if ($result->num_rows > 0) {
                echo " <table id='usersTbl'>";
                echo "<h2></h2>";
                echo "<thead>";
                echo "<tr>";
                echo "<th>User ID</th>";
                echo "<th>Name</th>";
                echo "<th>Email Address</th>";
                echo "<th>User Type</th>";
//                echo "<th>Edit</th>";
                echo "<th>Delete</th>";
                echo "</tr>";
                echo "</thead>";
                echo "<tbody>";

                while ($row = $result->fetch_array()) {
                    echo "<tr>";
                    echo "<td>" . $row['user_id'] . "</td>";
                    echo "<td>" . $row['fname'] ." ".$row['lname']. "</td>";
                    echo "<td>" . $row['email'] . "</td>";
                    echo "<td>" . $row['user_type'] . "</td>";
//                    echo '<td><a href="admin-edit.php?id='. $row['package_name'] .'"><img src=\'img/update.png\'></a></td>';
                    echo '<td><a class="delete" href="php/user-delete.php?id=' . $row['user_id'] . '"><img src=\'img/remove.png\'></a></td>';
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
