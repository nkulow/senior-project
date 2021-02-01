<?php

	$serverName = "database-1.c4gif9yjog10.us-east-2.rds.amazonaws.com,1433";
	$connectionInfo = array( "Database"=>"maindb", "UID"=>"admin", "PWD"=>'rootuser');
	$conn = sqlsrv_connect( $serverName, $connectionInfo);

	$serverName2 = "database-v2.c4gif9yjog10.us-east-2.rds.amazonaws.com";
	$connectionInfo2 = array( "Database"=>"main", "UID"=>"admin", "PWD"=>'adminroot');
	$conn2 = sqlsrv_connect( $serverName2, $connectionInfo2);
 
	if( $conn ) {
		echo "Connection established to database-1.<br />";
	}else{
		$conn2 = sqlsrv_connect( $serverName2, $connectionInfo2);
		if( $conn2 ) {
		echo "Connection established to database-v2.<br />";
	}else{
			echo "Connection could not be established to database-1.<br /><pre>";
			echo "Connection could not be established to database-v2.<br /><pre>";
		}
	}


?>