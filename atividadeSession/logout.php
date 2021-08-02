<?php
session_start();

unset($_SESSION['user-session']);
unset($_SESSION['pw-session']);
session_destroy();
header("Location: index.php");
?>