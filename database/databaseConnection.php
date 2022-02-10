<?php

//For online database
$serverName = "sql5.freesqldatabase.com";
$username = "sql5471917";
$password = "mMjMjplwlV";
$databaseName = "sql5471917";

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
