<?php 

$servername = "localhost"; 
$username = "root";
$password = "usbw"; 
$database = "test"; 

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}


// will appear in browser console if sql is connected
echo '<script>';
echo 'console.log("Connected PHP to MySQL succesfully");';
echo '</script>';

