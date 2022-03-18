<?php

//For online database
$serverName = "remotemysql.com";
$username = "GGJDytLzTO";
$password = "er9VwZci4U";
$databaseName = "GGJDytLzTO";

//For localhost database
//$serverName = "localhost";
//$username = "root";
//$password = "";
//$databaseName = "pastebinclone";
try {
	$connect = new PDO("mysql:host=$serverName;dbname=$databaseName", $username, $password);
	$connect -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	//echo "Conexiune realizata cu succes!";
} catch (PDOException $e) {
	echo $e -> getMessage();
}

?>
