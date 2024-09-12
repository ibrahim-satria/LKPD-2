<?php

// Mulai loop luar dengan variabel $i dimulai dari 1 hingga kurang dari 10
for ($i = 1; $i < 10; $i++) {
    // Mulai loop dalam dengan variabel $j dimulai dari 0 hingga kurang dari 8
    for ($j = 0; $j < 8; $j++) {
        // Mengecek apakah $i adalah kelipatan dari 5
        if ($i % 5 == 0) {
            // Jika $i adalah kelipatan dari 5, tidak ada yang ditampilkan
            echo "";
        } else {
            // Jika $i bukan kelipatan dari 5, tampilkan karakter "*"
            echo "*";
        }
    }
    // Setelah selesai dengan loop dalam, tambahkan baris baru
    echo "<br>";
}
?>
