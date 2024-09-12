<?php

// Mulai loop dengan variabel $i dimulai dari 1 hingga kurang dari 30
for ($i = 1; $i < 30; $i++) {
    // Mengecek apakah 90 dapat dibagi dengan $i tanpa sisa (90 % $i == 0)
    if (90 % $i == 0) {
        // Jika kondisi di atas benar, maka tampilkan hasil pembagian 90 dengan $i
        // round() digunakan untuk membulatkan hasil pembagian ke angka bulat terdekat
        echo "90 : $i = " . round(90 / $i) . "<br>";
    }
}
?>
