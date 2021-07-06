<?php
  session_start();
	include_once("conexao.php");	

	if(empty($_POST['login']) || empty($_POST['senha'])){
		header('location: index.php');
		exit();
	}

		$usuario = mysqli_real_escape_string($conexao, $_POST['login']); 
	  $senha = mysqli_real_escape_string($conexao,$_POST['senha']);

		$query = "select codigo, nome from nome where nome = '{$usuario}' and senha = md5 ('{$senha}')";

		$result = mysqli_query($conexao, $query);
	  $row = mysqli_num_rows($result);

		if($row == 1){
			$_SESSION['usuario'] = $usuario;
			header ('location: menupet.php');
			exit();
			
		}else{
			header('location: index.php');
			exit();
		}
		
	?>