<?php
namespace App\Controllers;
use App\Models\Product;
use Framework\Viewer;

class Products{
    public function index(){
        $product = new Product();
        $products = $product->getData();

        $viewer = new Viewer();
        echo $viewer->render("product_index.php",["products"=>$products]);
    }
    public function show(string $id){
        require_once 'src/views/product_show.php';
    }
    public function showPage(string $title, string $id, string $page){
        echo $title, " ", $id, " ", $page;
    }
}