<?php 

echo("<style>
p{text-align: justify;}
a{text-decoration-line: none}
</style>");

echo("<h1 style=text-align:center;>Exercício 3</h1>");

$base =(double)$_POST['txtBase'];
$expoente =(double)$_POST['txtExp'];
$potencia = $base;
$i;

if ($expoente == 0) {
    echo ("Base = ".$base."<br> Expoente = ".$expoente."<br> Potência =  1");
}else {
    for ($i = 1; $i<$expoente; $i++) { 
        $potencia = $base * $potencia;
     }
     echo ("Base = ".$base."<br> Expoente = ".$expoente."<br> Potência =  ".$potencia);     
}
echo ("<br><button><a href=index.php>Home</a></button><br>");
?>