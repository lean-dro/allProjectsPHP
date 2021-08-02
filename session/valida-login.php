<?php 

$login = $_POST['txtLogin'];
$senha = $_POST['txtSenha']; 

    if (($login == 'adm') && ($senha == '123')) {
        session_start();
        $_SESSION['login-session'] = $login;
        $_SESSION['senha-session'] = $senha;
        header("Location: areaRestrita/index-area-restrita.php");
    }
    else {
        header("Location: index.php");
    }


?>