<?php
// Cấu hình kết nối PDO
$host = 'db';
$db   = 'product_db';
$user = 'user';
$pass = 'password';
$charset = 'utf8mb4';

// DSN kết nối PDO MySQL
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

// Tùy chọn PDO
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, // lỗi ném ngoại lệ
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,       // fetch dạng mảng kết hợp
    PDO::ATTR_EMULATE_PREPARES   => false,                  // dùng chuẩn prepare thực sự
];

// Tạo đối tượng PDO
$pdo = new PDO($dsn, $user, $pass, $options);

$stmt = $pdo->query("SELECT * FROM product");
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Product List</h1>
    <?php foreach ($products as $product) : ?>
        <h2><?php echo htmlspecialchars($product['name']); ?></h2>
        <p><?php echo htmlspecialchars($product['description']); ?></p>
    <?php endforeach; ?>
</body>
</html>
