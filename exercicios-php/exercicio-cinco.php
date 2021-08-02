<?php 

echo("<style>
    p{text-align: justify;}
    a{text-decoration-line: none}
</style>");

echo("<h1 style=text-align:center;>Exercício 5</h1>");

$anterior = 0;
$atual = 1;
$proximo = $atual + $anterior;
$i=1;
$n =(int) $_POST['txtNum'];
echo($atual.". ");

do {
    $anterior = $atual;
    $atual = $proximo;
    $proximo = $anterior + $atual;
    echo($atual.".  ");
    $i++;
} while ($i<$n);
echo ("<br><button><a href=index.php>Home</a></button><br>");

?>