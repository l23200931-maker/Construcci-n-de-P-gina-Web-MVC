<?php
require_once "controllers/ContactController.php";

$controller = new ContactController();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $controller->procesarFormulario();
} else {
    include "views/form.php";
}
?>