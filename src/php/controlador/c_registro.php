<?php
require_once __DIR__.'/../modelo/m_registro.php';

class Controlador {
    public $modelo;
    public $vista;
    public $nombre;
    public $correo;
    public $pass;
    public $accion;

    public function __construct() {
        $this->modelo = new Modelo();
    }

    function procesarFormulario(){

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Obtener los datos del formulario

            if($_POST["accion"] == "r"){

                if(!empty($_POST["correo"]) && !empty($_POST["nombre"]) && !empty($_POST["pass"]) && $_POST["tyc"] == true){
                    $correo = $_POST["correo"];
                    $pass = password_hash($_POST["pass"], PASSWORD_DEFAULT);
                    $passOrigin = $_POST["pass"];
                    $nombre = $_POST["nombre"];

                    $this->modelo->registro($correo, $pass, $nombre);
                    $this->modelo->inicio_sesion($correo, $passOrigin);
            
                }else{

                }

            }else if($_POST["accion"] == "i"){

                if(!empty($_POST["correo"]) && !empty($_POST["pass"])){
                    $correo = $_POST["correo"];
                    $pass = $_POST["pass"];
                    
                    $this->modelo->inicio_sesion($correo, $pass);

                }else{

                }

            }else{

            }

        }

    }

}

$controlador = new Controlador();
$controlador->procesarFormulario();