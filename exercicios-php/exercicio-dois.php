<?php 

echo("<style>
    p{text-align: justify;}
    a{text-decoration-line: none}
</style>");

echo("<h1 style=text-align:center;>Exercício 2</h1>");

$nome = $_POST['txtNome'];
$salarioAtual =(double)$_POST['txtSalario'];
$salarioAumento;
$departamento = (int)$_POST['slDep'];

if ($departamento == 1) {
    $salarioAumento = ($salarioAtual*15)/100 + $salarioAtual;
    echo("Caro funcionário ".$nome." do departamento Operacional (15% de aumento), seu aumento foi de R$".$salarioAtual." para R$".$salarioAumento);
}
else if ($departamento==2) {
    if ($salarioAtual < 1500) {
        echo("Caro funcionário ".$nome.", não há aumentos disponíveis para este salário.");
    }
    else if ($salarioAtual < 1750) {
        $salarioAumento = ($salarioAtual*12)/100 + $salarioAtual;
        echo("Caro funcionário ".$nome." do departamento de Desenvolvimento (12% de aumento), seu aumento foi de R$".$salarioAtual." para R$".$salarioAumento);

    }elseif ($salarioAtual < 2000) {
        $salarioAumento = ($salarioAtual*10)/100 + $salarioAtual;
        echo("Caro funcionário ".$nome." do departamento de Desenvolvimento (10% de aumento), seu aumento foi de R$".$salarioAtual." para R$".$salarioAumento);

    }elseif ($salarioAtual < 3000) {
        $salarioAumento = ($salarioAtual*7)/100 + $salarioAtual;
        echo("Caro funcionário ".$nome." do departamento de Desenvolvimento (7% de aumento), seu aumento foi de R$".$salarioAtual." para R$".$salarioAumento);

    }else {
        $salarioAumento = ($salarioAtual*5)/100 + $salarioAtual;
        echo("Caro funcionário ".$nome." do departamento de Desenvolvimento (5% de aumento), seu aumento foi de R$".$salarioAtual." para R$".$salarioAumento);
    }
    
}
else {
    echo("Departamento não registrado");
}
echo ("<br><button><a href=index.php>Home</a></button><br>");
?>