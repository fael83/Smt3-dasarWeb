<?php
$hargaProduk = 120000; 
$diskon = 0.2;    
$hargaMinimumDiskon = 100000; 

if ($hargaProduk > $hargaMinimumDiskon) {
    $jumlahDiskon = $hargaProduk * $diskon;
} else {
    $jumlahDiskon = 0;
}

$hargaDibayar = $hargaProduk - $jumlahDiskon;

echo "Harga produk: Rp $hargaProduk <br>";
echo "Diskon: Rp $jumlahDiskon <br>";
echo "Harga yang harus dibayar: Rp $hargaDibayar <br>";
?>