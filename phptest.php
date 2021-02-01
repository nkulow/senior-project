<!DOCTYPE html>
<html>
<head>
	<title> PHP TEST </title>
</head>
<body>
	<h1> PHP TEST </h1>
	<?php 
		require_once ('config.php');

		// include ('config2.php');

		$sql = "SELECT ProductName FROM Products WHERE ProductID = 1";
		$stmt = sqlsrv_query($conn, $sql);
		if($conn){
			echo "Connection established<br/>";
		}
		if($stmt === false){
			die(print_r(sqlsrv_errors(), true));
		}
		if (sqlsrv_fetch($stmt) === false){
			die(print_r(sqlsrv_errors(), true));
		}
		$name = sqlsrv_get_field($stmt, 0);
		echo "$name";
	?>
	<br><br>
	<?php 

		$sql = "SELECT ProductName FROM Products WHERE ProductID = 2";
		$stmt = sqlsrv_query($conn, $sql);
		if($conn){
			echo "Connection established<br/>";
		}
		if($stmt === false){
			die(print_r(sqlsrv_errors(), true));
		}
		if (sqlsrv_fetch($stmt) === false){
			die(print_r(sqlsrv_errors(), true));
		}
		$name = sqlsrv_get_field($stmt, 0);
		echo "$name";
	?>
	<br><br>
	<?php 

		$sql = "SELECT ProductName FROM Products WHERE ProductID = 3";
		$stmt = sqlsrv_query($conn, $sql);
		if($conn){
			echo "Connection established<br/>";
		}
		if($stmt === false){
			die(print_r(sqlsrv_errors(), true));
		}
		if (sqlsrv_fetch($stmt) === false){
			die(print_r(sqlsrv_errors(), true));
		}
		$name = sqlsrv_get_field($stmt, 0);
		echo "$name";
	?>
		
</body>
</html>
