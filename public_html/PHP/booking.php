<?php
    
  //Always start with this
  session_start();
 
  require_once '../PHP/connection.php';
 
alert("The package is ".$_SESSION['package']);

// Instantiate the variables. Escape user inputs for security-->To avoid SQL injection
$country = $con->real_escape_string($_REQUEST['country']);
$phone_number = $con->real_escape_string($_REQUEST['phone_number']);
$date = $con->real_escape_string($_REQUEST['arrival_date']);
$adult_count = $con->real_escape_string($_REQUEST['adult_count']);
$child_count = $con->real_escape_string($_REQUEST['child_count']);
$total_price = $con->real_escape_string($_REQUEST['total_price']);
$special_requirements = $con->real_escape_string($_REQUEST['special_requirements']);
$trip_no=getRand();
$package = $_SESSION['package'];
$user_id = $_SESSION['user_id'];
$package_price = $_SESSION['price'];
$count;

//Add the booking 
$sql = "INSERT INTO `trips`(`trip_no`,`user_id` ,`date`, `adult_count`, `child_count`, `country`, `phone_number`, `package_chosen`, `special_requirements`,`total_price`)"
        . "VALUES ('$trip_no','$user_id','$date', '$adult_count', '$child_count','$country','$phone_number', '$package', '$special_requirements','$total_price')";

//Execute first query
if($con->query($sql) === true){
    alert('Booking made');
}else{
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}


//Updating the number of bookings made
   $stmt = $con->prepare("SELECT * FROM `packages` WHERE `package_name` = ?");
        $stmt->bind_param('s', $package);
        $stmt->execute();
        $result = $stmt->get_result();
    	$user = $result->fetch_object();
        
    //If the booking doesn't exist...Add it to the packages table    
    if(mysqli_num_rows($result)==0){
        
        //Check whether there were bookings for that package made earlier
        $count_query = "SELECT COUNT(*) AS count FROM trips WHERE package_chosen = '$package'";
        if($result = $con->query($count_query)){
            while($res = mysqli_fetch_array($result))
            {
                $count = $res['count'];
                 echo 'COUNT OK';
            }
            
           
        }else{
            echo $con->error;
        }
        
        
        //INSERT STATEMENT: executed if the package chosen has never been picked before
        $insert = "INSERT INTO `packages`(`package_id`, `package_name`, `package_price`, `no_of_bookings`) "
                . "VALUES('NULL', '$package' , '$package_price', '$count')";
        
        if($con->query($insert)){
            echo 'INSERTED INTO PACKAGES';
            header("location:myBookings.php");
        }else{
            echo $con->error;
        }
        
    }else{
       //Get the COUNT
        $count_query = "SELECT COUNT(*) AS count FROM trips WHERE package_chosen = '$package'";
        if($result = $con->query($count_query)){
            
            while($res = mysqli_fetch_array($result))
            {
                $count = $res['count'];
                 echo 'COUNT OK';
            }
        }
        
       echo $count;
        //Update statement
        $update = "UPDATE packages SET no_of_bookings = '$count' WHERE package_name = '$package'";
        
        if($con->query($update)){
            echo 'UPDATED COUNT PACKAGES';
            header("location:myBookings.php");
        }else{
            echo $con->error;
        }
    }

   
    
    
    
//Calls the generate method and checks if the value already exists in the database
function getRand(){
        $random=generate();
        $con = new mysqli("localhost", "root", "", "global_tours_and_events_ke");
        $stmt = $con->prepare("SELECT * FROM `trips` WHERE `trip_no` = ?");
        $stmt->bind_param('s', $random);
        $stmt->execute();
        $result = $stmt->get_result();
    	
        //While the generated number occurs
        while(mysqli_num_rows($result)==1){
            getRand();   
        }
            return $random;
}

//Generates a random number
function generate(){
    
    $random = mt_rand();
    
    return $random;
}

// Close connection
$con->close();
?>