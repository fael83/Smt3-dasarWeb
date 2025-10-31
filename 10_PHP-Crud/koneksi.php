<?php 
$koneksi = pg_connect("host=localhost port=5433 dbname=prakwebdb user=postgres password=123");

if (!$koneksi) {
    die("Koneksi database gagal: " . pg_last_error()); //Call to unknown function: 'pg_last_error'//
}
?>