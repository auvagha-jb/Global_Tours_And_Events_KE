<?php
session_start();

// including the database connection file
$con = new mysqli("localhost", "root", "", "global_tours_and_events_ke");

function alert($msg){
    echo "<script type='text/javascript'>alert('$msg');</script>";
}

//If the user selects a trip to edit 
if(isset($_GET['id'])){
    $trip_no = $_GET['id'];
}


//selecting data associated with this particular id
$result1 = $con->query( "SELECT * FROM trips WHERE trip_no = '$trip_no'");

while($res = mysqli_fetch_array($result1))
{
    $adult_count = $res['adult_count'];
    $child_count= $res['child_count'];
    $package_name= $res['package_chosen'];
    $_SESSION['previous_package'] = $res['package_chosen'];
    $special_requirements = $res['special_requirements'];
    $total_price = $res['total_price'];
    $date = $res['date'];
}


$result2=$con->query("SELECT * FROM packages where package_name = '$package_name'");

while($res = mysqli_fetch_array($result2)){
    $package_price = $res['package_price'];
}


//************************************************************************************************

//Get the package names
$get_packages = "SELECT * FROM `packages` ORDER BY package_name ASC";
    
    if ($pkg_result = $con->query($get_packages)) {
        echo "";
    }else{
        echo $con->error;
    }
        
?>
<?php
//If the user clicks the update button...
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

//If there is no package with that name in the packages table...
if(mysqli_num_rows($result)==0){
            
    $insert_pkg = "INSERT INTO `packages`(`package_id`, `package_name`, `package_price`, `no_of_bookings`) "
                    . "VALUES ('','$package_name','$package_price', '')";
        
        if($con->query($insert_pkg)){
            alert("Inserting into packages");
        }else{
            echo $con->error;
        }
}  


//Get the no of times a package appears in the [booked] trips table
        $count_pkgs = "SELECT COUNT(*) AS count FROM `trips` WHERE package_chosen = '$package_name'";
        $bookings;
        
        $result3 = $con->query($count_pkgs);
            alert('count ok');
          while($row = mysqli_fetch_array($result3))
          {
              $bookings=$row['count'];
          }
            
            
    
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
        
        
        
        //If user chose a different package, count all previous packages
        if($package_name != $previous_package){
            $sql2 = "SELECT COUNT(*) AS count FROM `trips` WHERE package_chosen = '$previous_package'";
            $prev_count;

           $result2 = $con->query($sql2);

             while($row = mysqli_fetch_array($result2))
             {
                 $prev_count=$row['count'];
             }       



               //Update the count of previous package
               $query="UPDATE packages SET no_of_bookings = '$prev_count' WHERE package_name = '$previous_package'";
               if($con->query($query) === true){
                   alert('Updated previous package');
               }else{
                   echo $con->error;
               }
        }
        
        header("location:../PHP/myBookings.php");
       
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Global Tours and Events KE</title>
    <link href="css/user-edit.css" rel="stylesheet" type="text/css">
    <script src="../js/jquery-3.3.1.js"></script>
    <script src="../js/jquery-ui.js"></script>
    <link rel="stylesheet" href="../css/jquery-ui.css"/>  
    <script src="js/main.js"></script>
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
        
         var package_name = "<?php echo $package_name; ?>";
        //Set the default value for the select
        $("#package_name").val(package_name);
        $("#price").val("<?php echo $package_price; ?>");
        $("#total_price").val("<?php echo $total_price; ?>");
    
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
        
    //Change the price dynamically according to the package chosen
    $("#package_name").change(function(){
        package_name = $(this).val();
        
        $.post("php/getPrice.php", {package: package_name} , function(data, status){
            $("#price").val(data);
            display_price();
        });
    });
       
    });
   
     
    </script>
</head>
<body>
<?php require './user-nav.php';?>
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
                <select id="package_name" name="package_name">
                    <?php while($row1 = mysqli_fetch_array($pkg_result)):;?>
                    <option value="<?php echo $row1["package_name"];?>"><?php echo $row1["package_name"];?></option>
                    <?php endwhile;?>
                </select>
                <br>
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
                <input type="text" name="price" class="price" id="price" readonly>
                <br>
                
                <label>Total Price</label>
                <br>
                <input type="text" name="total_price" id="total_price" readonly>
                <br>
                <br>
                <input name="update" type="submit" value="UPDATE BOOKING">
            </form>
        </div>
    </div>
</section>
</body>
</html>
