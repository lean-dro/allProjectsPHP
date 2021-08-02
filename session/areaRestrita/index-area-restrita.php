<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        #include inclui o texto;
        #require(orientado a objetos) ele usa apenas, não o inclui;
        #include 2x na mesma pagina = erro
        #include once: usa apenas um se tiver mais
        include_once("valida-sentinela.php");
    ?>
    <h1>Bem vindos, boas compras</h1>
    <a href="../logout.php">Sair</a>
</body>
</html>