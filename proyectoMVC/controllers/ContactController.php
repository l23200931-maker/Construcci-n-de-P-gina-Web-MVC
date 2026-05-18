<?php
require_once "models/ContactModel.php";

class ContactController {

    public function procesarFormulario() {

        $nombre = $_POST["nombre"];
        $correo = $_POST["correo"];
        $telefono = $_POST["telefono"];
        $mensaje = $_POST["mensaje"];

        if(strlen($mensaje) < 10){
            $error = "El mensaje debe tener mínimo 10 caracteres.";
            include "views/form.php";
            return;
        }

        $fecha = date("d/m/Y");
        $hora = date("H:i:s");

        $modelo = new ContactModel();
        $modelo->guardarDatos($nombre, $correo, $telefono, $mensaje, $fecha, $hora);

        include "views/result.php";
    }
}
?>