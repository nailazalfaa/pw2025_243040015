<?php
// Luas Lingkaran
echo "<h4>Menghitung Luas Lingkaran </h4>";
function hitungLuasLingkaran($r)
{
    return 3.14 * $r * $r;
}
$rLuas = 10;
$luas = hitungLuasLingkaran($rLuas);
echo "Jari-jari = $rLuas cm.<br>";
echo "Luas lingkaran = $luas cm²<br>";

echo "<hr>";

// Keliling Lingkaran
echo "<h4>Menghitung Keliling Lingkaran</h4>";
function hitungKelilingLingkaran($r)
{
    return 2 * 3.14 * $r;
}
$rKeliling = 20;
$keliling = hitungKelilingLingkaran($rKeliling);
echo "Jari-jari = $rKeliling cm.<br>";
echo "Keliling lingkaran = $keliling cm<br>";

echo "<hr>";
