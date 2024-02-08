<?php

session_start();

include_once 'db_connection.php';

//user not logged in 
if (!isset($_SESSION['loggedin'])) {
	header('Location: login.html');
	exit;
}

$pass= $_POST["pass"];
$name = $_SESSION['name'];

$sql = "UPDATE accounts SET password='$pass' WHERE username='$name' ";

if ($conn->query($sql) === TRUE) {
  echo "<center><h1> Password changed successfully...</h1></center> ";
  echo "<center><h1>Redirecting to User page....</h1></center>";
  header("refresh:3; user.php");
  echo '<center>You will be redirected in about 3 secs. If not, please click <a href="user.php">here</a></center>.';
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();

?>