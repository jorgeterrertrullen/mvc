<?php
namespace App\Controllers;

class UsuarioController  
{
    public function __construct()
    {
        //echo "en ProductController<br>";
    }
    public function index()
    {
        echo "index de usuiario";
    }
    public function crear()
    {
        //echo "crear un usuario";
        include "../views/usuario/crear.php";
    }
    public function mostrar()
    {
        $nombre  = $_REQUEST["name"];
        $apellido  = $_REQUEST["apellido"];
        if (isset($_REQUEST["aficiones"])) {
            $aficiones  = $_REQUEST["aficiones"];
        } else{
            $aficiones= [];
        }
        $sexo  = $_REQUEST["sexo"];

        include "../views/usuario/mostrar.php";
       
    }

    public function deseos(){

        $lista = $_POST["lista"];
        $deseo= $_POST["nuevodeseo"];
        $lista[] =$deseo;

    }
}
