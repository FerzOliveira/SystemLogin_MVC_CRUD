<?php

//Modules - Start
include("../../controller/controller_client.php");
//Modules - End

//Receive values - start
$nomeAluno   = @$_POST["name"];
$idadeAluno  = @$_POST["age"];
$idSexo      = @$_POST["genre"];
$idMunicipio = @$_POST["city"];
$idAluno     = @$_POST["id"];
$char        = @$_POST["name"];

$action      = $_POST["action"];
//receive values - end

//instance client class - start
$obj_client = new Client();
//instance - end


if($action == "register"){
	
	//calls method - Start
	$result = $obj_client->register($nomeAluno, $idadeAluno, $idSexo, $idMunicipio);
	echo $result;
	//calls method - End
}
elseif($action == "delete"){
	
	//calls method - Start
	$result = $obj_client -> delete($idAluno);
	//calls method - End
}
elseif($action == "update"){
	
	//calls method - Start
	$result = $obj_client -> update($idAluno,$nomeAluno,$idadeAluno,$idSexo,$idMunicipio);
	//calls method - End
}
elseif($action == "request"){
	
	//calls method - Start
	$result = $obj_client -> livesearch($char);
	//calls method- End
}