<?php 
include("../controller/controller_client.php");
include("validation.php");
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Search</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script type="application/javascript" src="../js/client.js"></script>
	<script type="application/javascript" src="../js/livesearch.js"></script>
</head>
	<?php
	$obj_client = new Client();

	$arrayClient = $obj_client -> livesearch($char);	
	?>

<body>
	<?php include("menu.php") ?><br>
	<div>
		<center>
			<div class="search-box">
        		<input type="text" class="form-control" id="search">
				<input type="hidden" name="action" id="action" value="request">
      			<table class="table table-hover" border=1>
					<thead>
						<tr>
					  		<th>Firstname</th>
						</tr>
				  	</thead>
				  <tbody id="output">

				  </tbody>
    			</table>
    		</div>
			</center>
	</div>
</body>
</html>
