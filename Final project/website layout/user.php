<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
include 'db-conn.php';
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.html');
	exit;
}

// We don't have the password or email info stored in sessions, so instead, we can get the results from the database.
$stmt = $con->prepare('SELECT password, email FROM accounts WHERE id = ?');
// In this case we can use the account ID to get the account info.
$stmt->bind_param('i', $_SESSION['id']);
$stmt->execute();
$stmt->bind_result($password, $email);
$stmt->fetch();
$stmt->close();

$password = password_hash($password, PASSWORD_DEFAULT);
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Profile Page</title>
		<link href="style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer">
		<link rel="stylesheet" href="css/style1.css" type="text/css">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

	</head>
	<body class="loggedin">

	  <!--Nav bar-->
	  <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-1 ">
            <div class="container">
            <img src="img/undraw_bird.svg">
           <a href="Home.php" class="navbar-brand">The Lucky Pet Shop</a>
           <img class="nav-item" src="img/animals.svg" width="100" height="100">
           

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
                <span class="navbar-toggler-icon"></span>
            </button>

           <div class="collapse navbar-collapse" id="navmenu">
           
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">   
                <a href="about.html" class="nav-link text-light">About Us</a>
            </li>
            <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item dropdown">
          <button class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown">
           Shop
          </button>
          <ul class="dropdown-menu dropdown-menu-dark">
            <li><a class="dropdown-item" href="foodcate.html">Food</a></li>
            <li><a class="dropdown-item" href="treatcate.html">Treats</a></li>
            <li><a class="dropdown-item" href="accecate.html">Accessories</a></li>
            <li><a class="dropdown-item" href="beaucate.html">Beauty Products</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
            <ul class="navbar-nav ms-auto">
            <li class="nav-item">
                <a href="user.php" class=" nav-link "><span class="text-light fas fa-user-circle
                  "><span>My Profile</span></span></a>
            </li>

            </ul>
           </div>
        </div>
        <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
        </nav>
		<div class="content">
			<h2>Profile Page</h2> 
			<a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
			<br>
			<a href="pass.html"><i class="fas "></i>Change password</a>
			
			
			<div>
				<p>Your account details are below:</p>
				<table>
					<tr>
						<td>Username:</td>
						<td><?=$_SESSION['name']?></td>
					</tr>
					<tr>
						<td>Password:</td>
						<td><?=$password?></td>
					</tr>
					<tr>
						<td>Email:</td>
						<td><?=$email?></td>
					</tr>
				</table>
			</div>
		</div>

		  <!-- Footer -->
          <footer class="p-5 bg-dark text-white text-center position-relative">
            <div class="container">
              <p class="lead">Copyright &copy; 2023 Lucky Pet Shop</p>

              <a href="#" class="position-absolute bottom-0 end-0">
                <i class="bi bi-arrow-up-circle h1"></i>
              </a>
              
            </div>


          </footer>
	</body>
</html>