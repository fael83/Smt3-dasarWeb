<?php
$nilaiMatematika = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];
sort($nilaiMatematika);
$totalNilai = 0;
$nilaiDigunakan = [];

echo "Nilai yang digunakan: ";
for ($i = 2; $i < count($nilaiMatematika) - 2; $i++) {
    $nilaiDigunakan[] = $nilaiMatematika[$i];
    $totalNilai += $nilaiMatematika[$i];
    echo "$nilaiMatematika[$i] ";
}

$rataRata = $totalNilai / count($nilaiDigunakan);
echo "<br>";
echo "Total semua nilai: $totalNilai <br>";
echo "Rata - Rata Nilai: $rataRata <br>";
?>