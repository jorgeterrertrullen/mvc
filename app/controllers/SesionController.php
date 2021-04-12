<?php
namespace App\Controllers;

class SesionController 
{
    public function __construct()
    {
        session_start();
    }

    public function usuario()
    {
        include('../views/sesion/crear.php');
    }

    public function guardar()
    {
        $usuario = $_POST['usuario'];
        $_SESSION['usuario'] = $usuario;
        header('Location: /sesion/index');
    }

    public function index()
    {
        $usuario = $_SESSION['usuario'];
        echo $usuario;
        include('../views/sesion/index.php');
    }
}