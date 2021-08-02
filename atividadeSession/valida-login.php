<?php

session_start();

$user = $_POST['txtUser'];
$pw = $_POST['txtPw'];

$_SESSION['user-session'] = $user;
$_SESSION['pw-session'] = $pw;

if (($_SESSION['user-session']=='adm')&&($_SESSION['pw-session']==1234)) {
   header("Location: areaRestrita/index-AR.php");
}else {
    header("Location: index.php");
}


?>