<?php
namespace App\Controllers;

class CookieController  
{
    public function __construct()
    {
        //echo "en ProductController<br>";
    }
    public function index()
    {
        echo "a quie estan las cookies";
        $usuarios = $_COOKIE["usuario"];
        echo $usuarios;
    }
        
    public function usuario()
    {
        include "../views/cookie/crear.php";
    }
    public function guardar()
    {
        $usuario  = $_POST['nombre'];
        setcookie('usuario',$usuario, time() +1500 );
        header('Location: /cookie/index');
       
    }
}