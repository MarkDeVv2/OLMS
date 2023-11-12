<?php
function ConnectDB(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "ols";
    
    // Create connection
    $conn = new mysqli($servername, $username,$password, $database);
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
   
    return $conn;
    
}
// Database configuration

?>





