<?php
class proyecto
{
    private $db;
    private $proyectos;

    public function __construct()
    {
        $this ->db=conexion::conectar();
        $this->proyectos = array();
    }
    /**listar todos los registros de la tabla */
    public function listar()
    {
        $sql = "SELECT *from proyecto";
        $resultado=$this->db->query($sql);
        
        if (!$resultado) {
            echo "Estamos experimentando problemas, por favor intente más tarde." . PHP_EOL;
            // Esto es para nosotros mientras desarrollamos
            echo "error en consulta:$sql".PHP_EOL;
            echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
            echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
            exit;
    }
    //si todo esta bien:
    while($row = $resultado->fetch_assoc())
    {
        $this->proyectos;
    }
    return $this->proyectos;
    }
    
    
}

?>