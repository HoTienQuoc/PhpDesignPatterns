<?php
namespace App\Models;

use App\Database;

class Product{
    public function __construct(private Database $database){

    }

    public function getData(): array{
        $pdo = $this->database->getConnection();

        $stmt = $pdo->query("SELECT * FROM product");
        $products = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $products;
    }
}