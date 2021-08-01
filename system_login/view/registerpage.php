<?php 
include("../controller/controller_client.php");
include("validation.php");
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Register</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script type="application/javascript" src="../js/client.js"></script>
</head>
	<?php
	$obj_client   = new Client();
	$arrayCity    = $obj_client  -> getcity();
	$arrayGenre   = $obj_client -> getgenre();
	$arrayState   = $obj_client -> getstate();
	$arrayCountry = $obj_client -> getcountry();
	?>

<body>
	<?php include("menu.php") ?><br>
	
	<center>
		<form id="dados" class="form">

			<p>Name:<input class="name" name="name" id="namebox" type="text"></p>
			<p>Age:<input class="age" name="age" id="agebox" type="text"></p>
			Select gender:<select id="cbgenre">
				<?php foreach($arrayGenre as $concat0){ ?>
				<option value="<?php echo $concat0['idSexo']?>"><?php echo $concat0['sexoAluno']?></option>
				<?php } ?>
			</select><br><br>
			Select city:<select id="cbcity">
				<?php foreach($arrayCity as $concat1){ ?>
				<option value="<?php echo $concat1['idMunicipio']?>"><?php echo $concat1['nomeMunicipio']?></option>
				<?php } ?>
			</select><br><br>
			Select state:<select id="cbstate">
				<?php foreach($arrayState as $concat2){ ?>
				<option value="<?php echo $concat2['idEstado']?>"><?php echo $concat2['nomeEstado']?></option>
				<?php } ?>
			</select><br><br>
			Select Country:<select id="cbcountry">
				<?php foreach($arrayCountry as $concat3){ ?>
				<option value="<?php echo $concat3['idPais']?>"><?php echo $concat3['nomePais']?></option>
				<?php } ?>
			</select><br><br>
			
			
			<input type="button" id="register" value="register" OnClick="Insert();">
			<input type="hidden" name="action" id="action" value="register">

		</form>
	</center>
</body>
</html>