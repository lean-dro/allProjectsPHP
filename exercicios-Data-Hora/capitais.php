<html>
<head>
    <meta charset="UTF-8">
    <title>Exercício 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

</head>
<body>
<?php 
$capitais = array(
    'PE'=>'Recife',
    'CE'=>'Fortaleza',
    'BA'=>'Salvador',
    'RJ'=>'Rio de Janeiro',
    'SP'=>'São Paulo',
    'PA'=>'Belém',
    'MA'=>'São Luis',
    'MG'=>'Belo Horizonte',
    'AC'=>'Rio Branco',
    'PR'=>'Curitiba'
);
echo '<table class="table">
<tr>
<th>SIGLA</th>
<th>CAPITAL</th>
</tr>';
foreach($capitais as $estados => $value) {
    echo 
        '<tr>
        <td>'.$estados.'</td>
        <td>'.$value.'</td>
        <tr>
        </table';
}
?>
<button class="btn btn-dark"><a class="text-decoration-none" href=index.html>Voltar para home</a></button>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>    
</body>
</html>