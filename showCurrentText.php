<!DOCTYPE html>
<html>
<head>
	<title>Textul curent</title>
	<?php require_once("include/bootstrapCSS+favicon+CSS.php"); ?>
</head>
<body>
	<div class="px-4 py-5 my-5 text-center">
	    <?php
	    	require_once("include/image+title.php");
	    	require_once("include/navigation.php");
	    	require_once("database/databaseConnection.php");

	    	$textId = (int)$_GET['text'];
			$sql = "SELECT * FROM texts WHERE textId = '$textId'";
			$statement = $connect -> query($sql);
			$row = $statement -> fetch();
	    ?>
	    <div class="col-lg-6 mx-auto">
	    	<div class="card mb-3">
			  <div class="card-body">
			    <h5 class="card-title"><?php echo $row['textTitle']; ?></h5>
			    <p class="card-text"><?php echo $row['textContent']; ?></p>
			    <p class="card-text"><small class="text-muted">Adaugat la: <?php echo $row['createdAt']; ?></small></p>
			  </div>
			</div>
	    </div>
  	</div>
	<?php require_once("include/bootstrapJS.php"); ?>
</body>
</html>
