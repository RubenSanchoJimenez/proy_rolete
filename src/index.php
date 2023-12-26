<?php

require_once __DIR__.'/php/configuracion/config.php';
require_once __DIR__.'/php/configuracion/configdb.php';

if (isset($_GET["controlador"])) {
    $nombreControlador = $_GET["controlador"];
} else {
    $nombreControlador = constant("DEFAULT_CONTROLLER");
}

$metodo = $_GET["action"] ?? '';

$rutaCont = __DIR__.'/php/controlador/'.$nombreControlador.'.php';

require_once $rutaCont;
$nombreClaseControlador = "Controlador";
$controlador = new $nombreClaseControlador();

$datosVista["data"] = array();

if (method_exists($controlador, $metodo)){
    $datosVista["data"] = $controlador->{$metodo}();
}

require_once __DIR__.'/php/vista/'.$controlador->vista.'.php';
