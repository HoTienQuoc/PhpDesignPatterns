<?php
    require_once 'model.php';
    $model = new Model();
    $products = $model->getData();
    require_once 'view.php';
?>

