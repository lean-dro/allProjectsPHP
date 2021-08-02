<?php
    header("Location: index.php");

    $categoria = $_POST['slcCategoria'];
    // 1 - Roupas | 2 - Sapatos
    setcookie('codcategoria', $categoria);
?>