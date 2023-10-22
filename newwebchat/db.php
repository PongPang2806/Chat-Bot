<?php
$dsn = 'mysql:host=localhost;dbname=db_chat';
$username = 'root';
$password = '';

try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("เกิดข้อผิดพลาดในการเชื่อมต่อกับฐานข้อมูล: " . $e->getMessage());
}
?>