<?php
session_start();

if (array_key_exists('usuario', $_SESSION)) {
  $usuario = $_SESSION['usuario'];

  if ($usuario['rol'] == 1){
    require "mesa_form.php";  
  }
  elseif ($usuario['rol'] == 2) {
    require "visitante_form.php";   
  }
  
}
else{
  require "login_form.php"; // o hago el twig del amor
}
