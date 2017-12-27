<?php
require ("db.php");

 if(isset($_POST["username"]))
{
    if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
        die();
    }
    $mysqli = new mysqli('host' , 'sql_username', 'sql_pass', 'database');
    if ($mysqli->connect_error){
        die('Could not connect to database!');
    }
    
    $username = filter_var($_POST["username"], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW|FILTER_FLAG_STRIP_HIGH);
    
    $statement = $mysqli->prepare("SELECT username FROM user_list WHERE username=?");
    $statement->bind_param('s', $username);
    $statement->execute();
    $statement->bind_result($username);
    if($statement->fetch()){
        die('<img src="public/images/not-available.png" />');
    }else{
        die('<img src="public/images/available.png" />');
    }
}

?>