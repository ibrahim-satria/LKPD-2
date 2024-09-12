<?php

$pembelian = 130000;
$day = date("l");
$totalBayar = 0;

if ($pembelian > 100000) {
    if ($day == "Tuesday") {
        // Mengurangi 7% dari total pembelian
        $totalBayar = $pembelian - ($pembelian * 7 / 100);
        // Mengurangi tambahan 5% dari total pembelian setelah 7%
        $totalBayar -= ($pembelian * 5 / 100);
    } else {
        // Mengurangi 7% dari total pembelian untuk hari selain Selasa
        $totalBayar = $pembelian - ($pembelian * 7 / 100);
    }
} else {
    // Jika pembelian kurang dari atau sama dengan 100,000, tidak ada diskon
    $totalBayar = $pembelian;
}

echo "Tanggal hari ini: " . $day . "<br>";
echo "Total pembelanjaan: " . number_format($pembelian, 0, '.', '.') . "<br>";
echo "Total yang harus dibayar: " . number_format($totalBayar, 0, '.', '.');
?>
