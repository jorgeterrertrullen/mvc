<?php
namespace App\Controllers;

require_once('../app/models/Product.php');
require_once('../app/models/ProductType.php');
use App\Models\Product;
use App\Models\ProductType;

class ProductController  
{
    public function __construct()
    {
       // echo "en ProductController<br>";
    }
    public function index()
    {
       // echo "En método index<br>";
       $products= Product::all();
       include "../views/product/index.php";

    }
    public function create()
    {
        //echo "crear un con";
        $types = ProductType::all();

        //var_dump($types);
        //exit();

        include('../views/product/create.php');
    }

    public function show($arguments)
    {
        $id = $arguments[0];       
        $product = Product::find($id);
        include('../views/product/show.php');
        
    }

    public function delete($arguments)
    {
        $id = $arguments[0];
         $user = Product::find($id);
         $user->delete();
        header('Location: /product');
        echo "Borrar el usuario $id";        
    }


    public function store()
    {
        $product = new Product;

        $product->name =$_POST ["name"];
        $product->type_id =$_POST ["type_id"];
        $product->price =$_POST ["price"];

        //var_dump($product);
        $product -> insert();

        header("Location: /product/show/$product->id");

        
    }

    public function edit($arguments){
        echo "edit";

        $id = $arguments[0];       
        $product = Product::find($id);
        $types = ProductType::all();

        include ("../views/product/edit.php");
    }

    public function update($arguments){

        $id = $arguments[0];
        $product = Product::find($id);
        
        $product->name =$_POST ["name"];
        $product->type_id =$_POST ["type_id"];
        $product->price =$_POST ["price"];


        $product->save();

        header('Location: /product');
    }

}
