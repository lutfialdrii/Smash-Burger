<?php
$dbserver = "localhost";
$dbname = "id19103123_burger";
$dbuser = "id19103123_root";
$dbpassword = "cobaDatabase1_";
$dsn = "mysql:host={$dbserver};dbname={$dbname}";

$connection = null;
try {
    $connection = new PDO($dsn, $dbuser, $dbpassword);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    die("Koneksi Gagal: " . $e->getMessage());
}