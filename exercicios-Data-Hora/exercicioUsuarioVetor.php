<html>
<head>
    <meta charset="UTF-8">
    <title>Exercício 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

</head>
<body>
<?php
$nome = $_POST['txtNome'];
$cpf = $_POST['txtCpf'];
$dataNasc = $_POST['dtNasc'];

$dtFormatada = date_create($dataNasc);

$vetor = array(
    $nome,
    $cpf,
    $dataNasc
);

for ($i=0; $i < 1; $i++) { 
   print('<p class="fs-3">Nome: '.$nome.'<br>
   Data de nascimento: '.date_format($dtFormatada, 'd/m/Y').
   '<br>CPF: '.$cpf.'</p>');   
}
echo '<button class="btn btn-dark"><a class="text-decoration-none" href=index.html>Voltar para home</a></button>';
?>    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>    

</body>
</html>
