<?php
//incluir archivos
require_once "config/database.php";

require_once "controllers/proyectoController.php";

$controlador =new proyectoController();
$controlador->index();
?>
