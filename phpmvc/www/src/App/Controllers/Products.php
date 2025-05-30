<?php
namespace App\Controllers;
use App\Models\Product;
use Framework\Viewer;

class Products{
    public function index(){
        $product = new Product();
        $products = $product->getData();

        $viewer = new Viewer();
        echo $viewer->render("Shared/header.php", ["title"=>"Products"]);
        echo $viewer->render("Products/index.php",["products"=>$products]);
    }
    public function show(string $id){
        $viewer = new Viewer();
        echo $viewer->render("Shared/header.php", ["title"=>"Products"]);
        echo $viewer->render("Products/show.php",[
            "id"=>$id
        ]);
    }
    public function showPage(string $title, string $id, string $page){
        echo $title, " ", $id, " ", $page;
    }
}