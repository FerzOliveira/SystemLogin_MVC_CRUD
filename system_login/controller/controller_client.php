<?php
require_once($_SERVER['DOCUMENT_ROOT']."/system_login/model/connect.php");

class Client{
	
	function search($id = false){
		
		$obj_con = new ConnectionDB;  //calls the server connection
		$connect=$obj_con->con();
			
		//SQL INSTRUCTION - 
		$sql = "SELECT
					A.idAluno,
					A.nomeAluno,
					A.idadeAluno,
					B.idSexo,
					B.sexoAluno,
					C.idMunicipio,
					C.nomeMunicipio,
					D.nomeEstado,
					E.nomePais
				FROM
					aluno     A,
					sexo      B,
					municipio C,
					estado    D,
					pais      E
				WHERE
					A.idSexo      = B.idSexo      AND
					A.idMunicipio = C.idMunicipio AND
					C.idEstado    = D.idEstado    AND
					D.idPais      = E.idPais ";
		if($id>0){
			$sql .= "AND idAluno = ".$id;
		}
		//SQL INSTRUCTION - End
		$result = mysqli_query($connect,$sql);
		$r = 0;
		while($data = mysqli_fetch_assoc($result)){
			
			$row[$r]['idAluno']       = $data['idAluno'];
			$row[$r]['nomeAluno']     = $data['nomeAluno'];
			$row[$r]['idadeAluno']    = $data['idadeAluno'];
			$row[$r]['idMunicipio']   = $data['idMunicipio'];
			$row[$r]['nomeMunicipio'] = $data['nomeMunicipio'];
			$row[$r]['nomeEstado']    = $data['nomeEstado'];
			$row[$r]['nomePais']      = $data['nomePais'];
			$row[$r]['sexoAluno']     = $data['sexoAluno'];
			$row[$r]['idSexo']        = $data['idSexo'];
			$r++;
		}
		
		
		return $row; // Return the value
	}
	
	
	function getcity($id = false){
		
		$obj_con = new ConnectionDB;  //calls the nerver connection
		$connect=$obj_con->con();
			
		//SQL INSTRUCTION - Start
		$sql = "SELECT
					idMunicipio,
					nomeMunicipio
				FROM

					municipio
				";
		if($id>0){
			$sql .= "WHERE idAluno = ".$id;
		}
		//SQL INSTRUCTION - End
		
		$result = mysqli_query($connect,$sql);
		$r = 0;
		while($data = mysqli_fetch_assoc($result)){
			
			$row[$r]['idMunicipio']   = $data['idMunicipio'];
			$row[$r]['nomeMunicipio'] = $data['nomeMunicipio'];
			$r++;
			
		}
	
		
		return $row; // Return the value
	}
	
	
	function getgenre($id = false){
		
		$obj_con = new ConnectionDB;  //calls the server connection
		$connect=$obj_con->con();
			
		//SQL INSTRUCTION - Start
		$sql = "SELECT
					idSexo,
					sexoAluno
				FROM

					sexo
				";
		if($id>0){
			$sql .= "WHERE idAluno = ".$id;
		}
		//SQL INSTRUCTION - End
		
		$result = mysqli_query($connect,$sql);
		$r = 0;
		while($data = mysqli_fetch_assoc($result)){
			
			$row[$r]['idSexo']    = $data['idSexo'];
			$row[$r]['sexoAluno'] = $data['sexoAluno'];
			$r++;
			
		}
		
		return $row; // Return the value
	}
	
	
	function getstate($id = false){
		
		$obj_con = new ConnectionDB;  //calls the server connection
		$connect=$obj_con->con();
			
		//SQL INSTRUCTION - Start
		$sql = "SELECT
					idEstado,
					nomeEstado
				FROM

					estado
				";
		if($id>0){
			$sql .= "WHERE idAluno = ".$id;
		}
		//SQL INSTRUCTION - End
		$result = mysqli_query($connect,$sql);
		$r = 0;
		while($data = mysqli_fetch_assoc($result)){
			
			$row[$r]['idEstado']    = $data['idEstado'];
			$row[$r]['nomeEstado']  = $data['nomeEstado'];
			$r++;
			
		}
		
		return $row; // Return the value
	}
	
	
	function getcountry($id = false){
		
		$obj_con = new ConnectionDB;  //calls the server connection
		$connect=$obj_con->con();
			
		//SQL INSTRUCTION - Start
		$sql = "SELECT
					idPais,
					nomePais
				FROM

					pais
				";
		if($id>0){
			$sql .= "WHERE idAluno = ".$id;
		}
		//SQL INSTRUCTION - End
		
		$result = mysqli_query($connect,$sql);
		$r = 0;
		while($data = mysqli_fetch_assoc($result)){
			
			$row[$r]['idPais']    = $data['idPais'];
			$row[$r]['nomePais']  = $data['nomePais'];
			$r++;
			
		}
		
		return $row; // Return the value
	}
	
	
	function register($nomeAluno, $idadeAluno, $idSexo, $idMunicipio){
		$result = true;
		
		$obj_con = new ConnectionDB; //calls the server connection
		$connect=$obj_con->con();
		
		//SQL INSTRUCTION - Start
		$sqlInsert = "
		INSERT INTO aluno (
			nomeAluno,
			idadeAluno,
			idSexo,
			idMunicipio
		) VALUES (
			'".$nomeAluno."',
			".$idadeAluno.",
			".$idSexo.",
			".$idMunicipio.");
			";
		//SQL INSTRUCTION - End
		mysqli_query($connect,$sqlInsert);
		
		//return $sqlInsert;
			
		if($result === false){
			return false;
		}else{
			return true;
		}	
	}
	
	
	function delete($id){
		$result = true;
		
		$obj_con = new ConnectionDB; //calls the server connection
		$connect = $obj_con->con();
		
		//SQL INSTRUCTION - Start
		$sqlDelete = "
		DELETE FROM aluno
		WHERE idAluno =" .$id;
		;
		//SQL INSTRUCTION - End
		mysqli_query($connect,$sqlDelete)or die($result = false);
		
		if($result === false){
			return false;
		}else{
			return true;
		}	
	}
	
	
	function update($idAluno,$nomeAluno,$idadeAluno,$idSexo,$idMunicipio){
		$result = true;
		
		$obj_con = new ConnectionDB; //calls the server connection
		$connect = $obj_con->con();
		
		//SQL INSTRUCTION - Start
		$sqlUpdate = "
			UPDATE
				aluno
			SET
				nomeAluno   = '".$nomeAluno."',
				idadeAluno  = ".$idadeAluno.",
				idSexo      = ".$idSexo.",
				idMunicipio = ".$idMunicipio."
			WHERE
				idAluno =" .$idAluno;
		;
		//SQL INSTRUCTION - End
		mysqli_query($connect,$sqlUpdate)or die($result = false);
		
		if($result === false){
			return false;
		}else{
			return true;
		}	
	}
	
	
	function livesearch($char){
		
		$obj_con = new ConnectionDB;  //calls the server connection
		$connect=$obj_con->con();
			
		$sql = "SELECT
					nomeAluno,
					idAluno
				FROM 
					aluno 
				WHERE 
					nomeAluno 
				LIKE
					'".$char."%'";
		$result = mysqli_query($connect, $sql);
		$r = 0;
		if(mysqli_num_rows($result)>0){
			while($data = mysqli_fetch_assoc($result)) {
				echo "	
				<tr>
		          <td>".$data['nomeAluno']."</td>
				  </tr>
		        ";
				
				//$row[$r]['idAluno']   = $data['idAluno'];
				//$r++;
				}
			}
		else{
			echo "<tr><td>0 results found</td></tr>";
		}
		//return $row;
	}
}