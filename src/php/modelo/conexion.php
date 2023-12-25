<?php

class Conexion{

    public $conexion = null;

    public function __construct(){
        include __DIR__.'/../configuracion/configdb.php';
        
        $this->conexion = new mysqli($servidorbd, $usuario, $contraseña, $basedatos);
        $this->conexion->set_charset("utf8");
    }
}