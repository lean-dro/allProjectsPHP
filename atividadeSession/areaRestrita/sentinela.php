<?php
session_start();
if ( ($_SESSION['user-session'] !='adm' ) || ($_SESSION['pw-session'] !=1234 ) ) {
    header("Location: ../index.php");
}
?>