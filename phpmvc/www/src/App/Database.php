<?php
namespace App;

use PDO;

class Database{
    public function __construct(
        private string $host,
        private string $db, 
        private string $user, 
        private string $pass, 
        private string $charset
    ){

    }

    public function getConnection(): PDO{
        // Cấu hình kết nối PDO
        $this->host = 'db';
        $this->db   = 'product_db';
        $this->user = 'user';
        $this->pass = 'password';
        $this->charset = 'utf8mb4';

        // DSN kết nối PDO MySQL
        $dsn = "mysql:host=$this->host;dbname=$this->db;charset=$this->charset";

        // Tùy chọn PDO
        $options = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, // lỗi ném ngoại lệ
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,       // fetch dạng mảng kết hợp
            PDO::ATTR_EMULATE_PREPARES   => false,                  // dùng chuẩn prepare thực sự
        ];

        // Tạo đối tượng PDO
        return new \PDO($dsn, $this->user, $this->pass, $options);
    }
}