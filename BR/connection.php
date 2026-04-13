<?php
$servername = "92.205.0.23";
$username = "admin";
$password = "Meebok910@111";
$dbname = "jettransfer";

// Create connection
$conn= mysqli_connect($servername,$username,$password,$dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
?>