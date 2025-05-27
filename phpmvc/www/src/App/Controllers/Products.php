<?php
namespace App\Controllers;
use App\Models\Product;
class Products{
    public function index(){
        $product = new Product();
        $products = $product->getData();
        require_once 'src/views/product_index.php';
    }
    public function show(){
        require_once 'src/views/product_show.php';
    }
}