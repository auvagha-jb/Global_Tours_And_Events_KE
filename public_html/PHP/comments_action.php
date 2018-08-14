<?php
//requirements
if(session_status() == PHP_SESSION_NONE){
    //Start session if it hasn't been already
    session_start();
}

//function localConnection(){
//        $host="localhost";
//        $user="root";
//        $password = "";
//        $db_name="global_tours_and_events_ke";
//
//        $con = new mysqli("$host", "$user", "$password", "$db_name");
//        
//        return $con;
//}

    //If the user isn't logged in...
    if(empty($_SESSION['user_id']) && isset($_POST['loggedIn'])){
            echo 'Not logged in';
    }

//$con is passed as an argument to the function because it had not been defined within the function
function setComment($con){
    if(isset($_POST['submitComment'])){
        //Check if they are logged in 
        if(isset($_SESSION['user_id'])){
            
            $user_id = $_SESSION['user_id'];
            $comment = $_POST['comment'];
            $date = $_POST['date'];
            $time = $_POST['time'];
            
           
            //Prepare and bind
            $stmt = $con->prepare("INSERT INTO comments (id, user_id, date, time, comment) VALUES ('NULL', ?,?,?,?)");
            $stmt->bind_param('ssss', $user_id, $date, $time, $comment);
            
            $stmt->execute();
            $stmt->close();
            
        }
    }
}


function getComments($con){
 
    $show_comments = "SELECT * FROM comments JOIN `registered-users` ON comments.user_id = `registered-users`.`user_id`;";
    $stmt = $con->prepare($show_comments);
    $stmt -> execute();
    $result = $stmt->get_result();
   
    while($row = $result->fetch_object()){
        $name = $row->fname." ".$row->lname;
        $comment = $row->comment;
        echo '
         <div class="comment-box"><p>
            <div class="name">'.$name.'</div><br>
            <div>'.nl2br($comment).'</div><br>
            </p>
         </div>
        ';
    }
    
}
