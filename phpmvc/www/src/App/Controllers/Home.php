<?php
namespace App\Controllers;
use Framework\Viewer;

class Home{
    public function index(){
        $viewer = new Viewer();
        echo $viewer->render("Shared/header.php", ["title"=>"Home"]);
        echo $viewer->render("Home/index.php");
    }
}