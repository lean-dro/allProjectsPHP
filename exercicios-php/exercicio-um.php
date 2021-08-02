<?php 

echo("<style>
    .p{text-align: justify;}
    .a{text-decoration-line: none;}
</style>");

echo("<h1 style=text-align:center;>Exercício 1</h1>");

$nota1 =(double) $_POST['numNt1'];
$nota2 =(double) $_POST['numNt2'];
$nota3 =(double) $_POST['numNt3'];  
$nota4 =(double) $_POST['numNt4']; 

$mediaNotas  =(double) ($nota1+$nota2+$nota3+$nota4)/4;
if ($nota1 > 10 || $nota2 > 10 || $nota3 > 10 || $nota4 > 10) {
   echo("A média não pode ultrapassar de 10");
}else{
if ($mediaNotas < 4.9) {
    echo("Com a média de: ".$mediaNotas." o aluno foi reprovado.");
}
elseif ($mediaNotas < 6.9) {
    echo("Com a média de: ".$mediaNotas.". O aluno está em exame.");
  
}else {
    echo("Com a média de: ".$mediaNotas.". O aluno foi promovido.");

}
echo ("<br><button><a href=index.php>Home</a></button><br>");
}
?>