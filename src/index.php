<?php

require_once __DIR__.'/configuracion/config.php';
require_once __DIR__.'/configuracion/configdb.php';

if (isset($_GET["controller"])) {
    $nombreControlador = $_GET["controller"];
} else {
    $nombreControlador = constant("DEFAULT_CONTROLLER");
}

$metodo = $_GET["action"] ?? '';

$rutaCont = __DIR__.'/controlador/'.$nombreControlador.'.php';

require_once $rutaCont;
$nombreClaseControlador = "Controller";
$controlador = new $nombreClaseControlador();

$datosVista["data"] = array();
if (method_exists($controlador, $metodo)) $datosVista["data"] = $controlador->{$metodo}();

require_once __DIR__.'/vista/'.$controlador->vista.'.php';