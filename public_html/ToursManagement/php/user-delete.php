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
$result = $con->query("DELETE FROM `registered-users` WHERE user_id='$id'");

//redirect
header("location:../view-users.php");
