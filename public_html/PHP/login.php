<?php
// Always start this first
session_start();

require './connection.php';


//Check whether the user has chosen a package-->Then add it to session variables
if(isset($_REQUEST['package'])){
     //Ensure that if another package is chosen, the previous one is unset together with its price
//    if($_REQUEST['package'] !== $_SESSION['package']){
//        unset($_SESSION['package']);
//        unset($_SESSION['price']);
//    }
    
    $package = $con->real_escape_string($_REQUEST['package']);
    $price= $con->real_escape_string($_REQUEST['price']);
    
    $_SESSION['package']=$package;
    $_SESSION['price']=$price;
    
    console("Package variable set: ".$package);
    
}


//If the user has not logged in -->Redirect to login page
if(!isset($_SESSION['user_id'])){
    header("refresh:0; url=../Login Page.php");

//If they have, check whether they have chosen a package
}else{
        //If a package has not been chosen-->Direct to home page
        if(!isset($_SESSION['package'])){
            header("location:../home.php");
        }else{//If a package has been chosen -->Redirect to booking page
            alert("Logged in as ".$_SESSION['fname']." ".$_SESSION['lname']);
            header("refresh:0.1; url=../book.php");
        } 
}



//If data has been received from the login page...
if ( ! empty( $_POST ) ) {
    if ( !empty($_POST['submitBtn'])) {
        // Getting submitted user data from database
        
        $stmt = $con->prepare("SELECT * FROM `registered-users` WHERE `email` = ?");
        $stmt->bind_param('s', $_POST['username']);
        $stmt->execute();
        
        //Get the array of results then have an object to fetch results based on column
        $result = $stmt->get_result();
    	$user = $result->fetch_object();
    	
        
        
    if(mysqli_num_rows($result)==1){
           $user_type = $user->user_type;
            // Verify user password and set $_SESSION
            if ( password_verify( $_POST['password'], $user->password ) ) {
                    $_SESSION['user_id'] = $user->user_id;
                    $_SESSION['fname'] = $user->fname;
                    $_SESSION['lname'] = $user->lname;
                    $_SESSION['email'] = $user->email;
                    $_SESSION['user_type'] = $user_type;
                    
                    alert("Login Success");
                    
                    //Check the user_type
                    if($user_type == "Admin" || $user_type == "Super User"){
                        header("refresh:0.1; url=../ToursManagement/admin-home.php");
                        exit();
                    }
                    
                    
                     //Choosing where to redirect based on whether a package has been chosen or not
                    if(isset($_SESSION['package'])){
                        header("location:../book.php");
                    }else{
                        header("location:../home.php");
                    }  
                    
            }else{
                alert("Invalid password");
                 $_SESSION['username'] = $user->email;
                 $username=$_SESSION['username'];
                header("refresh:0.1; url=../Login Page.php");
            }
            
        }else{
            alert("Invalid username");
            header("refresh:0.1; url=../Login Page.php");
        }
 
    }   
}
?>
