<?php
$servername = "localhost";
$username = "root";
$password = "ritika123";
$db = "hack";
// create connection
$conn = mysqli_connect($servername, $username, $password, $db);

// check connection
if ($conn -> connect_error){
    die("Connection failed: " . $conn->connect_error);
}else{
    
}
?>