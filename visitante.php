<?php
$tipo_usuario = array('2'); //aca valido que solo entren los que tienen el rol 2
require_once "validar_acceso.php";

try {
  echo "buscando";
  //$display_parameter = array();
  //$template_parameter = "map1.twig";
  //require 'vista.twig.php';  
  
} 
catch (Exception $e){
  die ('ERROR: ' . $e->getMessage());
}
?>