<?php  
	include_once "conexao.php";

	try {

		$nome = filter_var($_POST['nome']);
		$sobrenome = filter_var($_POST['sobrenome']);
		$email = filter_var($_POST['email']);
		$confemail = filter_var($_POST['conf']);
		$celular = filter_var($_POST['celular']);

		$insert = $conexao->prepare("insert into usuario(nome, sobrenome, email, conf, celular) values (:nome, :sobrenome, :email, :conf, :celular)");

		$insert->bindParam(':nome', $nome);
		$insert->bindParam(':sobrenome', $sobrenome);
		$insert->bindParam(':email', $email);
		$insert->bindParam(':conf', $confemail);
		$insert->bindParam(':celular', $celular);

		$insert -> execute();
		header("location: ../index.php");
		
	} catch (PDOException $e) {
		
		echo 'Error:' . $e->getMessage();

	}





?>