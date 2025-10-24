<?php
$a = 10;
$b = 5;
echo "a = $a <br>";
echo "b = $b <br>";

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "Hasil Penjumlahan (a + b) = {$hasilTambah} <br>";
echo "Hasil Pengurangan (a - b) = {$hasilKurang} <br>";
echo "Hasil Perkalian (a * b) = {$hasilKali} <br>";
echo "Hasil Pembagian (a / b) = {$hasilBagi} <br>";
echo "Sisa Bagi (a % b) = {$sisaBagi} <br>";
echo "Hasil Pangkat (a ** b) = {$pangkat} <br>";

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo "Hasil Sama (a == b) = {$hasilSama} <br>";
echo "Hasil Tidal Sama (a != b) = {$hasilTidakSama} <br>";
echo "Hasil Lebih Kecil (a < b) = {$hasilLebihKecil} <br>";
echo "Hasil Lebih Besar (a > b) = {$hasilLebihBesar} <br>";
echo "Hasil Lebih Kecil Sama (a <= b) = {$hasilLebihKecilSama} <br>";
echo "Hasil Lebih Besar Sama (a >= b) = {$hasilLebihBesarSama} <br>";

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo "Hasil operator (And) = {$hasilAnd} <br>";
echo "Hasil operator (Or) = {$hasilOr} <br>";
echo "Hasil operator (NotA) = {$hasilNotA} <br>";
echo "Hasil operator (NotB) = {$hasilNotB} <br>";

$hasil1 = $a + $b; /*(a += b)*/
$hasil2 = $a - $b; /*(a -= b)*/
$hasil3 = $a * $b; /*(a *= b)*/
$hasil4 = $a / $b; /*(a /= b)*/
$hasil5 = $a % $b; /*(a %= b)*/

echo "Hasil dari (a += b) = {$hasil1} <br>";
echo "Hasil dari (a -= b) = {$hasil2} <br>";
echo "Hasil dari (a *= b) = {$hasil3} <br>";
echo "Hasil dari (a /= b) = {$hasil4} <br>";
echo "Hasil dari (a %= b) = {$hasil5} <br>";

$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

echo "Hasil Tidak Identik (a === b) = {$hasilIdentik} <br>";
echo "Hasil Tidak Identik (a !== b) = {$hasilTidakIdentik} <br>";
?>