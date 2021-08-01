<?php 
include("../controller/controller_client.php");
include("validation.php");
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>List</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script type="application/javascript" src="../js/client.js"></script>
</head>
<?php
	$obj_client = new Client();

	$arrayClient = $obj_client -> search();	
?>
<body>
	<?php include("menu.php") ?><br>
		
	<center>
		<table border="1">
		<tr>
			<td>Name</td>
			<td>Age</td>
			<td>Genre</td>
			<td>City</td>
			<td>State</td>
			<td>Country</td>
			<td style="text-align: center">Action</td> 
		</tr>
	</center>	
		

	<?php
	//echo '<pre>';
	//var_dump($arrayClient);
	//echo '</pre>';
	
		foreach($arrayClient as $value){ //preenche a tabela com os valores
		?>
		<tr>
			<td><?php echo $value['nomeAluno']     ?></td>
			<td><?php echo $value['idadeAluno']    ?></td>
			<td><?php echo $value['sexoAluno']     ?></td>
			<td><?php echo $value['nomeMunicipio'] ?></td>
			<td><?php echo $value['nomeEstado']    ?></td>
			<td><?php echo $value['nomePais']      ?></td>

			<td> <input type="button" onClick="gotoeditpage(<?php echo $value['idAluno'] ?>)" value="Edit"/> 
			<input type = "button" onClick = "delet(<?php echo $value['idAluno'] ?>);" value = "Delete"/> </td>
		</tr>
		<?php	
		}
			
	?>
	</table>
</body>
</html>
