<?php
	$server = "localhost";
	$username = "root";
	$password = "";
	$database = "test";
	
	$connection = new mysqli($server, $username, $password, $database);
	
	if($connection->connect_error){
		die("Conexão falhou ".$connection->connect_error);
	} else {
		echo "Conexão realizada.";
		if($_REQUEST){
			$nomeDeUsuario = $_POST["nome"];		//name="nome" se relaciona com index.php linha 14
			$email = $_POST["email"];						//name="nome" se relaciona com index.php linha 14
			$senha = $_POST["senha"];						//name="nome" se relaciona com index.php linha 14
			
			// Apenas para fins DIDÁTICOS. Procedimento inseguro.
			// Código propenso a SQL Injection.
			$sql = "INSERT INTO usuario (nome, email, senha) VALUES ('$nomeDeUsuario', '$email', '$senha')";
			if($connection->query($sql)){
				echo "Usuário inserido com sucesso.";
			} else {
				echo "Erro ".$sql." ".$connection->error;
			}
		}
	}
?>
