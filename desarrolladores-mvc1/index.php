<?php

//Incluir los archivos 
require_once "config/database.php";

require_once "controllers/ProyectoController.php";
$controlador=new ProyectoController();
$controlador->index();
?>




