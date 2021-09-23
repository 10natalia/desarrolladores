<?php
class ProyectoController
{
    public function __construct()
    {
        require_once "models/Proyecto.php";
    }
    public function index()
    {
        $proyecto = new Proyecto();
        $data["proyectos"]=$proyecto->listar();
        $data["titulo"]="Proyectos";
        //cargar la vista 
        require_once "views/proyectos/index.php";
    }
}
?>
