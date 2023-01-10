<?php

$dbhost = "localhost";
$username = "root";
$password = "";
$dbname = "bmi";
$port = 3307;

$conn = mysqli_connect($dbhost,$username,$password,$dbname,$port);

$connect = "Not Connected";
$connected = "Connected";

  // Check connection
   if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    } 

?>

