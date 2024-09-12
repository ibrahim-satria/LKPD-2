<?php

// Mendefinisikan array dengan beberapa elemen string, termasuk duplikat
$array1 = ["pplg", "htl", "kln", "pmn", "pplg", "htl"];

// Menggabungkan array (di sini hanya satu array yang diberikan, jadi hasilnya tetap sama)
// array_merge biasanya digunakan untuk menggabungkan beberapa array, tetapi 
// jika hanya satu array yang diberikan, hasilnya sama dengan array itu sendiri.
$combined_array = array_merge($array1);

// Menghapus elemen duplikat dari array yang digabungkan
// array_unique mengembalikan array dengan elemen-elemen unik, 
// menghapus semua elemen yang muncul lebih dari satu kali.
$unique_array = array_unique($combined_array);

// Mengurutkan array hasil unique dalam urutan menurun berdasarkan nilai
// arsort mengurutkan array dalam urutan menurun, menjaga kunci asosiatif jika ada
arsort($unique_array);

// Mengiterasi melalui array unik yang sudah diurutkan
// Menggunakan foreach untuk menampilkan setiap nilai dalam array
foreach ($unique_array as $value) {
    // Menampilkan setiap nilai di layar diikuti dengan baris baru (\n)
    echo $value."\n";
}
?>
