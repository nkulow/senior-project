<?php
	include ('config.php');
	$sql = "INSERT INTO Accounts (username, firstname, lastname, email, passwrd) VALUES (?,?,?,?,?)";
	$params = array(
		&$_POST['username'],
		&$_POST['firstname'],
		&$_POST['lastname'],
		&$_POST['email'],
		&$_POST['password'],
	);

		$insertData = sqlsrv_prepare($conn, $sql, $params);
		if ($insertData === false )
			die( FormatErrors(sqlsrv_errors() ) );
		if( sqlsrv_execute( $insertData ) === false )
				die( FormatErrors( sqlsrv_errors() ) );

		sqlsrv_free_stmt( $insertData );
?>


<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="sign-in.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"> -->
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
	<title>Sign In</title>
</head>
<body>
	<!-- Header with navbar -->
	<header>
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container-fluid">
				<div class="navbar navbar-header">
					<a class="navbar-brand nav-link active" href="index.html">Outdoors</a>
					<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myNavbar">
						<span class="navbar-toggler-icon"></span>
			    </button>
				</div>
				<div class="collapse navbar-collapse" id="myNavbar">
					<div class="navbar-nav">
						<ul class="nav navbar-nav">
							<li>
								<a class="nav-item nav-link" href="fishing.html">Fishing</a>
							</li>
							<li>
								<a class="nav-item nav-link" href="boating.html">Boating</a>
							</li>
							<li>
								<a class="nav-item nav-link" href="camping.html">Camping</a>
							</li>
							<li>
								<a class="nav-item nav-link" href="hunting.html">Hunting</a>
							</li>
							<li>
								<a class="nav-item nav-link" href="watersports.html">Watersports</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="navbar-nav form-inline my-2 my-lg-0">
					<ul class="nav navbar-nav">
						<li>
							<a class="nav-item nav-link" href=""><span class="fas fa-shopping-cart fa-lg"></span></a>
						</li>
						<!-- drop down menu for sign in/create account -->
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		          				<span class="fas fa-user fa-lg">
		          			</a>
		          			<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
		          				<a class="dropdown-item" href="sign-in.html">Sign In</a>
		          				<a class="dropdown-item" href="create-account.html">Create an Account</a>
		          			</div>
						</li>
					</ul>
				</div>
			</div>
	</header>

	<div class="login-page">
  	<div class="form">
      <form class="login-form">
        <input type="text" placeholder="Username"/>
        <input type="password" placeholder="Password"/>
        <button id="login-button">login</button>
        <p class="message">Not registered? <a href="create-account.php">Create an account</a></p>
      </form>
    </div>
  </div>




</body>
</html>