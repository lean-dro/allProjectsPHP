<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="https://image.flaticon.com/icons/png/512/112/112303.png" type="image/x-icon">
    <link rel="stylesheet" href="reset.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <style>
        body{
            background-color: #3F474F;
        }
        form{
            padding-bottom: 3%;
        }
        .cabecalho {
           background-color: #212529;    
           width: 100%; 
           padding-bottom: 4px;
        }
        .container-sm{
            background-color: white;
           
        }
        .form-label{
            font-family: 'Ubuntu', sans-serif;
            font-size: 18px;
        }
        .btn-btn-primary{
            background-color: #3D733D;
            color: white;
        }
        .caixaLogout{
            float: right;
            margin-top: -40px;
            width: 10%;
           
        }
        
    </style>
    <title>Livraria Coelho</title>
</head>
<body>
<?php
include_once("sentinela.php");
echo "<div class='cabecalho'><h1 class='text-center text-white fw-bolder'>Livraria Coelho</h1>
<h5 class='text-center text-white fw-bolder'>Bem vindo, Adm</h5>
<div class='caixaLogout'><button type='button' class='btn btn-outline-primary'><a href='../logout.php'>Sair</a></button>
</div></div>"
?>
<div class='caixaLogout'></div>
<br>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</body>
</html>