<?php

$servername='localhost';
$username='vr.ott';
$password='p0000025004';
$dbname = "vr_ott";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>