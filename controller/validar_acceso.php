<?php
session_start();
var_dump($_SESSION['usuario']);
var_dump($tipo_usuario);
die();
if ((array_key_exists('usuario', $_SESSION)) && 
    (in_array($_SESSION['usuario']['rol'], $tipo_usuario))) {
  $usuario = $_SESSION['usuario'];
  }
else { 
  echo "inicie session";
  header("location: /records_manager/index.php");
  }
?>