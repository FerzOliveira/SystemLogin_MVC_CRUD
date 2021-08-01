<?php

class ConnectionDB{
	
	function con(){
		$connect = mysqli_connect("localhost","root","")or die(mysqli_error()); //connect with DB
		
		mysqli_select_db($connect,"sistema-aluno")or die(mysqli_error()); //select DB
	
		return $connect;
	}
}