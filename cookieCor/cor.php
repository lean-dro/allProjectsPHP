<?php
	header("Location: index.php");

	$cor = $_POST['corSelect'];
	
	// echo("cor escolhida: ".$cor);

	setcookie('corCookie',$cor, time()+120);//3 minutos
	// setcookie('corCookie',$cor, time()+(60*60*24*10));
	/*
		60 - 1 minuto
		*60 - 1 hora
		*24 - 1 dia
		*10 - 10 dias
	*/
?>