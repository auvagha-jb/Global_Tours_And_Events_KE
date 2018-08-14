<?php

require './connection.php';
 
if(isset($_POST['code'])){
                $stmt = $con->prepare("SELECT * FROM `admin_code`");
//                    $stmt->bind_param('s', $_POST['code']);
                $stmt->execute();
                $result = $stmt->get_result();
                $user = $result->fetch_object();
    		
                $admin_code = $user->admin_code;
                $code = $_POST['code'];
                $user_type = $con->real_escape_string($_REQUEST['user_type']);
                
                if($user_type == "Admin" || $user_type == "Super User"){
                    if($code == $admin_code){                
                         echo $user_type;
                    }else{
                        echo "Regular";
                    }
                }
} 

if(isset($_POST['submitBtn'])){
// Escape user inputs for security
$firstname = $con->real_escape_string($_REQUEST['firstname']);
$lastname = $con->real_escape_string($_REQUEST['lastname']);
$email = $con->real_escape_string($_REQUEST['email']);
$password = $con->real_escape_string($_REQUEST['password']);
$hash=password_hash($password, PASSWORD_DEFAULT); 
$user_type = $con->real_escape_string($_REQUEST['user_type']);

//ensure the email address does not exist
$stmt = $con->prepare("SELECT * FROM `registered-users` WHERE `email` = ?");
        $stmt->bind_param('s', $_POST['email']);
        $stmt->execute();
        $result = $stmt->get_result();
    	$user = $result->fetch_object();
    		
        if(mysqli_num_rows($result)==1){
            alert("The email address already exists");
        }

        else{
            // attempt insert query execution
            $sql = "INSERT INTO `registered-users`(`user_id`, `user_type`, `fname`, `lname`, `email`, `password`, `confirm_booking`, `reset_password`) "
                    . "VALUES ('','$user_type','$firstname', '$lastname', '$email', '$hash', '', '')";
        }



if($con->query($sql) === true){
        alert("Account created successfuly");
        
    //Getting the user;s details
        $con->prepare("SELECT * FROM `registered-users` WHERE `email` = ?");
        $stmt->bind_param('s', $_POST['email']);
        $stmt->execute();
        $result = $stmt->get_result();
    	$user = $result->fetch_object();
        
    //Setting the session variables
        $_SESSION['user_id'] = $user->user_id;
        $_SESSION['fname'] = $user->fname;
        $_SESSION['lname'] = $user->lname;
    
        //select where to redirect
        if(isset($_SESSION['package'])){
             header("refresh: 0; url=../book.php");
        }else{
            header("refresh: 0; url=../home.php");
        }
        
} else{
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
    alert("An error occured. Click ok for details.");
}
 
// Close connection
$con->close();
}
