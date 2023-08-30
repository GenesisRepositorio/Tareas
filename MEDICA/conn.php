<?php
include "class.php";
// Create connection
$conn = new mysqli($servername, $username,
 $password, $db);
// Check connection
if ($conn->connect_error) {
    die("error en la coneccion: "
     . $conn->connect_error);
} 
//echo "Connected successfully";
?>