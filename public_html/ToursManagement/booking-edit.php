<?php
// including the database connection file
$con = new mysqli("localhost", "root", "", "global_tours_and_events_ke");

function alert($msg){
    echo "<script type='text/javascript'>alert('$msg');</script>";
}

if(isset($_GET['id'])){
    $trip_no = $_GET['id'];
}

if(isset($_POST['update']))
{
    $adult_count = $_POST['adult_count'];
    $child_count= $_POST['child_count'];
    $package_name = $_POST['package_name'];
    $special_requirements = $_POST['special_requirements'];
    $arrival_date = $_POST['arrival_date'];
    $total_price=$_POST['total_price'];
    $package_price;
    $bookings;

    
//selecting data from packages to get its price 

$stmt = $con->prepare("SELECT * FROM packages where package_name = ?");
        $stmt->bind_param('s', $package_name);
        $stmt->execute();
        $result = $stmt->get_result();
    	$user = $result->fetch_object();
        $user_type = $user->user_type;

      //If the package is not in the database...
if(mysqli_num_rows($result)==0){
    
    $package_price = $_POST['price'];
            
    $sql = "INSERT INTO `packages`(`package_id`, `package_name`, `package_price`, `no_of_bookings`) "
                    . "VALUES ('','$package_name','$package_price', '')";
        
        if($con->query($sql) == true){
            alert("Inserting into packages");
        }else{
            echo $con->error;
        }
    
}else{
    
    $db_price = $user->package_price;
    $form_price = $_POST['price'];
    
    if($db_price == $form_price){
       $package_price=$db_price;
    }else{
         
        $package_price = $_POST['price'];
    }
}



//Get the no of bookings made
    // Get the number of bookings for that package
        $sql = "SELECT COUNT(*) AS count FROM `trips` WHERE package_chosen = '$package_name'";
         
    $result = $con->query($sql);

    while($res = mysqli_fetch_array($result))
    { 
        $bookings=$res['count'];
    }

        $update_trips ="UPDATE `trips` SET `date`='$arrival_date',`adult_count`='$adult_count',`child_count`='$child_count',`package_chosen`='$package_name',"
                . "`special_requirements`='$special_requirements',`total_price`='$total_price' WHERE `trip_no`='$trip_no'";
        
        if($con->query($update_trips) == true){
            alert('Updated trips');
        }else{
            echo $con->error;
        }
        
        
        $update_packages="UPDATE packages SET package_price = '$package_price', no_of_bookings = '$bookings' WHERE package_name = '$package_name'";
        if($con->query($update_packages) === true){
            alert('Updated packages');
        }else{
            echo $con->error;
        }
        
        
        //redirecting to the display page. In our case, it is index.php
        header("location:admin-booked.php");
    
}
?>
<?php

//selecting data associated with this particular id
$result = $con->query( "SELECT * FROM trips WHERE trip_no = '$trip_no'");

while($res = mysqli_fetch_array($result))
{
    $adult_count = $res['adult_count'];
    $child_count= $res['child_count'];
    $package_name = $res['package_chosen'];
    $special_requirements = $res['special_requirements'];
    $total_price = $res['total_price'];
    $date = $res['date'];
}


$result2=$con->query("SELECT * FROM packages where package_name = '$package_name'");

while($res = mysqli_fetch_array($result2)){
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
    <script src="../js/jquery-3.3.1.js"></script>
    <script src="../js/jquery-ui.js"></script>
    <link rel="stylesheet" href="../css/jquery-ui.css"/>
    <script type="text/javascript">
    
 
    function display_price(){
        
    var adult_price = document.getElementById('price').value;
    var child_price = adult_price/2;
    var adults = document.getElementById('adult_count').value;
    var children = document.getElementById('child_count').value;
        
    var total = (adults*adult_price)+(children*child_price);
    document.getElementById('total_price').value = total;
    }
    
    
    $(document).ready(function(){
        $(".price").hide();
        
       $("#package_name").change(function(){        
            $(".price").slideDown();
       });
       
       
       
       $('#adult_count').change(function(){
            $(".price").slideDown();
            display_price(); 
        });
        
       $('#price').change(function(){
           display_price(); 
        });
        
        $('#child_count').change(function(){
           $(".price").slideDown();
           display_price(); 
        });
        
        //date picker
        var minDate = new Date();
        
        $("#arrival_date").datepicker({
           showAnim:'drop',
           numberOfMonth: 1,
           minDate: minDate,
           dateFormat: 'dd/mm/yy'
        });
       
    });
    </script>
</head>
<body>
<br>
<br>
<?php require './nav-bar.php';?>
<section id="side-bar">
    <div>
        <div id="package-form">
            <form method="POST">
                <label>Adults</label>
                <br>
                <input type="number" name="adult_count" placeholder="" id="adult_count" value="<?php echo $adult_count;?>" >
                <br>
                <label>Children</label>
                <br>
                <input type="number" name="child_count" placeholder="" id="child_count" value="<?php echo $child_count;?>" >
                <br>
                <label>Package Chosen</label>
                <br>
                <input type="text" name="package_name" id="package_name" placeholder="" value="<?php echo $package_name;?>" >
                <br>
                <label>Arrival Date</label>
                <br>
                <input type="text" name="arrival_date" id="arrival_date" value="<?php echo $date;?>" >
                <br>
                <label>Special Requirements</label>
                <br>
                <textarea name="special_requirements"><?php echo $special_requirements;?></textarea>
                <br>
                
                <label class="price">Price per person</label>
                <br>
                <input type="number" name="price" class="price" id="price" value="<?php echo $package_price;?>" >
                <br>
                
                <label>Total Price</label>
                <br>
                <input type="text" name="total_price" id="total_price" value="<?php echo $total_price;?>" readonly>
                <br>
                
<!--                <label>Package Details</label>
                <br>
                <input type="text" name="package_locations" placeholder="Enter the package locations" value="<?php // echo $package_locations;?>" >
                <br>-->
                <br>
                <input name="update" type="submit" value="UPDATE BOOKING">
            </form>
        </div>
    </div>
</section>
</body>
</html>
