<?php 

echo("<style>
    p{text-align: justify;}
    a{text-decoration-line: none}
</style>");

echo("<h1 style=text-align:center;>Exercício 6</h1>");

$numero = (double) $_POST['txtNum'];
$i = 1;
$divisor;
for ($i=1; $i <= $numero; $i++) { 
    if ($numero%$i==0) {
       $divisor = $i;
       echo($divisor." é divisor de ".$numero."<br>");
    }
}
echo ("<br><button><a href=index.php>Home</a></button><br>");

?>