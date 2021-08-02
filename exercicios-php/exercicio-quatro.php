<?php 

echo("<style>
p{text-align: justify;}
a{text-decoration-line: none}
</style>");

echo("<h1 style=text-align:center;>Exercício 4</h1>");


$qtdDivisor = 0;
$numero = (double) $_POST['txtNum'];
$i;
for ($i=1; $i <= $numero; $i++) { 
    if ($numero%$i==0) {
        $qtdDivisor++; 
    }
}

if ($qtdDivisor == 1) {
    echo ("1 não é um número primo");
}elseif ($qtdDivisor == 2) {
    echo($numero." É número primo!");
}else {
    echo($numero."  Não é número primo!");

}
echo ("<br><button><a href=index.php>Home</a></button><br>");

?>