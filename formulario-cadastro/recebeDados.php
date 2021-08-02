<?php 

$nome = $_POST['txtNome'];
$turma = $_POST['slTurma'];

switch ($turma) {
	case 0:
		echo("<h2 style=background-color:red;color:white>O aluno ".$nome." não pode ser cadastrado em uma turma inválida!<h2>");
		break;
	
	case 1:
		echo("<h2 style=background-color:green;color:white>O(A) aluno(a) ".$nome." foi cadastrado(a) na turma do 1° DS<h2>");
		break;
	
	case 2:
		echo("<h2 style=background-color:green;color:white>O(A) aluno(a) ".$nome." foi cadastrado(a) na turma do 1° Nutri A<h2>");
		break;

	case 3:
		echo("<h2 style=background-color:green;color:white>O(A) aluno(a) ".$nome." foi cadastrado(a) na turma do 1° Nutri B<h2>");
		break;

	case 4:
		echo("<h2 style=background-color:green;color:white>O(A) aluno(a) ".$nome." foi cadastrado(a) na turma do 2° DS<h2>");
		break;

	case 5:
		echo("<h2 style=background-color:green;color:white>O(A) aluno(a) ".$nome." foi cadastrado(a) na turma do 2° Nutri A<h2>");
		break;

	case 6:
		echo("<h2 style=background-color:green;color:white>O(A) aluno(a) ".$nome." foi cadastrado(a) na turma do 2° Nutri B<h2>");
		break;

	case 7:
		echo("<h2 style=background-color:green;color:white>O(A) aluno(a) ".$nome." foi cadastrado(a) na turma do 3° DS A<h2>");
		break;

	case 8:
		echo("<h2 style=background-color:green;color:white>O(A) aluno(a) ".$nome." foi cadastrado(a) na turma do 3° DS B<h2>");
		break;

	case 9:
		echo("<h2 style=background-color:green;color:white>O(A) aluno(a) ".$nome." foi cadastrado(a) na turma do 3° Nutri A<h2>");
		break;

	case 10:
		echo("<h2 style=background-color:green;color:white>O(A) aluno(a) ".$nome." foi cadastrado(a) na turma do 3° Nutri B<h2>");
		break;
}
 ?>