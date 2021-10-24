<?php 
require_once("../database/databaseConnection.php");

if (!empty($_GET['textTitle']) && !empty($_GET['textContent'])) {
	$textTitle = $_GET['textTitle'];
	$textContent = $_GET['textContent'];

	$sqlQuery = "INSERT INTO texts (textTitle, textContent) VALUES (:textTitle, :textContent)";
	$statement = $connect -> prepare($sqlQuery);
	$statement -> bindParam(':textTitle', $textTitle);
	$statement -> bindParam(':textContent', $textContent);
	$statement -> execute();
	header("location: ../showAllTexts.php");
}

?>