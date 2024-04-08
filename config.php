<?php

$servername = "localhost";
$database = "vendor";
$username = "root";
$password = ""; // Replace 'your_password_here' with your actual MySQL root password
 
// Create connection
$con = mysqli_connect($servername, $username, $password, $database);
 
// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

?>