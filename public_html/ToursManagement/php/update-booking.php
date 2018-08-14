<?php
if(isset($_POST['update'])){
    $adult_count = $_POST['adult_count'];
    $child_count= $_POST['child_count'];
    $package_name = $_POST['package_name'];
    $special_requirements = $_POST['special_requirements'];
    $arrival_date = $_POST['arrival_date'];
    $total_price=$_POST['total_price'];
    $package_price=$_POST['price'];
    $previous_package = $_SESSION['previous_package'];
    $user_type = $_SESSION['user_type'] ;
    $bookings;

    
//selecting data from packages to get its price 

$stmt = $con->prepare("SELECT * FROM packages where package_name = ?");
        $stmt->bind_param('s', $package_name);
        $stmt->execute();
        $result = $stmt->get_result();
    	$user = $result->fetch_object();

if(mysqli_num_rows($result)==0){
            
    $sql = "INSERT INTO `packages`(`package_id`, `package_name`, `package_price`, `no_of_bookings`) "
                    . "VALUES ('','$package_name','$package_price', '')";
        
        if($con->query($sql) == true){
            alert("Inserting into packages");
        }else{
            echo $con->error;
        }
}  


//Get the no of bookings made

    // Get the number of bookings for that package
        $sql = "SELECT COUNT(*) AS count FROM `trips` WHERE package_chosen = '$package_name'";
        
        if($result = $con->query($sql) == true){
            alert('count ok');
        }else{
            echo $con->error;
        }
        
    $row = mysqli_fetch_array($result);
    
    $bookings=$row['count'];
    $bookings++;

 
    
    
    
        $update_trips ="UPDATE `trips` SET `date`='$arrival_date',`adult_count`='$adult_count',`child_count`='$child_count',`package_chosen`='$package_name',"
                . "`special_requirements`='$special_requirements',`total_price`='$total_price' WHERE `trip_no`='$trip_no'";
        
        if($con->query($update_trips) == true){
            alert('Updated trips');
        }else{
            echo $con->error;
        }
        
        
        
        //Update count 
        $update_packages="UPDATE packages SET package_price = '$package_price', no_of_bookings = '$bookings' WHERE package_name = '$package_name'";
        if($con->query($update_packages) === true){
            alert('Updated packages');
        }else{
            echo $con->error;
        }
        
        
        
        //If user chose a different package....
           //Count all previous packages
        if($package_name != $previous_package){
             $sql2 = "SELECT COUNT(*) AS count FROM `trips` WHERE package_chosen = '$previous_package'";
    
        if($result2 = $con->query($sql2) == true){
                alert('count ok');
            }else{
                echo $con->error;
            }
            
            
            $res = mysqli_fetch_array($result2);
            $prev_count=$res['count'];
            
            
            //Update the count of previous package
            //Update count 
            $query="UPDATE packages SET no_of_bookings = '$prev_count' WHERE package_name = '$previous_package'";
            if($con->query($query) === true){
                alert('Updated previous package');
            }else{
                echo $con->error;
            }
            
               
        }
        
        
//        if($user_type == "Admin" || $user_type == "Super User"){
//             //redirecting to the display page. In our case, it is index.php
//        header("location:../admin-booked.php");
//    
//        }else{
//            header("location:../../PHP/myBookings.php");
//        }
            
       
}

?>