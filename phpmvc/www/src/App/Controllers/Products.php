<?php
namespace App\Controllers;
use App\Models\Product;
class Products{
    public function index(){
        $product = new Product();
        $products = $product->getData();
        require_once 'src/views/product_index.php';
    }
    public function show(string $id){
        require_once 'src/views/product_show.php';
    }
    public function showPage(string $title, string $id, string $page){
        echo $title, " ", $id, " ", $page;
    }
}