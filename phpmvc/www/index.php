<?php
// Cấu hình kết nối PDO
$host = 'db';
$db   = 'mydb';
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

try {
    // Tạo đối tượng PDO
    $pdo = new PDO($dsn, $user, $pass, $options);
    echo "Kết nối thành công đến MySQL!";
} catch (\PDOException $e) {
    // Bắt lỗi kết nối
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}
