<?php
	$username='root';
	$password='';
	$servername='localhost'; 
	$database='cadastro';
	$conexao = mysqli_connect($servername, $username, $password, $database);
	if (!$conexao) {
		die ("Num deu bom :(". mysqli_connect_error());
	}
?>