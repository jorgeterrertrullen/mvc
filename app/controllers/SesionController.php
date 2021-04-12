<?php
namespace App\Controllers;

class SesionController  
{
    public function __construct()
    {
        //echo "en ProductController<br>";
        session_start();
    }
    public function index()
    {
        echo "a quie estan las sesiones";
        $usuarios = $_SESSION["nombre"];
        echo $usuarios;
    }
        
    public function usuario()
    {
        include "../views/sesion/crear.php";
    }
    public function guardar()
    {
        $usuario  = $_POST['nombre'];
        $_SESSION["nombre"] = $usuario;

        header('Location: /sesion/index');
       
    }
}