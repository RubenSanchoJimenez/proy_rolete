<?php
require_once __DIR__.'/../modelo/m_menu_inicio.php';

class Controlador {
    public $modelo;
    public $vista;

    public function __construct() {
        $this->modelo = new Modelo();
        $this->vista = "v_menu_inicio";
    }

    function cerrar_sesion(){
        $this->modelo->cerrar_sesion();
    }
}
