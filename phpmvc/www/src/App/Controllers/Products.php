<?php
namespace App\Controllers;
use App\Models\Product;
use Framework\Viewer;

class Products{
    public function __construct(private Viewer $viewer, private Product $model){

    }
    public function index(){
        $product = new Product();
        $products = $this->model->getData();

        echo $this->viewer->render("Shared/header.php", ["title"=>"Products"]);
        echo $this->viewer->render("Products/index.php",["products"=>$products]);
    }
    public function show(string $id){
        echo $this->viewer->render("Shared/header.php", ["title"=>"Products"]);
        echo $this->viewer->render("Products/show.php",[
            "id"=>$id
        ]);
    }
    public function showPage(string $title, string $id, string $page){
        echo $title, " ", $id, " ", $page;
    }
}