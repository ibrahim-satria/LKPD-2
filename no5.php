<?php 

// Mendefinisikan dua array dengan nilai-nilai integer
$bil1 = [80, 77, 65, 89, 55, 12, 90, 86];
$bil2 = [77, 99, 55, 81, 45, 90, 91, 98];

// Menggabungkan dua array menjadi satu array
$merge = array_merge($bil1, $bil2);

// Menghapus elemen yang duplikat dari array yang digabungkan
$unique = array_unique($merge);

// Mengurutkan array hasil unique dalam urutan menurun
arsort($unique);

// Menampilkan teks "Hasil : "
echo "Hasil : ";

// Menggabungkan elemen array menjadi satu string dengan koma sebagai pemisah
echo implode(',', $unique);
?>
