<?php
$tipo_usuario = array('2'); //aca valido que solo entren los que tienen el rol 2
require_once "validar_acceso.php";
require_once "expediente.php";
try {
  if ((isset($_GET['keyword'])) and (trim($_GET['keyword']))){
    //aca va la llamada a twig y la vista
    $expedientes = Expediente::obtener_expedientes_campo("","",$_GET['keyword'],"");
    $display_parameter = array('list' => $expedientes);
    $template_parameter = "expedientes_listado_vista.twig"; 
    require "vista.twig.php";
  }
  else {
    echo "no hay expedientes con esa keyword\n";
  }
} 
catch (Exception $e){
  die ('ERROR: ' . $e->getMessage());
}
?>