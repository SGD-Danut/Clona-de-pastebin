<!DOCTYPE html>
<html>
<head>
	<title>Toate textele</title>
	<?php require_once("include/bootstrapCSS+favicon+CSS.php"); ?>
</head>
<body>
	<div class="px-4 py-5 my-5 text-center">
	    <?php
	    	require_once("include/image+title.php");
	    	require_once("include/navigation.php");
	    	require_once("database/databaseConnection.php");

			$sql = "SELECT * FROM texts";
			$statement = $connect -> query($sql);
			$rows = $statement -> fetchAll(); 
	    ?>
	    <div class="col-lg-6 mx-auto">
	    	<table class="table">
			  <thead>
			    <tr>
			      <th scope="col">Titlu text</th>
			      <th scope="col">Previzualizare text</th>
			      <th scope="col">Vezi text</th>
			    </tr>
			  </thead>
			  <tbody>
			  	<?php
					foreach ($rows as $row) {
						if (strlen($row['textContent']) > 40) {
							$textContent = substr($row['textContent'], 0, 40) . "...";
							echo '
								<tr>
								    <td>' . $row['textTitle'] . '</td>
								    <td>' . $textContent . '</td>
								    <td>
										<a href="showCurrentText.php?text=' . $row['textId'] .'">Vezi tot textul</a>
								    </td>
					    		</tr>
							';
						} else {
							echo '
								<tr>
								    <td>' . $row['textTitle'] . '</td>
								    <td>' . $row['textContent'] . '</td>
					    		</tr>
							';
						}
					}
				?>
			  </tbody>
			</table>
	    </div>
  	</div>
	<?php require_once("include/bootstrapJS.php"); ?>
</body>
</html>
