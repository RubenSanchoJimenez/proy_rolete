<?php
    require_once __DIR__.'/conexion.php';

    class Modelo extends Conexion{

        public function __construct() {
            parent::__construct();
        }

        function cerrar_sesion(){
            session_unset();
            session_destroy();
            session_start();
        }

    }