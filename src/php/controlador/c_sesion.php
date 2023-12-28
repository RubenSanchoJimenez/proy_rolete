<?php
require_once __DIR__.'/../modelo/m_sesion.php';

class Controlador {
    public $modelo;
    public $vista;

    public function __construct() {
        $this->modelo = new Modelo();
        $this->vista = "v_sesion";
    }

}
