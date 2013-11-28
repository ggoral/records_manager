<?php

require_once "connection.php";

$expediente = array(
  "id_expediente" => "",
  "causante" => "",
  "extracto" => "",
  "personas" => array("Gonzalo", "Jonatan", "Agustin"),
  "keywords" => array("foo", "bar", "hallo", "world"),
   ); 

// $expediente["id_usuario"] = seter
// $expediente["id_usuario"]
// array_search("keyword",$expediente["keywords"]);
//echo array_search("foo",$expediente["keywords"]);
//echo in_array("fo",$expediente["keywords"]);


class Expediente {

public static function obtener_expediente($id_expediente){
  $conexion = new Conexion();
  $row = $conexion->consulta_fetch("SELECT * FROM expediente WHERE id_expediente=?",array($id_expediente));
  return $row;
  } 

public static function obtener_expedientes(){
  $conexion = new Conexion();
  $row = $conexion->consulta("SELECT * FROM expediente");
  return $row;
  } 

public static function obtener_keywords($id_expediente){
  $conexion = new Conexion();
  $row = $conexion->consulta("SELECT k.keyword 
                              FROM keyword AS k 
                              INNER JOIN expediente AS e on  k.id_keyword = e.keyword
                              WHERE e.id_expediente = ?",array($id_expediente));
  return $row;
  } 
}

//$expediente = Expediente::obtener_expediente("1");
//var_dump($expediente);

$expedientes = Expediente::obtener_expedientes();
var_dump($expedientes);

?>
