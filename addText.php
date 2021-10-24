<!DOCTYPE html>
<html>
<head>
	<title>Adaugare text</title>
	<?php require_once("include/bootstrapCSS+favicon+CSS.php"); ?>
</head>
<body>
	<div class="px-4 py-5 my-5 text-center">
	    <?php
	    	require_once("include/image+title.php");
	    	require_once("include/navigation.php"); 
	    ?>
	    <div class="col-lg-6 mx-auto">
	        <form action="backend/addTextBackend.php" method="GET">
			  <div class="mb-3">
			    <label for="InputText" class="form-label textTitle">Titlu text</label>
			    <input type="text" class="form-control" aria-describedby="textTitleHelp" name="textTitle">
			    <div id="textTitleHelp" class="form-text">Numele textului dumneavoastra.</div>
			  </div>
			  <div class="form-floating textContent">
				 <textarea class="form-control" id="textareaSize" placeholder="Continut tex" id="floatingTextarea" name="textContent"></textarea>
				 <label for="floatingTextarea">Continut tex</label>
			  </div>
			  <br>
			  <button type="submit" class="btn btn-primary">Adaugă text</button>
			</form>
	    </div>
  	</div>
</body>
</html>