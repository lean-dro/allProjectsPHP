<?php
header('location: index.php');
include_once("conexao.php");
$materia = $_POST['slMat']; 
$desc = $_POST['txtDesc'];
$dtPost = $_POST['dtPostagem'];
$dtEntreg = $_POST ['dtEntrega'];
$formaEntrega = $_POST['slEntreg'];
$link = $_POST['txtLink'];
if ($link==""){
    $link = "Nenhum";
}else {
    $link = $_POST['txtLink'];
}
$status = $_POST['slSit'];


echo $materia."<br>".$desc."<br>".$dtEntreg."<br>".$dtPost."<br>".$formaEntrega."<br>".$link."<br>".$status;

$insertTabela = "Insert into atividade values";
$insertTabela .= "(default,'$materia','$desc','$dtPost','$dtEntreg','$formaEntrega','$link','$status');"; 
mysqli_query($conexao, $insertTabela) or die ("Erro ao cadastrar :(");
mysqli_close($conexao);
echo "Atividade registrada com sucesso!"
?>