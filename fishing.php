<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="stylesp1.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"> -->
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
	<title>Fishing</title>
</head>
<body>
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

	<br><br>
	
	<div> <!-- product cards with 3 in each row -->
		<div class="row">
			<div class="col-md-4">
				<figure class="card card-product">
					<div class="img-wrap"><img src="images/strikekingjerkbait.jpg"></div>
					<figcaption class="info-wrap">
						<h4 class="title">
							<?php
					
								require_once('config.php');
							
							
								$sql = "SELECT ProductName FROM Products WHERE ProductID = 7";
								$stmt = sqlsrv_query($conn, $sql);
								if($stmt === false){
									die(print_r(sqlsrv_errors(), true));
								}
								if (sqlsrv_fetch($stmt) === false){
									die(print_r(sqlsrv_errors(), true));
								}

								$name = sqlsrv_get_field($stmt, 0);
								echo "$name"
							
							?>
						</h4>
						<?php
							
							$sql = "SELECT Description FROM Products WHERE ProductID = 7";
							$stmt = sqlsrv_query($conn, $sql);
							if($stmt === false){
								die(print_r(sqlsrv_errors(), true));
							}
							if (sqlsrv_fetch($stmt) === false){
								die(print_r(sqlsrv_errors(), true));
							}
							$name = sqlsrv_get_field($stmt, 0);
							echo "$name";
						?>		
					</figcaption>
					<div class="bottom-wrap">
						<!-- <a href="" class="btn btn-sm btn-primary float-right">Add to cart</a>	 -->
						<form style="float: right;" onclick="myFunction()" target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
							<input type="hidden" name="cmd" value="_s-xclick">
							<input type="hidden" name="hosted_button_id" value="F498NLD9JEEUL">
							<input type="submit" value="Add to Cart" class="btn btn-sm btn-primary float-right" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
							<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
						</form>
						<div class="price-wrap h5">
							<span class="price-new">$
								<?php
									
									$sql = "SELECT CAST(Price as decimal(10,2)) FROM Products WHERE ProductID = 7";
									$stmt = sqlsrv_query($conn, $sql);
									if($stmt === false){
										die(print_r(sqlsrv_errors(), true));
									}
									if (sqlsrv_fetch($stmt) === false){
										die(print_r(sqlsrv_errors(), true));
									}
									$name = sqlsrv_get_field($stmt, 0);
									$newPrice = $name - ($name * 0.2);
									echo number_format($newPrice, 2);
								?>
							</span> 
							<del class="price-old">$
								<?php
									
									$sql = "SELECT CAST(Price as decimal(10,2)) FROM Products WHERE ProductID = 7";
									$stmt = sqlsrv_query($conn, $sql);
									if($stmt === false){
										die(print_r(sqlsrv_errors(), true));
									}
									if (sqlsrv_fetch($stmt) === false){
										die(print_r(sqlsrv_errors(), true));
									}
									$name = sqlsrv_get_field($stmt, 0);
									echo "$name";
								?>	
							</del>
						</div> <!-- price-wrap.// -->
					</div> <!-- bottom-wrap.// -->
				</figure>
			</div> <!-- col // -->
			<div class="col-md-4">
				<figure class="card card-product">
					<div class="img-wrap"><img src="images/bassprospeedshad.jpg"> </div>
					<figcaption class="info-wrap">
						<h4 class="title">
							<?php 
								
								$sql = "SELECT ProductName FROM Products WHERE ProductID = 8";
								$stmt = sqlsrv_query($conn, $sql);
								if($stmt === false){
									die(print_r(sqlsrv_errors(), true));
								}
								if (sqlsrv_fetch($stmt) === false){
									die(print_r(sqlsrv_errors(), true));
								}
								$name = sqlsrv_get_field($stmt, 0);
								echo "$name";
							?>
						</h4>
						<?php
						
							$sql = "SELECT Description FROM Products WHERE ProductID = 8";
							$stmt = sqlsrv_query($conn, $sql);
							if($stmt === false){
								die(print_r(sqlsrv_errors(), true));
							}
							if (sqlsrv_fetch($stmt) === false){
								die(print_r(sqlsrv_errors(), true));
							}
							$name = sqlsrv_get_field($stmt, 0);
							echo "$name";
						?>		
					</figcaption>
					<div class="bottom-wrap">
						<!-- <a href="" class="btn btn-sm btn-primary float-right">Add to cart</a>	 -->
						<form style="float: right;" onclick="myFunction()" target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
							<input type="hidden" name="cmd" value="_s-xclick">
							<input type="hidden" name="hosted_button_id" value="CHFETECGCSBYQ">
							<input type="submit" value="Add to Cart" class="btn btn-sm btn-primary float-right" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
							<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
						</form>
						<div class="price-wrap h5">
							<span class="price-new">$
								<?php
									
									$sql = "SELECT CAST(Price as decimal(10,2)) FROM Products WHERE ProductID = 8";
									$stmt = sqlsrv_query($conn, $sql);
									if($stmt === false){
										die(print_r(sqlsrv_errors(), true));
									}
									if (sqlsrv_fetch($stmt) === false){
										die(print_r(sqlsrv_errors(), true));
									}
									$name = sqlsrv_get_field($stmt, 0);
									$newPrice = $name - ($name * 0.2);
									echo number_format($newPrice, 2);
								?>
							</span> 
							<del class="price-old">$
								<?php
								
									$sql = "SELECT CAST(Price as decimal(10,2)) FROM Products WHERE ProductID = 8";
									$stmt = sqlsrv_query($conn, $sql);
									if($stmt === false){
										die(print_r(sqlsrv_errors(), true));
									}
									if (sqlsrv_fetch($stmt) === false){
										die(print_r(sqlsrv_errors(), true));
									}
									$name = sqlsrv_get_field($stmt, 0);
									echo "$name";
								?>	
							</del>
						</div> <!-- price-wrap.// -->
					</div> <!-- bottom-wrap.// -->
				</figure>
			</div> <!-- col // -->
			<div class="col-md-4">
				<figure class="card card-product">
					<div class="img-wrap"><img src="images/garciarevocastingrod.jpg"></div>
					<figcaption class="info-wrap">
						<h4 class="title">
							<?php 
								
								$sql = "SELECT ProductName FROM Products WHERE ProductID = 9";
								$stmt = sqlsrv_query($conn, $sql);
								if($stmt === false){
									die(print_r(sqlsrv_errors(), true));
								}
								if (sqlsrv_fetch($stmt) === false){
									die(print_r(sqlsrv_errors(), true));
								}
								$name = sqlsrv_get_field($stmt, 0);
								echo "$name";
							?>
						</h4>
						<?php
							
							$sql = "SELECT Description FROM Products WHERE ProductID = 9";
							$stmt = sqlsrv_query($conn, $sql);
							if($stmt === false){
								die(print_r(sqlsrv_errors(), true));
							}
							if (sqlsrv_fetch($stmt) === false){
								die(print_r(sqlsrv_errors(), true));
							}
							$name = sqlsrv_get_field($stmt, 0);
							echo "$name";
						?>		
					</figcaption>
					<div class="bottom-wrap">
						<!-- <a href="" class="btn btn-sm btn-primary float-right">Add to cart</a>	 -->
						<form style="float: right;" onclick="myFunction()" target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
							<input type="hidden" name="cmd" value="_s-xclick">
							<input type="hidden" name="hosted_button_id" value="3TEZNAWPUL2ZJ">
							<input type="submit" value="Add to Cart" class="btn btn-sm btn-primary float-right" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
							<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
						</form>
						<div class="price-wrap h5">
							<span class="price-new">$
								<?php
									
									$sql = "SELECT CAST(Price as decimal(10,2)) FROM Products WHERE ProductID = 9";
									$stmt = sqlsrv_query($conn, $sql);
									if($stmt === false){
										die(print_r(sqlsrv_errors(), true));
									}
									if (sqlsrv_fetch($stmt) === false){
										die(print_r(sqlsrv_errors(), true));
									}
									$name = sqlsrv_get_field($stmt, 0);
									$newPrice = $name - ($name * 0.2);
									echo number_format($newPrice, 2);
								?>
							</span> 
							<del class="price-old">$
								<?php
									
									$sql = "SELECT CAST(Price as decimal(10,2)) FROM Products WHERE ProductID = 9";
									$stmt = sqlsrv_query($conn, $sql);
									if($stmt === false){
										die(print_r(sqlsrv_errors(), true));
									}
									if (sqlsrv_fetch($stmt) === false){
										die(print_r(sqlsrv_errors(), true));
									}
									$name = sqlsrv_get_field($stmt, 0);
									echo "$name";
								?>	
							</del>
						</div> <!-- price-wrap.// -->
					</div> <!-- bottom-wrap.// -->
				</figure>
			</div> <!-- col // -->
		</div> <!-- row.// -->
	</div>
	<div> <!-- product cards with 3 in each row -->
		<div class="row">
			<div class="col-md-4">
				<figure class="card card-product">
					<div class="img-wrap"><img src="images/hyperbraidfishingline.jpg"></div>
					<figcaption class="info-wrap">
						<h4 class="title">
							<?php 
								
								$sql = "SELECT ProductName FROM Products WHERE ProductID = 10";
								$stmt = sqlsrv_query($conn, $sql);
								if($stmt === false){
									die(print_r(sqlsrv_errors(), true));
								}
								if (sqlsrv_fetch($stmt) === false){
									die(print_r(sqlsrv_errors(), true));
								}
								$name = sqlsrv_get_field($stmt, 0);
								echo "$name";
							?>
						</h4>
						<?php
							
							$sql = "SELECT Description FROM Products WHERE ProductID = 10";
							$stmt = sqlsrv_query($conn, $sql);
							if($stmt === false){
								die(print_r(sqlsrv_errors(), true));
							}
							if (sqlsrv_fetch($stmt) === false){
								die(print_r(sqlsrv_errors(), true));
							}
							$name = sqlsrv_get_field($stmt, 0);
							echo "$name";
						?>		
					</figcaption>
					<div class="bottom-wrap">
						<!-- <a href="" class="btn btn-sm btn-primary float-right">Add to cart</a>	 -->
						<form style="float: right;" onclick="myFunction()" target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
							<input type="hidden" name="cmd" value="_s-xclick">
							<input type="hidden" name="hosted_button_id" value="6L5T6DH3CEJL8">
							<input type="submit" value="Add to Cart" class="btn btn-sm btn-primary float-right" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
							<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
						</form>
						<div class="price-wrap h5">
							<span class="price-new">$
								<?php
									
									$sql = "SELECT CAST(Price as decimal(10,2)) FROM Products WHERE ProductID = 10";
									$stmt = sqlsrv_query($conn, $sql);
									if($stmt === false){
										die(print_r(sqlsrv_errors(), true));
									}
									if (sqlsrv_fetch($stmt) === false){
										die(print_r(sqlsrv_errors(), true));
									}
									$name = sqlsrv_get_field($stmt, 0);
									$newPrice = $name - ($name * 0.2);
									echo number_format($newPrice, 2);
								?>
							</span> 
							<del class="price-old">$
								<?php
									
									$sql = "SELECT CAST(Price as decimal(10,2)) FROM Products WHERE ProductID = 10";
									$stmt = sqlsrv_query($conn, $sql);
									if($stmt === false){
										die(print_r(sqlsrv_errors(), true));
									}
									if (sqlsrv_fetch($stmt) === false){
										die(print_r(sqlsrv_errors(), true));
									}
									$name = sqlsrv_get_field($stmt, 0);
									echo "$name";
								?>	
							</del>
						</div> <!-- price-wrap.// -->
					</div> <!-- bottom-wrap.// -->
				</figure>
			</div> <!-- col // -->
			<div class="col-md-4">
				<figure class="card card-product">
					<div class="img-wrap"><img src="images/tacklestation.jpg"> </div>
					<figcaption class="info-wrap">
						<h4 class="title">
							<?php 
								
								$sql = "SELECT ProductName FROM Products WHERE ProductID = 11";
								$stmt = sqlsrv_query($conn, $sql);
								if($stmt === false){
									die(print_r(sqlsrv_errors(), true));
								}
								if (sqlsrv_fetch($stmt) === false){
									die(print_r(sqlsrv_errors(), true));
								}
								$name = sqlsrv_get_field($stmt, 0);
								echo "$name";
							?>
						</h4>
						<?php
							
							$sql = "SELECT Description FROM Products WHERE ProductID = 11";
							$stmt = sqlsrv_query($conn, $sql);
							if($stmt === false){
								die(print_r(sqlsrv_errors(), true));
							}
							if (sqlsrv_fetch($stmt) === false){
								die(print_r(sqlsrv_errors(), true));
							}
							$name = sqlsrv_get_field($stmt, 0);
							echo "$name";
						?>		
					</figcaption>
					<div class="bottom-wrap">
						<!-- <a href="" class="btn btn-sm btn-primary float-right">Add to cart</a>	 -->
						<form style="float: right;" onclick="myFunction()" target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
							<input type="hidden" name="cmd" value="_s-xclick">
							<input type="hidden" name="hosted_button_id" value="UC9F7D64A49UN">
							<input type="submit" value="Add to Cart" class="btn btn-sm btn-primary float-right" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
							<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
						</form>

						<div class="price-wrap h5">
							<span class="price-new">$
								<?php
									
									$sql = "SELECT CAST(Price as decimal(10,2)) FROM Products WHERE ProductID = 11";
									$stmt = sqlsrv_query($conn, $sql);
									if($stmt === false){
										die(print_r(sqlsrv_errors(), true));
									}
									if (sqlsrv_fetch($stmt) === false){
										die(print_r(sqlsrv_errors(), true));
									}
									$name = sqlsrv_get_field($stmt, 0);
									$newPrice = $name - ($name * 0.2);
									echo number_format($newPrice, 2);
								?>
							</span> 
							<del class="price-old">$
								<?php
									
									$sql = "SELECT CAST(Price as decimal(10,2)) FROM Products WHERE ProductID = 11";
									$stmt = sqlsrv_query($conn, $sql);
									if($stmt === false){
										die(print_r(sqlsrv_errors(), true));
									}
									if (sqlsrv_fetch($stmt) === false){
										die(print_r(sqlsrv_errors(), true));
									}
									$name = sqlsrv_get_field($stmt, 0);
									echo "$name";
								?>	
							</del>
						</div> <!-- price-wrap.// -->
					</div> <!-- bottom-wrap.// -->
				</figure>
			</div> <!-- col // -->
			<div class="col-md-4">
				
			</div> <!-- col // -->
		</div> <!-- row.// -->
	</div>
	
<!-- Script to notify user they have added item to cart -->
	<script>
		function myFunction() {
  			alert("Added to Cart");
		}
	</script>

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