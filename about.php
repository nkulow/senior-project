<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="helpPages1.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"> -->
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
	<title>About Us</title>
</head>
<body>
	<!-- Header with navbar -->
	<header>
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container-fluid">
				<div class="navbar navbar-header nav-outdoors">
					<a class="navbar-brand nav-link active" href="index.html">Campwater Outdoors</a>
					<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myNavbar">
						<span class="navbar-toggler-icon"></span>
			    </button>
				</div>
				<div class="collapse navbar-collapse" id="myNavbar">
					<div class="navbar-nav">
						<ul class="nav navbar-nav custom-nav-link">
							<li>
								<a class="nav-item nav-link" href="fishing.php">Fishing</a>
							</li>
							<li>
								<a class="nav-item nav-link" href="boating.php">Boating</a>
							</li>
							<li>
								<a class="nav-item nav-link" href="camping.php">Camping</a>
							</li>
							<li>
								<a class="nav-item nav-link" href="hunting.php">Hunting</a>
							</li>
							<li>
								<a class="nav-item nav-link" href="watersports.php">Watersports</a>
							</li>
						</ul>
					</div>
				</div>
				 
			</div>
	</header>
	<div style="padding: 20px; background-color: rgb(0,100,161);">
		<?php 
					$serverName = "database-1.c4gif9yjog10.us-east-2.rds.amazonaws.com,1433";
					$connectionInfo = array( "Database"=>"maindb", "UID"=>"admin", "PWD"=>'rootuser');
					$conn = sqlsrv_connect( $serverName, $connectionInfo);

					$serverName2 = "database-v2.c4gif9yjog10.us-east-2.rds.amazonaws.com";
					$connectionInfo2 = array( "Database"=>"main", "UID"=>"admin", "PWD"=>'adminroot');

					if( $conn == false ) {
						$conn = sqlsrv_connect( $serverName2, $connectionInfo2);
						echo "Connected to database-v2";
					}
					else{
						echo "Connected to database-1";
					}
				?>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col" id="leftCol"></div>

			<div class="col-8">
				<div class="contactInfo">
					<hr><h2 style="color: rgb(0,100,161);">About Us</h2>
					<br>
					<p style="font-size: 20px;">
						Inspired by the great outdoors, We at Campwater Outdoors are a small team who enjoy the outdoors just as much as our loyal customers. Campwater Outdoors was founded in 2020 and focuses on selling persistent, great quality product for your outdoor needs. <br><br>
						Our team is located in Tampa, FL and has a genuine interest in camping, fishing, hunting, and being on the water. Therefore, Campwater Outdoors is actively and consistently involved in these sports. Allowing us to stay up to date on the newest and best technology in the industry. <br><br>
						Our quality product is not the only thing we are proud of. At Campwater Outdoors, your customer needs come first and foremost. We strive to offer the best service and consumer enviornment, ensuring you never leave unsatisfied. If any of our customers feel unsatisfied, you have our promise that we will make it right. 
					</p>
				</div>
			</div>

			<div class="col" id="rightCol"></div>
		</div>
	</div>
	<div style="padding: 20px; background-color: rgb(0,100,161);"></div>

	<footer class="page-footer font-small blue pt-4" style="background-color: rgb(248,249,250);">
  <!-- Footer Links -->
  <div class="container-fluid text-center text-md-left" style="padding-left: 60px;">

    <div class="row">
      <div class="col-md-6 mt-md-0 mt-3">
        <h5 class="text-uppercase">Contact</h5>
        <h6>1-800-OUTDOORS</h6>
        <a href="mailto:info@outdoors.com">info@outdoors.com</a>
      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none pb-3">

      <!-- Grid column -->
      <div class="col-md-3 mb-md-0 mb-3">
        <h5 class="text-uppercase">Support</h5>
        <ul class="list-unstyled">
          <li>
            <a href="contact.html">Contact Us</a>
          </li>
          <li>
            <a href="faq.html">FAQ</a>
          </li>
          <li>
            <a href="returns.html">Returns</a>
          </li>
        </ul>
      </div>

      <div class="col-md-3 mb-md-0 mb-3">
        <h5 class="text-uppercase">General</h5>
        <ul class="list-unstyled">
          <li>
            <a href="about.php">About Us</a>
          </li>
          <li>
            <a href="giftcards.html">Gift Cards</a>
          </li>
        </ul>

      </div>
    </div>
  </div>
  <!-- Copyright -->
  <div class="footer-copyright text-center py-3" style="background-color: rgb(192,192,192);">2020 Copyright:
    <a href="http://redundantoutdoors.com">redundantoutdoors.com</a>
  </div>
  <!-- Copyright -->

</footer>



</body>
</html>