<?php 
   header("Location: index.php");

   $categoria = $_POST['slCategoria'];

   setcookie('idcategoria',$categoria);

?>