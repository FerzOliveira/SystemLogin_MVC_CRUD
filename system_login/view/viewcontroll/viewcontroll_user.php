<?php

include("../../controller/controller_login.php");

$email    = $_POST["email"];
$password = $_POST["password"];

$action   = $_POST["action"];
//recebe valores - end

//instance client class - start
$obj_login = new Login()  ;
//instance client class - end

if($action == "login"){
	
	//calls method - Start
	$result = $obj_login -> verify($email, $password);
	//calls method - End
	
	if($result == 1){
		
		session_start();
		
		$_SESSION['email']  = $email;
		$_SESSION['result'] = $result;
		
	}else{
		unset($_SESSION['email']);
		unset($_SESSION['senha']);	
	}
	echo $result;
}