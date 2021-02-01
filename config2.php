	
<?php
	$serverName = "database-1.c4gif9yjog10.us-east-2.rds.amazonaws.com,1433";
	$connectionInfo = array( "Database"=>"maindb", "UID"=>"admin", "PWD"=>'rootuser');
	$connTest = sqlsrv_connect( $serverName, $connectionInfo);
?>