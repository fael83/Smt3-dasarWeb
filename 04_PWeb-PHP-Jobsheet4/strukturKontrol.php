<?php
$nilaiNumerik = 92;

if ($nilaiNumerik >= 90 && $nilaiNumerik <=100) {
    echo "Nilai huruf: A";
} elseif ($nilaiNumerik >= 80 && $nilaiNumerik <90) {
    echo "NIlai huruf: B";
} elseif ($nilaiNumerik>= 70 && $nilaiNumerik <80) {
    echo "Nilai huruf: C";
} elseif ($nilaiNumerik < 70) {
    echo "Nilai huruf: D";
}

echo "<br> <br>";

$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;

while ($jarakSaatIni < $jarakTarget) {
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
}

echo "Jarak target adalah $jarakTarget km <br>";
echo "Peningkatan jarak per hari $peningkatanHarian km <br>";
echo "Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500 kilometer. <br>";
echo "Jarak yang dicapai $jarakSaatIni km <br>";

echo "<br>";

$jumlahLahan = 10;
$tanamanPerlahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;

for ($i=1; $i <= $jumlahLahan; $i++) { 
    $jumlahBuah += ($tanamanPerlahan * $buahPerTanaman);
}

echo "Jumlah lahan: $jumlahLahan <br>";
echo "Jumlah tanaman per lahan: $tanamanPerlahan <br>";
echo "Jumlah buah per tanaman: $buahPerTanaman <br><br>";
echo "Jumlah buah yang akan dipanen adalah: $jumlahBuah <br>";
echo "<br>";

$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;

foreach ($skorUjian as $skor) {
    $totalSkor += $skor;
}

$jumlahUjian = count($skorUjian);
$rataRata = $totalSkor / $jumlahUjian;
echo "Total skor ujian adalah: $totalSkor <br>";    
echo "Rata-rata skor ujian: $rataRata <br>";
echo "<br>";

$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];
$totalLulus = 0;
$totalTidakLulus = 0;
foreach ($nilaiSiswa as $nilai) {
    if ($nilai < 60) {
        echo "Nilai: $nilai (Tidak lulus) <br>";
        $totalTidakLulus++;
        continue;
    }
    echo "Nilai: $nilai (Lulus) <br>";
    $totalLulus++;
}   

echo "Total siswa yang lulus: $totalLulus <br>";
echo "Total siswa tidak lulus: $totalTidakLulus <br>";
echo "<br>";

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