<?php
require ("db.php");

 if(isset($_POST["username"]))
{
    if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
        die();
    }
    
   
       //$mysqli = new mysqli('host' , 'sql_username', 'sql_pass', 'database');
   // if ($mysqli->connect_error){
    //    die('Could not connect to database!');
   // }
    
    $username = filter_var($_POST["username"], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW|FILTER_FLAG_STRIP_HIGH);
    
    $statement = $conn->prepare("SELECT payphone FROM newMusic WHERE payphone=?");
    // die("SELECT payphone FROM newMusic WHERE payphone=?");
    $statement->bind_param('s', $username);
    $statement->execute();
    $statement->bind_result($username);
    if($statement->fetch()){
        die('<img src="http://www.malawi-music.com/submitMusic/available.png" />');
    }else{
        die('<img src="http://www.malawi-music.com/submitMusic/not-available.png" />');
    }
}


?>