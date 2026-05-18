<?php

class ContactModel {

    public function guardarDatos($nombre, $correo, $telefono, $mensaje, $fecha, $hora){

        $texto = "Nombre: $nombre
Correo: $correo
Telefono: $telefono
Mensaje: $mensaje
Fecha: $fecha
Hora: $hora
---------------------------\n";

        file_put_contents("data/mensajes.txt", $texto, FILE_APPEND);
    }
}
?>