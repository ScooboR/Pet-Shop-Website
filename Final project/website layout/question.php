<?php

include_once 'db_connection.php';

$email = $_POST['email'];
$question = $_POST['question'];

$sql = "INSERT INTO questions (email, question)
VALUES ('$email', '$question')";

if ($conn->query($sql) === TRUE) {
    echo "<center><h1>Message sent successfully...</h1></center> ";
    echo "<center><h1>Redirecting to home page....</h1></center>";
    header("refresh:3; Home.php");
    echo '<center>You will be redirected in about 5 secs. If not, please click <a href="Home.php">here</a></center>.';
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();


?>

