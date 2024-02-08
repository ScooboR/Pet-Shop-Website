<?php

include 'db-conn.php';


// Now we check if the data was submitted, isset() function will check if the data exists.
if (!isset($_POST['username'], $_POST['password'], $_POST['email'])) {
	// Could not get the data that should have been sent.
	echo'Please complete the registration form!';
	header("refresh:2; index.html");
	echo 'You will be redirected in about 2 secs. If not, please click <a href="register.html">here</a>.';
}
// Make sure the submitted registration values are not empty.
if (empty($_POST['username']) || empty($_POST['password']) || empty($_POST['email'])) {
	// One or more values are empty.
	exit('Please complete the registration form');
}

// We need to check if the account with that username exists.
if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
	echo'Email is not valid!';
	header("refresh:2; index.html");
	echo 'You will be redirected in about 2 secs. If not, please click <a href="register.html">here</a>.';
}

if (preg_match('/^[a-zA-Z0-9]+$/', $_POST['username']) == 0) {
    echo'Username is not valid!';
	header("refresh:2; index.html");
	echo 'You will be redirected in about 2 secs. If not, please click <a href="register.html">here</a>.';
}

if (strlen($_POST['password']) > 20 || strlen($_POST['password']) < 5) {
	echo'Password must be between 5 and 20 characters long!';
	header("refresh:2; index.html");
	echo 'You will be redirected in about 2 secs. If not, please click <a href="register.html">here</a>.';
}
    

if ($stmt = $con->prepare('SELECT id, password FROM accounts WHERE username = ?')) {
	// Bind parameters (s = string, i = int, b = blob, etc), hash the password using the PHP password_hash function.
	$stmt->bind_param('s', $_POST['username']);
	$stmt->execute();
	$stmt->store_result();
	// Store the result so we can check if the account exists in the database.
	if ($stmt->num_rows > 0) {
		// Username already exists
		echo 'Username exists, please choose another!';
		header("refresh:3; index.html");
	echo 'You will be redirected in about 3 secs. If not, please click <a href="register.html">here</a>.';
	} else {
		
        // Username doesn't exists, insert new account
        if ($stmt = $con->prepare('INSERT INTO accounts (username, password, email) VALUES (?, ?, ?)')) {
	// We do not want to expose passwords in our database, so hash the password and use password_verify when a user logs in.
	$password = $_POST['password'];
	$stmt->bind_param('sss', $_POST['username'], $password, $_POST['email']);
	$stmt->execute();

	echo 'Account created successfully, you may now login!';
	header("refresh:5; index.html");
	echo 'You will be redirected in about 5 secs. If not, please click <a href="login.html">here</a>.';

	

} else {
	// Something is wrong with the SQL statement, so you must check to make sure your accounts table exists with all 3 fields.
	echo 'Could not prepare statement!';
}
	}
	$stmt->close();
} else {
	// Something is wrong with the SQL statement, so you must check to make sure your accounts table exists with all 3 fields.
	echo 'Could not prepare statement!';
}
$con->close();
?>

