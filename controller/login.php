<?php
session_start();

require_once "../model/usuario.php";

try {
  if (((isset($_POST['user'])) and (trim($_POST['user']))) and ((isset($_POST['pass']))and(trim($_POST['pass']))))
    {
    $usuario = usuario::login($_POST['user'],$_POST['pass']);
    if ($usuario){
      //require "access_granted.php";
      $_SESSION['usuario'] = $usuario;
      echo ($usuario['rol'] == 1);die();
      if ($usuario['rol'] == 1){
        require "view/mesa_form.php";  
      }
      elseif ($usuario['rol'] == 2) {
        require "view/visitante_form.php";   
      }
            
      }
    else {
      require "access_denied.php";
      }
    }
  else {
    require "../view/login_form.php"; 
    } 
} 
catch (Exception $e){
  die ('ERROR: ' . $e->getMessage());
}
?>
