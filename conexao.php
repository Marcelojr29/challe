<?php 

	try {
		//faz a conexao com o banco

		$conexao = new PDO("mysql:host=localhost; port=3306;dbname=chale1;", "root", "");

	} catch (PDOException $e) {
		echo "Falha ao conectar com o banco de dados: " . $e->getMessage();		

	}

	return $conexao;
?>