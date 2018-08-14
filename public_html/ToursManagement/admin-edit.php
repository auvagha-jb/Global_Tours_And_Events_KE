<?php
// including the database connection file
$con = new mysqli("localhost", "root", "", "global_tours_and_events_ke");

if(isset($_GET['id'])){
    $old_name = $_GET['id'];
}

if(isset($_POST['update']))
{
    $package_name = $_POST['package_name'];
    $package_price = $_POST['package_price'];
    //Will be obtained from perfoming a count on the trips table
    $no_of_bookings;

    
    // checking empty fields
    if(empty($package_name) || empty($package_price)) {
        if(empty($package_name)) {
            echo "<style ='color:red'>Package name field is empty.<br/>";
        }

        if(empty($package_price)) {
            echo "<style ='color:red'>Package price field is empty.<br/>";
        }

    } else {
        //updating the packages table
        $result1 ="UPDATE packages SET package_name='$package_name',package_price='$package_price' WHERE package_name='$old_name'";
        
        if($con->query($result1)){
            echo 'Packages table updated';
        }else{
            echo $con->error;
            echo $result1;
        }
        
        
        
        //Check whether the package exists in the trips table
        $stmt = $con->prepare("SELECT * FROM `trips` WHERE `package_chosen` = ?");
        $stmt->bind_param('s', $old_name);
        $stmt->execute();
        $result = $stmt->get_result();
    	$user = $result->fetch_object();
        
        //If the package exists, update the package name to the new one
        if(mysqli_num_rows($result)==1){
            $result2 ="UPDATE trips SET package_chosen='$package_name' WHERE package_chosen='$old_name'";
        
            if($con->query($result2)){
                echo 'Trips table updated';
                //redirecting to the display page. In our case, it is index.php
                header("location:admin-packages.php");
            }else{
                echo $con->error;
                echo $result2;
            }
        }
        
       

        //Reinitialize the old name -->Just in case they want to make a change twice
        unset($_GET['id']);
        $old_name = $package_name;
    }
}
?>
<?php

//selecting data associated with this particular id
$result = $con->query( "SELECT * FROM packages");

while($res = mysqli_fetch_array($result))
{
    $package_name = $res['package_name'];
    $package_price = $res['package_price'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Global Tours and Events KE</title>
    <link href="css/admin-header.css" rel="stylesheet" type="text/css">
    <link href="css/admin-editpackage.css" rel="stylesheet" type="text/css">
</head>
<body>
<br>
<br>
<?php require './nav-bar.php';?>
<section id="side-bar">
    <div>
        <div id="package-form">
            <form method="POST">
                <label>Name of the Package</label>
                <br>
                <input type="text" name="package_name" placeholder="Enter the package name" value="<?php echo $package_name;?>" >
                <br>
                <label>Price of the package</label>
                <br>
                <input type="text" name="package_price" placeholder="Enter the package price" value="<?php echo $package_price;?>" >
                <br>
<!--                <label>Package Details</label>
                <br>
                <input type="text" name="package_locations" placeholder="Enter the package locations" value="<?php // echo $package_locations;?>" >
                <br>-->
                <br>
                <input name="update" type="submit" value="UPDATE PACKAGE">
            </form>
        </div>
    </div>
</section>
</body>
</html>
