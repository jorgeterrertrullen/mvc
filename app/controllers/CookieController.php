<?php
namespace App\Controllers;

class CookieController 
{
    public function __construct()
    {
        
    }

    public function usuario()
    {
        include('../views/cookie/crear.php');
    }

    public function guardar()
    {
        $usuario = $_POST['usuario'];
        setcookie('usuario', $usuario, time() + 3500);
        header('Location: /cookie/index');
    }

    public function index()
    {
        $usuario = $_COOKIE['usuario'];
        echo $usuario;
        include('../views/cookie/index.php');
    }
}
