<?php

require_once($_SERVER['DOCUMENT_ROOT']."/system_login/model/connect.php");

class Login{
	
	public function verify($email, $password){
		
		$obj_con = new ConnectionDB;  //calls the server connection
		$connect = $obj_con->con();
		
			
		//SQL INSTRUCTION - Start
		$sql = "SELECT
					* 
				FROM
					usuario
				WHERE
					email = '".$email ."' 
				AND
					senha = '". $password ."'";
		//SQL INSTRUCTION - End
		$result = mysqli_query($connect, $sql) or die(mysqli_error($connect));
		$row    = mysqli_num_rows($result);
		
		return $row; //Return the value
	}
}