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

//deleting the row from table
$stmt = $con->prepare("DELETE FROM packages WHERE package_id=? LIMIT 1");
$stmt->bind_param("s", $id);
$stmt->execute();

//redirecting to the display page (index.php in our case)
header("location: admin-packages.php");
