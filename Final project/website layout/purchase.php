<?php

include_once 'db_connection.php';


$name = $_POST["name"];
$date = $_POST["date"];
$courier = $_POST["courier"];
$prod = $_POST["product"];
$pay = $_POST["payment"];

$sql = "INSERT INTO orders (Name, Date, Service, Product, Method)
VALUES ('$name', '$date', '$courier', '$prod', '$pay')";

if ($conn->query($sql) === TRUE) {
  echo "<center><h1>Order sent successfully...</h1></center> ";
  echo "<center><h1>Redirecting to Shop....</h1></center>";
  header("refresh:3; shop.html");
  echo '<center>You will be redirected in about 5 secs. If not, please click <a href="login.html">here</a></center>.';
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();

?>