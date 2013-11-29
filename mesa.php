<?php
$tipo_usuario = array('1');
require_once "validar_acceso.php";
require_once "expediente.php";

try {
  if ((isset($_GET['id_expediente']) and trim($_GET['id_expediente'])) or
   ((isset($_GET['causante']) and trim($_GET['causante']))) or
   ((isset($_GET['extracto']) and trim($_GET['extracto']))) or
   ((isset($_GET['persona']) and trim($_GET['persona']))) or
   ((isset($_GET['keyword']) and trim($_GET['keyword'])))) {
    
    if (isset($_GET['id_expediente']) and trim($_GET['id_expediente'])) {
    $expedientes = Expediente::obtener_expedientes_clave_valor($_GET['id_expediente']);;
    }
    else {
    $expedientes = Expediente::obtener_expedientes_campo($_GET['causante'],$_GET['persona'],$_GET['keyword'],$_GET['extracto']);
    }

    $display_parameter = array('list' => $expedientes);
    $template_parameter = "expedientes_listado_vista.twig"; 
    require "vista.twig.php";   
    
  }
  else {
    echo "estan todas vacias!";
  }  
} 
catch (Exception $e){
  die ('ERROR: ' . $e->getMessage());
}
?>