<?php
$totalKursi = 45;
$kursiDiduki = 28;
$kursiTersisa = $totalKursi - $kursiDiduki;
$bagiKursiSisaDenganTotalKursi = $kursiTersisa / $totalKursi;
$hasil = $bagiKursiSisaDenganTotalKursi * 100;

echo "Total Kursi = {$totalKursi} <br>";
echo "Kursi Yang Diduki = {$kursiDiduki} <br>";
echo "Kursi Yang Tersisa = {$kursiTersisa} <br>";
echo "Persentase Kursi Yang Masih Kosong = {$hasil} <br>";
?>