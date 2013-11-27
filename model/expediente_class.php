<?php

class Expediente
  {
   private $id_usuario;
   private $username;
   private $password;
   private $causante;
   private $extracto;
   private $personas; //array de personas
   private $keywords; //array de keywords
   private $rol;
   private $activo;

  public function init($id_usuario, $username, $password, $causante, $extracto, $personas, $keywords, $rol)
    {
    $this->id_usuario = $id_usuario;  
    $this->username = $username;
    $this->password = $password;
    $this->causante = $causante;
    $this->extracto = $extracto;
    $this->personas = $personas;
    $this->keywords = $keywords;
    $this->rol = $rol;
    }

  public function setId_usuario($id_usuario)
    {
    $this->id_usuario = $id_usuario;
    return $this;
    }

  public function getId_usuario()
    {
    return $this->id_usuario;
    }

  }

?>
