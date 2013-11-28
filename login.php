<?php
session_start();

require_once "usuario.php";

try {
  if (((isset($_POST['user'])) and (trim($_POST['user']))) and ((isset($_POST['pass']))and(trim($_POST['pass']))))
    {
    $usuario = usuario::login($_POST['user'],$_POST['pass']);
    if ($usuario){
      
      $_SESSION['usuario'] = $usuario;
      if ($usuario['rol'] == 1){
        require "mesa_form.php";  
        }
      elseif ($usuario['rol'] == 2) {
        require "visitante_form.php";   
        }
            
      }
    else {
      require "access_denied.php";
      }
    }
  else {
    require "login_form.php"; 
    } 
} 
catch (Exception $e){
  die ('ERROR: ' . $e->getMessage());
}
?>
