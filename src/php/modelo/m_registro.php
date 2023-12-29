<?php

session_start();
require_once __DIR__.'/conexion.php';

class Modelo extends Conexion {


    public function __construct() {
        parent::__construct();
    }

    function registro($correo, $pass, $nombre) {
        $stmt = $this->conexion->prepare("INSERT INTO usuario (correo, contrasenia, nombre) VALUES (?, ?, ?)");

        $stmt->bind_param("sss", $correo, $pass, $nombre);

        $stmt->execute();

        $stmt->close();
    }

    function inicio_sesion($correo, $pass) {
        $stmt = $this->conexion->prepare("SELECT id, correo, contrasenia, nombre, oro FROM usuario WHERE correo = ?");
        $stmt->bind_param("s", $correo);
    
        if ($stmt->execute()) {
            $resultado = $stmt->get_result();
    
            if ($resultado && $resultado->num_rows > 0) {
                $fila = $resultado->fetch_assoc();
    
                if (password_verify($pass, $fila['contrasenia'])) {
                    $_SESSION["id"] = $fila["id"];
                    $_SESSION["correo"] = $fila["correo"];
                    $_SESSION["nombre"] = $fila["nombre"];
                    $_SESSION["oro"] = $fila["oro"];

                    header("location:../../index.php?controlador=c_sesion");
                    exit;
                } else {
                    echo "Contraseña no coincide";
                }
            } else {
                echo "Correo no encontrado";
            }
        } else {
            echo "Error de consulta";
        }
    
        $stmt->close();
    }
    
}
?>
