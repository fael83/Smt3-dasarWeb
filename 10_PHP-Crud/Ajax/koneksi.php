<?php 
define('HOST', 'localhost');
define('USER', 'postgres');
define('PORT', '5433');
define('PASS', '123');
define('DB1', 'prakwebdb');

try {
    $db1 = new PDO("pgsql:host=" . HOST . ";port=" . PORT . ";dbname=" . DB1, USER, PASS);
    $db1->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Koneksi gagal: " . $e->getMessage());
}
?>
