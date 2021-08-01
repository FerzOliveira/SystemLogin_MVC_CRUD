<?php 
include("../controller/controller_client.php");
include("validation.php");
?>
<?php $id = $_GET["id"]; //Receives value ID ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Edit</title>
	<script type="application/javascript" src="../js/client.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<?php
//Instance client class - Start	
	
	$obj_client = new Client();

	$arrayClient = $obj_client -> search($id);
	$arrayCity   = $obj_client  -> getcity();
	$arrayGenre  = $obj_client -> getgenre();
	$arrayState   = $obj_client -> getstate();
	$arrayCountry = $obj_client -> getcountry();
	
//Instance client class - Start	
?>
<body>
	<?php include("menu.php") ?><br>
	
	<center>
	<form action="">
		Nome:  <input type="text" name="name" id="namebox" value="<?php echo $arrayClient[0]['nomeAluno'] ?>"><br><br>
		Idade: <input type="text" name="age" id="agebox" value="<?php echo $arrayClient[0]['idadeAluno'] ?>"><br><br>
		Select gender:<select id="cbgenre">
				<?php foreach($arrayGenre as $concat){ ?>
				<option value="<?php echo $concat['idSexo']?>"><?php echo $concat['sexoAluno']?></option>
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
		<input type="hidden" name="id" id="idbox" value="<?php echo $arrayClient[0]['idAluno'] ?>">
		
		<input type="button" id="update" value="edit" onClick=edit()>
		<input type="hidden" name="action" id="action" value="update">
		
	
	</form>
	<br>
	<input type="button" onClick="telaListar();" value="Listar" >
	</center>
	
	
</body>
</html>